<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');


class Article extends DC_controller {

	function __construct() {
		parent::__construct();
		if($this->router->fetch_method()=='index'){
			$method='';
		}else{
			$method=str_replace('_',' ',$this->router->fetch_method());
		}
		$this->controller_attr = array('controller' => 'article','controller_name' => 'Article');
	}
	
	 function index(){
		$data = $this->controller_attr;
		$data['function']='article';
		$data['list']='';
		$data['page'] = $this->load->view('Article/index',$data,true);
		$this->load->view('layout_frontend',$data);
	}
	function detail(){
		$data = $this->controller_attr;
		$data['function']='article';
		$data['list']='';
		$data['page'] = $this->load->view('Article/detail',$data,true);
		$this->load->view('layout_frontend',$data);
	}
}

