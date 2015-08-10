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

	public function get_id_article($id){
		$query = $this->db->get_where('reg',array('id' => $id));
		return $query->result_array();
	}

	public function get_all_list(){
		$this->db->order_by("id", "desc"); 
		$query=$this->db->get('posts');
		return $query->result();
	}

	public function del_article($id){
		$this->db->delete('posts', array('id' => $id)); 
		return $this->db->affected_rows();
	}

	public function update_article($arr){
		$this->db->where('id',$arr['id']);
		$this->db->update('posts',$arr);
		return $this->db->affected_rows();
	}
}
?>