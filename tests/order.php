<?php

/**
 * @author lin <465382251@qq.com>
 * */

use Lin\Bitfinex\Bitfinex;

require __DIR__ .'../../vendor/autoload.php';

include 'key_secret.php';

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

//Place an Order
try {
    $result=$bitfinex->order()->postSubmit([
        //'gid'=>'',
        //'cid'=>'',
        'type'=>'LIMIT',
        'symbol'=>'tBTCUSD',
        'price'=>'5000',
        'amount'=>'0.01',
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

?>