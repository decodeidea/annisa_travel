 
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
          <a href="<?php echo site_url() ?>/Program/category/<?php echo $data->id ?>/<?php echo $key->category->id ?>/<?php echo str_replace(" ", "-", $key->category->title) ?>" class="text-decoration-none popup-with-move-anim">
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

        <section class="section section-text-light section-background" style="background-image: url(<?php echo base_url() ?>/assets/theme/img/travell_inspiration.jpg);background-position:center; margin-top: 95px;">
          <div class="container">
            <div class="row">
              <div class="col-md-12 center">
                <h3>Top Destination in Saudi Arabia</h3>
                <div class="divider divider-small divider-small-lg divider-small-center">
                  <hr style="background: #fff">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <h1 class="mb-sm" style="width:70%;margin-top:50px;"><strong>Umroh plus Jordan Aqso *5</strong></h1>
                <h4 class="mb-lg"><span class="label label-light text-color-dark p-md">Start from <strong>IDR 45.900.000</strong></span></h4>
                <p class="text-color-light" style="font-size:20px;width:40%">
                  Rasakan dan nikmati indahnya beribadah di dua kota suci Mekkah dan Madinah serta menilik peradaban manusia di Jordan dan Aqso
                </p>
                <a href="#" class="btn btn-danger mr-xs mb-sm pl-xlg pr-xlg" style="border-radius:30px">Book Now</a>
              </div>
            </div>
          </div>
        </section>
       <section class="section section-no-background p-none m-nones">
        <div class="container mt-xlg">
        <div class="row">
          <div class="col-md-6 mb-xlg">
            <article>
              <div class="col-md-6 pl-none pr-none">
                <img src="<?php echo base_url() ?>/assets/theme/img/desti_2.jpg" alt="" class="img-responsive" style="width:100%">
              </div>
              <div class="col-md-6">
                <h1 class="title-cat"> Umroh Series Reguler 9 hari *3</h1>
                <p>Mejadi Arac/Concord (Hotel Madinah) </br> Saraya Ajyad (Hotel Mekkah) </br> Airlines by Lion Air/Malindo</p>
                <div class="red-cat">
                  <span class="sf">Start From</span>
                  <span class="rp">Rp</span>
                  <span class="price">34.000</span>
                  <span class="kos">.000</span>
                </div>
              </div>
            <div class="col-md-12 cat-line"></div>
            </article>
            
          </div>
          <div class="col-md-6 mb-xlg">
            <article>
              <div class="col-md-6 pl-none pr-none">
                <img src="<?php echo base_url() ?>/assets/theme/img/desti_3.jpg" alt="" class="img-responsive" style="width:100%">
              </div>
              <div class="col-md-6">
                <h1 class="title-cat"> Umroh Series Reguler 9 hari *3</h1>
                <p>Mejadi Arac/Concord (Hotel Madinah) </br> Saraya Ajyad (Hotel Mekkah) </br> Airlines by Lion Air/Malindo</p>
                <div class="red-cat">
                  <span class="sf">Start From</span>
                  <span class="rp">Rp</span>
                  <span class="price">34.000</span>
                  <span class="kos">.000</span>
                </div>
              </div>
              <div class="col-md-12 cat-line"></div>
            </article>
          </div>
          <div class="col-md-6 mb-xlg">
            <article>
              <div class="col-md-6 pl-none pr-none">
                <img src="<?php echo base_url() ?>/assets/theme/img/desti_3.jpg" alt="" class="img-responsive" style="width:100%">
              </div>
              <div class="col-md-6">
                <h1 class="title-cat"> Umroh Series Reguler 9 hari *3</h1>
                <p>Mejadi Arac/Concord (Hotel Madinah) </br> Saraya Ajyad (Hotel Mekkah) </br> Airlines by Lion Air/Malindo</p>
                <div class="red-cat">
                  <span class="sf">Start From</span>
                  <span class="rp">Rp</span>
                  <span class="price">34.000</span>
                  <span class="kos">.000</span>
                </div>
              </div>
            
            </article>
          </div>
          <div class="col-md-6 mb-xlg">
            <article>
              <div class="col-md-6 pl-none pr-none">
                <img src="<?php echo base_url() ?>/assets/theme/img/desti_2.jpg" alt="" class="img-responsive" style="width:100%">
              </div>
              <div class="col-md-6">
                <h1 class="title-cat"> Umroh Series Reguler 9 hari *3</h1>
                <p>Mejadi Arac/Concord (Hotel Madinah) </br> Saraya Ajyad (Hotel Mekkah) </br> Airlines by Lion Air/Malindo</p>
                <div class="red-cat">
                  <span class="sf">Start From</span>
                  <span class="rp">Rp</span>
                  <span class="price">34.000</span>
                  <span class="kos">.000</span>
                </div>
              </div>
              
            </article>
          </div>
          
         
          <div class="col-md-12 mt-xlg center">
          <button type="button" class="btn btn-primary">See More</button>
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
            
            <li class="col-sm-12 col-md-12 isotope-item p-none">
              <div class="portfolio-grid-item">
                <a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
                  <span class="thumb-info">
                    <span class="thumb-info-wrapper size-cat m-none">
                      <span class="thumb-info-background" style="background-image: url('<?php echo base_url() ?>/assets/theme/img/kurma.jpg');"></span>
                      <span class="thumb-info-plus-catra">INDO POS</span>
                      <span class="thumb-info-plus-catra-title">Memetik kebun kurma di Madinah bersama Jamaah Annisa Travel</span>
                      <p class="thumb-info-plus-catra-p">Tak lengkap rasanya bila anda pergi ke tanah suci Mekkah dan Madinah tanpa membeli kurma langsung dari kebunnya. Itulah .. Red More</p>
                    
                    </span>
                  </span>
                </a>
              </div>
            </li>
            <li class="col-sm-12 col-md-4 isotope-item p-none">
          
            <li class="col-sm-12 col-md-6 isotope-item p-none">
              <div class="portfolio-grid-item">
                <a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
                  <span class="thumb-info">
                    <span class="thumb-info-wrapper size-cat-2 m-none">
                      <span class="thumb-info-background" style="background-image: url('<?php echo base_url() ?>/assets/theme/img/featured/thailand.jpg');"></span>
                      
                      <span class="thumb-info-plus-catra-2">INDO POS</span>
                      <span class="thumb-info-plus-catra-title-2">Memetik kebun kurma di Madinah bersama Jamaah Annisa Travel</span>
                      <p class="thumb-info-plus-catra-p-2">Tak lengkap rasanya bila anda pergi ke tanah suci Mekkah dan Madinah tanpa membeli kurma langsung dari kebunnya. Itulah .. Red More</p>
                    
                    </span>
                  </span>
                </a>
              </div>
            </li>
            <li class="col-sm-12 col-md-6 isotope-item p-none">
              <div class="portfolio-grid-item">
                <a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
                  <span class="thumb-info">
                    <span class="thumb-info-wrapper size-cat-2 m-none">
                      <span class="thumb-info-background" style="background-image: url('<?php echo base_url() ?>/assets/theme/img/featured/indonesia.jpg');"></span>
                      
                      <span class="thumb-info-plus-catra">INDO POS</span>
                      <span class="thumb-info-plus-catra-title-2">Memetik kebun kurma di Madinah bersama Jamaah Annisa Travel</span>
                      <p class="thumb-info-plus-catra-p-2">Tak lengkap rasanya bila anda pergi ke tanah suci Mekkah dan Madinah tanpa membeli kurma langsung dari kebunnya. Itulah .. Red More</p>
                    
                    </span>
                  </span>
                </a>
              </div>
            </li>
          
          
          
            
          </ul>
          <div class="button-see2 col-md-12 center">
            <a class="btn btn-primary mt-xl mb-sm" href="#">See More <i class="fa fa-angle-right pl-xs"></i></a>
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
        
          <div class="col-sm-4 col-md-3">
            <a href="#" class="text-decoration-none">
              <span class="thumb-info thumb-info-side-image thumb-info-side-image-custom thumb-info-no-zoom thumb-info-no-zoom thumb-info-side-image-custom-highlight">
                <span class="thumb-info-side-image-wrapper">
                  <img alt="" class="img-responsive" src="<?php echo base_url() ?>/assets/theme/img/pb/pb_1.jpg">
                </span>
                <span class="thumb-info-caption">
                  <span class="thumb-info-caption-text p-xl">
                    <span>Umroh Series</span>
                    <h4 class="font-weight-semibold mb-xs">Reguler 12 hari</h4>
                    <p>Nikmati indahnya beribadah dan berdoa di dua kota suci Mekkah dan Madinah.
                       Nikmati perjalanan anda seama 12 hari.
                       Anda akan diajak Umroh dan berziarah islami di Mekkah dan Madinah. Ayo serunya Umroh bersama kami..</p>
                    <span class="sf">Start From</span>
                    <span class="item-rp-pb">Rp</span>
                    <span class="item-price-pb">34.000</span>
                    <span class="item-kos-pb">.000</span>
                  </span>
                </span>
              </span>
            </a>
          </div>
          <div class="col-sm-4 col-md-3">
            <a href="#" class="text-decoration-none">
              <span class="thumb-info thumb-info-side-image thumb-info-side-image-custom thumb-info-no-zoom thumb-info-no-zoom thumb-info-side-image-custom-highlight">
                <span class="thumb-info-side-image-wrapper">
                  <img alt="" class="img-responsive" src="<?php echo base_url() ?>/assets/theme/img/pb/pb_2.jpg">
                </span>
                <span class="thumb-info-caption">
                  <span class="thumb-info-caption-text p-xl">
                    <span>Umroh Series</span>
                    <h4 class="font-weight-semibold mb-xs">Reguler 12 hari</h4>
                    <p>Nikmati indahnya beribadah dan berdoa di dua kota suci Mekkah dan Madinah.
                       Nikmati perjalanan anda seama 12 hari.
                       Anda akan diajak Umroh dan berziarah islami di Mekkah dan Madinah. Ayo serunya Umroh bersama kami..</p>
                    <span class="sf">Start From</span>
                    <span class="item-rp-pb">Rp</span>
                    <span class="item-price-pb">34.000</span>
                    <span class="item-kos-pb">.000</span>
                  </span>
                </span>
              </span>
            </a>
          </div>
          <div class="col-sm-4 col-md-3">
            <a href="#" class="text-decoration-none">
              <span class="thumb-info thumb-info-side-image thumb-info-side-image-custom thumb-info-no-zoom thumb-info-no-zoom thumb-info-side-image-custom-highlight">
                <span class="thumb-info-side-image-wrapper">
                  <img alt="" class="img-responsive" src="<?php echo base_url() ?>/assets/theme/img/pb/pb_3.jpg">
                </span>
                <span class="thumb-info-caption">
                  <span class="thumb-info-caption-text p-xl">
                    <span>Umroh Series</span>
                    <h4 class="font-weight-semibold mb-xs">Reguler 12 hari</h4>
                    <p>Nikmati indahnya beribadah dan berdoa di dua kota suci Mekkah dan Madinah.
                       Nikmati perjalanan anda seama 12 hari.
                       Anda akan diajak Umroh dan berziarah islami di Mekkah dan Madinah. Ayo serunya Umroh bersama kami..</p>
                    <span class="sf">Start From</span>
                    <span class="item-rp-pb">Rp</span>
                    <span class="item-price-pb">34.000</span>
                    <span class="item-kos-pb">.000</span>
                  </span>
                </span>
              </span>
            </a>
          </div>
          <div class="col-sm-4 col-md-3">
            <a href="#" class="text-decoration-none">
              <span class="thumb-info thumb-info-side-image thumb-info-side-image-custom thumb-info-no-zoom thumb-info-no-zoom thumb-info-side-image-custom-highlight">
                <span class="thumb-info-side-image-wrapper">
                  <img alt="" class="img-responsive" src="<?php echo base_url() ?>/assets/theme/img/pb/pb_4.jpg">
                </span>
                <span class="thumb-info-caption">
                  <span class="thumb-info-caption-text p-xl">
                    <span>Umroh Series</span>
                    <h4 class="font-weight-semibold mb-xs">Reguler 12 hari</h4>
                    <p>Nikmati indahnya beribadah dan berdoa di dua kota suci Mekkah dan Madinah.
                       Nikmati perjalanan anda seama 12 hari.
                       Anda akan diajak Umroh dan berziarah islami di Mekkah dan Madinah. Ayo serunya Umroh bersama kami..</p>
                    <span class="sf">Start From</span>
                    <span class="item-rp-pb">Rp</span>
                    <span class="item-price-pb">34.000</span>
                    <span class="item-kos-pb">.000</span>
                  </span>
                </span>
              </span>
            </a>
          </div>
          
      </div>
    </div>
    
    
    </section>
      </div>