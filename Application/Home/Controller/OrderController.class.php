<?php
namespace Home\Controller;
use Think\Controller;
class OrderController extends Controller {

    public function lst()
    {
        //商品列表，传入的值分别为1级导航的商品列表，二级导航的商品列表和三级导航的商品列表，传入的id是导航的id

        $data['id'] = I('id');
        $data['level'] = I('level');


    }


}