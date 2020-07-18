<?php 
session_start();

if (!isset($_SESSION['user'])) {    //session为空

  header('location:welcome.php');   //返回起始页面
    exit();
}

?>

<!DOCTYPE html>
<html lang="zh-CN">
  <!-- header部分 -->
  <?php require_once 'public/layouts/header.php' ?>

  <body>
  <!-- 导航栏 -->
  <?php require_once 'public/layouts/nav.php' ?>

  <?php require_once 'revController/reviewer.php'; $author = $_SESSION['reviewer']; ?>



<!-- --------------------------------------------------- -->

<div class="container-fluid">
        <div style="width:300px;" class="center-block">
            <div class="form-inline">
            </div>
        </div>
        <a class="btn btn-info pull-right" href="./revController/add.php" style="margin:15px 10px 10px;">添加审稿人信息</a>
        <table class="table table-bordered table-hover text-center">
            <thead>
                <tr class="active">
                    <th class="text-center">编号</th>
                    <th class="text-center">姓名</th>
                    <th class="text-center">学历</th>
                    <th class="text-center">职称</th>
                    <th class="text-center">单位</th>

                    <th class="text-center">联系电话</th>
                    <th class="text-center">邮箱</th>
                    <th class="text-center">研究方向</th>
                    <th class="text-center">社会职务</th>
                    <th class="text-center">银行卡号</th>
        
                    <th class="text-center" style="width: 100px;">操作</th>
                </tr>
            </thead>
            <tbody>

              <?php foreach ($author as $au) { ?>
                <tr>
                  <td><?php echo $au[0] ?></td>
                  <td><?php echo $au[1] ?></td>
                  <td><?php echo $au[2] ?></td>
                  <td><?php echo $au[3] ?></td>
                  <td><?php echo $au[4] ?></td>
                  <td><?php echo $au[5] ?></td>
                  <td><?php echo $au[6] ?></td>
                  <td><?php echo $au[7] ?></td>
                  <td><?php echo $au[8] ?></td>
                  <td><?php echo $au[9] ?></td>

                  <td>
                   <a href="./revController/edit.php?id=<?php echo $au[0]; ?>" class="btn btn-success btn-xs">修改</a>&nbsp;
                    <button class="btn btn-danger btn-xs delete" id=<?php echo $au[0];?> >删除</button>
                  </td>
                
                </tr>
              <?php } ?>


            </tbody>
        </table>
    </div>


<!-- --------------------------------------------------- -->



    <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="public/js/check.js"></script>
  </body>

  <script>
    
    $(function(){

        $(".delete").click(function(){
            if(confirm("真的要删除吗？")){
              window.location.href = "./revController/delete.php?a=delete&id="+$(this).attr("id");


            }
        })
    });

</script>
</html>