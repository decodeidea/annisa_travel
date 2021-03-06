<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');


class Admin_content extends DC_controller {

	function __construct() {
		parent::__construct();
		$this->check_login();
		if($this->router->fetch_method()=='index'){
			$method='';
		}else{
			$method=str_replace('_',' ',$this->router->fetch_method());
		}
		$this->controller_attr = array('controller' => 'Admin_content','controller_name' => 'Admin Content','method'=>ucwords($method),'menu'=>$this->get_menu());
	}
	
	 function index(){
		redirect(site_url('admin_content/static_page'));
	}
	
	function static_page(){
		$this->check_access();
		$data = $this->controller_attr;
		$data['function']='static_page';
		$data['list']=select_where($this->tbl_static_content,'lang',$this->lang->lang())->result();
		$data['page'] = $this->load->view('Admin_content/list_static_page',$data,true);
		$this->load->view('layout_backend',$data);
	}

	function static_page_form($id=null){
		$this->check_access();
		$data = $this->controller_attr;
		$data['function']='static_page';
		if ($id) {
            $data['data'] = select_where($this->tbl_static_content, 'id', $id)->row();
        }
        else{
            $data['data'] = null;
        }
		$data['page'] = $this->load->view('Admin_content/static_page_form',$data,true);
		$this->load->view('layout_backend',$data);
	}

