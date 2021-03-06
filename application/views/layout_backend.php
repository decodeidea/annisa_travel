<?php
header("Cache-Control: no-store, no-cache, must-revalidate");
$this->session->unset_userdata('notif');
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title><?php  echo $method; if($method!='index'){echo" - ";} echo $controller_name;  ?> | <?php echo $this->appearance->name ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="" name="description" />
<meta content="" name="author" />
<!-- BEGIN PLUGIN CSS -->

<link rel="icon" type="image/png" href="<?php echo base_url()."assets/uploads/settings/favicon.png" ?>" sizes="16x16">
<link href="<?php echo base_url() ?>assets/plugins/bootstrap-select2/select2.css" rel="stylesheet" type="text/css" media="screen"/>

<link href="<?php echo base_url() ?>assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="<?php echo base_url() ?>assets/plugins/jquery-datatable/css/jquery.dataTables.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url() ?>assets/plugins/datatables-responsive/css/datatables.responsive.css" rel="stylesheet" type="text/css" media="screen"/>
<!-- END PLUGIN CSS -->
<!-- BEGIN CORE CSS FRAMEWORK -->
<link href="<?php echo base_url() ?>assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url() ?>assets/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url() ?>assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url() ?>assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url() ?>assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css"/>
<!-- END CORE CSS FRAMEWORK -->

