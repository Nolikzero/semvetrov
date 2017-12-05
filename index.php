<?php


require_once (__DIR__ . '/vendor/autoload.php');
$config = require(__DIR__ . '/config/app.php');

try
{
    (new \lib\App($config))->run();
}catch (\Exception $exception)
{
    echo json_encode([
        'status' => 'error',
        'message' => $exception->getMessage()
    ]);
}
