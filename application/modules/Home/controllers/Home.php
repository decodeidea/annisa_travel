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
		$data['banner']=select_where_limit_order($this->tbl_banner,'lang',$this->lang->lang(),'4','id','DESC')->result();
		$top_destination=select_where_limit_order($this->tbl_program,'lang',$this->lang->lang(),3,'id','DESC')->result();
		foreach ($top_destination as $key) {
			$image=select_where($this->tbl_program_images,'id_program',$key->id)->row();
			$key->image=$image->images;
			$key->image_id=$image->id;
			$date=select_where($this->tbl_program_day,'id_program',$key->id)->row();
			$key->date=$date;
		}
		$data['top_destination']=$top_destination;
		$popular_destination=select_where_limit_order($this->tbl_program,'lang',$this->lang->lang(),6,'id','DESC')->result();
		foreach ($popular_destination as $key) {
			$image=select_where($this->tbl_program_images,'id_program',$key->id)->row();
			$key->image=$image->images;
			$key->image_id=$image->id;
			$date=select_where($this->tbl_program_day,'id_program',$key->id)->row();
			$key->date=$date;
		}
		$data['video']=select_where_limit_order($this->tbl_video,'lang',$this->lang->lang(),'3','id','DESC')->result();
		$data['article']=select_where_limit_order($this->tbl_news,'lang',$this->lang->lang(),'4','id','DESC')->result();
		$data['feat_article']=select_where_limit_order($this->tbl_news,'lang',$this->lang->lang(),'1','id','DESC')->row();
		$data['popular_destination']=$popular_destination;
		$data['destination']=select_where_array_limit_order($this->tbl_destination,$array=array('lang'=>$this->lang->lang(),'featured'=>1),5,'id','DESC')->result();
		$experience=select_all_limit_order($this->tbl_experience,'4','id','DESC')->result();
		foreach ($experience as $key) {
			$user=select_where($this->tbl_member,'id',$key->id_member)->row();
			$key->user=$user;
		}
		$data['experience']=$experience;
		$data['page'] = $this->load->view('Home/index',$data,true);
		$this->load->view('layout_frontend',$data);
	}

	function subscribe(){
		$subscribe=$this->input->post('subscribe');
		$count=select_where('dc_subscribe','email',$subscribe)->num_rows();
		if($count>0){
			echo"<div class='alert alert-danger'>Maaf, email anda sudah terdaftar di sistem kami.</div>";
		}else{
			$insert=insert_all('dc_subscribe',$data=array('email'=>$subscribe,'created_date'=>date('Y-m-d H:i:s')));
			if($insert){
				echo"<div class='alert alert-info'>Selamat, email anda berhasil di daftarkan di newsletter.</div>";
			}else{
				echo"<div class='alert alert-danger'>Maaf, email anda gagal didaftarkan</div>";
			}
		}
	}
	
}

