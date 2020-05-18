<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Bitfinex\Api;

use Lin\Bitfinex\Request;

class Position extends Request
{
    /**
     * POST https://api.bitfinex.com/v2/auth/r/info/margin/key
     * */
    public function postInfoMarginKey(array $data=[]){
        $this->type='POST';
        $this->path='/v2/auth/r/info/margin/key';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST https://api.bitfinex.com/v2/auth/r/positions
     * */
    public function post(array $data=[]){
        $this->type='POST';
        $this->path='/v2/auth/r/positions';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
    *POST https://api.bitfinex.com/v2/auth/w/position/claim
    * */
    public function postClaim(array $data=[]){
        $this->type='POST';
        $this->path='/v2/auth/w/position/claim';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *POST https://api.bitfinex.com/v2/auth/r/positions/hist
     * */
    public function postHist(array $data=[]){
        $this->type='POST';
        $this->path='/v2/auth/r/positions/hist';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
    *POST https://api.bitfinex.com/v2/auth/r/positions/snap
    * */
    public function postSnap(array $data=[]){
        $this->type='POST';
        $this->path='/v2/auth/r/positions/snap';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *POST https://api.bitfinex.com/v2/auth/r/positions/audit
     * */
    public function postSudit(array $data=[]){
        $this->type='POST';
        $this->path='/v2/auth/r/positions/audit';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
    *POST https://api.bitfinex.com/v2/auth/w/deriv/collateral/set
    * */
    public function postDerivCollateralSet(array $data=[]){
        $this->type='POST';
        $this->path='/v2/auth/w/deriv/collateral/set';
        $this->data=$data;
        return $this->exec();
    }
}