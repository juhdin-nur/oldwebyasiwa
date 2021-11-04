<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

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
	public function __construct(){
		parent::__construct();
		$this->load->model('mediaOpt','gallery');
	}
	public function index()
	{
		$data=array('title'		=>'Yasiwa\'s Gallery',
						'isi'  		=>'Konten/galleryfo',
						'kategori'=>$this->viewCategory(),
						'gallery'=>$this->viewGallery()
						);
			$this->load->view('Layout/wrapper',$data);
	}
	public function viewCategory()
	{
		$html_out="";
		$query = $this->gallery->viewCategory();
		foreach ($query->result_array() as $value) {
			$html_out.='<button class="btn btn-default filter-button" data-filter="'.str_replace(array(" ","."),"-",$value['title_cat']).'">'.$value['title_cat'].'</button>';
		}
		return $html_out;
	}
	public function viewGallery()
	{
		$html_out="";
		$query = $this->gallery->galleryViewFront();
		foreach ($query->result_array() as $value) {
			$html_out.='<div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter '.str_replace(array(" ","."),"-",$value['title_cat']).'">
                <span title="'.$value['title'].'" alt="'.$value['description'].'"><img src="'.base_url().$value['path'].'" class="thumbnail img-responsive"></span>
            </div>';
		}
		return $html_out;
	}
}
