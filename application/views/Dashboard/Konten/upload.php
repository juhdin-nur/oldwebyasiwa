<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <title><?php echo $title;?></title>

        <meta name="description" content="overview &amp; stats" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

        <!-- bootstrap & fontawesome -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?php echo base_url();?>assets/font-awesome/4.2.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/new-font-awesome.min.css" />


        <!-- notifications -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/lobibox.css" />        

        <!-- date time picker -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-datetimepicker.min.css" />
        <!-- chosen -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/chosen.min.css" />


        <!-- page specific plugin styles -->

        <!-- text fonts -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/fonts.googleapis.com.css" />
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/colorbox.min.css" />

        <!-- ace styles -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace-skins.min.css" />

        <!--[if lte IE 9]>
            <link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
        <![endif]-->

        <!--[if lte IE 9]>
          <link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace-ie.min.css" />
        <![endif]-->

        <!-- inline styles related to this page -->

        <!-- ace settings handler -->
        <script src="<?php echo base_url();?>assets/js/ace-extra.min.js"></script>

        <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->
        <!-- chosen -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/chosen.min.css" />
        <!-- end chosen -->

        <!--[if lte IE 8]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->

        <!-- fancybox -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery.fancybox.css?v=2.1.5" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery.fancybox-buttons.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery.fancybox-thumbs.css" />

		<!-- albumize -->
		<link href="<?php echo base_url();?>assets/css/albumize.css" rel="stylesheet">
		<!-- dropzone -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/dropzone.min.css" />

    </head>

    <body class="<?php $this->load->helper('cookie');echo get_cookie('ace_skin');?>">

