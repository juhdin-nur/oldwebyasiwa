
     <!-- datepicker modal-->
        <style>
.datepicker{z-index:1151 !important;}
</style>
        
                        


                        

                        <div class="row">
                            <div class="col-xs-12">
                                <!-- PAGE CONTENT BEGINS -->
                                <div class="row">
                                    <div class="col-xs-12">
                                        <h3 class="header smaller lighter blue"></h3>

                                        <div class="clearfix">
                                        <div class="pull-left" ><button class="btn btn-white btn-info btn-bold" onclick="add_user()">
                                                <i class="fa fa-plus bigger-110 blue" title="Tambah Menu"></i>
                                            </button></div>
                                            <div class="pull-left" ><button class="btn btn-white btn-info btn-bold" onclick="generate_menu()">
                                                <i class="fa fa-adjust bigger-110 blue" title="Generate Menu"></i>
                                            </button></div>
                                            <div class="pull-right tableTools-container"></div>
                                        </div>
                                        <div class="table-header" align="center">
                                            Menu Management
                                        </div>

                                        <!-- div.table-responsive -->

                                        <!-- div.dataTables_borderWrap -->
                                        <div>
                                            <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Title</th>
                                                        <th>Url</th>
                                                        <th>Url Admin</th>
                                                        <th>Target</th>
                                                        <th>Sub Menu</th>
                                                        <th>Is Parent</th>
                                                        <th>Show Menu</th>
                                                        <th>Show on Admin</th>
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

                                <div id="modal-wizard" class="modal">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div id="modal-wizard-container">
                                                <div class="modal-header">
                                                    <ul class="steps">
                                                        <li data-step="1" class="active">
                                                            <span class="step">1</span>
                                                            <span class="title">Validation states</span>
                                                        </li>

                                                        <li data-step="2">
                                                            <span class="step">2</span>
                                                            <span class="title">Alerts</span>
                                                        </li>

                                                        <li data-step="3">
                                                            <span class="step">3</span>
                                                            <span class="title">Payment Info</span>
                                                        </li>

                                                        <li data-step="4">
                                                            <span class="step">4</span>
                                                            <span class="title">Other Info</span>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="modal-body step-content">
                                                    <div class="step-pane active" data-step="1">
                                                        <div class="center">
                                                            <h4 class="blue">Step 1</h4>
                                                        </div>
                                                    </div>

                                                    <div class="step-pane" data-step="2">
                                                        <div class="center">
                                                            <h4 class="blue">Step 2</h4>
                                                        </div>
                                                    </div>

                                                    <div class="step-pane" data-step="3">
                                                        <div class="center">
                                                            <h4 class="blue">Step 3</h4>
                                                        </div>
                                                    </div>

                                                    <div class="step-pane" data-step="4">
                                                        <div class="center">
                                                            <h4 class="blue">Step 4</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="modal-footer wizard-actions">
                                                <button class="btn btn-sm btn-prev" disabled="disabled">
                                                    <i class="ace-icon fa fa-arrow-left"></i>
                                                    Prev
                                                </button>

                                                <button class="btn btn-success btn-sm btn-next" data-last="Finish">
                                                    Next
                                                    <i class="ace-icon fa fa-arrow-right icon-on-right"></i>
                                                </button>

                                                <button class="btn btn-danger btn-sm pull-left" data-dismiss="modal">
                                                    <i class="ace-icon fa fa-times"></i>
                                                    Cancel
                                                </button>
                                            </div>
                                        </div>
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

