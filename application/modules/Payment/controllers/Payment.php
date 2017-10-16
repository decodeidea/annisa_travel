<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');


class Payment extends DC_controller {

	function __construct() {
		parent::__construct();
		if($this->router->fetch_method()=='index'){
			$method='';
		}else{
			$method=str_replace('_',' ',$this->router->fetch_method());
		}
		$this->controller_attr = array('controller' => 'Payment','controller_name' => 'Payment');
	}
	
	 function index(){
		$data = $this->controller_attr;
		$data['function']='index';
		$tmp=select_where($this->tbl_tmp_payment,'id_member',$this->session->userdata('id'));
		foreach ($tmp->result() as $key) {
			$key->program=select_where($this->tbl_program,'id',$key->id_program)->row();
		}
		$data['data']=$tmp;
		$data['page'] = $this->load->view('Payment/index',$data,true);
		$this->load->view('layout_frontend',$data);
	}
	function finish(){
		$data = $this->controller_attr;
		$data['function']='finish';
		$data['list']='';
		$data['page'] = $this->load->view('Payment/finish',$data,true);
		$this->load->view('layout_frontend',$data);
	}
	function tmp_payment(){
		$data = $this->controller_attr;
		if($this->session->userdata('id')){
		$program=select_where($this->tbl_program,'id',$this->input->post('id_program'))->row();
		if($this->input->post('quantity1')>=1){
		$tmp_data=array(
			'id_member'=>$this->session->userdata('id'),
			'id_program'=>$this->input->post('id_program'),
			'price'=>$program->price1,
			'type_room'=>'quad',
			'qtt'=>$this->input->post('quantity1'),
			'date_created'=>date('Y-m-d H:i:s'),
		);
		$insert=$this->db->insert($this->tbl_tmp_payment,$tmp_data);
		}elseif($this->input->post('quantity2')>=1){
			$tmp_data=array(
			'id_member'=>$this->session->userdata('id'),
			'id_program'=>$this->input->post('id_program'),
			'price'=>$program->price2,
			'type_room'=>'double',
			'qtt'=>$this->input->post('quantity2'),
			'date_created'=>date('Y-m-d H:i:s'),
		);
		$insert=$this->db->insert($this->tbl_tmp_payment,$tmp_data);
		}elseif($this->input->post('quantity3')>=1){
			$tmp_data=array(
			'id_member'=>$this->session->userdata('id'),
			'id_program'=>$this->input->post('id_program'),
			'price'=>$program->price3,
			'type_room'=>'triple',
			'qtt'=>$this->input->post('quantity3'),
			'date_created'=>date('Y-m-d H:i:s'),
		);
		$insert=$this->db->insert($this->tbl_tmp_payment,$tmp_data);
		}else{
			$this->session->set_flashdata('msg','Maaf anda harus mengisi salah satu quantity');
			redirect(site_url('Program/detail/'.$program->id.'/'.str_replace(" ", "-", $program->title)));
		}
		if($insert){
			redirect(site_url('Payment'));
		}else{
			echo"error";
		}
		}else{
			$this->session->set_flashdata('msg','Maaf anda harus login terlebih dahulu untuk memesan program');
			redirect(site_url('Account/login'));
		}
		
	}
}

