<?php
return [
    'backend' => [
        'frontName' => 'admin'
    ],
    'cache' => [
        'frontend' => [
            'default' => [
                'backend' => 'Magento\\Framework\\Cache\\Backend\\File',
                'backend_options' => [
                    'cache_dir' => '/path/to/magento/var/cache'
                ]
            ]
        ],
        'allow_parallel_generation' => false
    ],
    'remote_storage' => [
        'driver' => 'file'
    ],
    'queue' => [
        'consumers_wait_for_messages' => 1
    ],
    'crypt' => [
        'key' => '73da500354d6a35dff4ae7d61ad7fe17'
    ],
    'db' => [
        'table_prefix' => '',
        'connection' => [
            'default' => [
                'host' => 'mysql-service', // MySQL service name in Kubernetes
                'dbname' => 'magentodb',
                'username' => 'adith',
                'password' => '2001',
                'model' => 'mysql4',
                'engine' => 'innodb',
                'initStatements' => 'SET NAMES utf8;',
                'active' => '1',
                'driver_options' => [
                    1014 => false
                ]
            ]
        ]
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'elasticsearch' => [
        'server' => [
            'host' => 'http://10.244.0.13', // Elasticsearch IP address in Kubernetes
            'port' => '9200' // Elasticsearch port
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'developer',
    'session' => [
        'save' => 'files',
        'save_path' => '/path/to/magento
