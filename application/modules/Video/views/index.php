<div role="main" class="main">
		<section class="section section-no-border background-color-light m-none">
					<div class="container">
						<div class="row">
						
							<div class="col-md-12 center">
								<h1 class="title-news"> Our Video </h1>
								<div class="bg-line-red"> </div>
							</div>
						</div>
						
						<div class="featured row">
							<ul id="portfolioGrid" class="p-none">
								<?php foreach ($list as $key) {
								
								 ?>
							<li class="col-sm-6 col-md-4 isotope-item p-none mb-xlg">
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
						</div>
						
					</div>
					
				</section>
				<!-- <div class="col-md-12 center">
					<ul class="pagination">
						<li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
					</ul>
				</div> -->
      </div>