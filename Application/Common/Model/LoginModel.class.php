<?php
/**
 * Created by PhpStorm.
 * User: ZP
 * Date: 2018/1/1
 * Time: 22:12
 */

namespace Common\Model;
use Think\Model;

class LoginModel extends Model {

    protected $_validate = array(
        array('username','require','用户名不能为空',0,'regex',4),
        array('password','require','密码不能为空',0,'regex',4), //登录的时候，都必须验证name 必须存在
//        array('verify','check_verify','验证码不正确',0,'callback',4), //登录的时候，都必须验证name 必须存在
    );


    public function login($username ,$password){

        $info = $this->where(array('username'=>$username))->find();

        if($info){
            if($info['password'] == md5($password)){
                session('id',$info['id']);
                session('username',$info['username']);
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }

    public function check_verify($code, $id = ''){

        $verify = new \Think\Verify();
        return $verify->check($code, $id);
    }
}