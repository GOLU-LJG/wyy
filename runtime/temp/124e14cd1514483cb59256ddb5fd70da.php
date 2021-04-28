<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:72:"D:\phpStudy\PHPTutorial\WWW\music/application/index\view\user\index.html";i:1607951567;s:80:"D:\phpStudy\PHPTutorial\WWW\music\application\index\view\user\common\header.html";i:1607933140;s:80:"D:\phpStudy\PHPTutorial\WWW\music\application\index\view\user\common\footer.html";i:1607952221;}*/ ?>

<!DOCTYPE html>

<html class="app-ui">

    <head>
        <!-- Meta -->
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />

        <!-- Document title -->
        <title>用户中心-<?php echo $rootInfo['webName']; ?></title>

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
                                    <a href="/index/user/index.html"><i class="fa fa-home"></i> 用户中心首页</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/index/index/login.html"><i class="fa fa-user"></i> 切换账号</a>
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
                        <div class="col-sm-12 col-md-6">
                            <a class="card" href="javascript:void(0)">
                                <div class="card-block text-center bg-img" style="background-image: url(<?php echo $musicInfo['profile']['backgroundUrl']; ?>);">
                                    <img class="img-avatar img-avatar-96 img-avatar-thumb" src="<?php echo $musicInfo['profile']['avatarUrl']; ?>" alt="">
                                </div>
                                <div class="card-block tab-content text-center">
                                    <p class="h6 profile-title m-b-xs"><?php echo $musicInfo['profile']['nickname']; ?></p>
                                </div>
                                <div class="card-block b-t text-center">
                                    <div class="row">
                                        <div class="col-xs-6 b-r">
                                            <p class="h5 m-y-0">
                                                <?php if($userInfo['vipDate'] == ''): ?>
                                                未开通VIP
                                                <?php else: ?>
                                                <?php echo $userInfo['vipDate']; endif; ?>
                                            </p>
                                            <small class="text-muted">VIP到期时间</small>
                                        </div>
                                        <div class="col-xs-6">
                                            <p class="h5 m-y-0">
                                                <?php if($userInfo['executeDate'] == ''): ?>
                                                暂未执行
                                                <?php else: ?>
                                                <?php echo $userInfo['executeDate']; endif; ?>
                                            </p>
                                            <small class="text-muted">上次执行时间</small>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="card">
                                <div style="padding: 13.5px 24px;" class="card-header bg-red bg-inverse">
                                    <h4>我的等级</h4>
                                    <ul class="card-actions">
                                        <li>
                                            <button type="button" data-toggle="tooltip" data-placement="left" data-original-title="听歌量是指累计播放的歌曲数量而非播放次数，并且实际播放时间过短的歌曲将不纳入计算，每天最多计算300首。登录天数是指使用云音乐的天数，在多端同时使用不会被重复计算。"><i class="fa fa-info-circle"></i></button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-block">
                                    <p class="h6 m-y-0">
                                        累计听歌：<font size="4" color="red"><?php echo $musicInfo['listenSongs']; ?></font>
                                    </p>
                                    <br>
                                    <p class="h6 m-y-0">
                                        当前等级：<font size="4" color="red">Lv.<?php echo $musicInfo['level']; ?></font>
                                    </p>
                                    <br>
                                    <p class="h6 m-y-0">
                                        距离下一个等级：<font size="4" color="red">Lv.<?php echo $musicInfo['level']+1; ?></font>
                                    </p>
                                    <br>
                                        还需登录<?php echo $musicInfo['nextLoginCount']-$musicInfo['nowLoginCount']; ?>天
                                        <div class="progress progress-mini">
                                            <div class="progress-bar progress-bar-red" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $musicInfo['nowLoginCount']/$musicInfo['nextLoginCount']*100; ?>%"></div>
                                        </div>
                                        还需听歌<?php echo $musicInfo['nextPlayCount']-$musicInfo['nowPlayCount']; ?>首
                                        <div class="progress progress-mini">
                                            <div class="progress-bar progress-bar-red" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $musicInfo['nowPlayCount']/$musicInfo['nextPlayCount']*100; ?>%"></div>
                                        </div>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="card">
                                <div class="card-block">
                                    <div class="alert alert-danger alert-dismissable">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                        <p><?php echo $rootInfo['notice']; ?></p>
                                    </div>
                                    <form>
                                        <div class="form-group">                                            <input type="text" name="km" class="form-control" placeholder="请输入VIP充值卡密" />
                                        </div>
                                        <button type="button" onclick="openVip();" class="btn btn-app-red btn-pill btn-block">立即充值</button>
                                    </form>
                                </div>
                                <div class="card-block b-t text-center">
                                    <div class="row">
                                        <div class="col-xs-12 b-r">
                                            <button onclick="daka();" class="btn btn-app-red btn-pill btn-block" type="button">手动刷歌300首</button>
                                        </div>
                                    </div>
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
            function openVip(){
                var km = $("input[name='km']").val();
                if(km == ''){
                    layer.msg("卡密不能为空");
                }else{
                    $.ajax({
                        url: "/index/user/openVip",
                        data: {
                           km: km
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
            }

            function daka(){
                var load =layer.msg('执行中', {icon: 16,shade: 0.01,time:0});
                $.ajax({
                    url: "/index/user/daka",
                    type: "post",
                    dataType: "json",
                    success: function(data){
                        layer.close(load);
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
                        layer.close(load);
                        layer.msg("系统君短路了！");
                    }
                });
            }

            function logOut(){
                layer.confirm("真的要走吗？？？", {
                btn: ['别留我了','取消'] //按钮
                },function(){
                    $.ajax({
                        url: "/index/user/logOut",
                        type: "post",
                        dataType: "json",
                        success: function(data){
                            window.location.href='/index/index/index.html';
                        },
                        error: function(data){
                            layer.msg("系统君短路了！");
                        }
                    });
                });
            }
        </script>

    </body>

</html>