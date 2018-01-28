<?php
namespace Admin\Controller;
use Think\Controller;
class OrderController extends Controller {
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


//=========================================================================================================================================
//1.主要是订单状态的列表，添加和删除 2.都是死的，一般系统上线前录入好，不进行修改，所以没有修改操作

    public function order_status_index(){

        $order_status = M('order_status');
        $order_statuses = $order_status->order('id desc')->select();
//        var_dump($admines);
        $this->assign('order_statuses',$order_statuses);
        $this->display();
    }

    public function order_status_add(){

        if(IS_POST){

            $data['name']  =  I('name');


            $order_status = D('order_status');

            if( $order_status ->create($data)){
                if($order_status->add()){
                    $this->success('新的订单状态添加成功',U('order_status_index'),3);
                }else{
                    $this->error('新的订单状态添加失败');
                }

            }else{
                $this->error($order_status->getError());
            }

        }else{
            $this->display();
        }
    }


    public function order_status_delete(){
        $id  =   I('id') + 0;

        $order_status = D('order_status');

        if($order_status -> delete($id)){
            $this->success('订单状态删除成功',U('order_status_index'),3);
        }else{
            $this->error('订单状态删除失败');
        }
    }
}