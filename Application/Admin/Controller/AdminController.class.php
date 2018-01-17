<?php
namespace Admin\Controller;
use Think\Controller;
class AdminController extends Controller {
    public function index(){

        $admin = M('admin');
        $admines = $admin->select();
        var_dump($admines);
        //$this->display();
    }
}