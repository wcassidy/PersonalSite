<?php
    require('code_browser.php');
    $output = array('status' => 'error', 'message' => $_POST['action'] . ': Invalid action');

    $cb = new code_browser();

    switch($_POST['action'])
    {
        case 'get_applications':
            try
            {
                $output['payload'] = $cb->get_applications();
                $output['status'] = 'success';
                $output['message'] = 'retrieved ' . sizeof($output['payload']) . ' applications';
            }
            catch(Exception $e)
            {
                $output['status'] = 'error';
                $output['message'] = 'failed to retrieve applications: ' . $e->getMessage();    // TODO: Replace this with a more user friendly message on release
            }
            break;
        case 'add_application':
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
        case 'update_application':
            try
            {
                $cb->update_application($_POST['old_name'], $_POST['application_name'], $_POST['description'], $_POST['major_version'], $_POST['minor_version'], $_POST['git_hub_url']);
                $output['status'] = 'success';
                $output['message'] = $_POST['application_name'] . ': successfully changed';
            }
            catch(Exception $e)
            {
                $output['status'] = 'error';
                $output['message'] = $_POST['old_name'] . ': failed to be changed: ' . $e->getMessage();    // TODO: Replace this with a more user friendly message on release
            }
            break;  
        case 'delete':
            try
            {
                $cb->delete_application($_POST['application_name']);
                $output['status'] = 'success';
                $output['message'] = $_POST['application_name'] . ': successfully deleted';
            }
            catch(Exception $e)
            {
                $output['status'] = 'error';
                $output['message'] = $_POST['application_name'] . ': failed to delete: ' . $e->getMessage();    // TODO: Replace this with a more user friendly message on release
            }
            break;
        case 'get_code_files':
            try
            {
                $output['payload'] = $cb->get_code_files();
                $output['status'] = 'success';
                $output['message'] = 'retrieved ' . sizeof($output['payload']) . ' code files';
            }
            catch(Exception $e)
            {
                $output['status'] = 'error';
                $output['message'] = 'failed to retrieve code files: ' . $e->getMessage();    // TODO: Replace this with a more user friendly message on release
            }
            break;
        case 'add_code_file':
            try
            {
                $cb->add_code_file($_POST['cf_git_hub_url'], $_POST['cf_description']);
                $output['status'] = 'success';
                $output['message'] = $_POST['cf_git_hub_url'] . ': successfully added';
            }
            catch(Exception $e)
            {
                $output['status'] = 'error';
                $output['message'] = $_POST['cf_git_hub_url'] . ': failed to be added: ' . $e->getMessage();    // TODO: Replace this with a more user friendly message on release
            }
            break;  
        case 'update_code_file':
            try
            {
                $cb->update_code_file($_POST['cf_old_url'], $_POST['cf_git_hub_url'], $_POST['cf_description']);
                $output['status'] = 'success';
                $output['message'] = $_POST['cf_git_hub_url'] . ': successfully changed';
            }
            catch(Exception $e)
            {
                $output['status'] = 'error';
                $output['message'] = $_POST['cf_old_url'] . ': failed to be changed: ' . $e->getMessage();    // TODO: Replace this with a more user friendly message on release
            }
            break;  
        case 'delete_code_files':
            try
            {
                $cb->delete_code_files($_POST['code_files']);
                $output['status'] = 'success';
                $output['message'] = count($_POST['code_files']) . ' code file(s): successfully deleted';
            }
            catch(Exception $e)
            {
                $output['status'] = 'error';
                $output['message'] = count($_POST['code_files']) . ' code file(s): failed to delete: ' . $e->getMessage();    // TODO: Replace this with a more user friendly message on release
            }
            break;
    }

    // Return the data to the AJAX client
    echo(json_encode($output));
?>
