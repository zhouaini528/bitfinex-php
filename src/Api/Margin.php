<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Bitfinex\Api;

use Lin\Bitfinex\Request;

class Margin extends Request
{
    /**
     * POST https://api.bitfinex.com/v2/auth/r/funding/offers/Symbol
     * */
    public function postOffers(array $data=[]){
        $this->type='POST';
        $this->path='/v2/auth/r/funding/offers/'.$data['symbol'];
        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST https://api.bitfinex.com/v2/auth/w/funding/offer/submit
     * */
    public function postOfferSubmit(array $data=[]){
        $this->type='POST';
        $this->path='/v2/auth/w/funding/offer/submit';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *POST https://api.bitfinex.com/v2/auth/w/funding/offer/cancel
     * */
    public function postOfferCancel(array $data=[]){
        $this->type='POST';
        $this->path='/v2/auth/w/funding/offer/cancel';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *POST https://api.bitfinex.com/v2/auth/w/funding/offer/cancel/all
     * */
    public function postOfferCancelAll(array $data=[]){
        $this->type='POST';
        $this->path='/v2/auth/w/funding/offer/cancel/all';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *POST https://api.bitfinex.com/v2/auth/w/funding/close
     * */
    public function postClose(array $data=[]){
        $this->type='POST';
        $this->path='/v2/auth/w/funding/close';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *POST https://api.bitfinex.com/v2/auth/w/funding/auto
     * */
    public function postAuto(array $data=[]){
        $this->type='POST';
        $this->path='/v2/auth/w/funding/auto';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *POST https://api.bitfinex.com/v2/auth/w/funding/keep
     * */
    public function postKeep(array $data=[]){
        $this->type='POST';
        $this->path='/v2/auth/w/funding/keep';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *POST https://api.bitfinex.com/v2/auth/r/funding/offers/Symbol/hist
     * */
    public function postOffersHist(array $data=[]){
        $this->type='POST';
        $this->path='/v2/auth/r/funding/offers/'.$data['symbol'].'/hist';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *POST https://api.bitfinex.com/v2/auth/r/funding/loans/Symbol
     * */
    public function postLoans(array $data=[]){
        $this->type='POST';
        $this->path='/v2/auth/r/funding/loans/'.$data['symbol'];
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *POST https://api.bitfinex.com/v2/auth/r/funding/loans/Symbol/hist
     * */
    public function postLoansHist(array $data=[]){
        $this->type='POST';
        $this->path='/v2/auth/r/funding/loans/'.$data['symbol'].'/hist';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *POST https://api.bitfinex.com/v2/auth/r/funding/credits/Symbol
     * */
    public function postCredits(array $data=[]){
        $this->type='POST';
        $this->path='/v2/auth/r/funding/credits/'.$data['symbol'];
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *POST https://api.bitfinex.com/v2/auth/r/funding/credits/Symbol/hist
     * */
    public function postCreditsHist(array $data=[]){
        $this->type='POST';
        $this->path='/v2/auth/r/funding/credits/'.$data['symbol'].'/hist';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *POST https://api.bitfinex.com/v2/auth/r/funding/trades/Symbol/hist
     * */
    public function postTradesHist(array $data=[]){
        $this->type='POST';
        $this->path='/v2/auth/r/funding/trades/'.$data['symbol'].'/hist';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *POST https://api.bitfinex.com/v2/auth/r/info/funding/Key
     * */
    public function postKey(array $data=[]){
        $this->type='POST';
        $this->path='/v2/auth/r/info/funding/'.$data['key'];
        $this->data=$data;
        return $this->exec();
    }
}