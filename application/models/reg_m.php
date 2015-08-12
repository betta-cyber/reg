<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Reg_m extends CI_Model{

	public function __construct()
	{
		parent::__construct();
	}


	public function insert($data){
		$this->db->insert('reg',$data);
		return $this->db->affected_rows();
	}

	public function get_info($id){
		$query = $this->db->get_where('reg',array('id' => $id));
		return $query->result_array();
	}

	public function get_all_list(){
		$this->db->order_by("id", "desc"); 
		$query=$this->db->get('reg');
		return $query->result_array();
	}

	public function del_info($id){
		$this->db->delete('reg', array('id' => $id)); 
		return $this->db->affected_rows();
	}

	public function get_current_page($id)
	{
		//$sql = "SELECT MAX(Id) FROM reg";
		$sql = "SELECT COUNT(Id) FROM reg";
		$query = $this->db->query($sql);
		$maxId = $query->result_array()[0]['COUNT(Id)'];
		$currentPage = (int)($maxId / 10) - (int)($id / 10) + 1;
		return $currentPage;
	}
}
?>