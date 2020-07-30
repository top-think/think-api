# Think Api SDK For PHP

## 安装依赖
如果已在系统上[全局安装 Composer](https://getcomposer.org/doc/00-intro.md#globally) ，请直接在项目目录中运行以下内容来安装 Think Api SDK For PHP 作为依赖项：
```
composer require topthink/think-api
```
> 一些用户可能由于网络问题无法安装，可以使用[阿里云 Composer 全量镜像](https://developer.aliyun.com/composer) 。

## 快速使用

下面以查询身份证所属地区接口为例
```php
use think\api\Client;

$client = new Client("YourAppCode");

$result = $client->idcardIndex()
            ->withCardno('身份证号码')
            ->request();

```
