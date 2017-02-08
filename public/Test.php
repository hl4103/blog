<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 17-2-8
 * Time: 下午2:48
 */
$arr = array(
    'location' => 'http://dev.blog.cc/Test.php',
    'uri' => 'http://dev.blog.cc/'
);
$soap = new SoapServer(null, $arr);

$soap->setClass(TestSoap::class);  //允许客户端调用所有的方法
$soap->handle();

class TestSoap{

    /**
     * @return string
     */
    public function say(){
        return "Hello World!";
    }
}
