<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title>Annisa Travel</title>

		<meta name="keywords" content="travel, booking online, umrah, haji, wisata" />
		<meta name="description" content="PT. RADIAN KHARISMA WISATA atau lebih dikenal dengan Annisa Travel, didirikan di Jakarta pada tahun 2003, adalah perusahaan swasta nasional yang bergerak dalam bidang Jasa Perjalanan (Travel). Sejak awal didirikan, Annisa Travel bertekad memberikan pelayanan perjalanan yang prima baik Domestik maupun Internasional. Annisa Travel juga telah memiliki sertifikasi IATA, ASITA, ASPERAPI, HIMPUH, serta izin dari Kementerian Agama sebagai penyelenggara Umrah dan Haji.">
		<meta name="author" content="Decode">

		<!-- Favicon -->
		<link rel="shortcut icon" href="<?php echo base_url() ?>assets/theme/img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/theme/vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/theme/vendor/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/theme/vendor/animate/animate.min.css">
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/theme/vendor/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/theme/vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/theme/vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/theme/vendor/magnific-popup/magnific-popup.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/theme/css/theme.css">
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/theme/css/theme-elements.css">
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/theme/css/theme-blog.css">
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/theme/css/theme-shop.css">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/theme/vendor/rs-plugin/css/settings.css">
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/theme/vendor/rs-plugin/css/layers.css">
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/theme/vendor/rs-plugin/css/navigation.css">
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/theme/vendor/circle-flip-slideshow/css/component.css">

		<!-- Skin CSS -->
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/theme/css/skins/default.css">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/theme/css/custom.css">

		<!-- Head Libs -->
		<script src="<?php echo base_url() ?>assets/theme/vendor/modernizr/modernizr.min.js"></script>

	<script src="<?php echo base_url() ?>assets/theme/vendor/jquery/jquery.min.js"></script>
	  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  </head>

  <body>
    <div class="body">
     <?php
     if($this->uri->segment(3)!='register' and $this->uri->segment(3)!='login'){
        $this->load->view('header');
    	}
        echo $page;
    	 if($this->uri->segment(3)!='register' and $this->uri->segment(3)!='login'){
    	?>
      <footer id="footer">
        <div class="container">
					<div class="row">
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-5">
                  <h4>Terakreditasi Oleh</h4>
                  <div class="row">
                    <div class="col-md-2">
                      <img class="img-responsive" src="<?php echo base_url() ?>assets/theme/img/akreditasi_1.jpg" alt="Akreditasi">
                    </div>
                    <div class="col-md-2">
                      <img class="img-responsive" src="<?php echo base_url() ?>assets/theme/img/akreditasi_2.jpg" alt="Akreditasi">
                    </div>
                    <div class="col-md-2">
                      <img class="img-responsive" src="<?php echo base_url() ?>assets/theme/img/akreditasi_3.jpg" alt="Akreditasi">
                    </div>
                  </div>
                </div>

                <div class="col-md-7">
                  <h4>Pembayaran dapat dilakukan melalui</h4>
                  <div class="row">
                    <div class="col-md-12">
                      <img class="img-responsive" src="<?php echo base_url() ?>assets/theme/img/pembayaran.png" alt="Pembayaran">
                    </div>
                  </div>
                </div>
              </div>
            </div>
						<div class="col-md-9">
							<div class="row">
								<div class="col-md-3">
									<h5>Blog</h5>
									<ul class="list-unstyled">
										<li><a href="blog-full-width.html">Blog Full Width</a></li>
										<li><a href="blog-large-image.html">Blog Large Image</a></li>
										<li><a href="blog-medium-image.html">Blog Medium Image</a></li>
										<li><a href="blog-post.html">Single Post</a></li>
									</ul>
								</div>
								<div class="col-md-3">
									<h5>Pages</h5>
									<ul class="list-unstyled">
										<li><a href="page-full-width.html">Full width</a></li>
										<li><a href="page-left-sidebar.html">Left sidebar</a></li>
										<li><a href="page-right-sidebar.html">Right sidebar</a></li>
										<li><a href="page-custom-header.html">Custom Header</a></li>
									</ul>
								</div>
								<div class="col-md-3">
									<h5>Portfolio</h5>
									<ul class="list-unstyled">
										<li><a href="portfolio-2-columns.html">2 Columns</a></li>
										<li><a href="portfolio-3-columns.html">3 Columns</a></li>
										<li><a href="portfolio-4-columns.html">4 Columns</a></li>
										<li><a href="portfolio-single-small-slider.html">Single Project</a></li>
									</ul>
								</div>
								<div class="col-md-3">
									<h5>Extra Pages</h5>
									<ul class="list-unstyled">
										<li><a href="page-team.html">Team</a></li>
										<li><a href="page-services.html">Services</a></li>
										<li><a href="page-careers.html">Careers</a></li>
										<li><a href="page-faq.html">FAQ</a></li>
										<li><a href="sitemap.html">Sitemap</a></li>
									</ul>
								</div>
                <div class="col-md-8">
                  <div class="heading heading-border heading-middle-border">
                    <h4><strong>Subscribe</strong></h4>
                  </div>
  								<form id="newsletterForm" action="#" method="POST">
                    <div class="row">
                      <div class="col-md-9">
                        <input class="form-control" style="height: 50px;" placeholder="Masukkan Email Kamu di Sini" name="newsletterEmail" id="newsletterEmail" type="text">
                      </div>

                      <div class="col-md-3" style="padding-left: 0px;">
                        <button class="btn btn-primary btn-block" style="height: 50px;" type="submit">Kirim</button>
                      </div>
                    </div>
  								</form>
                </div>
							</div>
						</div>
						<div class="col-md-3">
							<h5 class="bold mb-sm"><strong>Hubungi Annisa Travel</strong></h5>
							<ul class="list list-icons mt-xl">
								<li><i class="fa fa-map-marker"></i> <strong></strong> Gedung Aneka Tambang Tower B Mezzanine Floor<br>Jl. TB Simatupang No. 1 Jakarta Selatan 12530</li>
								<li><i class="fa fa-phone"></i> <strong></strong> <a href="#">+62 21 2912 7777</a></li>
								<li><i class="fa fa-envelope"></i> <strong></strong> <a href="#">halo@annnisatravel.com</a></li>
								<li><i class="fa fa-whatsapp"></i> <strong></strong> <a href="#">+62 8123 45678</a></li>
								<li><i class="fa fa-comment"></i> <strong></strong> <a href="#">Live Chat</a></li>
							</ul>
						</div>
					</div>
          <hr class="solid tall">
          <div class="row">
            <div class="col-md-1">
              <a href="#" class="logo">
                <img alt="Annisa Travel" class="img-responsive" src="<?php echo base_url() ?>assets/theme/img/logo.png">
              </a>
            </div>
            <div class="col-md-7">
              <p>&copy; 2017 Annisa Travel. All Right Reserved. No part of this site my be reproduced without our written permission</p>
            </div>
            <div class="col-md-4">
              <ul class="social-icons pull-right">
                <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
              </ul>
            </di>
          </div>
				</div>
      </footer>
      <?php } ?>

      <div id="modal-search" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modalSearch">
        <div class="modal-dialog  modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-body">
              <label class="label-search">
                <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
              </label>
              <input class="input-search" id="search-input" type="text" placeholder="Search places, cities, countries and continents" autocomplete="off" autocorrect="off">
              <button class="button-close" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>

          </div>
        </div>
      </div>
    </div>
	<!-- Vendor -->
	<script src="<?php echo base_url() ?>assets/theme/vendor/jquery.appear/jquery.appear.min.js"></script>
	<script src="<?php echo base_url() ?>assets/theme/vendor/jquery.easing/jquery.easing.min.js"></script>
	<script src="<?php echo base_url() ?>assets/theme/vendor/jquery-cookie/jquery-cookie.min.js"></script>
	<script src="<?php echo base_url() ?>assets/theme/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url() ?>assets/theme/vendor/common/common.min.js"></script>
	<script src="<?php echo base_url() ?>assets/theme/vendor/jquery.validation/jquery.validation.min.js"></script>
	<script src="<?php echo base_url() ?>assets/theme/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
	<script src="<?php echo base_url() ?>assets/theme/vendor/jquery.gmap/jquery.gmap.min.js"></script>
	<script src="<?php echo base_url() ?>assets/theme/vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
	<script src="<?php echo base_url() ?>assets/theme/vendor/isotope/jquery.isotope.min.js"></script>
	<script src="<?php echo base_url() ?>assets/theme/vendor/owl.carousel/owl.carousel.min.js"></script>
	<script src="<?php echo base_url() ?>assets/theme/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
	<script src="<?php echo base_url() ?>assets/theme/vendor/vide/vide.min.js"></script>
	<!-- Theme Base, Components and Settings -->
	<script src="<?php echo base_url() ?>assets/theme/js/theme.js"></script>

		<!-- Current Page Vendor and Views -->
	<script src="<?php echo base_url() ?>assets/theme/vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="<?php echo base_url() ?>assets/theme/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="<?php echo base_url() ?>assets/theme/vendor/circle-flip-slideshow/js/jquery.flipshow.min.js"></script>
    <script src="<?php echo base_url() ?>assets/theme/js/views/view.home.js"></script>
