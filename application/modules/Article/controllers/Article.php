<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');


class Article extends DC_controller {

	function __construct() {
		parent::__construct();
		if($this->router->fetch_method()=='index'){
			$method='';
		}else{
			$method=str_replace('_',' ',$this->router->fetch_method());
		}
		$this->controller_attr = array('controller' => 'Article','controller_name' => 'Article');
	}
	
	 function index(){
		$data = $this->controller_attr;
		$data['function']='article';
		$data['list']=select_where_order($this->tbl_news,'lang',$this->lang->lang(),'4','DESC')->result();
		$data['page'] = $this->load->view('Article/index',$data,true);
		$this->load->view('layout_frontend',$data);
	}
	function detail($id){
		$data = $this->controller_attr;
		$data['function']='article';
		$data['data']=select_where($this->tbl_news,'id',$id)->row();
		$data['article_populer']=select_where_limit_order($this->tbl_news,'lang',$this->lang->lang(),'4','id','DESC')->result();
		$data['page'] = $this->load->view('Article/detail',$data,true);
		$this->load->view('layout_frontend',$data);
	}
}

