<?php
    require('code_browser.php');
    $output = array('status' => 'error', 'message' => ': Invalid action');

    $cb = new code_browser();

    switch($_POST['action'])
    {
        case 'select':
            try
            {
                $output['payload'] = $cb->get_applications();
                $output['status'] = 'success';
                $output['message'] = 'retrived ' . sizeof($output['payload']) . ' applications';
            }
            catch(Exception $e)
            {
                $output['status'] = 'error';
                $output['message'] = 'failed to be retrieve applications: ' . $e->getMessage();    // TODO: Replace this with a more user friendly message on release
            }
            break;
        case 'insert':
            try
            {
                $cb->add_application($_POST['application_name'], $_POST['description'], $_POST['major_version'], $_POST['minor_version'], $_POST['git_hub_url']);
                $output['status'] = 'success';
                $output['message'] = $_POST['application_name'] . ': successfully added';
            }
            catch(Exception $e)
            {
                $output['status'] = 'error';
                $output['message'] = $_POST['application_name'] . ': failed to be added: ' . $e->getMessage();    // TODO: Replace this with a more user friendly message on release
            }
            break;  
    }

    echo(json_encode($output));
?>