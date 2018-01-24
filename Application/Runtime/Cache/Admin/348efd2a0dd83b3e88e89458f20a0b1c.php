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
                                <div class="avatar" title="View your public profile">
                                    <img src="http://127.0.0.1/yctsp/Application/Admin/Public/images/adam-jansen.jpg">
                                </div>
                                <section>
                                    <h2><span class="profile"><span><?php echo (session('ad_name')); ?></span></span></h2>
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
                        <li class="active">用户管理</li>
                    </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                    
<button type="button" tooltip="添加用户" class="btn btn-sm btn-azure btn-addon" onClick="javascript:window.location.href = '/yctsp/index.php/Admin/User/add'"> <i class="fa fa-plus"></i> 添加用户</button>
<button type="button" tooltip="批量删除" class="btn btn-sm btn-azure btn-addon" onClick="javascript:document.getElementById('myForm').submit()"> <i class="fa fa-plus"></i> 批量删除</button>

<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-body">
                <div class="flip-scroll">
                    <table class="table table-bordered table-hover">
                        <thead class="">
                            <tr>
                                <th class="text-center" width="2%"></th>
                                <th class="text-center">用户ID</th>
                                <th class="text-center">用户名</th>
                                <th class="text-center">注册时间</th>
                                <th class="text-center">操作</th>
                            </tr>
                        </thead>
                        <tbody>

                        <form action="/yctsp/index.php/Admin/User/Adelete" method="post" id="myForm" >

                        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                                <td align="center">
                                    <input type="checkbox" name="id[]" value="<?php echo ($vo["ad_id"]); ?>">
                                </td>
                                <td align="center"><?php echo ($vo["id"]); ?></td>
                                <td align="center"><?php echo ($vo["name"]); ?></td>
                                <td align="center"><?php echo (date("Y-m-d",$vo["time"])); ?></td>

                                <td align="center">
                                    <a href="/yctsp/index.php/Admin/User/edit/id/<?php echo ($vo["id"]); ?>" class="btn btn-primary btn-sm shiny">
                                        <i class="fa fa-edit"></i> 编辑
                                    </a>

                                    <a href="#" onClick="warning('确实要删除吗', '/yctsp/index.php/Admin/User/delete/id/<?php echo ($vo["id"]); ?>')" class="btn btn-danger btn-sm shiny">
                                        <i class="fa fa-trash-o"></i> 删除
                                    </a>

                                    <a href="javascript:;" onclick="users(<?php echo ($vo["id"]); ?>)" class="btn btn-primary btn-sm shiny"  >
                                        <i class="fa fa-edit"></i> 查看用户详情
                                    </a>

                                    <a href="" class="btn btn-primary btn-sm shiny" data-toggle="modal" data-target="#myModal2">
                                        <i class="fa fa-edit"></i> 编辑用户详情
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
    <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="Label">查看用户详情</h4>
                </div>
                <div class="modal-body" id="select_user_info">

                    <form class="form-horizontal">
                        <div class="form-group">
                            <label for="sex" class="col-sm-4 control-label">性别</label>
                            <label for="sex" class="col-sm-2  control-label" id="sex_zhanshi"></label>
                        </div>
                        <div class="form-group">
                            <label for="sex" class="col-sm-4 control-label">生日</label>
                            <label for="sex" class="col-sm-2  control-label" id="birthday_zhanshi"></label>
                        </div>
                        <div class="form-group">
                            <label for="sex" class="col-sm-4 control-label">真实姓名</label>
                            <label for="sex" class="col-sm-2  control-label" id="realname_zhanshi"></label>
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
                    <button type="button" class="btn btn-default" onclick="close_myModal1(this)">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!--模态框，用来弹框的，编辑用户详情-->
    <!-- Modal -->
    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">编辑用户详情</h4>
                </div>
                <div class="modal-body">


                    <form class="form-horizontal">
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

                    </form>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                    <button type="button" class="btn btn-primary">保存</button>
                </div>
            </div>
        </div>
    </div>


   <script>

       function users(id){
           $.post("/yctsp/index.php/Admin/User/ajax_userInfo", { id: id },
                   function(data){

                        //alert(typeof(data));//需要看后台返回的是json字符串 还是对象，如果是字符串的话需要parse解析一下，如exercise的例子；如果直接是对象的话不用解析，直接打印就行，thinkphp就是直接是对象
                        //alert(data.pic);
                       //alert( data);
//                       alert( data == '0');

                       if(data == '0' ){
//                           $('#select_user_info').empty();
                           $('#select_user_info').text('用户未录入详细信息');
                       } else {
                           $('#sex_zhanshi').html(data.sex);
                           $('#birthday_zhanshi').html(data.birthday);
                           $('#realname_zhanshi').html(data.zsname);
                           $('#sheng_zhanshi').html(data.sheng);
                           $('#shi_zhanshi').html(data.shi);
                           $('#qu_zhanshi').html(data.qu);

                           $('#myModal1').modal('show');
                       }
                   });
       }


       function close_myModal1(){
           $('#myModal1').modal('hide');
       }








   </script>
<!--Basic Scripts-->
<script src="http://127.0.0.1/yctsp/Application/Admin/Public/style/jquery_002.js"></script>
<script src="http://127.0.0.1/yctsp/Application/Admin/Public/style/bootstrap.js"></script>
<script src="http://127.0.0.1/yctsp/Application/Admin/Public/style/jquery.js"></script>
<!--Beyond Scripts-->
<script src="http://127.0.0.1/yctsp/Application/Admin/Public/style/beyond.js"></script>



</body></html>