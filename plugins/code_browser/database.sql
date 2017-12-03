USE waynecas_code_browser;

CREATE TABLE applications
(
    id              INT UNSIGNED        NOT NULL AUTO_INCREMENT,
    name            VARCHAR(255)        NOT NULL,
    description     TEXT                NOT NULL,
    major_version   SMALLINT UNSIGNED   NOT NULL,
    minor_version   SMALLINT UNSIGNED   NOT NULL,
    git_hub_url     VARCHAR(255),
    PRIMARY KEY (id),
    UNIQUE KEY applications_name_unq (name),
    UNIQUE KEY applications_git_hub_url_unq (git_hub_url)
) 
COMMENT = 'Stores information about applications';

CREATE TABLE code_files
(
    id          INT UNSIGNED    NOT NULL AUTO_INCREMENT,
    git_hub_url VARCHAR(255)    NOT NULL,
    description TEXT            NOT NULL,

    PRIMARY KEY (id),
    UNIQUE KEY code_files_path_unq (git_hub_url)
) 
COMMENT = 'Stores information about code files';

CREATE TABLE applications_code_files
(
    application_id  INT UNSIGNED    NOT NULL,
    code_file_id    INT UNSIGNED    NOT NULL,
    
    PRIMARY KEY (application_id, code_file_id),
    FOREIGN KEY applications_fk (application_id) REFERENCES applications (id),
    FOREIGN KEY code_files_fk (code_file_id) REFERENCES code_files (id) 
        ON DELETE CASCADE
        ON UPDATE CASCADE
) 
COMMENT = 'Resolution table for many to many relationship between applications and code_files';

DELIMITER //
CREATE OR REPLACE PROCEDURE get_applications() 
BEGIN
	SELECT applications.id, applications.name, applications.description, applications.major_version, applications.minor_version, applications.git_hub_url
    FROM applications;
END //
DELIMITER ;

DELIMITER //
CREATE OR REPLACE PROCEDURE add_application(
    name            VARCHAR(255),
    description     TEXT,
    major_version   SMALLINT UNSIGNED,
    minor_version   SMALLINT UNSIGNED,
    git_hub_url     VARCHAR(255))
BEGIN
	INSERT INTO applications (applications.name, applications.description, applications.major_version, applications.minor_version, applications.git_hub_url) 
    VALUES (name, description, major_version, minor_version, git_hub_url);
END //
DELIMITER ;

DELIMITER //
CREATE OR REPLACE PROCEDURE update_application(
    old_name        VARCHAR(255),
    name            VARCHAR(255),
    description     TEXT,
    major_version   SMALLINT UNSIGNED,
    minor_version   SMALLINT UNSIGNED,
    git_hub_url     VARCHAR(255)) 
BEGIN
	UPDATE applications SET applications.name = name, 
                            applications.description = description, 
                            applications.major_version = major_version, 
                            applications.minor_version = minor_version, 
                            applications.git_hub_url = git_hub_url
    WHERE applications.name = old_name;
END //
DELIMITER ;

DELIMITER //
CREATE OR REPLACE PROCEDURE delete_application(name VARCHAR(255)) 
BEGIN
	DELETE FROM applications WHERE applications.name = name;
END //
DELIMITER ;

DELIMITER //
CREATE OR REPLACE PROCEDURE add_code_file(
    git_hub_url         VARCHAR(255),
	description         TEXT) 
BEGIN
    INSERT INTO code_files (code_files.git_hub_url, code_files.description) VALUES (git_hub_url, description);
END //
DELIMITER ;

DELIMITER //
CREATE OR REPLACE PROCEDURE add_code_file_to_application(
    git_hub_url         VARCHAR(255),
    application_name    VARCHAR(255),
	description         TEXT) 
BEGIN
    DECLARE application_id  INT DEFAULT 0;
	DECLARE code_file_id INT DEFAULT 0;

    
    SELECT id INTO application_id FROM applications WHERE applications.name = application_name;
    IF(application_id = 0) THEN
    	SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'Application does not exist';
    END IF;
    
    SELECT id INTO code_file_id FROM code_files WHERE code_files.git_hub_url = git_hub_url;
    IF(code_file_id = 0) THEN
    	INSERT INTO code_files (code_files.git_hub_url, code_files.description) VALUES (git_hub_url, description);
        SET code_file_id = LAST_INSERT_ID();
    END IF;
    
    INSERT INTO applications_code_files (applications_code_files.application_id, applications_code_files.code_file_id) VALUES (application_id, code_file_id);
END //
DELIMITER ;

DELIMITER //
CREATE OR REPLACE PROCEDURE update_code_file(
    old_url         VARCHAR(255),
    new_url         VARCHAR(255),
    description     TEXT) 
BEGIN
	UPDATE code_files SET code_files.git_hub_url = new_url, 
                          code_files.description = description
    WHERE code_files.git_hub_url = old_url;
END //
DELIMITER ;

DELIMITER //
CREATE OR REPLACE PROCEDURE delete_code_file(git_hub_url VARCHAR(255)) 
BEGIN
	DELETE FROM code_files WHERE code_files.git_hub_url = git_hub_url;
END //
DELIMITER ;

DELIMITER //
CREATE OR REPLACE PROCEDURE get_application_data(name VARCHAR(255)) 
BEGIN
	SELECT name, description, major_version, minor_version, git_hub_url FROM applications WHERE applications.name = name;
END //
DELIMITER ;

DELIMITER //
CREATE OR REPLACE PROCEDURE get_code_files() 
BEGIN
	SELECT code_files.id, code_files.git_hub_url, code_files.description FROM code_files;
END //
DELIMITER ;

DELIMITER //
CREATE OR REPLACE PROCEDURE get_code_files_for_application(name VARCHAR(255)) 
BEGIN
	SELECT code_files.git_hub_url, code_files.description FROM code_files
    INNER JOIN applications_code_files ON code_files.id = applications_code_files.code_file_id
    INNER JOIN applications ON applications_code_files.application_id = applications.id 
    WHERE applications.name = name;
END //
DELIMITER ;

CALL add_application('Code Browser', 'This is a php plugin which allows me to display code examples on a web page', 1, 0, 'https://github.com/wcassidy/PersonalSite');
CALL add_code_file_to_application('https://raw.githubusercontent.com/wcassidy/PersonalSite/master/header.php', 'Code Browser', 'The header of the web site template');
CALL add_code_file_to_application('https://raw.githubusercontent.com/wcassidy/PersonalSite/master/footer.php', 'Code Browser', 'The footer of the web site template');
CALL add_code_file_to_application('https://raw.githubusercontent.com/wcassidy/PersonalSite/master/functions.php', 'Code Browser', 'The php functions used by the web site template');
CALL add_code_file_to_application('https://raw.githubusercontent.com/wcassidy/PersonalSite/master/menu.html', 'Code Browser', 'A list of menu items for the main menu');
CALL add_code_file_to_application('https://raw.githubusercontent.com/wcassidy/PersonalSite/master/styles.html', 'Code Browser', 'A list of style (css) links for the web site template');
CALL add_code_file_to_application('https://raw.githubusercontent.com/wcassidy/PersonalSite/master/scripts.html', 'Code Browser', 'A list of scripts (js) links for the web site template');
CALL add_code_file_to_application('https://raw.githubusercontent.com/wcassidy/PersonalSite/master/style.scss', 'Code Browser', 'The main stylesheet (css) for web site template');

CALL get_applications();
CALL get_application_data('Code Browser');
CALL get_code_files_for_application('Code Browser');
