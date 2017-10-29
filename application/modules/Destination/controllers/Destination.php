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
		$data['list']=select_where($this->tbl_destination,'lang',$this->lang->lang())->result();
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
		$program_related=select_where_array_limit_order($this->tbl_program,$array=array('lang'=>$this->lang->lang()),4,'id','DESC')->result();
		foreach ($program_related as $key) {
			$image=select_where($this->tbl_program_images,'id_program',$key->id)->row();
			$key->image=$image->images;
			$key->id_image=$image->id;
			$category=select_where($this->tbl_category_program,'id',$key->id_program_category)->row();
			$key->category=$category->title;
		}
		$data['program_related']=$program_related;
		$data['article']=select_where_array_limit_order($this->tbl_news,$array=array('lang'=>$this->lang->lang(),'id_destination'=>$id),3,'id','DESC')->result();
		$data['program']=$program;

		$program_top1=select_where_array_limit_order($this->tbl_program,$array=array('id_destination'=>$id,'lang'=>$this->lang->lang()),1,'id','ASC')->result();
		foreach ($program_top1 as $key) {
			$image=select_where($this->tbl_program_images,'id_program',$key->id)->row();
			$key->image=$image->images;
			$key->id_image=$image->id;
			$category=select_where($this->tbl_category_program,'id',$key->id_program_category)->row();
			$key->category=$category->title;
		}
		$data['program_top1']=$program_top1;
		$program_top4=select_where_array_limit_order($this->tbl_program,$array=array('id_destination'=>$id,'lang'=>$this->lang->lang()),4,'id','DESC')->result();
		foreach ($program_top4 as $key) {
			$image=select_where($this->tbl_program_images,'id_program',$key->id)->row();
			$key->image=$image->images;
			$key->id_image=$image->id;
			$category=select_where($this->tbl_category_program,'id',$key->id_program_category)->row();
			$key->category=$category->title;
		}
		$data['program_top4']=$program_top4;

		$data['page'] = $this->load->view('Destination/detail',$data,true);
		$this->load->view('layout_frontend',$data);
	}
}

