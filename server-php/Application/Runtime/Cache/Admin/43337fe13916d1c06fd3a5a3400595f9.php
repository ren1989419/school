<?php if (!defined('THINK_PATH')) exit();?>  <!-- Main Header -->
  <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>学生证设置</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="/Public/bootstrap/css/bootstrap.min.css" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/Public/dist/font/font-awesome/4.5.0/css/font-awesome.min.css" />
  <!-- Ionicons -->
  <link rel="stylesheet" href="/Public/dist/font/ionicons/2.0.1/css/ionicons.min.css" />
  <!-- Theme style -->
  <link rel="stylesheet" href="/Public/dist/css/AdminLTE.min.css" />
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="/Public/dist/css/skins/_all-skins.min.css" />
  <!-- AdminLTE皮肤默认选择的skin-blue。也可以选择其他的皮肤。确保你应用皮肤类body标签更改生效 -->
  <link rel="stylesheet" href="/Public/dist/css/skins/skin-blue.min.css" />
  <!-- 自定义公共css -->
  <link rel="stylesheet" href="/Public/dist/css/custom.css" />
  <!-- 表格 css -->
  <link rel="stylesheet" href="/Public/plugins/bootstrap-table/bootstrap-table.css" />
  <!-- 开关按钮 css -->
  <link rel="stylesheet" href="/Public/plugins/switch/bootstrap-switch.css" />
  <!-- ztree -->
  <link rel="stylesheet" href="/Public/plugins/ztree/zTreeStyle.css" />
  <!-- 日期 时间 -->
  <link rel="stylesheet" href="/Public/plugins/datetimepicker/jquery.datetimepicker.css" />
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="/Public/plugins/iCheck/all.css" />
</head>
<body class="skin-blue sidebar-mini">
<div class="wrapper">
  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="index.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>安防校园</b>管理系统</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>安防校园</b>管理系统</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">切换导航</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <!-- <li class="dropdown messages-menu"> -->
            <!-- Menu toggle button -->
            <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
          </li> -->
          <!-- /.messages-menu -->

          <!-- Notifications Menu -->
          <!-- <li class="dropdown notifications-menu"> -->
            <!-- Menu toggle button -->
            <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
          </li> -->
          <!-- Tasks Menu -->
          <!-- <li class="dropdown tasks-menu"> -->
            <!-- Menu Toggle Button -->
            <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
          </li> -->
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="/Public/dist/img/user.png" class="user-image" alt="User Image" />
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs"><?php echo ($name); ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="/Public/dist/img/user.png" class="img-circle" alt="User Image" />
                <p>
                  <?php echo ($username); ?> - <?php echo ($name); ?>
                  <!-- <small>11111111@qq.com</small> -->
                </p>
              </li>
              <!-- Menu Body -->

              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                <input type="hidden" name="userid" id="userid" value="<?php echo ($userid); ?>">
                  <a href="#" class="btn btn-default btn-flat" id="changePassword">修改密码</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat" onclick="logout();">退出</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
           <a href="/index.php/Admin/Help/Index"  target="_black">帮助中心</a>
          </li>
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- 修改密码 弹出层 -->
<!--   <div class="shade" style="" id="modalPassword">
    <div class="modal-body">
      <div class="container-fluid">
        <form class="form-horizontal" action="" method="post" onsubmit="return false" id="">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label class="col-md-3 control-label" for=""><span class="xing">*</span> 原密码：</label>
                <div class="col-md-8">
                  <input type="text" placeholder="请输入原密码" id="" name="" class="form-control" />
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label" for=""><span class="xing">*</span> 新密码：</label>
                <div class="col-md-8">
                  <input type="text" placeholder="请输入新密码" id="" name="" class="form-control" />
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="modal-footer" style="text-align:center;">
      <button type="button" class="btn btn-success btn-sm save">
        <span class="glyphicon glyphicon-save"></span> 保存
      </button>
      <button type="button" class="btn btn-default btn-sm layui-layer-close">
        <span class="glyphicon glyphicon-remove"></span> 取消
      </button>
    </div>
  </div>
 -->
  <style>
  .form-center-1{
      margin: 0 auto;
      width: 119px;
  }
  .form-center-2{
      margin: 0 auto;
      width: 100px;
  }
  .form-center-3{
    margin: 0 auto;
    width: 230px;
  }
  .form-center-4{
    margin: 0 auto;
    width: 300px;
  }

  .ztree li a > span:last-child {max-width: none; }
  </style>
  <link rel="stylesheet" href="/Public/plugins/switch/bootstrap-switch.min.css">
  <!-- Main Side Menu -->
  <!DOCTYPE html>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <!-- <div class="user-panel">
        <div class="pull-left image">
          <img src="/Public/dist/img/user.png" class="img-circle" alt="User Image" />
        </div>
        <div class="pull-left info">
          <p><?php echo ($name); ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> 在线</a>
        </div>
      </div> -->

      <!-- search form (Optional) -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="搜索...">
          <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
            </button>
          </span>
        </div>
      </form> -->
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <div class="slimScroll js_slimScroll">
      <?php echo ($ruleList); ?>
        <!-- <ul class="sidebar-menu">
          <li class="header">校务管理</li>
          <li>
            <a href="/index.php/Admin/School/SchInformation/index">
              <i class="fa fa-circle-o"></i>
              <span>学校信息</span>
            </a>
          </li>
          <li>
            <a href="/index.php/Admin/School/SchArea/index">
              <i class="fa fa-circle-o"></i>
              <span>校区管理</span>
            </a>
          </li>
          <li>
            <a href="/index.php/Admin/School/Dept/index">
              <i class="fa fa-circle-o"></i>
              <span>部门管理</span>
            </a>
          </li>
          <li>
            <a href="/index.php/Admin/School/Grade/index">
              <i class="fa fa-circle-o"></i>
              <span>年级管理</span>
            </a>
          </li>
          <li>
            <a href="/index.php/Admin/School/Course/index">
              <i class="fa fa-circle-o"></i>
              <span>课程管理</span>
            </a>
          </li>
          <li>
            <a href="/index.php/Admin/School/Class/index">
              <i class="fa fa-circle-o"></i>
              <span>班级管理</span>
            </a>
          </li>
          <li>
            <a href="/index.php/Admin/School/Student/index">
              <i class="fa fa-circle-o"></i>
              <span>学生管理</span>
            </a>
          </li>
          <li>
            <a href="/index.php/Admin/School/Teacher/index">
              <i class="fa fa-circle-o"></i>
              <span>教师管理</span>
            </a>
          </li>
        </ul>

        <ul class="sidebar-menu">
          <li class="header">家校互动</li>
          <li>
            <a href="/index.php/Admin/Parent/Online/index">
              <i class="fa fa-circle-o"></i>
              <span>在线咨询</span>
            </a>
          </li>
          <li>
            <a href="/index.php/Admin/Parent/Homework/index">
              <i class="fa fa-circle-o"></i>
              <span>作业管理</span>
            </a>
          </li>
          <li>
            <a href="/index.php/Admin/Parent/Reward/index">
              <i class="fa fa-circle-o"></i>
              <span>奖励管理</span>
            </a>
          </li>
          <li>
            <a href="/index.php/Admin/Parent/Examination/index">
              <i class="fa fa-circle-o"></i>
              <span>考试管理</span>
            </a>
          </li>
          <li>
            <a href="/index.php/Admin/Parent/Result/index">
              <i class="fa fa-circle-o"></i>
              <span>成绩管理</span>
            </a>
          </li>
          <li>
            <a href="/index.php/Admin/Parent/Comment/index">
              <i class="fa fa-circle-o"></i>
              <span>评语管理</span>
            </a>
          </li>
          <li>
            <a href="/index.php/Admin/Parent/Timetable/index">
              <i class="fa fa-circle-o"></i>
              <span>课程表管理</span>
            </a>
          </li>
          <li>
            <a href="/index.php/Admin/Parent/MyMessage/index">
              <i class="fa fa-circle-o"></i>
              <span>我的消息</span>
            </a>
          </li>
          <li>
            <a href="/index.php/Admin/Parent/Message/index">
              <i class="fa fa-circle-o"></i>
              <span>短信管理</span>
            </a>
          </li>
        </ul>

        <ul class="sidebar-menu">
          <li class="header">电子学生证设置</li>
          <li>
            <a href="/index.php/Admin/StuCard/SthCardSet/index">
              <i class="fa fa-circle-o"></i>
              <span>学生证设置</span>
            </a>
          </li>
        </ul>

        <ul class="sidebar-menu">
          <li class="header">考勤管理</li>
          <li>
            <a href="/index.php/Admin/Atnd/RealTime/index">
              <i class="fa fa-circle-o"></i>
              <span>实时签到</span>
            </a>
          </li>
          <li>
            <a href="/index.php/Admin/Atnd/AtndRecord/index">
              <i class="fa fa-circle-o"></i>
              <span>考勤记录</span>
            </a>
          </li>
          <li>
            <a href="/index.php/Admin/Atnd/AtndManage/index">
              <i class="fa fa-circle-o"></i>
              <span>考勤规则</span>
            </a>
          </li>
          <li>
            <a href="/index.php/Admin/Atnd/LeaveManage/index">
              <i class="fa fa-circle-o"></i>
              <span>请假管理</span>
            </a>
          </li>
        </ul>

        <ul class="sidebar-menu">
          <li class="header">安全管理</li>
          <li>
            <a href="/index.php/Admin/Scy/Monitor/index">
              <i class="fa fa-circle-o"></i>
              <span>实时监控</span>
            </a>
          </li>
          <li>
            <a href="/index.php/Admin/Scy/TrackPlayback/index">
              <i class="fa fa-circle-o"></i>
              <span>足迹回放</span>
            </a>
          </li>
          <li>
            <a href="/index.php/Admin/Scy/SafeArea/index">
              <i class="fa fa-circle-o"></i>
              <span>安全区域</span>
            </a>
          </li>
          <li>
            <a href="/index.php/Admin/Scy/WarnInfo/index">
              <i class="fa fa-circle-o"></i>
              <span>报警信息</span>
            </a>
          </li>
        </ul>

        <ul class="sidebar-menu">
          <li class="header">设备管理</li>
          <li>
            <a href="/index.php/Admin/Device/DeviceManage/index">
              <i class="fa fa-circle-o"></i>
              <span>设备管理</span>
            </a>
          </li>
        </ul>

        <ul class="sidebar-menu">
          <li class="header">系统管理</li>
          <li>
            <a href="/index.php/Admin/Sys/Users/index">
              <i class="fa fa-circle-o"></i>
              <span>用户管理</span>
            </a>
          </li>
          <li>
            <a href="/index.php/Admin/Sys/Group/index">
              <i class="fa fa-circle-o"></i>
              <span>角色管理</span>
            </a>
          </li>
          <li>
            <a href="/index.php/Admin/Sys/Rule/index">
              <i class="fa fa-circle-o"></i>
              <span>角色权限</span>
            </a>
          </li>
          <li>
            <a href="/index.php/Admin/Sys\AdminUser/index">
              <i class="fa fa-circle-o"></i>
              <span>新建系统用户</span>
            </a>
          </li>
          <li>
            <a href="/index.php/Admin/Sys/Log/index">
              <i class="fa fa-circle-o"></i>
              <span>日志管理</span>
            </a>
          </li>
        </ul>

        <ul class="sidebar-menu">
          <li class="header">学校管理</li>
          <li>
            <a href="/index.php/Admin/School/SchManage/index">
              <i class="fa fa-circle-o"></i>
              <span>学校管理</span>
            </a>
          </li>
        </ul> -->
      </div>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <ol class="breadcrumb">
        <li><a href="/index.php/Admin/Index.html"><i class="fa fa-home"></i> 首页</a></li>
        <li class="active">学生证设置</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-3">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">校区列表</h3>
            </div>
            <div class="box-body" >
              <div class="tree-search">
                <i class="tree-search-icon" id="searchNodeBtn"></i> 
                <input type="text" placeholder="搜索关键字" id="searchNodeVal" value="" class="empty fs-12" />
              </div>
              <div class="tree-scroll">
                <ul id="treeDemo" class="ztree js_ztree_height"></ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-9">
          <div class="box">
            <div id="box-header" class="box-header with-border" style=" display:none;">
              <div class="row">
                <div class="col-md-3 text-center">
                  <h5><strong>学生姓名</strong></h5>
                  <p id="stuName">暂无数据</p>
                </div>
                <div class="col-md-3 text-center">
                  <h5><strong>学生学号</strong></h5>
                  <p id="stuNo">暂无数据</p>
                </div>
                <div class="col-md-3 text-center">
                  <h5><strong>设备IMEI号</strong></h5>
                  <p id="stuImei">暂无数据</p>
                </div>
                <div class="col-md-3 text-center">
                  <h5><strong>设备RFID号</strong></h5>
                  <p id="stuRfid">暂无数据</p>
                </div>
              </div>
            </div>
            <div class="form-group pull-right" style="padding:20px 20px 0 0;">
              <button type="button" class="btn btn-primary" data-color="#39B3D7" data-opacity="0.95" onclick="resetSetSaveConfig()">
                <span class="glyphicon glyphicon-cog"></span> 恢复出厂设置
              </button>
              <button type="button" class="btn btn-success" data-color="#39B3D7" data-opacity="0.95" onclick="restartSetConfig()">
                <span class="glyphicon glyphicon-repeat"></span> 重启终端
              </button>
            </div>
            <div class="box-body" style="padding:0 10px; clear:both;" >
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs" style="">
                  <!-- <li class="active"><a data-toggle="tab" href="#sosSet" >SOS号码</a></li> -->
                  <li class="active"><a data-toggle="tab" href="#whiteList">白名单</a></li>
                  <!-- <li><a data-toggle="tab" href="#sceneMode">来电响铃模式</a></li> -->
                  <li><a data-toggle="tab" href="#soundSize">喇叭音量</a></li>
                  <?php if(($user_type != 4) ): ?><li><a data-toggle="tab" href="#stealthTime">上课时段设置</a></li>
                  <li><a data-toggle="tab" href="#optionsSetting">高级选项设置</a></li><?php endif; ?>
                </ul>
                <div class="tab-content">
                  <!-- <div id="sosSet" class="tab-pane active">
                    <form class="form-horizontal">
                      <div class="box-body">
                        <div class="form-group">
                          <label class="col-sm-2 control-label" for="sosNumber1">SOS号码一：</label>
                          <div class="col-sm-8 reParent" >
                            <input type="text" placeholder="请输入SOS号码" id="sosNumber1" class="form-control sosCell phoneNumber">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label" for="sosNumber2">SOS号码二：</label>
                          <div class="col-sm-8 reParent">
                            <input type="text" placeholder="请输入SOS号码" id="sosNumber2"  class="form-control sosCell phoneNumber">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label" for="sosNumber3">SOS号码三：</label>
                          <div class="col-sm-8 reParent">
                            <input type="text" placeholder="请输入SOS号码" id="sosNumber3" class="form-control sosCell phoneNumber">
                          </div>
                        </div>
                      </div>
                      <div class="box-footer text-center">
                        <button type="button" class="btn btn-success" data-color="#39B3D7"  id="sosSave"  data-opacity="0.95"  onclick="sosSaveConfig()">
                          <span class="glyphicon glyphicon-save"></span> 保存
                        </button>
                      </div>
                    </form>
                  </div> -->
                  <div id="whiteList" class="tab-pane active">
                    <form class="form-horizontal">
                      <div class="box-body">
                        <div class="form-group">
                          <label class="col-sm-2 control-label" for="">联系人 [ 1 ] :</label>
                          <div class="col-sm-3">
                            <input type="text" placeholder="请输入联系人" id="whiteListName1" class="form-control">
                          </div>
                          <label class="col-sm-2 control-label" for="">手机号:</label>
                          <div class="col-sm-3 reParent">
                            <input type="text" placeholder="请输入手机号" id="whitePhoneNumber1" class="form-control whiteListCell phoneNumber">
                          </div>         
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label" for="">联系人 [ 2 ] :</label>
                          <div class="col-sm-3">
                            <input type="text" placeholder="请输入联系人" id="whiteListName2" class="form-control">
                          </div>
                          <label class="col-sm-2 control-label" for="">手机号:</label>
                          <div class="col-sm-3 reParent">
                            <input type="text" placeholder="请输入手机号" id="whitePhoneNumber2" class="form-control whiteListCell phoneNumber">
                          </div>         
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label" for="">联系人 [ 3 ] :</label>
                          <div class="col-sm-3">
                            <input type="text" placeholder="请输入联系人" id="whiteListName3" class="form-control">
                          </div>
                          <label class="col-sm-2 control-label" for="">手机号:</label>
                          <div class="col-sm-3 reParent">
                            <input type="text" placeholder="请输入手机号" id="whitePhoneNumber3" class="form-control whiteListCell phoneNumber">
                          </div>         
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label" for="">联系人 [ 4 ] :</label>
                          <div class="col-sm-3">
                            <input type="text" placeholder="请输入联系人" id="whiteListName4" class="form-control">
                          </div>
                          <label class="col-sm-2 control-label" for="">手机号:</label>
                          <div class="col-sm-3 reParent">
                            <input type="text" placeholder="请输入手机号" id="whitePhoneNumber4" class="form-control whiteListCell phoneNumber">
                          </div>         
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label" for="">联系人 [ 5 ] :</label>
                          <div class="col-sm-3">
                            <input type="text" placeholder="请输入联系人" id="whiteListName5" class="form-control">
                          </div>
                          <label class="col-sm-2 control-label" for="">手机号:</label>
                          <div class="col-sm-3 reParent">
                            <input type="text" placeholder="请输入手机号" id="whitePhoneNumber5" class="form-control whiteListCell phoneNumber">
                          </div>         
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label" for="">联系人 [ 6 ] :</label>
                          <div class="col-sm-3">
                            <input type="text" placeholder="请输入联系人" id="whiteListName6" class="form-control">
                          </div>
                          <label class="col-sm-2 control-label" for="">手机号:</label>
                          <div class="col-sm-3 reParent">
                            <input type="text" placeholder="请输入手机号" id="whitePhoneNumber6" class="form-control whiteListCell phoneNumber">
                          </div>         
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label" for="">联系人 [ 7 ] :</label>
                          <div class="col-sm-3">
                            <input type="text" placeholder="请输入联系人" id="whiteListName7" class="form-control">
                          </div>
                          <label class="col-sm-2 control-label" for="">手机号:</label>
                          <div class="col-sm-3 reParent">
                            <input type="text" placeholder="请输入手机号" id="whitePhoneNumber7" class="form-control whiteListCell phoneNumber">
                          </div>         
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label" for="">联系人 [ 8 ] :</label>
                          <div class="col-sm-3">
                            <input type="text" placeholder="请输入联系人" id="whiteListName8" class="form-control">
                          </div>
                          <label class="col-sm-2 control-label" for="">手机号:</label>
                          <div class="col-sm-3 reParent">
                            <input type="text" placeholder="请输入手机号" id="whitePhoneNumber8" class="form-control whiteListCell phoneNumber">
                          </div>         
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label" for="">联系人 [ 9 ] :</label>
                          <div class="col-sm-3">
                            <input type="text" placeholder="请输入联系人" id="whiteListName9" class="form-control">
                          </div>
                          <label class="col-sm-2 control-label" for="">手机号:</label>
                          <div class="col-sm-3 reParent">
                            <input type="text" placeholder="请输入手机号" id="whitePhoneNumber9" class="form-control whiteListCell phoneNumber">
                          </div>         
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label" for="">联系人 [ 10 ] :</label>
                          <div class="col-sm-3">
                            <input type="text" placeholder="请输入联系人" id="whiteListName10" class="form-control">
                          </div>
                          <label class="col-sm-2 control-label" for="">手机号:</label>
                          <div class="col-sm-3 reParent">
                            <input type="text" placeholder="请输入手机号" id="whitePhoneNumber10" class="form-control whiteListCell phoneNumber">
                          </div>         
                        </div>
                      </div>
                      <div class="box-footer text-center">
                        <button type="button" class="btn btn-success" data-color="#39B3D7" data-opacity="0.95" id="whiteListSave" onclick="whiteListSaveConfig()">
                          <span class="glyphicon glyphicon-save"></span> 保存
                        </button>
                      </div>
                    </form>
                  </div>
                  <!-- <div id="sceneMode" class="tab-pane">
                     <form class="form-horizontal">
                      <div class="box-body  form-center-2">
                        <div class="form-group">
                          <div class="row" >
                            <label class="checkbox-inline" >
                              <input type="radio" name="sceneMode" id="sceneMode-3" class="flat-green" value="3"> 响铃 
                            </label>
                            <label class="checkbox-inline">
                              <input type="radio" name="sceneMode" id="sceneMode-0" class="flat-green" value="0"> 静音 
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="box-footer text-center">
                        <button type="button" class="btn btn-success" data-color="#39B3D7" data-opacity="0.95" id="sceneModeSave" onclick="sceneModeSaveConfig()">
                          <span class="glyphicon glyphicon-save"></span> 保存
                        </button>
                      </div>
                    </form>
                  </div>     -->
                  <div id="soundSize" class="tab-pane">
                    <form class="form-horizontal">
                      <div class="box-body  form-center-1">
                        <div class="form-group">
                          <div class="row" >
                            <label class="checkbox-inline" >
                              <input type="radio" name="soundSize" id="soundSize-2" class="flat-green" value="2"> 大 
                            </label>
                            <label class="checkbox-inline">
                              <input type="radio" name="soundSize" id="soundSize-1" class="flat-green" value="1"> 中 
                            </label>
                            <label class="checkbox-inline">
                              <input type="radio" name="soundSize" id="soundSize-0" class="flat-green" value="0"> 小 
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="box-footer text-center">
                        <button type="button" class="btn btn-success" data-color="#39B3D7" data-opacity="0.95" id="soundSizeSetSave" onclick="soundSizeSetSaveConfig()">
                          <span class="glyphicon glyphicon-save"></span> 保存
                        </button>
                      </div>
                    </form>
                  </div>
                    <div id="stealthTime" class="tab-pane">
                      <form class="form-horizontal">
                        <div class="box-body">
                          <div class="panel panel-default">
                            <div class="panel-body">
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="form-inline navbar-form">
                                    <h5><strong>请选择时间段：</strong></h5>
                                    <div class="form-group" style=" margin:0 30px 0 0;">
                                      <p class="pull-left" style="padding:6px 3px 0 0;">时间段一：</p>
                                      <input style="width:60px;" type="text" value="00:00" id="timeSlotStart1" class="form-control pull-left class-hour">
                                      <p class="pull-left" style="padding:6px 3px 0;">到</p>
                                      <input style="width:60px;" type="text" value="00:00" id="timeSlotEnd1" class="form-control pull-left class-hour">
                                    </div>
                                    <div class="form-group" style=" margin:0 30px 0 0;">
                                      <p class="pull-left" style="padding:6px 3px 0 0;">时间段二：</p>
                                      <input style="width:60px;" type="text" value="00:00" id="timeSlotStart2" class="form-control pull-left class-hour">
                                      <p class="pull-left" style="padding:6px 3px 0;">到</p>
                                      <input style="width:60px;" type="text" value="00:00" id="timeSlotEnd2" class="form-control pull-left class-hour">
                                    </div>
                                    <div class="form-group" style=" margin:0 30px 0 0;">
                                      <p class="pull-left" style="padding:6px 3px 0 0;">时间段三：</p>
                                      <input style="width:60px;" type="text" value="00:00" id="timeSlotStart3" class="form-control pull-left class-hour">
                                      <p class="pull-left" style="padding:6px 3px 0;">到</p>
                                      <input style="width:60px;" type="text" value="00:00" id="timeSlotEnd3" class="form-control pull-left class-hour">

                                    </div>
                                  </div>

                                  <div class="form-inline navbar-form">
                                    <h5><strong>请开关设置：</strong></h5>
                                    <div class="form-group" style="margin: 0 10px 0 0;">
                                      <label class=" control-label" style="margin: 0 0 0 40px;">周一</label>
                                      <div >
                                        <input type="checkbox" name="monTealthTimeStatus" id="monTealthTimeStatus" class="tealthTimeStatus1 tealthTimeStatus" value="OFF">
                                      </div>
                                    </div>
                                    <div class="form-group" style="margin: 0 10px 0 0;">
                                      <label class=" control-label" style="margin: 0 0 0 40px;">周二</label>
                                      <div >
                                        <input type="checkbox" name="tuesTealthTimeStatus" id="tuesTealthTimeStatus" class="tealthTimeStatus2 tealthTimeStatus" value="OFF">
                                      </div>
                                    </div>
                                    <div class="form-group" style="margin: 0 10px 0 0;">
                                      <label class=" control-label" style="margin: 0 0 0 40px;">周三</label>
                                      <div >
                                        <input type="checkbox" name="wednesTealthTimeStatus" id="wednesTealthTimeStatus" class="tealthTimeStatus3  tealthTimeStatus" value="OFF">
                                      </div>
                                    </div>
                                    <div class="form-group" style="margin: 0 10px 0 0;">
                                      <label class=" control-label" style="margin: 0 0 0 40px;">周四</label>
                                      <div >
                                        <input type="checkbox" name="thursTealthTimeStatus" id="thursTealthTimeStatus" class="tealthTimeStatus4 tealthTimeStatus" value="OFF">
                                      </div>
                                    </div>
                                    <div class="form-group" style="margin: 0 10px 0 0;">
                                      <label class=" control-label" style="margin: 0 0 0 40px;">周五</label>
                                      <div >
                                        <input type="checkbox" name="friTealthTimeStatus" id="friTealthTimeStatus" class="tealthTimeStatus5 tealthTimeStatus" value="OFF">
                                      </div>
                                    </div>
                                    <div class="form-group" style="margin: 0 10px 0 0;">
                                      <label class=" control-label" style="margin: 0 0 0 40px;">周六</label>
                                      <div >
                                        <input type="checkbox" name="saturTealthTimeStatus" id="saturTealthTimeStatus" class="tealthTimeStatus6 tealthTimeStatus" value="OFF">
                                      </div>
                                    </div>
                                    <div class="form-group" style="margin: 0 10px 0 0;">
                                      <label class=" control-label" style="margin: 0 0 0 40px;">周日</label>
                                      <div >
                                        <input type="checkbox" name="sunTealthTimeStatus" id="sunTealthTimeStatus" class="tealthTimeStatus7 tealthTimeStatus" value="OFF">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>     
                            </div>
                          </div>     
                        </div>
                        <div class="box-footer text-center">
                          <button type="button" class="btn btn-success" data-color="#39B3D7" data-opacity="0.95" id="tealthTimeSave" onclick="tealthTimeSaveConfig()">
                            <span class="glyphicon glyphicon-save"></span> 保存
                          </button>
                        </div>
                      </form>
                    </div>
                    <div id="optionsSetting" class="tab-pane">
                      <div class="row">
                        <div class="col-md-3">
                          <div class="box box-info">
                            <div class="box-body">
                              <ul class="nav nav-stacked">
                                <li class="active"><a data-toggle="tab" href="#workingModeSet">工作模式设置</a></li>
                                <li class=""><a data-toggle="tab" href="#monitorSet">监听号码设置</a></li>
                                
                                <li><a data-toggle="tab" href="#domainPortSet">域名和端口设置</a></li>
                                <li><a data-toggle="tab" href="#ipPortSet">IP和端口设置</a></li>
                                
                                <li><a data-toggle="tab" href="#rfidSet">天线组设置</a></li>
                                <li><a data-toggle="tab" href="#rfidGpsSet">天线和GPS围栏设置</a></li>
                                <li><a data-toggle="tab" href="#callfilterSet">来电过滤开关设置</a></li>
                               
                                <!-- <li><a data-toggle="tab" href="#calldisplaySet">来电显示开关设置</a></li> -->
                                <li><a data-toggle="tab" href="#wirelessatteSet">无线考勤开关设置</a></li>
                                <li><a data-toggle="tab" href="#stepcounterSet">计步开关设置</a></li>
                                <li><a data-toggle="tab" href="#inschoolSet">自动屏蔽开关设置</a></li>
                          
                              </ul>
                            </div> 
                          </div>
                        </div>
                        <div class="col-md-9">
                          <div class="tab-content">
                            <div id="workingModeSet" class="tab-pane active">
                              <form class="form-horizontal">
                                <div class="form-group">
                                  <label class="col-md-3 control-label" for="shortMassage"><span class="xing">*</span>短信指令格式：</label>
                                  <div class="col-md-9">
                                    <!-- <input type="text" placeholder="正常定位模式" id="shortMassage" class="form-control"> -->
                                    <select id="shortMassage" name="shortMassage" class="form-control">
                                      <option value="请选择">请选择</option>
                                      <!-- <option value="m1">实时定位模式</option> -->
                                      <option value="m1">正常定位模式</option>
                                      <option value="m2">节能定位模式</option>
                                      <!-- <option value="m3">纯基站定位</option>
                                      <option value="m4">无平台模式</option> --> 
                                    </select>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-md-3 control-label" for="reportingTime "><span class="xing">*</span>上报时间间隔(秒)：</label>
                                  <div class="col-md-9">
                                    <input type="text" placeholder="请输入时间" id="reportingTime" class="form-control">
                                  </div>
                                </div>
                                <div class="box-footer text-center">
                                  <button type="button" class="btn btn-success" data-color="#39B3D7" data-opacity="0.95" id="workingModeSetSave" onclick="workingModeSetSaveConfig()">
                                    <span class="glyphicon glyphicon-save"></span> 保存
                                  </button>
                                  
                                </div>
                              </form>
                            </div>
                            <div id="monitorSet" class="tab-pane">
                              <form class="form-horizontal">
                                <div class="box-body">
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label" for="">联系人 [ 1 ] :</label>
                                    <div class="col-sm-3">
                                      <input type="text" placeholder="请输入联系人" id="monitorSetName" class="form-control phoneNumber">
                                    </div>
                                    <label class="col-sm-2 control-label" for="">手机号:</label>
                                    <div class="col-sm-3 reParent">
                                      <input type="text" placeholder="请输入手机号" id="monitorSetNumber" class="form-control phoneNumber">
                                    </div>         
                                  </div>
                                </div>
                                <div class="box-footer text-center">
                                  <button type="button" class="btn btn-success" data-color="#39B3D7" data-opacity="0.95" id="monitorSetSave" onclick="monitorSetSaveConfig()">
                                    <span class="glyphicon glyphicon-save"></span> 保存
                                  </button>
                                  
                                </div>
                              </form>
                            </div>
                              <div id="domainPortSet" class="tab-pane">
                                <form class="form-horizontal">
                                  <div class="box-body">
                                    <div class="form-group">
                                      <label class="col-sm-2 control-label" for="domainValue">域名：</label>
                                      <div class="col-sm-10">
                                        <input type="text" placeholder="请输入域名" id="domainValue" class="form-control">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label class="col-sm-2 control-label" for="port1">端口：</label>
                                      <div class="col-sm-10">
                                        <input type="text" placeholder="请输入端口" id="port1" class="form-control">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="box-footer text-center">
                                    <button type="button" class="btn btn-success" data-color="#39B3D7" data-opacity="0.95" id="domainPortSetSave" onclick="domainPortSetSaveConfig()">
                                      <span class="glyphicon glyphicon-save"></span> 保存
                                    </button>
                                    
                                  </div>
                                </form>
                              </div>
                              <div id="ipPortSet" class="tab-pane">
                                <form class="form-horizontal">
                                  <div class="box-body">
                                    <div class="form-group">
                                      <label class="col-sm-2 control-label" for="ip">IP：</label>
                                      <div class="col-sm-10">
                                        <input type="text" placeholder="请输入IP" id="ip" class="form-control">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label class="col-sm-2 control-label" for="port2">端口：</label>
                                      <div class="col-sm-10">
                                        <input type="text" placeholder="请输入端口" id="port2" class="form-control">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="box-footer text-center">
                                    <button type="button" class="btn btn-success" data-color="#39B3D7" data-opacity="0.95" id="ipPortSetSave" onclick="ipPortSetSaveConfig()">
                                      <span class="glyphicon glyphicon-save"></span> 保存
                                    </button>
                                    
                                  </div>
                                </form>
                              </div>
                            <div id="rfidSet" class="tab-pane">
                              <form class="form-horizontal">
                                <div class="box-body">
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label" for="rfidInfo1">天线组序号：</label>
                                    <div class="col-sm-10">
                                      <input type="text" placeholder="请输入天线组序号" id="rfidInfo1" class="form-control rfidInfo">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label" for="rfidInfo2">进天线ID：</label>
                                    <div class="col-sm-10">
                                      <input type="text" placeholder="请输入进天线ID" id="rfidInfo2" class="form-control rfidInfo">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label" for="rfidInfo3">出天线ID：</label>
                                    <div class="col-sm-10">
                                      <input type="text" placeholder="请输入出天线ID" id="rfidInfo3" class="form-control rfidInfo">
                                    </div>
                                  </div>
                                </div>
                                <div class="box-footer text-center">
                                  <button type="button" class="btn btn-success" data-color="#39B3D7" data-opacity="0.95" id="rfidSetSave" onclick="rfidSetSaveConfig()">
                                    <span class="glyphicon glyphicon-save"></span> 保存
                                  </button>
                                  
                                </div>
                              </form>
                            </div>


                             <div id="rfidGpsSet" class="tab-pane">
                              <form class="form-horizontal">
                                <div class="box-body">
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label" for="rfidGpsInfo1">天线组序号：</label>
                                    <div class="col-sm-10">
                                      <input type="text" placeholder="请输入天线组序号" id="rfidGpsInfo1" class="form-control rfidGpsInfo">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label" for="rfidGpsInfo2">进天线ID：</label>
                                    <div class="col-sm-10">
                                      <input type="text" placeholder="请输入进天线ID" id="rfidGpsInfo2" class="form-control rfidGpsInfo">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label" for="rfidGpsInfo3">出天线ID：</label>
                                    <div class="col-sm-10">
                                      <input type="text" placeholder="请输入出天线ID" id="rfidGpsInfo3" class="form-control rfidGpsInfo">
                                    </div>
                                  </div>
                                   <div class="form-group">
                                    <label class="col-sm-2 control-label" for="rfidGpsInfo4">学校GPS纬度：</label>
                                    <div class="col-sm-10">
                                      <input type="text" placeholder="请输入学校GPS纬度" id="rfidGpsInfo4" class="form-control rfidGpsInfo">
                                    </div>
                                  </div>
                                   <div class="form-group">
                                    <label class="col-sm-2 control-label" for="rfidGpsInfo5">学校GPS经度：</label>
                                    <div class="col-sm-10">
                                      <input type="text" placeholder="请输入学校GPS经度" id="rfidGpsInfo5" class="form-control rfidGpsInfo">
                                    </div>
                                  </div>
                                   <div class="form-group">
                                    <label class="col-sm-2 control-label" for="rfidGpsInfo6">中心位置半径：</label>
                                    <div class="col-sm-10">
                                      <input type="text" placeholder="请输入中心位置半径" id="rfidGpsInfo6" class="form-control rfidGpsInfo">
                                    </div>
                                  </div>
                                </div>
                                <div class="box-footer text-center">
                                  <button type="button" class="btn btn-success" data-color="#39B3D7" data-opacity="0.95" id="rfidGpsSetSave" onclick="rfidGpsSetSaveConfig()">
                                    <span class="glyphicon glyphicon-save"></span> 保存
                                  </button>
                                  
                                </div>
                              </form>
                            </div>
                            <div id="callfilterSet" class="tab-pane">
                              <form class="form-horizontal">
                                <div class="box-body">
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">来电过滤开关：</label>
                                    <div class="col-sm-10">
                                      <input type="checkbox" name="callfilterStatus" id="callfilterStatus"   class="callfilterStatus" value="OFF">
                                    </div>
                                  </div>
                                </div>
                                <div class="box-footer text-center">
                                  <button type="button" class="btn btn-success" data-color="#39B3D7" data-opacity="0.95" id="callfilterSetSave" onclick="callfilterSetSaveConfig()">
                                    <span class="glyphicon glyphicon-save"></span> 保存
                                  </button>
                                  
                                </div>
                              </form>
                            </div>
                            <div id="calldisplaySet" class="tab-pane">
                              <form class="form-horizontal">
                                <div class="box-body">                           
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">来电显示开关：</label>
                                    <div class="col-sm-10">
                                      <input type="checkbox" name="calldisplayStatus" id="calldisplayStatus" class="calldisplayStatus" value="OFF">
                                    </div>
                                  </div>
                                </div>
                                <div class="box-footer text-center">
                                  <button type="button" class="btn btn-success" data-color="#39B3D7" data-opacity="0.95" id="calldisplaySetSave" onclick="calldisplaySetSaveConfig()">
                                    <span class="glyphicon glyphicon-save"></span> 保存
                                  </button>
                                  
                                </div>
                              </form>
                            </div>
                            <div id="wirelessatteSet" class="tab-pane">
                              <form class="form-horizontal">
                                <div class="box-body">                           
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">无线考勤开关：</label>
                                    <div class="col-sm-10">
                                      <input type="checkbox" name="wirelessatteStatus" id="wirelessatteStatus" class="wirelessatteStatus" value="OFF">
                                    </div>
                                  </div>
                                </div>
                                <div class="box-footer text-center">
                                  <button type="button" class="btn btn-success" data-color="#39B3D7" data-opacity="0.95" id="wirelessatteSetSave" onclick="wirelessatteSetSaveConfig()">
                                    <span class="glyphicon glyphicon-save"></span> 保存
                                  </button>
                                  
                                </div>
                              </form>
                            </div>
                            <div id="stepcounterSet" class="tab-pane">
                              <form class="form-horizontal">
                                <div class="box-body">                           
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">计步开关：</label>
                                    <div class="col-sm-10">
                                      <input type="checkbox" name="stepcounterStatus" id="stepcounterStatus" class="stepcounterStatus" value="OFF">
                                    </div>
                                  </div>
                                </div>
                                <div class="box-footer text-center">
                                  <button type="button" class="btn btn-success" data-color="#39B3D7" data-opacity="0.95" id="stepcounterSetSave" onclick="stepcounterSetSaveConfig()">
                                    <span class="glyphicon glyphicon-save"></span> 保存
                                  </button>
                                  
                                </div>
                              </form>
                            </div>
                            <div id="inschoolSet" class="tab-pane">
                              <form class="form-horizontal">
                                <div class="box-body  form-center-4">
                                  <div class="form-group">
                                    <div class="row" >
                                      <label class="checkbox-inline" >
                                        <input type="radio" name="inschool" id="inschool-2" class="flat-green" value="2"> 进校屏蔽 
                                      </label>
                                      <label class="checkbox-inline">
                                        <input type="radio" name="inschool" id="inschool-1" class="flat-green" value="1"> 上课时段屏蔽
                                      </label>
                                      <label class="checkbox-inline">
                                        <input type="radio" name="inschool" id="inschool-0" class="flat-green" value="0"> 不屏蔽 
                                      </label>
                                    </div>
                                  </div>
                                </div>
                                <div class="box-footer text-center">
                                  <button type="button" class="btn btn-success" data-color="#39B3D7" data-opacity="0.95" id="inschoolSetSave" onclick="inschoolSetSaveConfig()">
                                    <span class="glyphicon glyphicon-save"></span> 保存
                                  </button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
                    </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<form id="stuCardfrom">
  <input type="hidden" name="statue" id="config_falg" />
 <!--  <input type="hidden" name="sos"  id="sos" /> -->
  <input type="hidden" name="whitelist"  id="whitelist" />
  <!-- <input type="hidden" name="scenemode" id="scenemode" /> -->
  <input type="hidden" name="soundsize" id="soundsize" />
  <input type="hidden" name="tealthtime" id="tealthtime" />
  <input type="hidden" name="working" id="working" />
  <input type="hidden" name="monitor" id="monitor" />
  <input type="hidden" name="domain" id="domain" />
  <input type="hidden" name="ipport" id="ipport" />
  <input type="hidden" name="rfid" id="rfid" />
  <input type="hidden" name="rfidgps" id="rfidgps" />
  <input type="hidden" name="callfilter" id="callfilter" />
  <input type="hidden" name="calldisplay" id="calldisplay" />
  <input type="hidden" name="wirelessatte" id="wirelessatte" />
  <input type="hidden" name="stepcounter" id="stepcounter" />
  <input type="hidden" name="inschool" id="inschool" />
  <input type="hidden" class="prov_id_hide id_hide" name="prov_id" value="" placeholder="省" />
  <input type="hidden" class="city_id_hide id_hide" name="city_id" value="" placeholder="市" />
  <input type="hidden" class="county_id_hide id_hide" name="county_id" value="" placeholder="区" />
  <input type="hidden" class="s_id_hide id_hide" name="s_id"  placeholder="学校" />
  <input type="hidden" class="a_id_hide id_hide" name="a_id" value="" placeholder="校区" />
  <input type="hidden" class="g_id_hide id_hide" name="g_id" value="" placeholder="年级" />
  <input type="hidden" class="c_id_hide id_hide" name="c_id" value="" placeholder="班级" />
  <input type="hidden" class="stu_id_hide id_hide" name="stu_id" value="" placeholder="学生" />
  <input type="hidden" id="imei" name="imei" value="" placeholder="imei" />
  <!-- 功能设置类型 -->
  <input type="hidden" name="typeFalg" id="typeFalg" value=""/>
