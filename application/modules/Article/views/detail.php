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
                   <img src="<?php echo base_url() ?>assets/uploads/user-admin/<?php echo $article_user->id ?>/<?php echo $article_user->photo ?>" width="100%">
                  </div>
                    <div class="col-md-8 patop20">
                      <span class="author-article"><?php echo $article_user->first_name ?> <?php echo $article_user->last_name ?></span><br>
                      <span class="date-article"><?php echo tanggal_indo(substr($data->date_created, 0,10)) ?></span>
                    </div>
              </div>
            </div>
              <div class="col-md-7 patop20">
                <!--<div class="list-head-article">
					<div class="link pull-right">
						<span class='st__large' displayText=''></span>
						<span class='st_facebook_large' displayText='Facebook'></span>
						<span class='st_twitter_large' displayText='Tweet'></span>
						<span class='st_googleplus_large' displayText='Google +'></span>
						<span class='st_pinterest_large' displayText='Pinterest'></span>
					</div>
				</div>
                <div  class="list-head-article">
					<div class="comment-article"><img src="<?php echo base_url() ?>assets/theme/img/message.png" width="25"> <span class="count-comment">0</span></div>
				  </div>!-->
				
					<div class="link pull-right">
						<span class='st__large' displayText=''></span>
						<span class='st_facebook_large' displayText='Facebook'></span>
						<span class='st_twitter_large' displayText='Tweet'></span>
						<span class='st_googleplus_large' displayText='Google +'></span>
						<span class='st_pinterest_large' displayText='Pinterest'></span>
					</div>
				
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
      </div>

      <div class="head-rekomendasi">
              <h3>Rekomendasi</h3>
              <div class="line-head"></div>
            </div>
            <div class="featured row">
        <?php foreach ($program_related as $key) {
         ?>
          <div class="col-sm-4 col-md-4">
            <a href="<?php echo site_url() ?>/Program/detail/<?php echo $key->id ?>/<?php echo str_replace(" ", "-", $key->title) ?>" class="text-decoration-none">
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
                    <p><?php echo substr($key->summary,0,100) . "..."; ?></p>
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
            <div class="col-md-4 pull-right">
              <div class="sidebar">
                <h2>Artikel Populer</h2>
                <?php foreach ($article_populer as $key) {
                  # code...
                 ?>
                <div class="sidebar-article">
                  <a href="<?php echo site_url() ?>/Article/detail/<?php echo $key->id ?>/<?php echo str_replace(" ", "-", $key->title) ?>" style="text-decoration: none;"><img src="<?php echo base_url() ?>assets/uploads/news/<?php echo $key->id ?>/<?php echo $key->images ?>" width="100%"></a>
                  <a href="<?php echo site_url() ?>/Article/detail/<?php echo $key->id ?>/<?php echo str_replace(" ", "-", $key->title) ?>" style="text-decoration: none;"><span><?php echo $key->title ?></span></a>
                </div>
                <?php } ?>
              </div>
            </div>
			<div class="col-md-4 pull-right mt-xlg">
              <div class="sidebar">
                <h2>Hot Promo</h2>
                <?php foreach ($promo as $key) {
                  # code...
                 ?>
					<div class="row m-none mb-xlg">
						<div class="col-md-6 pl-none pr-none">
							<!--<div class="badge">
							  <span>5%</span>
							</div>-->
							 <a href="<?php echo site_url() ?>/Article/detail/<?php echo $key->id ?>/<?php echo str_replace(" ", "-", $key->title) ?>" style="text-decoration: none;"><img src="<?php echo base_url() ?>assets/uploads/album_program/<?php echo $key->id_image ?>/<?php echo $key->image ?>" alt="" class="img-responsive" style="width:100%"></a>
						</div>
						<div class="col-md-6">
							 <a href="<?php echo site_url() ?>/Article/detail/<?php echo $key->id ?>/<?php echo str_replace(" ", "-", $key->title) ?>" style="text-decoration: none;"><h1 class="title-cat-side"><?php echo $key->title ?></h1></a>
							<div class="red-cat-side">
								<span class="sfs">Start From</span>
								<span class="rps">Rp</span>
								<span class="prices"><?php echo idr($key->price1) ?></span>
								<!--<span class="koss">.000</span>-->
							</div>
						</div>
					</div>
					
					<?php } ?>
					
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
<script type="text/javascript" id="st_insights_js" src="https://w.sharethis.com/button/buttons.js?publisher=4bbaedf6-2c2f-4846-b1ac-bef09de330ca"></script>
<script type="text/javascript">
	stLight.options({publisher: "4bbaedf6-2c2f-4846-b1ac-bef09de330ca", doNotHash: false, doNotCopy: false, hashAddressBar: false});
</script>