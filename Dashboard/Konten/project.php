
     <!-- datepicker modal-->
        <style>
.datepicker{z-index:1151 !important;}
</style>
        
         

                        <div class="row">
                            <div class="col-xs-12">
                                <!-- PAGE CONTENT BEGINS -->


                                <div class="row">
                                    <div class="col-xs-12">
                                        <h3 class="header smaller lighter blue">Project</h3>

                                        <div class="clearfix">
                                        <div class="pull-left" ><a href="javascript:void(0)" class="klik" id="dashboard/addProject"><button class="btn btn-white btn-info btn-bold">
                                                <i class="fa fa-plus bigger-110 blue" title="Tambah Menu"></i>
                                            </button></a></div>
                                            <div class="pull-right tableTools-container"></div>
                                        </div>
                                        <div class="table-header" align="center">
                                            List Of News or Article
                                        </div>

                                        <!-- div.table-responsive -->

                                        <!-- div.dataTables_borderWrap -->
                                        <div>
                                            <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Title</th>
                                                        <th>Content</th>
                                                        <th>Project Type</th>
                                                        <th>Published date</th>
                                                        <th>Publised</th>
                                                        <th>Action</th>

                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                <div class="col-xs-12">
                                        <div class="page-content">
                        

                        <div class="row">
                            <div class="col-xs-12">
                                <!-- PAGE CONTENT BEGINS -->

                                <div class="hr hr-18 hr-double dotted"></div>
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div>
                                    </div>
                                </div>
                            </div><!-- /.col -->
                        </div><!-- /.row -->
<!-- page specific plugin styles -->

<script src="<?php echo base_url();?>assets/js/jquery.2.1.1.min.js"></script>
<script>var $j = jQuery.noConflict(true);</script>
<script src="<?php echo base_url();?>assets/js/lobibox.js"></script>
<script src="<?php echo base_url();?>assets/js/select2.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/select2.css" />
<!--<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0-beta.3/css/select2.min.css" />-->

        <!-- basic scripts -->

        <!--[if !IE]> -->
        
        <!-- <![endif]-->

        <!--[if IE]>
<script src="<?php echo base_url();?>assets/js/jquery.1.11.1.min.js"></script>
<![endif]-->

        <!--[if !IE]> -->
        

        <!-- <![endif]-->

        <!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='<?php echo base_url();?>assets/js/jquery1x.min.js'>"+"<"+"/script>");
</script>
<![endif]-->
        <script type="text/javascript">
            if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo base_url();?>assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");

        </script>
        <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>


        <!-- page specific plugin scripts -->
        <script src="<?php echo base_url();?>assets/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.dataTables.bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/dataTables.tableTools.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/dataTables.colVis.min.js"></script>

        <!--[if lte IE 8]>
          <script src="assets/js/excanvas.min.js"></script>
        <![endif]-->
        <script src="<?php echo base_url();?>assets/js/jquery-ui.custom.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.ui.touch-punch.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/bootstrap-datepicker.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/bootstrap-timepicker.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/moment.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/daterangepicker.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/bootstrap-datetimepicker.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/bootstrap-colorpicker.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.knob.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.autosize.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.inputlimiter.1.3.1.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.maskedinput.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/bootstrap-tag.min.js"></script>
        


        <!-- ace scripts -->
        <script src="<?php echo base_url();?>assets/js/ace-elements.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/ace.min.js"></script>        
        <!-- inline scripts related to this page -->
        
        <script type="text/javascript">
         var save_method; // use a global for the submit and return data rendering in the examples
         var oTable1;
        

