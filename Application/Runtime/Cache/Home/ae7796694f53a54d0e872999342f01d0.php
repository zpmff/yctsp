<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>首页</title>
</head>
<body>

<div id="header">

    <nav>
        <a href="/yctsp/index.php">首页</a>
        <a href="/yctsp/index.php/Home/Login/register">注册</a>
        <a href="/yctsp/index.php/Home/Login/login">登录</a>
    </nav>
    <hr>
</div>


<!--商品列表-->
<?php if(is_array($goods)): $i = 0; $__LIST__ = $goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div id="banner">
        <div width="100%" height="100px">
            <a href="/yctsp/index.php/Home/Good/goodesa/id/<?php echo ($vo["id"]); ?>"><img src="/yctsp/<?php echo ($vo["img"]); ?>" alt=""></a>
        </div>
        <div>
            <p><?php echo ($vo["name"]); ?></p>
            <p><?php echo ($vo["info"]); ?></p>
            <p><?php echo ($vo["price"]); ?></p>
            <p><?php echo ($vo["type"]); ?></p>
        </div>
    </div>
    <hr><?php endforeach; endif; else: echo "" ;endif; ?>

</div>



</body>
</html>