<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');


class Transaction extends DC_controller {

	function __construct() {
		parent::__construct();
		$this->check_login();
		if($this->router->fetch_method()=='index'){
			$method='';
		}else{
			$method=str_replace('_',' ',$this->router->fetch_method());
		}
		$this->controller_attr = array('controller' => 'Transaction','controller_name' => 'Transaction','method'=>ucwords($method),'menu'=>$this->get_menu());
	}
	
	 function index(){
		redirect(site_url('Transaction/list_transaction'));
	}
	
	function list_transaction(){
		$this->check_access();
		$data = $this->controller_attr;
		$data['function']='list_transaction';
		$data_pesanan=select_all($this->tbl_payment);
    foreach ($data_pesanan as $key) {
      $doku=select_where($this->tbl_doku,'transidmerchant',$key->invoice)->row();
      $key->doku=$doku;
        $pay_program=select_where($this->tbl_payment_product,'id_payment',$key->id)->result();
        $key->product=$pay_program;
        foreach ($pay_program as $key2) {
          $program=select_where($this->tbl_program,'id',$key2->id_program)->row();
        }
        $key->program=$program->title;
    }
		$data['list']=$data_pesanan;
		$data['page'] = $this->load->view('Transaction/list_transaction',$data,true);
		$this->load->view('layout_backend',$data);
	}

	
}

