<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Bitfinex\Api;

use Lin\Bitfinex\Request;

class Wallet extends Request
{
    /**
     * POST https://api.bitfinex.com/v2/auth/r/wallets
     * */
    public function post(array $data=[]){
        $this->type='POST';
        $this->path='/v2/auth/r/wallets';
        $this->data=$data;
        return $this->exec();
    }

}