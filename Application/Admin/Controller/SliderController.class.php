<?php
namespace Admin\Controller;
use Think\Controller;
class SliderController extends Controller {
    public function index(){

        $slider = D('Slider');
        $slideres = $slider->order('sort desc')->select();
//        var_dump($cates);
        $this->assign('sliders',$slideres);
        $this->display('list');
    }


    public function add(){

        if(IS_POST){

//            var_dump($_FILES);
//            pri($_POST);
            //1. 接收数据
            $data['name']  =  I('name');
            $data['url']  =  I('url');
            $data['sort']  =  I('sort') + 0;

            //2.接收图片

            if($_FILES['img']['tmp_name']){

                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize   =     3145728 ;// 设置附件上传大小
                $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                $upload->rootPath  =     './'; // 设置附件上传根目录
                $upload->savePath  =     './Public/Uploads/'; // 设置附件上传（子）目录
                // 上传文件
                $info   =   $upload->uploadOne($_FILES['img']);
                if(!$info) {// 上传错误提示错误信息
                    $this->error($upload->getError());
                }else{// 上传成功
                    $data['img']  =  $info['savepath'].$info['savename'];
                }

                //                pri($data['img']);
                //3.处理图片，生成缩略图
                $image = new \Think\Image();
                $image->open( $data['img']);
                // 按照原图的比例生成一个最大为150*150的缩略图并保存为thumb.jpg
                $image->thumb(30, 30)->save($data['img']);
            }


            //4.实例化
            $slider  =  D('Common/Slider');

            if( $slider ->create($data)){
                if($slider->add()){
                    $this->success('新的轮播图添加成功',U('index'),3);
                }else{
                    $this->error('新的轮播图添加失败');
                }
            }else{
                $this->error($slider->getError());
            }
        }else{
            $this->display();
        }
    }


    public function edit(){

        if(IS_POST){

//            var_dump($_FILES);
//            pri($_POST);
            //1. 接收数据
            $data['name']  =  I('name');
            $data['url']  =  I('url');
            $data['sort']  =  I('sort') + 0;
            $data['id']  =   I('id') + 0;


            //2.接收图片,如果上传了，则存储；如果没上传，则空的

            if($_FILES['img']['tmp_name']){

                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize   =     3145728 ;// 设置附件上传大小
                $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                $upload->rootPath  =     './'; // 设置附件上传根目录
                $upload->savePath  =     './Public/Uploads/'; // 设置附件上传（子）目录
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
                $image->thumb(30, 30)->save($data['img']);
            }else{
                $data['id']  =   I('id') + 0;
            }



            //4. 创建对象
            $slider  =  D('Common/Slider');

            if( $slider ->create($data)){
                $res = $slider->save();
                if( $res !== false ){
                    $this->success('轮播图修改成功',U('index'),3);
                }else{
                    $this->error('轮播图修改失败');
                }
            }else{
                $this->error($slider->getError());
            }

        }else{
            $id  =   I('id') + 0;
            $slider  =  D('Common/Slider');
            $slideresa = $slider->where(array('id'=>$id))->find();
            $this->assign('slideresa',$slideresa);
            $this->display();
        }
    }


    public function delete(){
        $id  =   I('id') + 0;
        $slider  =  D('Common/Slider');

        if($slider -> delete($id)){
            $this->success('轮播图删除成功',U('index'),3);
        }else{
            $this->error('轮播图删除失败');
        }
    }

}