<!-- BEGIN CSS TEMPLATE -->
<link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url() ?>assets/css/responsive.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url() ?>assets/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>
<script src="<?php echo base_url() ?>assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<!-- END CSS TEMPLATE -->
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="">
<!-- BEGIN HEADER -->
<div class="header navbar navbar-inverse ">
  <!-- BEGIN TOP NAVIGATION BAR -->
  <div class="navbar-inner">
    <div class="header-seperation text-center">
      <ul class="nav pull-left notifcation-center" id="main-menu-toggle-wrapper" style="display:none">
        <li class="dropdown"> <a id="main-menu-toggle" href="#main-menu"  class="" >
          <div class="iconset top-menu-toggle-white"></div>
          </a> </li>
      </ul>
      <!-- BEGIN LOGO -->
      <a href="<?php echo site_url() ?>/Admin"><img src="<?php echo base_url() ?>assets/uploads/settings/<?php echo $this->appearance->logo ?>" class="logo" alt=""  data-src="<?php echo base_url() ?>assets/uploads/settings/<?php echo $this->appearance->logo ?>" data-src-retina="<?php echo base_url() ?>assets/uploads/settings/<?php echo $this->appearance->logo ?>" height="40px" style="margin-top: 10px" /></a>
      <!-- END LOGO -->
      <ul class="nav pull-right notifcation-center">
        <li class="dropdown" id="header_task_bar"> <a href="<?php echo site_url() ?>/Admin" class="dropdown-toggle active" data-toggle="">
          <div class="iconset top-home"></div>
          </a> </li>
      </ul>
    </div>
    <!-- END RESPONSIVE MENU TOGGLER -->
    <div class="header-quick-nav" >
      <!-- BEGIN TOP NAVIGATION MENU -->
      <div class="pull-left">
        <ul class="nav quick-section">
          <li class="quicklinks"> <a href="#" class="" id="layout-condensed-toggle" >
            <div class="iconset top-menu-toggle-dark"></div>
            </a> </li>
        </ul>
       
      </div>
      <!-- END TOP NAVIGATION MENU -->
      <!-- BEGIN CHAT TOGGLER -->
      <div class="pull-right">
        <div class="chat-toggler">
           <a href="#" class="dropdown-toggle" id="my-task-list" data-placement="bottom"  data-content='' data-toggle="dropdown" data-original-title="<?php echo lang('select') ?> <?php echo lang('language') ?>">
          <div class="user-details">
            <div class="username"> <?php echo lang('language') ?> : <span class="bold"> <?php if ($this->uri->segment(1)=='id') {
              echo"Indonesia";
            }else{
              echo"English";
            } ?> 
            <input type="hidden" name="" id="language" value="<?php echo $this->uri->segment(1) ?>">
          </div>
          </div>
          <div class="iconset top-down-arrow"></div>
        </a>
        <div id="notification-list" style="display:none">
                        <div style="width:150px">
                            <div class="notification-messages info text-center">
                              <a href="<?php echo base_url()."en/admin/dashboard" ?>">
                                English <img width="25" src="<?php echo base_url() ?>assets/img/englishflag.png" alt="English">
                                </a>
                                <div class="clearfix"></div>
                            </div>
                            <div class="notification-messages info">
                                <a href="<?php echo base_url()."id/admin/dashboard" ?>">
                                Indonesia <img width="25" src="<?php echo base_url() ?>assets/img/IndonesiaFlagImage.jpg" alt="Indonesia">
                                </a>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
           <a href=""  style="margin-right: 10px; margin-left: 5px; margin-top: 5px; position: relative;"> <span>|</span></a>
         <a href="#">
          <div class="user-details">
            <div class="username" style="padding-right: 10px;">Hi,  <span class="bold"><?php echo $this->session->userdata['admin']['first_name'] ?> <?php echo $this->session->userdata['admin']['last_name'] ?></span> </div>
          </div>
          </a> 
          <div class="profile-pic"> <img src="<?php echo base_url() ?>assets/uploads/user-admin/<?php  if($this->session->userdata['admin']['photo']==''){echo"default.jpg";}else{echo $this->session->userdata['admin']['id']."/".$this->session->userdata['admin']['photo'];} ?>"  alt="" data-src="<?php echo base_url() ?>assets/uploads/user-admin/<?php  if($this->session->userdata['admin']['photo']==''){echo"default.jpg";}else{echo $this->session->userdata['admin']['id']."/".$this->session->userdata['admin']['photo'];} ?>" data-src-retina="<?php echo base_url() ?>assets/uploads/user-admin/<?php  if($this->session->userdata['admin']['photo']==''){echo"default.jpg";}else{echo $this->session->userdata['admin']['id']."/".$this->session->userdata['admin']['photo'];} ?>" width="35" height="35" /> </div>
        </div>
        <ul class="nav quick-section ">
          <li class="quicklinks"> <a data-toggle="dropdown" class="dropdown-toggle  pull-right " href="#" id="user-options">
            <div class="iconset top-settings-dark "></div>
            </a>
            <ul class="dropdown-menu  pull-right" role="menu" aria-labelledby="user-options">
              <li><a href="<?php echo site_url() ?>/Admin/profile"> <?php echo lang('my_account') ?></a> </li>
              
              <li class="divider"></li>
              <li><a href="<?php echo site_url() ?>/Admin/logout"><i class="fa fa-power-off"></i>&nbsp;&nbsp;<?php echo lang('logout') ?></a></li>
            </ul>
          </li>
          <li class="quicklinks"> <span class="h-seperate"></span></li>
          
        </ul>
      </div>
      <!-- END CHAT TOGGLER -->
    </div>
    <!-- END TOP NAVIGATION MENU -->
  </div>
  <!-- END TOP NAVIGATION BAR -->
</div>
<!-- END HEADER -->
<!-- BEGIN CONTAINER -->
<div class="page-container row-fluid">
  <!-- BEGIN SIDEBAR -->
  <div class="page-sidebar" id="main-menu">
    <!-- BEGIN MINI-PROFILE -->
    <div class="page-sidebar-wrapper scrollbar-dynamic" id="main-menu-wrapper">
      <div class="user-info-wrapper">
        <div class="profile-wrapper"> <img src="<?php echo base_url() ?>assets/uploads/user-admin/<?php  if($this->session->userdata['admin']['photo']==''){echo"default.jpg";}else{echo $this->session->userdata['admin']['id']."/".$this->session->userdata['admin']['photo'];} ?>"  alt="" data-src="<?php echo base_url() ?>assets/uploads/user-admin/<?php  if($this->session->userdata['admin']['photo']==''){echo"default.jpg";}else{echo $this->session->userdata['admin']['id']."/".$this->session->userdata['admin']['photo'];} ?>" data-src-retina="<?php echo base_url() ?>assets/uploads/user-admin/<?php  if($this->session->userdata['admin']['photo']==''){echo"default.jpg";}else{echo $this->session->userdata['admin']['id']."/".$this->session->userdata['admin']['photo'];} ?>" width="69" height="69" /> </div>
        <div class="user-info">
          <div class="greeting">Welcome</div>
          <div class="username"><?php echo $this->session->userdata['admin']['first_name'] ?> <span class="semi-bold"><?php echo $this->session->userdata['admin']['last_name'] ?></span></div>
          <div class="status">Status<a href="#">
            <div class="status-icon green"></div>
            Online</a></div>
        </div>
      </div>
      <!-- END MINI-PROFILE -->
      <!-- BEGIN SIDEBAR MENU -->
      <p class="menu-title">BROWSE <span class="pull-right"><a href="javascript:;"><i class="fa fa-refresh"></i></a></span></p>
      <ul>
        <li class="start"> <a href="<?php echo site_url() ?>/Admin"> <i class="icon-custom-home"></i> <span class="title">Dashboard</span> <span class="selected"></span></a> 
        </li>
