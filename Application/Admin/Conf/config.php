<?php
return array(
	//'配置项'=>'配置值'
    'TMPL_PARSE_STRING'  =>array(
        '__ADMINSTYLE__' => SITE_URL.'/Application/Admin/Public/style',
        '__ADMINFONTS__' => SITE_URL.'/Application/Admin/Public/fonts',
        '__ADMINIMAGES__' => SITE_URL.'/Application/Admin/Public/images',
        '__UEDITOR__' => SITE_URL.'/Public/ueditor/',
    ),

    //配置后台模板
    'LAYOUT_ON'=>true,
    'LAYOUT_NAME'=>'layout',

);