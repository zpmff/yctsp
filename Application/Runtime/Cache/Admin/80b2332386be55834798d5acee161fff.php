<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html><head>
    <meta charset="utf-8">
    <title>创意空间后台</title>

    <meta name="description" content="Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="http://127.0.0.1/yctsp/Application/Admin/Public/style/bootstrap.css" rel="stylesheet">
    <link href="http://127.0.0.1/yctsp/Application/Admin/Public/style/font-awesome.css" rel="stylesheet">
    <link href="http://127.0.0.1/yctsp/Application/Admin/Public/style/weather-icons.css" rel="stylesheet">

    <!--Beyond styles-->
    <link id="beyond-link" href="http://127.0.0.1/yctsp/Application/Admin/Public/style/beyond.css" rel="stylesheet" type="text/css">
    <link href="http://127.0.0.1/yctsp/Application/Admin/Public/style/demo.css" rel="stylesheet">
    <link href="http://127.0.0.1/yctsp/Application/Admin/Public/style/typicons.css" rel="stylesheet">
    <link href="http://127.0.0.1/yctsp/Application/Admin/Public/style/animate.css" rel="stylesheet">

</head>

<body>
<!-- 头部 -->
<div class="navbar">
    <div class="navbar-inner">
        <div class="navbar-container">
            <!-- Navbar Barnd -->
            <div class="navbar-header pull-left">
                <a href="#" class="navbar-brand">
                    <small>
                        <img src="http://127.0.0.1/yctsp/Application/Admin/Public/images/logo.png" alt="">
                    </small>
                </a>
            </div>
            <!-- /Navbar Barnd -->
            <!-- Sidebar Collapse -->
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="collapse-icon fa fa-bars"></i>
            </div>
            <!-- /Sidebar Collapse -->
            <!-- Account Area and Settings -->
            <div class="navbar-header pull-right">
                <div class="navbar-account">
                    <ul class="account-area">
                        <li>
                            <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                <!--<div class="avatar" title="View your public profile">-->
                                    <!--<img src="http://127.0.0.1/yctsp/Application/Admin/Public/images/adam-jansen.jpg">-->
                                <!--</div>-->
                                <section>
                                    <h2><span class="profile"><span><?php echo (session('username')); ?></span></span></h2>
                                </section>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="username"><a>David Stevenson</a></li>
                                <li class="dropdown-footer">
                                    <a href="/yctsp/index.php/Admin/Login/logout">
                                        退出登录
                                    </a>
                                </li>
                                <li class="dropdown-footer">
                                    <a href="/admin/user/changePwd.html">
                                        修改密码
                                    </a>
                                </li>
                            </ul>
                            <!--/Login Area Dropdown-->
                        </li>
                        <!-- /Account Area -->
                        <!--Note: notice that setting div must start right after account area list.
                            no space must be between these elements-->
                        <!-- Settings -->
                    </ul>
                </div>
            </div>
            <!-- /Account Area and Settings -->
        </div>
    </div>
</div>

<!-- /头部 -->

	<div class="main-container container-fluid">
		<div class="page-container">
            <!-- Page Sidebar -->

            <!-- Page Sidebar -->
