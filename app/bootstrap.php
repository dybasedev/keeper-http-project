<?php

use App\Http\Service;
use Dybasedev\Keeper\Http\Commands\ServerManage;
use Symfony\Component\Console\Application;

require __DIR__ . '/../vendor/autoload.php';

// 创建调度命令
$managerCommand = new class extends ServerManage
{
    public function setOptions(array $options)
    {
        if ($this->options) {
            $this->options = $this->options + $options;
        } else {
            $this->options = $options;
        }

        return $this;
    }
};

// 创建 HTTP 服务逻辑
$managerCommand->service(new Service([
    'base'   => __DIR__,
    'config' => __DIR__ . DIRECTORY_SEPARATOR . 'config',
]));

// 对 Swoole 的配置选项，更多请参考 https://wiki.swoole.com/wiki/page/274.html
$managerCommand->setOptions([]);

$application = new Application();
$application->add($managerCommand);
$application->setDefaultCommand($managerCommand->getName(), true);

try {
    $application->run();
} catch (Exception $e) {
    //
}