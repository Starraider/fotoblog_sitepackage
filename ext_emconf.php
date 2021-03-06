<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'Fotoblog Sitepackage',
    'description' => 'Sitepackage for a Foto- or Travel-Blog',
    'category' => 'templates',
    'author' => 'Sven Kalbhenn',
    'author_email' => 'sven@skom.de',
    'author_company' => 'SKom',
    'state' => 'stable',
    'clearCacheOnLoad' => 0,
    'version' => '10.4.0',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.25-10.99.99',
            'bootstrap_package' => '11.0.0-11.99.99',
            'skom_sitepackage' => '9.2.0-9.99.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Skom\\FotoblogSitepackage\\' => 'Classes'
        ],
    ],
];
