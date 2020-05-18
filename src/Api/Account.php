<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Bitfinex\Api;

use Lin\Bitfinex\Request;

class Account extends Request
{
    /**
     * POST https://api.bitfinex.com/v2/auth/r/info/user
     * */
    public function postInfoUser(array $data=[]){
        $this->type='POST';
        $this->path='/v2/auth/r/info/user';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST https://api.bitfinex.com/v2/auth/r/logins/hist
     * */
    public function postLoginsHist(array $data=[]){
        $this->type='POST';
        $this->path='/v2/auth/r/logins/hist';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *POST https://api.bitfinex.com/v2/auth/r/audit/hist
     * */
    public function postAuditHist(array $data=[]){
        $this->type='POST';
        $this->path='/v2/auth/r/audit/hist';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *POST https://api.bitfinex.com/v2/auth/w/transfer
     * */
    public function postTransfer(array $data=[]){
        $this->type='POST';
        $this->path='/v2/auth/w/transfer';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *POST https://api.bitfinex.com/v2/auth/w/deposit/address
     * */
    public function postDepositAddress(array $data=[]){
        $this->type='POST';
        $this->path='/v2/auth/w/deposit/address';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *POST https://api.bitfinex.com/v2/auth/w/deposit/invoice
     * */
    public function postDepositInvoice(array $data=[]){
        $this->type='POST';
        $this->path='/v2/auth/w/deposit/invoice';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *POST https://api.bitfinex.com/v2/auth/w/withdraw
     * */
    public function postWithdraw(array $data=[]){
        $this->type='POST';
        $this->path='/v2/auth/w/withdraw';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *POST https://api.bitfinex.com/v2/auth/r/movements/Currency/hist
     * */
    public function postMovementsHist(array $data=[]){
        $this->type='POST';
        $this->path='/v2/auth/r/movements/'.$data['currency'].'/hist';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *POST https://api.bitfinex.com/v2/auth/r/alerts
     * */
    public function postAlerts(array $data=[]){
        $this->type='POST';
        $this->path='/v2/auth/r/alerts';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *POST https://api.bitfinex.com/v2/auth/w/alert/set
     * */
    public function postAlertSet(array $data=[]){
        $this->type='POST';
        $this->path='/v2/auth/w/alert/set';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *POST https://api.bitfinex.com/v2/auth/w/alert/price:symbol:price/del
     * */
    public function post(array $data=[]){
        $this->type='POST';
        $this->path='';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *POST https://api.bitfinex.com/v2/auth/calc/order/avail
     * */
    public function postCalcOrderAvail(array $data=[]){
        $this->type='POST';
        $this->path='/v2/auth/calc/order/avail';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *POST https://api.bitfinex.com/v2/auth/w/settings/set
     * */
    public function postSettingsSet(array $data=[]){
        $this->type='POST';
        $this->path='/v2/auth/w/settings/set';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *POST https://api.bitfinex.com/v2/auth/r/settings
     * */
    public function postSettings(array $data=[]){
        $this->type='POST';
        $this->path='/v2/auth/r/settings';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *POST https://api.bitfinex.com/v2/auth/w/settings/del
     * */
    public function postSettingsDel(array $data=[]){
        $this->type='POST';
        $this->path='/v2/auth/w/settings/del';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *POST https://api.bitfinex.com/v2/auth/r/pulse/hist
     * */
    public function postPulseHist(array $data=[]){
        $this->type='POST';
        $this->path='/v2/auth/r/pulse/hist';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *POST https://api.bitfinex.com/v2/auth/w/pulse/add
     * */
    public function postPulseAdd(array $data=[]){
        $this->type='POST';
        $this->path='/v2/auth/w/pulse/add';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *POST https://api.bitfinex.com/v2/auth/w/pulse/del
     * */
    public function postPulseDel(array $data=[]){
        $this->type='POST';
        $this->path='/v2/auth/w/pulse/del';
        $this->data=$data;
        return $this->exec();
    }
}