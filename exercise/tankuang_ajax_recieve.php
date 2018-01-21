<?php
/**
 * Created by PhpStorm.
 * User: ZP
 * Date: 2018/1/20
 * Time: 22:27
 */

//http://libs.baidu.com/jquery/1.11.3/jquery.min.js

//echo json_encode($_POST)  ;



// 返回一维数组
$data['name'] = "aaa";
$data['age'] = 11 ;
$data['height'] = 180 ;
echo json_encode($data)  ;


// 返回二维数组
//$data['zhangsan'] = array("aaa",11,130);
//$data['lisi'] = array("bbb",18,180) ;
//$data['wangwu'] = array("ccc",30,165) ;
//echo json_encode($data)  ;


//返回字符串
//$str = "aaa";
//echo $str;