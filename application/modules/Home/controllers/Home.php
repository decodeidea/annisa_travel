<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');


class Home extends DC_controller {

	function __construct() {
		parent::__construct();
		if($this->router->fetch_method()=='index'){
			$method='';
		}else{
			$method=str_replace('_',' ',$this->router->fetch_method());
		}
		$this->controller_attr = array('controller' => 'home','controller_name' => 'Home');
	}
	
	 function index(){
		$data = $this->controller_attr;
		$data['function']='home';
		$data['list']='';
		$data['page'] = $this->load->view('Home/index',$data,true);
		$this->load->view('layout_frontend',$data);
	}
	
}

