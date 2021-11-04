<!-- datepicker modal-->
        <style>
.datepicker{z-index:1151 !important;}
</style>
        
                        

<script type="text/javascript" src="Design/tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
  tinymce.init({
    selector: "textarea",theme: "modern",width: 680,
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
   toolbar2: "| responsivefilemanager | link unlink anchor | image media | forecolor backcolor  | print preview code | fullscreen",
   image_advtab: true,
   relative_urls:false,
   remove_script_host:false
   external_filemanager_path:"<?php echo base_url().'filemanager/';?>",
   filemanager_title:"Responsive Filemanager",
   external_plugins: { "filemanager" : "<?php echo base_url().'filemanager/plugin.min.js';?>"}
 });
  </script>
  <script type="text/javascript">
$(document).ready(function () {
    $('.klik').click(function() {
        var url = '<?php echo base_url();?>' + $(this).attr('id');
        $('.isi_halaman').load(url);
        return false;
    });
});
</script>         
                        

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
                                        <h4 class="widget-title lighter" id="formTitle"><?php echo '<b>'.$formTitle.'</b>';?></h4><div class="pull-right"><a href="#" class="klik" id="dashboard/project"><button class="btn btn-white btn-info btn-bold">
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
<div class="form-group">
                                                                <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="lokasi">Lokasi:</label>

                                                                <div class="col-xs-12 col-sm-9">
                                                                    <div class="clearfix">
                                                                    <input type="hidden" name="id" id="id" class="col-xs-12 col-sm-6">
                                                                        <input type="text" name="lokasi" id="lokasi" class="col-xs-12 col-sm-6">
                                                                    </div>
                                                                </div>
                                                            </div>                                                            


                                                                <div class="space-4"></div>
                                                                <div class="space-4"></div>
                                                                <div class="space-4"></div>
                                                                <hr>

<div class="form-group">
                                                                <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="email">Tanggal Publish:</label>

                                                                <div class="col-xs-12 col-sm-9">
                                                                    <div class="clearfix">
                                                                        <input type="text" name="tglPub" id="tglPub" class="col-xs-12 col-sm-6">
                                                                    </div>
                                                                </div>
                                                            </div>


                                                                <div class="space-4"></div>
                                                                <div class="space-4"></div>
                                                                <div class="space-4"></div>
                                                                <hr>


                                                <div class="form-group">
                                                                <label class="control-label col-xs-12 col-sm-3 no-padding-right">Tipe Proyek</label>

                                                                <div class="col-xs-12 col-sm-9">
                                                                    <div>
                                                                        <label class="line-height-1 blue">
                                                                            <input name="prj_type" value="1" type="radio" class="ace">
                                                                            <span class="lbl">Project Sedang Berjalan</span>
                                                                        </label>
                                                                    </div>

                                                                    <div>
                                                                        <label class="line-height-1 blue">
                                                                            <input name="prj_type" value="2" type="radio" class="ace">
                                                                            <span class="lbl"> Project Sebelumnya</span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>


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
                                                                        <input type="text" name="title" id="title" class="col-xs-12 col-sm-6">
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
    <textarea class="form-control" id="txtenglish" name="konten" style="width:auto;"></textarea>
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


        
<script src="<?php echo base_url();?>assets/js/select2.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/select2.css" />
<!--<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0-beta.3/css/select2.min.css" />-->
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/chosen.min.css" />

                    
        <!-- basic scripts -->

        <!--[if !IE]> -->
        

        <!-- <![endif]-->
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
<script src="<?php echo base_url();?>assets/js/chosen.jquery.min.js"></script>
        <!-- page specific plugin scripts -->
        <script src="<?php echo base_url();?>assets/js/fuelux.wizard.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.validate.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/additional-methods.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/bootbox.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.maskedinput.min.js"></script>
        

        <!-- page specific plugin scripts -->
        <!--<script src="<?php echo base_url();?>assets/js/chosen.jquery.min.js"></script>-->
        <script src="<?php echo base_url();?>assets/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.dataTables.bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/dataTables.tableTools.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/dataTables.colVis.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/bootstrap-datepicker.min.js"></script>        
        <script src="<?php echo base_url();?>assets/js/ace-elements.min.js"></script>
        
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
                url = "<?php echo site_url('posProject/ajax_add')?>";
            }
            else 
            {
                url = "<?php echo site_url('posProject/ajax_update')?>";
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
                    reload_table();
                    $('.isi_halaman').load('dashboard/project');


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