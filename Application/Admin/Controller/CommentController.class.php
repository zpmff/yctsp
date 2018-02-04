<?php
namespace Admin\Controller;
use Think\Controller;
class CommentController extends BaseController {
    public function index(){


        $comment = M('Comment'); // 实例化对象
        $count      = $comment ->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,3);// 实例化分页类 传入总记录数和每页显示的记录数2
        $show       = $Page->show();// 分页显示输出


        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性,连表查询
        $list = $comment->table('comment , goods , user')
            ->field('comment.id as id ,goods.name as gname ,goods.img as img ,user.name as uname, comment.text as text , comment.time as time, comment.star as star  ')
            ->order('comment.id desc')
            ->where('comment.gid=goods.id AND comment.uid =user.id')
            ->limit($Page->firstRow.','.$Page->listRows)->select();

//        pri($list);
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出

        $this->display('list'); // 输出模板

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