<div class="page-sidebar" id="sidebar">
    <!-- Page Sidebar Header-->
    <div class="sidebar-header-wrapper">
        <input class="searchinput" type="text">
        <i class="searchicon fa fa-search"></i>
        <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
    </div>
    <!-- /Page Sidebar Header -->
    <!-- Sidebar Menu -->
    <ul class="nav sidebar-menu">
        <!--Dashboard-->
        <li>
            <a href="/yctsp/index.php/Admin/Admin/index">
                <i class="menu-icon fa fa-gear"></i>
                <span class="menu-text">管理员管理</span>
                <i class="menu-expand"></i>
            </a>
        </li>
        <li>
            <a href="/yctsp/index.php/Admin/User/index">
                <i class="menu-icon fa fa-gear"></i>
                <span class="menu-text">用户管理</span>
                <i class="menu-expand"></i>
            </a>
        </li>

        <li>
            <a href="/yctsp/index.php/Admin/Category/index">
                <i class="menu-icon fa fa-gear"></i>
                <span class="menu-text">分类管理</span>
                <i class="menu-expand"></i>
            </a>
        </li>

        <li>
            <a href="/yctsp/index.php/Admin/Slider/index">
                <i class="menu-icon fa fa-gear"></i>
                <span class="menu-text">轮播图管理</span>
                <i class="menu-expand"></i>
            </a>
        </li>

        <li>
            <a href="/yctsp/index.php/Admin/Config/index">
                <i class="menu-icon fa fa-gear"></i>
                <span class="menu-text">配置管理</span>
                <i class="menu-expand"></i>
            </a>
        </li>

        <li>
            <a href="/yctsp/index.php/Admin/Goods/index">
                <i class="menu-icon fa fa-gear"></i>
                <span class="menu-text">商品管理</span>
                <i class="menu-expand"></i>
            </a>
        </li>

        <li>
            <a href="/yctsp/index.php/Admin/Order/index">
                <i class="menu-icon fa fa-gear"></i>
                <span class="menu-text">订单管理</span>
                <i class="menu-expand"></i>
            </a>
        </li>

        <li>
            <a href="/yctsp/index.php/Admin/Order/order_status_index">
                <i class="menu-icon fa fa-gear"></i>
                <span class="menu-text">订单状态管理</span>
                <i class="menu-expand"></i>
            </a>
        </li>

        <li>
            <a href="/yctsp/index.php/Admin/Comment/index">
                <i class="menu-icon fa fa-gear"></i>
                <span class="menu-text">评论管理</span>
                <i class="menu-expand"></i>
            </a>
        </li>

        <!--<li>-->
            <!--<a href="#" class="menu-dropdown">-->
                <!--<i class="menu-icon fa fa-gear"></i>-->
                <!--<span class="menu-text">文档 </span>-->
                <!--<i class="menu-expand"></i>-->
            <!--</a>-->
            <!--<ul class="submenu">-->
                <!--<li>-->
                    <!--<a href="/admin/document/index.html">-->
                                    <!--<span class="menu-text">-->
                                        <!--文章列表                                    </span>-->
                        <!--<i class="menu-expand"></i>-->
                    <!--</a>-->
                <!--</li>-->

            <!--</ul>-->
        <!--</li>-->
        <!--<li class="open">-->
            <!--<a href="#" class="menu-dropdown">-->
                <!--<i class="menu-icon fa fa-gear"></i>-->

                            <!--<span class="menu-text">-->
                                <!--系统                            </span>-->

                <!--<i class="menu-expand"></i>-->
            <!--</a>-->
            <!--<ul class="submenu">-->
                <!--<li class="active">-->
                    <!--<a href="/admin/user/index.html">-->
                                    <!--<span class="menu-text">-->
                                        <!--用户管理                                    </span>-->
                        <!--<i class="menu-expand"></i>-->
                    <!--</a>-->
                <!--</li>-->
                <!--<li>-->
                    <!--<a href="/admin/auth_group/index.html">-->
                                    <!--<span class="menu-text">-->
                                        <!--角色管理                                    </span>-->
                        <!--<i class="menu-expand"></i>-->
                    <!--</a>-->
                <!--</li>-->
                <!--<li>-->
                    <!--<a href="/admin/auth_rule/index.html">-->
                                    <!--<span class="menu-text">-->
                                        <!--权限列表                                    </span>-->
                        <!--<i class="menu-expand"></i>-->
                    <!--</a>-->
                <!--</li>-->

            <!--</ul>-->
        <!--</li>-->

    </ul>
    <!-- /Sidebar Menu -->
</div>
<!-- /Page Sidebar -->

            <!-- /Page Sidebar -->
            <!-- Page Content -->
            <div class="page-content">
                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                        <li><a href="#">系统</a></li>
                        <li class="active">评论管理</li>
                    </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                    
<button type="button" tooltip="添加用户" class="btn btn-sm btn-azure btn-addon" onClick="javascript:window.location.href = '/yctsp/index.php/Admin/Comment/add'"> <i class="fa fa-plus"></i> 添加用户</button>
<button type="button" tooltip="批量删除" class="btn btn-sm btn-azure btn-addon" onClick="javascript:document.getElementById('myForm').submit()"> <i class="fa fa-plus"></i> 批量删除</button>