<div id="navbar" class="navbar navbar-default">
    <script type="text/javascript">
        try{ace.settings.check('navbar' , 'fixed')}catch(e){}
    </script>

    <div class="navbar-container" id="navbar-container">
        <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
            <span class="sr-only">Toggle sidebar</span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>
        </button>

        <div class="navbar-header pull-left">
            <a href="<?php echo base_url('dashboard');?>" class="navbar-brand">
                <small>
                    <i class="fa fa-leaf"></i>
                    YASIWA
                </small>
            </a>
        </div>

        <div class="navbar-buttons navbar-header pull-right" role="navigation">
            <ul class="nav ace-nav">
                <!--<li class="grey">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="ace-icon fa fa-tasks"></i>
                        <span class="badge badge-grey">4</span>
                    </a>

                    <ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
                        <li class="dropdown-header">
                            <i class="ace-icon fa fa-check"></i>
                            4 Tasks to complete
                        </li>

                        <li class="dropdown-content">
                            <ul class="dropdown-menu dropdown-navbar">
                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-left">Software Update</span>
                                            <span class="pull-right">65%</span>
                                        </div>

                                        <div class="progress progress-mini">
                                            <div style="width:65%" class="progress-bar"></div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-left">Hardware Upgrade</span>
                                            <span class="pull-right">35%</span>
                                        </div>

                                        <div class="progress progress-mini">
                                            <div style="width:35%" class="progress-bar progress-bar-danger"></div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-left">Unit Testing</span>
                                            <span class="pull-right">15%</span>
                                        </div>

                                        <div class="progress progress-mini">
                                            <div style="width:15%" class="progress-bar progress-bar-warning"></div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-left">Bug Fixes</span>
                                            <span class="pull-right">90%</span>
                                        </div>

                                        <div class="progress progress-mini progress-striped active">
                                            <div style="width:90%" class="progress-bar progress-bar-success"></div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="dropdown-footer">
                            <a href="#">
                                See tasks with details
                                <i class="ace-icon fa fa-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="purple">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="ace-icon fa fa-bell icon-animated-bell"></i>
                        <span class="badge badge-important">8</span>
                    </a>

                    <ul class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
                        <li class="dropdown-header">
                            <i class="ace-icon fa fa-exclamation-triangle"></i>
                            8 Notifications
                        </li>

                        <li class="dropdown-content">
                            <ul class="dropdown-menu dropdown-navbar navbar-pink">
                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-left">
                                                <i class="btn btn-xs no-hover btn-pink fa fa-comment"></i>
                                                New Comments
                                            </span>
                                            <span class="pull-right badge badge-info">+12</span>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="btn btn-xs btn-primary fa fa-user"></i>
                                        Bob just signed up as an editor ...
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-left">
                                                <i class="btn btn-xs no-hover btn-success fa fa-shopping-cart"></i>
                                                New Orders
                                            </span>
                                            <span class="pull-right badge badge-success">+8</span>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-left">
                                                <i class="btn btn-xs no-hover btn-info fa fa-twitter"></i>
                                                Followers
                                            </span>
                                            <span class="pull-right badge badge-info">+11</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="dropdown-footer">
                            <a href="#">
                                See all notifications
                                <i class="ace-icon fa fa-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="green">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="ace-icon fa fa-envelope icon-animated-vertical"></i>
                        <span class="badge badge-success">5</span>
                    </a>

                    <ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
                        <li class="dropdown-header">
                            <i class="ace-icon fa fa-envelope-o"></i>
                            5 Messages
                        </li>

                        <li class="dropdown-content">
                            <ul class="dropdown-menu dropdown-navbar">
                                <li>
                                    <a href="#" class="clearfix">
                                        <img src="assets/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar" />
                                        <span class="msg-body">
                                            <span class="msg-title">
                                                <span class="blue">Alex:</span>
                                                Ciao sociis natoque penatibus et auctor ...
                                            </span>

                                            <span class="msg-time">
                                                <i class="ace-icon fa fa-clock-o"></i>
                                                <span>a moment ago</span>
                                            </span>
                                        </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#" class="clearfix">
                                        <img src="assets/avatars/avatar3.png" class="msg-photo" alt="Susan's Avatar" />
                                        <span class="msg-body">
                                            <span class="msg-title">
                                                <span class="blue">Susan:</span>
                                                Vestibulum id ligula porta felis euismod ...
                                            </span>

                                            <span class="msg-time">
                                                <i class="ace-icon fa fa-clock-o"></i>
                                                <span>20 minutes ago</span>
                                            </span>
                                        </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#" class="clearfix">
                                        <img src="assets/avatars/avatar4.png" class="msg-photo" alt="Bob's Avatar" />
                                        <span class="msg-body">
                                            <span class="msg-title">
                                                <span class="blue">Bob:</span>
                                                Nullam quis risus eget urna mollis ornare ...
                                            </span>

                                            <span class="msg-time">
                                                <i class="ace-icon fa fa-clock-o"></i>
                                                <span>3:15 pm</span>
                                            </span>
                                        </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#" class="clearfix">
                                        <img src="assets/avatars/avatar2.png" class="msg-photo" alt="Kate's Avatar" />
                                        <span class="msg-body">
                                            <span class="msg-title">
                                                <span class="blue">Kate:</span>
                                                Ciao sociis natoque eget urna mollis ornare ...
                                            </span>

                                            <span class="msg-time">
                                                <i class="ace-icon fa fa-clock-o"></i>
                                                <span>1:33 pm</span>
                                            </span>
                                        </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#" class="clearfix">
                                        <img src="assets/avatars/avatar5.png" class="msg-photo" alt="Fred's Avatar" />
                                        <span class="msg-body">
                                            <span class="msg-title">
                                                <span class="blue">Fred:</span>
                                                Vestibulum id penatibus et auctor  ...
                                            </span>

                                            <span class="msg-time">
                                                <i class="ace-icon fa fa-clock-o"></i>
                                                <span>10:09 am</span>
                                            </span>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="dropdown-footer">
                            <a href="inbox.html">
                                See all messages
                                <i class="ace-icon fa fa-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>-->

                <li class="light-blue">
                    <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                        <img class="nav-user-photo" src="<?php echo base_url();?>assets/avatars/user.jpg" alt="Jason's Photo" />
                        <span class="user-info">
                            <small>Welcome,</small>
                            <?php echo $user['userName'];?>
                        </span>

                        <i class="ace-icon fa fa-caret-down"></i>
                    </a>

                    <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                        <li>
                            <a href="#">
                                <i class="ace-icon fa fa-cog"></i>
                                Settings
                            </a>
                        </li>

                        <li>
                            <a href="profile.html">
                                <i class="ace-icon fa fa-user"></i>
                                Profile
                            </a>
                        </li>

                        <li class="divider"></li>

                        <li>
                            <a href="<?php echo base_url();?>dashboard/logout">
                                <i class="ace-icon fa fa-power-off"></i>
                                Logout
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div><!-- /.navbar-container -->
</div>

<div class="main-container" id="main-container">
            <script type="text/javascript">
                try{ace.settings.check('main-container' , 'fixed')}catch(e){}
            </script>
