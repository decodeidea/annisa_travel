<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');


class Admin_program extends DC_controller {

	function __construct() {
		parent::__construct();
		$this->check_login();
		if($this->router->fetch_method()=='index'){
			$method='';
		}else{
			$method=str_replace('_',' ',$this->router->fetch_method());
		}
		$this->controller_attr = array('controller' => 'admin_program','controller_name' => 'Program','method'=>ucwords($method),'menu'=>$this->get_menu());
	}
	
	 function index(){
		redirect(site_url('admin_program/destination'));
	}
	
	function destination(){
		$this->check_access();
		$data = $this->controller_attr;
		$data['function']='destination';
		$data['list']=select_where($this->tbl_destination,'lang',$this->lang->lang())->result();
		$data['page'] = $this->load->view('Admin_program/list_destination',$data,true);
		$this->load->view('layout_backend',$data);
	}

	function destination_form($id=null){
		$this->check_access();
		$data = $this->controller_attr;
		$data['function']='destination';
		if ($id) {
            $data['data'] = select_where($this->tbl_destination, 'id', $id)->row();
        }
        else{
            $data['data'] = null;
        }
		$data['page'] = $this->load->view('Admin_program/destination_form',$data,true);
		$this->load->view('layout_backend',$data);
	}

	function destination_update(){
		$data = $this->controller_attr;
		$data['function']='destination';
		$id=$this->input->post('id');
		$table_field = $this->db->list_fields($this->tbl_destination);
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
        $update['lang']=$this->lang->lang();
        $update['date_modified']= date("Y-m-d H:i:s");
        $update['id_modifier']=$this->session->userdata['admin']['id'];
        $query=update($this->tbl_destination,$update,'id',$id);
		if($query){
			if(!empty($_FILES['images']['name'])){
			unlink('assets/uploads/destination/'.$id.'/'.$static->images);
			if (!file_exists('assets/uploads/destination/'.$id)) {
    				mkdir('assets/uploads/destination/'.$id, 0777, true);
			 }
        	 $config['upload_path'] = 'assets/uploads/destination/'.$id;
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

	function destination_add(){
		$data = $this->controller_attr;
		$data['function']='destination';
		$table_field = $this->db->list_fields($this->tbl_destination);
		$insert = array();
        foreach ($table_field as $field) {
            $insert[$field] = $this->input->post($field);
        }
        if(empty($_FILES['images']['name'])){
        	$insert['images']=='';
        }else{
        	 $insert['images']=$_FILES['images']['name'];
        }
        $insert['lang']=$this->lang->lang();
        $insert['date_created']= date("Y-m-d H:i:s");
        $insert['id_creator']=$this->session->userdata['admin']['id'];
        $query=insert_all($this->tbl_destination,$insert);
		if($query){
			if(!empty($_FILES['images']['name'])){
			if (!file_exists('assets/uploads/destination/'.$this->db->insert_id())) {
    				mkdir('assets/uploads/destination/'.$this->db->insert_id(), 0777, true);
			 }
        	 $config['upload_path'] = 'assets/uploads/destination/'.$this->db->insert_id();
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

	function destination_delete($id){
		$data = $this->controller_attr;
		$function='destination';
		$query=delete($this->tbl_destination,'id',$id);
		if($query){
			$this->session->set_flashdata('notif','success');
			$this->session->set_flashdata('msg','Your data have been deleted');
		}else{
			$this->session->set_flashdata('notif','error');
			$this->session->set_flashdata('msg','Your data not deleted');
		}
	}

	function destination_featured(){
		$data = $this->controller_attr;
		$function='destination';
		$id=$this->input->post('id');
		$value=$this->input->post('value');
		$update['featured']=$value;
		$query=update($this->tbl_destination,$update,'id',$id);
		if($query){
			$this->session->set_flashdata('notif','success');
			$this->session->set_flashdata('msg','Your data have been deleted');
		}else{
			$this->session->set_flashdata('notif','error');
			$this->session->set_flashdata('msg','Your data not deleted');
		}
	}

	function category_program(){
		$this->check_access();
		$data = $this->controller_attr;
		$data['function']='category_program';
		$data['list']=select_where($this->tbl_category_program,'lang',$this->lang->lang())->result();
		$data['page'] = $this->load->view('Admin_program/list_category_program',$data,true);
		$this->load->view('layout_backend',$data);
	}

	function category_program_form($id=null){
		$this->check_access();
		$data = $this->controller_attr;
		$data['function']='category_program';
		if ($id) {
            $data['data'] = select_where($this->tbl_category_program, 'id', $id)->row();
        }
        else{
            $data['data'] = null;
        }
		$data['page'] = $this->load->view('Admin_program/category_program_form',$data,true);
		$this->load->view('layout_backend',$data);
	}

	function category_program_update(){
		$data = $this->controller_attr;
		$data['function']='category_program';
		$id=$this->input->post('id');
		$table_field = $this->db->list_fields($this->tbl_category_program);
		$static=select_where($this->tbl_category_program,'id',$id)->row();
		$update = array();
        foreach ($table_field as $field) {
            $update[$field] = $this->input->post($field);
        }
        if(empty($_FILES['images']['name'])){
        	$update['images']=$static->images;
        }else{
        	 $update['images']=$_FILES['images']['name'];
        }
        $update['lang']=$this->lang->lang();
        $update['date_modified']= date("Y-m-d H:i:s");
        $update['id_modifier']=$this->session->userdata['admin']['id'];
        $query=update($this->tbl_category_program,$update,'id',$id);
		if($query){
			if(!empty($_FILES['images']['name'])){
			unlink('assets/uploads/category_program/'.$id.'/'.$static->images);
			if (!file_exists('assets/uploads/category_program/'.$id)) {
    				mkdir('assets/uploads/category_program/'.$id, 0777, true);
			 }
        	 $config['upload_path'] = 'assets/uploads/category_program/'.$id;
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

	function category_program_add(){
		$data = $this->controller_attr;
		$data['function']='category_program';
		$table_field = $this->db->list_fields($this->tbl_category_program);
		$insert = array();
        foreach ($table_field as $field) {
            $insert[$field] = $this->input->post($field);
        }
        if(empty($_FILES['images']['name'])){
        	$insert['images']=='';
        }else{
        	 $insert['images']=$_FILES['images']['name'];
        }
        $insert['lang']=$this->lang->lang();
        $insert['date_created']= date("Y-m-d H:i:s");
        $insert['id_creator']=$this->session->userdata['admin']['id'];
        $query=insert_all($this->tbl_category_program,$insert);
		if($query){
			if(!empty($_FILES['images']['name'])){
			if (!file_exists('assets/uploads/category_program/'.$this->db->insert_id())) {
    				mkdir('assets/uploads/category_program/'.$this->db->insert_id(), 0777, true);
			 }
        	 $config['upload_path'] = 'assets/uploads/category_program/'.$this->db->insert_id();
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

	function category_program_delete($id){
		$data = $this->controller_attr;
		$function='category_program';
		$query=delete($this->tbl_category_program,'id',$id);
		if($query){
			$this->session->set_flashdata('notif','success');
			$this->session->set_flashdata('msg','Your data have been deleted');
		}else{
			$this->session->set_flashdata('notif','error');
			$this->session->set_flashdata('msg','Your data not deleted');
		}
	}

	function program(){
		$this->check_access();
		$data = $this->controller_attr;
		$data['function']='program';
		$list=select_where($this->tbl_program,'lang',$this->lang->lang())->result();
		foreach ($list as $key) {
			$category=select_where($this->tbl_category_program, 'id', $key->id_program_category)->row();
			$key->category=$category->title;
			$destination=select_where($this->tbl_destination, 'id', $key->id_destination)->row();
			$key->destination=$destination->title;
		}
		$data['list']=$list;
		$data['page'] = $this->load->view('Admin_program/list_program',$data,true);
		$this->load->view('layout_backend',$data);
	}

	function program_form($id=null){
		$this->check_access();
		$data = $this->controller_attr;
		$data['function']='program';
		if ($id) {
            $data['data'] = select_where($this->tbl_program, 'id', $id)->row();
        }
        else{
            $data['data'] = null;
        }
        $data['category']=select_where($this->tbl_category_program,'lang',$this->lang->lang())->result();
		$data['destination']=select_where($this->tbl_destination,'lang',$this->lang->lang())->result();
		$data['page'] = $this->load->view('Admin_program/program_form',$data,true);
		$this->load->view('layout_backend',$data);
	}

	function program_update(){
		$data = $this->controller_attr;
		$data['function']='program';
		$id=$this->input->post('id');
		$table_field = $this->db->list_fields($this->tbl_program);
		$static=select_where($this->tbl_program,'id',$id)->row();
		$update = array();
        foreach ($table_field as $field) {
            $update[$field] = $this->input->post($field);
        }
        if(empty($_FILES['images']['name'])){
        	$update['images']=$static->images;
        }else{
        	 $update['images']=$_FILES['images']['name'];
        }
        $update['lang']=$this->lang->lang();
        $update['date_modified']= date("Y-m-d H:i:s");
        $update['id_modifier']=$this->session->userdata['admin']['id'];
        $query=update($this->tbl_program,$update,'id',$id);
		if($query){
			$this->session->set_flashdata('notif','success');
			$this->session->set_flashdata('msg','Your data have been updated');
		}else{
			$this->session->set_flashdata('notif','error');
			$this->session->set_flashdata('msg','Your data not updated');
		}
		redirect($data['controller']."/".$data['function']);
	}

	function program_add(){
		$data = $this->controller_attr;
		$data['function']='program';
		$table_field = $this->db->list_fields($this->tbl_program);
		$insert = array();
        foreach ($table_field as $field) {
            $insert[$field] = $this->input->post($field);
        }
        if(empty($_FILES['images']['name'])){
        	$insert['images']=='';
        }else{
        	 $insert['images']=$_FILES['images']['name'];
        }
        $insert['lang']=$this->lang->lang();
        $insert['date_created']= date("Y-m-d H:i:s");
        $insert['id_creator']=$this->session->userdata['admin']['id'];
        $query=insert_all($this->tbl_program,$insert);
		if($query){
			if(!empty($_FILES['images']['name'])){
			if (!file_exists('assets/uploads/program/'.$this->db->insert_id())) {
    				mkdir('assets/uploads/program/'.$this->db->insert_id(), 0777, true);
			 }
        	 $config['upload_path'] = 'assets/uploads/program/'.$this->db->insert_id();
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

	function program_delete($id){
		$data = $this->controller_attr;
		$function='program';
		$query=delete($this->tbl_program,'id',$id);
		if($query){
			$this->session->set_flashdata('notif','success');
			$this->session->set_flashdata('msg','Your data have been deleted');
		}else{
			$this->session->set_flashdata('notif','error');
			$this->session->set_flashdata('msg','Your data not deleted');
		}
	}

	function album_program($id){
		$this->check_access();
		$data = $this->controller_attr;
		$data['function']='album_program';
		$data['list']=select_where($this->tbl_program_images,'id_program',$id)->result();
		$data['page'] = $this->load->view('Admin_program/list_album_program',$data,true);
		$this->load->view('layout_backend',$data);
	}

	function album_program_form($id=null){
		$this->check_access();
		$data = $this->controller_attr;
		$data['function']='album_program';
		if ($id) {
            $data['data'] = select_where($this->tbl_program_images, 'id', $id)->row();
        }
        else{
            $data['data'] = null;
        }
        
		$data['page'] = $this->load->view('Admin_program/album_program_form',$data,true);
		$this->load->view('layout_backend',$data);
	}

	function album_program_update(){
		$data = $this->controller_attr;
		$data['function']='album_program';
		$id=$this->input->post('id');
		$table_field = $this->db->list_fields($this->tbl_program_images);
		$category_unit=select_where($this->tbl_program_images,'id',$id)->row();
		$update = array();
        foreach ($table_field as $field) {
            $update[$field] = $this->input->post($field);
        }
        if(empty($_FILES['images']['name'])){
        	$update['images']=$unit->images;
        }else{
        	 $update['images']=$_FILES['images']['name'];
        }
        $update['date_modified']= date("Y-m-d H:i:s");
        $update['id_modifier']=$this->session->userdata['admin']['id'];
        $query=update($this->tbl_program_images,$update,'id',$id);
		if($query){
			if(!empty($_FILES['images']['name'])){
			unlink('assets/uploads/album_program/'.$id.'/'.$category_unit->images);
			if (!file_exists('assets/uploads/album_program/'.$id)) {
    				mkdir('assets/uploads/album_program/'.$id, 0777, true);
			 }
        	 $config['upload_path'] = 'assets/uploads/album_program/'.$id;
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
		redirect($data['controller']."/".$data['function']."/".$update['id_program']);
	}

	function album_program_add(){
		$data = $this->controller_attr;
		$data['function']='album_program';
		$table_field = $this->db->list_fields($this->tbl_program_images);
		$insert = array();
        foreach ($table_field as $field) {
            $insert[$field] = $this->input->post($field);
        }
        if(empty($_FILES['images']['name'])){
        	$insert['images']=='';
        }else{
        	 $insert['images']=$_FILES['images']['name'];
        }
        $insert['date_created']= date("Y-m-d H:i:s");
        $insert['id_creator']=$this->session->userdata['admin']['id'];
        $query=insert_all($this->tbl_program_images,$insert);
		if($query){
			if(!empty($_FILES['images']['name'])){
			if (!file_exists('assets/uploads/album_program/'.$this->db->insert_id())) {
    				mkdir('assets/uploads/album_program/'.$this->db->insert_id(), 0777, true);
			 }
        	 $config['upload_path'] = 'assets/uploads/album_program/'.$this->db->insert_id();
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
		redirect($data['controller']."/".$data['function']."/".$insert['id_program']);
	}

	function album_program_delete($id){
		$data = $this->controller_attr;
		$function='album_program';
		$query=delete($this->tbl_program_images,'id',$id);
		if($query){
			$this->session->set_flashdata('notif','success');
			$this->session->set_flashdata('msg','Your data have been deleted');
		}else{
			$this->session->set_flashdata('notif','error');
			$this->session->set_flashdata('msg','Your data not deleted');
		}
		redirect($data['controller']."/".$function."/".$_GET['id_program']);
	}
	function program_day($id){
		$this->check_access();
		$data = $this->controller_attr;
		$data['function']='program_day';
		$data['list']=select_where($this->tbl_program_day,'id_program',$id)->result();
		$data['page'] = $this->load->view('Admin_program/list_program_day',$data,true);
		$this->load->view('layout_backend',$data);
	}

	function program_day_form($id=null){
		$this->check_access();
		$data = $this->controller_attr;
		$data['function']='program_day';
		if ($id) {
            $data['data'] = select_where($this->tbl_program_day, 'id', $id)->row();
        }
        else{
            $data['data'] = null;
        }
        
		$data['page'] = $this->load->view('Admin_program/program_day_form',$data,true);
		$this->load->view('layout_backend',$data);
	}

	function program_day_update(){
		$data = $this->controller_attr;
		$data['function']='program_day';
		$id=$this->input->post('id');
		$table_field = $this->db->list_fields($this->tbl_program_day);
		$category_unit=select_where($this->tbl_program_day,'id',$id)->row();
		$update = array();
        foreach ($table_field as $field) {
            $update[$field] = $this->input->post($field);
        }
        $update['date_modified']= date("Y-m-d H:i:s");
        $update['id_modifier']=$this->session->userdata['admin']['id'];
        $query=update($this->tbl_program_day,$update,'id',$id);
		if($query){
			$this->session->set_flashdata('notif','success');
			$this->session->set_flashdata('msg','Your data have been updated');
		}else{
			$this->session->set_flashdata('notif','error');
			$this->session->set_flashdata('msg','Your data not updated');
		}
		redirect($data['controller']."/".$data['function']."/".$update['id_program']);
	}

	function program_day_add(){
		$data = $this->controller_attr;
		$data['function']='album_program';
		$table_field = $this->db->list_fields($this->tbl_program_day);
		$insert = array();
        foreach ($table_field as $field) {
            $insert[$field] = $this->input->post($field);
        }
       	$insert['date_created']= date("Y-m-d H:i:s");
        $insert['id_creator']=$this->session->userdata['admin']['id'];
        $query=insert_all($this->tbl_program_day,$insert);
		if($query){
			$this->session->set_flashdata('notif','success');
			$this->session->set_flashdata('msg','Your data have been added');
		}else{
			$this->session->set_flashdata('notif','error');
			$this->session->set_flashdata('msg','Your data not added');
		}
		redirect($data['controller']."/".$data['function']."/".$insert['id_program']);
	}

	function program_day_delete($id){
		$data = $this->controller_attr;
		$function='program_day';
		$query=delete($this->tbl_program_day,'id',$id);
		if($query){
			$this->session->set_flashdata('notif','success');
			$this->session->set_flashdata('msg','Your data have been deleted');
		}else{
			$this->session->set_flashdata('notif','error');
			$this->session->set_flashdata('msg','Your data not deleted');
		}
		redirect($data['controller']."/".$function."/".$_GET['id_program']);
	}
}

