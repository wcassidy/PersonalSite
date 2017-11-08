<?php

$page_title = 'unset';
$styles = array();
$scripts = array();

function set_title($title)
{
    global $page_title;
    $page_title = $title;
}

function get_title()
{
    global $page_title;
    return $page_title;
}

function add_style($name, $url)
{
    global $styles;
    
    if(!isset($styles[$name]))
    {
        $styles[$name] = $url;
    }
    else
    {
        echo('<h4 class="error">Style ' . $name . '@' . $url . ' has already been added.  To overwrite please remove_style first.</h4>');
    }
}

function add_script($name, $url)
{
    global $scripts;
    
    if(!isset($scripts[$name]))
    {
        $scripts[$name] = $url;
    }
    else
    {
        echo('<h4 class="error">Script ' . $name . '@' . $url . ' has already been added.  To overwrite please remove_script first.</h4>');
    }
}

function debug_links()
{
    global $styles;
    global $scripts;

    var_dump($styles);
    var_dump($scripts);
}

function add_menu()
{
    echo '<div class="collapse navbar-collapse" id="navbarSupportedContent"><ul class="navbar-nav ml-auto">';

    $menu_file = explode("\n", file_get_contents('menu.html'));

    foreach($menu_file as $menu_item)
    {
        echo('<li class="nav-item">' . $menu_item . '</li>');
    }

    echo '</ul></div>';
}

function add_links($file_name)
{
    $links = file_get_contents($file_name);
    if(! $links === false)
    {
        echo $links;
    }
}

function add_styles_to_page()
{
    global $styles;
    foreach($styles as $name => $url)
    {
        echo('<link rel="stylesheet" type="text/css" href="' . $url . '">');
    }
}

function add_scripts_to_page()
{
    global $scripts;
    foreach($scripts as $name => $url)
    {
        echo('<script src="' . $url . '"></script>');
    }
}

// Add plugins here
// require 'plugins/code_browser/code_browser.php';

?>