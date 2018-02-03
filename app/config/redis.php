<?php

return [
    'default' => 'cache',

    'connections' => [
        'cache' => [
            'driver' => 'phpredis',
            'database' => 0,
            'host' => '127.0.0.1',
            'port' => 6379,
            'password' => null,
        ]
    ]
];