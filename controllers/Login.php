<?php
class Login extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('mlogin');
        $this->load->model('Mhomepg','home');
    }
	function index()
	{
			
		$session = $this->session->userdata('isLogin');
		if($session==FALSE)
		{
			$data=array('title'		=>'Yasiwa Home',
						'isi'  		=>'Konten/home',
						'news'      => $this->home->get_news('home')
						);
			$this->load->view('Layout/wrapper',$data);
		}
		else
		{
			$data['title']="Yasiwa";
			$this->load->view('Admin/home_admin',$data);			
		}
	}
	public function do_login()
	{
		$username = $this->input->post("uname");
		$password = $this->input->post("pass");
		
		$cek = $this->mlogin->cekuser($username,md5($password));
		if(count($cek)==1)
		{
			foreach($cek as $baris)
			{
				$level = $baris['level'];
			}
			$this->session->set_userdata(array('isLogin'=>TRUE,'uname'=>$username,'lvl'=>$level));
			redirect ('dashboard','refresh');
		}
		else
		{
			echo "<script>alert('Gagal Login')</script>";
			redirect(base_url().'login','refresh');
		}
	}
}