<div id="sidebar" class="sidebar                  responsive" data-sidebar="true" data-sidebar-scroll="true" data-sidebar-hover="true">
                <script type="text/javascript">
                    try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
                </script>

                <!--<div class="sidebar-shortcuts" id="sidebar-shortcuts">
                    <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
                        <button class="btn btn-success">
                            <i class="ace-icon fa fa-signal"></i>
                        </button>

                        <button class="btn btn-info">
                            <i class="ace-icon fa fa-pencil"></i>
                        </button>

                        <button class="btn btn-warning">
                            <i class="ace-icon fa fa-users"></i>
                        </button>

                        <button class="btn btn-danger">
                            <i class="ace-icon fa fa-cogs"></i>
                        </button>
                    </div>

                    <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
                        <span class="btn btn-success"></span>

                        <span class="btn btn-info"></span>

                        <span class="btn btn-warning"></span>

                        <span class="btn btn-danger"></span>
                    </div>
                </div> /.sidebar-shortcuts -->

                <!-- <ul class="nav nav-list" style="top: 0px;">
                    <li class="active">
                        <a href="<?php echo base_url();?>dashboard">
                            <i class="menu-icon fa fa-tachometer"></i>
                            <span class="menu-text"> Dashboard </span>
                        </a>

                        <b class="arrow"></b>
                    </li>
                    <li class="">
                        <a href="#" id="dashboard/user">
                            <i class="menu-icon fa fa-tachometer"></i>
                            <span class="menu-text"> User </span>
                        </a>

                        <b class="arrow"></b>
                    </li>
                    <li class="">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-desktop"></i>
                            <span class="menu-text">
                                UI &amp; Elements
                            </span>

                            <b class="arrow fa fa-angle-down"></b>
                        </a>

                        <b class="arrow"></b>

                        <ul class="submenu nav-hide" style="display: none;">
                            <li class="">
                                <a href="#" class="dropdown-toggle">
                                    <i class="menu-icon fa fa-caret-right"></i>

                                    Layouts
                                    <b class="arrow fa fa-angle-down"></b>
                                </a>

                                <b class="arrow"></b>

                                <ul class="submenu">
                                    <li class="">
                                        <a href="javascript:void()">
                                            <i class="menu-icon fa fa-caret-right"></i>
                                            Project
                                        </a>

                                        <b class="arrow"></b>
                                    </li>

                                    <li class="">
                                        <a href="two-menu-1.html">
                                            <i class="menu-icon fa fa-caret-right"></i>
                                            Two Menus 1
                                        </a>

                                        <b class="arrow"></b>
                                    </li>

                                    <li class="">
                                        <a href="two-menu-2.html">
                                            <i class="menu-icon fa fa-caret-right"></i>
                                            Two Menus 2
                                        </a>

                                        <b class="arrow"></b>
                                    </li>

                                    <li class="">
                                        <a href="mobile-menu-1.html">
                                            <i class="menu-icon fa fa-caret-right"></i>
                                            Default Mobile Menu
                                        </a>

                                        <b class="arrow"></b>
                                    </li>

                                    <li class="">
                                        <a href="mobile-menu-2.html">
                                            <i class="menu-icon fa fa-caret-right"></i>
                                            Mobile Menu 2
                                        </a>

                                        <b class="arrow"></b>
                                    </li>

                                    <li class="">
                                        <a href="mobile-menu-3.html">
                                            <i class="menu-icon fa fa-caret-right"></i>
                                            Mobile Menu 3
                                        </a>

                                        <b class="arrow"></b>
                                    </li>
                                </ul>
                            </li>

                            <li class="">
                                <a href="javascript:void()" id="dashboard/project_c">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Typography
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="javascript:void()">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Elements
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="buttons.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Buttons &amp; Icons
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="content-slider.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Content Sliders
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="treeview.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Treeview
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="jquery-ui.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    jQuery UI
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="nestable-list.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Nestable Lists
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="#" class="dropdown-toggle">
                                    <i class="menu-icon fa fa-caret-right"></i>

                                    Three Level Menu
                                    <b class="arrow fa fa-angle-down"></b>
                                </a>

                                <b class="arrow"></b>

                                <ul class="submenu">
                                    <li class="">
                                        <a href="#">
                                            <i class="menu-icon fa fa-leaf green"></i>
                                            Item #1
                                        </a>

                                        <b class="arrow"></b>
                                    </li>

                                    <li class="">
                                        <a href="#" class="dropdown-toggle">
                                            <i class="menu-icon fa fa-pencil orange"></i>

                                            4th level
                                            <b class="arrow fa fa-angle-down"></b>
                                        </a>

                                        <b class="arrow"></b>

                                        <ul class="submenu">
                                            <li class="">
                                                <a href="#">
                                                    <i class="menu-icon fa fa-plus purple"></i>
                                                    Add Product
                                                </a>

                                                <b class="arrow"></b>
                                            </li>

                                            <li class="">
                                                <a href="#">
                                                    <i class="menu-icon fa fa-eye pink"></i>
                                                    View Products
                                                </a>

                                                <b class="arrow"></b>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-tag"></i>
                            <span class="menu-text"> Pengaturan </span>

                            <b class="arrow fa fa-angle-down"></b>
                        </a>

                        <b class="arrow"></b>

                        <ul class="submenu nav-hide" style="display: none;">
                            <li class="">
                                <a href="javascript:void()" id="dashboard/menupg">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Menu Management
                                </a>

                                <b class="arrow"></b>
                            </li>                                   
                        </ul>
                    </li>
                </ul> -->
                <?php echo $this->dynamic_menu_admin->build_menu();?>
                <!-- /.nav-list -->

                <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
                    <i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
                </div>

                <script type="text/javascript">
                    try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
                </script>
            </div>
            <div class="main-content">
                <div class="main-content-inner">