function delete_prj(id)
{
    if(Lobibox.confirm({
        msg: "Are you sure you want to delete this user?",
        callback : function($this,type,ev)
        {
            if(type==='yes')
            {
                $.ajax({
                async: true,
                url : "<?php echo site_url('posProject/ajax_delete')?>/"+id,
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
function edit_prj(id)
{
    //Ajax Load data from ajax
        var url = '<?php echo base_url();?>' + 'dashboard/editPrj';
        var prj_tipe ;
        $j('.isi_halaman').load(url);
    $j.ajax({
        async: true,
        url : "<?php echo site_url('posProject/ajax_edit/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        delay:500,
        success: function(data)
        {
            $j('[name="id"]').val(data.id);
            $j('[name="title"]').val(data.title);
            $j('[name="judul"]').val(data.judul);
            $j('[name="lokasi"]').val(data.loc);
            $j('[name="tglPub"]').val(data.tglPub);
            $j('[id="txtbahasa"]').val(data.isi);
            $j('[id="txtenglish"]').val(data.konten);
            if(data.prj_type=='Current_Project')
            {
                prj_tipe = "1";
            }
            else
            {
                prj_tipe = "2";
            }
            $j('[name="prj_type"][value="'+prj_tipe+'"]').prop('checked',true);
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            Lobibox.notify('error', {
                size: 'normal',
                msg: 'Gagal ' + errorThrown
            });
        }
    });
}
            jQuery(function($) {
                //Datetime picker  
                Lobibox.base.DEFAULTS = $.extend({}, Lobibox.base.DEFAULTS, {
            iconSource: 'fontAwesome'
        });
        Lobibox.notify.DEFAULTS = $.extend({}, Lobibox.notify.DEFAULTS, {
            iconSource: 'fontAwesome'
        });  

                $('.date-picker').datepicker({
                    autoclose: true,
                    todayHighlight: true
                })
                //show datepicker when clicking on the icon
                .next().on(ace.click_event, function(){
                    $(this).prev().focus();
                });
            
                //or change it into a date range picker
                $('.input-daterange').datepicker({autoclose:true});
                
                // $('.chosen-select').chosen({allow_single_deselect:true}); 
                    //resize the chosen on window resize
                //initiate dataTables plugin
                oTable1 = 
                $('#dynamic-table')
                //.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
                .dataTable( {
                    "language":{"url":"<?php echo base_url();?>assets/js/Indonesian-Alternative.json"},
                    bAutoWidth: true,
                    "aoColumns": [
                      { "bSortable": true},
                      null, null,null,null,
                      { "bSortable": false }
                    ],
                    "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
                    "aaSorting": [],
                    ajax: {
                        async: true,
            url: "<?php echo base_url().'posProject/ajax_list';?>",
            type: "POST"
        },
            
                    //,
                    //"sScrollY": "200px",
                    //"bPaginate": false,
            
                    //"sScrollX": "100%",
                    //"sScrollXInner": "120%",
                    //"bScrollCollapse": true,
                    //Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
                    //you may want to wrap the table inside a "div.dataTables_borderWrap" element
            
                    //"iDisplayLength": 50
                } );
                //oTable1.fnAdjustColumnSizing();
            
            
                //TableTools settings
                TableTools.classes.container = "btn-group btn-overlap";
                TableTools.classes.print = {
                    "body": "DTTT_Print",
                    "info": "tableTools-alert gritter-item-wrapper gritter-info gritter-center white",
                    "message": "tableTools-print-navbar"
                }
            
                //initiate TableTools extension
                var tableTools_obj = new $.fn.dataTable.TableTools( oTable1, {
                    "sSwfPath": "assets/swf/copy_csv_xls_pdf.swf",
                    
                    "sRowSelector": "td:not(:last-child)",
                    "sRowSelect": "multi",
                    "fnRowSelected": function(row) {
                        //check checkbox when row is selected
                        try { $(row).find('input[type=checkbox]').get(0).checked = true }
                        catch(e) {}
                    },
                    "fnRowDeselected": function(row) {
                        //uncheck checkbox
                        try { $(row).find('input[type=checkbox]').get(0).checked = false }
                        catch(e) {}
                    },
            
                    "sSelectedClass": "success",
                    "aButtons": [
                        
                        
                    ]
                } );
                //we put a container before our table and append TableTools element to it
                $(tableTools_obj.fnContainer()).appendTo($('.tableTools-container'));
                
                //also add tooltips to table tools buttons
                //addding tooltips directly to "A" buttons results in buttons disappearing (weired! don't know why!)
                //so we add tooltips to the "DIV" child after it becomes inserted
                //flash objects inside table tools buttons are inserted with some delay (100ms) (for some reason)
                setTimeout(function() {
                    $(tableTools_obj.fnContainer()).find('a.DTTT_button').each(function() {
                        var div = $(this).find('> div');
                        if(div.length > 0) div.tooltip({container: 'body'});
                        else $(this).tooltip({container: 'body'});
                    });
                }, 200);
                
                
                
                //ColVis extension
                var colvis = new $.fn.dataTable.ColVis( oTable1, {
                    "buttonText": "<i class='fa fa-search'></i>",
                    "aiExclude": [0, 6],
                    "bShowAll": true,
                    //"bRestore": true,
                    "sAlign": "right",
                    "fnLabel": function(i, title, th) {
                        return $(th).text();//remove icons, etc
                    }
                    
                }); 
                
                //style it
                $(colvis.button()).addClass('btn-group').find('button').addClass('btn btn-white btn-info btn-bold')
                
                //and append it to our table tools btn-group, also add tooltip
                $(colvis.button())
                .prependTo('.tableTools-container .btn-group')
                .attr('title', 'Show/hide columns').tooltip({container: 'body'});
                
                //and make the list, buttons and checkboxed Ace-like
                $(colvis.dom.collection)
                .addClass('dropdown-menu dropdown-light dropdown-caret dropdown-caret-right')
                .find('li').wrapInner('<a href="javascript:void(0)" />') //'A' tag is required for better styling
                .find('input[type=checkbox]').addClass('ace').next().addClass('lbl padding-8');
            
            
                
                /////////////////////////////////
                //table checkboxes
                $('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);
                
                //select/deselect all rows according to table header checkbox
                $('#dynamic-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
                    var th_checked = this.checked;//checkbox inside "TH" table header
                    
                    $(this).closest('table').find('tbody > tr').each(function(){
                        var row = this;
                        if(th_checked) tableTools_obj.fnSelect(row);
                        else tableTools_obj.fnDeselect(row);
                    });
                });
                
                //select/deselect a row when the checkbox is checked/unchecked
                $('#dynamic-table').on('click', 'td input[type=checkbox]' , function(){
                    var row = $(this).closest('tr').get(0);
                    if(!this.checked) tableTools_obj.fnSelect(row);
                    else tableTools_obj.fnDeselect($(this).closest('tr').get(0));
                });
                
            
                
                
                    $(document).on('click', '#dynamic-table .dropdown-toggle', function(e) {
                    e.stopImmediatePropagation();
                    e.stopPropagation();
                    e.preventDefault();
                });
                
                
                //And for the first simple table, which doesn't have TableTools or dataTables
                //select/deselect all rows according to table header checkbox
                var active_class = 'active';
                $('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
                    var th_checked = this.checked;//checkbox inside "TH" table header
                    
                    $(this).closest('table').find('tbody > tr').each(function(){
                        var row = this;
                        if(th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
                        else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
                    });
                });
                
                //select/deselect a row when the checkbox is checked/unchecked
                $('#simple-table').on('click', 'td input[type=checkbox]' , function(){
                    var $row = $(this).closest('tr');
                    if(this.checked) $row.addClass(active_class);
                    else $row.removeClass(active_class);
                });
            
                
            
                /********************************/
                //add tooltip for small view action buttons in dropdown menu
                $('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});

                //formvalidation
                var orang = [{ id: 0, text: 'enhancement' }, { id: 1, text: 'bug' }, { id: 2, text: 'duplicate' }, { id: 3, text: 'invalid' }, { id: 4,text: 'wontfix' }];
                
                


                $('.select2').css('width','200px').select2()
                .on('change', function(){
                    $(this).closest('form').validate().element($(this));
                }); 
                
            
            
                var validation = false;
                $('#fuelux-wizard-container').ace_wizard({
                    //step: 2 //optional argument. wizard will jump to step "2" at first
                    //buttons: '.wizard-actions:eq(0)'
                })
                .on('actionclicked.fu.wizard' , function(e, info){
                    if(info.step == 1 && validation) {
                        if(!$('#validation-form').valid()) e.preventDefault();
                    }
                })
                .on('finished.fu.wizard', function(e) {
                    bootbox.dialog({
                        message: "Thank you! Your information was successfully saved!", 
                        buttons: {
                            "success" : {
                                "label" : "OK",
                                "className" : "btn-sm btn-primary"
                            }
                        }
                    });
                }).on('stepclick.fu.wizard', function(e){
                    //e.preventDefault();//this will prevent clicking and selecting steps
                });
            
            
                //jump to a step
                /**
                var wizard = $('#fuelux-wizard-container').data('fu.wizard')
                wizard.currentStep = 3;
                wizard.setState();
                */
            
                //determine selected step
                //wizard.selectedItem().step
            
            
            
                //hide or show the other form which requires validation
                //this is for demo only, you usullay want just one form in your application
                $('#skip-validation').removeAttr('checked').on('click', function(){
                    validation = this.checked;
                    if(this.checked) {
                        $('#sample-form').hide();
                        $('#validation-form').removeClass('hide');
                    }
                    else {
                        $('#validation-form').addClass('hide');
                        $('#sample-form').show();
                    }
                })
            
            
            
                //documentation : http://docs.jquery.com/Plugins/Validation/validate
        
                

                
                $('#btnSave').click(function () {
        
                 $("#validation-form").submit();  // validate and submit
                });


                
                
                // $('#modal-wizard-container').ace_wizard();
                // $('#modal-wizard .wizard-actions .btn[data-dismiss=modal]').removeAttr('disabled');
                
                
                /**
                $('#date').datepicker({autoclose:true}).on('changeDate', function(ev) {
                    $(this).closest('form').validate().element($(this));
                });
                
                $('#mychosen').chosen().on('change', function(ev) {
                    $(this).closest('form').validate().element($(this));
                });
                */
                
                
                $(document).one('ajaxloadstart.page', function(e) {
                    //in ajax mode, remove remaining elements before leaving page
                    $('[class*=select2]').remove();
                });

                $(".coba").css('width','200px').select2();
                
                //tooltip placement on right or left
                function tooltip_placement(context, source) {
                    var $source = $(source);
                    var $parent = $source.closest('table')
                    var off1 = $parent.offset();
                    var w1 = $parent.width();
            
                    var off2 = $source.offset();
                    //var w2 = $source.width();
            
                    if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
                    return 'left';
                }
            })
function reload_table()
{
    oTable1.api().ajax.reload(null,false); //reload datatable ajax 
}
        </script>
    

                            
<script type="text/javascript">
$j(document).ready(function () {
    $j('.klik').click(function() {
        var url = '<?php echo base_url();?>' + $j(this).attr('id');
        $j('.isi_halaman').load(url);
        return false;
    });
});
</script>              