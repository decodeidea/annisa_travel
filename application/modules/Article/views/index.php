<div role="main" class="main">
		<section class="section section-no-border background-color-light m-none">
					<div class="container">
						<div class="row">
						
							<div class="col-md-12 center">
								<h1 class="title-news"> Our Article </h1>
								<div class="bg-line-red"> </div>
							</div>
						</div>
						<div class="featured row">
							<ul id="portfolioGrid" class="p-none">
								<?php foreach ($list as $key) {
									# code...
								 ?>
								<li class="col-sm-6 col-md-4 isotope-item p-none mb-xlg">
									<div class="portfolio-grid-item">
									<a href="<?php echo site_url() ?>/Article/detail/<?php echo $key->id ?>/<?php echo str_replace(" ", "-", $key->title) ?>" class="text-decoration-none popup-with-move-anim">
									  <img src="<?php echo base_url() ?>assets/uploads/news/<?php echo $key->id ?>/<?php echo $key->images?>" class="img-responsive">
									  <div class="pd-dest">
										<span class="pd-dest-tit"><?php echo $key->title ?></span>
										</br>
										<span class="pd-dest-date"><?php echo  substr($key->content, 0,250); ?></span>
										</br>
											
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