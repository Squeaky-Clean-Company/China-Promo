<?php

/**
 * Used to store website configuration information.
 *
 * @var string or null
 */
function config($key = '')
{
    $config = [
        'name' => 'SCC Inc.',
        'site_url' => '',
        'pretty_uri' => false,
        'nav_menu' => [
            '' => 'Home',
            'products' => 'Products',
            'about-us' => 'About Us',
        ],
        'template_path' => 'template',
        'content_path' => 'content',
        'version' => 'v0.1',
    ];

    return isset($config[$key]) ? $config[$key] : null;
}
