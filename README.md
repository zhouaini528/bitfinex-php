### It is recommended that you read the official document first

Bitfinex docs [https://docs.bitfinex.com/](https://docs.bitfinex.com/)

All interface methods are initialized the same as those provided by okex. See details [src/api](https://github.com/zhouaini528/bitfinex-php/tree/master/src/Api)

Most of the interface is now complete, and the user can continue to extend it based on my design, working with me to improve it.

[中文文档](https://github.com/zhouaini528/bitfinex-php/blob/master/README_CN.md)

### Other exchanges API

[Exchanges](https://github.com/zhouaini528/exchanges-php) It includes all of the following exchanges and is highly recommended.

[Bitmex](https://github.com/zhouaini528/bitmex-php)

[Okex](https://github.com/zhouaini528/okex-php)

[Huobi](https://github.com/zhouaini528/huobi-php)

[Binance](https://github.com/zhouaini528/binance-php)

[Kucoin](https://github.com/zhouaini528/kucoin-php)

[Mxc](https://github.com/zhouaini528/Mxc-php) Temporarily not connected to Exchanges SDK

[Coinbase](https://github.com/zhouaini528/coinbase-php) Temporarily not connected to Exchanges SDK

[ZB](https://github.com/zhouaini528/zb-php) Temporarily not connected to Exchanges SDK

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
