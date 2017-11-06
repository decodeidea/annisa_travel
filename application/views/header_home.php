<header id="header" class="header-transparent">
  <div class="header-body">
    <div class="header-container container">
      <div class="header-logo">
        <a href="<?php echo site_url() ?>">
          <img alt="Annisa Travel" width="160" src="<?php echo site_url() ?>assets/theme/img/logo.png">
        </a>
      </div>
      <div class="header-nav header-menu-left">
        <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
          <i class="fa fa-search"></i>
        </button> 
       
        <button class="btn header-btn-collapse-nav nv-right" href="javascript:void()" data-toggle="modal" data-target="#modal-search">
            <i class="fa fa-search"></i>
        </button>


        <div class="header-nav-main collapse">
          <nav>
            <ul class="nav nav-pills" id="mainNav">
              <li class="dropdown">
                <a class="dropdown-toggle" href="#">
                  Umrah & Haji
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="<?php echo site_urls('en/product/category') ?>">Umrah Reguler</a>
                  </li>
                  <li>
                    <a href="<?php echo site_url() ?>product/category">Umrah Plus</a>
                  </li>
                  <li>
                    <a href="<?php echo site_url('product/category') ?>">Haji Plus</a>
                  </li>
                  <li>
                    <a href="<?php echo site_url() ?>product/category">Tabungan & Pembiayaan</a>
                  </li>
                  <li>
                    <a href="<?php echo site_url() ?>product/category">Kemitraan</a>
                  </li>
                </ul>
              </li>
              <li class="dropdown">
                <a class="dropdown-toggle" href="#">
                  Wisata
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="<?php echo site_url() ?>product/category">Wisata Domestik</a>
                  </li>
                  <li>
                    <a href="<?php echo site_url() ?>product/category">Wisata Internasional</a>
                  </li>
                  <li>
                    <a href="<?php echo site_url() ?>product/category">Wisata Edukatif</a>
                  </li>
                  <li>
                    <a href="<?php echo site_url() ?>product/category">Wisata Halal Trip</a>
                  </li>
                </ul>
              </li>
              <li class="dropdown">
                <a class="dropdown-toggle" href="#">
                  Perusahaan
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="<?php echo site_url() ?>article/detail">Corporate Travel Management</a>
                  </li>
                  <li>
                    <a href="<?php echo site_url() ?>article/detail">Mice</a>
                  </li>
                  <li>
                    <a href="<?php echo site_url() ?>article/detail">Layanan Ekstra</a>
                  </li>
                  <li>
                    <a href="<?php echo site_url() ?>article/detail">Rekam Jejak</a>
                  </li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <div class="header-nav header-nav-right">
        <div class="header-nav-main header-nav-main-right collapse">
          <nav>
            <ul class="nav nav-pills" id="mainNav">
              <li class="dropdown">
                <a class="dropdown-toggle" href="#">
                  <img src="<?php echo site_url() ?>assets/theme/img/blank.gif" class="flag flag-us" alt="English">
                </a>
                <ul class="dropdown-menu dropdown-menu-right">
                  <li>
                    <a href="#"><img src="<?php echo site_url() ?>assets/theme/img/blank.gif" class="flag flag-us" alt="English"> English</a>
                  </li>
                  <li>
                    <a href="#"><img src="<?php echo site_url() ?>assets/theme/img/blank.gif" class="flag flag-id" alt="English"> Indonesia</a>
                  </li>
                </ul>
              </li>
              <li class="">
                <a href="<?php echo site_url() ?>account/login">
                  Sign In
                </a>
              </li>
              <li class="">
                <a href="<?php echo site_url() ?>account/register">
                  Sign Up
                </a>
              </li>
              <li class="">
                <a href="javascript:void()" data-toggle="modal" data-target="#modal-search">
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
