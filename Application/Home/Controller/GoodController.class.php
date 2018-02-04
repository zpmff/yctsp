<?php
namespace Home\Controller;
use Think\Controller;
class GoodController extends Controller {

    public function lst(){
    //商品列表，传入的值分别为1级导航的商品列表，二级导航的商品列表和三级导航的商品列表

        $data['id'] = I('id');
        $data['level'] = I('level');

        $good = D('Common/goods');

        if( $data['level'] == 3 ){
            $goodes = $good ->order('id desc')->select();
//            pri($goodes);
            $this->assign('goods', $goodes);

        }elseif( $data['level'] == 2 ){


        }else{


        }

        $this->display();

        }


    public function goodesa(){
        //单个商品的详细内容
        $data['id'] =  I('id');

        $good = D('Common/goods');
        $goodesa = $good ->find($data['id']);
//        pri($goodesa);


        $this->assign('goodesa',$goodesa);
        $this->display();
    }


}