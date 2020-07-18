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
        <b>添加稿件信息</b>
    </div>
    <form id="form" action="./save_add.php" method="post" class="form-horizontal text-center" style="width:500px;margin: 20px auto 0;">

        <div class="form-group">
            <div class="input-group">
                <div class="input-group-addon">稿件名称：</div>
                <input type="text" class="form-control" name="name">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-addon">作者编号：</div>
                <input type="text" class="form-control" name="author_id">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-addon">作者排序：</div>
                <input type="" class="form-control" name="authors">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-addon">通讯作者：</div>
                <input type="text" class="form-control" name="author">
               
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-addon">专业分类号：</div>
                <input type="text" class="form-control" name="class">
            </div>
        </div>
        
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-addon">关键词：</div>
                <input type="text" class="form-control" name="key_word">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-addon">中文摘要：</div>
                <input type="text" class="form-control" name="Chinese_abstract">
            </div>
        </div>

        <div class="form-group">
            <div class="input-group">
                <div class="input-group-addon">英文摘要：</div>
                <input type="text" class="form-control" name="English_abstract">
            </div>
        </div>

        <div class="form-group">
            <div class="input-group">
                <div class="input-group-addon">资助项目：</div>
                <input type="text" class="form-control" name="Funded_projects">
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

