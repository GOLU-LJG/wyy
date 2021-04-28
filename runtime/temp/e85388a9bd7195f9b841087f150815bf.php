<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:67:"/www/wwwroot/music.ylnwl.cn/application/index/view/index/login.html";i:1607601202;s:75:"/www/wwwroot/music.ylnwl.cn/application/index/view/index/common/header.html";i:1607951102;s:75:"/www/wwwroot/music.ylnwl.cn/application/index/view/index/common/footer.html";i:1607837018;}*/ ?>

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
                <div class="page-header bg-green bg-inverse" style="padding: 0;background-color: #f6511d;">
                    <div class="container">
                        <!-- Section Content -->
                        <div class="p-y-lg text-center">
                            <h2 class="display-2">用户登陆</h2>
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
                                        <div class="alert alert-danger alert-dismissable">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                            <p>手机号为注册网易云音乐的手机号.</p>
                                        </div>
                                        <form>
                                            <div class="form-group">
                                                <label class="sr-only" for="frontend_login_email">手机号</label>
                                                <input type="text" name="uin" class="form-control" placeholder="请输入登陆手机号" />
                                            </div>
                                            <div class="form-group">
                                                <label class="sr-only" for="frontend_login_password">登陆密码</label>
                                                <input type="password" name="pwd" class="form-control" placeholder="请输入登陆密码" />
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