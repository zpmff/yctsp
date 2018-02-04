<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {

    public function login(){

        if(IS_POST){
//            pri($_POST);
            $data['username'] = I('username');
            $data['password'] = I('password');

            $admin = D('Common/Admin');

            if( $admin ->create( $data , 4) ){

                if( $admin -> login($data['username'],$data['password']) ){
                    $this->success('登录成功',U('index/index'));
                }else{
                    $this->error('您的用户名或者密码错误');
                }
            }else {
                $this->error($admin->getError());
            }

        }else{
                if(session('id')){
                    $this->error('您已经登录该系统，请不要重复登录',U('index/index'));
                }else{
                    $this->display();
                }

        }

    }

    public function logout(){
        session('id',null);
        session('username',null);

        $this->success('退出成功，前往登录页面',U('Login/Login'));
    }





















}