</form>

  <input type="hidden" name="phone" id="phone" value="" />
  <!-- Main Footer -->
  <!DOCTYPE html>

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs"></div>
    <!-- Default to the left -->
    <strong>Copyright &copy; <?php echo date('Y')?> <a href="#">信平台安防校园管理系统</a>，</strong> 版权所有。
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="tab-pane active">
        <a href="#control-sidebar-theme-demo-options-tab" data-toggle="tab"><i class="fa fa-wrench"></i></a>
      </li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab"></div>
      <!-- Stats tab content -->
    </div>
    <!-- /.tab-pane -->
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->
<!-- REQUIRED JS SCRIPTS -->
<!-- jQuery 2.2.3 -->
<script type="text/javascript" src="/Public/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script type="text/javascript" src="/Public/bootstrap/js/bootstrap.min.js"></script>
<!-- Slimscroll -->
<script type="text/javascript" src="/Public/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script type="text/javascript" src="/Public/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script type="text/javascript" data-src="/Public/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script type="text/javascript" data-src="/Public/dist/js/demo.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
<!-- cookie -->
<script type="text/javascript" src="/Public/dist/js/jquery.cookie.js"></script>

<!-- 自定义公共js -->
<script type="text/javascript" src="/Public/dist/js/custom.js"></script>
<script type="text/javascript" src="/Public/dist/js/dialog.js"></script>