<?php foreach ($menu as $submenu) { ?>
  <?php if( $submenu->sub_menu==0){?>
        <li class="<?php if($submenu->target==$this->uri->segment(2)){echo"active open";} ?>"> <a href="javascript:;"> <i class="<?php echo $submenu->icon ?>"></i> <span class="title"><?php echo $submenu->name_menu ?></span> <span class="arrow <?php if($submenu->target==$this->uri->segment(2)){echo" open";} ?>"></span> </a>
          <ul class="sub-menu">
          <?php foreach ($menu as $data) {
            if( $data->sub_menu== $submenu->id){ ?>
            <li class="<?php if($data->target==$this->uri->segment(3) or $data->target."_form"==$this->uri->segment(3)){echo"active";} ?>" > <a href="<?php echo site_url()."/".$submenu->target."/".$data->target ?>"><?php echo $data->name_menu ?></a> </li>
          <?php } }?>
          </ul>
        <?php } ?>
        </li>
<?php } ?>
      </ul>
      <div class="clearfix"></div>
      <!-- END SIDEBAR MENU -->
    </div>
  </div>
  <a href="#" class="scrollup">Scroll</a>
  
  <!-- END SIDEBAR -->
  <!-- BEGIN PAGE CONTAINER-->
  <div class="page-content">
  <img id="loading-image" src="<?php echo base_url() ?>assets/img/loading.gif">
    <div class="content">
      <ul class="breadcrumb">
        <li>
          <p><?php echo $controller_name ?></p>
        </li>
        <li><a href="#" class="active"><?php echo $method ?></a> </li>
      </ul>
      <input type="hidden" name="site_url" id="site_url" value="<?php echo site_url() ?>">
       <input type="hidden" name="base_url" id="base_url" value="<?php echo base_url() ?>">
    <?php echo $page ?>
    </div>
   </div> 
</div>
<!-- END CONTAINER -->
<!-- BEGIN CORE JS FRAMEWORK-->

<script src="<?php echo base_url() ?>assets/plugins/boostrapv3/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets/plugins/breakpoints.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
<!-- END CORE JS FRAMEWORK -->
<!-- BEGIN PAGE LEVEL JS -->
<script src="<?php echo base_url() ?>assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js" type="text/javascript"></script> 
<script src="<?php echo base_url() ?>assets/plugins/bootstrap-select2/select2.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets/plugins/jquery-block-ui/jqueryblockui.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets/plugins/jquery-datatable/js/jquery.dataTables.min.js" type="text/javascript" ></script>
<script src="<?php echo base_url() ?>assets/plugins/jquery-datatable/extra/js/dataTables.tableTools.min.js" type="text/javascript" ></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/datatables-responsive/js/datatables.responsive.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/datatables-responsive/js/lodash.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<script src="<?php echo base_url() ?>assets/js/datatables.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>
<!-- BEGIN CORE TEMPLATE JS -->


<script src="<?php echo base_url() ?>assets/plugins/pace/pace.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets/js/core.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets/js/chat.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets/js/demo.js" type="text/javascript"></script>
<!-- END CORE TEMPLATE JS -->
<!-- END JAVASCRIPTS -->
</body>
</html>