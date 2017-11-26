<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');


class Message extends DC_controller {

	function __construct() {
		parent::__construct();
		$this->check_login();
		if($this->router->fetch_method()=='index'){
			$method='';
		}else{
			$method=str_replace('_',' ',$this->router->fetch_method());
		}
		$this->controller_attr = array('controller' => 'Message','controller_name' => 'Message','method'=>ucwords($method),'menu'=>$this->get_menu());
	}
	
	 function index(){
		redirect(site_url().'/Message/inbox');
	}
	
	function inbox(){
		$this->check_access();
		$data = $this->controller_attr;
		$data['function']='inbox';
		$data['list']=select_all($this->tbl_contact);
		$data['page'] = $this->load->view('Message/list_inbox',$data,true);
		$this->load->view('layout_backend',$data);
	}

	function compose($email=null){
		$this->check_access();
		$data = $this->controller_attr;
		$data['function']='inbox';
		if ($email) {
            $data['email'] = $email;
        }
        else{
            $data['email'] = null;
        }
        $data['list']=select_all('dc_subscribe');
		$data['page'] = $this->load->view('Message/inbox_form',$data,true);
		$this->load->view('layout_backend',$data);
	}

	function send(){
		$data = $this->controller_attr;
		$data['function']='inbox';
		$config = Array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => 'info@annisatravel.com',
			'smtp_pass' => 'annisa2017oke',
			'mailtype'  => 'html', 
			'charset'   => 'iso-8859-1'
		);
		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");
		$this->email->from('info@annisatravel.com', 'Annisa Travel');
		if($this->input->post('email')=='all'){
			$list=select_all('dc_subscribe');
			foreach ($list as $key) {
				$email=$key->email;
				$this->email->to($email);
		    $this->email->subject($this->input->post('subject'));
		    $message = $this->input->post('content');
		    $this->email->message($message);
			}
		}else{
			$email=$this->input->post('email');
			$this->email->to($email);
		    $this->email->subject($this->input->post('subject'));
		    $message = $this->input->post('content');
		    $this->email->message($message);
		}
		    
		    if ( ! $this->email->send()) {
		       $this->session->set_flashdata('notif','success');
				$this->session->set_flashdata('msg','Your email have been sended');
				redirect($data['controller']."/".$data['function']);
		    }else{
		    	$this->session->set_flashdata('notif','success');
				$this->session->set_flashdata('msg','Your email have been sended');
				redirect($data['controller']."/".$data['function']);
		    } 
	}
	
	function inbox_add(){
		$data = $this->controller_attr;
		$data['function']='inbox';
		$table_field = $this->db->list_fields($this->tbl_contact);
		$insert = array();
        foreach ($table_field as $field) {
            $insert[$field] = $this->input->post($field);
        }
        $insert['date_created']= date("Y-m-d H:i:s");
        $insert['id_creator']=$this->session->userdata('admin')['id'];
        $query=insert_all($this->tbl_contact,$insert);
		if($query){
			$this->session->set_flashdata('notif','success');
			$this->session->set_flashdata('msg','Your data have been added');
		}else{
			$this->session->set_flashdata('notif','error');
			$this->session->set_flashdata('msg','Your data not added');
		}
		redirect($data['controller']."/".$data['function']);
	}

}

