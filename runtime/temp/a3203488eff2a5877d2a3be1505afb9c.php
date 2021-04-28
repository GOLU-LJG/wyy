<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:66:"/www/wwwroot/music.ylnwl.cn/application/root/view/index/index.html";i:1607836864;s:74:"/www/wwwroot/music.ylnwl.cn/application/root/view/index/common/header.html";i:1607932966;s:74:"/www/wwwroot/music.ylnwl.cn/application/root/view/index/common/footer.html";i:1607837032;}*/ ?>

<!DOCTYPE html>

<html class="app-ui">

    <head>
        <!-- Meta -->
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />

        <!-- Document title -->
        <title>忆流年网易云任务</title>

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
                <div class="page-header bg-green bg-inverse" style="padding: 0;background-color: #f6511d;">
                    <div class="container">
                        <!-- Section Content -->
                        <div class="p-y-lg text-center">
                            <h2 class="display-2">后台登陆</h2>
                            </div>
                        <!-- End Section Content -->
                    </div>
                </div>
                <!-- End Page header -->

                <!-- Page content -->
                <div class="page-content">
                    <div class="container">
                        <div class="row">
                            <!-- Login card -->
                            <div class="col-md-6 col-md-offset-3">
                                <div class="card">
                                    <div class="card-block">
                                        <form>
                                            <div class="form-group">
                                                <label class="sr-only" for="frontend_login_email">账号</label>
                                                <input type="text" name="username" class="form-control" placeholder="请输入账号" />
                                            </div>
                                            <div class="form-group">
                                                <label class="sr-only" for="frontend_login_password">密码</label>
                                                <input type="password" name="password" class="form-control" placeholder="请输入密码" />
                                            </div>
                                            <button type="button" onclick="login();" class="btn btn-app-red btn-block">立即登陆</button>
                                        </form>
                                    </div>
                                    <!-- .card-block -->
                                </div>
                                <!-- .card -->
                            </div>
                            <!-- .col-md-6 -->
                            <!-- End login -->


                        </div>
                        <!-- .row -->
                    </div>
                    <!-- .container -->
                </div>
                <!-- End page content -->
            </main>

        </div>
        <!-- .app-layout-container -->
    </div>
    <!-- .app-layout-canvas -->

   


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
                var username = $("input[name='username']").val();
                var password = $("input[name='password']").val();
                if(username == '' || password == ''){
                    layer.msg("账号和密码不能为空");
                }else{
                    $.ajax({
                        url: "/root/index/index.html",
                        data: {
                            username: username,
                            password: password
                        },
                        type: "post",
                        dataType: "json",
                        success: function(data){
                            if(data.status == 1){
                                layer.confirm(data.msg, {
                                btn: ['前往后台','取消'] //按钮
                                },function(){
                                    window.location.href='/root/root/index.html';
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