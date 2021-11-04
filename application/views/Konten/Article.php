<script type="text/javascript">
        jQuery(function(){
            $('#myTab').on('click','li>a',function(e){
                e.preventDefault();
                var url = $(this).attr('id');
                $.ajax({
      url:url,
      type:'POST',
      success:function(jawab){
       var $pg_data = $(jawab);
       $('.tab-content').html($pg_data.find('.tab-content>div'));
      }
     });

            });

        });
    </script>
<div class="tabbable">
	<ul class="nav nav-tabs" id="myTab">
		<li class="active">
			<a data-toggle="tab" href="#kamus" id="<?php echo base_url().'Yasiwa/article';?>" style="color:green;">
				Article
			</a>
		</li>
	</ul>
 <script type="text/javascript">
   $(document).ready(function(){
    $('.tab-content').on('click','ul#cari>li>a',function(e){
      e.preventDefault();  // prevent default behaviour for anchor tag
      var Pagination_url = $(this).attr('href'); // getting href of <a> tag
     $.ajax({
      url:Pagination_url,
      type:'POST',
      success:function(response){
       var $page_data = $(response);
       $('.tab-content').html($page_data.find('#kamus'));
      }
     });
    });
   });
  </script>      
	<div class="tab-content">
	<div id="kamus" class="tab-pane in active"><div style="margin-top:-35px;margin-left: 290px; margin-bottom: -35px;"><?php echo $halaman ?></div>
	<ul class="list-item">
    <?php 
    function get_first_image_url($data, $default_url = null) {

    /**
     * Matched with ...
     * ----------------
     *
     * [1]. `![alt text](IMAGE URL)`
     * [2]. `![alt text](IMAGE URL "optional title")`
     *
     * ... and the single-quoted version of them
     *
     */
    if(preg_match_all('#\!\[.*?\]\(([^\s]+?)( +([\'"]).*?\3)?\)#', $data, $matches)) {
        return $matches[1][0];
    }

    /**
     * Matched with ...
     * ----------------
     *
     * [1]. `<img src="IMAGE URL">`
     * [2]. `<img foo="bar" src="IMAGE URL">`
     * [3]. `<img src="IMAGE URL" foo="bar">`
     * [4]. `<img src="IMAGE URL"/>`
     * [5]. `<img foo="bar" src="IMAGE URL"/>`
     * [6]. `<img src="IMAGE URL" foo="bar"/>`
     * [7]. `<img src="IMAGE URL" />`
     * [8]. `<img foo="bar" src="IMAGE URL" />`
     * [9]. `<img src="IMAGE URL" foo="bar" />`
     *
     * ... and the uppercased version of them, and the single-quoted version of them
     *
     */
    if(preg_match_all('#<img .*?src=([\'"])([^\'"]+?)\1.*? *\/?>#i', $data, $matches)) {
        return $matches[2][0];
    }

    return $default_url; // Default image URL if nothing matched
}
    ?>
    <?php foreach($data as $row ){?>
                    	<li>
                    			<a href="<?php echo base_url().'Yasiwa/detail/'.$row->id;?>"><div class="kotakImg"><img src="<?php echo get_first_image_url($row->konten,'');?>" /></div>
                    			<h5 id="titlepj"><?php echo $row->title;?><!--Muara Ancalong Wetlands--></h5></a>
                    			<h6>Published : <?php echo $row->tglPub;?> Author : Yasiwa</h6>
                    			<br>
                            <p id="captionpj"><?php echo strip_tags(character_limiter($row->konten,700));?>
                            	<!-- Muara Ancalong is among the oldest sub district of East Kutai, Kelinjau is the capital city. 
                            	 Kelinjau is approximately 133 km northwest of Samarinda, the capital city of East Kalimantan 
										Province.
										<br>
										Mesangat wetlands have been identified by IUCN since 1993 as the natural habitat of two fresh water crocodiles,
										 Siamese crocodile (Crocodylus siamensis) and Sunda gharial (Tomistoma schlegelii) -->
										</p>
                      </li><?php }?>
                    </ul><center><?php echo $halaman ?></center>
	</div>
	</div>
</div>