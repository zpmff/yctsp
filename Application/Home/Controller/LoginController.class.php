<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {

    public function login()
    {
        if( IS_POST){

            //pri($_POST);

            $data['name'] = I('name');
            $data['pass'] = I('pass');

            $user = D('Common/User');
            if( $user ->create($data,4 )){
                if( $user -> login($data['name'],$data['pass']) ){
                    $this->success('登录成功',U('index/index'));
                }else{
                    $this->error('您的用户名或者密码错误');
                }
            }else{
                $this->error($user->getError());
            }

        }else{
            if(session('user_id')){
                $this->error('您已经登录该系统，请不要重复登录',U('index/index'));
            }else{
                $this->display();
            }
        }


    }



    public function logout(){
        session('user_id',null);
        session('user_name',null);

        $this->success('退出成功，前往登录页面',U('Login/Login'));
    }


}