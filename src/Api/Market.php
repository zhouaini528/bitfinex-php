<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Bitfinex\Api;

use Lin\Bitfinex\Request;

class Market extends Request
{
    /**
     * GET https://api-pub.bitfinex.com/v2/platform/status
     * */
    public function getPlatformStatus(array $data=[]){
        $this->host='https://api-pub.bitfinex.com';
        $this->type='GET';
        $this->path='/v2/platform/status';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET https://api-pub.bitfinex.com/v2/tickers
     * */
    public function getTickers(array $data=[]){
        $this->host='https://api-pub.bitfinex.com';
        $this->type='GET';
        $this->path='/v2/tickers';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET https://api-pub.bitfinex.com/v2/ticker/Symbol
     * */
    public function getTicker(array $data=[]){
        $this->host='https://api-pub.bitfinex.com';
        $this->type='GET';
        $this->path='/v2/ticker/Symbol';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET https://api-pub.bitfinex.com/v2/trades/Symbol/hist
     * */
    public function getTradesHist(array $data=[]){
        $this->host='https://api-pub.bitfinex.com';
        $this->type='GET';
        $this->path='/v2/trades/'.$data['symbol'].'/hist';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET https://api-pub.bitfinex.com/v2/book/Symbol/Precision
     * */
    public function getBook(array $data=[]){
        $this->host='https://api-pub.bitfinex.com';
        $this->type='GET';
        $this->path='/v2/book/'.$data['symbol'].'/'.$data['precision'];
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET https://api-pub.bitfinex.com/v2/stats1/Key:Size:Symbol:Side/Section
     * */
    public function getStats(array $data=[]){
        $this->host='https://api-pub.bitfinex.com';
        $this->type='GET';
        $this->path='/v2/stats1/'.$data['key'].':'.$data['size'].':'.$data['symbol'].':'.$data['side'].'/'.$data['section'];
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET https://api-pub.bitfinex.com/v2/candles/trade:TimeFrame:Symbol/Section
     * */
    public function getCandlesTrade(array $data=[]){
        $this->host='https://api-pub.bitfinex.com';
        $this->type='GET';
        $this->path='/v2/candles/trade:'.$data['timeframe'].':'.$data['symbol'].'/'.$data['section'];
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET https://api-pub.bitfinex.com/v2/conf/pub:Action:Object:Detail
     * */
    public function getConfPub(array $data=[]){
        $this->host='https://api-pub.bitfinex.com';
        $this->type='GET';
        $this->path='/v2/conf/pub:'.$data['action'].':'.$data['object'].':'.$data['detail'];
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET https://api-pub.bitfinex.com/v2/status/type
     * */
    public function getStatusType(array $data=[]){
        $this->host='https://api-pub.bitfinex.com';
        $this->type='GET';
        $this->path='/v2/status/type';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET https://api-pub.bitfinex.com/v2/liquidations/hist
     * */
    public function getLiquidationsHist(array $data=[]){
        $this->host='https://api-pub.bitfinex.com';
        $this->type='GET';
        $this->path='/v2/liquidations/hist';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET https://api-pub.bitfinex.com/v2/rankings/Key:Time_Frame:Symbol/Section
     * */
    public function getRankings(array $data=[]){
        $this->host='https://api-pub.bitfinex.com';
        $this->type='GET';
        $this->path='/v2/rankings/'.$data['key'].':'.$data['timeframe'].':'.$data['symbol'].'/'.$data['section'];
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET https://api-pub.bitfinex.com/v2/pulse/hist
     * */
    public function getPulseHist(array $data=[]){
        $this->host='https://api-pub.bitfinex.com';
        $this->type='GET';
        $this->path='/v2/pulse/hist';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET https://api-pub.bitfinex.com/v2/pulse/profile/Nickname
     * */
    public function getPulseProfile(array $data=[]){
        $this->host='https://api-pub.bitfinex.com';
        $this->type='GET';
        $this->path='/v2/pulse/profile/'.$data['nickname'];
        $this->data=$data;
        return $this->exec();
    }
}