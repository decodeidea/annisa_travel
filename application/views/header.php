<header id="header" class="<?php if($this->uri->segment(2)=='Home' or $this->uri->segment(2)=='home' or $this->uri->segment(2)==''){ echo"header-transparent";}else{ echo"header-transparent-none";} ?>" style='top: -4px'>
  <div class="header-body-none">
    <div class="header-container container">
      <div class="header-logo">
        <a href="<?php echo base_url() ?>">
          <img alt="Annisa Travel" width="160" src="<?php echo base_url() ?>assets/theme/img/logo.png">
        </a>
      </div>
      <div class="header-nav">
        <div class="header-nav-main collapse">
          <nav>
            <ul class="nav nav-pills" id="mainNav">
              <li class="dropdown">
                <a class="dropdown-toggle dnone" href="#">
                  Umrah & Haji
                </a>
              </li>
              <li class="dropdown">
                <a class="dropdown-toggle dnone" href="<?php echo site_url('program') ?>">
                  Wisata
                </a>
              </li>
              <li class="dropdown">
                <a class="dropdown-toggle dnone" href="#">
                  Perusahaan
                </a>
                <ul class="dropdown-menu">
                  <?php
                  $static_page='dc_static_content';
                  $query = $this->db->query("SELECT * from ".$static_page." where lang ='".$this->lang->lang()."'" );
                  $result = $query->result();
                  foreach( $result as $key )
                  {
                    $title=strtolower($key->title);
                  ?>
                  <li>
                    <a href="<?php echo site_url() ?>/<?php echo str_replace(' ','-',$title) ?>"><?php echo $key->title ?></a>
                  </li>
                  <?php } ?>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <div class="header-nav header-nav-right">
        <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
          <i class="fa fa-bars"></i>
        </button>
        <div class="header-nav-main header-nav-main-right collapse">
          <nav>
            <ul class="nav nav-pills" id="mainNav">
              <li class="dropdown">
                <a class="dropdown-toggle" href="#">
                  <?php
                  if($this->lang->lang()=='en'){
                    $flag='us';
                    }else{
                      $flag='id';
                    }  
                   ?>
                  
                  <img src="<?php echo base_url() ?>assets/theme/img/blank.gif" class="flag flag-<?php echo $flag ?>" alt="Indonesia">
                </a>
                <ul class="dropdown-menu dropdown-menu-right">
                  <li>
                    <a href="<?php echo base_url(); ?>en/"><img src="<?php echo base_url() ?>assets/theme/img/blank.gif" class="flag flag-us" alt="English"> English</a>
                  </li>
                  <li>
                    <a href="<?php echo base_url(); ?>id/"><img src="<?php echo base_url() ?>assets/theme/img/blank.gif" class="flag flag-id" alt="English"> Indonesia</a>
                  </li>
                </ul>
              </li>
              <?php if($this->session->userdata('validated')){ ?>
              <li class="">
                <a class="dnone" href="<?php echo site_url('account') ?>">Hello, <?php echo $this->session->userdata('firstname') ?></a>
              </li>
              <?php }else{ ?>
              <li class="">
                <a class="dnone"  href="<?php echo site_url('account/login') ?>">
                  Sign In
                </a>
              </li>
              <li class="">
                <a class="dnone" href="<?php echo site_url('account/register') ?>">
                  Sign Up
                </a>
              </li>
              <?php } ?>
              <li class="">
                <a class="dnone" href="javascript:void()" data-toggle="modal" data-target="#modal-search">
                  Search
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
</header>
