<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Auth {
    public function cekAuth()
	{
		$this->ci =& get_instance();
		$this->sesi  = $this->ci->session->userdata('isLogin');
		$this->hak = $this->ci->session->userdata('stat');
		if($this->sesi != TRUE){
			redirect('login','refresh');
			exit();
		}
		
	}
	public function hak_akses($kecuali="")
	{	
    	if($this->hak==$kecuali){ 
    		echo "<script>alert('Anda tidak berhak mengakses halaman ini!');</script>";
    		redirect('dashboard');
    	}elseif ($this->hak=="") {
    		echo "<script>alert('Anda belum login!');</script>";
    		redirect('login');
    	}else{
 
    	}
	}
}