<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');


class Destination extends DC_controller {

	function __construct() {
		parent::__construct();
		if($this->router->fetch_method()=='index'){
			$method='';
		}else{
			$method=str_replace('_',' ',$this->router->fetch_method());
		}
		$this->controller_attr = array('controller' => 'Destination','controller_name' => 'Destination');
	}
	
	 function index(){
		$data = $this->controller_attr;
		$data['function']='index';
		$data['list']='';
		$data['page'] = $this->load->view('Destination/index',$data,true);
		$this->load->view('layout_frontend',$data);
	}

	function category($id){
		$data = $this->controller_attr;
		$data['function']='category';
		$data['data']=select_where($this->tbl_destination,'id',$id)->row();
		$array_program=array(
			'lang'=>$this->lang->lang(),
			'id_destination'=>$id
		);
		$program=select_where_array_order($this->tbl_program,$array_program,'id','DESC')->result();
		foreach ($program as $key) {
			$category=select_where($this->tbl_category_program,'id',$key->id_program_category)->row();
			$key->category=$category;
		}
		$data['program']=$program;
		$data['page'] = $this->load->view('Destination/category',$data,true);
		$this->load->view('layout_frontend',$data);
	}

	function detail($id){
		$data = $this->controller_attr;
		$data['function']='index';
		$data['data']=select_where($this->tbl_destination,'id',$id)->row();
		$array_program=array(
			'lang'=>$this->lang->lang(),
			'id_destination'=>$id
		);
		$program=select_where_array_limit_order($this->tbl_program,$array_program,6,'id','DESC')->result();
		foreach ($program as $key) {
			$category=select_where($this->tbl_category_program,'id',$key->id_program_category)->row();
			$key->category=$category;
		}
		$data['program']=$program;
		$data['page'] = $this->load->view('Destination/detail',$data,true);
		$this->load->view('layout_frontend',$data);
	}
}

