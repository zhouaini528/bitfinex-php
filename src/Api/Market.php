<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Bitfinex\Api;

use Lin\Bitfinex\Request;

class Market extends Request
{
    /**
     * 
     * */
    public function get(array $data=[]){
        $this->type='GET';
        $this->path='';
        $this->data=$data;
        return $this->exec();
    }

}