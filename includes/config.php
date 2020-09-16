<?php

/**
 * Used to store website configuration information.
 *
 * @var string or null
 */
function config($key = '')
{
    $config = [
        'name' => 'SCC 成立公司',
        'site_url' => '',
        'pretty_uri' => false,
        'nav_menu' => [
            '' => '家',
            'products' => '产品展示',
            'about-us' => '关于我们',
        ],
        'template_path' => 'template',
        'content_path' => 'content',
        'version' => '版 0.1',
    ];

    return isset($config[$key]) ? $config[$key] : null;
}
