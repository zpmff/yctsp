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

<div id="banner">
    <div width="100%" height="100px">
        <a href="<?php echo ($slidera["url"]); ?>"><img src="/yctsp/<?php echo ($slidera["img"]); ?>" alt=""></a>
    </div>
    <hr>
</div>

<div id="cat">
    <!--三级分类的展示,连接中 level代表分类级别，1级分类传入1，2级分类传入2，3级分类传入3，-->
    <ul>
        <?php  foreach( $cates as $key => $v ): ?>
         <li><a href="/yctsp/index.php/Home/good/lst/id/<?php echo $v[id]; ?>/level/1"><?php echo $v[cname]; ?></a></li>
                <?php  foreach( $v[child] as $key => $vv ): ?>
                <dl>&nbsp;&nbsp;&nbsp;&nbsp;<a href="/yctsp/index.php/Home/good/lst/id/<?php echo $vv[id]; ?>/level/2"><?php echo $vv[cname]; ?></a></dl>
                            <?php  foreach( $vv[child] as $key => $vvv ): ?>
                            <dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/yctsp/index.php/Home/good/lst/id/<?php echo $vvv[id]; ?>/level/3"><?php echo $vvv[cname]; ?></a></dt>

                            <?php endforeach; ?>
                <?php endforeach; ?>
        <?php endforeach; ?>
    </ul>
<hr>
</div>



</body>
</html>