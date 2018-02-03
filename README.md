# Keeper Http Project

该项目是基于 Swoole 开发的 Keeper 组件提供的一个 HTTP 项目模板。

## 安装

```
composer create-project dybasedev/keeper-http-project my-project
```

## 快速启动

进入项目目录，调用命令：

```
$ php app/bootstrap.php
```

现在可以访问 `<Server Host>:11780`，看到浏览器显示 `Hello, world` 即表示成功。若需要终止服务端监听按 `Control + C` 即可。


## 文档

### 服务器配置

编辑 `app/bootstrap.php` 文件，可对启动服务器的脚本做调整，你也可以自己实现一个更为完善的逻辑来控制。在此之前首先需要对 `Swoole` 有一定的了解，并知晓其配置选项。