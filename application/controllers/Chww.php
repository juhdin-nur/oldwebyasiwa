<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Chww extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mhomepg','home');
	}
	public function ajax_list()
	{
		$list = $this->home->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $home) {
			$no++;
			$row = array();
			$row[]=$home->className;
			//add html for action
			$row[] = '<a class="btn btn-sm btn-primary" href="#" title="Edit" onclick="edit_class('."'".$home->id."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
				  <a class="btn btn-sm btn-danger" href="#" title="Hapus" onclick="delete_class('."'".$home->id."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
		
			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->home->count_all(),
						"recordsFiltered" => $this->home->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	public function ajax_edit($page)
	{
		$hasil = $this->home->get_by_page($page);
		//$data->className = ($data->className =='')?'': $data->className;
		echo json_encode($hasil);
	}
	public function loadKelas() 
	{
		$data2 = $this->home->Kelas();
		$dd_row = array();
		foreach($data2 as $hasil)
		{
			$dd_row[]='<option value="'.$hasil->id.'">'.$hasil->className.'</option>';
		}
		$data['className'] = $dd_row;
		echo json_encode($data);  
	}
	public function ajax_add()
	{
		//$this->_validate();
		$data = array(
				'page' => $this->input->post('halaman'),
				'konten' => $this->input->post('kontenhww')
			);
		$insert = $this->home->save($data);
		echo json_encode(array("status" => TRUE,"tes" => $data));
	}

	public function ajax_update()
	{
		//$this->_validate();
		$data = array(
				'className' => $this->input->post('className'),
				'id' => $this->input->post('id')
			);
		$this->home->update(array('id' => $this->input->post('id')), $data);
		echo json_encode(array("status" => TRUE,"tes"=>$data));
	}

	public function ajax_delete($id)
	{
		$this->home->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}


	private function _validate()
	{
		$data = array();
		$data['error_string'] = array();
		$data['inputerror'] = array();
		$data['status'] = TRUE;

		if($this->input->post('firstName') == '')
		{
			$data['inputerror'][] = 'firstName';
			$data['error_string'][] = 'First name is required';
			$data['status'] = FALSE;
		}

		if($this->input->post('lastName') == '')
		{
			$data['inputerror'][] = 'lastName';
			$data['error_string'][] = 'Last name is required';
			$data['status'] = FALSE;
		}

		if($this->input->post('dob') == '')
		{
			$data['inputerror'][] = 'dob';
			$data['error_string'][] = 'Date of Birth is required';
			$data['status'] = FALSE;
		}

		if($this->input->post('gender') == '')
		{
			$data['inputerror'][] = 'gender';
			$data['error_string'][] = 'Please select gender';
			$data['status'] = FALSE;
		}

		if($this->input->post('address') == '')
		{
			$data['inputerror'][] = 'address';
			$data['error_string'][] = 'Addess is required';
			$data['status'] = FALSE;
		}

		if($data['status'] === FALSE)
		{
			echo json_encode($data);
			exit();
		}
	}

}