<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-body">
                <div class="flip-scroll">
                    <table class="table table-bordered table-hover">
                        <thead class="">
                            <tr>

                                <th class="text-center">评论ID</th>
                                <th class="text-center">物品名称</th>
                                <th class="text-center">物品图片</th>
                                <th class="text-center">购买者</th>
                                <th class="text-center">评论内容</th>
                                <th class="text-center">评论时间</th>
                                <th class="text-center">星数</th>
                                <th class="text-center">操作</th>
                            </tr>
                        </thead>
                        <tbody>

                        <form action="/yctsp/index.php/Admin/Comment/Adelete" method="post" id="myForm" >

                        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>

                                <td align="center"><?php echo ($vo["id"]); ?></td>
                                <td align="center"><?php echo ($vo["gname"]); ?></td>
                                <td align="center"><?php echo ($vo["img"]); ?></td>
                                <td align="center"><?php echo ($vo["uname"]); ?></td>
                                <td align="center"><?php echo ($vo["text"]); ?></td>
                               <td align="center"><?php echo (date("Y-m-d",$vo["time"])); ?></td>
                                <td align="center"><?php echo ($vo["star"]); ?></td>

                                <td align="center">
                                    <a href="#" onClick="warning('确实要删除吗', '/yctsp/index.php/Admin/Comment/delete/id/<?php echo ($vo["id"]); ?>')" class="btn btn-danger btn-sm shiny">
                                        <i class="fa fa-trash-o"></i> 删除
                                    </a>
                                </td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>

                        </form>

                        </tbody>

                    </table>
                    <?php echo ($page); ?>
                </div>
                <div>
                	                </div>
            </div>
        </div>
    </div>
