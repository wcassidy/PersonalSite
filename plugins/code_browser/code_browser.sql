CREATE OR REPLACE DATABASE code_browser;

CREATE OR REPLACE USER web_site IDENTIFIED BY 'choline';
GRANT SELECT, EXECUTE ON code_browser.* TO web_site;

USE code_browser;

CREATE TABLE web_pages
(
    id          INT UNSIGNED    NOT NULL AUTO_INCREMENT,
    path        VARCHAR(255)    NOT NULL,
    description TEXT            NOT NULL,
    
    PRIMARY KEY (id),
    UNIQUE KEY web_pages_path_unq (path)
) 
COMMENT = 'Stores information about web pages';

CREATE TABLE code_files
(
    id          INT UNSIGNED    NOT NULL AUTO_INCREMENT,
    path        VARCHAR(255)    NOT NULL,
    description TEXT            NOT NULL,

    PRIMARY KEY (id),
    UNIQUE KEY code_files_path_unq (path)
) 
COMMENT = 'Stores information about code files';

CREATE TABLE web_pages_code_files
(
    web_page_id     INT UNSIGNED    NOT NULL,
    code_file_id    INT UNSIGNED    NOT NULL,
    
    PRIMARY KEY (web_page_id, code_file_id),
    FOREIGN KEY web_pages_fk (web_page_id) REFERENCES web_pages (id),
    FOREIGN KEY code_files_fk (code_file_id) REFERENCES code_files (id) 
        ON DELETE CASCADE
        ON UPDATE CASCADE
) 
COMMENT = 'Resolution table for many to many relationship between web_pages and code_files';

DELIMITER //

CREATE OR REPLACE PROCEDURE add_page(
    path VARCHAR(255),
	description TEXT ) 
BEGIN
	INSERT INTO web_pages (web_pages.path, web_pages.description) VALUES (path, description);
END //

DELIMITER ;

DELIMITER //

CREATE OR REPLACE PROCEDURE add_code_file_to_page(
    path VARCHAR(255),
    page_path VARCHAR(255),
	description TEXT ) 
BEGIN
    DECLARE web_page_id  INT DEFAULT 0;
	DECLARE code_file_id INT DEFAULT 0;

    
    SELECT id INTO web_page_id FROM web_pages WHERE web_pages.path = page_path;
    IF(web_page_id = 0) THEN
    	SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'Web Page does not exist';
    END IF;
    
    SELECT id INTO code_file_id FROM code_files WHERE code_files.path = path;
    IF(code_file_id = 0) THEN
    	INSERT INTO code_files (code_files.path, code_files.description) VALUES (path, description);
        SET code_file_id = LAST_INSERT_ID();
    END IF;
    
    INSERT INTO web_pages_code_files (web_pages_code_files.web_page_id, web_pages_code_files.code_file_id) VALUES (web_page_id, code_file_id);
END //

DELIMITER ;

CALL add_page('/wcassidy/index.php', 'home page');
CALL add_code_file_to_page('/wcassidy/header.php', '/wcassidy/index.php', 'The header of the web site template');
CALL add_code_file_to_page('/wcassidy/footer.php', '/wcassidy/index.php', 'The footer of the web site template');
CALL add_code_file_to_page('/wcassidy/functions.php', '/wcassidy/index.php', 'The php functions used by the web site template');
CALL add_code_file_to_page('/wcassidy/menu.html', '/wcassidy/index.php', 'A list of menu items for the main menu');
CALL add_code_file_to_page('/wcassidy/styles.html', '/wcassidy/index.php', 'A list of style (css) links for the web site template');
CALL add_code_file_to_page('/wcassidy/scripts.html', '/wcassidy/index.php', 'A list of scripts (js) links for the web site template');
CALL add_code_file_to_page('/wcassidy/style.scss', '/wcassidy/index.php', 'The main stylesheet (css) for web site template');
CALL add_code_file_to_page('/wcassidy/plugins/lightbox/lightbox.css', '/wcassidy/index.php', 'The stylesheet for the lightbox');
CALL add_code_file_to_page('/wcassidy/plugins/lightbox/lightbox.js', '/wcassidy/index.php', 'The scripts for the lightbox');


DELIMITER //

CREATE OR REPLACE PROCEDURE get_page_data(path VARCHAR(255)) 
BEGIN
	SELECT path, description FROM web_pages WHERE web_pages.path = path;
END //

DELIMITER ;

CALL get_page_data('wcassidy/index.php');

DELIMITER //

CREATE OR REPLACE PROCEDURE get_code_files_for_page(path VARCHAR(255)) 
BEGIN
	SELECT code_files.path, code_files.description FROM code_files
    INNER JOIN web_pages_code_files ON code_files.id = web_pages_code_files.code_file_id
    INNER JOIN web_pages ON web_pages_code_files.web_page_id = web_pages.id 
    WHERE web_pages.path = path;
END //

DELIMITER ;

CALL get_code_files_for_page('wcassidy/index.php');
