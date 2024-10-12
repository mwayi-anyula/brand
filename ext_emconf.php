<?php

/**
 * Extension Manager/Repository config file for ext "brand".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Brand',
    'description' => 'Site package for TYPO3 starter installation.',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '13.0.0-14.9.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'MwayiAnyula\\Brand\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Mwayi Anyula',
    'author_email' => 'hi@mwayianyula.com',
    'author_company' => 'Mwayi Anyula',
    'version' => '1.0.0',
];
