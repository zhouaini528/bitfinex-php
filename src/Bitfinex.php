<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Bitfinex;


use Lin\Bitfinex\Api\Account;
use Lin\Bitfinex\Api\Calc;
use Lin\Bitfinex\Api\Margin;
use Lin\Bitfinex\Api\Market;
use Lin\Bitfinex\Api\Order;
use Lin\Bitfinex\Api\Position;
use Lin\Bitfinex\Api\Wallet;

class Bitfinex
{
    protected $key;
    protected $secret;
    protected $host;
    
    protected $options=[];
    
    function __construct(string $key='',string $secret='',string $host='https://api.bitfinex.com'){
        $this->key=$key;
        $this->secret=$secret;
        $this->host=$host;
    }
    
    /**
     * 
     * */
    private function init(){
        return [
            'key'=>$this->key,
            'secret'=>$this->secret,
            'host'=>$this->host,
            'options'=>$this->options,
        ];
    }
    
    /**
     * 
     * */
    function setOptions(array $options=[]){
        $this->options=$options;
    }
    
    /**
     * 
     * */
    function account(){
        return new Account($this->init());
    }
    
    /**
     *
     * */
    function calc(){
        return new Calc($this->init());
    }
    
    /**
     *
     * */
    function margin(){
        return new Margin($this->init());
    }
    
    /**
     *
     * */
    function market(){
        return new Market($this->init());
    }
    
    /**
     *
     * */
    function order(){
        return new Order($this->init());
    }
    
    /**
     *
     * */
    function position(){
        return new Position($this->init());
    }
    
    /**
     *
     * */
    function wallet(){
        return new Wallet($this->init());
    }
}