<?php
namespace Admin\Controller;
use Think\Controller;
class OrderController extends Controller {
    public function index(){


//        $sql= "SELECT o.id as id , o.code as code , u.name as name, o.time as time ,os.name,ad.sheng as sheng, ad.shi as shi ,ad.qu as qu
//               FROM `order` as o LEFT JOIN `user` as u  ON o.uid = u.id LEFT JOIN order_status as os  ON o.osid = os.id
//               LEFT JOIN address as ad on ad.uid = u.id";

        $order = D('order'); // 实例化对象
        $count      = $order ->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,3);// 实例化分页类 传入总记录数和每页显示的记录数2
        $show       = $Page->show();// 分页显示输出


        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性,连表查询
        $list = $order->table('order , user , order_status os')
            ->field('order.id as id ,order.code as code , order.uid as uid , order.gid as gid ,user.name as name ,order.time as time, os.name as osname')
            ->order('order.id desc')
            ->where('order.uid=user.id AND order.osid=os.id')
            ->limit($Page->firstRow.','.$Page->listRows)->select();

//        pri($list);
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出

        $this->display('list'); // 输出模板


    }

    public function address(){

        $uid = I('uid') + 0;
//        var_dump($uid);

        $addr = M('address');

        $addressa = $addr ->where(array('uid'=>$uid))->find();
//        pri($addressa);

        $this->assign('addressa',$addressa);
        $this->display();
    }



    public function goodList(){

        $id = I('id') + 0;
//        pri($id);

        $order_good = M('order_good ');
        $order_goodes = $order_good->where(array('oid'=>$id))->select();

//        var_dump($order_goodes);
        $gids = array();
        foreach( $order_goodes as $k =>$v){
            $gids[] = $v['gid'];
        }
//        pri($gids);
        $goods = M('goods');
        $map['id']  = array('IN',$gids);
        $goodes = $goods->where($map)->select();
//        var_dump($goodes);

        $this->assign( 'goodes',$goodes);
        $this->display();
    }


    //修改只能修改订单状态，别的不能修改
    public function edit(){

        if(IS_POST){

    //            pri($_POST);
            $data['osid']  =  I('osid') + 0;
            $data['id']  =   I('id') + 0;
//            pri($data);

            $order = D('order');

            if( $order ->create($data)){
                $res = $order->save();
                if( $res !== false ){
                    $this->success('订单状态修改成功',U('index'),3);
                }else{
                    $this->error('订单状态修改失败');
                }
            }else{
                $this->error($order->getError());
            }

        }else{
            $id  =   I('id') + 0;
            $order = D('order');
            $orderesa = $order->where(array('id'=>$id))->find();
            $this->assign('orderesa',$orderesa);

            $order_status = D('order_status');
            $order_statuses = $order_status->select();
            $this->assign('order_statuses',$order_statuses);

            $this->display();
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