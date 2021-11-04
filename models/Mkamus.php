<?php
    class Mkamus extends CI_Model {
        function __construct()
        {
            parent::__construct();
        }
  
    function countData($wh_ews)
        {
            $SQL_COUNT = "SELECT count(*) AS count FROM tclass as a ".$wh_ews."";
  
            return($this->db->query($SQL_COUNT));
        }
    function countOrdo() 
    {
    	$SQL_COUNT = "SELECT count(*) as count from tclass as a, torder as b where a.id = b.idClassF";
    	return($this->db->query($SQL_COUNT));
    }
    function countFamily() 
    {
    	$SQL_COUNT = "SELECT count(*) as count from torder as b inner join tfamily as c on b.id = c.idOrderF inner join tclass as a on b.idClassF = a.id";
    	return($this->db->query($SQL_COUNT));    	
    }
    function loadDataFamily($aColumns,$sWhere,$sOrder,$sLimit) 
    {
    	$SQL1 = "SELECT a.className,b.orderName,c.id,c.familyName from tfamily as c inner join torder as b on c.idOrderF = b.id inner join tclass as a on b.idClassF = a.id $sWhere $sOrder $sLimit";
    	return($this->db->query($SQL1));
    }
    function loadDataOrdo($aColumns,$sWhere,$sOrder,$sLimit) 
    {
    	$SQL1 = "SELECT b.id,a.className,b.orderName FROM tclass as a inner join torder as b on a.id = b.idClassF $sWhere $sOrder $sLimit"; 
    	return($this->db->query($SQL1));
	 }  
    function loadData($wh_ews, $sidx, $sord, $start, $limit)
        {
             $SQL1 = "SELECT * FROM tclass AS a WHERE 1=1 ".$wh_ews." ORDER BY ".$sidx." ".$sord." LIMIT ".$start." , ".$limit;
            return($this->db->query($SQL1));
        }
// fungsi torder
function mOrder() {
	
}
//end fungsi torder        
        
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