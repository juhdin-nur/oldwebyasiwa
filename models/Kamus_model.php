<?php
    class Kamus_model extends CI_Model {
        function __construct()
        {
            parent::__construct();
        }
  
    function countData($wh_ews)
        {
            $SQL_COUNT = "SELECT count(*) AS count FROM tclass as a ".$wh_ews."";
  
            return($this->db->query($SQL_COUNT));
        }
  
    function loadData($wh_ews, $sidx, $sord, $start, $limit)
        {
             $SQL1 = "SELECT * FROM tclass AS a WHERE 1=1 ".$wh_ews." ORDER BY ".$sidx." ".$sord." LIMIT ".$start." , ".$limit;
            return($this->db->query($SQL1));
        }
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