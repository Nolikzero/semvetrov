<?php
return [
    'db' =>
        [
            'database_type' => 'mysql',
            'database_name' => 'semvetrov',
            'server' => 'localhost',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ],
    'api' =>
        [
            'route' =>
                [
                    'methods' =>
                        [
                            'test_1' => 'api\ApiTaskFirst',
                            'test_2' => 'api\ApiTaskSecond',
                            'test_3' => 'api\ApiTaskThird'
                        ]
                ]
        ]
];