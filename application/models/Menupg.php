<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menupg extends CI_Model {

	var $table = 'dyn_menu';
	var $table2 = 'Pcategory';
	var $column = array('id','title','link_type','page_id','module_name','url','uri','dyn_group_id','position','target','parent_id','is_parent','show_menu'); //set column field database for order and search
	var $column2 = array('catid','title_cat','description_cat','createTime_cat','modifiedTime_cat'); //set column field database for order and search
	var $order = array('title_cat'=>'desc'); // default order 
	var $order2 = array('title' => 'desc'); // default order 

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	private function _get_datatables_query()
	{
		
		$this->db->from($this->table);
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
		
		if(isset($_POST['order2'])) // here order processing
		{
			$this->db->order_by($column[$_POST['order2']['0']['column']], $_POST['order2']['0']['dir']);
		} 
		else if(isset($this->order2))
		{
			$order = $this->order2;
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}
	function genMenu()
	{
		$query = $this->db->get('dyn_menu');
		return $query;
	}
	function get_datatables()
	{
		$this->_get_datatables_query();
		if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}
	function count_filtered()
	{
		$this->_get_datatables_query();
		$query = $this->db->get();
		return $query->num_rows();
	}
	public function count_all()
	{
		$this->db->from($this->table);
		return $this->db->count_all_results();
	}
	public function Kelas() 
	{
		return $data = $this->db->get($this->table)->result();
	}
	public function get_by_id($id)
	{
		$this->db->from($this->table);
		$this->db->where('id',$id);
		$query = $this->db->get();

		return $query->row();
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
	public function get_menu_by($term,$column='*')
	{
		$this->db->select($column);
		$this->db->like('id',$term);
		$this->db->or_like('title',$term);
		$data = $this->db->from('dyn_menu')->get();
		//echo $data->result_array();
		return $data->result_array();
	}
	private function _get_datatables_query2()
	{
		
		$this->db->from($this->table2);
		$i = 0;
	
		foreach ($this->column2 as $item) // loop column 
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

				if(count($this->column2) - 1 == $i) //last loop
					$this->db->group_end(); //close bracket
			}
			$column2[$i] = $item; // set column array variable to order processing
			$i++;
		}
		
		if(isset($_POST['order'])) // here order processing
		{
			$this->db->order_by($column2[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		} 
		else if(isset($this->order))
		{
			$order = $this->order;
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}
	function get_datatables2()
	{
		$this->_get_datatables_query2();
		if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}
	public function get_menu_by2($term,$column2='*')
	{
		$this->db->select($column2);
		$this->db->like('catId',$term);
		$this->db->or_like('title_cat',$term);
		$data = $this->db->from($this->table2)->get();
		//echo $data->result_array();
		return $data->result_array();
	}
	public function get_by_id2($id)
	{
		$this->db->from($this->table2);
		$this->db->where('catId',$id);
		$query = $this->db->get();

		return $query->row();
	}
	function count_filtered2()
	{
		$this->_get_datatables_query2();
		$query = $this->db->get();
		return $query->num_rows();
	}
	public function count_all2()
	{
		$this->db->from($this->table2);
		return $this->db->count_all_results();
	}
	public function save_cat($data)
	{
		$this->db->insert($this->table2, $data);
		return $this->db->insert_id();
	}
	public function update2($where, $data)
	{
		$this->db->update($this->table2, $data, $where);
		return $this->db->affected_rows();
	}
	public function delete_by_id2($id)
	{
		$this->db->where('catId', $id);
		$this->db->delete($this->table2);
	}
}
