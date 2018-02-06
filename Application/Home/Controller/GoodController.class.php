<?php
namespace Home\Controller;
use Think\Controller;
class GoodController extends Controller {

    public function lst(){
    //商品列表，传入的值分别为1级导航的商品列表，二级导航的商品列表和三级导航的商品列表，传入的id是导航的id

        $data['id'] = I('id');
        $data['level'] = I('level');

        $good = D('Common/goods');

        if( $data['level'] == 3 ){

            //三级导航进入，直接选择cid是传入id的
            $goodes = $good -> where(array('cid'=>$data['id']))->order('id desc')->select();
//            pri($goodes);
            $this->assign('goods', $goodes);

            $title = "从三级导航进入的列表页";
            $this->assign('title', $title);


        }elseif( $data['level'] == 2 ){

            //二级导航进入，通过传入的2级导航的id，找到3级导航的id，然后把多个三级导航的id合并成字符串，然后选择三级导航的cid
            //SELECT `id` FROM `category` WHERE `pid` = 7
            //SELECT * FROM `goods` WHERE `cid` IN ('14','15') ORDER BY id desc

            $cate = D('Common/Category');
            $cates = $cate ->field('id')->where(array('pid'=>$data['id']))->select();
            //pri($cates);
            $cids = array();
            foreach($cates as $k =>$v){
                $cids[] = $v['id'];
            }
            //pri($cids);
            $cids = join(',',$cids);
            //pri($cids);
            $map['cid'] = array('IN',$cids);
            $goodes = $good->where($map)->order('id desc')->select();
            //pri($goodes);

            $this->assign('goods', $goodes);

            $title = "从二级导航进入的列表页";
            $this->assign('title', $title);

        }else{
            //一级导航进入，通过传入的1级导航的id，只要path中有一级导航的id，证明都是一级导航的子类， 把所有的子类的（包括2级导航和3级导航）的id组合一下，然后把合并成字符串，然后选择三级导航的cid
            //SELECT `id` FROM `category` WHERE `path` LIKE '%,8,%'
            //SELECT * FROM `goods` WHERE `cid` IN ('14','15') ORDER BY id desc

            $cate = D('Common/Category');
            $map1['path'] = array('LIKE',"%,{$data['id']},%");
            $cates = $cate ->field('id')->where($map1)->select();
            //pri($cates);
            $cids = array();
            foreach($cates as $k =>$v){
                $cids[] = $v['id'];
            }
            //pri($cids);
            $cids = join(',',$cids);
            //pri($cids);
            $map2['cid'] = array('IN',$cids);
            $goodes = $good->where($map2)->order('id desc')->select();
            //pri($goodes);

            $this->assign('goods', $goodes);

            $title = "从一级导航进入的列表页";
            $this->assign('title', $title);
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