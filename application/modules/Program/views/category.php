<div role="main" class="main">

    <section class="section section-no-border background-color-light m-none">
      <div class="container">
        <div class="row">
      
          <div class="col-md-12 center">
            <h1 class="title-news"> <?php echo $category->title ?></h1>
            <?php echo $category->description ?>
            <div class="bg-line-red"> </div>
          </div>
        </div>
            
            <div class="featured row">
        <ul id="portfolioGrid" class="p-none">
          <?php foreach ($data as $key ) {
            # code...
           ?>
          <li class="col-sm-6 col-md-4 isotope-item p-none mb-xlg">
            <div class="portfolio-grid-item">
            <a href="<?php echo site_url() ?>/program/detail/<?php echo $key->id ?>/<?php echo str_replace(" " , "-", $key->title) ?>" class="text-decoration-none popup-with-move-anim">
              <img src="<?php echo base_url() ?>assets/uploads/album_program/<?php echo $key->id_image ?>/<?php echo $key->image ?>" class="img-responsive">
              <div class="pd-dest">
              <span class="pd-dest-tit"><?php echo $key->title ?></span>
              </br>
              <span class="pd-dest-date">06 Oktober 2017 - 9 Hari</span>
              </br>
              <div class="product-ratings" >
                <span class="pd-dest-child">fasilitas</span>
                <div class="ratings-box tl-dest">
                
                <div class="rating" style="width:80%"></div>
                </div>
              </div>
              </div>
            </a>
            </div>
          </li>
          <?php } ?>
        </ul>
      </div>
            
          
        </div>
    </section>
    

      </div>