<!-- <div class="breadcrumbs" id="breadcrumbs">
                        <script type="text/javascript">
                            try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
                        </script>
    <ul class="breadcrumb">
                            <li>
                                <i class="ace-icon fa fa-home home-icon"></i>
                                <a href="#">Home</a>
                            </li>

                            <li>
                                <a href="#">Other Pages</a>
                            </li>
                            <li class="active">Blank Page</li>
                        </ul>
</div> -->

<div class="page-content">
                        <div class="ace-settings-container" id="ace-settings-container">
                            <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
                                <i class="ace-icon fa fa-cog bigger-130"></i>
                            </div>

                            <div class="ace-settings-box clearfix" id="ace-settings-box">
                                <div class="pull-left width-50">
                                    <div class="ace-settings-item">
                                        <div class="pull-left">
                                            <select id="skin-colorpicker" class="hide">
                                                <option data-skin="no-skin" value="#438EB9">#438EB9</option>
                                                <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                                                <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                                                <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                                            </select>
                                        </div>
                                        <span>&nbsp; Choose Skin</span>
                                    </div>

                                    <div class="ace-settings-item">
                                        <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />
                                        <label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
                                    </div>

                                    <div class="ace-settings-item">
                                        <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
                                        <label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
                                    </div>

                                    <div class="ace-settings-item">
                                        <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
                                        <label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
                                    </div>

                                    <div class="ace-settings-item">
                                        <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
                                        <label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
                                    </div>

                                    <div class="ace-settings-item">
                                        <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />
                                        <label class="lbl" for="ace-settings-add-container">
                                            Inside
                                            <b>.container</b>
                                        </label>
                                    </div>
                                </div><!-- /.pull-left -->

                                <div class="pull-left width-50">
                                    <div class="ace-settings-item">
                                        <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" />
                                        <label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
                                    </div>

                                    <div class="ace-settings-item">
                                        <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" />
                                        <label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
                                    </div>

                                    <div class="ace-settings-item">
                                        <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" />
                                        <label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
                                    </div>
                                </div><!-- /.pull-left -->
                            </div><!-- /.ace-settings-box -->
                        </div><!-- /.ace-settings-container -->




