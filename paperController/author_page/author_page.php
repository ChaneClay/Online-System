<?php 

if(isset($_GET['author_id'])){

	$id = $_GET['author_id'];

	$db = new mysqli('127.0.0.1', 'root', '111111', 'phpdb') or die('数据库连接异常');
	$sql = "SELECT * FROM author where id='$id'";
	$au = mysqli_fetch_row($db->query($sql));

}


?>


<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width， initial-scale=1 ， user-scalable=no">
    <title>作者的个人信息</title>
    <style type="text/css">             /*解决模态框左移的情况*/
        body {
                    padding-right: 0px !important; 
            }
        *.modal-open {
            overflow-y: scroll;
            padding-right: 0 !important;
        }
    </style>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/animate.css"/>
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


<!--home-->
<section id="home">
    <div class="con">
        <div class="container">
            <div class="row " >
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <img src="images/header.png" class="img-responsive wow fadeInDown" data-wow-duration="1s" data-wow-delay="1s" width="21%" alt="头像"/> 
                                  

                    <br/>
                    <br/>
                    <div class="row">
                        <div class="col-md-2 col-md-offset-4">
                            <p><font>作者编号</font></p>
                        </div>
                        <div class="col-md-2">
                            <?php echo $au[0] ?>
                        </div>
                    </div>
                    <br/>

                    <div class="row">
                        <div class="col-md-2 col-md-offset-4">
                            <p><font>姓名</font></p>
                        </div>
                        <div class="col-md-2">
                            <?php echo $au[1] ?>
                        </div>
                    </div>
                    <br/>

                    <div class="row">
                        <div class="col-md-2 col-md-offset-4">
                            <p><font>联系电话</font></p>
                        </div>
                        <div class="col-md-2">
                            <?php echo $au[5] ?>
                        </div>
                    </div>
                    <br/>

                    <div class="row">
                        <div class="col-md-2 col-md-offset-4">
                            <p><font>邮箱</font></p>
                        </div>
                        <div class="col-md-2">
                            <?php echo $au[6] ?>
                        </div>
                    </div>
                    <br/>

                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            

                        <!-- ------------------------------------------- -->

                       

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                          发送通知书
                        </button>
                        <a href="javascript:history.back(-1)" class="btn btn-warning" style="margin-left: 20px">
                          返回
                        </a>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel" style="color: black">发送录用通知书</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>

                              <form method="post" action="./send_mes.php?id=<?php echo $au[0] ?>">
                                    
                                    <!-- modal-body -->
                                  <div class="modal-body" style="color: black">
                                      <div class="form-group">     <!--  文本内容 -->
                                        <textarea class="form-control" rows="5" name='notice' >通知书
                                        </textarea>
                                      </div>
                                  </div>
                                    <!-- modal-body -->
                                  <div class="modal-footer">
                                        <button type="button" class="btn btn-info" data-dismiss="modal">关闭</button>
                                        <button type="submit" class="btn btn-primary">发送</button>
                                  </div>

                              </form>

                            
                          </div>
                        </div>

                        <!-- ------------------------------------------- -->



                        </div>
                       
                    </div>
                    <br/>


                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </div>
</section>
<!--home-->




<script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.singlePageNav.min.js"></script>
<script src="js/wow.min.js"></script>
<script>
    $(function(){
        /*导航跳转效果插件*/
        $('.nav').singlePageNav({
            offset:70
        });
        /*小屏幕导航点击关闭菜单*/
        $('.navbar-collapse a').click(function(){
            $('.navbar-collapse').collapse('hide');
        });
        new WOW().init();
        $('#example').popover(options)
    })



</script>

</body>
</html>