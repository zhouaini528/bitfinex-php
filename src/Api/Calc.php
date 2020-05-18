<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Bitfinex\Api;

use Lin\Bitfinex\Request;

class Calc extends Request
{
    /**
     * POST https://api.bitfinex.com/v2/calc/trade/avg
     * */
    public function postTradeAvg(array $data=[]){
        $this->type='POST';
        $this->path='/v2/calc/trade/avg?'.http_build_query($data);
        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST https://api-pub.bitfinex.com/v2/calc/fx
     * */
    public function postFx(array $data=[]){
        $this->host='https://api-pub.bitfinex.com';
        $this->type='POST';
        $this->path='/v2/calc/fx';
        $this->data=$data;
        return $this->exec();
    }
}