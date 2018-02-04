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

<div>
    <div width="100%" height="100px">
       <img src="/yctsp/<?php echo ($goodesa["img"]); ?>" alt="">
    </div>
    <div>
        <p>商品名称：<?php echo ($goodesa["name"]); ?></p>
        <p>商品简介：<?php echo ($goodesa["info"]); ?></p>
        <p>商品价格：<?php echo ($goodesa["price"]); ?></p>
        <p>商品数量：<?php echo ($goodesa["num"]); ?></p>
        <p>商品介绍：<?php echo ($goodesa["text"]); ?></p>
        <p>商品配置：<?php echo ($goodesa["config"]); ?></p>
        <p>商品类别：<?php echo ($goodesa["type"]); ?></p>
    </div>
    <a href="/yctsp/index.php/Home/Good/goodesa/id/<?php echo ($goodesa["id"]); ?>">加入购物车</a>
</div>




</body>
</html>