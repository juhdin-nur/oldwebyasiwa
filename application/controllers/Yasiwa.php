<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Yasiwa extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mhomepg','home');
		$this->load->helper('text');
	}
	public function index()
	{
		$data=array('title'		=>'Home',
						'isi'  		=>'Konten/home',
						'news'      => $this->home->get_news('home')
						);
			$this->load->view('Layout/wrapper',$data);
	}
	public function ourteam()
	{
		$data=array('title'		=>'Our Team',
						'isi'  		=>'Konten/OurTeam',
						'news'      => $this->home->get_news('ourteam')
						);
			$this->load->view('Layout/wrapper',$data);
	}
	public function visi()
	{
		$data=array('title'		=>'Vision & Mission',
						'isi'  		=>'Konten/Visi',
						'news'      => $this->home->get_news('visiandmisi')
						);
			$this->load->view('Layout/wrapper',$data);
	}
	public function gallery()
	{
		$data=array('title'		=>'Yasiwa\'s Gallery',
						'isi'  		=>'Konten/galleryfo'
						);
			$this->load->view('Layout/wrapper',$data);
	}
	public function slideshow()
	{
		$data=array('title'		=>'Yasiwa\'s Slideshow',
						'isi'  		=>'Konten/slideshow'
						);
			$this->load->view('Layout/wrapper',$data);
	}
	public function biodiversity()
	{
		$data=array('title'		=>'Yasiwa\'s Biodiversity',
						'isi'  		=>'Konten/biodiversity'
						);
			$this->load->view('Layout/wrapper',$data);
	}
	public function organization()
	{
		$data=array('title'		=>'Organization Chart',
						'isi'  		=>'Konten/Visi',
						'news'      => 'ini halaman visi'
						);
			$this->load->view('Layout/wrapper',$data);
	}
	public function how_we_work()
	{
		$data=array('title'		=>'How We Work',
						'isi'  		=>'Konten/hww',
						'news'      => $this->home->get_news('hww')
						);
			$this->load->view('Layout/wrapper',$data);
	}
	// public function project()
	// {
	// 	$data=array('title'		=>'Muara Ancalong\'s Project',
	// 					'isi'  		=>'Konten/dproject',
	// 					'news'      => 'ini halaman project'
	// 					);
	// 		$this->load->view('Layout/wrapper',$data);
	// }
	public function getHeader($header,$aktif)
	{
		$hasil = $this->home->getDataHeader($header,$aktif);
		var_dump($hasil);
	}
	public function get_project_type($prj_type)
	{

	}
	public function project($prj_type='Current_Project',$offset=0)
	{
		$config['total_rows'] = $this->home->count_project($prj_type);
		$page_url =$config['base_url'] = base_url().'Yasiwa/project/'.$prj_type;
		$config['per_page'] = 3;
		$config['uri_segment'] = 4;
		 /*Class bootstrap pagination yang digunakan*/
		$config['full_tag_open'] = "<ul class='pagination pagination-sm' id='cari' style='position:relative; top:-25px;'>";
		$config['full_tag_close'] ="</ul>";
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = "<li class='active'><a href='javascript:void(0)'>";
		$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
		$config['next_tag_open'] = "<li>";
		$config['next_tagl_close'] = "</li>";
		$config['prev_tag_open'] = "<li>";
		$config['prev_tagl_close'] = "</li>";
		$config['first_tag_open'] = "<li>";
		$config['first_tagl_close'] = "</li>";
		$config['last_tag_open'] = "<li>";
		$config['last_tagl_close'] = "</li>";

		$this->pagination->initialize($config);

		$data=array(	'halaman'	=> $this->pagination->create_links(),
						'offset'	=>$offset,
						'title'		=>'Yasiwa\'s Project',
						'isi'  		=>'Konten/Project',
						'data'		=>$this->home->get_project($prj_type,$config['per_page'],$offset)
						);
			$this->load->view('Layout/wrapper',$data);

	}
	public function detail()
	{
		$id = $this->uri->segment(3);
		$data=array(	
						'title'		=>'Yasiwa\'s Project',
						'isi'  		=>'Konten/dproject',
						'data' 		=> $this->home->get_project_by_id($id));
		$this->load->view('Layout/wrapper',$data);
	}
}
