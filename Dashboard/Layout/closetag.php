		<!-- basic scripts -->

		<!--[if !IE]> -->
		<!-- <![endif]-->

		<!--[if IE]>
<script src="<?php echo base_url();?>assets/js/jquery.1.11.1.min.js"></script>
<![endif]-->

		<!--[if !IE]> -->
		<script src="<?php echo base_url();?>assets/js/jquery.2.1.1.min.js"></script>

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


		<!--[if lte IE 8]>
		  <script src="assets/js/excanvas.min.js"></script>
		<![endif]-->

		


		<!-- ace scripts -->
		<script src="<?php echo base_url();?>assets/js/ace-elements.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/ace.min.js"></script>


		


		<script type="text/javascript">
	jQuery(document).ready(function() {

	$('#loading').ajaxStart(function(){
		$(this).fadeIn('slow');
	}).ajaxStop(function(){
		$(this).fadeOut('slow');
	});

	$('.nav li a[id]').click(function() {
		var url = $(this).attr('id');
	$.ajax({
		url : $(this).attr('id'),
		dataType : 'html',
		success:function(jawaban){
			$('.isi_halaman').html(jawaban);
			$('.nav li a').parents('li').removeClass('active');
			$('.nav li a[id~="' + url + '"]').parents('li').addClass('active');
			//$('.submenu').addClass('active');
		}
	});
	});
	$('ul[class="submenu"] a').click(function() {
		var url = $(this).attr('id');
		if(url!=null)
		{
	$.ajax({
		url : $(this).attr('id'),
		dataType : 'html',
		success:function(jawaban){
			$('.isi_halaman').html(jawaban);
			$('a').parents('li').removeClass('active');
			//$('a').parents('li').addClass('active open');
			$('.submenu a[id~="' + url + '"]').parents('li').addClass('active');
			//$('.submenu').addClass('active');
		}
	});}
	});

});
</script>

<script type="text/javascript">
function loadBody(){
		var url = 'dashboard/home';
		jQuery('.isi_halaman').load('<?php echo base_url();?>' + url);
		
}
</script>
	</body>
</html>
