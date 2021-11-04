<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cmenumg extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('menupg','routemodel');
        $this->load->helper('file');
    }
    public function generate_menu()
    {

        function pilih($text,$pil)
        {
            $text2="";
            for($j = 0; $j<=3;$j++)
            {
                //echo ltrim(substr($menu[$j]['title'],0,strpos($menu[$j]['title'],";")),";");

                if($j==0)
                {
                    $text3 = $text;
                    $text1 = substr($text,0,strpos($text,";"));
                    $text = $text3;
                    $text2 = $text1;
                }
                else 
                {
                    $text=ltrim(strpbrk($text, ';'),";");
                    $text2 = substr($text,0,strpos($text,";"));
                }
                if($j==$pil)
                {
                    return $text2;
                }
            }
        }

        $menu = array();
        //$bahasa = ""; 
        $langu =0;
        $enable = TRUE;
        while ($langu<3) 
        {
            $bahasa ="";
            $bahasa = "<?php defined('BASEPATH') OR exit('No direct script access allowed');"."\n";
            $query = $this->routemodel->genMenu();
            switch ($langu) 
            {
                case 0:
                    $_lang = "en";
                    break;
                case 1:
                    $_lang = "id";
                    break;
                case 2:
                    $_lang = "ge";
                    break;
                
                default:
                    # code...
                    break;
            }
            if ($query->num_rows() > 0)
            {
                // `id`, `title`, `link_type`, `page_id`, `module_name`, `url`, `uri`, `dyn_group_id`, `position`, `target`, `parent_id`, `show_menu`
                $j=1;
                foreach ($query->result() as $row)
                {
                    $menu[$j]['title']        = substr($row->title,0,strpos($row->title,";"));
                    $bahasa .=  '$lang[\''.pilih($row->title,0).'\'] = \''.pilih($row->title,$langu).'\''.";"."\n";         
                    //$bahasa .= $bahasa;
                    $j++;
                }
            }
            $query->free_result();    // The $query result object will no longer be available
            if($enable==TRUE)
            {
                $handle = fopen('./application/language/'.$_lang.'/menu_lang.php', 'w');
                fwrite($handle, $bahasa);
                fclose($handle);
                //$enable=FALSE;
            }
            $langu++;
        }
        echo json_encode(array("status"=>"Berhasil"));
    }
    public function ajax_list()
    {
        $list = $this->routemodel->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $routemodel) {
            $no++;
            $row = array();
            $row[]=$routemodel->title;
            $row[]=$routemodel->url;
            $row[]=$routemodel->link_type;
            $row[]=$routemodel->target;
            if($routemodel->parent_id==0)
            {
                $row[] = $routemodel->parent_id;
            }
            else
            {
                $row[]= $this->loadParent($routemodel->parent_id)->title;
            }
            if($routemodel->is_parent == 0)
            {
                $is_parent = 'No';
            }
            else
            {
                $is_parent = 'Yes';
            }
            if($routemodel->show_menu == '0')
            {
                $show_menu = 'No';
            }
            else
            {
                $show_menu = 'Yes';
            }
            if($routemodel->showonadmin == 0)
            {
                $show_onadmin = 'No';
            }
            else
            {
                $show_onadmin = 'Yes';
            }
            $row[]= $is_parent;
            $row[]= $show_menu;
            $row[]= $show_onadmin;
            //add html for action
            $row[] = '<a class="btn btn-sm btn-primary" href="#" title="Ubah" onclick="edit_menu('."'".$routemodel->id."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                  <a class="btn btn-sm btn-danger" href="#" title="Hapus" onclick="delete_menu('."'".$routemodel->id."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
        
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
        if($this->input->post('show_menu')=='')
        {
            $show_menu = '0';
        }
        else
        {
            $show_menu = '1';
        }
        if($this->input->post('showonadmin')=='')
        {
            $showonadmin = '0';
        }
        else
        {
            $showonadmin = '1';
        }
        if($this->input->post('is_parent')=='')
        {
            $is_parent = 0;
        }
        else
        {
            $is_parent = 1;
        }
        if($this->input->post('parent_id')=='')
        {
            $parent_id = 0;
        }
        else
        {
            $parent_id=$this->input->post('parent_id');
        }
        $data = array(
                'title' => $this->input->post('title'),
                'icon' => $this->input->post('icon'),
                'link_type' => $this->input->post('link_type'),
                'page_id' => $this->input->post(''),
                'link_id' => $this->input->post(''),
                'module_name' => $this->input->post(''),
                'url' => $this->input->post('url'),
                'uri' => $this->input->post(''),
                'dyn_group_id' => $this->input->post(''),
                'position' => $this->input->post(''),
                'target' => $this->input->post('target'),
                'parent_id' => $parent_id,
                'is_parent' => $is_parent,
                'show_menu' => $show_menu,
                'showonadmin' => $showonadmin
            );
        $insert = $this->routemodel->save($data);
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_update()
    {
        //$this->_validate();
        if($this->input->post('show_menu')=='')
        {
            $show_menu = '0';
        }
        else
        {
            $show_menu = '1';
        }
        if($this->input->post('showonadmin')=='')
        {
            $showonadmin = '0';
        }
        else
        {
            $showonadmin = '1';
        }
        if($this->input->post('is_parent')=='')
        {
            $is_parent = 0;
        }
        else
        {
            $is_parent = 1;
        }
        if($this->input->post('parent_id')=='')
        {
            $parent_id = 0;
        }
        else
        {
            $parent_id=$this->input->post('parent_id');
        }
        $data = array(
                'title' => $this->input->post('title'),
                'icon' => $this->input->post('icon'),
                'link_type' => $this->input->post('link_type'),
                'page_id' => $this->input->post(''),
                'link_id' => $this->input->post('link_id'),
                'module_name' => $this->input->post(''),
                'url' => $this->input->post('url'),
                'uri' => $this->input->post(''),
                'dyn_group_id' => $this->input->post(''),
                'position' => $this->input->post(''),
                'target' => $this->input->post('target'),
                'parent_id' => $parent_id,
                'is_parent' => $is_parent,
                'show_menu' => $show_menu,
                'showonadmin' => $showonadmin,
                'id' => $this->input->post('id')
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
    public function ajax_list2()
    {
        $list = $this->routemodel->get_datatables2();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $routemodel) {
            $no++;
            $row = array();
            $row[]=$routemodel->title;
            $row[]=$routemodel->description;            
            $row[]=$routemodel->createTime;     
            $row[]=$routemodel->modifiedTime;     
            //add html for action
            $row[] = '<a class="btn btn-sm btn-primary" href="#" title="Ubah" onclick="editCategory('."'".$routemodel->catId."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                  <a class="btn btn-sm btn-danger" href="#" title="Hapus" onclick="deleteCategory('."'".$routemodel->catId."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
        
            $data[] = $row;
        }

        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->routemodel->count_all2(),
                        "recordsFiltered" => $this->routemodel->count_filtered2(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }
    public function add_cat()
    {
        date_default_timezone_set('Asia/Makassar');
        $data = array('title' =>$this->input->post('title'), 
                      'description' => $this->input->post('description'),
                      'createTime'=> date('Y-m-d H:i:s')
                    );
        $insert = $this->routemodel->save_cat($data);
        echo json_encode(array("status" => TRUE));
    }
    public function ajax_edit2($id)
    {
        $data = $this->routemodel->get_by_id2($id);
        //$data->className = ($data->className =='')?'': $data->className;
        echo json_encode($data);
    }
    public function ajax_update2()
    {
        //$this->_validate();
        date_default_timezone_set('Asia/Makassar');
        $data = array(
                'title' => $this->input->post('title'),
                'description' => $this->input->post('description'),
                'modifiedTime' => date('Y-m-d H:i:s'),
                'catId' => $this->input->post('id')
            );
        $this->routemodel->update2(array('catId' => $this->input->post('id')), $data);
        echo json_encode(array("status" => TRUE,"tes"=>$data));
    }
    public function ajax_delete2($id)
    {
        $this->routemodel->delete_by_id2($id);
        echo json_encode(array("status" => TRUE));
    }
}
