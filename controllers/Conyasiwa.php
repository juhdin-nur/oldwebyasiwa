<?php
class Conyasiwa extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('modelyasiwa');
    }
    
    function index(){
		
//		$data['judul'] = 'Data Yasiwa';
	//	$data['jumlah'] = $this->modelmahasiswa->hitung();
		$data['tspe'] = $this->modelyasiwa->getDataSpesies();
        $this->load->view('yasiwahome',$data);
    }
}