<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:67:"/www/wwwroot/music.ylnwl.cn/application/index/view/index/index.html";i:1607933244;s:75:"/www/wwwroot/music.ylnwl.cn/application/index/view/index/common/header.html";i:1607951102;s:75:"/www/wwwroot/music.ylnwl.cn/application/index/view/index/common/footer.html";i:1607837018;}*/ ?>

<!DOCTYPE html>

<html class="app-ui">

    <head>
        <!-- Meta -->
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />

        <!-- Document title -->
        <title><?php echo $rootInfo['webName']; ?></title>

        <meta name="description" content="AppUI - Admin Dashboard Template & UI Framework" />
        <meta name="author" content="rustheme" />
        <meta name="robots" content="noindex, nofollow" />

       

        <!-- Google fonts -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,900%7CRoboto+Slab:300,400%7CRoboto+Mono:400" />

        <!-- Page JS Plugins CSS -->
        <link rel="stylesheet" href="/public/static/index/assets/js/plugins/slick/slick.min.css" />
        <link rel="stylesheet" href="/public/static/index/assets/js/plugins/slick/slick-theme.min.css" />

        <!-- AppUI CSS stylesheets -->
        <link rel="stylesheet" id="css-font-awesome" href="/public/static/index/assets/css/font-awesome.css" />
        <link rel="stylesheet" id="css-ionicons" href="/public/static/index/assets/css/ionicons.css" />
        <link rel="stylesheet" id="css-bootstrap" href="/public/static/index/assets/css/bootstrap.css" />
        <link rel="stylesheet" id="css-app" href="/public/static/index/assets/css/app.css" />
        <link rel="stylesheet" id="css-app-custom" href="/public/static/index/assets/css/app-custom.css" />
        <!-- End Stylesheets -->
    </head>
<body class="app-ui">
    <div class="app-layout-canvas">
        <div class="app-layout-container">

           

            <main class="app-layout-content">

        <!-- Page header -->
        <figure class="banner bg-img bg-app bg-inverse" data-height="500" style="background-image: url(https://p5.music.126.net/obj/wo3DlcOGw6DClTvDisK1/4617849316/a7d0/a9d2/d022/043dca7ba8fa56037ffb29392cb9a3bf.png)">
            <figcaption class="banner-caption">
                <div class="container">
                    <div class="row vcenter-md">
                        <div class="col-md-12  text-center ">
                            <h1 class="display-2 m-y"><b><?php echo $rootInfo['webName']; ?></b></h1>
                            <p class="lead m-b-md">自动签到、每日300首歌曲任务</p>
                            <?php if($isLogin == 'true'): ?>
                                <a class="btn  btn-app-red btn-lg  btn-pill" href="/index/user/index.html">用户中心</a>
                            <?php else: ?>
                                <a class="btn  btn-app-red btn-lg  btn-pill" href="/index/index/login.html">立即体验</a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <!-- .row -->
                </div>
                <!-- .container -->
            </figcaption>
        </figure>
        <!-- End page header -->

                <div class="section bg-white">
                    <div class="container p-y-xl b-b">
                        <div class="row text-center">
                            <div class="col-md-4">
                                <i class="fa fa-music text-muted fa-4x"></i>
                                <h4 class="m-t-0">秒刷300首歌曲</h4>
                                </div>
                            <div class="col-md-4">
                                <i class="fa fa-rocket text-muted fa-4x"></i>
                                <h4 class="m-t-0">自动签到</h4>
                            </div>
                            <div class="col-md-4">
                                <i class="fa fa-shield text-muted fa-4x"></i>
                                <h4 class="m-t-0">安全稳定</h4>
                            </div>
                        </div>
                        <!-- .row -->
                    </div>
                    <!-- .container -->
                </div>



            </main>

           

        </div>
        <!-- .app-layout-container -->
    </div>
    <!-- .app-layout-canvas -->

    <!-- End Apps Modal -->

        <!-- AppUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock and App.js -->
        <script src="/public/static/index/assets/js/core/jquery.min.js"></script>
        <script src="/public/static/index/assets/js/core/bootstrap.min.js"></script>
        <script src="/public/static/index/assets/js/core/jquery.slimscroll.min.js"></script>
        <script src="/public/static/index/assets/js/core/jquery.scrollLock.min.js"></script>
        <script src="/public/static/index/assets/js/core/jquery.placeholder.min.js"></script>
        <script src="/public/static/index/assets/js/app.js"></script>
        <script src="/public/static/index/assets/js/app-custom.js"></script>

        <!-- Page Plugins -->
        <script src="/public/static/index/assets/js/plugins/slick/slick.min.js"></script>
        <script src="/public/static/index/assets/js/plugins/chartjs/Chart.min.js"></script>
        <script src="/public/static/index/assets/js/plugins/flot/jquery.flot.min.js"></script>
        <script src="/public/static/index/assets/js/plugins/flot/jquery.flot.pie.min.js"></script>
        <script src="/public/static/index/assets/js/plugins/flot/jquery.flot.stack.min.js"></script>
        <script src="/public/static/index/assets/js/plugins/flot/jquery.flot.resize.min.js"></script>
        
        <!-- layer -->
        <script src="/public/static/layer/layer.js"></script>

        <!-- Page JS Code -->
        <script src="/public/static/index/assets/js/pages/index.js"></script>
        <script>
            function login(){
                var uin = $("input[name='uin']").val();
                var pwd = $("input[name='pwd']").val();
                if(uin == '' || pwd == ''){
                    layer.msg("手机号和密码不能为空");
                }else{
                    $.ajax({
                        url: "/index/index/login.html",
                        data: {
                            uin: uin,
                            pwd: pwd
                        },
                        type: "post",
                        dataType: "json",
                        success: function(data){
                            if(data.status == 1){
                                layer.confirm(data.msg, {
                                btn: ['前往用户中心','取消'] //按钮
                                },function(){
                                    window.location.href='/index/user/index.html';
                                });
                            }else{
                                layer.msg(data.msg);
                            }
                        },
                        error: function(data){
                            layer.msg("系统君短路了！");
                        }
                    });
                }
            }
        </script>

    </body>

</html>