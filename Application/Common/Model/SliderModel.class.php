<?php
/**
 * Created by PhpStorm.
 * User: ZP
 * Date: 2018/1/1
 * Time: 22:12
 */

namespace Common\Model;
use Think\Model;

class AdminModel extends Model {

    protected $_validate = array(
        array('username','require','管理员名称不能为空',0,'regex',3), //在新增和修改的时候，都必须验证name 必须存在
        array('username','','管理员名称已经存在！',0,'unique',3), // 在新增的时候验证name字段是否唯一
        array('username','3,12','管理员名称长度为3-12位字符！',0,'length',3), // 在新增的时候验证name字段是否唯一
        array('password','require','密码不能为空',0,'regex',3), //在新增和修改的时候，都必须验证name 必须存在
        array('password','3,20','密码长度为3-12位字符',0,'length',3), //在新增和修改的时候，都必须验证name 必须存在
        array('repassword','password','两次输入的密码不一致',0,'confirm',3),
//        array('ad_name','require','用户名不能为空',0,'regex',4),
//        array('ad_password','require','密码不能为空',0,'regex',4), //登录的时候，都必须验证name 必须存在
//        array('verify','check_verify','验证码不正确',0,'callback',4), //登录的时候，都必须验证name 必须存在
    );

    protected $_auto = array (
        array('password','md5',3,'function') , // 对password字段在新增和编辑的时候使md5函数处理

    );















    public function login($username ,$password){

        $info = $this->where(array('ad_name'=>$username))->find();

        if($info){
            if($info['ad_password'] == md5($password)){
                session('ad_id',$info['ad_id']);
                session('ad_name',$info['ad_name']);
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