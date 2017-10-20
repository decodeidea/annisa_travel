<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');


class Member extends DC_controller {

	function __construct() {
		parent::__construct();
		$this->check_login();
		if($this->router->fetch_method()=='index'){
			$method='';
		}else{
			$method=str_replace('_',' ',$this->router->fetch_method());
		}
		$this->controller_attr = array('controller' => 'Member','controller_name' => 'Admin Member','method'=>ucwords($method),'menu'=>$this->get_menu());
	}
	
	 function index(){
		redirect(site_url('Member/list_member'));
	}
	
	function list_member(){
		$this->check_access();
		$data = $this->controller_attr;
		$data['function']='list_member';
		$data['list']=select_all($this->tbl_member);
		$data['page'] = $this->load->view('Member/list_member',$data,true);
		$this->load->view('layout_backend',$data);
	}

	
}

