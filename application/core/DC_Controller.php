<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class DC_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        
        // DEFAULT TIME ZONE
        date_default_timezone_set('Asia/Jakarta');
        
        // TABLE 
        $this->tbl_prefix = 'dc_';
        $this->tbl_static_content= $this->tbl_prefix . 'static_content';
        $this->tbl_user= $this->tbl_prefix . 'user';
        $this->tbl_menu= $this->tbl_prefix . 'menu';
        $this->tbl_icons= $this->tbl_prefix . 'icons';
        $this->tbl_user_groups= $this->tbl_prefix . 'user_groups';
        $this->tbl_groups= $this->tbl_prefix . 'groups';
        $this->tbl_user_accsess= $this->tbl_prefix . 'menu_accsess';
        $this->tbl_appearance= $this->tbl_prefix . 'appearance';
        $this->tbl_news= $this->tbl_prefix . 'news';
        $this->tbl_contact= $this->tbl_prefix . 'contact';
        $this->tbl_banner= $this->tbl_prefix .'banner';
        $this->tbl_video= $this->tbl_prefix .'video';
        $this->tbl_destination= $this->tbl_prefix .'destination';
        $this->tbl_category_program= $this->tbl_prefix .'program_category';
        $this->tbl_program= $this->tbl_prefix .'program';
        $this->tbl_program_day= $this->tbl_prefix .'program_day';
        $this->tbl_program_images= $this->tbl_prefix .'program_images';
        $this->tbl_member= $this->tbl_prefix .'member';
        $this->tbl_tmp_payment= $this->tbl_prefix .'tmp_payment';
        $this->tbl_whislist= $this->tbl_prefix .'whislist';
        $this->tbl_payment_product= $this->tbl_prefix .'payment_product';
        $this->tbl_payment= $this->tbl_prefix .'payment';
        $this->tbl_doku= 'doku';
        $this->tbl_voucher= $this->tbl_prefix .'voucher';
        $this->tbl_experience= $this->tbl_prefix .'experience';
        $this->tbl_confirmation= $this->tbl_prefix .'confirmation';
        $this->tbl_inquiry= $this->tbl_prefix .'inquiry';

        

        //load model fo all page
        $this->load->model('model_basic');

        //apperance function for all
        $this->appearance=select_where($this->tbl_appearance,'id',1)->row();
         $this->news_side_bar =select_all_limit_random($this->tbl_news,3);
    }

    function name_method($method){
        if($method!='index'){
            echo str_replace('_', ' ', $method);
        }
    }

    function check_login(){
        if($this->session->userdata('admin') == FALSE){
            redirect('admin/login');
        }
        else{
            return true;
        }
    }

    function get_menu(){
        if($this->session->userdata('admin')){
            $user_groups=$this->session->userdata('admin')['user_group'];
        }else{
            $user_groups=0;
        }
       $data=$this->model_basic->get_menu($user_groups);
       return $data;
    }


    function check_access(){
        if($this->session->userdata('admin')){
            $user_groups=$this->session->userdata('admin')['user_group'];
        }else{
            $user_groups=0;
        }
        $data=$this->model_basic->get_menu_access($user_groups);
        foreach ($data as $key) {
            $form=$key->target.'_form';
            if($key->target==$this->uri->segment(2) or $key->target==$this->uri->segment(1) or $form==$this->uri->segment(2)){
                redirect('admin/404');
            }
        }
    }

    function pagination($base_url,$total_row,$total_item){
        $config = array();
        $config["base_url"] = $base_url;
        $config["total_rows"] = $total_row;
        $config["per_page"] = 1;
        $config['use_page_numbers'] = TRUE;
        $config['num_links'] = $total_row;
        $config['first_url'] = '1';
        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] ="</ul>";
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tagl_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";
        $this->pagination->initialize($config);
        $data=$this->pagination->create_links();
        return $data;
    }

    function pagination_param($base_url,$total_row,$total_item){
        $config = array();
        $config["base_url"] = $base_url;
        $config["total_rows"] = $total_row;
        $config["per_page"] = 10;
        $config['use_page_numbers'] = TRUE;
        $config['num_links'] = $total_row;
        $config['first_url'] = '1';
        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] ="</ul>";
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tagl_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";
        $this->pagination->initialize($config);
        $data=$this->pagination->create_links();
        return $data;
    }

}
