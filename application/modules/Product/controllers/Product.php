<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');


class Product extends DC_controller {

	function __construct() {
		parent::__construct();
		if($this->router->fetch_method()=='index'){
			$method='';
		}else{
			$method=str_replace('_',' ',$this->router->fetch_method());
		}
		$this->controller_attr = array('controller' => 'product','controller_name' => 'Product');
	}
	
	 function index(){
		$data = $this->controller_attr;
		$data['function']='index';
		$data['list']='';
		$data['page'] = $this->load->view('Product/index',$data,true);
		$this->load->view('layout_frontend',$data);
	}
	function category(){
		$data = $this->controller_attr;
		$data['function']='login';
		$data['list']='';
		$data['page'] = $this->load->view('Product/category',$data,true);
		$this->load->view('layout_frontend',$data);
	}
	function detail(){
		$data = $this->controller_attr;
		$data['function']='register';
		$data['list']='';
		$data['page'] = $this->load->view('Product/detail',$data,true);
		$this->load->view('layout_frontend',$data);
	}
}

