
     <!-- datepicker modal-->
        <style>
.datepicker{z-index:1151 !important;}
</style>
        
                        



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
                                        <h4 class="widget-title lighter" id="formTitle">Company Profile</h4>
                                    </div>

                                    <div class="widget-body">
                                        <div class="widget-main">
                                            <div id="fuelux-wizard-container">
                                                <div class="row">
<form class="form-horizontal" id="validation-form"> 
                                                            
                                                                <div class="space-4"></div>

<div class="form-group">
                                                                <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="email">Header Title:</label>

                                                                <div class="col-xs-12 col-sm-9">
                                                                    <div class="clearfix">
                                                                    <input type="hidden" name="id" id="id" class="col-xs-12 col-sm-6">
                                                                        <input type="text" name="header_title" id="header_title" class="col-xs-12 col-sm-6">
                                                                    </div>
                                                                </div>
                                                            </div>
<div class="form-group">
                                                                <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="email">Address :</label>

                                                                <div class="col-xs-12 col-sm-9">
                                                                    <div class="clearfix">
                                                                    <input type="hidden" name="id" id="id" class="col-xs-12 col-sm-6">
                                                                        <input type="text" name="header_title" id="header_title" class="col-xs-12 col-sm-6">
                                                                    </div>
                                                                </div>
                                                            </div>

<div class="form-group">
                                                                <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="email">Phone:</label>

                                                                <div class="col-xs-12 col-sm-9">
                                                                    <div class="clearfix">
                                                                    <input type="hidden" name="id" id="id" class="col-xs-12 col-sm-6">
                                                                        <input type="text" name="header_title" id="header_title" class="col-xs-12 col-sm-6">
                                                                    </div>
                                                                </div>
                                                            </div>                                                            

<div class="form-group">
                                                                <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="email">Email:</label>

                                                                <div class="col-xs-12 col-sm-9">
                                                                    <div class="clearfix">
                                                                    <input type="hidden" name="id" id="id" class="col-xs-12 col-sm-6">
                                                                        <input type="text" name="header_title" id="header_title" class="col-xs-12 col-sm-6">
                                                                    </div>
                                                                </div>
                                                            </div>                                                            
                                                            <hr>
<div class="wizard-actions">
                                               
</form>
                                                <center><button id="btnSave" class="btn btn-success" onclick="save();">
                                                    Save
                                                    <i class="ace-icon fa fa-arrow-right icon-on-right"></i>
                                                </button>
                                                <button id="btnSave" class="btn btn-info" onclick="save();">
                                                    Edit
                                                    <i class="ace-icon fa fa-pencil icon-on-right"></i>
                                                </button>
                                                </center>
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
                                                        Header Picture
                                                    </a>
                                                </li>
                                            </ul>

                                            <div class="tab-content">
                                                <div id="home" class="tab-pane fade active in">

<div class="space-2"></div>
                                                                <div class="space-2"></div>
                                                                <div class="space-2"></div>
                                                                
                                                                <div class="clearfix">
                                        <div class="pull-left" ><button id="upload" class="btn btn-success btn-bold" onclick="upload();">
                                                Upload
                                            </button><button id="back" class="btn btn-success btn-bold" onclick="back();" style="display: none;">
                                                Back
                                            </button></div>
                                            <div class="pull-right tableTools-container"></div>
                                        </div>
                                        <div id="data-header">
                                                            <div class="table-header" align="center">
                                            Carosoul Image
                                        </div>
                                                            <table id="upload_image" class="table table-striped table-bordered table-hover">
                                                                <thead>
                                                                    <tr>
                                                                        <th data-field="id">Image</th>
                                                                        <th data-field="name">Name</th>
                                                                        <th data-field="size">Size</th>
                                                                        <th data-field="mimeType">Type</th>
                                                                        <th data-field="price">Action</th>
                                                                    </tr>
                                                                </thead>
                                                            </table></div>


                                                                <div class="space-2"></div>
                                                                <div class="space-2"></div>
                                                                <div class="space-2"></div>
                                                                <hr>
                                                                <form action="UploadFile/upload_file" class="dropzone" id="dropzone" style="display: none;">
                                        <div class="fallback">
                                            <input name="userfile" type="file" multiple="" />
                                        </div>
                                    </form>


                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.col -->
                                    <div class="vspace-6-sm"></div>
                                </div>
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


