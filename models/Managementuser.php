<?php
class Managementuser extends CI_Model{
	function __construct()
	{
		parent::__construct();
		$this->tbl="tuser";
	}
    function get_data($param)
    {
 
		if($param['search'] != null && $param['search'] === 'true')
		{
            $wh = $param['search_field'];
            switch ($param['search_operator'])
			{
                case "bw": // begin with
                    $wh .= " LIKE '".$param['search_str']."%'";
                    break;
                case "ew": // end with
                    $wh .= " LIKE '%".$param['search_str']."'";
                    break;
                case "cn": // contain %param%
                    $wh .= " LIKE '%".$param['search_str']."%'";
                    break;
                case "eq": // equal =
                    if(is_numeric($param['search_str']))
					{
                        $wh .= " = ".$param['search_str'];
                    }
					else
					{
                        $wh .= " = '".$param['search_str']."'";
                    }
                    break;
                case "ne": // not equal
                    if(is_numeric($param['search_str']))
					{
                        $wh .= " <> ".$param['search_str'];
                    } 
					else
					{
                        $wh .= " <> '".$param['search_str']."'";
                    }
                    break;
                case "lt":
                    if(is_numeric($param['search_str'])) 
					{
                        $wh .= " < ".$param['search_str'];
                    }
					else 
					{
                        $wh .= " < '".$param['search_str']."'";
                    }
                    break;
                case "le":
                    if(is_numeric($param['search_str'])) 
					{
                        $wh .= " <= ".$param['search_str'];
                    }
					else 
					{
                        $wh .= " <= '".$param['search_str']."'";
                    }
                    break;
                case "gt":
                    if(is_numeric($param['search_str'])) 
					{
                        $wh .= " > ".$param['search_str'];
                    }
					else 
					{
                        $wh .= " > '".$param['search_str']."'";
                    }
                    break;
                case "ge":
                    if(is_numeric($param['search_str'])) 
					{
                        $wh .= " >= ".$param['search_str'];
                    }
					else 
					{
                        $wh .= " >= '".$param['search_str']."'";
                    }
                    break;
                default :
                    $wh = "";
            }
            $this->db->where($wh);
        }
        ($param['limit'] != null ? $this->db->limit($param['limit']['end'], $param['limit']['start']) : '');
 
        ($param['sort_by'] != null) ? $this->db->order_by($param['sort_by'], $param['sort_direction']) :'';
 
        //returns the query string
        return $this->db->get($this->tbl);
    }
	function crud($table,$id,$arr)
	{
		$oper=$this->input->post('oper');
		$id_=$this->input->post($id);
		$count=count($arr);
		for($i=0;$i<$count;$i++)
		{
			$data[$arr[$i]]=$this->input->post($arr[$i]);
		}
		switch($oper)
		{
			case 'add':
			$this->db->insert($tabel,$data);
			break;
			case 'edit':
			$this->db->where($key,$id_);
			$this->db->update($table,$data);
			break;
			case 'del':
			$this->db->where($key,$id_);
			$this->db->delete($table);
			break;
		}
	}
}
		