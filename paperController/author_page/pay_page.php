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
                    <img src="images/alipay.png" class="img-responsive wow fadeInDown" data-wow-duration="1s" data-wow-delay="1s" width="21%" alt="头像"/> 
                                  
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <div class="div" style="height: 80px">
                        <p>缴纳版面费后，进入正式录用、发表环节</p>
                    </div>
                  

                 
                    <a href="https://www.alipay.com/" class="btn btn-success" style="margin-right: 20px">支付</a>
                    <a href="javascript:history.back(-1)" class="btn btn-primary">返回</a>


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