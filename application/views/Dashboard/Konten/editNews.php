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

        <!-- page specific plugin styles -->

        <!-- text fonts -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/fonts.googleapis.com.css" />

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

                      <!-- datepicker modal-->
<!-- datepicker modal-->
     <!-- datepicker modal-->
        <style>
.datepicker{z-index:1151 !important;}
</style>
                        <div class="row">
                            <div class="col-xs-12">
                                <!-- PAGE CONTENT BEGINS -->

                                <div class="row">
                                <div class="row">
                                <div class="col-xs-12">
                                        <div class="page-content">
                        

                        <div class="row">
                            <div class="col-xs-12">
                                <!-- PAGE CONTENT BEGINS -->

                                <div class="widget-box">
                                    <div class="widget-header widget-header-blue widget-header-flat">
                                        <h4 class="widget-title lighter" id="formTitle"><?php echo '<b>'.$formTitle.'</b>';?></h4><div class="pull-right"><a href="#" class="klik" id="dashboard/posting"><button class="btn btn-white btn-info btn-bold">
                                                <i class="fa fa-chevron-left bigger-110 blue" title="Tambah Menu"></i>
                                            </button></a></div>
                                    </div>

                                    <div class="widget-body">
                                        <div class="widget-main">
                                            <div id="fuelux-wizard-container">
                                                <div class="row">
<form class="form-horizontal" id="validation-form"> 
<div class="space-4"></div>
                                                                <div class="space-4"></div>
                                                                <div class="space-4"></div>                                            
                                                                <div class="space-4"></div>
                                                                <hr>

<div class="form-group">
                                                                <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="email">Tanggal Publish:</label>

                                                                <div class="col-xs-12 col-sm-9">
                                                                    <div class="clearfix">
                                                                    <input type="hidden" name="id" id="id" class="col-xs-12 col-sm-6">
                                                                        <input type="text" name="tglPub" value="<?php echo $hasil->tglPub;?>" id="tglPub" data-date="2012-12-21T15:25:00Z" class="col-xs-12 col-sm-6">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="space-4"></div>
                                                                <div class="space-4"></div>
                                                                <div class="space-4"></div>
                                                                <hr>
<div class="form-group">
                                                                <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="target">Page</label>

                                                                <div class="col-xs-12 col-sm-9">
                                                                    <select class="select_target" id="page" data-tags="true" name="page">
                                                                        <option value=""></option>
                                                                        <option value="home">Home</option>
                                                                        <option value="aboutus">About Us</option>
                                                                        <option value="hww">How We Work</option>
                                                                        <option value="ourteam">Our Teamm</option>
                                                                        <option value="visiandmisi">Vision & Mission</option>
                                                                        <option value="organization">Organization Chart</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                                <div class="space-4"></div>
                                                                <div class="space-4"></div>
                                                                <div class="space-4"></div>
                                                                <hr>


                                                            <div class="space-15"></div>
                                                                <div class="space-2"></div>
                                                                <div class="space-2"></div>

                                                            <div class="space-2"></div>
                                                            <hr>



                                    <div class="col-sm-12">
                                        <div class="tabbable">
                                            <ul class="nav nav-tabs" id="myTab">
                                                <li class="active">
                                                    <a data-toggle="tab" href="#home" aria-expanded="true">
                                                        <i class="green ace-icon fa fa-home bigger-120 width-auto"></i>
                                                        Bahasa
                                                    </a>
                                                </li>

                                                <li class="">
                                                    <a data-toggle="tab" href="#messages" aria-expanded="false">
                                                        English                                                        
                                                    </a>
                                                </li>
                                            </ul>

                                            <div class="tab-content">
                                                <div id="home" class="tab-pane fade active in">

<div class="space-2"></div>
                                                                <div class="space-2"></div>
                                                                <div class="space-2"></div>
<div class="form-group">
                                                                <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="judul">Judul:</label>

                                                                <div class="col-xs-12 col-sm-9">
                                                                    <div class="clearfix">
                                                                        <input type="hidden" value="<?php echo $hasil->id;?>" name="id" id="id" class="col-xs-12 col-sm-6">
                                                                        <input type="text" name="judul" id="judul" class="col-xs-12 col-sm-6">
                                                                    </div>
                                                                </div>
                                                            </div>


                                                                <div class="space-2"></div>
                                                                <div class="space-2"></div>
                                                                <div class="space-2"></div>
                                                                <hr>


                                                            <div class="hr hr-dotted"></div>
                                                    <div class="form-group">
  <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="isi">Isi Postingan:</label>
  <div class="col-xs-12 col-sm-9">                    
    <textarea class="form-control" id="txtbahasa" name="isi" style="width:auto;"></textarea>
  </div>
</div>
                                                </div>

                                                <div id="messages" class="tab-pane fade">
                                                <div class="space-2"></div>
                                                                <div class="space-2"></div>
                                                                <div class="space-2"></div>
                                                   <div class="form-group">
                                                                <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="title">Title:</label>

                                                                <div class="col-xs-12 col-sm-9">
                                                                    <div class="clearfix">
                                                                        <input type="text" name="title" value="<?php echo $hasil->title;?>" id="title" class="col-xs-12 col-sm-6">
                                                                    </div>
                                                                </div>
                                                            </div>


                                                                <div class="space-2"></div>
                                                                <div class="space-2"></div>
                                                                <div class="space-2"></div>
                                                                <hr>


                                                            <div class="hr hr-dotted"></div>
                                                    <div class="form-group">
  <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="konten">Content:</label>
  <div class="col-xs-12 col-sm-9">                    
    <textarea class="form-control" id="txtenglish" name="konten" style="width:auto;"><?php echo $hasil->konten;?></textarea>
  </div>
