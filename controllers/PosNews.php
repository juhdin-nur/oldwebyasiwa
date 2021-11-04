<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PosNews extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('MposNews','routemodel');
        $this->load->helper('date');
        $this->load->helper('file');
    }
    public function ajax_list()
    {
        $list = $this->routemodel->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $routemodel) {
            $no++;
            $row = array();#
            $row[]=$routemodel->title;
            $row[]=$routemodel->page;
            $row[]=strip_tags(substr($routemodel->konten,0,500));
            $row[]=$routemodel->tglPub;
            $row[]=$routemodel->published;
            //add html for action
            $row[] = '<a class="btn btn-sm btn-primary" href="#" title="Ubah" onclick="edit_pos('."'".$routemodel->id."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                  <a class="btn btn-sm btn-danger" href="#" title="Hapus" onclick="delete_pos('."'".$routemodel->id."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
        
            $data[] = $row;
        }

        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->routemodel->count_all(),
                        "recordsFiltered" => $this->routemodel->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }
    public function get_menu()
    {
        $term=$this->input->GET('term');
        $data_menu = $this->routemodel->get_menu_by($term['term'],'id, title');
        echo json_encode($data_menu);
    }
    public function ajax_edit($id)
    {
        $data = $this->routemodel->get_by_id($id);
        //$data->className = ($data->className =='')?'': $data->className;
        echo json_encode($data);
    }
    public function loadKelas() 
    {
        $data2 = $this->routemodel->Kelas();
        $dd_row = array();
        foreach($data2 as $hasil)
        {
            $dd_row[]='<option value="'.$hasil->id.'">'.$hasil->title.'</option>';
        }
        $data['title'] = $dd_row;
        echo json_encode($data);  
    }
    public function listTarget()
    {
        $list = array('_self','_blank','_parent','_top');
        $listT = array();
        for($z =0; $z<count($list);$z++)
        {
            $listT [] = '<option value="'.$list[$z].'">'.$list[$z].'</option>';
        }
        $listB['hasil'] = $listT;
        echo json_encode($listB);
    }
    public function loadParent($id)
    {
        $data_parent = $this->routemodel->get_by_id($id);
        return $data_parent;
    }
    public function ajax_add()
    {
        //$this->_validate();
        $tgl = $this->input->post('tglPub');
        $tglPub = date('Y-m-d H:i:s', strtotime(str_replace('/','-',$tgl)));
        date_default_timezone_set('Asia/Kuala_Lumpur');
        $tglBuat = date('Y-m-d H:i:s', time());
        //$tglBuat = now();
        $data = array(
                'title' => $this->input->post('title'),                
                'page' => $this->input->post('page'),
                'konten' => $this->input->post('konten'),
                'tglPub' => $tglPub,
                'tglUbah' => $this->input->post('tglUbah'),
                'tglBuat' => $tglBuat,
                'published' => $this->session->userdata('uname'),
                'state' => 1
            );
        $insert = $this->routemodel->save($data);
        echo json_encode(array("status" => TRUE,"tglku"=>$tgl,"tglku2"=>$tglPub));
    }

    public function ajax_update()
    {
        //$this->_validate();
        $tgl = $this->input->post('tglPub');
        $tglPub = date('Y-m-d H:i:s', strtotime(str_replace('/','-',$tgl)));
        date_default_timezone_set('Asia/Kuala_Lumpur');
        $tglBuat = date('Y-m-d H:i:s', time());
        //$tglBuat = now();
        $data = array(
                'title' => $this->input->post('title'),                
                'page' => $this->input->post('page'),
                'konten' => $this->input->post('konten'),
                'tglPub' => $tglPub,
                'tglUbah' => $tglBuat,
                'published' => $this->session->userdata('uname'),
                'state' => 1
            );
        $this->routemodel->update(array('id' => $this->input->post('id')), $data);
        echo json_encode(array("status" => TRUE,"tes"=>$data));
    }

    public function ajax_delete($id)
    {
        $this->routemodel->delete_by_id($id);
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