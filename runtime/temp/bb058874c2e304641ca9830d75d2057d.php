<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:65:"/www/wwwroot/music.ylnwl.cn/application/root/view/root/index.html";i:1607952994;s:73:"/www/wwwroot/music.ylnwl.cn/application/root/view/root/common/header.html";i:1607932864;s:73:"/www/wwwroot/music.ylnwl.cn/application/root/view/root/common/footer.html";i:1607929800;}*/ ?>

<!DOCTYPE html>

<html class="app-ui">

    <head>
        <!-- Meta -->
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />

        <!-- Document title -->
        <title>后台管理-<?php echo $rootInfo['webName']; ?></title>

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
    <body class="app-ui layout-has-drawer layout-has-fixed-header">
        <div class="app-layout-canvas">
            <div class="app-layout-container">

                <!-- Drawer -->
                <aside class="app-layout-drawer">

                    <!-- Drawer scroll area -->
                    <div class="app-layout-drawer-scroll">
                        <!-- Drawer navigation -->
                        <nav class="drawer-main">
                            <ul class="nav nav-drawer">
                                <li class="nav-item nav-drawer-header">导航栏</li>

                                <li class="nav-item">
                                    <a href="/root/root/index.html"><i class="fa fa-home"></i> 后台首页</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/root/root/user.html"><i class="fa fa-user"></i> 用户管理</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/root/root/km.html"><i class="fa fa-ticket"></i> 卡密管理</a>
                                </li>
                                <li onclick="logOut();" class="nav-item">
                                    <a><i class="fa fa-sign-out"></i> 退出登录</a>
                                </li>
                            </ul>
                        </nav>
                        <!-- End drawer navigation -->
                    </div>
                    <!-- End drawer scroll area -->
                </aside>
                <!-- End drawer -->

                <!-- Header -->
                <header class="app-layout-header">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button class="pull-left hidden-lg hidden-md navbar-toggle" type="button" data-toggle="layout" data-action="sidebar_toggle">
                                    <span class="sr-only">Toggle drawer</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <span class="navbar-page-title">
                                    <?php echo $rootInfo['webName']; ?>
                                </span>
                            </div>
                        </div>
                        <!-- .container-fluid -->
                    </nav>
                    <!-- .navbar-default -->
                </header>
                <!-- End header -->
<main class="app-layout-content">
    <div class="container-fluid p-y-md">
        <div class="row">
            <div class="col-sm-6 col-lg-4">
                <a class="card bg-red bg-inverse" href="javascript:void(0)">
                    <div class="card-block clearfix">
                        <div class="pull-right">
                            <p class="h6 text-muted m-t-0 m-b-xs">用户总数</p>
                            <p class="h3 m-t-sm m-b-0"><?php echo $num['user']; ?></p>
                        </div>
                        <div class="pull-left m-r">
                            <span class="img-avatar img-avatar-48 bg-gray-light-o"><i class="ion-ios-people fa-1-5x"></i></span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-4">
                <a class="card bg-red bg-inverse" href="javascript:void(0)">
                    <div class="card-block clearfix">
                        <div class="pull-right">
                            <p class="h6 text-muted m-t-0 m-b-xs">新增用户</p>
                            <p class="h3 m-t-sm m-b-0"><?php echo $num['addUser']; ?></p>
                        </div>
                        <div class="pull-left m-r">
                            <span class="img-avatar img-avatar-48 bg-gray-light-o"><i class="fa fa-user-plus fa-1-5x"></i></span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-4">
                <a class="card bg-red bg-inverse" href="javascript:void(0)">
                    <div class="card-block clearfix">
                        <div class="pull-right">
                            <p class="h6 text-muted m-t-0 m-b-xs">卡密数量</p>
                            <p class="h3 m-t-sm m-b-0"><?php echo $num['km']; ?></p>
                        </div>
                        <div class="pull-left m-r">
                            <span class="img-avatar img-avatar-48 bg-gray-light-o"><i class="fa fa-ticket fa-1-5x"></i></span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-lg-6">
                <div class="card">
                    <div class="card-header bg-red bg-inverse">
                        <h4>系统设置</h4>
                    </div>
                    <div class="card-block">
                        <form>
                            <div class="form-group">
                                <label class="col-xs-12">网站名称</label>
                                <input type="text" name="webName" value="<?php echo $rootInfo['webName']; ?>" class="form-control" placeholder="请输入网站名称" />
                            </div>
                            <div class="form-group">
                                <label class="col-xs-12">监控密钥</label>
                                <input type="text" name="key" value="<?php echo $rootInfo['key']; ?>" class="form-control" placeholder="请输入监控密钥" />
                            </div>
                            <div class="form-group">
                                <label class="col-xs-12">网站公告</label>
                                <textarea class="form-control" name="notice" rows="3" placeholder="请输入公告"><?php echo $rootInfo['notice']; ?></textarea>
                            </div>
                            <button type="button" onclick="rootEdit();" class="btn btn-app-red btn-block">修 改</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-6">
                <div class="card">
                    <div class="card-header bg-red bg-inverse">
                        <h4>作者信息</h4>
                    </div>
                    <div class="card-block">
                        <div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <p>系统监控说明(监控频率建议1秒)：</p>
                            <p>刷歌and签到监控链接：</p>
                            <p>http://<?php echo $_SERVER['HTTP_HOST']; ?>/api/api/music?key=监控密钥</p>
                            <p>更新用户Cookie链接：</p>
                            <p><p>http://<?php echo $_SERVER['HTTP_HOST']; ?>/api/api/upCookie?key=监控密钥</p></p>
                        </div>
                        <ul class="list-group">
                            <li class="list-group-item">系统名称 <span style="background-color: #f6511d;" class="badge">忆流年网易云任务</span></li>
                            <li class="list-group-item">作者 <span style="background-color: #f6511d;"class="badge">追忆</span></li>
                            <li class="list-group-item">作者QQ <span style="background-color: #f6511d;" class="badge">79520638</span></li>
                            <li class="list-group-item">QQ群 <span style="background-color: #f6511d;" class="badge">801177198</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

