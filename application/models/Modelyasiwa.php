<?php
class Modelyasiwa extends CI_Model{
	function getDataSpesies(){
		return $this->db->query('select * from tspe')->result();
	}
}
		