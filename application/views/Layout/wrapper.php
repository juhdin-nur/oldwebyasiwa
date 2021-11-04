<?php
	require_once('opTag.php');
	//require_once('opHeader.php');
	$CI =& get_instance();
	$CI->load->model('mhomepg');
	$result = $CI->mhomepg->getDataHeader('Header',1);
	$result_header = array('result_header'=>$result);
	$this->load->view('Layout/opHeader',$result_header);
	require_once('clHeader.php');
	//require_once('opKonten.php');
	require_once('konten.php');
	//require_once('clKonten.php');
	require_once('footer.php');
	require_once('clTag.php');
