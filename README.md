### It is recommended that you read the official document first

Bitfinex docs [https://docs.bitfinex.com/](https://docs.bitfinex.com/)

V1 not supported

V2 support

All interface methods are initialized the same as those provided by Bitfinex. See details [src/api](https://github.com/zhouaini528/bitfinex-php/tree/master/src/Api)

Most of the interface is now complete, and the user can continue to extend it based on my design, working with me to improve it.

[中文文档](https://github.com/zhouaini528/bitfinex-php/blob/master/README_CN.md)

### Other exchanges API

[Exchanges](https://github.com/zhouaini528/exchanges-php) It includes all of the following exchanges and is highly recommended.

[Bitmex](https://github.com/zhouaini528/bitmex-php) Support [Websocket](https://github.com/zhouaini528/bitmex-php/blob/master/README.md#Websocket)

[Okex](https://github.com/zhouaini528/okex-php) Support [Websocket](https://github.com/zhouaini528/okex-php/blob/master/README.md#Websocket)

[Huobi](https://github.com/zhouaini528/huobi-php) Support [Websocket](https://github.com/zhouaini528/huobi-php/blob/master/README.md#Websocket)

[Binance](https://github.com/zhouaini528/binance-php) Support [Websocket](https://github.com/zhouaini528/binance-php/blob/master/README.md#Websocket)

[Kucoin](https://github.com/zhouaini528/kucoin-php)

[Mxc](https://github.com/zhouaini528/Mxc-php)

[Coinbase](https://github.com/zhouaini528/coinbase-php)

[ZB](https://github.com/zhouaini528/zb-php)

[Bitfinex](https://github.com/zhouaini528/bitfinex-php)

[Bittrex](https://github.com/zhouaini528/bittrex-php)

[Kraken](https://github.com/zhouaini528/kraken-php)

[Gate](https://github.com/zhouaini528/gate-php)   

[Bigone](https://github.com/zhouaini528/bigone-php)   

[Crex24](https://github.com/zhouaini528/crex24-php)   

[Bybit](https://github.com/zhouaini528/bybit-php)  

[Coinbene](https://github.com/zhouaini528/coinbene-php)   

[Bitget](https://github.com/zhouaini528/bitget-php)   

[Poloniex](https://github.com/zhouaini528/poloniex-php)

**If you don't find the exchange SDK you want, you can tell me and I'll join them.**

#### Installation
```
composer require linwj/bitfinex
```

Support for more request Settings
```php
$bitfinex=new Bitfinex();

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

### Spot API

Market related API [More](https://github.com/zhouaini528/bitfinex-php/blob/master/tests/market.php)
```php
$bitfinex=new Bitfinex();

try {
    $result=$bitfinex->market()->getPlatformStatus();
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$bitfinex->market()->getTickers([
        'symbols'=>'tBTCUSD'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$bitfinex->market()->getTicker([
        'symbol'=>'tBTCUSD'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$bitfinex->market()->getTradesHist([
        'symbol'=>'tBTCUSD',
        'limit'=>2,
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$bitfinex->market()->getBook([
        'symbol'=>'tBTCUSD',
        'precision'=>'P0',
        'len'=>1
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
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
    print_r($e->getMessage());
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
    print_r($e->getMessage());
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
    print_r($e->getMessage());
}

//Cancel an existing order
try {
    $result=$bitfinex->order()->postUpdate([
        //'cid'=>'',
        'id'=>'33950998275',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}
```

Accounts related API [More](https://github.com/zhouaini528/bitfinex-php/blob/master/tests/account.php)
```php
$bitfinex=new Bitfinex($key,$secret);

try {
    $result=$bitfinex->account()->postInfoUser();
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$bitfinex->account()->postLoginsHist();
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$bitfinex->account()->postAuditHist();
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

```

[More Tests](https://github.com/zhouaini528/bitfinex-php/tree/master/tests)

[More API](https://github.com/zhouaini528/bitfinex-php/tree/master/src/Api)

