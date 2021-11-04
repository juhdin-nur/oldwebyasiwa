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
	}
	function upload_file()
	{
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
	public function ajax_list()
    {
        $list = $this->routeModel->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $routeModel) {
            $no++;
            $row = array();
            $row[]='<img src="'.$routeModel->path.'" width="300" height="100" />';
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
}
