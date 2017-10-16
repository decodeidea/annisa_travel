 <div role="main" class="main">
      		<div class="header-article" style="background: url(<?php echo base_url() ?>assets/uploads/news/<?php echo $data->id ?>/<?php echo $data->images ?>); background-size: cover">
      			<div class="container">
      				<div class="container-fluid">
      					<h4>ARTIKEL</h4>
		      			<h1><?php echo $data->title ?></h1>
      				</div>			
      		</div>	
      		</div>
          <section>
            <div class="container">
              <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="head-article">
              <div class="row">
              <div class="col-md-5">
                <div class="row">
                  <div class="col-md-4">
                   <img src="<?php echo base_url() ?>assets/theme/img/indopos.png" width="100%">
                  </div>
                    <div class="col-md-8 patop20">
                      <span class="author-article">IndoPos - Jakarta</span><br>
                      <span class="date-article">21 Oktober 2017, 08:00 WIB</span>
                    </div>
              </div>
            </div>
              <div class="col-md-7 patop20">
                <div class="list-head-article">
                <a href="#"><img src="<?php echo base_url() ?>assets/theme/img/facebook-flat.png" width="40"></a> 
                <a href="#"><img src="<?php echo base_url() ?>assets/theme/img/twitter-flat.png" width="40"></a> 
                <a href="#"><img src="<?php echo base_url() ?>assets/theme/img/mail-open-flat.png" width="40"></a> 
                <a href="#"><img src="<?php echo base_url() ?>assets/theme/img/google-plus-4-512.gif" width="40"></a>
                </div>
                <div  class="list-head-article">
                <div class="comment-article"><img src="<?php echo base_url() ?>assets/theme/img/message.png" width="25"> <span class="count-comment">12</span></div>
              </div>
              <div class="list-head-article text-center"><span>Share</span><br><span class=" count-share">172</span></div>
              <div class="clearfix"></div>
              </div>
            </div>
            </div>
            <div class="content-article">
              <?php echo str_replace("<img", "<img style='width:100%!important;'", $data->content)   ?>
              <!-- <div class="article-terkait">
                <span class="head-terkait">ARTIKEL TERKAIT</span>
                <div class="list-terkait">
                  <a href="#">Lorem ipsum dolor sit amet</a>
                </div>
                <div class="list-terkait">
                  <a href="#">Consectetur adipiscing elit, sed do eiusmod tempor</a>
                </div>
                <div class="list-terkait">
                  <a href="#">Vel illum qui dolorem eum fugiat quo voluptas</a>
                </div>
                <div class="list-terkait">
                  <a href="#">Sed ut perspiciatis unde omnis iste natus error sit voluptatem</a>
                </div>
                <div class="list-terkait">
                  <a href="#">Iste natus error sit voluptatem accusantium doloremque</a>
                </div>
              </div> -->
              

            </div>

            <div class="head-video">
              <h3>Video</h3>
              <div class="line-head"></div>
            </div>
            <div class="featured2 row">
        <ul id="portfolioGrid" class="p-none">
          <li class="col-sm-6 col-md-4 isotope-item p-none">
            <div class="portfolio-grid-item">
              <a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
                <span class="thumb-info">
                  <span class="thumb-info-wrapper size-2 m-none">
                    <span class="thumb-info-background" style="background-image: url('<?php echo base_url() ?>/assets/theme/img/annisa/video/video_1.jpg');"></span>
                    <span class="thumb-info-plus-out">Welcome <br>to the Japan</span>
                    <span class="thumb-info-plus-icon"><img src="<?php echo base_url() ?>assets/theme/img/annisa/video/icon_play.png" <="" span="">
                  </span>
                </span>
              </span></a>
            </div>
          </li>
          <li class="col-sm-6 col-md-4 isotope-item p-none">
            <div class="portfolio-grid-item">
              <a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
                <span class="thumb-info">
                  <span class="thumb-info-wrapper size-2 m-none">
                    <span class="thumb-info-background" style="background-image: url('<?php echo base_url() ?>/assets/theme/img/annisa/video/video_2.jpg');"></span>
                    <span class="thumb-info-plus-out">Indahnya <br>Raja Ampat</span>
                    <span class="thumb-info-plus-icon"><img src="<?php echo base_url() ?>assets/theme/img/annisa/video/icon_play.png" <="" span="">
                  </span>
                </span>
              </span></a>
            </div>
          </li>
          <li class="col-sm-6 col-md-4 isotope-item p-none">
            <div class="portfolio-grid-item">
              <a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
                <span class="thumb-info">
                  <span class="thumb-info-wrapper size-2 m-none">
                    <span class="thumb-info-background" style="background-image: url('<?php echo base_url() ?>/assets/theme/img/annisa/video/video_3.jpg');"></span>
                    <span class="thumb-info-plus-out">Beautiful <br>of Petra  </span>
                    <span class="thumb-info-plus-icon"><img src="<?php echo base_url() ?>assets/theme/img/annisa/video/icon_play.png" <="" span="">
                  </span>
                </span>
              </span></a>
            </div>
          </li>
        </ul>
      </div>

      <div class="head-rekomendasi">
              <h3>Rekomendasi</h3>
              <div class="line-head"></div>
            </div>
            <div class="featured row">
        
          <div class="col-sm-4 col-md-4">
            <a href="#" style="text-decoration: none;"  class="text-decoration-none">
              <span class="thumb-info thumb-info-side-image thumb-info-side-image-custom thumb-info-no-zoom thumb-info-no-zoom thumb-info-side-image-custom-highlight article-rekomendasi">
                <span class="thumb-info-side-image-wrapper">
                  <img alt="" class="img-responsive" src="<?php echo base_url() ?>assets/theme/img/pb/pb_1.jpg">
                </span>
                <span class="thumb-info-caption">
                  <span class="thumb-info-caption-text p-xl">
                    <span>Umroh Series</span>
                    <h4 class="font-weight-semibold mb-xs">Reguler 12 hari</h4>
                    <p>Nikmati indahnya beribadah dan berdoa di dua kota suci Mekkah dan Madinah.
                       Nikmati perjalanan anda seama 12 hari.
                       Anda akan diajak Umroh dan berziarah islami di Mekkah dan Madinah. Ayo serunya Umroh bersama kami..</p>
                    <span class="sf">Start From</span>
                     <br>
                    <span class="item-rp-pb">Rp</span>
                    <span class="item-price-pb">34.000</span>
                    <span class="item-kos-pb">.000</span>
                  </span>
                </span>
              </span>
            </a>
          </div>
          <div class="col-sm-4 col-md-4">
            <a href="#" style="text-decoration: none;"  class="text-decoration-none">
              <span class="thumb-info thumb-info-side-image thumb-info-side-image-custom thumb-info-no-zoom thumb-info-no-zoom thumb-info-side-image-custom-highlight article-rekomendasi">
                <span class="thumb-info-side-image-wrapper">
                  <img alt="" class="img-responsive" src="<?php echo base_url() ?>assets/theme/img/pb/pb_2.jpg">
                </span>
                <span class="thumb-info-caption">
                  <span class="thumb-info-caption-text p-xl">
                    <span>Umroh Series</span>
                    <h4 class="font-weight-semibold mb-xs">Reguler 12 hari</h4>
                    <p>Nikmati indahnya beribadah dan berdoa di dua kota suci Mekkah dan Madinah.
                       Nikmati perjalanan anda seama 12 hari.
                       Anda akan diajak Umroh dan berziarah islami di Mekkah dan Madinah. Ayo serunya Umroh bersama kami..</p>
                    <span class="sf">Start From</span>
                     <br>
                    <span class="item-rp-pb">Rp</span>
                    <span class="item-price-pb">34.000</span>
                    <span class="item-kos-pb">.000</span>
                  </span>
                </span>
              </span>
            </a>
          </div>
          <div class="col-sm-4 col-md-4">
             <a href="#" style="text-decoration: none;" class="text-decoration-none">
              <span class="thumb-info thumb-info-side-image thumb-info-side-image-custom thumb-info-no-zoom thumb-info-no-zoom thumb-info-side-image-custom-highlight  article-rekomendasi">
                <span class="thumb-info-side-image-wrapper">
                  <img alt="" class="img-responsive" src="<?php echo base_url() ?>assets/theme/img/pb/pb_3.jpg">
                </span>
                <span class="thumb-info-caption">
                  <span class="thumb-info-caption-text p-xl">
                    <span>Umroh Series</span>
                    <h4 class="font-weight-semibold mb-xs">Reguler 12 hari</h4>
                    <p>Nikmati indahnya beribadah dan berdoa di dua kota suci Mekkah dan Madinah.
                       Nikmati perjalanan anda seama 12 hari.
                       Anda akan diajak Umroh dan berziarah islami di Mekkah dan Madinah. Ayo serunya Umroh bersama kami..</p>
                    <span class="sf">Start From</span>
                    <br>
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
            <div class="col-md-4 pull-right">
              <div class="sidebar">
                <h2>Artikel Populer</h2>
                <?php foreach ($article_populer as $key) {
                  # code...
                 ?>
                <div class="sidebar-article">
                  <img src="<?php echo base_url() ?>assets/uploads/news/<?php echo $key->id ?>/<?php echo $key->images ?>" width="100%">
                  <a href="<?php echo site_url() ?>/Article/detail/<?php echo $key->id ?>/<?php echo str_replace(" ", "-", $key->title) ?>" style="text-decoration: none;"><span><?php echo $key->title ?></span></a>
                </div>
                <?php } ?>
              </div>
            </div>
			<div class="col-md-4 pull-right mt-xlg">
              <div class="sidebar">
                <h2>Hot Promo</h2>
					<div class="row m-none mb-xlg">
						<div class="col-md-6 pl-none pr-none">
							<div class="badge">
							  <span>5%</span>
							</div>
							<img src="<?php echo base_url() ?>assets/theme/img/desti_2.jpg" alt="" class="img-responsive" style="width:100%">
						</div>
						<div class="col-md-6">
							<h1 class="title-cat-side"> Umroh Series Reguler 9 hari *3</h1>
							<span class="sum-side">Mejadi Arac/Concord (Hotel Madinah) Airlines by Lion Air/Malindo</span>
							<div class="red-cat-side">
								<span class="sfs">Start From</span>
								<span class="rps">Rp</span>
								<span class="prices">34.000</span>
								<span class="koss">.000</span>
							</div>
						</div>
					</div>
					
					<div class="row m-none mb-xlg">
						<div class="col-md-6 pl-none pr-none">
							<img src="<?php echo base_url() ?>assets/theme/img/desti_2.jpg" alt="" class="img-responsive" style="width:100%">
						</div>
						<div class="col-md-6">
							<h1 class="title-cat-side"> Umroh Series Reguler 9 hari *3</h1>
							<span class="sum-side">Mejadi Arac/Concord (Hotel Madinah) Airlines by Lion Air/Malindo</span>
							<div class="red-cat-side">
								<span class="sfs">Start From</span>
								<span class="rps">Rp</span>
								<span class="prices">34.000</span>
								<span class="koss">.000</span>
							</div>
						</div>
					</div>
					
					
              </div>
            </div>
			
			
			
          </div>
          </div>
        </div>
        </section>
		
		<section class="section section-no-background mt-none">
			<div class="container">
			<div class="row">
			  <div class="bg-breadcumb col-md-12">
				<div class="heading heading-border heading-middle-border">
				  <h1>Ulasan</h1>
				</div>
			  </div>
			  <div class="featured row">
				<div class="ulasan">
				  <h4>Bagikan pengalaman kamu bersama Annisa Travel</h4>
					<div class="fb-comments" data-href="<?php echo site_url() ?>/Article/detail/<?php echo $data->id ?>/<?php echo str_replace(" ", "-",$data->title) ?>" data-width="100%" data-numposts="2" data-colorscheme="light"></div>
				
				</div>
				  
			  
				
			  </div>
			  
			</div>
			</div>
		</section>
</div>