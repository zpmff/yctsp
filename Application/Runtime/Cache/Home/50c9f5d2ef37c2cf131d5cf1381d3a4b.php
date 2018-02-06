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



<!--登录-->
<div>
    <form action="" method="post" >
        用户名：<input type="text" name="name"> <br>
        密码：<input type="password" name="pass">  <br>
        <input type="submit" value="登录">
    </form>
</div>



</body>
</html>