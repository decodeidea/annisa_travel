<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');


class Account extends DC_controller {

	function __construct() {
		parent::__construct();
		if($this->router->fetch_method()=='index'){
			$method='';
		}else{
			$method=str_replace('_',' ',$this->router->fetch_method());
		}
		$this->controller_attr = array('controller' => 'Account','controller_name' => 'Account');
	}
	
	 function index(){
		$data = $this->controller_attr;
		$data['function']='index';
		$data['list']='';
		$data['page'] = $this->load->view('Account/index',$data,true);
		$this->load->view('layout_frontend',$data);
	}
	function login(){
		$data = $this->controller_attr;
		$this->load->library('facebook');
    	$this->load->library('googleplus');
		$data['function']='login';
		if($this->session->userdata('validated')){
      		redirect(site_url('Account'));
    	}else{
      		$user = $this->facebook->getUser();
        if($user){
            try {
                $user_profile = $this->facebook->api('/me/?fields=name,email,gender');      
            }catch (FacebookApiException $e) {
                $user = null;
            }
        }
        if ($user) {
          if($user_profile['email']==''){
          $this->session->set_flashdata('msg','Maaf email facebook anda di rahasiakan, silahkan login dengan cara biasa.');
          redirect(site_url('Account/login'));
        }
          $this->db->where('email', $user_profile['email']);
          $query = $this->db->get('dc_member');
          if($query->num_rows() == 1)
    	{
      $row = $query->row();
      $data = array(
          'id' => $row->id,
                    'email' => $row->email,
                    'password' => $row->password,
                    'firstname'=>$row->first_name,
                    'lastname'=>$row->last_name,
                    'photo'=>$row->profile_pict,
                    'phone'=>$row->phone,
                    'validated' => true
                    );

           $this->session->set_userdata($data);
         }else{
        $data_new = array(
        'first_name' => $user_profile['name'],
        'login_type' => 2,
        'email' => $user_profile['email'],
        'profile_pict' => "https://graph.facebook.com/".$user_profile['id']."/picture?type=large",
        'date_created' => date('Y-m-d h:i:s', now()),
        'verified_account'=>0
      );
      $insert = $this->db->insert('dc_member', $data_new);
      $this->db->where('email', $user_profile['email']);
          $query = $this->db->get('dc_member');
          $row = $query->row();
      $data = array(
          'id' => $row->id,
                    'email' => $row->email,
                    'password' => $row->password,
                    'firstname'=>$row->first_name,
                    'lastname'=>$row->last_name,
                    'photo'=>$row->profile_pict,
                    'phone'=>$row->phone,
                    'validated' => true
                    );

           		$this->session->set_userdata($data);
         	}
            	redirect(site_url('Account'));
        	}else{
            	$data['login_url'] = $this->facebook->getLoginUrl(array(
                'redirect_uri' => site_url('Account/login'), 
                 'scope'         => 'email, user_birthday, user_location, user_work_history, user_hometown, user_photos,'
            	));
        	}
    		$data['login_google'] = $this->googleplus->loginURL();
			$data['page'] = $this->load->view('Account/login',$data,true);
			$this->load->view('layout_frontend',$data);
		}
	}
   public function google(){
    $this->load->library('googleplus');
            if (isset($_GET['code'])) {
      
      $this->googleplus->getAuthenticate();
     $user_profile=$this->googleplus->getUserInfo();
          $this->db->where('email', $user_profile['email']);
          $query = $this->db->get('dc_member');
          if($query->num_rows() == 1)
    {
      $row = $query->row();
      $data = array(
         'id' => $row->id,
                    'email' => $row->email,
                    'password' => $row->password,
                    'firstname'=>$row->first_name,
                    'lastname'=>$row->last_name,
                    'photo'=>$row->profile_pict,
                    'validated' => true
                    );

           $this->session->set_userdata($data);
         }else{
        $data_new = array(
        'first_name' => $user_profile['name'],
        'login_type' => 3,
        'email' => $user_profile['email'],
        'profile_pict' => $user_profile['picture'],
        'date_created' => date('Y-m-d h:i:s', now()),
        'verified_account'=>0
      );
      $insert = $this->db->insert('dc_member', $data_new);
      $this->db->where('email', $user_profile['email']);
          $query = $this->db->get('dc_member');
          $row = $query->row();
      $data = array(
          'id' => $row->id,
                    'email' => $row->email,
                    'password' => $row->password,
                    'firstname'=>$row->first_name,
                    'lastname'=>$row->last_name,
                    'photo'=>$row->profile_pict,
                    'phone'=>$row->phone,
                    'validated' => true
                    );

           $this->session->set_userdata($data);
            redirect(site_url('Account'));
    } 
   
  }
}
	function register(){
		$data = $this->controller_attr;
		$data['function']='register';
		$data['list']='';
		$data['page'] = $this->load->view('Account/register',$data,true);
		$this->load->view('layout_frontend',$data);
	}

	 function logout(){

        $this->load->library('facebook');
        $this->load->library('googleplus');
        $this->googleplus->revokeToken();
        // Logs off session from website
        $this->facebook->destroySession();
        $this->session->sess_destroy();
        // Make sure you destory website session as well.

        redirect(site_url('Account/login'));
    }
}

