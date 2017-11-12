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
	function detail($id){
		$data = $this->controller_attr;
		$data['function']='detail';
		$data['data']=select_where($this->tbl_experience,'id',$id)->row();
		$data['article_populer']=select_where_limit_order($this->tbl_news,'lang',$this->lang->lang(),'4','id','DESC')->result();
		$data['article_user']=select_where($this->tbl_member,'id',$data['data']->id_member)->row();
		$data['video']=select_where_limit_order($this->tbl_video,'lang',$this->lang->lang(),'3','id','DESC')->result();
		$program_related=select_where_array_limit_order($this->tbl_program,$array=array('lang'=>$this->lang->lang()),3,'id','DESC')->result();
		foreach ($program_related as $key) {
			$image=select_where($this->tbl_program_images,'id_program',$key->id)->row();
			$key->image=$image->images;
			$key->id_image=$image->id;
			$category=select_where($this->tbl_category_program,'id',$key->id_program_category)->row();
			$key->category=$category->title;
		}
		$data['program_related']=$program_related;
		$promo=select_where_array_limit_order($this->tbl_program,$array=array('lang'=>$this->lang->lang(),'promo'=>1),3,'id','DESC')->result();
		foreach ($promo as $key) {
			$image=select_where($this->tbl_program_images,'id_program',$key->id)->row();
			$key->image=$image->images;
			$key->id_image=$image->id;
			$category=select_where($this->tbl_category_program,'id',$key->id_program_category)->row();
			$key->category=$category->title;
		}
		$data['promo']=$promo;
		$data['page'] = $this->load->view('Experience/detail',$data,true);
		$this->load->view('layout_frontend',$data);
	}
}

