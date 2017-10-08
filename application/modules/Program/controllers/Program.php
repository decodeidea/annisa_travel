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
		$this->controller_attr = array('controller' => 'Program','controller_name' => 'Program');
	}
	
	 function index(){
		$data = $this->controller_attr;
		$data['function']='index';
		$array_program=array(
			'lang'=>$this->lang->lang(),
		);
		$program=select_where_array_order($this->tbl_program,$array_program,'id','DESC')->result();
		foreach ($program as $key) {
			$image=select_where($this->tbl_program_images,'id_program',$key->id)->row();
			$key->image=$image->images;
			$key->id_image=$image->id;
		}
		$data['list']=$program;
		$data['page'] = $this->load->view('Program/index',$data,true);
		$this->load->view('layout_frontend',$data);
	}
	function category($id_destination,$id_category){
		$data = $this->controller_attr;
		$data['function']='category';
		$array_program=array(
			'lang'=>$this->lang->lang(),
			'id_destination'=>$id_destination
		);
		$program=select_where_array_order($this->tbl_program,$array_program,'id','DESC')->result();
		foreach ($program as $key) {
			$image=select_where($this->tbl_program_images,'id_program',$key->id)->row();
			$key->image=$image->images;
			$key->id_image=$image->id;
		}
		$data['category']=select_where($this->tbl_category_program,'id',$id_category)->row();
		$data['data']=$program;
		$data['page'] = $this->load->view('Program/category',$data,true);
		$this->load->view('layout_frontend',$data);
	}
	function detail($id){
		$data = $this->controller_attr;
		$data['function']='register';
		$data['data']=select_where($this->tbl_program,'id',$id)->row();
		$data['album_image']=select_where($this->tbl_program_images,'id_program',$id)->result();
		$data['date']=select_where($this->tbl_program_day,'id_program',$id)->result();
		$data['page'] = $this->load->view('Program/detail',$data,true);
		$this->load->view('layout_frontend',$data);
	}
}

