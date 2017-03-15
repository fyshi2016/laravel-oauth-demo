# laravel-oauth-demo

使用 Laravel 搭建的一个最小化基于 OAuth 认证的 API 服务。

## Installation

```sh
git clone {url}
```

安装依赖并初始化项目：
```sh
composer install
composer run post-root-package-install
composer run post-create-project-cmd
```
OAuth 需要存储，我们使用 MySQL 创建一个数据库，名为：`oauth` 。

接下来编辑 `.env` 文件，配置数据库连接等信息，更新 `APP_URL`。

初始化数据库并安装 Passport ：
```sh
php artisan migrate
php artisan install:passport
```

启动 Web 服务：
```sh
php artisan serve --host=0.0.0.0 --port=8000
```

## 路由

`routes/web.php` 已事先定义了几个路由，包括两个测试的 API ，详细说明如下：

|路由|认证方式|说明|
|---|---|---|
| / | auth | OAuth的管理界面 |
| /home | auth | 登陆后的首页 |
| /public_api | - | 无认证的测试 API |
| /need_token_api | OAuth | 需要 access token 访问的API |

如果要给自定义的路由启用 `OAuth` 认证，只需调用中间件 `middleware('auth:api')` 即可。
