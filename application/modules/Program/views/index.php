<div role="main" class="main">

		<section class="section section-no-border background-color-light m-none">
			<div class="container">
				<div class="row">
			
					<div class="col-md-12 center">
					  <h1 class="title-news"> Our Program </h1>
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
						<a href="<?php echo site_url() ?>/program/detail/<?php echo $key->id ?>/<?php echo str_replace(" ", "-", $key->title) ?>" class="text-decoration-none popup-with-move-anim">
						  <img src="<?php echo base_url() ?>assets/uploads/album_program/<?php echo $key->id_image ?>/<?php echo $key->image ?>" class="img-responsive img-program">
						  <div class="pd-dest">
							<span class="pd-dest-tit"><?php echo $key->title ?></span>
							</br>
							<span class="pd-dest-date"><?php echo tanggal_indo($key->date->day) ?> - <?php echo IntervalDays($key->date->day,$key->date->off_day) ?> Hari</span>
							</br>
							<div class="product-ratings" >
							  <span class="pd-dest-child">fasilitas</span>
							  <div class="ratings-box tl-dest">
								
								<div class="rating<?php echo $key->rating ?>" style="width:100%"></div>
							  </div>
							</div>
						  </div>
						</a>
						</div>
					</li>
					<?php } ?>
				</ul>
				<!-- <div class="button-see2 col-md-12 center">
					<a class="btn btn-primary mt-xl mb-sm" href="#">See More <i class="fa fa-angle-right pl-xs"></i></a>
				</div> -->
			</div>
            
          
        </div>
		</section>
    

      </div>