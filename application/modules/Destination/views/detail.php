 
      <div role="main" class="main">
    <div class="bgc">
      <div class="bg-category" style="background: url('<?php echo base_url() ?>assets/uploads/destination/<?php echo $data->id ?>/<?php echo $data->images ?>'); background-size:cover ">
        <div class="bgc-title">
          <span><?php echo $data->title ?></span>
            <div class="bgc-line" ></div>
        </div>

      </div>
      
    </div>
    
    

        <div class="container">
          <div class="row">
            <div class="col-md-12 center">
              <p class="lead" style="padding:40px 150px 40px 150px">
                <i><?php echo $data->description ?></i>
              </p>
            </div>
          </div>
        </div>

        <div class="container">
          <div class="row">
            <div class="col-md-12 center">
              <h1 class="title-news">Program Destination </h1>
              <div class="bg-line-red"> </div>
            </div>
          </div>
          <div class="featured row">
            <div class="col-md-12">
              <div class="owl-carousel owl-theme full-width" data-plugin-options="{'items': 3, 'margin': 10, 'loop': false, 'nav': true, 'dots': false}">
                <?php foreach ($program as $key) {
                 ?>
        <div class="portfolio-grid-item">
          <a href="<?php echo site_url() ?>/Program/category/<?php echo $data->id ?>/<?php echo $key->category->id ?>/<?php echo url_title($key->category->title) ?>" class="text-decoration-none popup-with-move-anim">
            <span class="thumb-info">
              <span class="thumb-info-wrapper size-4 m-none">
                <span class="thumb-info-background" style="background-image: url('<?php echo base_url() ?>assets/uploads/category_program/<?php echo $key->category->id ?>/<?php echo $key->category->images ?>');"></span>
                <span class="thumb-info-plus-out-pd"><?php echo $key->category->title ?></span>
                
              </span>
            </span>
          </a>
          
        </div>
                <?php } ?>
        
               
              </div>
              <div class="button-see col-md-12 center">
                <a class="btn btn-primary mt-xl mb-sm" href="<?php echo site_url() ?>/destination/category/<?php echo $data->id ?>/<?php echo str_replace(" ", "-",$data->title) ?>">See More <i class="fa fa-angle-right pl-xs"></i></a>
              </div>
            </div>
          </div>
        </div>
        <?php foreach ($program_top1 as $key) {
         ?>
        <section class="section section-text-light section-background" style="background-image: url(<?php echo base_url() ?>assets/uploads/album_program/<?php echo $key->id_image ?>/<?php echo $key->image ?>);background-position:center; margin-top: 95px; background-size: cover;">
          <div class="container">
            <div class="row">
              <div class="col-md-12 center">
                <h3>Top Destination in <?php echo $data->title ?></h3>
                <div class="divider divider-small divider-small-lg divider-small-center">
                  <hr style="background: #fff">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <h1 class="mb-sm" style="width:70%;margin-top:50px;"><strong><?php echo $key->title ?> *5</strong></h1>
                <h4 class="mb-lg"><span class="label label-light text-color-dark p-md">Start from <strong>IDR <?php echo idr($key->price1) ?></strong></span></h4>
                <p class="text-color-light text-in-banner">
                <?php echo $key->summary ?>
                </p>
                <a href="#" class="btn btn-danger mr-xs mb-sm pl-xlg pr-xlg" style="border-radius:30px">Book Now</a>
              </div>
            </div>
          </div>
        </section>
        <?php } ?>
       <section class="section section-no-background p-none m-nones">
        <div class="container mt-xlg">
        <div class="row">
          <?php $no=0; foreach ($program_top4 as $key) {
            $no++;
          ?>
          <div class="col-md-6 mb-xlg">
            <article>
              <div class="col-md-6 pl-none pr-none">
                <img src="<?php echo base_url() ?>assets/uploads/album_program/<?php echo $key->id_image ?>/<?php echo $key->image ?>" alt="" class="img-responsive" style="width:100%">
              </div>
              <div class="col-md-6">
                <h1 class="title-cat"><?php echo $key->title ?> *<?php echo $no ?></h1>
                <p><?php echo substr($key->summary, 0,200) ?></p>
                <div class="red-cat">
                  <span class="sf">Start From</span>
                  <span class="rp">Rp</span>
                  <span class="price"><?php echo idr($key->price1) ?></span><!-- 
                  <span class="kos">.000</span> -->
                </div>
              </div>
            <div class="col-md-12 cat-line"></div>
            </article>
          </div>
          <?php } ?>
          
          
         
          <div class="col-md-12 mt-xlg center">
          <a class="btn btn-primary mt-xl mb-sm" href="<?php echo site_url('Program') ?>">See More <i class="fa fa-angle-right pl-xs"></i></a>
          </div>
            </div>
        </div>
      </section>
        
        <div class="container">
          <div class="row">
            <div class="bg-breadcumb col-md-12">

              <div class="bg-line col-md-12"></div>
            </div>
          </div>
        </div>

        <section class="mt-xl mb-none pb-none dc">
          <div class="container">
            <div class="row">

              <div class="col-md-12 center">
                <h1 class="title-news">Recent Articles</h1>
                <div class="bg-line-red"> </div>
              </div>
            </div>
            <div class="featured row">
        <ul id="portfolioGrid" class="p-none">
            <?php foreach ($article as $key) {
              ?>
            <li class="col-sm-12 col-md-12 isotope-item p-none">
              <div class="portfolio-grid-item">
                <a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
                  <span class="thumb-info">
                    <span class="thumb-info-wrapper size-cat m-none">
                      <span class="thumb-info-background" style="background-image: url('<?php echo base_url() ?>/assets/uploads/news/<?php echo $key->id ?>/<?php echo $key->images ?>');"></span>
                      <span class="thumb-info-plus-catra">INDO POS</span>
                      <span class="thumb-info-plus-catra-title"><?php echo $key->title ?></span>
                      <p class="thumb-info-plus-catra-p"><?php echo substr($key->summary, 0,250) ?>.... Red More</p>
                    
                    </span>
                  </span>
                </a>
              </div>
            </li>
          <?php } ?>
          
            
          </ul>
          <div class="button-see2 col-md-12 center">
            <a class="btn btn-primary mt-xl mb-sm" href="<?php echo site_url('Article') ?>">See More <i class="fa fa-angle-right pl-xs"></i></a>
          </div>
      </div>
          </div>
        </section>

        <div class="container">
      <div class="row">
        <div class="bg-breadcumb col-md-12">
              
          <div class="bg-line col-md-12"></div>
        </div>
      </div>
    </div>
    <section class="section section-no-background pb-none mb-none">
     <div class="container">
      <div class="row">
        
        <div class="col-md-12 center">
          <h1 class="title-news"> Program Berkaitan </h1>
          <div class="bg-line-red"> </div>
        </div>
      </div>
      <div class="featured row">
        <?php foreach ($program_related as $key) {
         ?>
          <div class="col-sm-4 col-md-3">
            <a href="<?php echo site_url() ?>/Program/detail/<?php echo $key->id ?>/<?php echo url_title($key->title) ?>" class="text-decoration-none">
              <span class="thumb-info thumb-info-side-image thumb-info-side-image-custom thumb-info-no-zoom thumb-info-no-zoom thumb-info-side-image-custom-highlight">
                <span class="thumb-info-side-image-wrapper">
                  <img alt="" class="img-responsive" src="<?php echo base_url() ?>assets/uploads/album_program/<?php echo $key->id_image ?>/<?php echo $key->image ?>">
                </span>
                <span class="thumb-info-caption">
                  <span class="thumb-info-caption-text p-xl">
                    <span><?php echo $key->category ?></span>
                    <div style="min-height: 50px">
                    <h4 class="font-weight-semibold mb-xs"><?php echo $key->title ?></h4>
                    </div>
                   <p> <?php echo substr($key->summary,0,200) . "..."; ?></p>
                    <span class="sf">Start From</span>
                    <span class="item-rp-pb">Rp</span>
                    <span class="item-price-pb"><?php echo idr($key->price1) ?></span>
                    <!--<span class="item-kos-pb">.000</span>-->
                  </span>
                </span>
              </span>
            </a>
          </div>
          <?php } ?>
      </div>
    </div>
    
    
    </section>
      </div>