<!-- MULAI -->

				<div class="page-header">
					<h1>
						Gallery
						<small>
							<i class="ace-icon fa fa-angle-double-right"></i>
							responsive photo gallery 
						</small>
					</h1>
				</div><!-- /.page-header -->
				<div class="row">
					<div class="col-xs-12">
						<!-- PAGE CONTENT BEGINS -->
						<div>
							<ul class="ace-thumbnails clearfix">
                                <?php echo $gambar['data'];?>
								<!-- <li> 
								<div class="albumize" title="Space" data-albumize-album-id="0">
								<a href="<?php echo base_url();?>assets/images/gallery/image-1.jpg" title="Earth from Space" data-albumize-image-id="0" data-albumize-album-id="0"><img src="<?php echo base_url();?>assets/images/gallery/thumb-1.jpg" hidden="true"></a>
					<a href="<?php echo base_url();?>assets/images/gallery/image-2.jpg" title="Surreal Space" data-albumize-image-id="1" data-albumize-album-id="1"><img src="<?php echo base_url();?>assets/images/gallery/thumb-2.jpg" class="albumize-cover"></a>
					<a href="<?php echo base_url();?>assets/images/gallery/image-3.jpg" title="Our Galaxy" data-albumize-image-id="2" data-albumize-album-id="2"><img src="<?php echo base_url();?>assets/images/gallery/thumb-3.jpg" hidden="true"></a>
					<a href="<?php echo base_url();?>assets/images/gallery/image-4.jpg" title="Heavenly Space" data-albumize-image-id="3" data-albumize-album-id="3"><img src="<?php echo base_url();?>assets/images/gallery/thumb-4.jpg" hidden="true"></a>
									<a href="<?php echo base_url();?>assets/images/gallery/image-1.jpg" title="Suwi Wet land" data-rel="colorbox" data-fancybox="gallery" class="cboxElement">
										<img width="150" height="150" alt="150x150" src="<?php echo base_url();?>assets/images/gallery/thumb-1.jpg" hidden="true">
									</a>

									<div class="tags">
										<span class="label-holder">
											<span class="label label-info">Suwi Wet land</span>
										</span>

										<span class="label-holder">
											<span class="label label-danger">fruits</span>
										</span>

										<span class="label-holder">
											<span class="label label-success">toast</span>
										</span>

										<span class="label-holder">
											<span class="label label-warning arrowed-in">diet</span>
										</span>
									</div>

									</div>
								</li> end list
								<li>
								<div class="albumize" title="Ulun" data-albumize-album-id="1">
								<a href="<?php echo base_url();?>assets/images/gallery/image-1.jpg" title="Earth from Space" data-albumize-image-id="0" data-albumize-album-id="0"><img src="<?php echo base_url();?>assets/images/gallery/thumb-1.jpg" hidden="true"></a>
					<a href="<?php echo base_url();?>assets/images/gallery/image-2.jpg" title="Surreal Space" data-albumize-image-id="1" data-albumize-album-id="0"><img src="<?php echo base_url();?>assets/images/gallery/thumb-2.jpg" hidden="true"></a>
					<a href="<?php echo base_url();?>assets/images/gallery/image-3.jpg" title="Our Galaxy" data-albumize-image-id="2" data-albumize-album-id="0"><img src="<?php echo base_url();?>assets/images/gallery/thumb-3.jpg" class="albumize-cover"></a>
					<a href="<?php echo base_url();?>assets/images/gallery/image-4.jpg" title="Heavenly Space" data-albumize-image-id="3" data-albumize-album-id="0"><img src="<?php echo base_url();?>assets/images/gallery/thumb-4.jpg" hidden="true"></a>
									<a href="<?php echo base_url();?>assets/images/gallery/image-1.jpg" title="Suwi Wet land" data-rel="colorbox" data-fancybox="gallery" class="cboxElement">
										<img width="150" height="150" alt="150x150" src="<?php echo base_url();?>assets/images/gallery/thumb-1.jpg" hidden="true">
									</a>

									<div class="tags">
										<span class="label-holder">
											<span class="label label-info">Suwi Wet land</span>
										</span>

										<span class="label-holder">
											<span class="label label-danger">fruits</span>
										</span>

										<span class="label-holder">
											<span class="label label-success">toast</span>
										</span>

										<span class="label-holder">
											<span class="label label-warning arrowed-in">diet</span>
										</span>
									</div>
								</div>
								</li> -->
							</ul>
						</div><!-- PAGE CONTENT ENDS -->
					</div><!-- /.col -->
				</div><!-- /.row -->

				<div class="page-header">
					<h1>
						UPLOAD
						<small>
							<i class="ace-icon fa fa-angle-double-right"></i>
							Here...!
						</small>
					</h1>
				</div><!-- /.page-header -->

				<div class="col-sm-6">
					<div class="form-group">
						<label class="control-label col-xs-3">Album :</label>
						<div class="col-xs-8">
							<div class="clearfix">
								<?php 

								$attribut = 'class="form-control album"';
											// $list = array(''=>'','Jalan' => 'Jalan - jalan','Muara Ancalong'=>'Muara Ancalong','Suwi Wet Lands'=>'Suwi Wet Lands','Muara Badak'=>'Muara Badak','Muara Borneo'=>'Muara Borneo');
								echo form_dropdown('album',$list,$selected,$attribut);

								?>
							</div>

						</div>
					</div>
					<div class="space-2"></div>
					<div class="space-2"></div>
					<div class="space-2"></div>
					<div class="space-2"></div>
					<hr>
					<!-- DROPZONE UPLOAD -->
					<form class="dropzone" id="dropzone" style="display: none;">
						<div class="fallback">
							<input name="userfile" type="file" multiple="" />
						</div>
					</form>
				</div>

				<div class="vspace-16-sm"></div>

				<div class="col-sm-6">
					<div class="row fileupload-buttonbar">
						<div class="col-lg-7" id="actions">
							<!-- The fileinput-button span is used to style the file input field as button -->
							<button type="submit" class="btn btn-primary start">
								<i class="glyphicon glyphicon-upload"></i>
								<span>Start upload</span>
							</button>
							<button type="reset" class="btn btn-warning cancel">
								<i class="glyphicon glyphicon-ban-circle"></i>
								<span>Cancel upload</span>
							</button>
						</div>
						<!-- The global progress state -->
						<div class="col-lg-5 fade" data-ng-class="{in: active()}">
							<!-- The global progress bar -->
							<div class="progress progress-striped active" data-file-upload-progress="progress()"><div class="progress-bar progress-bar-success" data-ng-style="{width: num + '%'}"></div></div>
							<!-- The extended global progress state -->
							<div class="progress-extended">&nbsp;</div>
						</div>
					</div>

					<div class="table table-striped" class="files" id="previews">

						<div id="template" class="file-row">
							<!-- This is used as the file preview template -->
							<div class="timeline-info col align-self-start">
								<span class="preview"><img data-dz-thumbnail /></span>

							</div>
							<div>
								<p class="name" data-dz-name></p>
								<strong class="error text-danger" data-dz-errormessage></strong>
							</div>
							<div>
								<p class="size" data-dz-size></p>
								<div class="progress progress-mini active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
									<div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
								</div>
							</div>
							<div>
								<label for="label" class="col-xs-2">Title :</label>
								<input type="text" id="title" name="title"></input>
								<br>
								<label>Description :</label>
								<textarea id="description" name="description"></textarea>

								<div class="pull-right action-buttons">
									<a class="start">
										<i class="ace-icon fa fa-check green bigger-130"></i>
									</a>
									<a data-dz-remove>
										<i class="ace-icon fa fa-times red bigger-125"></i>
									</a>
								</div>
								<hr>
      <!-- <button class="btn btn-primary start">
          <i class="glyphicon glyphicon-upload"></i>
          <span>Start</span>
      </button>
      <button data-dz-remove class="btn btn-danger delete">
        <i class="glyphicon glyphicon-trash"></i>
        <span>Delete</span>
    </button> -->
