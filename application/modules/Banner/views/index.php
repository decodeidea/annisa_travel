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
							<div class="row">
								<div class="col-md-12">
									<?php foreach ($list as $key) {
										# code...
									 ?>
									<div class="col-md-4 col-sm-8 col-md-offset-0 col-sm-offset-2 custom-sm-margin-bottom-1 custom-md-margin-bottom-1">
										<article class="custom-post-blog">
											<span class="thumb-info custom-thumb-info-2">
												<span class="thumb-info-wrapper">
													<a href="<?php echo site_url() ?>/Article/detail/<?php echo $key->id ?>/<?php echo str_replace(" ", "-", $key->title) ?>">
														<img src="<?php echo base_url() ?>assets/uploads/news/<?php echo $key->id ?>/<?php echo $key->images?>" alt class="img-responsive" />
													</a>
												</span>
												<span class="thumb-info-caption custom-box-shadow">
													<span class="thumb-info-caption-text">
														<h4 class="font-weight-bold mb-lg">
															<a href="<?php echo site_url() ?>/Article/detail/<?php echo $key->id ?>/<?php echo str_replace(" ", "-", $key->title) ?>" class="text-decoration-none custom-secondary-font text-color-dark">
																<?php echo $key->title ?>
															</a>
														</h4>
														<?php echo substr($key->content, 0,'100') ?></p>
													</span>
													<span class="custom-thumb-info-post-infos center">
														<ul>
															<li class="text-uppercase">
																<i class="icon-calendar icons"></i>
																Nov 18
															</li>
															<li class="text-uppercase">
																<i class="icon-user icons"></i>
																John Doe
															</li>
														</ul>
													</span>
												</span>
											</span>
										</article>
									</div>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
				</section>
      </div>