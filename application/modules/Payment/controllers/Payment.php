<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');


class Payment extends DC_controller {

	function __construct() {
		parent::__construct();
		if($this->router->fetch_method()=='index'){
			$method='';
		}else{
			$method=str_replace('_',' ',$this->router->fetch_method());
		}
		$this->controller_attr = array('controller' => 'Payment','controller_name' => 'Payment');
	}
	
	 function index(){
		$data = $this->controller_attr;
		$data['function']='index';
		$data['list']='';
		$data['page'] = $this->load->view('Payment/index',$data,true);
		$this->load->view('layout_frontend',$data);
	}
	function finish(){
		$data = $this->controller_attr;
		$data['function']='finish';
		$data['list']='';
		$data['page'] = $this->load->view('Payment/finish',$data,true);
		$this->load->view('layout_frontend',$data);
	}
}

