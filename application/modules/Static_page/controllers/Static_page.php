<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');


class Static_page extends DC_controller {

	function __construct() {
		parent::__construct();
		if($this->router->fetch_method()=='index'){
			$method='';
		}else{
			$method=str_replace('_',' ',$this->router->fetch_method());
		}
		$this->controller_attr = array('controller' => 'Static_page','controller_name' => $this->uri->segment('1'),'method'=>ucwords($method));
	}
	
	 function index(){
		$this->main(1);
	}
	
	function main($id){
		$data = $this->controller_attr;
		$data['function']='detail';
		$static_page='dc_static_content';
		//custom
        $data['data']=select_where($this->tbl_static_content,'id',$id)->row();
		$data['page'] = $this->load->view('Static_page/index',$data,true);
		$this->load->view('layout_frontend',$data);
	}
}

