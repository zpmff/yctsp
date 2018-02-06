<?php
namespace Home\Controller;
use Think\Controller;
class CarController extends Controller {

    //购物车列表，从session取数据
    public function index()
    {
        //pri($_SESSION);

        $this->assign('title','购物车列表');
        $this->assign('goods',$_SESSION['goods']);
        $this->display();
    }


    //加入购物车，其实是存在session中
    public function add()
    {
        $id = I('id');

        $good = M('goods');
        $goodesa = $good ->find($id);

        $_SESSION['goods'][$id] = $goodesa ;

        $this->success('加入购物车成功',U('car/index'));
    }

    public function ajax_delete(){

        pri($_POST);

//        $this->ajaxReturn(1,'JSON');
    }
}