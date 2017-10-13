<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

function display_code($code_file)
{
    
}

function add_code_browser($web_page)
{
    echo('<h3>Code Browser</h3>
          <p>The following are the source code files used to build this page.  Each file has a description along with the source code.</p>');

    $mysqli = NULL;
    try
    {
        $mysqli = new mysqli('localhost', 'web_site', 'choline', 'code_browser');
        $page_results = $mysqli->query("CALL get_page_data('$web_page')");
        
        if($page_results->num_rows == 0)
        {
            echo('<h5 class="error">No entry for page: ' . $web_page . '</h5>');
            return;
        }
        
        $record = $page_results->fetch_assoc();
        echo('<h4>' . basename($record['path']) . '</h4>');
        echo('<p>' . $record['description'] . '</p>');
        $page_results->close();   
        $mysqli->next_result();
        
        $code_results = $mysqli->query("CALL get_code_files_for_page('$web_page')");
        
        if($code_results->num_rows == 0)
        {
            echo('<h5 class="error">No code files for page: ' . $web_page . '</h5>');
            return;
        }

        while($record = $code_results->fetch_assoc()) 
        {
            echo('<h5>' . basename($record['path']) . '</h5>');
            echo('<p>' . $record['description'] . '</p>');
            display_code($record['path']);
        }
        $code_results->close();   
        $mysqli->next_result();
    }
    catch(Exception $e) 
    {
        echo('<h5 class="error">' . $e->getMessage() . '</h4>');  
    }
    finally
    {
        if($mysqli)
        {
            $mysqli->close();
        }
    }
}

?>