<!-- 表格功能 -->
<script type="text/javascript" src="/Public/plugins/bootstrap-table/bootstrap-table.js"></script>
<script type="text/javascript" src="/Public/plugins/bootstrap-table/bootstrap-table-zh-CN.js"></script>

<!-- 表格导出数据 -->
<script type="text/javascript" src="/Public/plugins/bootstrap-table/bootstrap-table-export.js"></script>
<script type="text/javascript" src="/Public/plugins/bootstrap-table/tableExport.js"></script>

<!-- 开关按钮 -->
<script type="text/javascript" src="/Public/plugins/switch/bootstrap-switch.js"></script>

<!-- ztree -->
<script type="text/javascript" src="/Public/plugins/ztree/jquery.ztree.all.js"></script>

<!-- 日期 时间 -->
<script type="text/javascript" src="/Public/plugins/datetimepicker/jquery.datetimepicker.full.js"></script>

<!-- layer弹出层 -->
<script type="text/javascript" src="/Public/plugins/layer/layer.js"></script>

<!-- iCheck 1.0.1 -->
<script type="text/javascript" src="/Public/plugins/iCheck/icheck.min.js"></script>

<!-- 文件树搜索 -->
<script type="text/javascript" src="/Public/dist/js/jquery.ztree.exhide.min.js"></script>
<!-- Switch 切换开关 -->
<script type="text/javascript" src="/Public/plugins/switch/bootstrap-switch.min.js"></script>
<script>


// 隐身时间 Switch 切换开关事件定义
$(".tealthTimeStatus1").bootstrapSwitch().on('switchChange.bootstrapSwitch', function(event, state) {
  if(state){
    $(".tealthTimeStatus1").val("ON");
  }else{
    $(".tealthTimeStatus1").val("OFF");
  }
});

$(".tealthTimeStatus2").bootstrapSwitch().on('switchChange.bootstrapSwitch', function(event, state) {
  if(state){
    $(".tealthTimeStatus2").val("ON");
  }else{
    $(".tealthTimeStatus2").val("OFF");
  }
});

$(".tealthTimeStatus3").bootstrapSwitch().on('switchChange.bootstrapSwitch', function(event, state) {
  if(state){
    $(".tealthTimeStatus3").val("ON");
  }else{
    $(".tealthTimeStatus3").val("OFF");
  }
});

$(".tealthTimeStatus4").bootstrapSwitch().on('switchChange.bootstrapSwitch', function(event, state) {
  if(state){
    $(".tealthTimeStatus4").val("ON");
  }else{
    $(".tealthTimeStatus4").val("OFF");
  }
});

$(".tealthTimeStatus5").bootstrapSwitch().on('switchChange.bootstrapSwitch', function(event, state) {
  if(state){
    $(".tealthTimeStatus5").val("ON");
  }else{
    $(".tealthTimeStatus5").val("OFF");
  }
});

