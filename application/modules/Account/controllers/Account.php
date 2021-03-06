<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');
  include_once(APPPATH."third_party/facebook-sdk-v5/autoload.php");

class Account extends DC_controller {

	function __construct() {
		parent::__construct();
    $this->fb = new Facebook\Facebook([
      'app_id' => '1900904640228296',
      'app_secret' => '8912f2292773f68f633a3f8ad70e6fa0',
      'default_graph_version' => 'v2.5',
    ]);

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
    if(isset($_GET['inquiry'])){
    $data_pesanan=select_where_array($this->tbl_payment,$arrayName = array('invoice'=>$_GET['inquiry'],'id_member' => $this->session->userdata('id'),'inquiry'=>NULL ));
    }else{
    $data_pesanan=$this->db->query("select dc_payment.* from dc_payment inner join doku on doku.id=dc_payment.id_doku where dc_payment.id_member='".$this->session->userdata('id')."' and doku.trxstatus!='Failed' and dc_payment.inquiry IS NULL");
    }
    foreach ($data_pesanan->result() as $key) {
      $doku=select_where($this->tbl_doku,'transidmerchant',$key->invoice)->row();
      $key->doku=$doku;
        $pay_program=select_where($this->tbl_payment_product,'id_payment',$key->id)->result();
        foreach ($pay_program as $key2) {
          $program=select_where($this->tbl_program,'id',$key2->id_program)->row();
          $key2->title=$program->title;
        }
        $key->product=$pay_program;
    }
    $data_pesanan_done=$this->db->query("select dc_payment.* from dc_payment inner join doku on doku.id=dc_payment.id_doku where dc_payment.id_member='".$this->session->userdata('id')."' and doku.trxstatus!='Failed' and dc_payment.inquiry='1'");
    foreach ($data_pesanan_done->result() as $key) {
      $doku=select_where($this->tbl_doku,'transidmerchant',$key->invoice)->row();
      $key->doku=$doku;
        $pay_program=select_where($this->tbl_payment_product,'id_payment',$key->id)->result();
        foreach ($pay_program as $key2) {
          $program=select_where($this->tbl_program,'id',$key2->id_program)->row();
          $key2->title=$program->title;
        }
        $key->product=$pay_program;
    }

    $data_pesanan_failed= $this->db->query("select dc_payment.* from dc_payment inner join doku on doku.id=dc_payment.id_doku where dc_payment.id_member='".$this->session->userdata('id')."' and doku.trxstatus='Failed'");
    foreach ($data_pesanan_failed->result() as $key) {
      $doku=select_where($this->tbl_doku,'transidmerchant',$key->invoice)->row();
      $key->doku=$doku;
        $pay_program=select_where($this->tbl_payment_product,'id_payment',$key->id)->result();
        foreach ($pay_program as $key2) {
          $program=select_where($this->tbl_program,'id',$key2->id_program)->row();
          $key2->title=$program->title;
        }
        $key->product=$pay_program;
    }
    $data['data_pesanan_count']=$this->db->query("select dc_payment.* from dc_payment inner join doku on doku.id=dc_payment.id_doku where dc_payment.id_member='".$this->session->userdata('id')."' and doku.trxstatus!='Failed' and dc_payment.inquiry IS NULL")->num_rows();
    $data['data_pesanan']=$data_pesanan->result();
    
    $data['data_pesanan_done']=$data_pesanan_done->result();
    $data['data_pesanan_failed']=$data_pesanan_failed->result();
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

  function submit_confirmation(){
    $data = $this->controller_attr;
    $data['function']='submit_confirmation';
    $data['cek_menu']='0';//1kode active whislist
    $payment=select_where($this->tbl_payment,'invoice',$this->input->post('invoice'))->num_rows();
    if($payment>0){
        $tmp_data=array(
          'id_member'=>$this->session->userdata('id'),
          'invoice'=>$this->input->post('invoice'),
          'nama_pengirim'=>$this->input->post('nama_pengirim'),
          'metode_pembayaran'=>$this->input->post('metode_pembayaran'),          
          'notes'=>$this->input->post('notes'),
          'date_created'=>date('Y-m-d H:i:s'),
        );
        $insert=$this->db->insert($this->tbl_confirmation,$tmp_data);
        if($insert){
          $this->session->set_flashdata('msg','Form konfirmasi pesanan anda berhasil dikirim.');
         redirect(site_url('Account?mn=confirmation'));
        }
      
    }else{
      $this->session->set_flashdata('msg','Maaf no invoice anda tidak terdaftar');
      redirect(site_url('Account?mn=confirmation'));
     
    }
  }

  function change_password(){
    $data = $this->controller_attr;
    $data['function']='change password';
    $id=$this->input->post('id');
    $p1 = $this->input->post('password1');
    $p2 = $this->input->post('password2');
    $cek = select_where($this->tbl_member,'id',$id)->row();
    
    if($p1 == $p2){
        $table_field = $this->db->list_fields($this->tbl_member);
        $static=select_where($this->tbl_member,'id',$id)->row();
        
            $update['password']=md5($p1);
           
            $update['date_modified']= date("Y-m-d H:i:s");
          
            $query=update($this->tbl_member,$update,'id',$id);
        if($query){
        
          $this->session->set_flashdata('notif','success');
          $this->session->set_flashdata('msg','Your password have been updated');
        }else{
          $this->session->set_flashdata('notif','error');
          $this->session->set_flashdata('msg','Your data not updated');
        }
    }else{
          $this->session->set_flashdata('notif','error');
          $this->session->set_flashdata('msg','Wrong confirmation password');
    }
    redirect(site_url('Account?mn=change_password'));
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
        $update['login_type']== $static->login_type;
        $update['password']== $static->password;
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
    //echo "msuk";die();
		$data = $this->controller_attr;
		$this->load->library('facebook');
    	$this->load->library('googleplus');
		$data['function']='login';
    $data['cek_menu']='0';//kode 0 active default
    //echo $this->session->userdata('validated');die();
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
            if($query->num_rows() == 1){
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
      //print_r($data['login_url']);die();
			$this->load->view('layout_frontend',$data);
		}
	}

  function checkLogin() {

    //setting
   // echo "masuk";die();
    $helper = $this->fb->getRedirectLoginHelper();
    try {
      $accessToken = $helper->getAccessToken();
    } catch(Facebook\Exceptions\FacebookResponseException $e) {
      // When Graph returns an error
      echo 'Graph returned an error: ' . $e->getMessage();
      exit;
    } catch(Facebook\Exceptions\FacebookSDKException $e) {
      // When validation fails or other local issues
      echo 'Facebook SDK returned an error: ' . $e->getMessage();
      exit;
    }

    if (isset($accessToken)) {
      // Logged in!
        $this->fb->setDefaultAccessToken($accessToken);
            try {
          $response = $this->fb->get('/me?fields=id,email,name,gender,first_name,last_name,birthday,picture');
          $userNode = $response->getGraphUser();
        } catch(Facebook\Exceptions\FacebookResponseException $e) {
          // When Graph returns an error
          echo 'Graph returned an error: ' . $e->getMessage();
          exit;
        } catch(Facebook\Exceptions\FacebookSDKException $e) {
          // When validation fails or other local issues
          echo 'Facebook SDK returned an error: ' . $e->getMessage();
          exit;
        }
      if(!empty($userNode->getProperty('email'))){
        $registerFb = [
          'register_fb'   => 1,
          'token'     => (string) $accessToken,
          'email'     => $userNode->getProperty('email'),
          'name'      => $userNode->getProperty('name'),
          'gender'      => $userNode->getProperty('gender'),
          'first_name'      => $userNode->getProperty('first_name'),
          'last_name'     => $userNode->getProperty('last_name'),
          'birthday'    => $userNode->getProperty('birthday')
        ];
      //print_r($registerFb);die();
        $requestPicture  = $userNode->getProperty('picture');
     
        $data_new = array(
          'first_name' => $userNode->getProperty('first_name'),
          'login_type' => 2,
          'email' => $userNode->getProperty('email'),
          'profile_pict' => $requestPicture['url'],
          'date_created' => date('Y-m-d h:i:s', now()),
          'verified_account'=>0
        );
       
        $this->db->where('email', $userNode->getProperty('email'));
        $query = $this->db->get('dc_member');

        $row = $query->row();
        //echo count($row);die();
        if(count($row) == 0){
           $insert = $this->db->insert('dc_member', $data_new);
           $uid = $this->db->insert_id();
           $pass = "";
        }else{
          $uid = $row->id;
          $pass = $row->password;
        }

        $data = array(
                    'id' => $uid,
                    'email' =>$userNode->getProperty('email'),
                    'password' => $pass,
                    'firstname'=>$userNode->getProperty('first_name'),
                    'photo'=>$requestPicture['url'],
                    'phone'=>'',
                    'validated' => true
                );

          $this->session->set_userdata($data);
          echo "<script>window.close();window.opener.location.reload();</script>";

        /**  if($this->session->userdata('current')){
             
            redirect($this->session->userdata('current'));
          }else{

            redirect(site_url('Account'));
          }
        $this->session->set_userdata($registerFb);
        //debugCode($registerFb);
        $this->_releaseSession();**/
        echo "<script>window.close();window.opener.location.reload();</script>";
      }
          echo"failed read email on facebook, please check your email on facebook!";
    }

  }

  function loginFb(){


    $helper = $this->fb->getRedirectLoginHelper();
    $permissions = ['email']; // optional
    $loginUrl = $helper->getLoginUrl( site_url() . '/account/checkLogin', $permissions);
    //echo $loginUrl;die();
    // debugCode(;)
    redirect($loginUrl);
    echo '<a href="#" onclick="PopupCenter(\'' . $loginUrl . '\',\'xtf\',\'800\',\'500\');">Log in with Facebook!</a>'; 
    echo'
    <script>
    function PopupCenter(url, title, w, h) {
        // Fixes dual-screen position                         Most browsers      Firefox
        var dualScreenLeft = window.screenLeft != undefined ? window.screenLeft : screen.left;
        var dualScreenTop = window.screenTop != undefined ? window.screenTop : screen.top;

        var width = window.innerWidth ? window.innerWidth : document.documentElement.clientWidth ? document.documentElement.clientWidth : screen.width;
        var height = window.innerHeight ? window.innerHeight : document.documentElement.clientHeight ? document.documentElement.clientHeight : screen.height;

        var left = ((width / 2) - (w / 2)) + dualScreenLeft;
        var top = ((height / 2) - (h / 2)) + dualScreenTop;
        var newWindow = window.open(url, title, \'scrollbars=yes, width=\' + w + \', height=\' + h + \', top=\' + top + \', left=\' + left);

        // Puts focus on the newWindow
        if (window.focus) {
            newWindow.focus();
        }
    }
    </script>
    ';
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

function submit_inquiry(){
  $table_field = $this->db->list_fields('dc_inquiry');
    $no=$this->input->post('number');
    for ($i=1; $i<=1; $i++) { 
    $insert = array();
        foreach ($table_field as $field) {
          if($field!='id'){
            $insert[$field] = $this->input->post($field)[$i];
          }
        }
        $insert['foto_ktp']=$_FILES['foto_ktp']['name'][$i];
        $insert['foto_paspor']=$_FILES['foto_paspor']['name'][$i];
        $insert['date_created']= date("Y-m-d H:i:s");
        $insert['id_payment']=$this->input->post('id_payment');
        $query=insert_all('dc_inquiry',$insert);
        $insert['id']=$this->input->post('id');
    if($query){
      if (!file_exists('assets/uploads/inquiry/'.$this->db->insert_id())) {
            mkdir('assets/uploads/inquiry/'.$this->db->insert_id(), 0777, true);
       }
             $file1= 'foto_ktp['.$i.']';
             $file2= 'foto_paspor['.$i.']';
             $config['upload_path'] = 'assets/uploads/inquiry/'.$this->db->insert_id();
             $config['allowed_types'] = 'jpg|jpeg|png|gif';
             $config['file_name'] = $_FILES['foto_ktp']['name'][$i];
             $this->upload->initialize($config);
             $this->upload->do_upload($file1);
             move_uploaded_file($_FILES["foto_ktp"]["tmp_name"][$i],'assets/uploads/inquiry/'.$this->db->insert_id()."/".$_FILES['foto_ktp']['name'][$i]);
             $config['upload_path'] = 'assets/uploads/inquiry/'.$this->db->insert_id();
             $config['allowed_types'] = 'jpg|jpeg|png|gif';
             $config['file_name'] = $_FILES['foto_paspor']['name'][$i];
             $this->upload->initialize($config);
               move_uploaded_file($_FILES["foto_paspor"]["tmp_name"][$i],'assets/uploads/inquiry/'.$this->db->insert_id()."/".$_FILES['foto_paspor']['name'][$i]);
        }
      }
      update('dc_payment',$update= array('inquiry' => 1, ),'id',$insert['id_payment']);
      $this->session->set_flashdata('msg','Perlengkapan data pesanan anda berhasil.');
      redirect(site_url('Account?pesanan=done'));
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
                    'phone'=>$row->phone,
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
    $this->load->library('facebook');
      $this->load->library('googleplus');
		$data = $this->controller_attr;
		$data['function']='register';
              $data['login_url'] = $this->facebook->getLoginUrl(array(
                'redirect_uri' => site_url('Account/login'), 
                 'scope'         => 'email, user_birthday, user_location, user_work_history, user_hometown, user_photos,'
              ));
          
        $data['login_google'] = $this->googleplus->loginURL();
		$data['list']='';
		$data['page'] = $this->load->view('Account/register',$data,true);
		$this->load->view('layout_frontend',$data);
	}


  function do_register(){
    $data=array(
        'first_name'=>$this->input->post('first_name'),
        'login_type' => 1,
        'email'=>$this->input->post('email'),
        'phone'=>$this->input->post('phone'),
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
        $insert=$this->db->insert('dc_member',$data);
        if($insert){
          $row=$this->db->query("select * from dc_member where email='".$this->input->post('email')."'")->row();
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
          redirect(site_url('Account'));
        }else{
          $this->session->set_flashdata('msg','Failed');
          redirect(site_url('Account/register'));
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

