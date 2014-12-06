<?php

function get_site_url()
{
    $http = 'http' . ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 's' : '') . '://';
    $fo = str_replace("index.php", "", $_SERVER['SCRIPT_NAME']);
    return "$http" . $_SERVER['SERVER_NAME'] . "" . $fo;
}

return array(
    'site' => array(
        'site_title' => 'NgakakSeru- Santai Aja Kali',
        'site_description' => 'NgakakSeru- Santai Aja Kali',
        'site_keywords' => 'NgakakSeru- Santai Aja Kali',
        'site_author' => 'NgakakSeru- Santai Aja Kali',
        'site_version' => 'beta 0.1',
    ),
    'url' => array(
        'site_url' => get_site_url(),
        'base_url_asset' => get_site_url().'../web/main',
    ),
);
