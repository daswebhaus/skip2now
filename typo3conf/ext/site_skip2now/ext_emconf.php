<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Skip2Now Site',
    'description' => 'SiteExtension für Skip2Now',
    'category' => 'templates',
    'author' => 'dasWEB.haus',
    'author_email' => '',
    'state' => 'stable',
    'clearCacheOnLoad' => true,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '13.4.0-13.4.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];