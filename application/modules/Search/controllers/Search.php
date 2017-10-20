<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');


class Search extends DC_controller {

	function __construct() {
		parent::__construct();
		if($this->router->fetch_method()=='index'){
			$method='';
		}else{
			$method=str_replace('_',' ',$this->router->fetch_method());
		}
		$this->controller_attr = array('controller' => 'Search','controller_name' => 'Search');
	}
	
	function index(){
		$data = $this->controller_attr;
		$data['function']=$this->input->get('q');
		$data['data'] = $this->model_basic->get_search($this->input->get('q'));
		//print_r($data);
		$data['page'] = $this->load->view('Search/index',$data,true);
		$this->load->view('layout_frontend',$data);
	}
	
	
}

