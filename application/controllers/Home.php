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
        $this ->load->view ('layout/header_view');
        $this ->load->view ('Home_views');

}
    public function test(){
        $this ->load->view ('layout/header_view');
        $this ->load->view ('test_view');
}

}