<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reg extends CI_Controller {

	public function index()
	{
		$this->load->view('reg');
	}

	public function post()
	{
		if($this->input->post('username')!=null){
			$username = $this->input->post('username');
		}else{
			$url = 'reg';
			header('Location: '.$url);
			die(11);
		}
		$sex = $this->input->post('sex');
		$department = $this->input->post('department');
		$grade = $this->input->post('grade');
		$phone = $this->input->post('phone');
		$Intention = $this->input->post('Intention');
		$summary = $this->input->post('summary');

		//upload img
		$config['upload_path'] = 'static/uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = '2048';
		$config['max_width']  = '1920';
		$config['max_height']  = '12000';
		$config['file_name']  = time();
		$this->upload->initialize($config);
 		$this->upload->do_upload();
 		$res = $this->upload->data();
		$regArr = array(
				"name" => $username,
				"sex" => $sex,
				"department" => $department,
				"img" => $res['orig_name'],
				"phone" => $phone,
				"grade" => $grade,
				"Intention" => $Intention,
				"summary" => $summary,
				"time" => time(),
			);
		$query = $this->reg_m->insert($regArr);
		$this->load->view("post_ok");
	}
}