$(".tealthTimeStatus6").bootstrapSwitch().on('switchChange.bootstrapSwitch', function(event, state) {
  if(state){
    $(".tealthTimeStatus6").val("ON");
  }else{
    $(".tealthTimeStatus6").val("OFF");
  }
});

$(".tealthTimeStatus7").bootstrapSwitch().on('switchChange.bootstrapSwitch', function(event, state) {
  if(state){
    $(".tealthTimeStatus7").val("ON");
  }else{
    $(".tealthTimeStatus7").val("OFF");
  }
});

// 来电过滤开关 Switch 切换开关事件定义
$(".callfilterStatus").bootstrapSwitch().on('switchChange.bootstrapSwitch', function(event, state) {
  if(state){
    $(".callfilterStatus").val("ON");
  }else{
    $(".callfilterStatus").val("OFF");
  }
});

// 来电显示开关 Switch 切换开关事件定义
$(".calldisplayStatus").bootstrapSwitch().on('switchChange.bootstrapSwitch', function(event, state) {
  if(state){
    $(".calldisplayStatus").val("ON");
  }else{
    $(".calldisplayStatus").val("OFF");
  }
});

// 无线考勤开关 switch 切换开关事件定义
$(".wirelessatteStatus").bootstrapSwitch().on('switchChange.bootstrapSwitch', function(event, state) {
  if(state){
    $(".wirelessatteStatus").val("ON");
  }else{
    $(".wirelessatteStatus").val("OFF");
  }
});

// 计步开关 Switch 切换开关事件定义
$(".stepcounterStatus").bootstrapSwitch().on('switchChange.bootstrapSwitch', function(event, state) {
  if(state){
    $(".stepcounterStatus").val("ON");
  }else{
    $(".stepcounterStatus").val("OFF");
  }
});

// 学生证管理文件树
var settingStuCard = {
  check: {
    enable: false,
    chkStyle: "radio",
    autoCheckTrigger: true,
    radioType: "all" // 在整棵树范围内当做一个分组
  },
  view: {
    dblClickExpand: true
  },
  data: {
    simpleData: {
      enable: true
    }
  },
  callback: {
    beforeExpand: beforeExpand,
    onExpand: onExpand,
    onCollapse: onCollapse,
    onClick: zTreeOnClick
  }
};

// 保持展开单一路径 start
var curExpandNode = null;
function beforeExpand(treeId, treeNode) {
  var pNode     = curExpandNode ? curExpandNode.getParentNode():null;
  var treeNodeP = treeNode.parentTId ? treeNode.getParentNode():null;
  var zTree     = $.fn.zTree.getZTreeObj("treeDemo");
  for(var i=0, l=!treeNodeP ? 0:treeNodeP.children.length; i<l; i++ ) {
    if (treeNode !== treeNodeP.children[i]) {
      zTree.expandNode(treeNodeP.children[i], false);
    }
  }
  while (pNode) {
    if (pNode === treeNode) {
      break;
    }
    pNode = pNode.getParentNode();
  }
  if (!pNode) {
    singlePath(treeNode);
  }
}
function singlePath(newNode) {
  if (newNode === curExpandNode) return;
  var zTree = $.fn.zTree.getZTreeObj("treeDemo"),
    rootNodes, tmpRoot, tmpTId, i, j, n;
  if (!curExpandNode) {
    tmpRoot = newNode;
    while (tmpRoot) {
      tmpTId = tmpRoot.tId;
      tmpRoot = tmpRoot.getParentNode();
    }
    rootNodes = zTree.getNodes();
    for (i=0, j=rootNodes.length; i<j; i++) {
      n = rootNodes[i];
      if (n.tId != tmpTId) {
        zTree.expandNode(n, false);
      }
    }
  } else if (curExpandNode && curExpandNode.open) {
    if (newNode.parentTId === curExpandNode.parentTId) {
      zTree.expandNode(curExpandNode, false);
    } else {
      var newParents = [];
      while (newNode) {
        newNode = newNode.getParentNode();
        if (newNode === curExpandNode) {
          newParents = null;
          break;
        } else if (newNode) {
          newParents.push(newNode);
        }
      }
      if (newParents!=null) {
        var oldNode = curExpandNode;
        var oldParents = [];
        while (oldNode) {
          oldNode = oldNode.getParentNode();
          if (oldNode) {
              oldParents.push(oldNode);
          }
        }
        if (newParents.length>0) {
          zTree.expandNode(oldParents[Math.abs(oldParents.length-newParents.length)-1], false);
        } else {
          zTree.expandNode(oldParents[oldParents.length-1], false);
        }
      }
    }
  }
  curExpandNode = newNode;
}
function onExpand(event, treeId, treeNode) {
  curExpandNode = treeNode;
  leftTreeScroll();
}
function onCollapse(event, treeId, treeNode) {
  curExpandNode = treeNode;
  leftTreeScroll();
}
// 保持展开单一路径 end

// 请求树
$.ajax({
  type: "get",
  url: "/index.php/Admin/index/get_tree",
  dataType : 'json',
  success: function(msg) {
    var groupNodes = msg.data;
    $.fn.zTree.init($("#treeDemo"), settingStuCard, groupNodes);
  },
  error: function(msg) {
    dialog.error("请求服务器异常！");
  }
});


var user_type = "<?php echo ($user_type); ?>"; // 用户类型 1学校管理员 2系统用户 3老师 4家长 5省/直辖市教委 6 市教委 7 区/县教委  
//点击
function zTreeOnClick(event, treeId, treeNode) {
  var treeObj = $.fn.zTree.getZTreeObj("treeDemo");
  var nodes   = treeObj.getSelectedNodes();
  for (var i=0, l=nodes.length; i < l; i++) {
    treeObj.checkNode(nodes[i], true, true);
  }
  if (user_type == '1') {
    // 点击选择
    if(treeNode.typeFlag == 'shool') {
      $(".s_id_hide").val(treeNode.id); // 学校
      $(".a_id_hide").val(''); // 校区
      $(".g_id_hide").val(''); // 年级
      $(".c_id_hide").val(''); // 班级
      $(".stu_id_hide").val(''); // 学生
    };
    if(treeNode.typeFlag == 'area') {
      $(".s_id_hide").val(treeNode.getParentNode().id); // 学校
      $(".a_id_hide").val(treeNode.id); // 校区
      $(".g_id_hide").val(''); // 年级
      $(".c_id_hide").val(''); // 班级
      $(".stu_id_hide").val(''); // 学生
    };
    if(treeNode.typeFlag == 'grade') {
      $(".s_id_hide").val(treeNode.getParentNode().getParentNode().id); // 学校
      $(".a_id_hide").val(treeNode.getParentNode().id); // 校区
      $(".g_id_hide").val(treeNode.id); // 年级
      $(".c_id_hide").val(''); // 班级
      $(".stu_id_hide").val(''); // 学生
    };
    if(treeNode.typeFlag == 'class') {
      $(".s_id_hide").val(treeNode.getParentNode().getParentNode().getParentNode().id); // 学校
      $(".a_id_hide").val(treeNode.getParentNode().getParentNode().id); // 校区
      $(".g_id_hide").val(treeNode.getParentNode().id); // 年级
      $(".c_id_hide").val(treeNode.id); // 班级
      $(".stu_id_hide").val(''); // 学生
    };
    if(treeNode.typeFlag == 'student') {
      $(".s_id_hide").val(treeNode.getParentNode().getParentNode().getParentNode().getParentNode().id); // 学校
      $(".a_id_hide").val(treeNode.getParentNode().getParentNode().getParentNode().id); // 校区
      $(".g_id_hide").val(treeNode.getParentNode().getParentNode().id); // 年级
      $(".c_id_hide").val(treeNode.getParentNode().id); // 班级
      $(".stu_id_hide").val(treeNode.id); // 学生
      search();
    };
  };
  if (user_type == '2' || user_type == '5') {
    // 点击选择
    if(treeNode.typeFlag == 'prov') {
      $(".prov_id_hide").val(treeNode.id); // 省/直辖市
      $(".city_id_hide").val(''); // 市
      $(".county_id_hide").val(''); // 区/县
      $(".s_id_hide").val(''); // 学校
      $(".a_id_hide").val(''); // 校区
      $(".g_id_hide").val(''); // 年级
      $(".c_id_hide").val(''); // 班级
      $(".stu_id_hide").val(''); // 学生
    };
    if(treeNode.typeFlag == 'city') {
      $(".prov_id_hide").val(treeNode.getParentNode().id); // 省/直辖市
      $(".city_id_hide").val(treeNode.id); // 市
      $(".county_id_hide").val(''); // 区/县
      $(".s_id_hide").val(''); // 学校
      $(".a_id_hide").val(''); // 校区
      $(".g_id_hide").val(''); // 年级
      $(".c_id_hide").val(''); // 班级
      $(".stu_id_hide").val(''); // 学生
    };
    if(treeNode.typeFlag == 'county') {
      $(".prov_id_hide").val(treeNode.getParentNode().getParentNode().id); // 省/直辖市
      $(".city_id_hide").val(treeNode.getParentNode().id); // 市
      $(".county_id_hide").val(treeNode.id); // 区/县
      $(".s_id_hide").val(''); // 学校
      $(".a_id_hide").val(''); // 校区
      $(".g_id_hide").val(''); // 年级
      $(".c_id_hide").val(''); // 班级
      $(".stu_id_hide").val(''); // 学生
    };
    if(treeNode.typeFlag == 'shool') {
      $(".prov_id_hide").val(treeNode.getParentNode().getParentNode().getParentNode().id); // 省/直辖市
      $(".city_id_hide").val(treeNode.getParentNode().getParentNode().id); // 市
      $(".county_id_hide").val(treeNode.getParentNode().id); // 区/县
      $(".s_id_hide").val(treeNode.id); // 学校
      $(".a_id_hide").val(''); // 校区
      $(".g_id_hide").val(''); // 年级
      $(".c_id_hide").val(''); // 班级
      $(".stu_id_hide").val(''); // 学生
    };
    if(treeNode.typeFlag == 'area') {
      $(".prov_id_hide").val(treeNode.getParentNode().getParentNode().getParentNode().getParentNode().id); // 省/直辖市
      $(".city_id_hide").val(treeNode.getParentNode().getParentNode().getParentNode().id); // 市
      $(".county_id_hide").val(treeNode.getParentNode().getParentNode().id); // 区/县
      $(".s_id_hide").val(treeNode.getParentNode().id); // 学校
      $(".a_id_hide").val(treeNode.id); // 校区
      $(".g_id_hide").val(''); // 年级
      $(".c_id_hide").val(''); // 班级
      $(".stu_id_hide").val(''); // 学生
    };
    if(treeNode.typeFlag == 'grade') {
      $(".prov_id_hide").val(treeNode.getParentNode().getParentNode().getParentNode().getParentNode().getParentNode().id); // 省/直辖市
      $(".city_id_hide").val(treeNode.getParentNode().getParentNode().getParentNode().getParentNode().id); // 市
      $(".county_id_hide").val(treeNode.getParentNode().getParentNode().getParentNode().id); // 区/县
      $(".s_id_hide").val(treeNode.getParentNode().getParentNode().id); // 学校
      $(".a_id_hide").val(treeNode.getParentNode().id); // 校区
      $(".g_id_hide").val(treeNode.id); // 年级
      $(".c_id_hide").val(''); // 班级
      $(".stu_id_hide").val(''); // 学生
    };
    if(treeNode.typeFlag == 'class') {
      $(".prov_id_hide").val(treeNode.getParentNode().getParentNode().getParentNode().getParentNode().getParentNode().getParentNode().id); // 省/直辖市
      $(".city_id_hide").val(treeNode.getParentNode().getParentNode().getParentNode().getParentNode().getParentNode().id); // 市
      $(".county_id_hide").val(treeNode.getParentNode().getParentNode().getParentNode().getParentNode().id); // 区/县
      $(".s_id_hide").val(treeNode.getParentNode().getParentNode().getParentNode().id); // 学校
      $(".a_id_hide").val(treeNode.getParentNode().getParentNode().id); // 校区
      $(".g_id_hide").val(treeNode.getParentNode().id); // 年级
      $(".c_id_hide").val(treeNode.id); // 班级
      $(".stu_id_hide").val(''); // 学生
    };
    if(treeNode.typeFlag == 'student') {
      $(".prov_id_hide").val(treeNode.getParentNode().getParentNode().getParentNode().getParentNode().getParentNode().getParentNode().id); // 省/直辖市
      $(".city_id_hide").val(treeNode.getParentNode().getParentNode().getParentNode().getParentNode().getParentNode().id); // 市
      $(".county_id_hide").val(treeNode.getParentNode().getParentNode().getParentNode().getParentNode().id); // 区/县
      $(".s_id_hide").val(treeNode.getParentNode().getParentNode().getParentNode().getParentNode().id); // 学校
      $(".a_id_hide").val(treeNode.getParentNode().getParentNode().getParentNode().id); // 校区
      $(".g_id_hide").val(treeNode.getParentNode().getParentNode().id); // 年级
      $(".c_id_hide").val(treeNode.getParentNode().id); // 班级
      $(".stu_id_hide").val(treeNode.id); // 学生
      search();
    };
  };
  if (user_type == '6') {
    // 点击选择
    if(treeNode.typeFlag == 'city') {
      $(".city_id_hide").val(treeNode.id); // 市
      $(".county_id_hide").val(''); // 区/县
      $(".s_id_hide").val(''); // 学校
      $(".a_id_hide").val(''); // 校区
      $(".g_id_hide").val(''); // 年级
      $(".c_id_hide").val(''); // 班级
      $(".stu_id_hide").val(''); // 学生
    };
    if(treeNode.typeFlag == 'county') {
      $(".city_id_hide").val(treeNode.getParentNode().id); // 市
      $(".county_id_hide").val(treeNode.id); // 区/县
      $(".s_id_hide").val(''); // 学校
      $(".a_id_hide").val(''); // 校区
      $(".g_id_hide").val(''); // 年级
      $(".c_id_hide").val(''); // 班级
      $(".stu_id_hide").val(''); // 学生
    };
    if(treeNode.typeFlag == 'shool') {
      $(".city_id_hide").val(treeNode.getParentNode().getParentNode().id); // 市
      $(".county_id_hide").val(treeNode.getParentNode().id); // 区/县
      $(".s_id_hide").val(treeNode.id); // 学校
      $(".a_id_hide").val(''); // 校区
      $(".g_id_hide").val(''); // 年级
      $(".c_id_hide").val(''); // 班级
      $(".stu_id_hide").val(''); // 学生
    };
    if(treeNode.typeFlag == 'area') {
      $(".city_id_hide").val(treeNode.getParentNode().getParentNode().getParentNode().id); // 市
      $(".county_id_hide").val(treeNode.getParentNode().getParentNode().id); // 区/县
      $(".s_id_hide").val(treeNode.getParentNode().id); // 学校
      $(".a_id_hide").val(treeNode.id); // 校区
      $(".g_id_hide").val(''); // 年级
      $(".c_id_hide").val(''); // 班级
      $(".stu_id_hide").val(''); // 学生
    };
    if(treeNode.typeFlag == 'grade') {
      $(".city_id_hide").val(treeNode.getParentNode().getParentNode().getParentNode().getParentNode().id); // 市
      $(".county_id_hide").val(treeNode.getParentNode().getParentNode().getParentNode().id); // 区/县
      $(".s_id_hide").val(treeNode.getParentNode().getParentNode().id); // 学校
      $(".a_id_hide").val(treeNode.getParentNode().id); // 校区
      $(".g_id_hide").val(treeNode.id); // 年级
      $(".c_id_hide").val(''); // 班级
      $(".stu_id_hide").val(''); // 学生
    };
    if(treeNode.typeFlag == 'class') {
      $(".city_id_hide").val(treeNode.getParentNode().getParentNode().getParentNode().getParentNode().getParentNode().id); // 市
      $(".county_id_hide").val(treeNode.getParentNode().getParentNode().getParentNode().getParentNode().id); // 区/县
      $(".s_id_hide").val(treeNode.getParentNode().getParentNode().getParentNode().id); // 学校
      $(".a_id_hide").val(treeNode.getParentNode().getParentNode().id); // 校区
      $(".g_id_hide").val(treeNode.getParentNode().id); // 年级
      $(".c_id_hide").val(treeNode.id); // 班级
      $(".stu_id_hide").val(''); // 学生
    };
    if(treeNode.typeFlag == 'student') {
      $(".city_id_hide").val(treeNode.getParentNode().getParentNode().getParentNode().getParentNode().getParentNode().id); // 市
      $(".county_id_hide").val(treeNode.getParentNode().getParentNode().getParentNode().getParentNode().id); // 区/县
      $(".s_id_hide").val(treeNode.getParentNode().getParentNode().getParentNode().getParentNode().id); // 学校
      $(".a_id_hide").val(treeNode.getParentNode().getParentNode().getParentNode().id); // 校区
      $(".g_id_hide").val(treeNode.getParentNode().getParentNode().id); // 年级
      $(".c_id_hide").val(treeNode.getParentNode().id); // 班级
      $(".stu_id_hide").val(treeNode.id); // 学生
      search();
    };
  };
  if (user_type == '7') {
    // 点击选择
    if(treeNode.typeFlag == 'county') {
      $(".county_id_hide").val(treeNode.id); // 区/县
      $(".s_id_hide").val(''); // 学校
      $(".a_id_hide").val(''); // 校区
      $(".g_id_hide").val(''); // 年级
      $(".c_id_hide").val(''); // 班级
      $(".stu_id_hide").val(''); // 学生
    };
    if(treeNode.typeFlag == 'shool') {
      $(".county_id_hide").val(treeNode.getParentNode().id); // 区/县
      $(".s_id_hide").val(treeNode.id); // 学校
      $(".a_id_hide").val(''); // 校区
      $(".g_id_hide").val(''); // 年级
      $(".c_id_hide").val(''); // 班级
      $(".stu_id_hide").val(''); // 学生
    };
    if(treeNode.typeFlag == 'area') {
      $(".county_id_hide").val(treeNode.getParentNode().getParentNode().id); // 区/县
      $(".s_id_hide").val(treeNode.getParentNode().id); // 学校
      $(".a_id_hide").val(treeNode.id); // 校区
      $(".g_id_hide").val(''); // 年级
      $(".c_id_hide").val(''); // 班级
      $(".stu_id_hide").val(''); // 学生
    };
    if(treeNode.typeFlag == 'grade') {
      $(".county_id_hide").val(treeNode.getParentNode().getParentNode().getParentNode().id); // 区/县
      $(".s_id_hide").val(treeNode.getParentNode().getParentNode().id); // 学校
      $(".a_id_hide").val(treeNode.getParentNode().id); // 校区
      $(".g_id_hide").val(treeNode.id); // 年级
      $(".c_id_hide").val(''); // 班级
      $(".stu_id_hide").val(''); // 学生
    };
    if(treeNode.typeFlag == 'class') {
      $(".county_id_hide").val(treeNode.getParentNode().getParentNode().getParentNode().getParentNode().id); // 区/县
      $(".s_id_hide").val(treeNode.getParentNode().getParentNode().getParentNode().id); // 学校
      $(".a_id_hide").val(treeNode.getParentNode().getParentNode().id); // 校区
      $(".g_id_hide").val(treeNode.getParentNode().id); // 年级
      $(".c_id_hide").val(treeNode.id); // 班级
      $(".stu_id_hide").val(''); // 学生
    };
    if(treeNode.typeFlag == 'student') {
      $(".county_id_hide").val(treeNode.getParentNode().getParentNode().getParentNode().getParentNode().id); // 区/县
      $(".s_id_hide").val(treeNode.getParentNode().getParentNode().getParentNode().getParentNode().id); // 学校
      $(".a_id_hide").val(treeNode.getParentNode().getParentNode().getParentNode().id); // 校区
      $(".g_id_hide").val(treeNode.getParentNode().getParentNode().id); // 年级
      $(".c_id_hide").val(treeNode.getParentNode().id); // 班级
      $(".stu_id_hide").val(treeNode.id); // 学生
      search();
    };
  };
  if (user_type == '4') {
    // 点击选择
    if(treeNode.typeFlag == 'student') {
      $(".stu_id_hide").val(treeNode.id); // 学生
      search();
    };
  };
}

