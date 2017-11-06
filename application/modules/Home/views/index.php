      <div role="main" class="main">
        <div class="slider-container rev_slider_wrapper" style="height: 100vh;">
					<div id="revolutionSlider" class="slider rev_slider manual">
						<ul>
							<?php foreach ($banner as $key) {
								//print_r($key);die();
							?>
							<li data-transition="fade"
                  data-description="Article"
                  data-title="<?php echo $key->title ?>">
								<img src="<?php echo base_url() ?>assets/uploads/banner/<?php echo $key->id ?>/<?php echo $key->images ?>"
									alt=""
									data-bgposition="center center"
									data-bgfit="cover"
									data-bgrepeat="no-repeat"
									class="rev-slidebg">

                <div class="tp-caption top-label"
									data-x="left" data-hoffset="-30"
									data-y="center" data-voffset="-67"
									data-start="200"
									style="z-index: 5"
									data-transform_in="opacity:0;s:600;"><?php echo $key->category ?></div>

                <div class="tp-caption main-label"
                  data-x="left" data-hoffset="-30"
                  data-y="center" data-voffset="5"
                  data-start="200"
                  data-whitespace="normal"
                  data-transform_in="opacity:0;s:600;"
                  data-transform_out="opacity:0;s:600;"
                  data-width="750"
                  data-height="auto"
                  style="z-index: 5"
                  data-mask_in="x:0px;y:0px;"> <a href="<?php echo site_url('Banner/detail/'.$key->id.'/'.url_title($key->title)) ?>"><h1 class="home-slider"><?php echo $key->title ?></h1></a></div>

                <a href="<?php echo site_url('Banner/detail/'.$key->id.'/'.url_title($key->title)) ?>"
                  class="tp-caption more-info"
                  data-hash
                  data-hash-offset="85"
                  href="#home-intro"
                  data-x="left" data-hoffset="-30"
                  data-y="center" data-voffset="150"
                  data-start="200"
                  data-whitespace="nowrap"
                  data-transform_in="opacity:0;s:600;"
                  data-transform_out="opacity:0;s:600;"
                  style="z-index: 5"
                  data-mask_in="x:0px;y:0px;">More Info <i class="fa fa-angle-right"></i></a>

                <div class="tp-opacity-overlay"></div>
							</li>
							<?php } ?>
						</ul>
					</div>
        </div>
		
		<div class="container">
		<div class="row">
			<div class="bg-breadcumb col-md-12">
				<div class="heading heading-border heading-middle-border">
					<h1>Top Destination</h1>
				</div>
			</div>
			
			<div class="destination col-md-12">
				<ul id="portfolioGrid" class="p-none">
					<?php foreach ($top_destination as $key) { ?>
					<li class="col-md-4 isotope-item p-none top-desti ml">
						<div class="portfolio-grid-item">
							<a href="<?php echo site_url() ?>/Program/detail/<?php echo $key->id ?>/<?php echo str_replace(" ", "-",$key->title) ?>" class="text-decoration-none popup-with-move-anim">
								<span class="thumb-info">
									<span class="thumb-info-wrapper size-3 m-none">
										<span class="thumb-info-background" style="background-image: url('<?php echo base_url() ?>assets/uploads/album_program/<?php echo $key->image_id ?>/<?php echo $key->image ?>');"></span>
										<span class="item-info">
											<span class="item-rp">Rp</span>
											<span class="item-price"><?php echo idr($key->price1) ?></span>
										</span>
									</span>
								</span>
							</a>
							<div class="image-gallery-line"></div>
							<div class="image-gallery-title">
								<a href="<?php echo site_url() ?>/Program/detail/<?php echo $key->id ?>/<?php echo str_replace(" ", "-",$key->title) ?>" style="text-decoration: none;"><span class="item-title"><?php echo $key->title ?></span>	</a>
							</div>
							<div class="image-gallery-date">
								<span class="item-date"><?php echo tanggal_indo(substr($key->date->day, 0,10)) ?> - <?php

echo IntervalDays($key->date->day,$key->date->off_day)



								 ?> Hari</span>	
							</div>
						</div>
						
						
					</li>
					<?php } ?>
				</ul>
				
				
				
				<div class="button-see col-md-12 center">
					<a class="btn btn-primary mt-xl mb-sm" href="<?php echo site_url() ?>/Program">See More <i class="fa fa-angle-right pl-xs"></i></a>
				</div>
			</div>

		</div>
	  </div>
	  
	  <section class="mt-xl mb-none pb-none dc">
		<div class="container">
			<div class="row">
			
				<div class="col-md-12 center">
					<h1 class="title-news"> Featured Destination </h1>
					<div class="bg-line-red"> </div>
				</div>
			</div>
			<div class="featured row">
				<ul id="portfolioGrid" class="p-none">
						<?php
						$no=0;
						 foreach ($destination as $key) {
						$no++;
						?>
						<li class="col-sm-12 col-md-<?php if($no==1){echo"8";}elseif($no==2){echo"4";}elseif($no==4){echo"2";}elseif($no==5){echo"8";}else{echo"2";} ?> isotope-item p-none">
							<div class="portfolio-grid-item">
								<a href="<?php echo site_url() ?>/Destination/detail/<?php echo $key->id ?>/<?php echo str_replace(" ", "-",$key->title)?>" class="text-decoration-none popup-with-move-anim">
									<span class="thumb-info">
										<span class="thumb-info-wrapper size-1 m-none">
											<span class="thumb-info-background" style="background-image: url('<?php echo base_url() ?>assets/uploads/destination/<?php echo $key->id  ?>/<?php echo $key->images ?>');"></span>
											<span class="thumb-info-plus-outF font-weight-bold"><?php echo $key->title ?></span>
											
										</span>
									</span>
								</a>
							</div>
						</li>
						<?php } ?>
					</ul>
					<div class="button-see2 col-md-12 center">
						<a class="btn btn-primary mt-xl mb-sm" href="<?php echo site_url('Destination') ?>">See More <i class="fa fa-angle-right pl-xs"></i></a>
					</div>
			</div>
		</div>
		
		
	  </section>
	  
	  <div class="container">
		<div class="row">
			<div class="bg-breadcumb col-md-12">
				<div class="heading heading-border heading-middle-border">
					<h1>Video</h1>
				</div>
			</div>
			<div class="featured row">
				<ul id="portfolioGrid" class="p-none">
					<?php foreach ($video as $key) {
					
					 ?>
					<li class="col-sm-6 col-md-4 isotope-item p-none">
						<div class="portfolio-grid-item">
									<a class="popup-youtube text-decoration-none" href="<?php echo $key->source ?>" >
										<span class="thumb-info">
											<span class="thumb-info-wrapper size-2 m-none">
												<span class="thumb-info-background" style="background-image: url('<?php echo base_url() ?>assets/uploads/video/<?php echo $key->id ?>/<?php echo $key->images ?>');"></span>
												<span class="thumb-info-plus-out"><?php  echo $key->title?></span>
												<span class="thumb-info-plus-icon"><img src="<?php echo base_url() ?>assets/theme/img/annisa/video/icon_play.png"></span>
											</span>
										</span>
									</a>
								</div>
					</li>
					<?php } ?>
				</ul>
				<div class="button-see2 col-md-12 center">
					<a class="btn btn-primary mt-xl mb-sm" href="<?php echo site_url() ?>/Video">See More <i class="fa fa-angle-right pl-xs"></i></a>
				</div>
			</div>
			
		</div>
	  </div>

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
						<h1 class="title-news"> Popular Destination </h1>
						<div class="bg-line-red"> </div>
					</div>
				</div>
				<div class="featured row">
					<div class="row">
							<div class="col-md-12">
								
								<div class="carousel slide" id="myCarousel">
								  <div class="carousel-inner">
								  	<?php $no=1; foreach ($popular_destination as $key) { ?>
										<div class="item <?php if($no==1){echo"active";} ?> ">
										  <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4">
											<a href="<?php echo site_url() ?>/Program/detail/<?php echo $key->id ?>/<?php echo url_title($key->title); ?>"><img src="<?php echo base_url() ?>assets/uploads/album_program/<?php echo $key->image_id ?>/<?php echo $key->image ?>" class="img-responsive"></a>
											<div class="pd-dest">
												<a href="<?php echo site_url() ?>/Program/detail/<?php echo $key->id ?>/<?php echo url_title($key->title); ?>" style="text-decoration: none;"><span class="pd-dest-tit"><?php echo $key->title ?></span></a>
												</br>
												<span class="pd-dest-date"><?php echo tanggal_indo(substr($key->date->day, 0,10)) ?> - <?php  echo IntervalDays($key->date->day,$key->date->off_day)?> Hari</span>
												</br>
												<div class="product-ratings" >
													<span class="pd-dest-child">fasilitas</span>
													<div class="ratings-box tl-dest">
														
														<div class="rating<?php echo $key->rating ?>" style="width:100%"></div>
													</div>
												</div>
											</div>
										  </div>
										</div>
									<?php $no++; } ?>
								  </div>
								  <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
								  <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
								</div>
							</div>
						</div>
						
				</div>
			</div>
		</section>
	  
		<div class="container">
			<div class="row">
				<div class="bg-breadcumb col-md-12">
					<div class="heading heading-border heading-middle-border">
						<h1>Experience</h1>
					</div>
				</div>
				<div class="featured row">
					<ul id="portfolioGrid" class="p-none">
						<?php foreach ($experience as $key) {
						 ?>
						<li class="col-sm-6 col-md-3 isotope-item p-none">
							<div class="portfolio-grid-item">
								<a href="<?php echo site_url() ?>/Experience/detail/<?php echo $key->id ?>/<?php echo url_title($key->title) ?>" class="text-decoration-none popup-with-move-anim">
									<span class="thumb-info">
										<span class="thumb-info-wrapper size-4 m-none">
											<span class="thumb-info-background" style="background-image: url('<?php echo base_url() ?>assets/uploads/experience/<?php echo $key->id ?>/<?php echo $key->images ?>');"></span>
											<span class="thumb-info-plus-out-expe"><?php echo $key->title ?></span>
											
										</span>
									</span>
								</a>
								<div class="pd-expe">
									<div class="testimonial-author">
										<div class="testimonial-author-thumbnail">
											<?php if($key->user->login_type==1){ ?>
										<img src="<?php echo base_url() ?>assets/uploads/profile/<?php echo $key->id_member ?>/<?php echo $key->user->profile_pict?>" class="img-responsive img-circle" width="100"/>
										<?php }else{ ?>
										<img class="img-responsive img-circle" src="<?php echo $key->user->profile_pict ?>" width="100"/>
										<?php } ?>
										</div>
										<p><strong><?php echo $key->name ?></strong></p>
										<div class="product-ratings" >
												<span class="pd-dest-child">Review</span>
												<div class="ratings-box tl-dest">
													
													<div class="rating<?php echo $key->rating ?>" style="width:100%"></div>
												</div>
											</div>
									</div>
								</div>
							</div>
						</li>
						<?php } ?>
					</ul>
					<div class="button-see2 col-md-12 center"><!-- 
						<a class="btn btn-primary mt-xl mb-sm" href="#">See More <i class="fa fa-angle-right pl-xs"></i></a> -->
					</div>
				</div>
				
			</div>
		</div>

	  <section class="section section-text-light section-background" style="background-image: url(<?php echo base_url() ?>assets/uploads/news/<?php echo $feat_article->id ?>/<?php echo $feat_article->images ?>);background-position:center; background-size: cover; margin-top: 95px;">
			<div class="container">
				<div class="row">
					<div class="col-md-12 center">
					  <h3>Travel Inspiration</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<a href="<?php echo site_url('Article/detail/'.$feat_article->id.'/'.url_title($feat_article->title)) ?>"><h1 style="width:35%;margin-top:250px;"><strong><?php echo $feat_article->title ?></strong></h2>
						
					</div>
				</div>
			</div>
		</section>

        <section class="section section-no-background">
          <div class="container mt-xlg">
            <div class="row">
            	<?php 
            	$no=0;
            	foreach ($article as $key) {	
            	 $no++;
            	 if($no==1 or $no==3){
            	 	echo"<div class='row'>";
            	 }
            	 ?>
              <div class="col-md-6 mb-xlg ">
      					<article  style="border-bottom: 1px solid #eee;padding-left: 20px; padding-right: 20px;">
      						<div class="col-md-9" style="min-height: 300px;">
      							<a href="<?php echo site_url() ?>/Article/detail/<?php echo $key->id ?>/<?php echo str_replace(" ", "-",$key->title) ?>"><h2 style="color: #3C3C3C"><b><?php echo $key->title ?></b></h2>
      							<p><?php echo substr($key->summary, 0,250) ?>....</p>
      						</div>
        						<div class="col-md-3 pl-none pr-none">
      								<img src="<?php echo base_url() ?>assets/uploads/news/<?php echo $key->id ?>/thumb_<?php echo $key->images ?>" alt="" class="img-responsive" style="width:100%">
        						</div>
        						<div class="clearfix"></div>
      					</article>
      				</div>
      				<?php
      				if($no==2 or $no==4){
            	 	echo"</div>";
            	 }
      				?>
      				<?php } ?>
              <div class="col-md-12 mt-xlg center">
                <a href="<?php echo site_url() ?>/Article"><button type="button" class="btn btn-primary">See More</button></a>
              </div>
    				</div>
          </div>
        </section>

        <div class="container mt-xlg">
          <div class="row">
            <div class="col-md-6">
              <h4 class="center"><strong>Airlines Partner</strong></h4>
              <div class="divider divider-small divider-small-center">
  							<hr>
  						</div>

              <div class="row center mt-xl">
    						<div class="owl-carousel owl-theme" data-plugin-options="{'items': 6, 'autoplay': true, 'autoplayTimeout': 3000}">
    							<div>
    								<img class="img-responsive" src="<?php echo base_url() ?>assets/theme/img/logos/logo-1.png" alt="">
    							</div>
    							<div>
    								<img class="img-responsive" src="<?php echo base_url() ?>assets/theme/img/logos/logo-2.png" alt="">
    							</div>
    							<div>
    								<img class="img-responsive" src="<?php echo base_url() ?>assets/theme/img/logos/logo-3.png" alt="">
    							</div>
    							<div>
    								<img class="img-responsive" src="<?php echo base_url() ?>assets/theme/img/logos/logo-4.png" alt="">
    							</div>
    							<div>
    								<img class="img-responsive" src="<?php echo base_url() ?>assets/theme/img/logos/logo-5.png" alt="">
    							</div>
    							<div>
    								<img class="img-responsive" src="<?php echo base_url() ?>assets/theme/img/logos/logo-6.png" alt="">
    							</div>
    							<div>
    								<img class="img-responsive" src="<?php echo base_url() ?>assets/theme/img/logos/logo-4.png" alt="">
    							</div>
    							<div>
    								<img class="img-responsive" src="<?php echo base_url() ?>assets/theme/img/logos/logo-2.png" alt="">
    							</div>
    						</div>
    					</div>
            </div>
            <div class="col-md-6">
              <h4 class="center"><strong>Hotel Partner</strong></h4>
              <div class="divider divider-small divider-small-center">
  							<hr>
  						</div>
              <div class="row center mt-xl">
    						<div class="owl-carousel owl-theme" data-plugin-options="{'items': 6, 'autoplay': true, 'autoplayTimeout': 3000}">
    							<div>
    								<img class="img-responsive" src="<?php echo base_url() ?>assets/theme/img/logos/logo-1.png" alt="">
    							</div>
    							<div>
    								<img class="img-responsive" src="<?php echo base_url() ?>assets/theme/img/logos/logo-2.png" alt="">
    							</div>
    							<div>
    								<img class="img-responsive" src="<?php echo base_url() ?>assets/theme/img/logos/logo-3.png" alt="">
    							</div>
    							<div>
    								<img class="img-responsive" src="<?php echo base_url() ?>assets/theme/img/logos/logo-4.png" alt="">
    							</div>
    							<div>
    								<img class="img-responsive" src="<?php echo base_url() ?>assets/theme/img/logos/logo-5.png" alt="">
    							</div>
    							<div>
    								<img class="img-responsive" src="<?php echo base_url() ?>assets/theme/img/logos/logo-6.png" alt="">
    							</div>
    							<div>
    								<img class="img-responsive" src="<?php echo base_url() ?>assets/theme/img/logos/logo-4.png" alt="">
    							</div>
    							<div>
    								<img class="img-responsive" src="<?php echo base_url() ?>assets/theme/img/logos/logo-2.png" alt="">
    							</div>
    						</div>
    					</div>
            </div>
          </div>
        </div>

      </div>