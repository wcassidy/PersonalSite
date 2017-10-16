<?php

$page_title = 'unset';

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

function add_styles()
{
    add_links('styles.html');
}

function add_scripts()
{
    add_links('scripts.html');
}

// Add plugins here
require 'plugins/code_browser/manage_data.php';

?>