<h1 align="center"> weather </h1>

<p align="center">基于 高德开放平台 的 PHP 天气信息组件。</p>


## 安装

```shell
$ composer require lhp9916/weather -vvv
```
## 配置

在使用本扩展之前，你需要去 高德开放平台 注册账号，然后创建应用，获取应用的 API Key。

## 使用

```php
use Lhp9916\Weather\Weather;

$key = 'xxxxxxxxxxxxxxxxxxxxxxxxxxx';

$weather = new Weather($key);
```
### 获取实时天气
```php
$response = $weather->getWeather('深圳');
```

### 获取近期天气预报
```php
$response = $weather->getWeather('深圳', 'all');
```
### 参数说明
```php
array | string   getWeather(string $city, string $type = 'base', string $format = 'json')
```
- $city - 城市名，比如：“深圳”；
- $type - 返回内容类型：base: 返回实况天气 / all:返回预报天气；
- $format - 输出的数据格式，默认为 json 格式，当 output 设置为 “xml” 时，输出的为 XML 格式的数据。

## 在 Laravel 中使用
在 Laravel 中使用也是同样的安装方式，配置写在 `config/services.php` 中：
```php
'weather' => [
        'key' => env('WEATHER_API_KEY'),
    ],
```
然后在 .env 中配置 WEATHER_API_KEY ：
```
WEATHER_API_KEY=xxxxxxxxxxxxxxxxxxxxx
```

### 方法参数注入
```php
public function edit(Weather $weather) 
{
    $response = $weather->getWeather('深圳');
}
```
### 服务名访问
```php
 public function edit() 
{
    $response = app('weather')->getWeather('深圳');
}
```

## License

MIT