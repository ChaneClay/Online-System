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
        <b>添加审稿人信息</b>
    </div>
    <form id="form" action="./save_add.php" method="post" class="form-horizontal text-center" style="width:500px;margin: 20px auto 0;">

        <div class="form-group">
            <div class="input-group">
                <div class="input-group-addon">姓名：</div>
                <input type="text" class="form-control" name="name">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-addon">学历：</div>
                <input type="text" class="form-control" name="edu">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-addon">职称：</div>
                <input type="" class="form-control" name="job">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-addon">单位：</div>
                <input type="text" class="form-control" name="unit">
               
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-addon">联系电话：</div>
                <input type="text" class="form-control" name="phone">
            </div>
        </div>
        
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-addon">邮箱：</div>
                <input type="text" class="form-control" name="email">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-addon">研究方向：</div>
                <input type="text" class="form-control" name="research">
            </div>
        </div>

        <div class="form-group">
            <div class="input-group">
                <div class="input-group-addon">社会职务：</div>
                <input type="text" class="form-control" name="socialfunc">
            </div>
        </div>

        <div class="form-group">
            <div class="input-group">
                <div class="input-group-addon">银行卡号：</div>
                <input type="text" class="form-control" name="creditcard">
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