</div>
<!-- .app-layout-container -->
</div>
<!-- .app-layout-canvas -->
<div class="app-ui-mask-modal"></div>

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
            function logOut(){
                layer.confirm("真的要走吗？？？", {
                btn: ['别留我了','取消'] //按钮
                },function(){
                    $.ajax({
                        url: "/root/root/logOut",
                        type: "post",
                        dataType: "json",
                        success: function(data){
                            window.location.href='/root/index/index.html';
                        },
                        error: function(data){
                            layer.msg("系统君短路了！");
                        }
                    });
                });
            }

            function createKm(){
                var days = $("input[name='days']").val();
                var num = $("input[name='num']").val();
                if(days == '' || num == ''){
                    layer.msg("天数和数量不能为空");
                }else{
                    $.ajax({
                        url: "/root/root/createKm",
                        data: {
                            days: days,
                            num: num
                        },
                        type: "post",
                        dataType: "json",
                        success: function(data){
                            if(data.status == 1){
                                layer.confirm(data.data.km, {
                                btn: ['确定'] //按钮
                                },function(){
                                    window.location.href='';
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

            function kmDel(kid){
                $.ajax({
                    url: "/root/root/kmDel",
                    data: {
                        kid:kid
                    },
                    type: "post",
                    dataType: "json",
                    success: function(data){
                        if(data.status == 1){
                            layer.confirm(data.msg, {
                            btn: ['确定'] //按钮
                            },function(){
                                window.location.href='';
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

            function userDel(uid){
                $.ajax({
                    url: "/root/root/userDel",
                    data: {
                        uid:uid
                    },
                    type: "post",
                    dataType: "json",
                    success: function(data){
                        if(data.status == 1){
                            layer.confirm(data.msg, {
                            btn: ['确定'] //按钮
                            },function(){
                                window.location.href='';
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

            function rootEdit(){
                var webName= $("input[name='webName']").val();
                var key = $("input[name='key']").val();
                var notice = $("textarea[name='notice']").val();
                if(webName == '' || key == '' || notice == ''){
                    layer.msg("信息不完整");
                }else{
                    $.ajax({
                        url: "/root/root/rootEdit",
                        data: {
                            webName: webName,
                            key: key,
                            notice: notice
                        },
                        type: "post",
                        dataType: "json",
                        success: function(data){
                            layer.msg(data.msg);
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