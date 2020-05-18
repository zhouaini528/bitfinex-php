<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Bitfinex\Api;

use Lin\Bitfinex\Request;

class Order extends Request
{
    /**
     * POST https://api.bitfinex.com/v2/auth/r/orders/:Symbol
     * */
    public function post(array $data=[]){
        $this->type='POST';
        $this->path='/v2/auth/r/orders/'.$data['symbol'];
        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST https://api.bitfinex.com/v2/auth/w/order/submit
     * */
    public function postSubmit(array $data=[]){
        $this->type='POST';
        $this->path='/v2/auth/w/order/submit';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *POST https://api.bitfinex.com/v2/auth/w/order/update
     * */
    public function postUpdate(array $data=[]){
        $this->type='POST';
        $this->path='/v2/auth/w/order/update';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *POST https://api.bitfinex.com/v2/auth/w/order/cancel
     * */
    public function postCancel(array $data=[]){
        $this->type='POST';
        $this->path='/v2/auth/w/order/cancel';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *POST https://api.bitfinex.com/v2/auth/w/order/multi
     * */
    public function postMulti(array $data=[]){
        $this->type='POST';
        $this->path='/v2/auth/w/order/multi';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *POST https://api.bitfinex.com/v2/auth/w/order/cancel/multi
     * */
    public function postCancelMulti(array $data=[]){
        $this->type='POST';
        $this->path='/v2/auth/w/order/cancel/multi';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *POST https://api.bitfinex.com/v2/auth/r/orders/Symbol/hist
     * */
    public function postHist(array $data=[]){
        $this->type='POST';
        $this->path='/v2/auth/r/orders/'.$data['symbol'].'/hist';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *POST https://api.bitfinex.com/v2/auth/r/order/Symbol:OrderId/trades
     * */
    public function postTrades(array $data=[]){
        $this->type='POST';
        $this->path='/v2/auth/r/order/'.$data['symbol'].':'.$data['orderid'].'/trades';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *POST https://api.bitfinex.com/v2/auth/r/trades/Symbol/hist
     * */
    public function postTradesHist(array $data=[]){
        $this->type='POST';
        $this->path='/v2/auth/r/trades/'.$data['symbol'].'/hist';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *POST https://api.bitfinex.com/v2/auth/r/ledgers/Currency/hist
     * */
    public function postLedgersHist(array $data=[]){
        $this->type='POST';
        $this->path='/v2/auth/r/ledgers/'.$data['currency'].'/hist';
        $this->data=$data;
        return $this->exec();
    }
}