<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Post_m extends CI_Model{

	public function __construct()
	{
		parent::__construct();
	}

	public function get_all_list(){
		$this->db->order_by("id", "desc"); 
		$query=$this->db->get('reg');
		return $query->result_array();
	}

	public function get_some_list($id){
		$sql = "select * from reg order by id desc limit ?,10";
		$query = $this->db->query($sql, array($id*10));
		return $query->result_array();
	}

	public function get_some_jslist($id){
		$sql = "SELECT * FROM reg WHERE intention LIKE  '%技术部%' ORDER BY  `reg`.`Id` desc limit ?,10 ";
		$query = $this->db->query($sql, array($id*10));
		return $query->result_array();
	}

	public function get_some_sjlist($id){
		$sql = "SELECT * FROM reg WHERE intention LIKE  '%设计部%' ORDER BY  `reg`.`Id` desc limit ?,10 ";
		$query = $this->db->query($sql, array($id*10));
		return $query->result_array();
	}

	public function get_some_cplist($id){
		$sql = "SELECT * FROM reg WHERE intention LIKE  '%产品部%' ORDER BY  `reg`.`Id` desc limit ?,10 ";
		$query = $this->db->query($sql, array($id*10));
		return $query->result_array();
	}
}
?>