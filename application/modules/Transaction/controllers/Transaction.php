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
		$data_pesanan=select_all_order($this->tbl_payment,'date_created','DESC');
    foreach ($data_pesanan as $key) {
      $doku=select_where($this->tbl_doku,'transidmerchant',$key->invoice)->row();
      $key->doku=$doku;
        $pay_program=select_where($this->tbl_payment_product,'id_payment',$key->id)->result();
        $key->product=$pay_program;
        foreach ($pay_program as $key2) {
          $program=select_where($this->tbl_program,'id',$key2->id_program)->row();
        }
        $member=select_where($this->tbl_member,'id',$key->id_member)->row();
        $key->member=$member;
        $key->program=$program->title;
    }
		$data['list']=$data_pesanan;
		$data['page'] = $this->load->view('Transaction/list_transaction',$data,true);
		$this->load->view('layout_backend',$data);
	}
function list_transaction_detail($id){
		$this->check_access();
		$data = $this->controller_attr;
		$data['function']='list_transaction';
		$data_pesanan=select_where($this->tbl_payment,'id',$id)->row();
   		$doku=select_where($this->tbl_doku,'transidmerchant',$data_pesanan->invoice)->row();
        $pay_program=select_where($this->tbl_payment_product,'id_payment',$data_pesanan->id)->result();
        foreach ($pay_program as $key2) {
          $program=select_where($this->tbl_program,'id',$key2->id_program)->row();
          $key2->program=$program;
        }
        $member=select_where($this->tbl_member,'id',$data_pesanan->id_member)->row();
        $data['doku']=$doku;
        $data['pay_program']=$pay_program;
		$data['list']=$data_pesanan;
		$data['voucher']=select_where($this->tbl_voucher,'id',$data_pesanan->id_voucher);
		$data['inquiry']=select_where($this->tbl_inquiry,'id_payment',$id)->result();
		$data['confirmation']=select_where_array($this->tbl_confirmation,$arrayName = array('id_member'=>$member->id,'invoice'=>$data_pesanan->invoice))->result();
		$data['member']=$member;
		$data['day']=select_where($this->tbl_program_day,'id',$data_pesanan->id_program_day)->row();
		$data['page'] = $this->load->view('Transaction/detail',$data,true);
		$this->load->view('layout_backend',$data);
}
	function change_status(){
		$data = $this->controller_attr;
		$data['function']='list_transaction_detail';
		$id=$this->input->post('id');
		$payment=select_where($this->tbl_payment,'id',$id)->row();
		$update= array(
			'trxstatus' => $this->input->post('status')
		);
        $query=update('doku',$update,'id',$payment->id_doku);
		if($query){
			$this->session->set_flashdata('notif','success');
			$this->session->set_flashdata('msg','Your data have been updated');
		}else{
			$this->session->set_flashdata('notif','error');
			$this->session->set_flashdata('msg','Your data not updated');
		}
		redirect($data['controller']."/".$data['function']."/".$id);
	}

}

