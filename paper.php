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

  <?php require_once 'paperController/paper.php'; 
  $author = $_SESSION['paper']; ?>


<!-- --------------------------------------------------- -->



<div class="container-fluid">
        <div style="width:300px;" class="center-block">
            <div class="form-inline">
            </div>
        </div>
        <a class="btn btn-info pull-right" href="./paperController/add.php" style="margin:15px 10px 10px;">添加稿件信息</a>
        <table class="table table-bordered table-hover text-center">
            <thead>
                <tr class="active">
                    
                    <th class="text-center">稿件编号</th>
                    <th class="text-center">稿件名称</th>
                    <th class="text-center">作者编号</th>
                    <th class="text-center">作者排序</th>
                    <th class="text-center">通讯作者</th>

                    <th class="text-center">专业分类</th>
                    <th class="text-center">关键词</th>
                    <th class="text-center">中文摘要</th>
                    <th class="text-center">英文摘要</th>
                    <th class="text-center">资助项目</th>
                    <th class="text-center">录用情况</th>
                
                    
                    <th class="text-center" style="width: 100px;">操作</th>
                    <th class="text-center" style="width: 250px;">推荐</th>
                </tr>
            </thead>
            <tbody>

            

              <?php foreach ($author as $au) { ?>
                <tr>
                  <td><?php echo $au[0] ?></td>
                  <td><?php echo $au[1] ?></td>
                  <td><?php echo $au[2] ?></td>
                  <td><?php echo $au[3] ?></td>

    
                  <td>        <!-- 通讯作者 -->
                    <?php 
                        if($au[10]=='录用'){       // 如果录用，则可以访问通讯作者的主页
                          echo "<a href='./paperController/author_page/author_page.php?author_id=$au[2]'>$au[4] </a>";
                        } else{
                          echo "$au[4]";          // 否则，正常显示
                        }
                    ?>
                  </td>       

              

                  <td><?php echo $au[5] ?></td>
                  <td><?php echo $au[6] ?></td>
                  <td><?php echo $au[7] ?></td>
                  <td><?php echo $au[8] ?></td>
                  <td><?php echo $au[9] ?></td>
                  <td><?php echo $au[10] ?></td>      <!-- 录用情况 -->


                  <td>
                   <a href="./paperController/edit.php?id=<?php echo $au[0]; ?>" class="btn btn-success btn-xs">修改</a>&nbsp;
                    <button class="btn btn-danger btn-xs delete" id=<?php echo $au[0];?> >删除</button>
                  </td>
                  
                  <td>
      
                    <label><?php echo $au[11];?> / 3</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="./paperController/recommend.php?id=<?php echo $au[0]; ?>&num=<?php echo $au[11]; ?>&btn1=<?php echo $au[12]; ?>" class="btn btn-info btn-xs <?php if($au[12]!=0)echo "disabled" ?>" >推荐</a>&nbsp;&nbsp;

                     <a href="./paperController/recommend.php?id=<?php echo $au[0]; ?>&num=<?php echo $au[11]; ?>&btn2=<?php echo $au[13]; ?>" class="btn btn-info btn-xs <?php if($au[13]!=0)echo "disabled" ?>" >推荐</a>&nbsp;&nbsp;

                     <a href="./paperController/recommend.php?id=<?php echo $au[0]; ?>&num=<?php echo $au[11]; ?>&btn3=<?php echo $au[14]; ?>" class="btn btn-info btn-xs <?php if($au[14]!=0)echo "disabled" ?>" >推荐</a>&nbsp;&nbsp;
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
              window.location.href = "./paperController/delete.php?a=delete&id="+$(this).attr("id");


            }
        })
    });

</script>
</html>