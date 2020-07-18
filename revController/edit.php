<?php 

if(isset($_GET['id'])){

	$id = $_GET['id'];
	$db = new mysqli('127.0.0.1', 'root', '111111', 'phpdb') or die('数据库连接异常');
	$sql = "SELECT * FROM reviewer where id=$id";
	$au = mysqli_fetch_row($db->query($sql));      //通过id从数据库获取内容
}

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
        <b>编辑信息</b>
    </div>
    <form id="form" action="./save_edit.php" method="post" class="form-horizontal text-center" style="width:500px;margin: 20px auto 0;">
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-addon">编号：</div>
                <input type="text"  class="form-control" name="id" value="<?php echo $au[0] ?>">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-addon">姓名：</div>
                <input type="text" class="form-control" name="name" value="<?php echo $au[1] ?>">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-addon">学历：</div>
                <input type="text" class="form-control" name="edu" value="<?php echo $au[2] ?>">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-addon">职称：</div>
                <input type="" class="form-control" name="job" value="<?php echo $au[3] ?>">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-addon">单位：</div>
                <input type="text" class="form-control" name="unit" value="<?php echo $au[4] ?>">
               
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-addon">联系电话：</div>
                <input type="text" class="form-control" name="phone" value="<?php echo $au[5] ?>">
            </div>
        </div>
		
		<div class="form-group">
            <div class="input-group">
                <div class="input-group-addon">邮箱：</div>
                <input type="text" class="form-control" name="email" value="<?php echo $au[6] ?>">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-addon">研究方向：</div>
                <input type="text" class="form-control" name="research" value="<?php echo $au[7] ?>">
            </div>
        </div>

        <div class="form-group">
            <div class="input-group">
                <div class="input-group-addon">社会职务：</div>
                <input type="text" class="form-control" name="socialfunc" value="<?php echo $au[8] ?>">
            </div>
        </div>

        <div class="form-group">
            <div class="input-group">
                <div class="input-group-addon">银行卡信息：</div>
                <input type="text" class="form-control" name="creditcard" value="<?php echo $au[9] ?>">
            </div>
        </div>


        <div class="form-group">
            <button type="submit" id="submit" class="btn btn-primary">确&nbsp;认</button>
            <button type="reset" class="btn btn-danger" style="margin-left: 20px">重&nbsp;置</button>

            <input type="button" class="btn btn-warning" style="margin-left: 20px" onclick="javascript:history.back(-1);" value="返&nbsp;回">
        </div>
    </form>
</body>


</html>

