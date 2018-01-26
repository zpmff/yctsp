<?php
namespace Admin\Controller;
use Think\Controller;
class GoodsController extends Controller {
    public function index(){

        $cate = D('Category');
        $cates = $cate->categoryTree();
//        var_dump($cates);
        $this->assign('cates',$cates);
        $this->display('list');
    }


    public function add(){

        if(IS_POST){

//            pri($_POST);
            $data['cname']  =  I('cname');
            $data['info']  =  I('info');

            $cate  =  D('Common/Category');

            if( $cate ->create($data)){
                if($cate->add()){
                    $this->success('新的分类添加成功',U('index'),3);
                }else{
                    $this->error('新的分类添加失败');
                }
            }else{
                $this->error($cate->getError());
            }
        }else{
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


    public function delete(){
        $id  =   I('id') + 0;
        $cate  =  D('Common/Category');

        if($cate -> delete($id)){
            $this->success('分类删除成功',U('index'),3);
        }else{
            $this->error('分类删除失败');
        }
    }

}