<?php
namespace Admin\Controller;
use Think\Controller;

class UserController extends Controller {


    public function index(){

        $user = D('Common/User'); // 实例化对象
        $count      = $user ->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,2);// 实例化分页类 传入总记录数和每页显示的记录数2
        $show       = $Page->show();// 分页显示输出

        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $user ->field()->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();

        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
//        pri($list);
        $this->display('list'); // 输出模板

    }

    public function add(){
        if(IS_POST){
//            pri($_POST);

            //1.获取变量
            $data['name'] = trim(I('name'));
            $data['pass'] = trim(I('pass'));
            $data['repass'] = trim(I('repass'));
            $data['time'] = time() ;

            //2. 验证变量
            $user = D('Common/User');

            //3.存入库中
            if($user->create($data)){
                if($user->add()){
                    $this->success('新的用户添加成功',U('index'),3);
                }else{
                    $this->error('新的用户添加失败');
                }
            }else{
                $this->error($user->getError());
            }
        }else{
            $this->display('add');
        }

    }

    public function edit(){
        if(IS_POST){

            //1.获取变量
            $data['name'] = trim(I('name'));
            $data['pass'] = trim(I('pass'));
            $data['repass'] = trim(I('repass'));
            $data['id'] =  I('id') + 0;

            //2. 验证变量
            $user = D('Common/User');

            //3.存入库中
            if($user->create($data)){
                $res = $user->save();
                if( $res !== false ){
                    $this->success('用户修改成功',U('index'),3);
                }else{
                    $this->error('用户修改失败');
                }
            }else{
                $this->error($user->getError());
            }

        }else{
            $id = I('id') + 0 ;

            $user = D('Common/User');
            $useresa = $user->find($id);
            $this->assign('useresa',$useresa);
            $this->display('edit');
        }

    }

    public function  delete(){

        $id = I('id') + 0 ;
        $user =  D('Common/User');

        if($user -> delete($id)){
            $this->success('用户删除成功',U('index'),3);
        }else{
            $this->error('用户删除失败');
        }

    }

    public  function  Adelete(){
        pri($_POST);

        $ids = I('ad_id') ;
        if($ids){
            $del_ids = implode(',',$ids);

            $admin  =  D('Common/Admin');
            if($admin->delete($del_ids)){
                $this->success('用户删除成功',U('index'),3);
            }else{
                $this->error('用户删除失败');
            }
        }
    }


    public function ajax_userInfo(){
        $id  = I('id') + 0 ;

        $userInfo = M('user_info');
        $userInfoesa = $userInfo ->where(array('uid'=>$id))->find();
//        $this->data = $userInfo ->where(array('uid'=>$id))->find();

//        pri($userInfoesa);

        if($userInfoesa){
            $this->ajaxReturn($userInfoesa);
//            echo $userInfoesa;
//            return $userInfoesa;
//            echo $this->fetch();
        }else{
            echo "0";
        }
    }
}