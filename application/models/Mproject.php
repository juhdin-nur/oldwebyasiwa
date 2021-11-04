<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mproject extends CI_Model {

	var $table = 'news';
	var $column = array('id','title','prj_type','tglPub','loc','konten','pg','prio','tglbuat','published','state','language'); //set column field database for order and search
	var $order = array('id' => 'desc'); // default order 

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	private function _get_datatables_query($cari)
	{
		
		$this->db->from($this->table);
		$this->db->where('pg',$cari);
		$i = 0;
	
		foreach ($this->column as $item) // loop column 
		{
			if($_POST['search']['value']) // if datatable send POST for search
			{
				
				if($i===0) // first loop
				{
					$this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND. 
					$this->db->like($item, $_POST['search']['value']);
				}
				else
				{
					$this->db->or_like($item, $_POST['search']['value']);
				}

				if(count($this->column) - 1 == $i) //last loop
					$this->db->group_end(); //close bracket
			}
			$column[$i] = $item; // set column array variable to order processing
			$i++;
		}
		
		if(isset($_POST['order'])) // here order processing
		{
			$this->db->order_by($column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		} 
		else if(isset($this->order))
		{
			$order = $this->order;
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}

	function get_datatables($cari)
	{
		$this->_get_datatables_query($cari);
		if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}
	public function count_filtered($cari)
	{
		$this->_get_datatables_query($cari);
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_all($cari)
	{
		$this->db->from($this->table);
		$this->db->where('pg',$cari);
		return $this->db->count_all_results();
	}
	public function get_news($cari,$page,$offset)
	{
		$query = $this->db->get_where($this->table,array('pg' => $cari),$page,$offset);
		return $query->result();
	}
	public function get_news_prj_type($cari,$prj_type,$page,$offset)
	{
		$query = $this->db->get_where($this->table,array('pg'=>$cari,'prj_type'=>$prj_type),$page,$offset);
		return $query->result();
	}
	public function count_news_prj_type($cari,$prj_type)
	{
		$query = $this->db->get_where($this->table,array('pg'=>$cari,'prj_type'=>$prj_type));
		return $query->num_rows();
	}
	public function count_news($cari)
	{		
		 $query = $this->db->get_where($this->table,array('pg' => $cari));
		return $query->num_rows();
	}
	public function get_by_page($id)
	{
		//$this->db->from($this->table);
		//$query = $this->db->where('page',$page);
		$query = $this->db->query("select * from news where id='".$id."'");
		return $query->row();
	}
	public function get_by_id($id)
	{
		$query = $this->db->get_where($this->table,array('id'=>$id));
		return $query->row();
	}
	public function Kelas() 
	{
		return $data = $this->db->get($this->table2)->result();
	}
	public function save($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	public function update($where, $data)
	{
		$this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}

	public function delete_by_id($id)
	{
		$this->db->where('id', $id);
		$this->db->delete($this->table);
	}


}
