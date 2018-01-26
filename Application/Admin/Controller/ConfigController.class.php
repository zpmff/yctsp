<?php
namespace Admin\Controller;
use Think\Controller;
class ConfigController extends Controller {


    public function index(){

        if(IS_POST){

//            pri($_POST);
            $config['TITLE']  =  I('TITLE');
            $config['KEYWORDS']  =  I('KEYWORDS');
            $config['DESCRIPTION']  =  I('DESCRIPTION');
            $config['BANQUAN']  =  I('BANQUAN');

            C('TITLE',$config['TITLE']);

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