<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);  // This enables proper exception handling for the mysql drivers

class code_browser
{
    // Data memebers
    private $host;
    private $username;
    private $password;
    private $database_name;
    
    // Helper Functions
    private function display_code($code_file)
    {
        $code_box_id = str_replace('https://raw.githubusercontent.com/wcassidy/', '', $code_file);
        $code_box_id = str_replace('/', '', $code_box_id);
        $code_box_id = str_replace('.', '', $code_box_id);

        echo('<a href="#' . $code_box_id . '" class="code_browser_button"  data-toggle="collapse">Show Code</a>');
        echo('<pre id="' . $code_box_id . '" class="prettyprint collapse code_browser"><xmp>');
        echo(file_get_contents($code_file));
        echo('</xmp></pre>');
    }

    // Construction / Destruction
    public function __construct()
    {
        $config = parse_ini_file('code_browser.ini');

        $this->host = $config['host'];
        $this->username = $config['username'];
        $this->password = $config['password'];
        $this->database_name = $config['database_name'];
        
    }
    
    // Interface Functions
    public function get_applications()
    {
        $mysqli = NULL;
        $applications = array();
        
        // Make a connection to the database
        $connection = new mysqli($this->host, $this->username, $this->password, $this->database_name);

        // Query the database for the applications
        $application_results = $connection->query("CALL get_applications()");

        // Add the applications to the array
        $index = 0;
        while($record = $application_results->fetch_assoc())
        {
            $applications[$index] = array(
                $record['name'],
                $record['major_version'],
                $record['minor_version'],
                $record['git_hub_url'],
                $record['description']
            );
            $index++;
        }
        $application_results->close();                             // Release the memory used by the results   
        $connection->next_result();                         // IMPORTANT: This clears the drivers result buffer

        // Always close the connection when you're done with it
        if(isset($connection))
        {
            $connection->close();
        }
        
        return $applications;
    }
    
    public function display_code_browser($application_name)
    {
         $mysqli = NULL;

        // Make a connection to the database
        $connection = new mysqli($this->host, $this->username, $this->password, $this->database_name);

        // Query the database for the page information
        $application_results = $connection->query("CALL get_application_data('$application_name')");

        if($application_results->num_rows == 0)
        {
            echo('<h5 class="error">No entry for application: ' . $application_name . '</h5>');
            return;
        }

        // Print the application information to the page
        $record = $application_results->fetch_assoc();
        echo('<h4>' . $application_name . ' ' . $record['major_version'] .'.' . $record['minor_version'] . '</h4>');
        echo('<h6>GitHub URL: <a href="' . $record['git_hub_url'] . '">' . basename($record['git_hub_url']) . '</a></h6>');
        echo('<p>' . $record['description'] . '</p>');
        $application_results->close();                      // Release the memory used by the results
        $connection->next_result();                         // IMPORTANT: This clears the drivers result buffer
                                                            // If this isn't done, no other querys can be executed on this connection
        // Query the database for the code file information
        $code_results = $connection->query("CALL get_code_files_for_application('$application_name')");

        // Print the code file information to the page
        while($record = $code_results->fetch_assoc())
        {
            echo('<h5>' . basename($record['git_hub_url']) . '</h5>');
            echo('<p>' . $record['description'] . '</p>');
            $this->display_code($record['git_hub_url']);
        }
        $code_results->close();                             // Release the memory used by the results   
        $connection->next_result();                         // IMPORTANT: This clears the drivers result buffer
                                                            // If this isn't done, no other querys can be executed on this connection

        // Always close the connection when you're done with it
        if(isset($connection))
        {
            $connection->close();
        }
    }
    
    public function add_application($name, $description, $major_version, $minor_version, $git_hub_url)
    {
         $mysqli = NULL;

        // Make a connection to the database
        $connection = new mysqli($this->host, $this->username, $this->password, $this->database_name);

        // Call the add_application stored procedure
        $connection->query("CALL add_application('$name', '$description', '$major_version', '$minor_version', '$git_hub_url')");

        // Always close the connection when you're done with it
        if(isset($connection))
        {
            $connection->close();
        }
    }
}

?>