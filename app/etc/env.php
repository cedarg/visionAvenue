<?php
return [
    'backend' => [
        'frontName' => 'admin'
    ],
    'crypt' => [
        'key' => 'd31e86bd6ceccd2a2d251e2398610262'
    ],
    'db' => [
        'table_prefix' => 'vA',
        'connection' => [
            'default' => [
                'host' => 'localhost',
                'dbname' => 'vision-avenue',
                'username' => 'root',
                'password' => '',
                'active' => '1'
            ]
        ]
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'default',
    'session' => [
        'save' => 'files'
    ],
    'cache_types' => [
        'config' => 1,
        'layout' => 1,
        'block_html' => 1,
        'collections' => 1,
        'reflection' => 1,
        'db_ddl' => 1,
        'eav' => 1,
        'customer_notification' => 1,
        'config_integration' => 1,
        'config_integration_api' => 1,
        'full_page' => 1,
        'translate' => 1,
        'config_webservice' => 1
    ],
    'install' => [
        'date' => 'Wed, 11 Jul 2018 15:49:27 +0000'
    ]
];
