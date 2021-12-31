# Unify Code For Http

## 统一码

> 通过一致性代码减少代码变种

### 安装

> composer require weiki/unifycode_http

```php

use Psr\Http\Message\ResponseInterface;
use Weiki\UnifyCode\Http;

echo Http::HTTP_OK; // 200

$response = Http::ok();

var_dump($response instanceof ResponseInterface) // true

$response->getStatusCode(); // 200
$response->getReasonPhrase(); //OK

```