function clearDownTime(){
  clearTimeout(timerWhiteList);
  clearTimeout(timerSoundSize);
  clearTimeout(timerTealthTime);
  clearTimeout(timerWorkingMode);
  clearTimeout(timerMonitor);    
  clearTimeout(timerDomainPort);
  clearTimeout(timerIpPort);
  clearTimeout(timerRfid);
  clearTimeout(timerRfidGps);
  clearTimeout(timerCallfilter);
  clearTimeout(timerCalldisplay);
  clearTimeout(timerWirelessatte);
  clearTimeout(timerStepcounter);
  clearTimeout(timerInschool);
  whiteListSave.attr('disabled', false);
  whiteListSave.html('<span class="glyphicon glyphicon-save"></span>保存');
  soundSizeSetSave.attr('disabled', false);
  soundSizeSetSave.html('<span class="glyphicon glyphicon-save"></span>保存'); 
  tealthTimeSave.attr('disabled', false);
  tealthTimeSave.html('<span class="glyphicon glyphicon-save"></span>保存'); 
  workingModeSetSave.attr('disabled', false);
  workingModeSetSave.html('<span class="glyphicon glyphicon-save"></span>保存'); 
  monitorSetSave.attr('disabled', false);
  monitorSetSave.html('<span class="glyphicon glyphicon-save"></span>保存');  
  domainPortSetSave.attr('disabled', false);
  domainPortSetSave.html('<span class="glyphicon glyphicon-save"></span>保存'); 
  ipPortSetSave.attr('disabled', false);
  ipPortSetSave.html('<span class="glyphicon glyphicon-save"></span>保存'); 
  rfidSetSave.attr('disabled', false);
  rfidSetSave.html('<span class="glyphicon glyphicon-save"></span>保存'); 
  rfidGpsSetSave.attr('disabled', false);
  rfidGpsSetSave.html('<span class="glyphicon glyphicon-save"></span>保存'); 
  callfilterSetSave.attr('disabled', false);
  callfilterSetSave.html('<span class="glyphicon glyphicon-save"></span>保存'); 
  calldisplaySetSave.attr('disabled', false);
  calldisplaySetSave.html('<span class="glyphicon glyphicon-save"></span>保存');    
  wirelessatteSetSave.attr('disabled', false);
  wirelessatteSetSave.html('<span class="glyphicon glyphicon-save"></span>保存');   
  stepcounterSetSave.attr('disabled', false);
  stepcounterSetSave.html('<span class="glyphicon glyphicon-save"></span>保存'); 
  inschoolSetSave.attr('disabled', false);
  inschoolSetSave.html('<span class="glyphicon glyphicon-save"></span>保存');
}


var boxHeader = $("#box-header");
var stuName = $("#stuName");
var stuNo = $("#stuNo");
var stuImei = $("#stuImei");
var stuRfid = $("#stuRfid");
var phone = $("#phone");
var imei = $("#imei");
var phone = $("#phone");
// 获取学生卡基本信息
function search(){
  clearDownTime();
  clearCardConfig();
  // 需要的数据
  var url = '/index.php/Admin/StuCard/SthCardSet/get_stu_data';
  fget(url,{stu_id: $(".stu_id_hide").val()},function(res){
    if(g_loadingIndex > -1) dialog.closeLoding(g_loadingIndex);
    g_loadingIndex = -1;
    if(res.status==1){
      boxHeader.css('display', 'block');
      var stuObj=res.data;
      stuImei.html(stuObj.imei_id);
      if(stuObj.stu_name==null){
        stuName.html("暂无数据");
      }else{
        stuName.html(stuObj.stu_name);
      }
      if(stuObj.stu_no==null){
        stuNo.html("暂无数据");
      }else{
        stuNo.html(stuObj.stu_no);
      }
      if(stuObj.rfid_id==null){
        stuRfid.html("暂无数据");
      }else{
        stuRfid.html(stuObj.rfid_id);
      }
      if(stuObj.imei_id==null){
        stuImei.html("暂无数据");
      }else{
        imei.val($(stuImei).text()); 
      }
      phone.val(stuObj.phone);
      initializeCardConfig(stuObj.config);
    }else{
      dialog.error(res.info);
    }
  })
}


// 刷新 文件树
$(".id_hide").val("");
//*-----清空学生卡设置-----*//
function clearCardConfig(){

  // IMEI号码清空
  imei.val("");
  // SOS号码清空
  // for (var i = 0; i < 3; i++) {
  //   $("#sosNumber"+(i+1)).val("");
  // }

  // 白名单清空
  for (var i = 0; i < 10; i++) {
    $("#whiteListName"+(i+1)).val("");
    $("#whitePhoneNumber"+(i+1)).val("");
  }

  // // 来电响铃模式清空
  // $.each($('input[name="sceneMode"]:checked'),function(i,v){
  //   $(v).iCheck('uncheck');
  // });

  // 喇叭音量清空
  $.each($('input[name="soundSize"]:checked'),function(i,v){
    $(v).iCheck('uncheck');
  });

  // Switch清空
  function clearSwitchStatus(switchStatus){
    if($("."+switchStatus).val().indexOf('OFF')>-1){
      $("."+switchStatus).val("ON");
      $("."+switchStatus).bootstrapSwitch('toggleState');
    }
    if($("."+switchStatus).val().indexOf('ON')>-1){
      $("."+switchStatus).val("OFF");
      $("."+switchStatus).bootstrapSwitch('toggleState');
    }   
  }
  clearSwitchStatus("tealthTimeStatus1");
  clearSwitchStatus("tealthTimeStatus2");
  clearSwitchStatus("tealthTimeStatus3");
  clearSwitchStatus("tealthTimeStatus4");
  clearSwitchStatus("tealthTimeStatus5");
  clearSwitchStatus("tealthTimeStatus6");
  clearSwitchStatus("tealthTimeStatus7");
  clearSwitchStatus("callfilterStatus");
  clearSwitchStatus("calldisplayStatus");
  clearSwitchStatus("wirelessatteStatus");
  clearSwitchStatus("stepcounterStatus");

  //单选清空
  $.each($('.class-hour'),function(i,v){
    $(v).val("00:00");
  });

   // 监听号码清空
  $("#monitorSetName").val("");
  $("#monitorSetNumber").val("");

  // 工作模式清空
  $("#reportingTime").val("");

  // 域名和端口清空
  $("#domainValue").val("");
  $("#port1").val("");

  // IP和端口清空
  $("#ip").val("");
  $("#port2").val("");

  // 天线组清空
  $("#rfidInfo1").val("");
  $("#rfidInfo2").val("");
  $("#rfidInfo3").val(""); 

  // 天线和Gps围栏清空
  $("#rfidGpsInfo1").val("");
  $("#rfidGpsInfo2").val("");
  $("#rfidGpsInfo3").val("");
  $("#rfidGpsInfo4").val(""); 
  $("#rfidGpsInfo5").val(""); 
  $("#rfidGpsInfo6").val("");  


  // 自动屏蔽功能清空
  $.each($('input[name="inschool"]:checked'),function(i,v){
    $(v).iCheck('uncheck');
  });
}
clearCardConfig();

