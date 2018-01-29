<?php
namespace Admin\Controller;
use Think\Controller;
class GoodsController extends Controller {
    public function index(){

        $goods = M('Goods');
        $sql = "select g.id,g.name,g.info,g.img,g.price,g.num,g.type,c.cname from goods as g LEFT JOIN category as c ON g.cid = c.id ORDER BY g.id DESC ";
        $goodses = $goods->query($sql);
//        pri($goodses);
        $this->assign('goodses',$goodses);
        $this->display('list');
    }





    public function add(){

        if(IS_POST){

//            var_dump($_FILES);
//            pri($_POST);

            //1.获取goods表的数据
            $data['name']  = trim( I('name'));
            $data['info']  = trim( I('info'));
            $data['price']  =  I('info') + 0;
            $data['num']  =  I('num') + 0;
            $data['cid']  =  I('cid') + 0;
            $data['type']  =  I('info') + 0;
            $data['text']  = trim( I('text'));
            $data['config']  = trim( I('config'));

            //2.获取goods表的img数据，存储封面展示图
            if($_FILES['img']['tmp_name']){

                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize   =     3145728 ;// 设置附件上传大小
                $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                $upload->rootPath  =     './'; // 设置附件上传根目录
                $upload->savePath  =     './Public/Uploads/Goods/'; // 设置附件上传（子）目录
                $upload->saveName  =     array('uniqid',''); // 图片第一无二

                // 上传文件
                $info   =   $upload->uploadOne($_FILES['img']);
                if(!$info) {// 上传错误提示错误信息
                    $this->error($upload->getError());
                }else{// 上传成功
                    $data['img']  =  $info['savepath'].$info['savename'];
                }

                //3.处理图片，生成缩略图
                $image = new \Think\Image();
                $image->open( $data['img']);
                // 按照原图的比例生成一个最大为150*150的缩略图并保存为thumb.jpg
                $image->thumb(180, 180)->save($data['img']);
            }

            //3.实例化后存入goods表
            $goods  =  D('Common/Goods');

            if( $goods ->create($data)){
                if( $good_id =  $goods->add()){

                    $goods_img = M('goods_img');

                    //4. 把数据存入goods表后，拿到id后，把id和图片存入goods_img表
                    //pri($_FILES);

                    if($_FILES['imgs']['tmp_name']) {
                        $upload = new \Think\Upload();// 实例化上传类
                        $upload->maxSize = 3145728;// 设置附件上传大小
                        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                        $upload->rootPath = './'; // 设置附件上传根目录
                        $upload->savePath = './Public/Uploads/Goods/'; // 设置附件上传（子）目录
                        $upload->saveName  =     array('uniqid',''); // 图片第一无二
                        // 上传文件
                        $info = $upload->upload(array($_FILES['imgs']));
                        if (!$info) {// 上传错误提示错误信息
                            $this->error($upload->getError());
                        } else {// 上传成功 获取上传文件信息
                            foreach ($info as $key => $file) {

                                $list['gid'] = $good_id;
                                $list['img'] = $file['savepath'] . $file['savename'];
                                $goods_img->add($list);

                            }
                        }
                    }
                    $this->success('新的商品添加成功',U('index'),3);
                }else{
                    $this->error('新的商品添加失败');
                }
            }else{
                $this->error($goods->getError());
            }
        }else{

            $cate = D('Common/Category');
            $cates = $cate->categoryTree();
            //pri($cates);
            $this->assign('cates',$cates);

            $this->display();
        }
    }







    public function edit(){

        if(IS_POST){
    //            pri($_POST);
            $data['cname']  =  I('cname');
            $data['info']  =  I('info');
            $data['id']  =   I('id') + 0;


            $cate  =  D('Common/Category');

            if( $cate ->create($data)){
                $res = $cate->save();
                if( $res !== false ){
                    $this->success('分类修改成功',U('index'),3);
                }else{
                    $this->error('分类修改失败');
                }
            }else{
                $this->error($cate->getError());
            }

        }else{
            $id  =   I('id') + 0;
            $cate  =  D('Common/Category');
            $catesa = $cate->where(array('id'=>$id))->find();
            $this->assign('catesa',$catesa);
            $this->display();
        }
    }


    //1.查出商品详细信息 2.表里删除商品记录，同时删除图片  3. 查出goods-img表里数据 4. 删除表里记录 5.删除图片
    public function delete(){
        $id  =   I('id') + 0;

        $goods  =  D('Common/Goods');
        $goodsesa = $goods->where(array('id'=>$id))->find();
//        pri($goodsesa);

        if($goods -> delete($id)){
            unlink( $goodsesa['img']);

            $goods_img = M('goods_img');
            $imgs =$goods_img ->where(array('gid'=>$goodsesa['id']))->select();
            foreach($imgs as $v){
                $goods_img->delete($v['id']);
                unlink($v['img']);
            }
            $this->success('商品删除成功',U('index'),3);
        }else{
            $this->error('商品删除失败');
        }
    }


    public function picList(){
        $id = I('id');
//        pri($id);
        $goods_img = M('Goods_img');
        $goods_imges = $goods_img->where(array('gid'=> $id) ) ->order('id desc')->select();
//        pri($goods_imges);
        $this->assign( 'goods_imges' ,$goods_imges);
        $this->display();
    }
}