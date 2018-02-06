<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>首页</title>
    <script type="application/javascript" src= 'http://libs.baidu.com/jquery/1.11.1/jquery.min.js'></script>
</head>
<body>

<div id="header">

    <nav>
        <a href="/yctsp/index.php">首页</a>

        <?php if($_SESSION['user_id'] == '' ): ?><a href="/yctsp/index.php/Home/Login/register">注册</a>
            <a href="/yctsp/index.php/Home/Login/login">登录</a>

            <?php else: ?>
            <span>欢迎，<?php echo (session('user_name')); ?></span>
            <a href="/yctsp/index.php/Home/User/index">个人中心</a>
            <a href="/yctsp/index.php/Home/Car/index">购物车</a>
            <a href="/yctsp/index.php/Home/Login/logout">退出</a><?php endif; ?>

    </nav>
    <hr>
</div>
<div>
    <p><h3><?php echo ($title); ?></h3></p> <button id="ajax_delete" >从购物车删除</button> <button id="now_zhifu" >立即支付</button>
    <hr>
</div>

<form action="" method="post">
<!--商品列表-->
<?php if(is_array($goods)): $i = 0; $__LIST__ = $goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div id="banner">
        <div><input type="checkbox"  name="sel" value="<?php echo ($vo["id"]); ?>"></div>
        <div width="100%" height="100px">
            <a href="/yctsp/index.php/Home/Good/goodesa/id/<?php echo ($vo["id"]); ?>"><img src="/yctsp/<?php echo ($vo["img"]); ?>" alt=""></a>
        </div>
        <div>
            <p>商品名称：<a href="/yctsp/index.php/Home/Good/goodesa/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></a></p>
            <p>商品简介：<?php echo ($vo["info"]); ?></p>
            <p>商品价格：<?php echo ($vo["price"]); ?></p>
            <p>商品数量：<?php echo ($vo["type"]); ?></p>
        </div>
    </div>
    <hr><?php endforeach; endif; else: echo "" ;endif; ?>

</form>
</div>
</body>
<script>

    //点击立即删除
    $('#ajax_delete').click(function() {
//        alert(1);

        var sel = $("input[name='student']:checked").serialize();

        $.post("/yctsp/index.php/Home/Car/ajax_delete" ,{sel:sel},
                function (data) {

                    //alert(typeof(data));//需要看后台返回的是json字符串 还是对象，如果是字符串的话需要parse解析一下，如exercise的例子；如果直接是对象的话不用解析，直接打印就行，thinkphp就是直接是对象
                    //alert(data.pic);
//                    alert(data);
                });

    })


    //点击立即支付
    $('#now_zhifu').click(function(){
//        alert(2);
    })

</script>

</html>