<?php
use App\Http\Service;
use Dybasedev\Keeper\Http\ProcessKernels\KeeperKernel;
use Dybasedev\Keeper\Server\HttpServer;

require __DIR__ . '/../vendor/autoload.php';

// 创建服务器调度内核
$kernel = new KeeperKernel(
    // 创建 HTTP 服务逻辑
    new Service([
        'base'   => __DIR__,
        'config' => __DIR__ . DIRECTORY_SEPARATOR . 'config',
    ])
);

// 创建 HTTP 服务器
$server = new HttpServer($kernel);

// 对服务器的额外选项设置
/**
 * $server->host('192.168.1.1') // 设置服务器监听的地址
 *        ->port(80)            // 设置服务器监听的端口
 *        ->ssl(true)           // 是否开启 SSL
 *        ->setting([           // Swoole 的配置选项，更多请参考 https://wiki.swoole.com/wiki/page/274.html
 *            'daemonize' => true,              // 开启守护进程
 *            'pid_file' => '/run/keeper.pid',  // 设置 PID 文件
 *        ])
 */

// 启动服务器
$server->start();