<?php

namespace App\Http\Lib\Soap;
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 17-2-8
 * Time: 下午2:32
 */

class TestSoap{

    /**
     * @param $pw
     * @throws \SoapFault
     */
//    public function auth($pw){
//        if ($pw != '123456') {
//            throw new \SoapFault('Server', '您无权访问');
//        }
//    }

    /**
     * @return string
     */
    public function say(){
        return "Hello World!";
    }
}