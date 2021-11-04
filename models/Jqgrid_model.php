<?php
class Jqgrid_model extends CI_Model
{
 
    function __construct()
    {
        parent::__construct();
//memanggail tabel area pada database
$this->_table = 'daily';
    }
 //fungsi ini digunakan untuk fasilitas pencarian
    function get_data($param)
    {
        ($param['limit'] != null ? $this->db->limit($param['limit']['end'], $param['limit']['start']) : '');
 
        ($param['sort_by'] != null) ? $this->db->order_by($param['sort_by'], $param['sort_direction']) :'';
 
        //returns the query string
        return $this->db->get($this->_table);
    }
//fungsi ini digunakan melakukan create, update, dan delete yang nantinya akan dipanggil di controller
    function crud($table, $key, $id, $arr)
	{
        $oper=$this->input->post('oper');
        $id_=$this->input->post($id);
        $count=count($arr);
        for($i=0;$i<$count;$i++)
		{
        	$data[$arr[$i]]=$this->input->post($arr[$i]);
		}
 
        switch ($oper) 
		{
        	case 'add':
	        $this->db->insert($table,$data);
	        break;
    	    case 'edit':
	        $this->db->where($key,$id_);
    	    $this->db->update($table, $data);
        	break;
	        case 'del':
	        $this->db->where($key,$id_);
    	    $this->db->delete($table);
	        break;
        }
    }
}