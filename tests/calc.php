<?php

/**
 * @author lin <465382251@qq.com>
 * */

use Lin\Bitfinex\Bitfinex;

require __DIR__ .'../../vendor/autoload.php';

include 'key_secret.php';

//$bitfinex=new Bitfinex($key,$secret);
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

try {
    $result=$bitfinex->calc()->postTradeAvg([
        'symbol'=>'tBTCUSD',
        'amount'=>'100',
        'period'=>2,
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
} 


try {
    $result=$bitfinex->calc()->postFx([
        'ccy1'=>'BTC',
        'ccy2'=>'USD'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}



/* try {
    $result=$bitfinex->calc()->postTradeAvg([
        'symbols'=>'tBTCUSD'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
} */
?>