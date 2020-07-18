<?php
  session_start();
  if (isset($_SESSION['user'])) {
    header('location:index.php');
  }
 ?>



<!DOCTYPE html>
<html lang="zh-CN">
  <!-- header部分 -->
  <?php require_once 'public/layouts/header.php' ?>

  <body background="public/img/welcome.jpg" style="background-repeat:no-repeat ;background-size:100% 100%;background-attachment: fixed;">

  <!-- 导航栏 -->
  <?php require_once 'public/layouts/nav.php' ?>


    <div class="container">
      <div class="content">

          <!-- 主体内容 -->
          <div class="home">
            <h1>在线投稿管理系统</h1>
            <br />
            <br />
            <p style="line-height: 30px; font-size: 16px; font-weight: bold;">传统投稿的投稿方式存在着许多不足之处。邮寄方式投递的时间、反馈的时间过长，并且还存在着投递错误以及中途遗失的风险，既不安全又耗费时间。电子邮件投稿同样存在许多不足之处，例如投稿者的邮箱容量的局限性、编辑部的邮箱承载量的局限性等等。随着计算机信息技术在期刊、杂志等编辑流程中的应用日益的增加，越来越多的编辑部更倾向于建立网络在线投稿系统。该系统方便快捷，使投稿者和编辑部的交流变得更加的密切。</p>

          </div>  



          <!-- 注册表单 -->
          <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="register" aria-labelledby="myLargeModalLabel">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">注册</h4>
              </div>

              <form action="admin/Register.php" method="post" accept-charset="utf-8" class="form-horizontal">
                <div class="modal-body">

                  <div class="form-group">
                    <label for="username" class="col-sm-4 control-label">昵称:</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="username" id="username" minlength="2" maxlength="20" placeholder="username" required="">
                    </div>
                    <!-- 错误提示信息 -->
                    <h6 style="color: red;" id="dis_un"></h6>
                  </div>

                  <div class="form-group">
                    <label for="email" class="col-sm-4 control-label">邮箱:</label>
                    <div class="col-sm-6">
                      <input type="email" class="form-control" name="email" id="remail" placeholder="Email" required="">
                    </div>
                    <h6 style="color: red;" id="dis_em"></h6>
                  </div>

                  <div class="form-group">
                    <label for="password" class="col-sm-4 control-label">密码:</label>
                    <div class="col-sm-6">
                      <input type="password" class="form-control" name="password" id="password" placeholder="password" minlength="6" maxlength="20" required="">
                    </div>
                    <h6 style="color: red;" id="dis_pwd"></h6>
                  </div>

                  <div class="form-group">
                    <label for="confirm" class="col-sm-4 control-label">确认密码:</label>
                    <div class="col-sm-6">
                      <input type="password" class="form-control" name="confirm" id="confirm" placeholder="confirm" minlength="6" maxlength="20" required="">
                    </div>
                    <h6 style="color: red;" id="dis_con_pwd"></h6>
                  </div>

                  <div class="form-group">
                    <label for="sport" class="col-sm-4 control-label"> 最喜欢的运动 :</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="sport" id="sport" placeholder="In order to retrieve the password" required="" minlength="2" maxlength="20" size="100">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="code" class="col-sm-4 control-label"> 验证码 :</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="code" id="code" placeholder="verification code" required="" maxlength="4" size="100">
                    </div>
                  </div>
      
                  <div class="form-group">
                    <div class="col-sm-12">
                      <img src="admin/Captcha.php" alt="" id="codeimg" onclick="javascript:this.src = 'admin/Captcha.php?'+Math.random();">
              
                    </div>
                  </div>

                  <input type="hidden" name="type" value="all">

                </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-info" data-dismiss="modal" style="float: left;">关闭</button>
                  <input type="reset" class="btn btn-warning" value ="重置" />
                  <button type="submit" class="btn btn-primary" id="reg">注册</button>
                </div>
                
              </form>



              </div>
            </div>
          </div>


          <!-- 登陆表单 -->
          <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="login" aria-labelledby="myLargeModalLabel">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">登陆</h4>
              </div>
              <form action="admin/Login.php" method="post" accept-charset="utf-8" class="form-horizontal">
                <div class="modal-body">

                  <div class="form-group">
                    <label for="email" class="col-sm-4 control-label">邮箱:</label>
                    <div class="col-sm-6">
                      <input type="email" class="form-control" name="email" id="email" placeholder="Email" required="">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="password" class="col-sm-4 control-label">密码:</label>
                    <div class="col-sm-6">
                      <input type="password" class="form-control" name="password" placeholder="password" minlength="6" maxlength="20" required="">
                    </div>
                  </div>

               

                  <div class="form-group">
                    <label for="code" class="col-sm-4 control-label"> 验证码 :</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="code" id="code" placeholder="verification code" required="" maxlength="4">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-12">
                      <img src="admin/Captcha.php" alt="" id="codeimg" onclick="javascript:this.src = 'admin/Captcha.php?'+Math.random();">
             
                    </div>
                  </div>
                  
                </div>
      
                <div class="modal-footer">
                  <button type="button" class="btn btn-info" data-dismiss="modal" style="float: left;">关闭</button>
                  <button type="submit" class="btn btn-primary" name="login">登陆</button>
                  <a class="btn btn-warning" href="admin/edit_pwd.php">重置密码</a>
                </div>
              </form>
              </div>
            </div>
          </div>

      </div>

    </div><!-- /.container -->
    

    <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="public/js/check.js"></script>
  </body>
</html>