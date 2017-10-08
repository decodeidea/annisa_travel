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
                <?php foreach ($program as $key) {
                 ?>
            <div class="col-md-4">
        <div class="portfolio-grid-item">
          <a href="<?php echo site_url() ?>/Program/category/<?php echo $data->id ?>/<?php echo $key->category->id ?>/<?php echo str_replace(" ", "-", $key->category->title) ?>" class="text-decoration-none popup-with-move-anim">
            <span class="thumb-info">
              <span class="thumb-info-wrapper size-4 m-none">
                <span class="thumb-info-background" style="background-image: url('<?php echo base_url() ?>assets/uploads/category_program/<?php echo $key->category->id ?>/<?php echo $key->category->images ?>');"></span>
                <span class="thumb-info-plus-out-pd"><?php echo $key->category->title ?></span>
                
              </span>
            </span>
          </a>
          
        </div>
            </div>
             <?php } ?>
          </div>
        </div>

      </div>