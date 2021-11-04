<?php 
	 echo $news->konten;
 ?>
 <p sytle="font-size:12px">Published : <?php echo date_format(date_create($news->tglPub),"d-m-Y");?></p>