	function static_page_update(){
		$data = $this->controller_attr;
		$data['function']='static_page';
		$id=$this->input->post('id');
		$table_field = $this->db->list_fields($this->tbl_static_content);
		$static=select_where($this->tbl_static_content,'id',$id)->row();
		$update = array();
        foreach ($table_field as $field) {
            $update[$field] = $this->input->post($field);
        }
        if(empty($_FILES['images']['name'])){
        	$update['images']=$static->images;
        }else{
        	 $update['images']=$_FILES['images']['name'];
        }
        $update['date_created']=$static->date_created;
        $update['id_creator']=$static->id_creator;
        $update['lang']=$this->lang->lang();
        $update['date_modified']= date("Y-m-d H:i:s");
        $update['id_modifier']=$this->session->userdata('admin')['id'];
        $query=update($this->tbl_static_content,$update,'id',$id);
		if($query){
			if(!empty($_FILES['images']['name'])){
			unlink('assets/uploads/static-page/'.$id.'/'.$static->images);
			if (!file_exists('assets/uploads/static-page/'.$id)) {
    				mkdir('assets/uploads/static-page/'.$id, 0777, true);
			 }
        	 $config['upload_path'] = 'assets/uploads/static-page/'.$id;
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
			$this->session->set_flashdata('msg','Your data have been updated');
		}else{
			$this->session->set_flashdata('notif','error');
			$this->session->set_flashdata('msg','Your data not updated');
		}
		redirect($data['controller']."/".$data['function']);
	}

	function static_page_add(){
		$data = $this->controller_attr;
		$data['function']='static_page';
		$table_field = $this->db->list_fields($this->tbl_static_content);
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
        $insert['lang']=$this->lang->lang();
        $insert['date_created']= date("Y-m-d H:i:s");
        $insert['id_creator']=$this->session->userdata('admin')['id'];
        $query=insert_all($this->tbl_static_content,$insert);
        $insert['id']=$this->input->post('id');
		if($query){
			if(!empty($_FILES['images']['name'])){
			if (!file_exists('assets/uploads/static-page/'.$this->db->insert_id())) {
    				mkdir('assets/uploads/static-page/'.$this->db->insert_id(), 0777, true);
			 }
        	 $config['upload_path'] = 'assets/uploads/static-page/'.$this->db->insert_id();
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
			$this->session->set_flashdata('msg','Your data have been added');
		}else{
			$this->session->set_flashdata('notif','error');
			$this->session->set_flashdata('msg','Your data not added');
		}
		redirect(site_url($data['controller']."/".$data['function']));
	}

	function static_page_delete($id){
		$data = $this->controller_attr;
		$function='static_page';
		$query=delete($this->tbl_static_content,'id',$id);
		if($query){
			$this->session->set_flashdata('notif','success');
			$this->session->set_flashdata('msg','Your data have been deleted');
		}else{
			$this->session->set_flashdata('notif','error');
			$this->session->set_flashdata('msg','Your data not deleted');
		}
	}

	
	function article(){
		$this->check_access();
		$data = $this->controller_attr;
		$data['function']='article';
		$data['list']=select_where($this->tbl_news,'lang',$this->lang->lang())->result();
		$data['page'] = $this->load->view('Admin_content/list_news',$data,true);
		$this->load->view('layout_backend',$data);
	}

	function article_form($id=null){
		$this->check_access();
		$data = $this->controller_attr;
		$data['function']='article';
		if ($id) {
            $data['data'] = select_where($this->tbl_news, 'id', $id)->row();
        }
        else{
            $data['data'] = null;
        }
        $data['destination']=select_where($this->tbl_destination,'lang',$this->lang->lang())->result();
		$data['page'] = $this->load->view('Admin_content/news_form',$data,true);
		$this->load->view('layout_backend',$data);
	}

	function article_update(){
		$data = $this->controller_attr;
		$data['function']='article';
		$id=$this->input->post('id');
		$table_field = $this->db->list_fields($this->tbl_news);
		$static=select_where($this->tbl_news,'id',$id)->row();
		$update = array();
        foreach ($table_field as $field) {
            $update[$field] = $this->input->post($field);
        }
        if(empty($_FILES['images']['name'])){
        	$update['images']=$static->images;
        }else{
        	 $update['images']=$_FILES['images']['name'];
        }
        $update['date_created']=$static->date_created;
        $update['id_creator']=$static->id_creator;
        $update['lang']=$this->lang->lang();
        $update['date_modified']= date("Y-m-d H:i:s");
        $update['id_modifier']=$this->session->userdata('admin')['id'];
        $query=update($this->tbl_news,$update,'id',$id);
		if($query){
			if(!empty($_FILES['images']['name'])){
			unlink('assets/uploads/news/'.$id.'/'.$static->images);
			if (!file_exists('assets/uploads/news/'.$id)) {
    				mkdir('assets/uploads/news/'.$id, 0777, true);
			 }
        	 $config['upload_path'] = 'assets/uploads/news/'.$id;
             $config['allowed_types'] = 'jpg|jpeg|png|gif';
             $config['file_name'] = $_FILES['images']['name'];
             $this->upload->initialize($config);
             if($this->upload->do_upload('images')){
                    $uploadData = $this->upload->data();
                    $this->load->library('image_lib');
                    $config_th["source_image"] = 'assets/uploads/news/'.$id.'/'.$_FILES['images']['name'];
			$config_th['new_image'] = 'assets/uploads/news/'.$id.'/thumb_'.$_FILES['images']['name'];
			$config_th["width"] = 250;
			$config_th['maintain_ratio'] = TRUE;
			$config_th['image_library'] = 'gd2';
			 $this->image_lib->clear();
			$this->image_lib->initialize($config_th);
    		$this->image_lib->resize();
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
		redirect($data['controller']."/".$data['function']);
	}

	function article_add(){
		$data = $this->controller_attr;
		$data['function']='article';
		$table_field = $this->db->list_fields($this->tbl_news);
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
        $insert['lang']=$this->lang->lang();
        $insert['date_created']= date("Y-m-d H:i:s");
        $insert['id_creator']=$this->session->userdata('admin')['id'];
        $query=insert_all($this->tbl_news,$insert);
        $insert['id']=$this->input->post('id');
		if($query){
			if(!empty($_FILES['images']['name'])){
			if (!file_exists('assets/uploads/news/'.$this->db->insert_id())) {
    				mkdir('assets/uploads/news/'.$this->db->insert_id(), 0777, true);
			 }
			$config['upload_path'] = 'assets/uploads/news/'.$this->db->insert_id();
             $config['allowed_types'] = 'jpg|jpeg|png|gif';
             $config['file_name'] = $_FILES['images']['name'];
             $this->upload->initialize($config);
             if($this->upload->do_upload('images')){
                    $uploadData = $this->upload->data();
           $this->load->library('image_lib');
                    $config_th["source_image"] = 'assets/uploads/news/'.$id.'/'.$_FILES['images']['name'];
			$config_th['new_image'] = 'assets/uploads/news/'.$id.'/thumb_'.$_FILES['images']['name'];
			$config_th["width"] = 250;
			$config_th['maintain_ratio'] = TRUE;
			$config_th['image_library'] = 'gd2';
			 $this->image_lib->clear();
			$this->image_lib->initialize($config_th);
    		$this->image_lib->resize();
                }else{
                    echo"error upload";
                    die();
              }
          }
			$this->session->set_flashdata('notif','success');
			$this->session->set_flashdata('msg','Your data have been added');
		}else{
			$this->session->set_flashdata('notif','error');
			$this->session->set_flashdata('msg','Your data not added');
		}
		redirect($data['controller']."/".$data['function']);
	}

	function article_delete($id){
		$data = $this->controller_attr;
		$function='article';
		$query=delete($this->tbl_news,'id',$id);
		if($query){
			$this->session->set_flashdata('notif','success');
			$this->session->set_flashdata('msg','Your data have been deleted');
		}else{
			$this->session->set_flashdata('notif','error');
			$this->session->set_flashdata('msg','Your data not deleted');
		}
	}

	function banner(){
		$this->check_access();
		$data = $this->controller_attr;
		$data['function']='banner';
		$data['list']=select_where($this->tbl_banner,'lang',$this->lang->lang())->result();
		$data['page'] = $this->load->view('Admin_content/list_banner',$data,true);
		$this->load->view('layout_backend',$data);
	}

	function banner_form($id=null){
		$this->check_access();
		$data = $this->controller_attr;
		$data['function']='banner';
		if ($id) {
            $data['data'] = select_where($this->tbl_banner, 'id', $id)->row();
        }
        else{
            $data['data'] = null;
        }
		$data['page'] = $this->load->view('Admin_content/banner_form',$data,true);
		$this->load->view('layout_backend',$data);
	}

	function banner_update(){
		$data = $this->controller_attr;
		$data['function']='banner';
		$id=$this->input->post('id');
		$table_field = $this->db->list_fields($this->tbl_banner);
		$banner=select_where($this->tbl_banner,'id',$id)->row();
		$update = array();
        foreach ($table_field as $field) {
            $update[$field] = $this->input->post($field);
        }
        if(empty($_FILES['images']['name'])){
        	$update['images']=$banner->images;
        }else{
        	 $update['images']=$_FILES['images']['name'];
        }
        $update['date_created']=$banner->date_created;
        $update['id_creator']=$banner->id_creator;
        $update['lang']=$this->lang->lang();
        $update['date_modified']= date("Y-m-d H:i:s");
        $update['id_modifier']=$this->session->userdata('admin')['id'];
        $query=update($this->tbl_banner,$update,'id',$id);
		if($query){
			if(!empty($_FILES['images']['name'])){
			unlink('assets/uploads/banner/'.$id.'/'.$banner->images);
			if (!file_exists('assets/uploads/banner/'.$id)) {
    				mkdir('assets/uploads/banner/'.$id, 0777, true);
			 }
        	 $config['upload_path'] = 'assets/uploads/banner/'.$id;
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
			$this->session->set_flashdata('msg','Your data have been updated');
		}else{
			$this->session->set_flashdata('notif','error');
			$this->session->set_flashdata('msg','Your data not updated');
		}
		redirect($data['controller']."/".$data['function']);
	}

	function banner_add(){
		$data = $this->controller_attr;
		$data['function']='banner';
		$table_field = $this->db->list_fields($this->tbl_banner);
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
        $insert['lang']=$this->lang->lang();
        $insert['date_created']= date("Y-m-d H:i:s");
        $insert['id_creator']=$this->session->userdata('admin')['id'];
        $query=insert_all($this->tbl_banner,$insert);
        $insert['id']=$this->input->post('id');
		if($query){
			if(!empty($_FILES['images']['name'])){
			if (!file_exists('assets/uploads/banner/'.$this->db->insert_id())) {
    				mkdir('assets/uploads/banner/'.$this->db->insert_id(), 0777, true);
			 }
        	 $config['upload_path'] = 'assets/uploads/banner/'.$this->db->insert_id();
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
			$this->session->set_flashdata('msg','Your data have been added');
		}else{
			$this->session->set_flashdata('notif','error');
			$this->session->set_flashdata('msg','Your data not added');
		}
		redirect($data['controller']."/".$data['function']);
	}

	function banner_delete($id){
		$data = $this->controller_attr;
		$function='banner';
		$query=delete($this->tbl_banner,'id',$id);
		if($query){
			$this->session->set_flashdata('notif','success');
			$this->session->set_flashdata('msg','Your data have been deleted');
		}else{
			$this->session->set_flashdata('notif','error');
			$this->session->set_flashdata('msg','Your data not deleted');
		}
	}

	function video(){
		$this->check_access();
		$data = $this->controller_attr;
		$data['function']='video';
		$data['list']=select_where($this->tbl_video,'lang',$this->lang->lang())->result();
		$data['page'] = $this->load->view('Admin_content/list_video',$data,true);
		$this->load->view('layout_backend',$data);
	}

	function video_form($id=null){
		$this->check_access();
		$data = $this->controller_attr;
		$data['function']='video';
		if ($id) {
            $data['data'] = select_where($this->video, 'id', $id)->row();
        }
        else{
            $data['data'] = null;
        }
		$data['page'] = $this->load->view('Admin_content/video_form',$data,true);
		$this->load->view('layout_backend',$data);
	}

	function video_update(){
		$data = $this->controller_attr;
		$data['function']='video';
		$id=$this->input->post('id');
		$table_field = $this->db->list_fields($this->tbl_video);
		$banner=select_where($this->tbl_video,'id',$id)->row();
		$update = array();
        foreach ($table_field as $field) {
            $update[$field] = $this->input->post($field);
        }
        if(empty($_FILES['images']['name'])){
        	$update['images']=$banner->images;
        }else{
        	 $update['images']=$_FILES['images']['name'];
        }
        $update['date_created']=$banner->date_created;
        $update['id_creator']=$banner->id_creator;
        $update['lang']=$this->lang->lang();
        $update['date_modified']= date("Y-m-d H:i:s");
        $update['id_modifier']=$this->session->userdata('admin')['id'];
        $query=update($this->tbl_banner,$update,'id',$id);
		if($query){
			if(!empty($_FILES['images']['name'])){
			unlink('assets/uploads/video/'.$id.'/'.$banner->images);
			if (!file_exists('assets/uploads/video/'.$id)) {
    				mkdir('assets/uploads/video/'.$id, 0777, true);
			 }
        	 $config['upload_path'] = 'assets/uploads/banner/'.$id;
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
			$this->session->set_flashdata('msg','Your data have been updated');
		}else{
			$this->session->set_flashdata('notif','error');
			$this->session->set_flashdata('msg','Your data not updated');
		}
		redirect($data['controller']."/".$data['function']);
	}

	function video_add(){
		$data = $this->controller_attr;
		$data['function']='video';
		$table_field = $this->db->list_fields($this->tbl_video);
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
        $insert['lang']=$this->lang->lang();
        $insert['date_created']= date("Y-m-d H:i:s");
        $insert['id_creator']=$this->session->userdata('admin')['id'];
        $query=insert_all($this->tbl_video,$insert);
        $insert['id']=$this->input->post('id');
		if($query){
			if(!empty($_FILES['images']['name'])){
			if (!file_exists('assets/uploads/video/'.$this->db->insert_id())) {
    				mkdir('assets/uploads/video/'.$this->db->insert_id(), 0777, true);
			 }
        	 $config['upload_path'] = 'assets/uploads/video/'.$this->db->insert_id();
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
			$this->session->set_flashdata('msg','Your data have been added');
		}else{
			$this->session->set_flashdata('notif','error');
			$this->session->set_flashdata('msg','Your data not added');
		}
		redirect($data['controller']."/".$data['function']);
	}

	function video_delete($id){
		$data = $this->controller_attr;
		$function='video';
		$query=delete($this->tbl_video,'id',$id);
		if($query){
			$this->session->set_flashdata('notif','success');
			$this->session->set_flashdata('msg','Your data have been deleted');
		}else{
			$this->session->set_flashdata('notif','error');
			$this->session->set_flashdata('msg','Your data not deleted');
		}
	}	
}