<?php if($this->uri->segment(2)=='Program' and $this->uri->segment(3)=='detail') { }else{?>

	<!-- Theme Custom -->
	<script src="<?php echo base_url() ?>assets/theme/js/custom.js"></script>
<?php } ?>

	<!-- Theme Initialization Files -->
	<script src="<?php echo base_url() ?>assets/theme/js/theme.init.js"></script>

	<script>
		jQuery(document).ready(function($) {

				$('#myCarousel').carousel({
						interval: 5000
				});

				$('#carousel-text').html($('#slide-content-0').html());

				//Handles the carousel thumbnails
				$('[id^=carousel-selector-]').click( function(){
						var id_selector = $(this).attr("id");
						var id = id_selector.substr(id_selector.length -1);
						var id = parseInt(id);
						$('#myCarousel').carousel(id);
				});


				// When the carousel slides, auto update the text
				$('#myCarousel').on('slid', function (e) {
						var id = $('.item.active').data('slide-number');
						$('#carousel-text').html($('#slide-content-'+id).html());
				});
		});

		// Starrr plugin (https://github.com/dobtco/starrr)
		var __slice = [].slice;

		(function($, window) {
			var Starrr;

			Starrr = (function() {
			Starrr.prototype.defaults = {
			  rating: void 0,
			  numStars: 5,
			  change: function(e, value) {}
			};

			function Starrr($el, options) {
				var i, _, _ref,
				_this = this;

				this.options = $.extend({}, this.defaults, options);
				this.$el = $el;
				_ref = this.defaults;
				for (i in _ref) {
					_ = _ref[i];
					if (this.$el.data(i) != null) {
					  this.options[i] = this.$el.data(i);
					}
				}
				this.createStars();
				this.syncRating();
				this.$el.on('mouseover.starrr', 'span', function(e) {
				return _this.syncRating(_this.$el.find('span').index(e.currentTarget) + 1);
				});
					this.$el.on('mouseout.starrr', function() {
					return _this.syncRating();
				});
					this.$el.on('click.starrr', 'span', function(e) {
					return _this.setRating(_this.$el.find('span').index(e.currentTarget) + 1);
				});
					this.$el.on('starrr:change', this.options.change);
			}

			Starrr.prototype.createStars = function() {
			  var _i, _ref, _results;

			  _results = [];
			  for (_i = 1, _ref = this.options.numStars; 1 <= _ref ? _i <= _ref : _i >= _ref; 1 <= _ref ? _i++ : _i--) {
				_results.push(this.$el.append("<span class='glyphicon .glyphicon-star'></span>"));
			  }
			  return _results;
			};

			Starrr.prototype.setRating = function(rating) {
			  if (this.options.rating === rating) {
				rating = void 0;
			  }
			  this.options.rating = rating;
			  this.syncRating();
			  return this.$el.trigger('starrr:change', rating);
			};

			Starrr.prototype.syncRating = function(rating) {
			  var i, _i, _j, _ref;

			  rating || (rating = this.options.rating);
			  if (rating) {
				for (i = _i = 0, _ref = rating - 1; 0 <= _ref ? _i <= _ref : _i >= _ref; i = 0 <= _ref ? ++_i : --_i) {
				  this.$el.find('span').eq(i).removeClass('glyphicon-star').addClass('glyphicon-star stars-gold');
				}
			  }
			  if (rating && rating < 5) {
				for (i = _j = rating; rating <= 4 ? _j <= 4 : _j >= 4; i = rating <= 4 ? ++_j : --_j) {
				  this.$el.find('span').eq(i).removeClass('glyphicon-star stars-gold').addClass('glyphicon-star');
				}
			  }
			  if (!rating) {
				return this.$el.find('span').removeClass('glyphicon-star stars-gold').addClass('glyphicon-star');
			  }
			};

			return Starrr;

		  })();
		  return $.fn.extend({
			starrr: function() {
			  var args, option;

			  option = arguments[0], args = 2 <= arguments.length ? __slice.call(arguments, 1) : [];
			  return this.each(function() {
				var data;

				data = $(this).data('star-rating');
				if (!data) {
				  $(this).data('star-rating', (data = new Starrr($(this), option)));
				}
				if (typeof option === 'string') {
				  return data[option].apply(data, args);
				}
			  });
			}
		  });
		})(window.jQuery, window);

		$(function() {
		  return $(".starrr").starrr();
		});

		$( document ).ready(function() {

		  $('#stars').on('starrr:change', function(e, value){
			$('#count').html(value);
		  });

		  $('#stars-existing').on('starrr:change', function(e, value){
			$('#count-existing').html(value);
		  });
		});
	</script>
  </body>
</html>