//*-----初始化学生卡设置-----*//
function initializeCardConfig(config){
  if(imei.val()!=""){
    if(phone.val()!=""){
      if(config!=null){
        // /*--------------- 初始化SOS号码  ----------------*/
        // if(config.sos!=undefined){
        //   var sosData=config.sos;
        //   if(sosData !=null && sosData !=""){
        //     var sos=sosData.split(",");
        //     for (var i = 0; i < sos.length; i++) {
        //       $("#sosNumber"+(i+1)).val(sos[i]);
        //     } 
        //   }
        // }

        /*--------------- 初始化白名单 ----------------*/
        if(config.whitelist!=undefined){
          var whiteListData =config.whitelist;
          if (whiteListData != null && whiteListData != "") {
            var whiteListArray = whiteListData.split(",");
            for (var i = 0; i < whiteListArray.length; i++) {
              var whiteListSlot = whiteListArray[i];
              var whiteListValue = whiteListSlot.split(":");
              $("#whiteListName" + (i + 1)).val(whiteListValue[0]);
              $("#whitePhoneNumber" + (i + 1)).val(whiteListValue[1]);
            }
          }
        }

        // /*--------------- 来电响铃模式 ----------------*/
        // if(config.scenemode!=undefined){
        //   var sceneModeData = config.scenemode;
        //   $("#sceneMode"+"-"+sceneModeData).iCheck("check");
        // } 

        /*--------------- 初始化隐藏时间设置 ----------------*/
        function toggleSwitchState(data,switchName){
          if (data != null && data != "") {
            if(data.indexOf('ON')>-1){
              $("."+switchName).val("ON");
              $("."+switchName).iCheck('check');
              $("."+switchName).bootstrapSwitch('toggleState');
            }
            else {
              $("."+switchName).iCheck('uncheck');
              $("."+switchName).val("OFF");
            }
          }
        }

        if(config.tealthtime!=undefined){
          var stealthTimeData = config.tealthtime;
          if (stealthTimeData != null && stealthTimeData != "") {
            // 时间段
            var stealthTimeValues = stealthTimeData.split("|");
            var timeValues = stealthTimeValues[0];
            var timeValue = timeValues.split(",");
            // 状态
            var stateValues = stealthTimeValues[1];
            var stateValue = stateValues.split(",");
            toggleSwitchState(stateValue[0],"tealthTimeStatus1");
            toggleSwitchState(stateValue[1],"tealthTimeStatus2");
            toggleSwitchState(stateValue[2],"tealthTimeStatus3");
            toggleSwitchState(stateValue[3],"tealthTimeStatus4");
            toggleSwitchState(stateValue[4],"tealthTimeStatus5");
            toggleSwitchState(stateValue[5],"tealthTimeStatus6");
            toggleSwitchState(stateValue[6],"tealthTimeStatus7");
            function stealthTimeAssignment(timeValue){
              for (var i = 0; i < timeValue.length; i++) {
                var timeSlot = timeValue[i];
                if(timeSlot != ""){
                  var times = timeSlot.split("-");
                  $("#timeSlotStart"+(i+1)).val(times[0]);
                  $("#timeSlotEnd"+(i+1)).val(times[1]);
                }
                // }else{
                //   $("#timeSlotStart"+(i+1)).val("00:00");
                //   $("#timeSlotEnd"+(i+1)).val("00:00");
                // }
              }
            }
            stealthTimeAssignment(timeValue)  
          }
        }
        /*--------------- 喇叭音量 ----------------*/
        if(config.soundsize!=undefined){
          var soundSizeData =config.soundsize;
          $("#soundSize"+"-"+soundSizeData).iCheck("check");
        }else{
          $("#soundSize-2").iCheck("check");
        } 

        /*--------------- 工作模式设置 ----------------*/
        if(config.working!=undefined){
          var workingModeData = config.working;
          var workingModeArray = workingModeData.split(","); 
          $("#reportingTime").val(workingModeArray[1]);
          $("#shortMassage").find("option[value='"+workingModeArray[0]+"']").attr("selected",true); 
        }else{
          $("#shortMassage").find("option[value='m1']").attr("selected",true); 
          $("#reportingTime").val("35")
        }
        
        /*--------------- 监听号码设置 ----------------*/
        if(config.monitor!=undefined){
          var monitorData = config.monitor;
          var monitorArray = monitorData.split(","); 
          var monitorSetNameSource=monitorArray[0];
          var monitorSetName = monitorSetNameSource.replace(/\(.*?\)/,'');
          $("#monitorSetName").val(monitorSetName);
          $("#monitorSetNumber").val(monitorArray[1]);
        }
        
        /*--------------- 域名和端口设置 ----------------*/
        if(config.domain!=undefined){
          var domainPortData = config.domain;
          var domainPortArray = domainPortData.split(","); 
          $("#domainValue").val(domainPortArray[0]);
          $("#port1").val(domainPortArray[1]);
        }

        /*--------------- IP和端口设置 ----------------*/
        if(config.ipport!=undefined){
          var ipPortData = config.ipport;
          var ipPortArray = ipPortData.split(","); 
          $("#ip").val(ipPortArray[0]);
          $("#port2").val(ipPortArray[1]);
        }

        /*--------------- rfid设置 ----------------*/
        if(config.rfid!=undefined){
          var rfidData = config.rfid;
          var rfidArray = rfidData.split(","); 
          $("#rfidInfo1").val(rfidArray[0]);
          $("#rfidInfo2").val(rfidArray[1]);
          $("#rfidInfo3").val(rfidArray[2]);
        }


        /*--------------- rfid和GPS围栏设置 ----------------*/
        if(config.rfid!=undefined){
          var rfidGpsData = config.rfid;
          var rfidGpsArray = rfidGpsData.split(","); 
          $("#rfidGpsInfo1").val(rfidGpsArray[0]);
          $("#rfidGpsInfo2").val(rfidGpsArray[1]);
          $("#rfidGpsInfo3").val(rfidGpsArray[2]);
          $("#rfidGpsInfo4").val(rfidGpsArray[3]);
          $("#rfidGpsInfo5").val(rfidGpsArray[4]);
          $("#rfidGpsInfo6").val(rfidGpsArray[5]);
        }


        /*--------------- 来电过滤开关功能设置 ----------------*/
        if(config.callfilter!=undefined){
          var callfilterData = config.callfilter;
          toggleSwitchState(callfilterData,"callfilterStatus");
        }else{
          toggleSwitchState("ON","callfilterStatus");
        }

        /*--------------- 来电显示开关功能设置 ----------------*/
        if(config.calldisplay!=undefined){
          var calldisplayData = config.calldisplay;
          toggleSwitchState(calldisplayData,"calldisplayStatus");
        }

        /*--------------- 无线考勤开关功能设置 ----------------*/
        if(config.wirelessatte!=undefined){
          var wirelessatteData = config.wirelessatte;
          toggleSwitchState(wirelessatteData,"wirelessatteStatus");
        }

        /*--------------- 计步开关功能设置 ----------------*/
        if(config.stepcounter!=undefined){
          var stepcounterData = config.stepcounter;
          toggleSwitchState(stepcounterData,"stepcounterStatus");
        }
        /*--------------- 进校自动屏蔽功能设置 ----------------*/
        if(config.inschool!=undefined){
          var inSchoolData =config.inschool;
          $("#inschool"+"-"+inSchoolData).iCheck("check");
        } 
      }else{
        dialog.notify('请现在进行学生证相关设置!');
      }
    }else{
      dialog.error('学生卡未绑定电话号码!');
    }
  }else{
    dialog.error('请先绑定学生证设备!');
  }
}


//SOS 号码保存设置 start
// var falgSos = true;
// var timerSos=null;
// var sosSave = $("#sosSave");
// sosSave.attr('disabled', false);
// function sosSaveConfig(){
//   if($("#stuImei").text()!="暂无数据"){
//     if($("#stuImei").text()!=""){
//       var sos = ""; 
//       sos = $("#sosNumber1").val()+","+$("#sosNumber2").val()+","+$("#sosNumber3").val()
//       $("#sos").val(sos);
//       $("#typeFalg").val("sos");

//       var re = /^1[34578]\d{9}$/;
//       var sosCell = $(".sosCell")
//       for (var i = 0; i < sosCell.length; i++) {
//         var cellphone = sosCell.eq(i).val();
//         if (!re.test(cellphone)&&cellphone!="") {
//           dialog.error('输入的手机格式不正确！');
//           return false;
//         }
//       }
//       var countdown = 50;
//       function countDownTime(){  
//         if (countdown==0) {  
//           clearTimeout(timerSos);
//           sosSave.attr('disabled', false);
//           sosSave.html('<span class="glyphicon glyphicon-save"></span>保存'); 
//           countdown = 50;  
//           return false;
//         } else { 
//           sosSave.attr('disabled', true);   
//           sosSave.html(countdown+"秒后再点击保存"); 
//           countdown--;  
//         }
//         timerSos = setTimeout(function() { 
//           countDownTime() 
//         },1000)
//       }
//       var url = '/index.php/Admin/StuCard/SthCardSet/edit';
//       var data=  $("#stuCardfrom").serialize();

//       dpost(url,data,function(data){
//         if(g_loadingIndex > -1) dialog.closeLoding(g_loadingIndex);
//         g_loadingIndex = -1;
//         if( data.status == 1 ) {
//           dialog.success(data.info,function(){ 
//             countDownTime(); 
//             layer.closeAll();
//           });
//         } else {
//           dialog.error(data.info);
//         }
//       })
//     }else{
//       dialog.error('请先绑定学生证设备！');
//     }
//   }else{
//     dialog.error('请先选择学生！'); 
//   }
// }
//SOS 号码保存设置 end

// 手机号验证
$('.phoneNumber').blur(function() {
    var re = /^1[34578]\d{9}$/;
    var cellphone = $(this).val();
    if (!re.test(cellphone)&&cellphone!="") {
      $(this).parents(".reParent").next('.col-sm-2').remove();
      $(this).parents(".reParent").after('<div style="color:#f00; padding:3px 0 0 0;" class="col-sm-2"><span class="xing">*</span>手机号格式不正确！</div>');
    }else{
       $(this).parents(".reParent").next('.col-sm-2').remove();
    }
});

//白名单保存设置 start
var timerWhiteList =null;
var whiteListSave = $("#whiteListSave");
whiteListSave.attr('disabled', false);
function whiteListSaveConfig(){
  if($(".stu_id_hide").val()!=""){
    if(stuImei.text()!="暂无数据"){
      if(phone.val()!=""){
        var whiteList = "";
        whiteList = $("#whiteListName1").val() +":"+$("#whitePhoneNumber1").val() +","+$("#whiteListName2").val() +":"+$("#whitePhoneNumber2").val() +","+$("#whiteListName3").val() +":"+$("#whitePhoneNumber3").val() +","
           +$("#whiteListName4").val() +":"+$("#whitePhoneNumber4").val() +","+$("#whiteListName5").val() +":"+$("#whitePhoneNumber5").val()+","+$("#whiteListName6").val() +":"+$("#whitePhoneNumber6").val()+","+$("#whiteListName7").val() +":"+$("#whitePhoneNumber7").val()+","+$("#whiteListName8").val() +":"+$("#whitePhoneNumber8").val()+","+$("#whiteListName9").val() +":"+$("#whitePhoneNumber9").val()+","+$("#whiteListName10").val() +":"+$("#whitePhoneNumber10").val();
        $("#whitelist").val(whiteList);
        $("#typeFalg").val("whitelist");

        var re = /^1[34578]\d{9}$/;
        var whiteListCell = $(".whiteListCell");
        for (var i = 0; i < whiteListCell.length; i++) {
          var cellphone = whiteListCell.eq(i).val();
          if (!re.test(cellphone)&&cellphone!="") {
            dialog.error('输入的手机格式不正确！');
            return false;
          }
        }
        var countdown = 50;
        function countDownTime(){  
          if (countdown==0) {  
            clearTimeout(timerWhiteList);
            whiteListSave.attr('disabled', false);
            whiteListSave.html('<span class="glyphicon glyphicon-save"></span>保存'); 
            countdown = 50;  
            return false;
          } else { 
            whiteListSave.attr('disabled', true);   
            whiteListSave.html(countdown+"秒后再点击保存"); 
            countdown--;  
          }
          timerWhiteList = setTimeout(function() { 
            countDownTime() 
          },1000)
        }
        var url = '/index.php/Admin/StuCard/SthCardSet/edit';
        var data=  $("#stuCardfrom").serialize();
        dpost(url,data,function(data){
          if(g_loadingIndex > -1) dialog.closeLoding(g_loadingIndex);
          g_loadingIndex = -1;
          if( data.status == 1 ) {
            dialog.success(data.info,function(){ 
              countDownTime(); 
              layer.closeAll();
            });
          }else {
            dialog.error(data.info);
          }
        })
      }else{
        dialog.error('学生卡未绑定电话号码');
      }
    }else{
      dialog.error('请先绑定学生证设备！');
    }
  }else{
    dialog.error('请先选择学生！'); 
  }
}
// 白名单保存设置 end

// // 来电响铃模式保存设置 start
// var falgSceneMode = true;
// var timerSceneMode =null;
// var sceneModeSave = $("#sceneModeSave");
// sceneModeSave.attr('disabled', false);
// function sceneModeSaveConfig(){
//   if($("#stuImei").text()!="暂无数据"){
//     if($("#stuImei").text()!=""){
//       var sceneModeValue = "";
//       $.each($('input[name="sceneMode"]:checked'),function(i,v){
//         sceneModeValue = $(v).val();
//       }); 
//       $("#scenemode").val(sceneModeValue);
//       $("#typeFalg").val("scenemode");

//       var countdown = 50;
//       function countDownTime(){  
//         if (countdown==0) {  
//           clearTimeout(timerSceneMode);
//           sceneModeSave.attr('disabled', false);
//           sceneModeSave.html('<span class="glyphicon glyphicon-save"></span>保存'); 
//           countdown = 50;  
//           return false;
//         } else { 
//           sceneModeSave.attr('disabled', true);   
//           sceneModeSave.html(countdown+"秒后再点击保存"); 
//           countdown--;  
//         }
//         timerSceneMode = setTimeout(function() { 
//           countDownTime() 
//         },1000)
//       }
//       var url = '/index.php/Admin/StuCard/SthCardSet/edit';
//       var data=  $("#stuCardfrom").serialize();
//       dpost(url,data,function(data){
//         if(g_loadingIndex > -1) dialog.closeLoding(g_loadingIndex);
//         g_loadingIndex = -1;
//         if( data.status == 1 ) {
//           dialog.success(data.info,function(){ 
//             countDownTime(); 
//             layer.closeAll();
//           });
//         } else {
//           dialog.error(data.info);
//         }
//       })
//     }else{
//       dialog.error('请先绑定学生证设备！');
//     }
//   }else{
//     dialog.error('请先选择学生！'); 
//   }
// }
// // 来电响铃模式保存设置 end

// 喇叭音量保存设置 start
var timerSoundSize =null;
var soundSizeSetSave = $("#soundSizeSetSave");
soundSizeSetSave.attr('disabled', false);
function soundSizeSetSaveConfig(){
 if($(".stu_id_hide").val()!=""){
    if(stuImei.text()!="暂无数据"){
      if(phone.val()!=""){

        var soundSizeValue = "";
        $.each($('input[name="soundSize"]:checked'),function(i,v){
          soundSizeValue = $(v).val();
        }); 
        $("#soundsize").val(soundSizeValue);
        $("#typeFalg").val("soundsize");

        var countdown = 50;
        function countDownTime(){  
          if (countdown==0) {  
            clearTimeout(timerSoundSize);
            soundSizeSetSave.attr('disabled', false);
            soundSizeSetSave.html('<span class="glyphicon glyphicon-save"></span>保存'); 
            countdown = 50;  
            return false;
          } else { 
            soundSizeSetSave.attr('disabled', true);   
            soundSizeSetSave.html(countdown+"秒后再点击保存"); 
            countdown--;  
          }
          timerSoundSize = setTimeout(function() { 
            countDownTime() 
          },1000)
        }
        var url = '/index.php/Admin/StuCard/SthCardSet/edit';
        var data=  $("#stuCardfrom").serialize();
        dpost(url,data,function(data){
          if(g_loadingIndex > -1) dialog.closeLoding(g_loadingIndex);
          g_loadingIndex = -1;
          if( data.status == 1 ) {
            dialog.success(data.info,function(){ 
              countDownTime(); 
              layer.closeAll();
            });
          } else {
            dialog.error(data.info);
          }
        })
      }else{
          dialog.error('学生卡未绑定电话号码');
        }
      }else{
        dialog.error('请先绑定学生证设备！');
      }
    }else{
    dialog.error('请先选择学生！'); 
  }
}
// 喇叭音量保存设置 end

// 隐身时间设置 start
var timerTealthTime =null;
var tealthTimeSave = $("#tealthTimeSave");
tealthTimeSave.attr('disabled', false);
function tealthTimeSaveConfig(){
  if($(".stu_id_hide").val()!=""){
    if(stuImei.text()!="暂无数据"){
      if(phone.val()!=""){
        var timeSlots = "";
        var monDay = "";
        var tuesDay = "";
        var wednesDay = "";
        var thursDay = "";
        var friDay = "";
        var saturDay = "";
        var sunDay = "";
        for (var i = 1; i <= 3; i++) {
          var timeSlotStart = $("#timeSlotStart"+i).val();
          var timeSlotEnd = $("#timeSlotEnd"+i).val();

          var start_time = new Date(timeSlotStart.replace(/\:/, ""));
          var end_time = new Date(timeSlotEnd.replace(/\:/, ""));

          if(start_time >= end_time&&timeSlotStart!="00:00" && timeSlotEnd!="00:00"){
            dialog.error("开始时间不能大于等于结束时间！");
            return false;
          }
          if(timeSlotStart != "" && timeSlotEnd!= "" ){
            if(i!=3){
              timeSlots += timeSlotStart + '-' + timeSlotEnd+ ',';  
            }else{
              timeSlots += timeSlotStart + '-' + timeSlotEnd+ '|';
            }
          }
          else if(timeSlotStart == "" && timeSlotEnd== "" ){
           if(i!=3){
              timeSlots +=",";
            }else{
              timeSlots +="|"; 
            }
          }
        };
        monDay = $(".tealthTimeStatus1").val();
        tuesDay = $(".tealthTimeStatus2").val();
        wednesDay = $(".tealthTimeStatus3").val();
        thursDay = $(".tealthTimeStatus4").val();
        friDay = $(".tealthTimeStatus5").val();
        saturDay = $(".tealthTimeStatus6").val();
        sunDay = $(".tealthTimeStatus7").val();
        var tealthtimeValue =timeSlots + monDay +"," + tuesDay +"," + wednesDay +","+ thursDay +"," + friDay +"," + saturDay +"," + sunDay;
        $("#tealthtime").val(tealthtimeValue);
        $("#typeFalg").val("tealthtime");
        var countdown = 50;
        function countDownTime(){  
          if (countdown==0) {  
            clearTimeout(timerTealthTime);
            tealthTimeSave.attr('disabled', false);
            tealthTimeSave.html('<span class="glyphicon glyphicon-save"></span>保存'); 
            countdown = 50;  
            return false;
          } else { 
            tealthTimeSave.attr('disabled', true);   
            tealthTimeSave.html(countdown+"秒后再点击保存"); 
            countdown--;  
          }
          timerTealthTime = setTimeout(function() { 
            countDownTime() 
          },1000)
        }
        var url = '/index.php/Admin/StuCard/SthCardSet/edit';
        var data=  $("#stuCardfrom").serialize();
        dpost(url,data,function(data){
          if(g_loadingIndex > -1) dialog.closeLoding(g_loadingIndex);
          g_loadingIndex = -1;
          if( data.status == 1 ) {
            dialog.success(data.info,function(){ 
              countDownTime(); 
              layer.closeAll();
            });
          } else {
            dialog.error(data.info);
          }
        })
      }else{
          dialog.error('学生卡未绑定电话号码');
        }
      }else{
        dialog.error('请先绑定学生证设备！');
      }
    }else{
    dialog.error('请先选择学生！'); 
  }
}
// 隐身时间设置 end

