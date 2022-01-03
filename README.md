# Unify Code For Http

## 统一码

> 通过一致性代码减少代码变种

### 安装

> composer require weiki/unifycode_http

#### 简单使用

```php

use Weiki\UnifyCode\Http;

echo Http::HTTP_OK;             // 200
echo Http::ok();                // 200
echo Http::toStatusCode('ok');  // 200
echo Http::toConst('ok');       // HTTP_OK

```

#### 使用管道 `Pipeline` 拦截或加工数据

```php

use Weiki\UnifyCode\Pipeline;

// 将结果转变为 json 格式
$result = (new Pipeline)->through(function ($data, $next) {
    return toJson([
        'code' => $next($data),
        'message' => '你好，中国',
    ]);
})->ok();

echo $result; // {"code":200,"message":"你好中国"}

```


#### `Pipeline` 支持写法


```php

use Weiki\UnifyCode\Pipeline;

// 函数模式
$result = (new Pipeline)->through('handle')->ok();

// 匿名函数模式
$result = (new Pipeline)->through(function () {})->ok();

// 静态方法模式
$result = (new Pipeline)->through('class::method')->ok();

// 实例方法模式
$result = (new Pipeline)->through([[$object, "method"]])->ok();

// 多个参数模式
$result = (new Pipeline)->through(
    function ($data, $next) {
        // ...
    },
    function ($data, $next) {
        // ...
    }
)->ok();

// 数组模式
$result = (new Pipeline)->through([
    function ($data, $next) {
        // ...
    },
    function ($data, $next) {
        // ...
    }
])->ok();

```
