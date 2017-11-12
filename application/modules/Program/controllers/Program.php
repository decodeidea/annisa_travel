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
			$date=select_where($this->tbl_program_day,'id_program',$key->id)->row();
			$key->date=$date;
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
		$data['album_image']=select_where_limit_order($this->tbl_program_images,'id_program',$id,'4','id','ASC')->result();
		$data['date']=select_where($this->tbl_program_day,'id_program',$id)->result();
		$data['date_start']=select_where_order($this->tbl_program_day,'id_program',$id,'id','ASC')->row();
		$data['date_stop']=select_where_order($this->tbl_program_day,'id_program',$id,'id','DESC')->row();
		$program_related=select_where_array_limit_order($this->tbl_program,$array=array('id_program_category'=>$data['data']->id_program_category,'lang'=>$this->lang->lang()),4,'id','DESC')->result();
		foreach ($program_related as $key) {
			$image=select_where($this->tbl_program_images,'id_program',$key->id)->row();
			$key->image=$image->images;
			$key->id_image=$image->id;
			$category=select_where($this->tbl_category_program,'id',$key->id_program_category)->row();
			$key->category=$category->title;
		}
		$data['program_related']=$program_related;
		$data['page'] = $this->load->view('Program/detail',$data,true);
		$this->load->view('layout_frontend',$data);
	}

}

