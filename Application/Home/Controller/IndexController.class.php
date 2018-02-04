<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){

        //导航
        $slider = M('Slider');
        $slideresa = $slider->order('sort desc')->limit(1)->select();
        //pri($slideresa);
        //select得到的是二维数组，需要转成一维数组,传入banner
        $slideresaa = $slideresa[0];
        $this->assign('slidera',$slideresaa);

        //分类，返回三维数组
        $category = D('Common/Category');
        $cates = $category ->categoryTreeFront();
//        pri($cates);
        $this->assign('cates',$cates);

        $this->display();

        }


}