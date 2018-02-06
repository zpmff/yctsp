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

        <?php if($_SESSION['user_id'] == '' ): ?><a href="/yctsp/index.php/Home/Login/register">注册</a>
            <a href="/yctsp/index.php/Home/Login/login">登录</a>

            <?php else: ?>
            <span>欢迎，<?php echo (session('user_name')); ?></span>
            <a href="/yctsp/index.php/Home/User/index">个人中心</a>
            <a href="/yctsp/index.php/Home/Login/logout">退出</a><?php endif; ?>

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