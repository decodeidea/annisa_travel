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
    if(!$this->session->userdata('validated')){
      $this->session->set_flashdata('msg','Maaf anda harus login terlebih dahulu untuk mengakses halaman ini.');
          redirect(site_url('Account/login'));
    }
		$data = $this->controller_attr;
		$data['function']='index';
    $data['cek_menu']='0';//kode 0 active default
		$data['data']=select_where($this->tbl_member,'id',$this->session->userdata('id'))->row();
		$data['page'] = $this->load->view('Account/index',$data,true);
		$this->load->view('layout_frontend',$data);
	}

  function whislist(){
    $data = $this->controller_attr;
    $data['function']='whislist';
    $data['cek_menu']='1';//1kode active whislist
    $data['data']=select_where($this->tbl_member,'id',$this->session->userdata('id'))->row();
    if($this->session->userdata('id')){
   
       //echo "msul";exit();
        $tmp_data=array(
          'id_member'=>$this->session->userdata('id'),
          'id_program'=>$_POST['idP'],
          'date_created'=>date('Y-m-d H:i:s'),
        );
        $insert=$this->db->insert($this->tbl_whislist,$tmp_data);
        if($insert){
         redirect(site_url('Account?mn=mywhislist'));
        }
      
    }else{
      $this->session->set_flashdata('msg','Maaf anda harus login terlebih dahulu untuk memesan program');
      redirect(site_url('Account/login'));
     
    }
  }

  function change_profile(){
    $data = $this->controller_attr;
    $data['function']='profile';
    $id=$this->input->post('id');
    $first_name = $this->input->post('first_name')." ".$this->input->post('last_name');
    $table_field = $this->db->list_fields($this->tbl_member);
    $static=select_where($this->tbl_member,'id',$id)->row();
    $update = array();
        foreach ($table_field as $field) {
            $update[$field] = $this->input->post($field);
        }
        if(empty($_FILES['profile_pict']['name'])){
          $update['profile_pict']=$static->profile_pict;
        }else{
           $update['profile_pict']=$_FILES['profile_pict']['name'];
        }
        $update['first_name']=$first_name;
        $update['date_created']=$static->date_created;
        $update['date_modified']= date("Y-m-d H:i:s");
      
        $query=update($this->tbl_member,$update,'id',$id);
    if($query){
      if(!empty($_FILES['profile_pict']['name'])){
      unlink('assets/uploads/profile/'.$id.'/'.$static->profile_pict);
      if (!file_exists('assets/uploads/profile/'.$id)) {
            mkdir('assets/uploads/profile/'.$id, 0777, true);
       }
           $config['upload_path'] = 'assets/uploads/profile/'.$id;
             $config['allowed_types'] = 'jpg|jpeg|png|gif';
             $config['file_name'] = $_FILES['profile_pict']['name'];
             $this->upload->initialize($config);
             if($this->upload->do_upload('profile_pict')){
                    $uploadData = $this->upload->data();
                }else{
                    echo"error upload";
                    die();
              }
          }
      $this->session->set_flashdata('notif','success');
      $this->session->set_flashdata('msg','Your data have been updated');
    }else{
      $this->session->set_flashdata('notif','error');
      $this->session->set_flashdata('msg','Your data not updated');
    }
    redirect(site_url('Account?mn=profile'));
  }

  function experience(){
    $data = $this->controller_attr;
    $data['function']='whislist';
    //$data['cek_menu']='1';//1kode active whislist
    $data['data']=select_where($this->tbl_member,'id',$this->session->userdata('id'))->row();
    if($this->session->userdata('id')){
   
      $table_field = $this->db->list_fields($this->tbl_experience);
      $insert = array();
      foreach ($table_field as $field) {
          if($field!='id'){
            $insert[$field] = $this->input->post($field);
          }
      }           
      if(empty($_FILES['images']['name'])){
        $insert['images']=='';
      }else{
         $insert['images']=$_FILES['images']['name'];
      }
      
      $insert['date_created']= date("Y-m-d H:i:s");
     
      $query=insert_all($this->tbl_experience,$insert);
      //print_r($this->db->insert_id());exit();
      //$insert['id']=$this->input->post('id');
      if($query){
        if(!empty($_FILES['images']['name'])){
          if (!file_exists('assets/uploads/experience/'.$this->db->insert_id())) {
            mkdir('assets/uploads/experience/'.$this->db->insert_id(), 0777, true);
          }
          $config['upload_path'] = 'assets/uploads/experience/'.$this->db->insert_id();
           $config['allowed_types'] = 'jpg|jpeg|png|gif';
           $config['file_name'] = $_FILES['images']['name'];
           $this->upload->initialize($config);
           if($this->upload->do_upload('images')){
                  $uploadData = $this->upload->data();
              }else{
                  echo"error upload";
                  die();
            }
        }
        $this->session->set_flashdata('notif','success');
        $this->session->set_flashdata('msg','Your data have been added. Please check your list experience');
      }else{
        $this->session->set_flashdata('notif','error');
        $this->session->set_flashdata('msg','Your data not added');
      }
      redirect(site_url('Account?mn=experience'));
      
    }else{
      $this->session->set_flashdata('msg','Maaf anda harus login terlebih dahulu untuk memesan program');
      redirect(site_url('Account/login'));
     
    }
  }

	function login(){
		$data = $this->controller_attr;
		$this->load->library('facebook');
    	$this->load->library('googleplus');
		$data['function']='login';
     $data['cek_menu']='0';//kode 0 active default
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
                    'photo'=>$row->profile_pict,
                    'phone'=>$row->phone,
                    'validated' => true
                    );

           		$this->session->set_userdata($data);
         	} if($this->session->userdata('current')){
            redirect($this->session->userdata('current'));
          }else{
            redirect(site_url('Account'));
          }
            	
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
                    'photo'=>$row->profile_pict,
                    'validated' => true
                    );

           $this->session->set_userdata($data);
            if($this->session->userdata('current')){
            redirect($this->session->userdata('current'));
          }else{
            redirect(site_url('Account'));
          }
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
                    'photo'=>$row->profile_pict,
                    'phone'=>$row->phone,
                    'validated' => true
                    );

           $this->session->set_userdata($data);
            if($this->session->userdata('current')){
            redirect($this->session->userdata('current'));
          }else{
            redirect(site_url('Account'));
          }
    } 
   
  }
}
public function do_login()
  {
    $this->form_validation->set_rules('email', 'EMAIL', 'trim|required|valid_email');
    $this->form_validation->set_rules('password', 'PASSWORD', 'trim|required');
    if ($this->form_validation->run() == FALSE) {
      redirect(site_url('Account/login'));
    }else{
          $this->db->where('email', $this->input->post('email'));
          $query = $this->db->get('dc_member');
          if($query->num_rows() == 1)
    {
      $row=$query->row();
      $pass=$row->password;
      if($pass==$this->input->post('password')){
         $data = array(
                    'id' => $row->id,
                    'email' => $row->email,
                    'password' => $row->password,
                    'firstname'=>$row->first_name,
                    'photo'=>$row->profile_pict,
                    'validated' => true
                    );

           $this->session->set_userdata($data);
           if($this->session->userdata('current')){
            redirect($this->session->userdata('current'));
          }else{
            redirect(site_url('Account'));
          }
      }else{
        $this->session->set_flashdata('msg','Password yang anda masukan salah');
          $this->session->set_flashdata('email',$this->input->post('email'));
              redirect(site_url('Account/login'));
      }
    }else{
      $this->session->set_flashdata('msg','Email yang anda masukan belum terdaftar');
          $this->session->set_flashdata('email',$this->input->post('email'));
              redirect(site_url('Account/login'));
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


  function do_register(){
    $data=array(
        'first_name'=>$this->input->post('first_name'),
        'login_type' => 1,
        'email'=>$this->input->post('email'),
        'email'=>$this->input->post('phone'),
        'verified_account'=>0,
        'password'=>$this->input->post('password'),
        'date_created' => date('Y-m-d h:i:s', now()),
      );
    $this->session->set_flashdata($data);
    $this->db->where('email', $this->input->post('email'));
          $query = $this->db->get('dc_member');
          if($query->num_rows() == 1)
      {
       $this->session->set_flashdata('msg','Email yang anda masukan telah terdaftar');
          redirect(site_url('Account/register'));
        }
      else{
        if($data['password']!=$this->input->post('cpass')){
        $this->session->set_flashdata('notif','failed');
        $this->session->set_flashdata('msg','Gagal, Password dan Konfirmasi Password harus sama!');
        redirect('register');
      }else{
        $insert=$this->db->insert('dc_member',$data);
        if($insert){
          $row=$this->db->query("select * from dc_member where email='".$this->input->post('email')."'")->row();
          $data = array(
                  'id' => $row->id,
                    'email' => $row->email,
                    'password' => $row->password,
                    'firstname'=>$row->first_name,
                    'photo'=>$row->profile_pict,
                    'validated' => true
                    );
                    $this->session->set_userdata($data);
          redirect(site_url('Account'));
        }else{
          echo"failed";
        }
        }
  }
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