// 工作模式保存设置 start
var timerWorkingMode =null;
var workingModeSetSave = $("#workingModeSetSave");
workingModeSetSave.attr('disabled', false);
function workingModeSetSaveConfig(){
  if($(".stu_id_hide").val()!=""){
    if(stuImei.text()!="暂无数据"){
      if(phone.val()!=""){
        var working = ""; 
        if($("#shortMassage").val()=="请选择"){
           dialog.error('请选择工作模式');
           return false;
        }else{
          working = $("#shortMassage").val()+","+$("#reportingTime").val();
        }
        $("#working").val(working);
        $("#typeFalg").val("working");
        var shortMassage = $("#shortMassage").val();

        var reportingTime = $("#reportingTime").val();
        // alert(reportingTime);
        var re_reportingTime = /^[0-9]*$/ 
        if (!re_reportingTime.test(reportingTime)) {
          dialog.error('输入的上报时间间隔不正确！');
          return false;
        }
        if (reportingTime<35&&shortMassage=="m1") {
          dialog.error('输入的时间间隔必须大于等于35秒！');
          return false;
        }
        if (reportingTime<120&&shortMassage=="m2") {
          dialog.error('输入的时间间隔必须大于等于120秒！');
          return false;
        }
        if(reportingTime==""){
          dialog.error('请输入上报时间间隔！');
          return false;
        }
        var countdown = 50;
        function countDownTime(){  
          if (countdown==0) {  
            clearTimeout(timerWorkingMode);
            workingModeSetSave.attr('disabled', false);
            workingModeSetSave.html('<span class="glyphicon glyphicon-save"></span>保存'); 
            countdown = 50;  
            return false;
          } else { 
            workingModeSetSave.attr('disabled', true);   
            workingModeSetSave.html(countdown+"秒后再点击保存"); 
            countdown--;  
          }
          timerWorkingMode = setTimeout(function() { 
            countDownTime() 
          },1000)
        }
        var url = '/index.php/Admin/StuCard/SthCardSet/edit';
        var data=  $("#stuCardfrom").serialize();
        dpost(url,data,function(data){
          if(g_loadingIndex > -1) dialog.closeLoding(g_loadingIndex);
          g_loadingIndex = -1;
          if( data.status == 1 ) {
            dialog.success(data.info,function(){ 
              countDownTime(); 
              layer.closeAll();
            });
          } else {
            dialog.error(data.info);
          }
        })
      }else{
          dialog.error('学生卡未绑定电话号码');
        }
      }else{
        dialog.error('请先绑定学生证设备！');
      }
    }else{
    dialog.error('请先选择学生！'); 
  }
}
// 工作模式保存设置 end 

// 监听号码保存设置 start
var timerMonitor =null;
var monitorSetSave = $("#monitorSetSave");
monitorSetSave.attr('disabled', false);
function monitorSetSaveConfig(){
  if($(".stu_id_hide").val()!=""){
    if(stuImei.text()!="暂无数据"){
      if(phone.val()!=""){
        var monitor = "";
        var monitorSetName = $("#monitorSetName").val();
        monitor = monitorSetName+","+$("#monitorSetNumber").val();
        $("#monitor").val(monitor);
        $("#typeFalg").val("monitor");

        var re = /^1[34578]\d{9}$/;
        var monitorSetNumber = $("#monitorSetNumber").val();
        if (!re.test(monitorSetNumber)) {
          dialog.error('输入的手机格式不正确！');
          return false;
        }
        if(monitorSetNumber==""){
          dialog.error('请输入监听号码！');
          return false;
        }

        var countdown = 50;
        function countDownTime(){  
          if (countdown==0) {  
            clearTimeout(timerMonitor);
            monitorSetSave.attr('disabled', false);
            monitorSetSave.html('<span class="glyphicon glyphicon-save"></span>保存'); 
            countdown = 50;  
            return false;
          } else { 
            monitorSetSave.attr('disabled', true);   
            monitorSetSave.html(countdown+"秒后再点击保存"); 
            countdown--;  
          }
          timerMonitor = setTimeout(function() { 
            countDownTime() 
          },1000)
        }
        var url = '/index.php/Admin/StuCard/SthCardSet/edit';
        var data=  $("#stuCardfrom").serialize();
        dpost(url,data,function(data){
          if(g_loadingIndex > -1) dialog.closeLoding(g_loadingIndex);
          g_loadingIndex = -1;
          if( data.status == 1 ) {
            dialog.success(data.info,function(){ 
              countDownTime(); 
              layer.closeAll();
            });
          } else {
            dialog.error(data.info);
          }
        })
      }else{
        dialog.error('学生卡未绑定电话号码');
        }
      }else{
        dialog.error('请先绑定学生证设备！');
      }
    }else{
    dialog.error('请先选择学生！'); 
  }
}
// 监听号码保存设置 end

// 域名和端口保存设置 start
var timerDomainPort =null;
var domainPortSetSave = $("#domainPortSetSave");
domainPortSetSave.attr('disabled', false);
function domainPortSetSaveConfig(){
  if($(".stu_id_hide").val()!=""){
    if(stuImei.text()!="暂无数据"){
      if(phone.val()!=""){
        var domain = "";
        domain = $("#domainValue").val() +","+$("#port1").val();
        $("#domain").val(domain);
        $("#typeFalg").val("domain");
        // 验证域名
        var re_domain=/^(http(s)?:\/\/)?([A-Za-z0-9]+\.)?[\w-]+\.\w{2,4}(\/)?$/ 
        var domainValue = $("#domainValue").val();
        if (!re_domain.test(domainValue)) {
          dialog.error('输入的域名不正确！');
          return false;
        }
        if(domainValue==""){
          dialog.error('请输入域名！');
          return false;
        }
        // 验证端口
        var re_port1=/^\d{0,5}$/ 
        var port1 = $("#port1").val();
        if (!re_port1.test(port1)) {
          dialog.error('输入的端口不正确！');
          return false;
        }
        if(port1==""){
          dialog.error('请输入端口！');
          return false;
        }
        var countdown = 50;
        function countDownTime(){  
          if (countdown==0) {  
            clearTimeout(timerDomainPort);
            domainPortSetSave.attr('disabled', false);
            domainPortSetSave.html('<span class="glyphicon glyphicon-save"></span>保存'); 
            countdown = 50;  
            return false;
          } else { 
            domainPortSetSave.attr('disabled', true);   
            domainPortSetSave.html(countdown+"秒后再点击保存"); 
            countdown--;  
          }
          timerDomainPort = setTimeout(function() { 
            countDownTime() 
          },1000)
        }
        var url = '/index.php/Admin/StuCard/SthCardSet/edit';
        var data=  $("#stuCardfrom").serialize();
        dpost(url,data,function(data){
          if(g_loadingIndex > -1) dialog.closeLoding(g_loadingIndex);
          g_loadingIndex = -1;
          if( data.status == 1 ) {
            dialog.success(data.info,function(){ 
              countDownTime(); 
              layer.closeAll();
            });
          } else {
            dialog.error(data.info);
          }
        })
      }else{
        dialog.error('学生卡未绑定电话号码');
        }
      }else{
        dialog.error('请先绑定学生证设备！');
      }
    }else{
    dialog.error('请先选择学生！'); 
  }
}
// 域名和端口保存设置 end

// IP和端口保存设置 start
var timerIpPort =null;
var ipPortSetSave = $("#ipPortSetSave");
ipPortSetSave.attr('disabled', false);
function ipPortSetSaveConfig(){
  if($(".stu_id_hide").val()!=""){
    if(stuImei.text()!="暂无数据"){
      if(phone.val()!=""){

        var ipport = "";
        ipport = $("#ip").val() +","+$("#port2").val();
        $("#ipport").val(ipport);
        $("#typeFalg").val("ipport");
        // 验证IP
        var re_ip=/^(25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[1-9])\.(25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[1-9]|0)\.(25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[1-9]|0)\.(25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[0-9])/ 
        var ip = $("#ipport").val();
        if (!re_ip.test(ip)) {
          dialog.error('输入的IP不正确！');
          return false;
        }
        if(ip==""){
          dialog.error('请输入IP！');
          return false;
        }
        // 验证端口
        var re_port2=/^\d{0,5}$/ 
        var port2 = $("#port2").val();
        if (!re_port2.test(port2)) {
          dialog.error('输入的端口不正确！');
          return false;
        }
        if(port2==""){
          dialog.error('请输入端口！');
          return false;
        }

        var countdown = 50;
        function countDownTime(){  
          if (countdown==0) {  
            clearTimeout(timerIpPort);
            ipPortSetSave.attr('disabled', false);
            ipPortSetSave.html('<span class="glyphicon glyphicon-save"></span>保存'); 
            countdown = 50;  
            return false;
          } else { 
            ipPortSetSave.attr('disabled', true);   
            ipPortSetSave.html(countdown+"秒后再点击保存"); 
            countdown--;  
          }
          timerIpPort = setTimeout(function() { 
            countDownTime() 
          },1000)
        }
        var url = '/index.php/Admin/StuCard/SthCardSet/edit';
        var data=  $("#stuCardfrom").serialize();
        dpost(url,data,function(data){
          if(g_loadingIndex > -1) dialog.closeLoding(g_loadingIndex);
          g_loadingIndex = -1;
          if( data.status == 1 ) {
            dialog.success(data.info,function(){ 
              countDownTime(); 
              layer.closeAll();
            });
          } else {
            dialog.error(data.info);
          }
        })
      }else{
        dialog.error('学生卡未绑定电话号码');
        }
      }else{
        dialog.error('请先绑定学生证设备！');
      }
    }else{
    dialog.error('请先选择学生！'); 
  }
}
// IP和端口保存设置 end

// 天线组保存设置 start
var timerRfid =null;
var rfidSetSave = $("#rfidSetSave");
rfidSetSave.attr('disabled', false);
function rfidSetSaveConfig(){
 if($(".stu_id_hide").val()!=""){
    if(stuImei.text()!="暂无数据"){
      if(phone.val()!=""){
        var rfid = "";
        rfid = $("#rfidInfo1").val() +","+$("#rfidInfo2").val() +","+$("#rfidInfo3").val();
        $("#rfid").val(rfid);
        $("#typeFalg").val("rfid");
        var re_rfidInfo1=/^\w+$/; // 天线进出ID验证正则
        var re_rfidInfo4 =/^[1-5]$/; // 天线序号ID验证正则
        var rfidInfo = $(".rfidInfo");
        var labelArr=[];
        for (var i = 0; i < rfidInfo.length; i++) {
          var labeltext=rfidInfo.eq(i).parents(".col-sm-10").prev("label").html().replace(/：/,"");
          labelArr.push(labeltext)
        }
        for (var i = 0; i < rfidInfo.length; i++) {
          // 天线序号ID设置验证
          if(!re_rfidInfo4.test(rfidInfo.eq(0).val())&&rfidInfo.eq(0).val()!="") {
            dialog.error('输入的1至5之间的任意数字！');
            return false;
          }
          // 天线进出ID设置验证
          if(!re_rfidInfo1.test(rfidInfo.eq(1).val())&&rfidInfo.eq(1).val()!="") {
            dialog.error('输入的'+labelArr[1]+'不正确！');
            return false;
          }
          if(!re_rfidInfo1.test(rfidInfo.eq(2).val())&&rfidInfo.eq(2).val()!="") {
            dialog.error('输入的'+labelArr[2]+'不正确！');
            return false;
          }
          // 表单为空设置验证
          if(rfidInfo.eq(i).val()==""){
            dialog.error('请输入'+labelArr[i]+'！');
            return false;
          }
        };
           
        var countdown = 50;
        function countDownTime(){  
          if (countdown==0) {  
            clearTimeout(timerRfid);
            rfidSetSave.attr('disabled', false);
            rfidSetSave.html('<span class="glyphicon glyphicon-save"></span>保存'); 
            countdown = 50;  
            return false;
          } else { 
            rfidSetSave.attr('disabled', true);   
            rfidSetSave.html(countdown+"秒后再点击保存"); 
            countdown--;  
          }
          timerRfid = setTimeout(function() { 
            countDownTime() 
          },1000)
        }
        var url = '/index.php/Admin/StuCard/SthCardSet/edit';
        var data=  $("#stuCardfrom").serialize();
        dpost(url,data,function(data){
          if(g_loadingIndex > -1) dialog.closeLoding(g_loadingIndex);
          g_loadingIndex = -1;
          if( data.status == 1 ) {
            dialog.success(data.info,function(){ 
              countDownTime(); 
              layer.closeAll();
            });
          } else {
            dialog.error(data.info);
          }
        })
      }else{
          dialog.error('学生卡未绑定电话号码');
        }
      }else{
        dialog.error('请先绑定学生证设备！');
      }
    }else{
    dialog.error('请先选择学生！'); 
  }
}
// 天线组保存设置 end


