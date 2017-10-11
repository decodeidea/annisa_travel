<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');


class Home extends DC_controller {

	function __construct() {
		parent::__construct();
		if($this->router->fetch_method()=='index'){
			$method='';
		}else{
			$method=str_replace('_',' ',$this->router->fetch_method());
		}
		$this->controller_attr = array('controller' => 'Home','controller_name' => 'Home');
	}
	
	 function index(){
		$data = $this->controller_attr;
		$data['function']='home';
		$data['banner']=select_where($this->tbl_banner,'lang',$this->lang->lang())->result();
		$top_destination=select_where_limit_order($this->tbl_program,'lang',$this->lang->lang(),3,'id','DESC')->result();
		foreach ($top_destination as $key) {
			$image=select_where($this->tbl_program_images,'id_program',$key->id)->row();
			$key->image=$image->images;
			$key->image_id=$image->id;
		}
		$data['top_destination']=$top_destination;
		$popular_destination=select_where_limit_order($this->tbl_program,'lang',$this->lang->lang(),6,'id','DESC')->result();
		foreach ($popular_destination as $key) {
			$image=select_where($this->tbl_program_images,'id_program',$key->id)->row();
			$key->image=$image->images;
			$key->image_id=$image->id;
		}
		$data['video']=select_where_limit_order($this->tbl_video,'lang',$this->lang->lang(),'3','id','DESC')->result();
		$data['article']=select_where_limit_order($this->tbl_news,'lang',$this->lang->lang(),'4','id','DESC')->result();
		$data['feat_article']=select_where_limit_order($this->tbl_news,'lang',$this->lang->lang(),'1','id','ASC')->row();
		$data['popular_destination']=$popular_destination;
		$data['destination']=select_where_limit_order($this->tbl_destination,'lang',$this->lang->lang(),7,'id','ASC')->result();
		$data['page'] = $this->load->view('Home/index',$data,true);
		$this->load->view('layout_frontend',$data);
	}
	
}

