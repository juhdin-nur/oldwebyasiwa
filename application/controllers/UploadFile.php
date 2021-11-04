<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UploadFile extends CI_Controller {

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
	function __construct(){
		parent::__construct();
		$this->load->model('mupload', 'routeModel');
		$this->load->model('mediaOpt', 'model2');
	}
	function csaveEdit()
	{
		$data = array(
			'title' => $this->input->post('title'),
			'description'=>$this->input->post('description'),
			'upTime'=>date('Y-m-d H:i:s')
		);
		$hasil=$this->model2->mupdate_gallery(array('mediaId' =>$this->input->post('id')),$data);
		echo json_encode(array("status" => TRUE));
	}
	function upload_file()
	{
		// file upload
		$post = $this->input->post();
		$config['upload_path'] = "./source/Header/";
		$config['encrypt_name'] = false;
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = "2500000";
		$config['remove_space'] = true;

		

		$this->load->library('upload',$config);
		if($this->upload->do_upload('userfile'))
		{
			date_default_timezone_set('Asia/Makassar');
			$file = $this->upload->data();
			$data = array('fileName'=>$file['orig_name'],
						  'mimeType'=>$file['file_type'],
						  'fileType'=> 'Header',
						  'size'=>$file['file_size'],
						  'path'=>'./source/Header/'.$file['file_name'],
						  'pubTime'=> date('Y-m-d H:i:s'),
						  'state'=>1
				);
			$this->routeModel->save($data);
		}
		else
		{
			echo "Tidak terupload";
			$error = array('error' => $this->upload->display_errors());
			echo json_encode($error);
		}
	}
	private function fwaterMark($filename='')	
	{
		$source_path='./source/Header/'.$filename;
		$ukuran=getimagesize($source_path);
		$config = array(
			'image_library' => 'gd2',
			'source_image' => $source_path,
			'wm_text' =>'Copyright Yasiwa ',
			'wm_type' => 'text',
			'wm_vrt_alignment'=>'middle',
			'wm_hor_alignment' =>'center',
			'wm_font_size'=>ceil($ukuran[0]/(100*(50/100))),
			'wm_font_path' => './system/fonts/texb.ttf',
			'wm_font_color'=>'ffffff'
		 );
		$this->load->library('image_lib',$config);
		$this->image_lib->initialize($config);
		if(!$this->image_lib->watermark())
		{
			echo $this->image_lib->display_error();
		}
		$this->image_lib->clear();
	}
	private function ukuranGambar($filename='')
	{
		$source_path = './source/Header/'.$filename;
      	$target_path = './thumbs/Header/';
      	$config = array(
      		'image_library' =>'gd2',
      		'source_image' => $source_path,
      		'new_image' => $target_path,
      		'maintain_ratio' => TRUE,
      		'create_thumb' => TRUE,
      		'thumb_mer' => '_thumb',
      		'width' => 150,
      		'height' => 150
      	);
      	$this->load->library('image_lib',$config);
      	if(!$this->image_lib->resize())
      	{
      		echo $this->image_lib->display_error();
      	}
      	$this->image_lib->clear();
	}
	public function ajax_list()
    {
        $list = $this->routeModel->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $routeModel) {
            $no++;
            $row = array();
            $row[]='<img src="'.base_url().$routeModel->path.'" width="300" height="100" />';
            $row[]=$routeModel->fileName;
            $row[]=$routeModel->size.' Kb';
            $row[]=$routeModel->mimeType;
            //add html for action
            $row[] = '<a class="btn btn-sm btn-danger" href="#" title="Hapus" onclick="delete_image('."'".$routeModel->mediaId."/".$routeModel->fileName."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
        
            $data[] = $row;
        }

        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->routeModel->count_all(),
                        "recordsFiltered" => $this->routeModel->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }
    public function ajax_delete($id,$fileName)
    {
        $this->routeModel->delete_by_id($id);
        @unlink("source/Header/".$fileName);
        echo json_encode(array("status" => TRUE));
    }
    function gallery_view()
    {
    	$data = $this->model2->gallery_view();
    }
    function edit_gallery($id='')
    {
    	$query = $this->model2->medit_gallery($id);
    	echo json_encode($query->row());
    }
    function upload_gallery()
	{
		$post = $this->input->post();
		$config['upload_path'] = "./source/Header/";
		$config['encrypt_name'] = false;
		$config['file_name'] = 'Gallery_'.$_FILES['userfile']['name'];
		$config['allowed_types'] = 'gif|jpg|png|JPG';
		$config['max_size'] = "9999999999999999";
		$config['remove_space'] = true;

		$this->load->library('upload',$config);
		if($this->upload->do_upload('userfile'))
		{
			date_default_timezone_set('Asia/Makassar');
			$file = $this->upload->data();
			$this->ukuranGambar($file['file_name']);
			$this->fwaterMark($file['file_name']);
			$data = array('fileName'=>substr($file['orig_name'],8),
						  'mimeType'=>$file['file_type'],
						  'fileType'=> 'Gallery',
						  'size'=>$file['file_size'],
						  'path'=>'./source/Header/'.$file['file_name'],
						  'path2'=>'./thumbs/Header/'.$file['raw_name'].'_thumb'.$file['file_ext'],
						  'pubTime'=> date('Y-m-d H:i:s'),
						  'state'=>2,
						  'description' => $this->input->post('description'),
						  'idCat' => $this->input->post('idCat'),
						  'title'=>$this->input->post('title')
				);
			$this->routeModel->save($data);
			echo json_encode($data);

		}
		else
		{
			echo "Tidak terupload";
			$error = array('error' => $this->upload->display_errors());
			echo json_encode($error);
		}
	}
	public function galleryList()
	{
		
		$query = $this->model2->gallery_view(2);
		foreach ($query as $row) {
			$hasil = array();	
			$hasil[]=$row->path;
			$hasil[]= '<div class="profile-activity clearfix" ><div><div class="timeline-info col align-self-start"><img alt="Susan Avatar" src="./source/Header/Gallery_OJT_PT_HIP.jpg">
		</div>
		<form class="form-horizontal" id="validation-form"> 
			<div class="form-group">
                <label class="control-label col-xs-1 no-padding-right" for="lokasi">Title:</label>

	            <div class="col-xs-12 col-sm-9">
	                <div class="clearfix">
	                <input type="hidden" name="id" id="id" class="col-xs-12 col-sm-6">
	                    <input type="text" name="lokasi" id="lokasi" class="col-xs-12 col-sm-6">
	                </div>
	            </div>
	        </div>                                                            
	        <div class="form-group">
                <label class="control-label col-xs-3 no-padding-right" for="lokasi">Description:</label>

	            <div class="col-xs-12 col-sm-9">
	                <div class="clearfix">
	                    <textarea id="description" name="description"></textarea>
	                </div>
	            </div>
	        </div>                                                            
		</form>
	</div>

	<div class="tools action-buttons">
		<a href="#" class="red">
			<i class="ace-icon fa fa-times bigger-125"></i>
		</a>
	</div>
</div>';
		}
		$data[] = $hasil;
	echo json_encode($data);
	}
}
