<?php
class Mlogin extends CI_Model{
	function __construct()
	{
		parent::__construct();
		$this->tbl="tuser";
	}
	function cekuser($username="",$password=""){
		return $query = $this->db->get_where($this->tbl,array('userName'=>$username, 'passwordenc'=>$password))->result_array();
	}
	function ambiluser($username=""){
		$query= $this->db->get_where($this->tbl,array('userName'=>$username))->result_array();
		return $query[0];
	}
}
		