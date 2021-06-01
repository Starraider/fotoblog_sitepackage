<?php

/**
 * Extension Manager/Repository config file for ext "fotoblog_sitepackage".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Fotoblog Sitepackage',
    'description' => 'Sitepackage for a Foto- or Travel-Blog',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.25-10.4.99',
            'bootstrap_package' => '11.0.0-11.99.99',
            'skom_sitepackage' => '9.2.0-9.99.99'
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Skom\\FotoblogSitepackage\\' => 'Classes'
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Sven Kalbhenn',
    'author_email' => 'sven@skom.de',
    'author_company' => 'SKom',
    'version' => '1.2.0',
];
