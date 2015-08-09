<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Post extends CI_Controller {

	public function index()
	{	
		$a = base_url();
		$url = $a.'post/page/all/1';
		header('Location: '.$url);
	}

	public function page()
	{
		$sub = $this->uri->segment(3);
		$showId=$this->uri->segment(4);
		if($showId == 0)
		{
			$id = 1;
		}else{
			$id = $showId;
		}
		$this->get($id,$sub);
	}

	public function get($id,$sub)
	{
		$data['all'] = '';
		$data['sj'] = '';
		$data['js'] = '';
		$data['cp'] = '';
		$list_id = $id - 1;
		switch ($sub) {
			case 'all':
				$data['list'] = $this->post_m->get_some_list($list_id);
				$data['all'] = 'active';
				break;
		    case 'sj':
		        $data['list'] = $this->post_m->get_some_sjlist($list_id);
		        $data['sj'] = 'active';
		        break;
		    case 'js':
		        $data['list'] = $this->post_m->get_some_jslist($list_id);
		        $data['js'] = 'active';
		        break;
		    case 'cp':
		        $data['list'] = $this->post_m->get_some_cplist($list_id);
		        $data['cp'] = 'active';
		        break;
		}
		$data['sub'] = $sub;
		$data['Thisid'] = $id;
		$this->load->view('post',$data);
	}
}