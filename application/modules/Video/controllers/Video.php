<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');


class Video extends DC_controller {

	function __construct() {
		parent::__construct();
		if($this->router->fetch_method()=='index'){
			$method='';
		}else{
			$method=str_replace('_',' ',$this->router->fetch_method());
		}
		$this->controller_attr = array('controller' => 'Video','controller_name' => 'Video');
	}
	
	 function index(){
		$data = $this->controller_attr;
		$data['function']='article';
		$data['list']=select_where($this->tbl_video,'lang',$this->lang->lang())->result();
		$data['page'] = $this->load->view('Video/index',$data,true);
		$this->load->view('layout_frontend',$data);
	}
}