</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.col -->
                                    </form>    <!-- END FORM -->
                                    <div class="vspace-6-sm"></div>
                                </div>
                                            </div>

                                            <hr>
                                            <div class="wizard-actions">
                                               

                                                <button id="btnSave" class="btn btn-success btn-next" onclick="save();">
                                                    Save
                                                    <i class="ace-icon fa fa-arrow-right icon-on-right"></i>
                                                </button>
                                            </div>
                                        </div><!-- /.widget-main -->
                                    </div><!-- /.widget-body -->
                                </div>
                                </div><!-- PAGE CONTENT ENDS -->
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div>
                                    </div>
                                </div>
                            </div><!-- /.col -->
                        </div><!-- /.row -->
<!-- page specific plugin styles -->
</div><!-- /.page-content -->

</div>
</div><!-- /.main-content -->
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
</body>
</html>

        

<link rel="stylesheet" href="<?php echo base_url();?>assets/css/select2.css" />
<!--<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0-beta.3/css/select2.min.css" />-->
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/chosen.min.css" />

                    
        <!-- basic scripts -->

        <!--[if !IE]> -->
        

        <!-- <![endif]-->
<script src="<?php echo base_url();?>assets/js/jquery.2.1.1.min.js"></script>
<script type="text/javascript">
            window.jQuery || document.write("<script src='<?php echo base_url();?>assets/js/jquery.min.js'>"+"<"+"/script>");
        </script>
        <!--[if IE]>
<script src="assets/js/jquery.1.11.1.min.js"></script>
<![endif]-->

        <!--[if !IE]> -->
        

        <!-- <![endif]-->

        <!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery1x.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

<script type="text/javascript">
            if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo base_url();?>assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
        </script>
        
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/datepicker.min.css" />
        
        <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/moment.min.js"></script>
<script src="<?php echo base_url();?>assets/js/chosen.jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/js/select2.min.js"></script>
        <!-- page specific plugin scripts -->
        <script src="<?php echo base_url();?>assets/js/fuelux.wizard.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.validate.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/additional-methods.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/bootbox.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.maskedinput.min.js"></script>
        

        <!-- page specific plugin scripts -->
        <!--<script src="<?php echo base_url();?>assets/js/chosen.jquery.min.js"></script>-->
        <script type="text/javascript" src="<?php echo base_url();?>Design/tinymce/js/tinymce/tinymce.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.dataTables.bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/dataTables.tableTools.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/dataTables.colVis.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/bootstrap-datepicker.min.js"></script>        
        <script src="<?php echo base_url();?>assets/js/ace-elements.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/lobibox.js"></script>
        
        <!-- inline scripts related to this page -->
        <script src="<?php echo base_url();?>assets/js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript">
 // $('#tglPub').datepicker({
 //                    autoclose: true,
 //                    todayHighlight: true
 //                })
 //                //show datepicker when clicking on the icon
 //                .next().on(ace.click_event, function(){
 //                    $(this).prev().focus();
 //                });
 $('#tglPub').datetimepicker({format: 'DD/MM/YYYY HH:mm'}).next().on(ace.click_event, function(){
                    $(this).prev().focus();

                });
            
                //or change it into a date range picker
                //$('.input-daterange').datepicker({autoclose:true});
    var save_method="<?php echo $formTitle;?>"
    function save()
        {
            $('#btnSave').text('saving...'); //change button text
            $('#btnSave').attr('disabled',true); //set button disable 
            var url;

            if(save_method == 'Add') {
                url = "<?php echo site_url('posNews/ajax_add')?>";
            }
            else 
            {
                url = "<?php echo site_url('posNews/ajax_update')?>";
            }

    // ajax adding data to database
            $.ajax({
                url : url,
                type: "POST",
                data: $('#validation-form').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    
                    $('#btnSave').text('Save'); //change button text
                    $('#btnSave').attr('disabled',false); //set button enable 
                    Lobibox.notify('success',{
                            size:'normal',
                            msg:'Data Berhasil disimpan'
                        });
                    window.location='<?php echo base_url();?>dashboard/posting';
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    Lobibox.notify('error',{
                            size:'normal',
                            msg:'Data Gagal disimpan'
                        });
                    $('#btnSave').text('Save'); //change button text
                    $('#btnSave').attr('disabled',false); //set button enable 

                }
            });
        }
</script>    
<script type="text/javascript">
  tinymce.init({
    selector: "textarea",
    theme: "modern",
    width: "auto",
    plugins: [
         "advlist autolink link image lists charmap print preview hr anchor pagebreak",
         "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
         "table contextmenu directionality emoticons paste textcolor responsivefilemanager code fullscreen"
   ],
   setup: function (editor) {
            editor.on('change', function () {
                editor.save();
            });   
        },
   toolbar1: "cut copy paste undo redo | styleselect fontselect fontsizeselect | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent",
   toolbar2: "| link unlink anchor | image media | forecolor backcolor  | print preview code | fullscreen",
   image_advtab: true,
   relative_urls:false,
   remove_script_host:false,
   external_filemanager_path:"<?php echo base_url().'filemanager/';?>",
   filemanager_title:"Responsive Filemanager",
   external_plugins: { "filemanager" : "<?php echo base_url().'/filemanager/plugin.min.js';?>"}
 });
  </script>        