<?php
/**
 * Created by PhpStorm.
 * User: ZP
 * Date: 2018/1/1
 * Time: 22:12
 */

namespace Common\Model;
use Think\Model;

class CategoryModel extends Model {

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

    public function categoryTree(){
        $arr = $this->select();
        return $this->_cateDigui($arr) ;
    }

    private function _cateDigui( $arr ,$pid = 0 ,$level = 0 ){

        static  $data ;
        foreach( $arr as $k => $v){
            if($v['pid'] == $pid ){
                $v['level'] = $level;
                $data[]     =  $v   ;
                $this->_cateDigui($arr , $v['id'] , $level+1);
            }
        }
        return $data;
    }


    public function categoryTreeFront(){
        $arr = $this->select();
        return $this->_cateDiguiFrant($arr ,$pid = 0  );
    }

    private function _cateDiguiFrant( $arr ,$pid = 0  ){

        $list = array()  ;
        foreach( $arr as $k => $v){
            if($v['pid'] == $pid ){
                $child = $this->_cateDiguiFrant($arr, $v['id']) ;
                $v['child']     =  $child   ;
                $list[] = $v;;
            }
        }
        return $list;
    }




}