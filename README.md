# Unify Code For Http

## 统一码

> 通过一致性代码减少代码变种

### 安装

> composer require weiki/unifycode_http

```php

use Weiki\UnifyCode\Http;

echo Http::HTTP_OK;             // 200
echo Http::ok();                // 200
echo Http::toStatusCode('ok');  // 200
echo Http::toConst('ok');       // HTTP_OK

```