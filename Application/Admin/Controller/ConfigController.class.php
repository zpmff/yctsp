<?php
namespace Admin\Controller;
use Think\Controller;
class ConfigController extends BaseController {


    public function index(){

        if(IS_POST){

            //修改系统的配置，由于大C函数只是临时的修改，修改后不能写到文件里，所以只能通过file_put_contnts写入文件
            //1. 先读取文件，读取后是个数组  2.读取的数组和用户修改后的数组合并  3.把数组转化为字符串 4.加入<?php ...> 5.写入文件


//            pri($_POST);
            $config['TITLE']  =  I('TITLE');
            $config['KEYWORDS']  =  I('KEYWORDS');
            $config['DESCRIPTION']  =  I('DESCRIPTION');
            $config['BANQUAN']  =  I('BANQUAN');

            //获取公共文件的数据
            $arr = include "./Application/Common/conf/config.php";
            //pri($arr);
            $brr = array_merge($arr , $config) ;
            //pri($brr);

            //遍历字符串，写入源文件
            $str = "";
            foreach($brr as $key => $value){
                $str .= "'$key' => '$value',\n";
            }
            //pri($str);

            $newStr = "<?php return array( \n $str \n ); ?>";
            //pri($newStr);

            file_put_contents("./Application/Common/conf/config.php",$newStr);

            $this->success('修改配置成功',U('index'),3);

        }else{

            $config['TITLE'] = C('TITLE');
            $config['KEYWORDS'] = C('KEYWORDS');
            $config['DESCRIPTION'] = C('DESCRIPTION');
            $config['BANQUAN'] = C('BANQUAN');

            $this->assign('config',$config);
            $this->display();
        }
    }




}