// 天线和GPS围栏保存设置 start
var timerRfidGps =null;
var rfidGpsSetSave = $("#rfidGpsSetSave");
rfidGpsSetSave.attr('disabled', false);
function rfidGpsSetSaveConfig(){
 if($(".stu_id_hide").val()!=""){
    if(stuImei.text()!="暂无数据"){
      if(phone.val()!=""){
        var rfidgps = "";
        rfidgps = $("#rfidGpsInfo1").val() +","+$("#rfidGpsInfo2").val() +","+$("#rfidGpsInfo3").val()+","+$("#rfidGpsInfo4").val()+","+$("#rfidGpsInfo5").val()+","+$("#rfidGpsInfo6").val();
        $("#rfidgps").val(rfidgps);
        $("#typeFalg").val("rfidgps");
        var re_rfidGpsInfo1=/^\w+$/; // 天线进出ID验证正则
        var re_rfidGpsInfo2 =/^\d+(\.\d+)?$/; // 经纬度验证正则
        var re_rfidGpsInfo3=/([5-9][0-9])|([1-9]\d{2,})/;// 中心位置半径验证正则
        var re_rfidGpsInfo4 =/^[1-5]$/; // 天线序号ID验证正则
        var rfidGpsInfo = $(".rfidGpsInfo");
        var labelArr=[];
        for (var i = 0; i < rfidGpsInfo.length; i++) {
          var labeltext=rfidGpsInfo.eq(i).parents(".col-sm-10").prev("label").html().replace(/：/,"");
          labelArr.push(labeltext)
        }
        for (var i = 0; i < rfidGpsInfo.length; i++) {
          
          // 天线序号ID设置验证
          if(!re_rfidGpsInfo4.test(rfidGpsInfo.eq(0).val())&&rfidGpsInfo.eq(0).val()!="") {
            dialog.error('请输入1至5之间的任意数字！');
            return false;
          }
          // 天线进出ID设置验证
          if(!re_rfidGpsInfo1.test(rfidGpsInfo.eq(1).val())&&rfidGpsInfo.eq(1).val()!="") {
            dialog.error('输入的'+labelArr[1]+'不正确！');
            return false;
          }
          if(!re_rfidGpsInfo1.test(rfidGpsInfo.eq(2).val())&&rfidGpsInfo.eq(2).val()!="") {
            dialog.error('输入的'+labelArr[2]+'不正确！');
            return false;
          }
          // 经纬度设置验证
          if(!re_rfidGpsInfo2.test(rfidGpsInfo.eq(3).val())&&rfidGpsInfo.eq(3).val()!="") {
            dialog.error('输入的'+labelArr[3]+'不正确！');
            return false;
          }
          if(!re_rfidGpsInfo2.test(rfidGpsInfo.eq(4).val())&&rfidGpsInfo.eq(4).val()!="") {
            dialog.error('输入的'+labelArr[4]+'不正确！');
            return false;
          }
          // 中心位置半径设置验证
          if(!re_rfidGpsInfo3.test(rfidGpsInfo.eq(5).val())&& rfidGpsInfo.eq(5).val()!="") {
            dialog.error('请输入大于等于50的半径值！');
            return false;
          }
          // 表单为空设置验证
          if(rfidGpsInfo.eq(i).val()==""){
            dialog.error('请输入'+labelArr[i]+'！');
            return false;
          }
        };
       
        var countdown = 50;
        function countDownTime(){  
          if (countdown==0) {  
            clearTimeout(timerRfid);
            rfidGpsSetSave.attr('disabled', false);
            rfidGpsSetSave.html('<span class="glyphicon glyphicon-save"></span>保存'); 
            countdown = 50;  
            return false;
          } else { 
            rfidGpsSetSave.attr('disabled', true);   
            rfidGpsSetSave.html(countdown+"秒后再点击保存"); 
            countdown--;  
          }
          timerRfidGps = setTimeout(function() { 
            countDownTime() 
          },1000)
        }
        var url = '/index.php/Admin/StuCard/SthCardSet/edit';
        var data=  $("#stuCardfrom").serialize();
        dpost(url,data,function(data){
          if(g_loadingIndex > -1) dialog.closeLoding(g_loadingIndex);
          g_loadingIndex = -1;
          if( data.status == 1 ) {
            dialog.success(data.info,function(){ 
              countDownTime(); 
              layer.closeAll();
            });
          } else {
            dialog.error(data.info);
          }
        })
      }else{
          dialog.error('学生卡未绑定电话号码');
        }
      }else{
        dialog.error('请先绑定学生证设备！');
      }
    }else{
    dialog.error('请先选择学生！'); 
  }
}
// 天线和GPS围栏保存设置 end


// 来电过滤开关功能设置 start
var timerCallfilter =null;
var callfilterSetSave = $("#callfilterSetSave");
callfilterSetSave.attr('disabled', false);
function callfilterSetSaveConfig(){
  if($(".stu_id_hide").val()!=""){
    if(stuImei.text()!="暂无数据"){
      if(phone.val()!=""){
        var callfilter = "";
        callfilter = $(".callfilterStatus").val()
        $("#callfilter").val(callfilter);
        $("#typeFalg").val("callfilter");
        var countdown = 50;
        function countDownTime(){  
          if (countdown==0) {  
            clearTimeout(timerCallfilter);
            callfilterSetSave.attr('disabled', false);
            callfilterSetSave.html('<span class="glyphicon glyphicon-save"></span>保存'); 
            countdown = 50;  
            return false;
          } else { 
            callfilterSetSave.attr('disabled', true);   
            callfilterSetSave.html(countdown+"秒后再点击保存"); 
            countdown--;  
          }
          timerCallfilter = setTimeout(function() { 
            countDownTime() 
          },1000)
        }
        var url = '/index.php/Admin/StuCard/SthCardSet/edit';
        var data=  $("#stuCardfrom").serialize();
        dpost(url,data,function(data){
          if(g_loadingIndex > -1) dialog.closeLoding(g_loadingIndex);
          g_loadingIndex = -1;
          if( data.status == 1 ) {
            dialog.success(data.info,function(){ 
              countDownTime(); 
              layer.closeAll();
            });
          } else {
            dialog.error(data.info);
          }
        })
      }else{
        dialog.error('学生卡未绑定电话号码');
        }
      }else{
        dialog.error('请先绑定学生证设备！');
      }
    }else{
    dialog.error('请先选择学生！'); 
  }
}
// 来电过滤开关功能设置 end

// 来电显示开关功能设置 start
var timerCalldisplay =null;
var calldisplaySetSave = $("#calldisplaySetSave");
calldisplaySetSave.attr('disabled', false);
function calldisplaySetSaveConfig(){
  if($(".stu_id_hide").val()!=""){
    if(stuImei.text()!="暂无数据"){
      if(phone.val()!=""){
        var calldisplay = "";
        calldisplay = $(".calldisplayStatus").val()
        $("#calldisplay").val(calldisplay);
        $("#typeFalg").val("calldisplay");
        var countdown = 50;
        function countDownTime(){  
          if (countdown==0) {  
            clearTimeout(timerCalldisplay);
            calldisplaySetSave.attr('disabled', false);
            calldisplaySetSave.html('<span class="glyphicon glyphicon-save"></span>保存'); 
            countdown = 50;  
            return false;
          } else { 
            calldisplaySetSave.attr('disabled', true);   
            calldisplaySetSave.html(countdown+"秒后再点击保存"); 
            countdown--;  
          }
          timerCalldisplay = setTimeout(function() { 
            countDownTime() 
          },1000)
        }
        var url = '/index.php/Admin/StuCard/SthCardSet/edit';
        var data=  $("#stuCardfrom").serialize();
        dpost(url,data,function(data){
          if(g_loadingIndex > -1) dialog.closeLoding(g_loadingIndex);
          g_loadingIndex = -1;
          if( data.status == 1 ) {
            dialog.success(data.info,function(){ 
              countDownTime(); 
              layer.closeAll();
            });
          } else {
            dialog.error(data.info);
          }
        })
      }else{
          dialog.error('学生卡未绑定电话号码');
        }
      }else{
        dialog.error('请先绑定学生证设备！');
      }
    }else{
    dialog.error('请先选择学生！'); 
  }
}
// 来电显示开关功能设置 end

// 无线考勤开关功能设置 start
var timerWirelessatte =null;
var wirelessatteSetSave = $("#wirelessatteSetSave");
wirelessatteSetSave.attr('disabled', false);
function wirelessatteSetSaveConfig(){
  if($(".stu_id_hide").val()!=""){
    if(stuImei.text()!="暂无数据"){
      if(phone.val()!=""){

        var wirelessatte = "";
        wirelessatte = $(".wirelessatteStatus").val()
        $("#wirelessatte").val(wirelessatte);
        $("#typeFalg").val("wirelessatte");
        var countdown = 50;
        function countDownTime(){  
          if (countdown==0) {  
            clearTimeout(timerWirelessatte);
            wirelessatteSetSave.attr('disabled', false);
            wirelessatteSetSave.html('<span class="glyphicon glyphicon-save"></span>保存'); 
            countdown = 50;  
            return false;
          } else { 
            wirelessatteSetSave.attr('disabled', true);   
            wirelessatteSetSave.html(countdown+"秒后再点击保存"); 
            countdown--;  
          }
          timerWirelessatte = setTimeout(function() { 
            countDownTime() 
          },1000)
        }
        var url = '/index.php/Admin/StuCard/SthCardSet/edit';
        var data=  $("#stuCardfrom").serialize();
        dpost(url,data,function(data){
          if(g_loadingIndex > -1) dialog.closeLoding(g_loadingIndex);
          g_loadingIndex = -1;
          if( data.status == 1 ) {
            dialog.success(data.info,function(){ 
              countDownTime(); 
              layer.closeAll();
            });
          } else {
            dialog.error(data.info);
          }
        })
      }else{
        dialog.error('学生卡未绑定电话号码');
        }
      }else{
        dialog.error('请先绑定学生证设备！');
      }
    }else{
    dialog.error('请先选择学生！'); 
  }
}
// 无线考勤开关功能设置 end

// 计步开关功能设置 start
var timerStepcounter =null;
var stepcounterSetSave = $("#stepcounterSetSave");
stepcounterSetSave.attr('disabled', false);
function stepcounterSetSaveConfig(){
  if($(".stu_id_hide").val()!=""){
    if(stuImei.text()!="暂无数据"){
      if(phone.val()!=""){
        var stepcounter = "";
        stepcounter = $(".stepcounterStatus").val()
        $("#stepcounter").val(stepcounter);
        $("#typeFalg").val("stepcounter");
        
        var countdown = 50;
        function countDownTime(){  
          if (countdown==0) {  
            clearTimeout(timerStepcounter);
            stepcounterSetSave.attr('disabled', false);
            stepcounterSetSave.html('<span class="glyphicon glyphicon-save"></span>保存'); 
            countdown = 50;  
            return false;
          } else { 
            stepcounterSetSave.attr('disabled', true);   
            stepcounterSetSave.html(countdown+"秒后再点击保存"); 
            countdown--;  
          }
          timerStepcounter = setTimeout(function() { 
            countDownTime() 
          },1000)
        }
        var url = '/index.php/Admin/StuCard/SthCardSet/edit';
        var data=  $("#stuCardfrom").serialize();
        dpost(url,data,function(data){
          if(g_loadingIndex > -1) dialog.closeLoding(g_loadingIndex);
          g_loadingIndex = -1;
          if( data.status == 1 ) {
            dialog.success(data.info,function(){ 
              countDownTime(); 
              layer.closeAll();
            });
          } else {
            dialog.error(data.info);
          }
        })
      }else{
          dialog.error('学生卡未绑定电话号码');
        }
      }else{
        dialog.error('请先绑定学生证设备！');
      }
    }else{
    dialog.error('请先选择学生！'); 
  }
}
// 计步开关功能设置 end

// 自动屏蔽功能设置 start
var timerInschool =null;
var inschoolSetSave = $("#inschoolSetSave");
inschoolSetSave.attr('disabled', false);
function inschoolSetSaveConfig(){
  if($(".stu_id_hide").val()!=""){
    if(stuImei.text()!="暂无数据"){
      if(phone.val()!=""){
        var inSchoolValue = "";
        $.each($('input[name="inschool"]:checked'),function(i,v){
          inSchoolValue = $(v).val();
        }); 
        $("#inschool").val(inSchoolValue);
        $("#typeFalg").val("inschool");
        var countdown = 50;
        function countDownTime(){  
          if (countdown==0) {  
            clearTimeout(timerInschool);
            inschoolSetSave.attr('disabled', false);
            inschoolSetSave.html('<span class="glyphicon glyphicon-save"></span>保存'); 
            countdown = 50;  
            return false;
          } else { 
            inschoolSetSave.attr('disabled', true);   
            inschoolSetSave.html(countdown+"秒后再点击保存"); 
            countdown--;  
          }
          timerInschool = setTimeout(function() { 
            countDownTime() 
          },1000)
        }
        var url = '/index.php/Admin/StuCard/SthCardSet/edit';
        var data=  $("#stuCardfrom").serialize();
        dpost(url,data,function(data){
          if(g_loadingIndex > -1) dialog.closeLoding(g_loadingIndex);
          g_loadingIndex = -1;
          if( data.status == 1 ) {
            dialog.success(data.info,function(){ 
              countDownTime(); 
              layer.closeAll();
            });
          } else {
            dialog.error(data.info);
          }
        })

     }else{
          dialog.error('学生卡未绑定电话号码');
        }
      }else{
        dialog.error('请先绑定学生证设备！');
      }
    }else{
    dialog.error('请先选择学生！'); 
  }
}
// 自动屏蔽功能设置 end



// 重启终端设置
function restartSetConfig(){
  if($(".stu_id_hide").val()!=""){
    if(stuImei.text()!="暂无数据"){
      if(phone.val()!=""){
        var url = g_config.host + "/index.php/Admin/StuCard/SthCardSet/get_restart_config";
        var data   = {};
        var imei_v=imei.val();
        data.imei = imei_v;
        dialog.confirm('您确定要重启终端设置吗？',function(){fget(url,data,restartSetCallback);});
       }else{
          dialog.error('学生卡未绑定电话号码');
        }
      }else{
        dialog.error('请先绑定学生证设备！');
      }
    }else{
    dialog.error('请先选择学生！'); 
  }
}

// 重启终端设置回调函数
function restartSetCallback(data) {
  if(g_loadingIndex > -1) dialog.closeLoding(g_loadingIndex);
  g_loadingIndex = -1;
  if (data.status == 1){
    dialog.success1(data.info);
  }else if(data.status == 0){
    dialog.error(data.info);
  }
}

// 恢复出厂设置
function resetSetSaveConfig(){
  if($(".stu_id_hide").val()!=""){
    if(stuImei.text()!="暂无数据"){
      if(phone.val()!=""){
        var url = g_config.host + "/index.php/Admin/StuCard/SthCardSet/get_reset_config";
        var data   = {};
        var imei_v=imei.val();
        data.imei = imei_v;
        dialog.confirm('您确定要恢复出厂设置吗？',function(){fget(url,data,resetSetSaveCallback);});
      }else{
          dialog.error('学生卡未绑定电话号码');
        }
      }else{
        dialog.error('请先绑定学生证设备！');
      }
    }else{
    dialog.error('请先选择学生！'); 
  }
}

// 恢复出厂设置回调函数
function resetSetSaveCallback(data) {
  if(g_loadingIndex > -1) dialog.closeLoding(g_loadingIndex);
  g_loadingIndex = -1;
  if (data.status == 1){
    dialog.success1(data.info);
  }else if(data.status == 0){
    dialog.error(data.info);
  }
}

//单选
$('input[type="checkbox"].flat-green, input[type="radio"].flat-green').iCheck({
  checkboxClass: 'icheckbox_flat-green',
  radioClass: 'iradio_flat-green'
});  

//时间段
$('.class-hour').datetimepicker({
  datepicker:false,
  format:'H:i'
});

// 左侧文件树搜索
$('#searchNodeBtn').click(function() {
  searchNodeAll('treeDemo',$('#searchNodeVal'));
  leftTreeScroll();
});
$('#searchNodeVal').on('input', function() {
  searchNodeAll('treeDemo',$('#searchNodeVal'));
  leftTreeScroll();
});
</script>
</body>
</html>