</div>
</div>

</div>
</div>


</div><!--end page-content-->
</div>
<div class="footer">
                <div class="footer-inner">
                    <div class="footer-content">
                        <span class="bigger-120">
                            <span class="blue bolder">YASIWA</span>
                            Application &copy; 2017
                        </span>

                        &nbsp; &nbsp;
                        <span class="action-buttons">
                            <a href="#">
                                <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                            </a>

                            <a href="#">
                                <i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
                            </a>

                            <a href="#">
                                <i class="ace-icon fa fa-rss-square orange bigger-150"></i>
                            </a>
                        </span>
                    </div>
                </div>
            </div>

</div><!-- /.main-content -->

<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
	<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
</a>
</div><!-- /.main-container -->



<script src="<?php echo base_url();?>assets/js/jquery.2.1.1.min.js"></script>

<script type="text/javascript">
	window.jQuery || document.write("<script src='<?php echo base_url();?>assets/js/jquery.min.js'>"+"<"+"/script>");
</script>
<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery1x.min.js'>"+"<"+"/script>");
</script>
<![endif]-->
<script type="text/javascript">
	if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo base_url();?>assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>

<!-- bootstrap -->
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

<script src="<?php echo base_url();?>assets/js/jquery-ui.custom.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.ui.touch-punch.min.js"></script>
<script src="<?php echo base_url();?>assets/js/chosen.jquery.min.js"></script>

<!-- lobibox -->
<script src="<?php echo base_url();?>assets/js/lobibox.js"></script>



