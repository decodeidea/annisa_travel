<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');


class Program extends DC_controller {

	function __construct() {
		parent::__construct();
		if($this->router->fetch_method()=='index'){
			$method='';
		}else{
			$method=str_replace('_',' ',$this->router->fetch_method());
		}
		$this->controller_attr = array('controller' => 'program','controller_name' => 'Program');
	}
	
	 function index(){
		$data = $this->controller_attr;
		$data['function']='index';
		$data['list']='';
		$data['page'] = $this->load->view('Program/index',$data,true);
		$this->load->view('layout_frontend',$data);
	}
	function category(){
		$data = $this->controller_attr;
		$data['function']='login';
		$data['list']='';
		$data['page'] = $this->load->view('Program/category',$data,true);
		$this->load->view('layout_frontend',$data);
	}
	function detail($id){
		$data = $this->controller_attr;
		$data['function']='register';
		$data['data']=select_where($this->tbl_program,'id',$id)->row();
		$data['album_image']=select_where($this->tbl_program_images,'id_program',$id)->result();
		$data['page'] = $this->load->view('Program/detail',$data,true);
		$this->load->view('layout_frontend',$data);
	}
}

