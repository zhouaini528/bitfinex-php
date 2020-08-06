### 建议您先阅读官方文档

Bitfinex 文档地址 [https://docs.bitfinex.com/](https://docs.bitfinex.com/)

V1 不支持

V2 支持

所有接口方法的初始化都与Bitfinex提供的方法相同。更多细节 [src/api](https://github.com/zhouaini528/zb-php/tree/master/src/Api)

大部分的接口已经完成，使用者可以根据我的设计方案继续扩展，欢迎与我一起迭代它。

[English Document](https://github.com/zhouaini528/bitfinex-php/blob/master/README.md)

### 其他交易所API

[Exchanges](https://github.com/zhouaini528/exchanges-php) 它包含以下所有交易所，强烈推荐使用该SDK。

[Bitmex](https://github.com/zhouaini528/bitmex-php)

[Okex](https://github.com/zhouaini528/okex-php)

[Huobi](https://github.com/zhouaini528/huobi-php)

[Binance](https://github.com/zhouaini528/binance-php)

[Kucoin](https://github.com/zhouaini528/Kucoin-php)

[Mxc](https://github.com/zhouaini528/mxc-php)

[Coinbase](https://github.com/zhouaini528/coinbase-php)

[ZB](https://github.com/zhouaini528/zb-php)

[Bitfinex](https://github.com/zhouaini528/zb-php)

[Bittrex](https://github.com/zhouaini528/bittrex-php)

[Gate](https://github.com/zhouaini528/gate-php)

[Bigone](https://github.com/zhouaini528/bigone-php)   

#### 安装方式
```
composer require linwj/bitfinex
```

支持更多的请求设置
```php
$bitfinex=new Bitfinex($key,$secret);

//You can set special needs
$bitfinex->setOptions([
    //Set the request timeout to 60 seconds by default
    'timeout'=>10,
    
    //If you are developing locally and need an agent, you can set this
    //'proxy'=>true,
    //More flexible Settings
    /* 'proxy'=>[
     'http'  => 'http://127.0.0.1:12333',
     'https' => 'http://127.0.0.1:12333',
     'no'    =>  ['.cn']
     ], */
    //Close the certificate
    //'verify'=>false,
]);
```

### 现货交易 API

Market related API [More](https://github.com/zhouaini528/bitfinex-php/blob/master/tests/market.php)
```php
$bitfinex=new Bitfinex();

try {
    $result=$bitfinex->market()->getPlatformStatus();
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$bitfinex->market()->getTickers([
        'symbols'=>'tBTCUSD'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$bitfinex->market()->getTicker([
        'symbol'=>'tBTCUSD'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$bitfinex->market()->getTradesHist([
        'symbol'=>'tBTCUSD',
        'limit'=>2,
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$bitfinex->market()->getBook([
        'symbol'=>'tBTCUSD',
        'precision'=>'P0',
        'len'=>1
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

```

Order related API [More](https://github.com/zhouaini528/bitfinex-php/blob/master/tests/order.php)
```php
$bitfinex=new Bitfinex($key,$secret);

//Place an Order
try {
    $result=$bitfinex->order()->postSubmit([
        //'cid'=>'',
        'type'=>'LIMIT',
        'symbol'=>'tBTCUSD',
        'price'=>'5000',
        'amount'=>'0.01',//Amount of order (positive for buy, negative for sell)
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

//track the order
try {
    $result=$bitfinex->order()->post([
        //'cid'=>'',
        'symbol'=>'tBTCUSD',
        'id'=>['33950998275']
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

//update the order
try {
    $result=$bitfinex->order()->postUpdate([
        //'cid'=>'',
        'symbol'=>'tBTCUSD',
        'id'=>'33950998275',
        'amount'=>0.02,
        'price'=>6000,
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

//Cancel an existing order
try {
    $result=$bitfinex->order()->postUpdate([
        //'cid'=>'',
        'id'=>'33950998275',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}
```

Accounts related API [More](https://github.com/zhouaini528/bitfinex-php/blob/master/tests/account.php)
```php
$bitfinex=new Bitfinex($key,$secret);

try {
    $result=$bitfinex->account()->postInfoUser();
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$bitfinex->account()->postLoginsHist();
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$bitfinex->account()->postAuditHist();
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

```

[更多用例](https://github.com/zhouaini528/bitfinex-php/tree/master/tests)

[更多API](https://github.com/zhouaini528/bitfinex-php/tree/master/src/Api)
