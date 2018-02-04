<?php
namespace Admin\Controller;
use Think\Controller;
class AdminController extends BaseController {
    public function index(){

        $admin = M('admin');
        $admines = $admin->select();
//        var_dump($admines);
        $this->assign('admines',$admines);
        $this->display('list');
    }

    public function add(){

        if(IS_POST){

//            pri($_POST);
            $data['username']  =  I('username');
            $data['password']  =  I('password');
            $data['status']  =  I('status') + 0;
            $data['time']  =   time();


            $admin  =  D('Common/Admin');

            if( $admin ->create($data)){
                if($admin->add()){
                    $this->success('新的管理员添加成功',U('index'),3);
                }else{
                    $this->error('新的管理员添加失败');
                }

            }else{
                $this->error($admin->getError());
            }

        }else{
            $this->display();
        }
    }


    public function edit(){

        if(IS_POST){

    //            pri($_POST);
            $data['username']  =  I('username');
            $data['password']  =  I('password');
            $data['status']  =  I('status') + 0;
            $data['id']  =   I('id') + 0;


            $admin  =  D('Common/Admin');

            if( $admin ->create($data)){
                $res = $admin->save();
                if( $res !== false ){
                    $this->success('管理员修改成功',U('index'),3);
                }else{
                    $this->error('管理员修改失败');
                }
            }else{
                $this->error($admin->getError());
            }

        }else{
            $id  =   I('id') + 0;
            $admin  =  D('Common/Admin');
            $adminesa = $admin->where(array('id'=>$id))->find();
            $this->assign('adminesa',$adminesa);
            $this->display();
        }
    }


    public function delete(){
        $id  =   I('id') + 0;
        $admin  =  D('Common/Admin');

        if($admin -> delete($id)){
            $this->success('管理员删除成功',U('index'),3);
        }else{
            $this->error('管理员删除失败');
        }
    }

}