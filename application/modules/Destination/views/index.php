<div role="main" class="main">

		<section class="section section-no-border background-color-light m-none">
			<div class="container">
				<div class="row">
			
					<div class="col-md-12 center">
					  <h1 class="title-news"> Destination </h1>
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
						<a href="<?php echo site_url() ?>/Destination/detail/<?php echo $key->id ?>/<?php echo str_replace(" ", "-",$key->title)?>" class="text-decoration-none popup-with-move-anim">
						  <img src="<?php echo base_url() ?>assets/uploads/destination/<?php echo $key->id  ?>/<?php echo $key->images ?>" class="img-responsive img-fix">
						  <div class="pd-dest text-center" >
							<span class="pd-dest-tit"><?php echo $key->title ?></span>
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