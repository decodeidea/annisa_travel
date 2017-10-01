<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');


class Account extends DC_controller {

	function __construct() {
		parent::__construct();
		if($this->router->fetch_method()=='index'){
			$method='';
		}else{
			$method=str_replace('_',' ',$this->router->fetch_method());
		}
		$this->controller_attr = array('controller' => 'account','controller_name' => 'Account');
	}
	
	 function index(){
		$data = $this->controller_attr;
		$data['function']='index';
		$data['list']='';
		$data['page'] = $this->load->view('Account/index',$data,true);
		$this->load->view('layout_frontend',$data);
	}
	function login(){
		$data = $this->controller_attr;
		$data['function']='login';
		$data['list']='';
		$data['page'] = $this->load->view('Account/login',$data,true);
		$this->load->view('layout_frontend',$data);
	}
	function register(){
		$data = $this->controller_attr;
		$data['function']='register';
		$data['list']='';
		$data['page'] = $this->load->view('Account/register',$data,true);
		$this->load->view('layout_frontend',$data);
	}
}

