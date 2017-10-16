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
		$data['data']=select_where($this->tbl_tmp_payment,'id_member',$this->session->userdata('id'));
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
		$total1=$program->price1*$this->input->post('quantity1');
		$total2=$program->price2*$this->input->post('quantity2');
		$total3=$program->price3*$this->input->post('quantity3');
		$total_all=$total1+$total2+$total3;
		$tmp_data=array(
			'id_member'=>$this->session->userdata('id'),
			'id_program'=>$this->input->post('id_program'),
			'price1'=>$program->price1,
			'price2'=>$program->price2,
			'price3'=>$program->price3,
			'qtt1'=>$this->input->post('quantity1'),
			'qtt2'=>$this->input->post('quantity2'),
			'qtt3'=>$this->input->post('quantity3'),
			'total_price'=>$total_all,
			'date_created'=>date('Y-m-d H:i:s'),
		);
		$insert=$this->db->insert($this->tbl_tmp_payment,$tmp_data);
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

