<?php

/**
 * Created by PhpStorm.
 * User: lab
 * Date: 26/11/2559
 * Time: 13:47
 */
class Home extends  CI_Controller

{
    public function index(){
        echo "Hello";
    }
    public function test($name = "My Test", $lastname = "Najaa"){
        echo "My name is :" . $name ." ".$lastname;

    }
    public function calcculator($a,$d){
        print "=" .($a + $d) ;
}


}