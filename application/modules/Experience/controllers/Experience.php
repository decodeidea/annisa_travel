<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');


class Experience extends DC_controller {

	function __construct() {
		parent::__construct();
		if($this->router->fetch_method()=='index'){
			$method='';
		}else{
			$method=str_replace('_',' ',$this->router->fetch_method());
		}
		$this->controller_attr = array('controller' => 'Experience','controller_name' => 'Experience');
	}
	
	 function index(){
		$data = $this->controller_attr;
		$data['function']='index';
		$data['list']=select_where_order($this->tbl_news,'lang',$this->lang->lang(),'4','DESC')->result();
		$data['page'] = $this->load->view('Experience/index',$data,true);
		$this->load->view('layout_frontend',$data);
	}
	function detail(){
		$data = $this->controller_attr;
		$data['function']='detail';
		// $data['data']=select_where($this->tbl_news,'id',$id)->row();
		// $data['article_populer']=select_where_limit_order($this->tbl_news,'lang',$this->lang->lang(),'4','id','DESC')->result();
		$data['page'] = $this->load->view('Experience/detail',$data,true);
		$this->load->view('layout_frontend',$data);
	}
}

