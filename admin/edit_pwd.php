<?php 

// if(isset($_GET['id'])){

// 	$id = $_GET['id'];
// 	$db = new mysqli('127.0.0.1', 'root', '111111', 'phpdb') or die('数据库连接异常');
// 	$sql = "SELECT * FROM paper where id='$id'";
// 	$au = mysqli_fetch_row($db->query($sql));
// }

?>


<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>图书馆管理系统</title>
    <!--jquery-->
    <script src="../public/Resources/jquery.min.js"></script>
    <!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="../public/Resources/bootstrap.min.css">
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="../public/Resources/bootstrap.min.js"></script>

	


</head>

<body>
  
    <div class="h3 text-center">
        <b>重置密码</b>
    </div>
    <form id="form" action="./save_edit_pwd.php" method="post" class="form-horizontal text-center" style="width:500px;margin: 20px auto 0;">
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-addon">邮箱：</div>
                <input type="text"  class="form-control" name="email" placeholder="email" required="">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-addon">最喜欢的运动：</div>
                <input type="text" class="form-control" name="sport" placeholder="favorite sport" minlength="2" maxlength="20" required="">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-addon">新密码：</div>
                <input type="password" class="form-control" name="password" placeholder="password" minlength="6" maxlength="20" required="">
            </div>
        </div>

        <div class="form-group">
            <div class="input-group">
                <div class="input-group-addon">确认新密码：</div>
                <input type="password" class="form-control" name="confirm" placeholder="confirm" minlength="6" maxlength="20" required="">
            </div>
        </div>
        <input type="hidden" name="type" value="all">


        <div class="form-group">
            <button type="submit" id="submit" class="btn btn-primary" style="margin-right: 20px">确&nbsp;认</button>
            <button type="reset" class="btn btn-danger" style="margin-left: 20px">重&nbsp;置</button>
        </div>
    </form>
</body>


</html>

