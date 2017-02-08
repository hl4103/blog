<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 17-2-8
 * Time: 下午2:24
 */
namespace App\Http\Controllers\Demo;

use App\Http\Controllers\Controller;

use App\Http\Lib\Soap\TestSoap;

class DemoController extends Controller{

    public function index(){
        $arr = array(
            'location' => 'http://dev.blog.cc/Test.php',
            'uri'      => 'http://dev.blog.cc/'
        );
        $soap = new \SoapClient( null, $arr );

        echo $soap->say(),'<br />';

    }
}
