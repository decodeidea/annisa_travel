<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');


class Voucher extends DC_controller {

	function __construct() {
		parent::__construct();
		$this->check_login();
		if($this->router->fetch_method()=='index'){
			$method='';
		}else{
			$method=str_replace('_',' ',$this->router->fetch_method());
		}
		$this->controller_attr = array('controller' => 'Voucher','controller_name' => 'Voucher','method'=>ucwords($method),'menu'=>$this->get_menu());
	}
	
	 function index(){
		redirect(site_url('voucher/list_voucher'));
	}
	
	function list_voucher(){
		$this->check_access();
		$data = $this->controller_attr;
		$data['function']='list_voucher';
		$data['list']=select_all($this->tbl_voucher);
		$data['page'] = $this->load->view('Voucher/list_voucher',$data,true);
		$this->load->view('layout_backend',$data);
	}

	function list_voucher_form($id=null){
		$this->check_access();
		$data = $this->controller_attr;
		$data['function']='list_voucher';
		if ($id) {
            $data['data'] = select_where($this->tbl_voucher, 'id', $id)->row();
        }
        else{
            $data['data'] = null;
        }
		$data['page'] = $this->load->view('Voucher/list_voucher_form',$data,true);
		$this->load->view('layout_backend',$data);
	}

	function list_voucher_update(){
		$data = $this->controller_attr;
		$data['function']='list_voucher';
		$id=$this->input->post('id');
		$table_field = $this->db->list_fields($this->tbl_voucher);
		$voucher=select_where($this->tbl_voucher,'id',$id)->row();
		$update = array();
        foreach ($table_field as $field) {
            $update[$field] = $this->input->post($field);
        }
      	$update['status']= $voucher->status;
        $update['date_modified']= date("Y-m-d H:i:s");
        $update['id_modifier']=$this->session->userdata('admin')['id'];
        $query=update($this->tbl_voucher,$update,'id',$id);
		if($query){
			
			$this->session->set_flashdata('notif','success');
			$this->session->set_flashdata('msg','Your data have been updated');
		}else{
			$this->session->set_flashdata('notif','error');
			$this->session->set_flashdata('msg','Your data not updated');
		}
		redirect(site_url($data['controller']."/".$data['function']));
	}

	function list_voucher_add(){
		$data = $this->controller_attr;
		$data['function']='list_voucher';
		$table_field = $this->db->list_fields($this->tbl_voucher);
		$insert = array();
		foreach ($table_field as $field) {
           if($field!='id'){
            	$insert[$field] = $this->input->post($field);
			}
        }
		$insert['status']= 1;
        $insert['date_created']= date("Y-m-d H:i:s");
        $insert['id_creator']=$this->session->userdata('admin')['id'];
        $query=insert_all($this->tbl_voucher,$insert);
        $insert['id']=$this->input->post('id');
		if($query){
			
			$this->session->set_flashdata('notif','success');
			$this->session->set_flashdata('msg','Your data have been added');
		}else{
			$this->session->set_flashdata('notif','error');
			$this->session->set_flashdata('msg','Your data not added');
		}
		redirect(site_url($data['controller']."/".$data['function']));
	}

	function list_voucher_delete($id){
		$data = $this->controller_attr;
		$function='list_voucher';
		$query=delete($this->tbl_voucher,'id',$id);
		if($query){
			$this->session->set_flashdata('notif','success');
			$this->session->set_flashdata('msg','Your data have been deleted');
		}else{
			$this->session->set_flashdata('notif','error');
			$this->session->set_flashdata('msg','Your data not deleted');
		}
	}

	
}

