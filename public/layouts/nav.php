    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Menu</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">在线投稿管理系统</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
          <?php 
              if (!isset($_SESSION['user'])) {
           ?>
            <li><a href="#Register" data-toggle="modal" data-target="#register">注册</a></li>
            <li><a href="#Register" data-toggle="modal" data-target="#login">登陆</a></li>
            <?php
               }else{ 
             ?>
              <li><a href="./index.php">作者信息</a></li>
              <li><a href="./reviewer.php" >审稿人信息</a></li>
              <li><a href="./paper.php" >稿件信息</a></li>
              <li><a href="./admin/profile/index.html" >上传头像</a></li>
              <li><a href="admin/Logout.php" >退出</a></li>
            <?php
               } 
             ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>