<!-- ace scripts -->
		<script src="<?php echo base_url();?>assets/js/ace-elements.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page 
		<script type="text/javascript">
			jQuery(function($) {
	var $overflow = '';
	var colorbox_params = {
		rel: 'colorbox',
		reposition:true,
		scalePhotos:true,
		scrolling:true,
		previous:'<i class="ace-icon fa fa-arrow-left"></i>',
		next:'<i class="ace-icon fa fa-arrow-right"></i>',
		close:'&times;',
		current:'{current} of {total}',
		maxWidth:'100%',
		maxHeight:'100%',
		onOpen:function(){
			$overflow = document.body.style.overflow;
			document.body.style.overflow = 'hidden';
		},
		onClosed:function(){
			document.body.style.overflow = $overflow;
		},
		onComplete:function(){
			//$.colorbox.resize();
		}
	};

	$('.ace-thumbnails [data-rel="colorbox"]').colorbox(colorbox_params);
	$("#cboxLoadingGraphic").html("<i class='ace-icon fa fa-spinner orange fa-spin'></i>");//let's add a custom loading icon
	
	
	$(document).one('ajaxloadstart.page', function(e) {
		$('#colorbox, #cboxOverlay').remove();
   });
})
		</script>

	-->

	<script src="<?php echo base_url();?>assets/js/dropzone.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/jquery.colorbox.min.js"></script>
	<!--[if !IE]> -->
	<script type="text/javascript">
		var $catId;
		jQuery.noConflict();
		jQuery(document).ready(function () {
			jQuery('.album').on('change',function($){
				$catId = jQuery('.album').val();
				if(jQuery('.album').val()!='')
				{
					jQuery('form#dropzone').show();
				}
				else
				{
					jQuery('form#dropzone').hide();	
				}
			});

			try {
				var previewNode = document.querySelector("#template");
				previewNode.id = "";
				var previewTemplate = previewNode.parentNode.innerHTML;
				previewNode.parentNode.removeChild(previewNode);

Dropzone.autoDiscover = false;
var myDropzone = new Dropzone('#dropzone', { // Make the whole body a dropzone
	url : "<?php echo base_url();?>UploadFile/upload_gallery",
	paramName: "userfile", // The name that will be used to transfer the file
	thumbnailWidth: 80,
	thumbnailHeight: 80,
	parallelUploads: 20,
	previewTemplate: previewTemplate,
  autoQueue: false, // Make sure the files aren't queued until manually added
  previewsContainer: "#previews", // Define the container to display the previews
  //clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
});

myDropzone.on("addedfile", function(file) {
  // Hookup the start button
  file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file); };
  //file.description = Dropzone.createElement("<textarea name='description'></textarea>");
  //file.title = Dropzone.createElement("<input type='text' name='title'>");
  //file.previewElement.appendChild(file.title);
  //file.previewElement.appendChild(file.description);
});

// Update the total progress bar
myDropzone.on("totaluploadprogress", function(progress) {
	document.querySelector(".progress-bar").style.width = progress + "%";
});

myDropzone.on("sending", function(file,xhr,formData) {
  // Show the total progress bar when upload starts
  document.querySelector(".progress-bar").style.opacity = "1";
  // formData.append('description',file.description.value);
  // formData.append('title',file.title.value);
  // formData.append('idCat',$catId);
  formData.append('title',file.previewElement.querySelector('#title').value);
  formData.append('description',file.previewElement.querySelector('#description').value);
  formData.append('idCat',$catId);
  // And disable the start button
  file.previewElement.querySelector(".start").setAttribute("disabled", "disabled");
});

// Hide the total progress bar when nothing's uploading anymore
myDropzone.on("queuecomplete", function(progress) {
	document.querySelector(".progress-bar").style.opacity = "0";
    myDropzone.removeAllFiles(true);
    //muatUlang();
});

// Setup the buttons for all transfers
// The "add files" button doesn't need to be setup because the config
// `clickable` has already been specified.
document.querySelector("#actions .start").onclick = function() {
	myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED));
};
document.querySelector("#actions .cancel").onclick = function() {
	myDropzone.removeAllFiles(true);
};

} catch(e) {
	alert('Dropzone.js does not support older browsers!'+ e);
};
});
</script>	
	