<script src="<?php echo base_url();?>assets/js/jquery.2.1.1.min.js"></script>        
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/select2.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/dropzone.min.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/fonts.googleapis.com.css" />
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
        <script src="<?php echo base_url();?>assets/js/dropzone.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/fuelux.wizard.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/bootstrap-datepicker.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/bootstrap-timepicker.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/moment.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/daterangepicker.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/bootstrap-datetimepicker.min.js"></script>
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
 var $table_image = $('#upload_image');
function upload()
{
    $('#data-header').hide();
    $('#upload').hide();
    $('#back').show();
    $('#dropzone').show();
}
function reload_table()
{
    $table_image.api().ajax.reload(null,false); //reload datatable ajax 
}
function back()
{
    $('#data-header').show();
    $('#upload').show();
    $('#back').hide();
    $('#dropzone').hide();
    reload_table();
}

function delete_image(id,fileName)
{
    if(Lobibox.confirm({
        msg: "Are you sure you want to delete this user?",
        callback : function($this,type,ev)
        {
            if(type==='yes')
            {
                $.ajax({
                url : "<?php echo site_url('uploadFile/ajax_delete')?>/"+id+"/"+fileName,
                type: "POST",
                dataType: "JSON",
                success: function(data)
                {
                    //if success reload ajax table
                    Lobibox.notify('success', {
                        size: 'normal',
                        title:'Hapus Data',
                        msg: 'Data berasil dihapus...'
                        });
                    reload_table();
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    Lobibox.notify('error', {
                        size: 'normal',
                        msg: 'Gagal Hapus data / ' + errorThrown
                        });
                }
                }) 
            }
            else if(type==='no')
            {
                
            }
        }
    }));
    // if(confirm('Are you sure delete this data?'))
    // {
    //     // ajax delete data to database
        

    // }
} 
                
jQuery(function($){            
            try {
              Dropzone.autoDiscover = false;
              var myDropzone = new Dropzone("#dropzone" , {
                paramName: "userfile", // The name that will be used to transfer the file
                maxFilesize: 250, // MB
            
                addRemoveLinks : true,
                dictDefaultMessage :
                '<span class="bigger-150 bolder"><i class="ace-icon fa fa-caret-right red"></i> Drop files</span> to upload \
                <span class="smaller-80 grey">(or click)</span> <br /> \
                <i class="upload-icon ace-icon fa fa-cloud-upload blue fa-3x"></i>'
            ,
                dictResponseError: 'Error while uploading file!',
                
                //change the previewTemplate to use Bootstrap progress bars
                previewTemplate: "<div class=\"dz-preview dz-file-preview\">\n  <div class=\"dz-details\">\n    <div class=\"dz-filename\"><span data-dz-name></span></div>\n    <div class=\"dz-size\" data-dz-size></div>\n    <img data-dz-thumbnail />\n  </div>\n  <div class=\"progress progress-small progress-striped active\"><div class=\"progress-bar progress-bar-success\" data-dz-uploadprogress></div></div>\n  <div class=\"dz-success-mark\"><span></span></div>\n  <div class=\"dz-error-mark\"><span></span></div>\n  <div class=\"dz-error-message\"><span data-dz-errormessage></span></div>\n</div>"
              });
              
               $(document).one('ajaxloadstart.page', function(e) {
                    try {
                        myDropzone.destroy();
                    } catch(e) {}
               });
            
            } catch(e) {
              alert('Dropzone.js does not support older browsers!'+ e);
            }
            
            });

 
 $table_image.dataTable({
        "language":{"url":"<?php echo base_url();?>assets/js/Indonesian-Alternative.json"},
         bAutoWidth: true,
         "aoColumns": [
                      { "bSortable": true},
                      null,null,null,
                      { "bSortable": false }
                    ],
         "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        ajax: {
            url: "<?php echo base_url().'uploadFile/ajax_list';?>",
            type: "POST",
            async: true
        }

 });

 $('#tglPub').datetimepicker({format: 'DD/MM/YYYY HH:mm'}).next().on(ace.click_event, function(){
                    $(this).prev().focus();

                });
            
                //or change it into a date range picker
                //$('.input-daterange').datepicker({autoclose:true});
</script>    