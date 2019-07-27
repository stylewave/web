<?php /*a:2:{s:55:"E:\data\newsyun/application/admin/view\article\add.html";i:1562983035;s:56:"E:\data\newsyun/application/admin/view\layout\index.html";i:1528905600;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>后台管理系统</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="/public/static/admin/adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/public/static/admin/adminlte/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="/public/static/admin/adminlte/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/public/static/admin/adminlte/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="/public/static/admin/adminlte/dist/css/skins/_all-skins.min.css">
    <!--[if lt IE 9]>
    <script src="/public/static/admin/adminlte/html5shiv.min.js"></script>
    <script src="/public/static/admin/adminlte/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery 3 -->
    <script src="/public/static/admin/adminlte/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- jquery 1.11.3 -->
    <!--<script src="/public/static/public/jquery.js"></script>-->
    <!-- Google Font -->
    <link rel="stylesheet" href="/public/static/admin/adminlte/googleapis.css">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition <?php echo htmlentities($userinfo_auto['skin']); ?> sidebar-mini">
<div class="wrapper">
    <!-- Main Header -->
    <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo Url::build('admin/Index/index'); ?>" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini">后台</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg">后台管理系统</span>
        </a>
        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->
                    <li class="dropdown messages-menu">
                        <!-- Menu toggle button -->
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-mail-reply-all"></i> 其他操作
                            <span class="label label-success"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <ul class="menu">
                                    <li><a href="<?php echo Url::build('/'); ?>" target="_blank"><p>网站首页</p></a></li>
                                    <li><a href="<?php echo Url::build('admin/System/admin'); ?>"><p>清除缓存</p></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!-- /.messages-menu -->
                    <!-- Notifications Menu -->
                    <li class="dropdown notifications-menu">
                        <!-- Menu toggle button -->
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-user-plus"></i> <?php echo htmlentities($userinfo_auto['nickname']); ?>
                            <span class="label label-warning"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">登录信息</li>
                            <li>
                                <ul class="menu">
                                    <li>
                                        <a href="javascript:void(0);">
                                             上次登录时间：<?php echo htmlentities(date('Y-m-d H:i:s',!is_numeric($userinfo_auto['lastlogintime'])? strtotime($userinfo_auto['lastlogintime']) : $userinfo_auto['lastlogintime'])); ?><br/>IP：<?php echo htmlentities($userinfo_auto['lastloginip']); ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            本次登录时间：<?php echo htmlentities(date('Y-m-d H:i:s',!is_numeric($userinfo_auto['logintime'])? strtotime($userinfo_auto['logintime']) : $userinfo_auto['logintime'])); ?><br/>IP：<?php echo htmlentities($userinfo_auto['loginip']); ?>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer"><a href="<?php echo Url::build('admin/Index/loginout'); ?>">退出登录</a></li>
                        </ul>
                    </li>
                    <!-- Tasks Menu -->
                    <li class="dropdown tasks-menu">
                        <!-- Menu Toggle Button -->
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-adjust"></i>
                            <span class="label label-danger">换主题</span>
                        </a>
                        <ul class="dropdown-menu" style="height: 310px;">
                            <li class="header">点击主题进行切换</li>
                            <li>
                                <!-- Inner menu: contains the tasks -->
                                <ul class="menu" style="overflow: inherit;" >
                                    <!-- Task item -->
                                    <li>
                                        <a href="javascript:void(0);" onclick="qiehuanzhuti('skin-blue');">
                                            <!-- Task title and progress text -->
                                            <h3>蓝色</h3>
                                            <!-- The progress bar -->
                                            <div class="progress xs" style="height:auto">
                                                <!-- Change the css width attribute to simulate progress -->
                                                <div class="progress-bar progress-bar-aqua" style="width:100%;height: 25px;" role="progressbar"
                                                     aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">100% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" onclick="qiehuanzhuti('skin-yellow');">
                                            <!-- Task title and progress text -->
                                            <h3>黄色</h3>
                                            <!-- The progress bar -->
                                            <div class="progress xs" style="height:auto">
                                                <!-- Change the css width attribute to simulate progress -->
                                                <div class="progress-bar progress-bar-aqua" style="width:100%;background-color:yellow;height: 25px;" role="progressbar"
                                                     aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" >
                                                    <span class="sr-only">100% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" onclick="qiehuanzhuti('skin-red');">
                                            <!-- Task title and progress text -->
                                            <h3>红色</h3>
                                            <!-- The progress bar -->
                                            <div class="progress xs" style="height:auto">
                                                <!-- Change the css width attribute to simulate progress -->
                                                <div class="progress-bar progress-bar-aqua" style="width:100%;background-color:red;height: 25px;" role="progressbar"
                                                     aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">100% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" onclick="qiehuanzhuti('skin-purple');">
                                            <!-- Task title and progress text -->
                                            <h3>紫色</h3>
                                            <!-- The progress bar -->
                                            <div class="progress xs" style="height:auto">
                                                <!-- Change the css width attribute to simulate progress -->
                                                <div class="progress-bar progress-bar-aqua" style="width:100%;background-color:purple;height: 25px;" role="progressbar"
                                                     aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">100% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" onclick="qiehuanzhuti('skin-green');">
                                            <!-- Task title and progress text -->
                                            <h3>绿色</h3>
                                            <!-- The progress bar -->
                                            <div class="progress xs" style="height:auto">
                                                <!-- Change the css width attribute to simulate progress -->
                                                <div class="progress-bar progress-bar-aqua" style="width:100%;background-color:green;height: 25px;" role="progressbar"
                                                     aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">100% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar Menu -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">后台管理栏目</li>
                <!-- Optionally, you can add icons to the links -->
                <li class="<?php if($controname == 'Index'): ?>active menu-open<?php endif; ?>"><a href="<?php echo Url::build('admin/Index/index'); ?>"><i class="fa fa-bank"></i> <span>后台首页</span></a></li>
               <?php foreach($returnarr as $onekeys=>$htmenu): ?>
                    <li class="treeview <?php if($onekeys == $controname): ?>active menu-open<?php endif; ?>">
                        <a href="javascript:void(0);"><i class="fa  <?php echo htmlentities($htmenu['inco']); ?>"></i> <span><?php echo htmlentities($htmenu['title']); ?></span>
                            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                        </a>
                        <ul class="treeview-menu">
                            <?php foreach($htmenu['menu'] as $twokeys=>$htme): if(empty($htme['menu'])): ?>
                                    <li class=" <?php if(strtolower($twokeys) == $actionname): ?>active menu-open<?php endif; ?>"><a href="<?php echo htmlentities($htme['url']); ?>"><i class="fa  <?php echo htmlentities($htme['inco']); ?>"></i><?php echo htmlentities($htme['title']); ?></a></li>
                                <?php else: ?>
                                   <li class="treeview <?php 
                                   foreach($htme['menu'] as $threekeys=>$htu){
                                      if (strtolower($threekeys) == $actionname)
                                      {
                                        echo 'active menu-open';break;
                                      }
                                   }
                                       ?>">
                                        <a href="javascript:void(0);">
                                            <i class="fa <?php echo htmlentities($htme['inco']); ?>"></i> <span><?php echo htmlentities($htme['title']); ?></span>
                                            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                                        </a>
                                        <ul class="treeview-menu">
                                            <?php foreach($htme['menu'] as $threekeys=>$htu): ?>
                                                 <li class=" <?php if(strtolower($threekeys) == $actionname): ?>active<?php endif; ?>"><a href="<?php echo htmlentities($htu['url']); ?>"><i class="fa   <?php echo htmlentities($htu['inco']); ?>"></i> <?php echo htmlentities($htu['title']); ?></a></li>
                                            <?php endforeach; ?>
                                        </ul>
                                   </li>
                                <?php endif; endforeach; ?>
                        </ul>
                    </li>
                <?php endforeach; ?>
            </ul>
            <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <ol class="breadcrumb" style="float: left;position: static;padding-left: 15px;">
                <li><a href="<?php echo Url::build('admin/Index/index'); ?>"><i class="fa  fa-home"></i> 后台首页</a></li>
                <?php foreach($dqlujing as $weizhi): ?>
                <li class="<?php echo htmlentities($weizhi['class']); ?>"><a href="<?php echo htmlentities($weizhi['url']); ?>"><?php echo htmlentities($weizhi['title']); ?></a></li>
                <?php endforeach; ?>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">
            <link rel="stylesheet" href="/public/static/admin/adminlte/bower_components/select2/css/select2.min.css">
<script charset="utf-8" src="/public/static/kin/kindeditor-all-min.js"></script>
<script charset="utf-8" src="/public/static/kin/lang/zh-CN.js"></script>

<!-- date-range-picker -->
<script src="/public/static/admin/adminlte/bower_components/moment/min/moment.min.js"></script>
<script src="/public/static/admin/adminlte/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="/public/static/admin/adminlte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="/public/static/admin/adminlte/bower_components/moment/locale/zh-cn.js"></script>
<!-- daterange picker -->
<link rel="stylesheet" href="/public/static/admin/adminlte/bower_components/bootstrap-daterangepicker/daterangepicker.css">
<!-- bootstrap datepicker -->
<link rel="stylesheet" href="/public/static/admin/adminlte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">

<script>
    // 关闭过滤模式，保留所有标签
//    KindEditor.options.filterMode = false;
    KindEditor.ready(function(K) {
        window.editor = K.create('#editor_id',{
            uploadJson :"<?php echo Url::build('admin/Article/add'); ?>",//自己的上传路
            extraFileUploadParams:{
                'FLASHPHPSESSID' : "<?php echo session_id();?>"
            }
        });
    });
</script>
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="nav-tabs-custom" style="margin-top: 20px;">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#fa-icons-server" data-toggle="tab">文章基本信息</a></li>
          <li class=""><a href="#fa-icons-content" data-toggle="tab">文章内容编辑</a></li>
        </ul>
        <form action="<?php echo Url::build('admin/Article/add');; ?>" enctype="multipart/form-data" method="post" name="qxform" id="qxform">
        <div class="tab-content">
          <!-- Font Awesome Icons -->
          <div class="tab-pane active" style="padding-left: 20px;" id="fa-icons-server">
              <input type="hidden" name="__token__" value="<?php echo htmlentities(app('request')->token()); ?>" />
              <input type="hidden" name="id" id="infoid" value="<?php echo htmlentities($info['id']); ?>" />
            <section id="new">
              <!--<h4 class="page-header"><?php if(isset($info) && !empty($info)): ?>修改<?php else: ?>添加<?php endif; ?>文章</h4>-->
                <div><br />
                    上传大小限制：<?php echo ini_get('upload_max_filesize'); ?>
                </div>
              <div class="row fontawesome-icon-list">
                  <div class="col-md-3 col-sm-4" >
                      <div class="form-group">
                          选择分类：<select class="form-control select2" style="width: 50%;" name="cateid" id="cateid" onchange="getValue()">
                          <option selected="selected" value="0">请选择分类</option>
                          <?php foreach($catelist as $rbac): ?>
                          <option value="<?php echo htmlentities($rbac['id']); ?>" <?php if($rbac['id'] == $info['cateid']): ?>selected<?php endif; ?>><?php if($rbac['dj'] > 0)  {echo str_repeat(" ---- ",$rbac['dj'])." ";} ?><?php echo htmlentities($rbac['title']); ?></option>
                          <?php endforeach; ?>
                      </select>
                          <span class="icon icon-cateid margin-small" ></span><span style="color: red">*</span>
                      </div>
                  </div>
                  <?php if($info['cateid'] == 80): ?>
                  <div class="col-md-3 col-sm-4"  >
                    <div class="form-group">
                        部门选择：<select class="form-control select2" style="width: 50%;" name="company" id="company" >
                      
                    
                        <option <?php if($info['company'] == 1): ?>selected<?php endif; ?> value="1">销售部</option>
                        <option <?php if($info['company'] == 2): ?>selected<?php endif; ?> value="2">技术部</option>
                        <option <?php if($info['company'] == 3): ?>selected<?php endif; ?> value="3">设计部</option>
                        <option <?php if($info['company'] == 4): ?>selected<?php endif; ?> value="4">客服部</option>
                     
                    </select>
                        <span class="icon icon-cateid margin-small" ></span><span style="color: red">*</span>
                    </div>
                </div>
                  <?php else: ?>
                  <div class="col-md-3 col-sm-4" id="company_a" style="display: none">
                        <div class="form-group">
                            部门选择：<select class="form-control select2" style="width: 50%;" name="company" id="company" >
                            <!-- <option selected="selected" value="0">请选择分类</option> -->
                        
                            <option value="1">销售部</option>
                            <option value="2">技术部</option>
                            <option value="3">设计部</option>
                            <option value="4">客服部</option>
                         
                        </select>
                            <span class="icon icon-cateid margin-small" ></span><span style="color: red">*</span>
                        </div>
                    </div>

                  
                   <?php endif; ?> 
                
                <div class="col-md-3 col-sm-4" >
                  标题标题：<input type="text" style="color: #444444;width: 80%" id="title" name="title" value="<?php echo htmlentities($info['title']); ?>"> <span style="color: red">*</span><span class="icon icon-title margin-small" ></span>
                </div>

                <?php if($info['cateid'] == 93): ?>
                <div class="col-md-3 col-sm-4" >
                    显示标题：<input type="text" style="color: #444444;width: 80%" id="seotitle" name="seotitle" value="<?php echo htmlentities($info['seotitle']); ?>"> <span class="icon icon-stitle margin-small" ></span>
                </div>
                <?php else: ?>

                <div class="col-md-3 col-sm-4" id="seotitle_a" style="display: none">
                    显示标题：<input type="text" style="color: #444444;width: 80%" id="seotitle" name="seotitle" value="<?php echo htmlentities($info['seotitle']); ?>"> <span class="icon icon-stitle margin-small" ></span>
                </div>

                <?php endif; ?>

                <div class="col-md-3 col-sm-4" >
                    文章关键词：<input type="text" style="color: #444444;width: 80%" id="stitle" name="stitle" value="<?php echo htmlentities($info['stitle']); ?>"> <span class="icon icon-stitle margin-small" ></span>
                </div>
                <?php if($info['cateid'] == 93): ?>
                <div class="col-md-3 col-sm-4" >
                    关键词地址：<input type="text" style="color: #444444;width: 80%" id="url" name="url" value="<?php echo htmlentities($info['url']); ?>"> <span class="icon icon-stitle margin-small" ></span>
                </div>
                <?php else: ?>
            

                <div class="col-md-3 col-sm-4" id="tag_a" style="display: none">
                    关键词地址：<input type="text" style="color: #444444;width: 80%" id="url" name="url" value="<?php echo htmlentities($info['url']); ?>"> <span class="icon icon-stitle margin-small" ></span>
                </div>


                <?php endif; if($info['cateid'] == 93): ?>
                <div class="col-md-3 col-sm-4" >
                    地区：<input type="text" style="color: #444444;width: 60%" id="area" name="area" value="<?php echo htmlentities($info['area']); ?>"> <span class="icon icon-stitle margin-small" >比如：上海</span>
                </div>
                <?php else: ?>

                <div class="col-md-3 col-sm-4" id="area_a" style="display: none">
                    地区：<input type="text" style="color: #444444;width: 60%" id="area" name="area" value="<?php echo htmlentities($info['area']); ?>"> <span class="icon icon-stitle margin-small" >比如：上海</span>
                </div>

                <?php endif; if($info['cateid'] != 93): ?>
                <div class="col-md-3 col-sm-4" id="tag">
                    <div class="form-group">
                        关键词地址选择：<select class="form-control select2" style="width: 50%;" name="seourl">
                            <option value="">请选择地址</option>
                     <?php foreach($tagdata as $v): ?>
                        <option value="<?php echo htmlentities($v['url']); ?>" <?php if($info['seourl'] == $v['url']): ?>selected<?php endif; ?>><?php echo htmlentities($v['title']); ?></option>
                     <?php endforeach; ?>  
                    </select>
                    <span>非必选</span>
                    </div>
                </div>
                <?php endif; if($info['cateid'] != 93): ?>
                <div class="col-md-3 col-sm-4" id="tag">
                    <div class="form-group">
                        城市选择：<select class="form-control select2" style="width: 50%;" name="cityid">
                            <option value="">请选择城市</option>
                     <?php foreach($citydata as $v): ?>
                        <option value="<?php echo htmlentities($v['id']); ?>" <?php if($info['cityid'] == $v['id']): ?>selected<?php endif; ?>><?php echo htmlentities($v['title']); ?></option>
                     <?php endforeach; ?>  
                    </select>
                    <span>非必选</span>
                    </div>
                </div>
                <?php endif; ?>

                    <!--团队介绍-->
                  <?php if($info['cateid'] == 58): ?>
                  <div class="col-md-3 col-sm-4">
                      部门：<input type="text" style="color: #444444;width: 80%" id="department" name="department" value="<?php echo htmlentities($info['department']); ?>"> <span style="color: red">*</span><span class="icon icon-department margin-small" ></span>
                  </div>
                  <div class="col-md-3 col-sm-4">
                      部门（英文）：<input type="text" style="color: #444444;width: 80%" id="departments" name="departments" value="<?php echo htmlentities($info['departments']); ?>"> <span class="icon icon-departments margin-small" ></span>
                  </div>
                  <?php else: ?>
                  <div class="col-md-3 col-sm-4" id="department_a" style="display: none">
                      部门：<input type="text" style="color: #444444;width: 80%" id="department" name="department" value="<?php echo htmlentities($info['department']); ?>"> <span style="color: red">*</span><span class="icon icon-department margin-small" ></span>
                  </div>
                  <div class="col-md-3 col-sm-4" id="department_b" style="display: none">
                      部门（英文）：<input type="text" style="color: #444444;width: 80%" id="departments" name="departments" value="<?php echo htmlentities($info['departments']); ?>"> <span class="icon icon-departments margin-small" ></span>
                  </div>
                  <?php endif; ?>
                  <!--团队介绍-->

                  <!--案例中心-->
               
                  <!--案例中心-->
                <div class="col-md-3 col-sm-4" >
                    封面图片：<span id="selectpic" style="cursor:pointer;color:#1E88C7;background: #D0EEFF;border-radius: 5px;padding:5px 22px;">选择图片</span>
                    <div style="margin-left: 63px;" id="preview"></div>
                    <input id="upload" name="img" accept="image/*" type="file" style="display: none"/>
                </div>
                  <?php if(!empty($info['img'])): ?>
                  <div class="col-md-3 col-sm-4" >
                      原有图片：<a href="<?php echo htmlentities($info['img']); ?>" target="_blank"><img src="<?php echo htmlentities($info['img']); ?>" style="width: 200px;height:132px"></a>
                  </div>
                  <?php endif; ?>
                  <div class="col-md-3 col-sm-4">
                      文章描述：<textarea rows="3" style="width: 100%" name="desc"><?php echo htmlentities($info['desc']); ?></textarea>
                  </div>
                <div class="col-md-3 col-sm-4" >
                  文章排序：<input type="text" style="color: #444444;width: 20%" id="orders" name="orders" value="<?php echo htmlentities($info['orders']); ?>"> <span style="color: red">>=0，越小越前，前后台都有效，默认0</span><span class="icon icon-order margin-small" ></span>
                </div>
                  <div class="col-md-3 col-sm-4" >
                      浏览次数：<input type="text" style="color: #444444;width: 20%" id="click" name="click" value="<?php echo htmlentities($info['click']); ?>"><span class="icon icon-click margin-small" ></span>
                  </div>
                  <div class="col-md-3 col-sm-4">
                      发布时间：
                      <input name="publishtime" id="daterange-btn" value="<?php echo htmlentities((isset($info['publishtime']) && ($info['publishtime'] !== '')?$info['publishtime']:date('Y-m-d'))); ?>" type="text" style="width:160px;text-indent:40px"/>
                      <span style="border-radius:0;border-color:#d2d6de;background-color:#fff;padding:7px 10px;position:relative;border-right:1px solid #cfcfcf; bottom:0px;right:162px;">
						<i class="fa fa-calendar" style="padding-left:0"></i>
					  </span>
                  </div>
                  <div class="col-md-3 col-sm-4" style="width: 80%">
                      <label>是否推荐：</label>
                      <div class="onoff">
                          <label for="switch1" class="cb-enable <?php if($info['ist'] == 1): ?>selected<?php endif; ?>">推荐</label>
                          <label for="switch0" class="cb-disable <?php if($info['ist'] == 0): ?>selected<?php endif; ?>">不推荐</label>
                          <input type="radio" id="switch1" name="ist" value="1" checked="<?php if($info['ist'] == 1): ?>checked<?php endif; ?>">
                          <input type="radio" id="switch0" name="ist" value="0" <?php if($info['ist'] == 0): ?>checked="checked"<?php endif; ?>>
                      </div>
                  </label>
                  </div>
              </div>
            </section>
          </div>
          <!-- /#fa-icons -->
          <div class="tab-pane" id="fa-icons-content">
              <!--<h4 class="page-header"><?php if(isset($info) && !empty($info)): ?>修改<?php else: ?>添加<?php endif; ?>文章</h4>-->
              <div  style="padding-left: 20px;"><br />
                  上传大小限制：<?php echo ini_get('upload_max_filesize'); ?>
                  <br/>
                  如果多图上传不显示，请在当前浏览器访问 <a href="http://get.adobe.com/cn/flashplayer/" target="_blank">http://get.adobe.com/cn/flashplayer/</a>，按提示操作更新，安装完成后关闭浏览器重新打开，并且在提示中选择允许
              </div>
            <div style="width: 100%; padding: 20px;">
                  <textarea id="editor_id" name="ms" style="width:100%;height:600px;"><?php echo htmlentities($info['ms']); ?></textarea>
            </div>
          </div>
          <button type="button" class="btn btn-primary" style="margin-top: 10px;margin-bottom:20px;margin-left: 100px;" onclick="qxsubmit();">提交</button><span class="icon icon-ms margin-small" ></span>
        </div>
        </form>
      </div>
    </div>
  </div>
    <style>
        .col-sm-4{width: 60%;line-height: 30px;margin-top: 15px;}
        .col-sm-4 input,.col-sm-4 textarea{text-indent: 10px}
        .department_a,.department_b,.en_title_a,.model_a,.producer_a,.producer_b,.deesigner_a,.deesigner_b,.en_desc{display: block !important;}
    </style>
  <script type="text/javascript" src="/public/static/layer/layer.js"></script>
  <script type="text/javascript" src="/public/static/public/common.js"></script>
  <script src="/public/static/admin/adminlte/bower_components/select2/js/select2.min.js"></script>
  <script src="/public/static/admin/adminlte/bower_components/select2/js/i18n/zh-CN.js"></script>
<script>
    function qxsubmit() {
        if($('#title').val() == '') {
            tips('请填写标题！','.icon-title','title');
            return false;
        }
//        var file=$("#upload");
//        if($.trim(file.val())==''){
//            tips('请上传封面图！','.icon-cateid','cateid');
//            return false;
//        }

        if($('#cateid').val() <1) {
            tips('请选择分类！','.icon-cateid','cateid');
            return false;
        }

        editor.sync();
        var html = $('#editor_id').val(); // jQuery
        // if(html =='') {
        //     tips('请填写文章内容！','.icon-ms','editor_id');
        //     return false;
        // }
        document.qxform.submit();
    }

    $(function() {
        $('.select2').select2({
            language:'zh-CN'
        });
        $("#selectpic").click(function () {
            $("#upload").click();
            $("#upload").on("change",function(){
                previewImage(this,'preview',200,200);
            });
        });
    });
</script>
<!--时间、日期js-->
<script type="text/javascript">
    $(document).ready(function() {
        moment.locale('zh-cn');
        $('#daterange-btn').daterangepicker({
            format:"YYYY-MM-DD",
            singleDatePicker: true,
            showDropdowns: true,
            minDate:'2000-01-01',
            maxDate:'2050-01-01',
            locale : {
                applyLabel : '确定',
                cancelLabel : '取消',
                fromLabel : '起始时间',
                toLabel : '结束时间',
                customRangeLabel : '自定义',
                daysOfWeek : [ '日', '一', '二', '三', '四', '五', '六' ],
                monthNames : [ '一月', '二月', '三月', '四月', '五月', '六月','七月', '八月', '九月', '十月', '十一月', '十二月' ],
                firstDay : 1
            }
        });
    });
    function getValue(){
        if($("#cateid option:selected").text() == ' ----  ----  团队介绍'){
            $('#department_a').addClass('department_a');
            $('#department_b').addClass('department_b');
        }
        if($("#cateid option:selected").text() == '案例中心'){
            $('#en_title_a').addClass('en_title_a');
            $('#model_a').addClass('model_a');
            $('#producer_a').addClass('producer_a');
            $('#producer_b').addClass('producer_b');
            $('#deesigner_a').addClass('deesigner_a');
            $('#en_desc').addClass('en_desc');
            $('#deesigner_b').addClass('deesigner_b');
        }

     var Cts = $("#cateid option:selected").text();
    if(Cts.indexOf("公司团队") > 0 ){
        $('#company_a').css('display','block');
    }

    if(Cts.indexOf("seo标签") > 0 ){
        $('#seotitle_a').css('display','block');
        $('#tag_a').css('display','block');
        $('#tag').css('display','none');
        $('#area_a').css('display','block');
        
    }else{
        $('#seotitle_a').css('display','none');
        $('#tag_a').css('display','none');
        // $("div").remove("#tag_a div");
        $('#tag').css('display','block');
        $('#area_a').css('display','none');
    }


    }

    
</script>
</section>





        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
</div>
<!-- Bootstrap 3.3.7 -->
<script src="/public/static/admin/adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="/public/static/admin/adminlte/dist/js/adminlte.min.js"></script>
</body>
</html>
<script>
    function qiehuanzhuti(value) {
        try{
            var is = false;
            $.ajax({
                type: 'POST',
                async: false,
                url: "<?php echo Url::build('admin/Index/setSkin'); ?>",
                data: {skin:value},
                success: function (data) {
                    if (data.code == 1) {

                    } else {
                        is = true;
                    }
                    rmsg = data.msg;
                }
            });
            if(is) {
                throw rmsg;
            }
            var skinsall = ['skin-blue','skin-purple','skin-yellow','skin-red','skin-green'];
            for(var i=0;i<skinsall.length;i++) {
                $('body').removeClass(skinsall[i]);
            }
            $('body').addClass(value);
        }catch (e){
            alert(e);
            return false;
        }
    }
</script>
<style>
    body #think_page_trace_open img{display: none}
    .col-sm-6{padding-bottom: 20px;}
    .col-md-3{line-height: 30px !important;}
    .form-group{margin-bottom: 0;}
    .select2-container--default .select2-selection--single .select2-selection__rendered{line-height: 24px}
    .btn{padding:6px 30px !important;}
    table tr td{vertical-align: middle !important;text-align: center;}
    table tr th{text-align: center;}
    .fa-ban{color:#F61B1B}
    /*是否显示*/
    .onoff {display: -moz-box;width: 50%; font-size: 0; position: relative; overflow: hidden; padding-top: 5px; }
    .onoff label { vertical-align: top; display: inline-block; *display: inline;*zoom: 1;cursor: pointer; width: auto !important;}
    .onoff input[type="radio"] { position: absolute; top: 0; left: -999px; }
    .onoff .cb-enable,.onoff .cb-disable { color: #777; font-size: 12px; line-height: 23px; background-color: #ECF0F1; height: 25px; padding: 1px 12px; border-style: solid; border-color: #BEC3C7; }
    .onoff .cb-enable { border-width: 1px 0 1px 1px; border-radius: 4px 0 0 4px; }
    .onoff .cb-disable { border-width: 1px 1px 1px 0; border-radius: 0 4px 4px 0; }
    .onoff .cb-disable.selected { color: #FFF; background-color: #96A6A6; border-color: #808B8D; }
    .onoff .cb-enable.selected { color: #FFF; background-color: #1BBC9D; border-color: #16A086 }
</style>
<script>
    $("div.onoff label").click(function (){
        $(this).addClass("selected").siblings("label").removeClass("selected");
    });
</script>