<script type="text/javascript">
      
    jQuery("a.edit").on("click",function(e){
        var idGallery = jQuery(this).attr("title");
        jQuery.ajax({
            async: true,
            url:"<?php echo site_url('uploadFile/edit_gallery/')?>" + idGallery,
            type:"GET",
            dataType:"JSON",
            delay:5000,
            success:function(data)
            {
                jQuery('[name="id"]').val(data.mediaId);
                jQuery('[name="title"]').val(data.title);
                jQuery('[name="description"]').val(data.description);
                jQuery('.foto').css("border","3px solid #5555").attr("src", "<?php echo base_url();?>"+data.path);
                jQuery('.modal').modal('show');
            }
        });
    });
	jQuery(".album").chosen({
		placeholder: "Please Select",
		allowClear: true
	});
     jQuery(document).ready(function(){
        jQuery("#btnSave").on("click",function(e){
            e.preventDefault();
           // console.log('aku di klik');
           saveEdit();
        });
    });
     function muatUlang()
     {
        location.reload();
     }
    function saveEdit()
    {
        jQuery.ajax({
            url:"<?php echo site_url('uploadFile/csaveEdit')?>",
            type:"POST",
            data: jQuery('form#modal').serialize(),
            dataType:"JSON",
            success:function()
            {
                jQuery('.modal').modal('hide');
                Lobibox.notify('success',{
                                size : 'normal',
                                title : 'Update',
                                msg : 'Data Updated'
                            });
                window.setTimeout(muatUlang,3000);
            },
            error:function(jqXHR,textStatus,errorThrown)
            {
                Lobibox.notify('error',{
                    size:'normal',
                    msg:'Failed to Update' + errorThrown
                });
            }
        });
    }
    function deleteImage(id)
    {
        if(Lobibox.confirm({
            msg : "are you sure want to delete this image ?",
            callback : function($this,type,ev)
            {
                if(type=='yes')
                {
                    $.ajax({
                        async : true,
                        url : "",
                        type: "POST",
                        dataType:"JSON",
                        success:function(data)
                        {
                            Lobibox.notify('success',{
                                size : 'normal',
                                title : 'Hapus Data',
                                msg : 'Data berhasil dihapus'
                            });
                        },
                        error:function(jqXHR,textStatus,errorThrown)
                        {
                            Lobibox.notify('error',{
                                size:'normal',
                                msg:'Gagal Hapus Data ' + errorThrown

                            });
                        }
                    })
                }
            }
        }));
    }
</script>
<script type="text/javascript"> 
            jQuery(function($) {
                
    var $overflow = '';
    var colorbox_params = {
        rel: 'colorbox',
        reposition:true,
        scalePhotos:true,
        scrolling:false,
        previous:'<i class="ace-icon fa fa-arrow-left"></i>',
        next:'<i class="ace-icon fa fa-arrow-right"></i>',
        close:'&times;',
        maxWidth:'100%',
        maxHeight:'100%',
        //current:'{current} of {total}',
        current:function () {
            var description = $(this).attr('alt');
            if (description == null) {
                return "";
            } 
            else
            {
                return ""+description+"";
            }
        },
        onOpen:function(){
            $overflow = document.body.style.overflow;
            document.body.style.overflow = 'hidden';
        },
        onClosed:function(){
            document.body.style.overflow = $overflow;
        },
        onComplete:function(){
            $.colorbox.resize();
        }
    };

    $('.ace-thumbnails [data-rel="colorbox"]').colorbox(colorbox_params);
    $("#cboxLoadingGraphic").html("<i class='ace-icon fa fa-spinner orange fa-spin'></i>");//let's add a custom loading icon
    
    
    $(document).one('ajaxloadstart.page', function(e) {
        $('#colorbox, #cboxOverlay').remove();
   });
})
        </script>



<!-- <script src="<?php echo base_url();?>assets/js/albumize.js"></script> -->
<!-- <script src="<?php echo base_url();?>assets/js/jquery-3.3.1.min.js"></script> -->
<!-- <script src="<?php echo base_url();?>assets/js/jquery.fancybox.pack.js?v=2.1.5"></script>
<script src="<?php echo base_url();?>assets/js/jquery.fancybox-buttons.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.fancybox-media.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.fancybox-thumbs.js"></script> -->
<!-- <script type="text/javascript">
		
		var ju = jQuery.noConflict();
			var sb = ju('#show-albums-button');
			
			sb.click(function(){
				ju.albumize();
			});
			

	// $('[data-fancybox]').fancybox({
	// 	prevEffect : 'none',
	// 	nextEffect : 'none',

	// 	closeBtn  : true,
	// 	arrows    : true,
	// 	nextClick : true,

	// 	helpers : {
	// 		thumbs : {
	// 			width  : 50,
	// 			height : 50
	// 		}
	// 	}
	// });
</script> -->
</body>
</html>
<div class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col col-sm-5">
                <img class="img-circle foto" width="150" height="150" style="margin: 20px 0 50px 30px">
            </div>
            <div class="col col-sm-5 col-offset-2">
                <form id="modal">
                    <div class="row">
                        <input type="text" name="id" hidden="true">
                        <input type="text" name="title" class="form-control" placeholder="Title Picture">
                    </div>
                    <br>
                    <div class="row">
                        <textarea name="description" class="form-control" placeholder="Description Picture" style="max-width: 300px; min-height: 70px;min-width: 200px;"></textarea> 
                    </div>
                </form>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" id="btnSave" class="btn btn-primary btnSave">Save changes</button>
      </div>
    </div>
  </div>
</div>