</div>

                </div>
                <!-- /Page Body -->
            </div>
            <!-- /Page Content -->
		</div>	
	</div>



    <!--模态框，用来弹框的，查看用户详情-->
    <!-- Modal -->
    <div class="modal fade" id="select_model" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="Lal">查看用户详情</h4>
                </div>
                <div class="modal-body" id="select_user_info">

                    <form class="form-horizontal">
                        <div class="form-group">
                            <label for="sex_zhanshi" class="col-sm-4 control-label">性别</label>
                            <label for="sex_zhanshi" class="col-sm-2  control-label" id="sex_zhanshi"></label>
                        </div>
                        <div class="form-group">
                            <label for="sex" class="col-sm-4 control-label">生日</label>
                            <label for="sex" class="col-sm-2  control-label" id="birthday_zhanshi"></label>
                        </div>
                        <div class="form-group">
                            <label for="sex" class="col-sm-4 control-label">真实姓名</label>
                            <label for="sex" class="col-sm-2  control-label" id="zsname_zhanshi"></label>
                        </div>
                        <div class="form-group">
                            <label for="sex" class="col-sm-4 control-label">省</label>
                            <label for="sex" class="col-sm-2  control-label" id="sheng_zhanshi"></label>
                        </div>
                        <div class="form-group">
                            <label for="sex" class="col-sm-4 control-label">市</label>
                            <label for="sex" class="col-sm-2  control-label" id="shi_zhanshi"></label>
                        </div>
                        <div class="form-group">
                            <label for="sex" class="col-sm-4 control-label">区</label>
                            <label for="sex" class="col-sm-2  control-label" id="qu_zhanshi"></label>
                        </div>
                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" onclick="close_select_model()">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!--模态框，用来弹框的，显示暂无用户信息-->
    <!-- Modal -->

    <div class="modal fade" id="no_model" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="Label">查看用户详情</h4>
                </div>
                <div class="modal-body" id="selo">
                    暂无该用户详情
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" onclick="close_Modal()">Close</button>
                </div>
            </div>
        </div>
    </div>





    <!--模态框，用来弹框的，编辑用户详情-->
    <!-- Modal -->
    <div class="modal fade" id="edit_model" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">编辑用户详情</h4>
                </div>
                <div class="modal-body">

                    <form class="form-horizontal" method="post" action="/yctsp/index.php/Admin/Comment/ajax_edit_userInfo" id="edit_from">
                        <div class="form-group">
                            <label for="sex" class="col-sm-2 control-label">性别</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="sex"  name="sex" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="sex" class="col-sm-2 control-label">生日</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="birthday"  name="birthday" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="sex" class="col-sm-2 control-label">真实姓名</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="zsname"  name="zsname" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="sex" class="col-sm-2 control-label">省份</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="sheng"  name="sheng" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="sex" class="col-sm-2 control-label">城市</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="shi"  name="shi" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="sex" class="col-sm-2 control-label">区域</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="qu"  name="qu" value="">
                            </div>
                        </div>

                        <input type="hidden" name="id" id="id" value="">

                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                    <button type="button" class="btn btn-primary" onclick="edit_form_subm()">保存</button>
                </div>
            </div>
        </div>
    </div>


    <!--模态框，用来提交修改信息后，如果成功，则提示成功；如果失败，则提交失败-->
    <!-- Modal -->

    <div class="modal fade" id="edit_result" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="L">修改结果</h4>
                </div>
                <div class="modal-body" id="result">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" onclick="close_edit_result_Modal()">Close</button>
                </div>
            </div>
        </div>
    </div>



   <script>

       //查看用户信息
       function users(id){
           $.post("/yctsp/index.php/Admin/Comment/ajax_userInfo", { id: id },
                   function(data){

                        //alert(typeof(data));//需要看后台返回的是json字符串 还是对象，如果是字符串的话需要parse解析一下，如exercise的例子；如果直接是对象的话不用解析，直接打印就行，thinkphp就是直接是对象
                        //alert(data.pic);
                       //alert( data);
//                       alert( data == '0');

                       if(data == '0' ){

                           $('#no_model').modal('show');

                       } else {
                           $('#sex_zhanshi').html(data.sex);
                           $('#birthday_zhanshi').html(data.birthday);
                           $('#zsname_zhanshi').html(data.zsname);
                           $('#sheng_zhanshi').html(data.sheng);
                           $('#shi_zhanshi').html(data.shi);
                           $('#qu_zhanshi').html(data.qu);

                           $('#select_model').modal('show');
                       }
                   });
       }


       function close_select_model(){
           $('#select_model').modal('hide');
       }

       function close_Modal(){
           $('#no_model').modal('hide');
       }

       function close_Modal(){
           $('#no_model').modal('hide');
       }

       function close_edit_result_Modal(){
           $('#edit_model').modal('hide');
           $('#edit_result').modal('hide');
       }


       //编辑用户信息时，需要先载入用户详细信息，如果没有的话，返回暂无此用户信息
       function select_users(id){
           $.post("/yctsp/index.php/Admin/Comment/ajax_userInfo", { id: id },
                   function(data){

                       //alert(typeof(data));//需要看后台返回的是json字符串 还是对象，如果是字符串的话需要parse解析一下，如exercise的例子；如果直接是对象的话不用解析，直接打印就行，thinkphp就是直接是对象
                       //alert(data.pic);
                       //alert( data);
                       if(data == '0' ){

                           $('#no_model').modal('show');

                       } else {
                           $('#sex').val(data.sex);
                           $('#birthday').val(data.birthday);
                           $('#zsname').val(data.zsname);
                           $('#sheng').val(data.sheng);
                           $('#shi').val(data.shi);
                           $('#qu').val(data.qu);
                           $('#id').val(data.id);

                           $('#edit_model').modal('show');
                       }
                   });
       }

       //修改用户信息后，提交到后台
       function  ajax_tijiao(){
           $.post("/yctsp/index.php/Admin/Comment/ajax_edit_userInfo",
                   function(data){

                       //alert(typeof(data));//需要看后台返回的是json字符串 还是对象，如果是字符串的话需要parse解析一下，如exercise的例子；如果直接是对象的话不用解析，直接打印就行，thinkphp就是直接是对象
                       //alert(data.pic);
                       //alert( data);
                       if(data.code == '1001' ){
                           $('#result').html( data.message );
                       } else {
                           $('#result').html(data.message);
                       }
                       $('#edit_result').modal('show');
                   });

       }

       //修改个人信息后的提交请求，因为按键是button 不能submit
       function edit_form_subm() {

               $.ajax({
                   type:"post",
                   url:"/yctsp/index.php/Admin/Comment/ajax_edit_userInfo",
                   data:{
                       sex: $('#sex').val(),//把表单填写值放这里传到后端
                       birthday:$('#birthday').val(),
                       zsname:$('#zsname').val(),
                       sheng:$('#sheng').val(),
                       shi:$('#shi').val(),
                       qu:$('#qu').val(),
                       id:$('#id').val(),
                   },
                   success:function (data) {
//                       alert(data.code);
                       if(data.code == 1001){
                           $('#result').html(data.message);
                       }else{
                           $('#result').html(data.message);
                       }
                       $('#edit_result').modal('show');
                   }
               });

       }




   </script>
<!--Basic Scripts-->
<script src="http://127.0.0.1/yctsp/Application/Admin/Public/style/jquery_002.js"></script>
<script src="http://127.0.0.1/yctsp/Application/Admin/Public/style/bootstrap.js"></script>
<script src="http://127.0.0.1/yctsp/Application/Admin/Public/style/jquery.js"></script>
<!--Beyond Scripts-->
<script src="http://127.0.0.1/yctsp/Application/Admin/Public/style/beyond.js"></script>



</body></html>