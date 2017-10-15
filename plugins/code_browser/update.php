<?php
    require('code_browser.php');
    $output = array('status' => 'error', 'message' => $_POST['application_name'] . ': failed to be added: Invalid action');

    $cb = new code_browser();

    try
    {
        switch($_POST['action'])
        {
            case 'insert':
                $cb->add_application($_POST['application_name'], $_POST['description'], $_POST['major_version'], $_POST['minor_version'], $_POST['git_hub_url']);
                $output['status'] = 'success';
                $output['message'] = $_POST['application_name'] . ': successfully added';
                break;  
        }
    }
    catch(Exception $e)
    {
        $output['status'] = 'error';
        $output['message'] = $_POST['application_name'] . ': failed to be added: ' . $e->getMessage();    // TODO: Replace this with a more user friendly message on release
    }

    echo(json_encode($output));
?>
