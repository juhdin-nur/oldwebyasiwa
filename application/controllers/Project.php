<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller {

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
		$this->load->model('Mproject','home');
		$this->load->helper('text');
	}
	public function muara_ancalong()
	{
		$cari = 'Project_mancalong';
		$this->get_news_current($cari);
		$this->get_news_previous($cari);
	}
	public function malinau()
	{
		$cari = 'Project_malinau';
		$this->get_news_current($cari);
		$this->get_news_previous($cari);
	}
	public function papua()
	{
		$cari = 'Project_papua';
		$this->get_news_current($cari);
		$this->get_news_previous($cari);
	}
	public function detail()
	{
		$id = $this->uri->segment(3);
		$data=array(	
						'title'		=>'Muara Ancalong\'s Project',
						'isi'  		=>'Konten/dproject',
						'data' 		=> $this->home->get_by_id($id));
		$this->load->view('Layout/wrapper',$data);
	}
	public function get_news_current($cari,$offset=0)
	{		
		$config['total_rows'] = $this->home->count_news_prj_type($cari,'Current Project');
		$config['base_url'] = base_url().'Project/get_news_current/'.$cari.'/';
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
						'cariin'	=>$cari,
						'data'		=>$this->home->get_news_prj_type($cari,'Current Project',$config['per_page'],$offset)
						);
			$this->load->view('Layout/wrapper',$data);
	}
	public function get_news_previous($cari,$offset=0)
	{
		$config['total_rows'] = $this->home->count_news_prj_type($cari,'Previous Project');
		$config['base_url'] = base_url().'Project/get_news_previous/'.$cari.'/';
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
						'data'		=>$this->home->get_news_prj_type($cari,'Previous Project',$config['per_page'],$offset)
						);
			$this->load->view('Layout/wrapper',$data);
	}
	public function get_news($cari,$offset=0)
	{
		$config['total_rows'] = $this->home->count_news($cari);
		$page_url =$config['base_url'] = base_url().'Project/get_news/Project_mancalong/';
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
						'data'		=>$this->home->get_news($cari,$config['per_page'],$offset)
						);
			$this->load->view('Layout/wrapper',$data);

	}
}
