<?php
use App\Http\Service;
use Dybasedev\Keeper\Http\ProcessKernels\KeeperKernel;
use Dybasedev\Keeper\Server\HttpServer;

require __DIR__ . '/../vendor/autoload.php';

$kernel = new KeeperKernel(new Service([
    'base'   => __DIR__,
    'config' => __DIR__ . DIRECTORY_SEPARATOR . 'config',
]));

$server = new HttpServer($kernel);
$server->start();