<script src="<?php echo base_url();?>assets/js/jquery.2.1.1.min.js"></script>
<script src="<?php echo base_url();?>assets/js/lobibox.js"></script>
<script src="<?php echo base_url();?>assets/js/select2.min.js"></script>

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

        <script type="text/javascript">
         var save_method; // use a global for the submit and return data rendering in the examples
         var oTable1;

        function save()
        {
            $('#btnSave').text('saving...'); //change button text
            $('#btnSave').attr('disabled',true); //set button disable 
            var url;

            if(save_method == 'add') {
                url = "<?php echo site_url('cmenumg/ajax_add')?>";
            }
            else 
            {
                url = "<?php echo site_url('cmenumg/ajax_update')?>";
            }

    // ajax adding data to database
            $.ajax({
                url : url,
                type: "POST",
                data: $('#validation-form').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    if(data.status) //if success close modal and reload ajax table
                    {
                        $('#modal_form').modal('hide');
                        Lobibox.notify('success',{
                            size:'normal',
                            msg:'Data Berhasil disimpan'
                        });
                    }
                    else
                    {
                        for (var i = 0; i < data.inputerror.length; i++) 
                        {
                            $('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
                            $('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]); //select span help-block class set text error string
                        }
                    }
                    $('#btnSave').text('Save'); //change button text
                    $('#btnSave').attr('disabled',false); //set button enable 
                    reload_table();


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
        function loadTarget()
        {
            $.ajax({
                url : "<?php echo site_url('cmenumg/listTarget')?>",
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    $('[id="coba"]').html(data.hasil);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            }); 
        }
function generate_menu()
{
    $.ajax({
        url : "<?php echo site_url('cmenumg/generate_menu')?>",
        type:"GET",
        dataType:"JSON",
        success:function(data)
        {
            //alert(data.status);
            Lobibox.notify('success', {
                size: 'normal',
                msg: data.status
            });

        },
        error:function (jqXHR,textStatus,errorThrown)
        {
            Lobibox.notify('error', {
                size: 'normal',
                msg: 'Gagal ' + errorThrown
            });
        }

    });
}
function add_user()
{
    save_method = 'add';
    $('#validation-form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
function formatState (state) {
  if (!state.id) { return state.text; }
  var $state = $(
    '<span>' + state.id + ':' + state.title +'</span>'
  );
  return $state;
};
function template(data,container)
{
    return data.text;
};
                $("#select2").css('width','200px').select2({
                     allowClear:true,
                     placeholder: 'Search',
                     width:'resolve',
                     ajax : {
                        dataType:'json',
                        delay:2000,
                        url: "<?php echo site_url('cmenumg/get_menu')?>",
                       data: function (term) {
      return {
        term: term, // search term
        //page: params.page
      };
    },
    processResults: function (data) {
      // parse the results into the format expected by Select2
      // since we are using custom formatting functions we do not need to
      // alter the remote JSON data, except to indicate that infinite
      // scrolling can be used
      //params.page = params.page || 1;

      return {
        results: data
       /* pagination: {
          more: (params.page * 30) < data.total_count
        }*/
      };
    },
    cache: true
  },
  escapeMarkup: function (markup) { return markup; }, // let our custom formatter work
  templateResult: formatState, // omitted for brevity, see the source of this page
  templateSelection: formatState

                });
    function formatku2(author) {
            if (author.title!=undefined) return author.text;
            return author.text;
}
                function formatku (state) {

  return  '<b>' + state.text + '</b>';
};
                $("#target").css('width','200px').select2({
                    placeholder:'Search',
                    allowClear:true,
                    escapeMarkup: function (m) { return m; }, // we do not want to escape markup since we are displaying html in results
                    templateResult:formatku,
                    templateSelection:formatku2
                });
    $('#modal_form').on('shown.bs.modal', function () {
            if(!ace.vars['touch']) {
                $(this).find('.chosen-container').each(function(){
                    $(this).find('a:first-child').css('width' , '210px');
                    $(this).find('.chosen-drop').css('width' , '210px');
                    $(this).find('.chosen-search input').css('width' , '200px');
                });
            }
        })
    .modal('show'); // show bootstrap modal
    $('.modal-title').text('Tambah Menu'); // Set Title to Bootstrap modal title

}
function listKelas(){
$.ajax({
        url : "<?php echo site_url('cmenumg/loadKelas')?>",
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
            $('[id="coba"]').html(data.title);
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    }); 
}
function delete_menu(id)
{
    if(Lobibox.confirm({
        msg: "Are you sure you want to delete this user?",
        callback : function($this,type,ev)
        {
            if(type==='yes')
            {
                $.ajax({
                url : "<?php echo site_url('cmenumg/ajax_delete')?>/"+id,
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
function edit_menu(id)
{
    save_method = 'update';
    $('#validation-form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string

    //Ajax Load data from ajax
    $.ajax({
        url : "<?php echo site_url('cmenumg/ajax_edit/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
            $('[name="id"]').val(data.id);
            $('[name="title"]').val(data.title);
            $('[name="icon"]').val(data.icon);
            $('[name="url"]').val(data.url);
            $('[id="link_type"]').val(data.link_type);

            $submenu = '<option value="'+data.parent_id+'" selected="selected"></option>';
            //$('[name="parent_id"]').val(data.parent_id).trigger('change');

            function formatState (state) {
  if (!state.id) { return state.text; }
  var $state = $(
    '<span>' + state.id + ':' + state.title +'</span>'
  );
  return $state;
};
function template(data,container)
{
    return data.text;
};
                $("#select2").css('width','200px').select2({
                     allowClear:true,
                     placeholder: 'Search',
                     width:'resolve',
                     ajax : {
                        dataType:'json',
                        delay:2000,
                        url: "<?php echo site_url('cmenumg/get_menu')?>",
                       data: function (term) {
      return {
        term: term, // search term
        //page: params.page
      };
    },
    processResults: function (data) {
      // parse the results into the format expected by Select2
      // since we are using custom formatting functions we do not need to
      // alter the remote JSON data, except to indicate that infinite
      // scrolling can be used
      //params.page = params.page || 1;

      return {
        results: data
       /* pagination: {
          more: (params.page * 30) < data.total_count
        }*/
      };
    },
    cache: true
  },
  escapeMarkup: function (markup) { return markup; }, // let our custom formatter work
  templateResult: formatState, // omitted for brevity, see the source of this page
  templateSelection: formatState

                });

            //$target = '<option value="'+data.target+'" selected="selected">'+ data.target +'</option>';
            $("#target").val(data.target).trigger('change');
function formatku2(author) {
            if (author.title!=undefined) return author.text;
            return author.text;
}
                function formatku (state) {

  return  '<b>' + state.text + '</b>';
};
                $("#target").css('width','200px').select2({
                    placeholder:'Search',
                    allowClear:true,
                    dropdownAutoWidth: true,
                    processResults: function (data) {
            return {
              results: data
            };
          },
          cache: true,
                    escapeMarkup: function (m) { return m; }, // we do not want to escape markup since we are displaying html in results
                    templateResult:formatku,
                    templateSelection:formatku2
                });

 
           if(data.is_parent == 1 )
            {
                $('input[name="is_parent"]').prop("checked",true);
            }
            else
            {
                $('input[name="is_parent"]').removeAttr("checked");
            }
            if(data.show_menu == 1 )
            {
                $('input[name="show_menu"]').prop("checked",true);
            }
            else
            {
                $('input[name="show_menu"]').removeAttr("checked");
            }
            if(data.showonadmin == 1 )
            {
                $('input[name="showonadmin"]').prop("checked",true);
            }
            else
            {
                $('input[name="showonadmin"]').removeAttr("checked");
            }
            //$('[name="dob"]').datepicker('update',data.dob);
            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit'); // Set title to Bootstrap modal title

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
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
                      null, null,null, null, null,null,null,
                      { "bSortable": false }
                    ],
                    "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
                    "aaSorting": [],
                    ajax: {
            url: "<?php echo base_url().'cmenumg/ajax_list';?>",
            type: "POST",
            async: true
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
                
                $('.chosen-select').css('width','200px').chosen({allow_single_deselect:true}); 


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
            
            
                $.mask.definitions['~']='[+-]';
                $('#phone').mask('(999) 999-9999');
            
                jQuery.validator.addMethod("phone", function (value, element) {
                    return this.optional(element) || /^\(\d{3}\) \d{3}\-\d{4}( x\d{1,6})?$/.test(value);
                }, "Enter a valid phone number.");
                

                $('#validation-form').validate({
                    errorElement: 'div',
                    errorClass: 'help-block',
                    focusInvalid: true,
                    ignore: "",
                    rules: {
                        title: {
                            required: true,
                        },
                        password: {
                            required: true,
                            minlength: 5
                        },
                        password2: {
                            required: true,
                            minlength: 5,
                            equalTo: "#password"
                        },
                        name: {
                            required: true
                        },
                        phone: {
                            required: true,
                            phone: 'required'
                        },
                        agree: {
                            required: true,
                        }
                    },
            
                    messages: {
                        email: {
                            required: "Please provide a valid email.",
                            email: "Please provide a valid email."
                        },
                        password: {
                            required: "Please specify a password.",
                            minlength: "Please specify a secure password."
                        },
                        state: "Please choose state",
                        subscription: "Please choose at least one option",
                        gender: "Please choose gender",
                        agree: "Please accept our policy"
                    },
            
            
                    highlight: function (e) {
                        $(e).closest('.form-group').removeClass('has-info').addClass('has-error');
                    },
                    success: function (e) {
                        $(e).closest('.form-group').removeClass('has-error').addClass('has-success');//.addClass('has-info');
                        $(e).remove();
                    },
                    errorPlacement: function (error, element) {
                        if(element.is('input[type=checkbox]') || element.is('input[type=radio]')) {
                            var controls = element.closest('div[class*="col-"]');
                            if(controls.find(':checkbox,:radio').length > 1) controls.append(error);
                            else error.insertAfter(element.nextAll('.lbl:eq(0)').eq(0));
                        }
                        else if(element.is('.select2')) {
                            error.insertAfter(element.siblings('[class*="select2-container"]:eq(0)'));
                        }
                        else if(element.is('.chosen-select')) {
                            error.insertAfter(element.siblings('[class*="chosen-container"]:eq(0)'));
                        }
                        else error.insertAfter(element.parent());
                    },
            
                    submitHandler: function (form) {
                        //$('#modal_form').modal('hide');
                        save();
                        //reload_table();
                    },
                    invalidHandler: function (form) {
                    }
                });
                
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
    
<!-- Bootstrap modal -->
<div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Menu Form</h3>
            </div>
            <div class="modal-body form">
                <form action="#" id="validation-form" class="form-horizontal">
                                                            <div class="form-group">
                                                                <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="title">Title</label>

                                                                <div class="col-xs-12 col-sm-9">
                                                                    <div class="clearfix">
                                                                    <input type="text" name="id" id="id" class="col-xs-12 col-sm-6" hidden="true">
                                                                        <input type="text" name="title" id="title" class="col-xs-12 col-sm-6" placeholder="English;Bahasa;Deutch;">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="space-2"></div>

                                                            <div class="form-group">
                                                                <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="icon">Icon Menu</label>

                                                                <div class="col-xs-12 col-sm-9">
                                                                    <div class="clearfix">
                                                                        <input type="text" name="icon" id="icon" class="col-xs-12 col-sm-8" placeholder="icon fa fa-time">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="space-2"></div>

                                                            <div class="form-group">
                                                                <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="link_type">Link Admin</label>

                                                                <div class="col-xs-12 col-sm-9">
                                                                    <div class="clearfix">
                                                                        <input type="text" name="link_type" id="link_type" class="col-xs-12 col-sm-8">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="hr hr-dotted"></div>

                                                            <div class="form-group">
                                                                <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="url">URL</label>

                                                                <div class="col-xs-12 col-sm-9">
                                                                    <div class="clearfix">
                                                                        <input type="text" id="url" name="url" class="col-xs-12 col-sm-8" placeholder="http://yasiwa-indonesia.org">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="space-2"></div>

                                                            <div class="form-group">
                                                                <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="target">Target</label>

                                                                <div class="col-xs-12 col-sm-9">
                                                                    <select class="select_target" id="target" data-tags="true" name="target">
                                                                        <option value=""></option>
                                                                        <option value="_blank">New Tab</option>
                                                                        <option value="_self">On the Current Page</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="space-2"></div>
                                                            <div class="form-group">
                                                                <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="parent_id">Parent Id</label>

                                                                <div class="col-xs-12 col-sm-9">
                                                                    <select id="select2" name="parent_id" class="select2" >
                                                                    <option value="">  </option>
                                                                    </select>    
                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="space-2"></div>
                                                            <div class="form-group">
                                                                <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="is_parent">Is Parent</label>

                                                                <div class="col-xs-12 col-sm-9">
                                                                    <div class="clearfix">
                                                                         
                                                                                <input name="is_parent" class="ace ace-switch ace-switch-6" value="1" type="checkbox"/>
                                                                                <span class="lbl"></span>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="space-2"></div>
                                                            <div class="form-group">
                                                                <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="show_menu">Show Menu</label>
                                                                <div class="col-xs-12 col-sm-9">
                                                                    <div class="clearfix">
                                                                         
                                                                                <input name="show_menu" class="ace ace-switch ace-switch-6" value="1" type="checkbox"/>
                                                                                <span class="lbl"></span>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="space-2"></div>
                                                            <div class="form-group">
                                                                <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="showonadmin">Show on admin</label>
                                                                <div class="col-xs-12 col-sm-9">
                                                                    <div class="clearfix">
                                                                         
                                                                                <input name="showonadmin" class="ace ace-switch ace-switch-6" value="1" type="checkbox"/>
                                                                                <span class="lbl"></span>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <!-- <div class="form-group">
                                                                <div class="col-xs-12 col-sm-4 col-sm-offset-3">
                                                                    <label>
                                                                        <input name="agree" id="agree" type="checkbox" class="ace">
                                                                        <span class="lbl"> I accept the policy</span>
                                                                    </label>
                                                                </div>
                                                            </div> -->
                                                        </form>
            </div>
            <div class="modal-footer">
                <button id="btnSave" type="button" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->

