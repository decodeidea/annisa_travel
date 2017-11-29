<?php
header("Cache-Control: no-store, no-cache, must-revalidate");
$this->session->unset_userdata('msg');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php if($this->uri->segment(2)=='' or $this->uri->segment(2)=='Home' or $this->uri->segment(2)=='home'){echo"Annisa Travel"; }else{echo ucwords($this->uri->segment(2));} if($this->uri->segment(5)!='') {
			echo" | ";
			echo str_replace("-", " ", $this->uri->segment(5));
		}  ?></title>

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
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/theme/css/desktop.css">

		<!-- Head Libs -->
		<script src="<?php echo base_url() ?>assets/theme/vendor/jquery/jquery.min.js"></script>
		<script src="<?php echo base_url() ?>assets/theme/vendor/modernizr/modernizr.min.js"></script>
		<!-- Facebook Button BEGIN -->                            
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3&appId=216339198484146";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
		</script>
		<script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-105388121-1', 'auto');
        ga('send', 'pageview');
        </script>
  </head>

  <body>
    <div class="body">
    	<input type="hidden" name="base_url" id="base_url" value="<?php echo base_url() ?>">
     <?php
     if($this->uri->segment(3)!='register' and $this->uri->segment(3)!='login'){
        $this->load->view('header');
    	}
        echo $page;
    	 if($this->uri->segment(3)!='register' and $this->uri->segment(3)!='login'){
    	?>
      <footer id="footer">
        <div class="container">
        			<!-- start footer mobile !-->
        			<div class="row subscribe-mobile">
        				<div class="col-md-12 center">
							<h4 class="title-news">Sign Up for our weekly newsletter </h4>
							<div class="bg-line-red"> </div>
						</div>
						<div class="col-md-12 center">
							<p class="p-scb">Get more travel inspiration, tips and exculsive offers sent straight to your inbox</p>
							
						</div>
						<div class="col-md-12 center">
							<div class="col-md-6">
								<input id="subscribe_txt" class="form-control" style="height: 50px;" placeholder="Masukkan Email Kamu di Sini" name="newsletterEmail" id="newsletterEmail" type="email">
								<button class="btn btn-primary btn-block" style="height: 50px;" type="button" onclick="save_subscribe()" id="btn_subscribe">Kirim</button>
							</div>
							<div class="col-md-3" >
								
							</div>
							<div class="col-md-9" id="result_subscribe">
						</div>
						

						
						
						</div>
        			</div>
        			<div class="row f-mobile">
        				<div class="panel-group without-bg custom-accordion-style-1 pt-xl pb-xl" id="accordion">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse7One" aria-expanded="true">
												MENU
												<span class="custom-accordion-plus"></span>
											</a>
										</h4>
									</div>
									<div id="collapse7One" class="accordion-body collapse in" aria-expanded="true">
										<div class="panel-body">
											<ul class="list-unstyled">
												<li><a href="#">Tentang Kami</a></li>
												<li><a href="#">CSR</a></li>
												<li><a href="#">Karir</a></li>
												<li><a href="#">Blog</a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse7Two" aria-expanded="false">
												BANTUAN
												<span class="custom-accordion-plus"></span>
											</a>
										</h4>
									</div>
									<div id="collapse7Two" class="accordion-body collapse" aria-expanded="false" style="height: 0px;">
										<div class="panel-body">
											<ul class="list-unstyled">
												<li><a href="#">Kontak</a></li>
												<li><a href="#">Pembayaran</a></li>
												<li><a href="#">Jadwal Acara</a></li>
												<li><a href="#">Masuk</a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion7" href="#collapse7Three" aria-expanded="false">
												DOKUMEN
												<span class="custom-accordion-plus"></span>
											</a>
										</h4>
									</div>
									<div id="collapse7Three" class="accordion-body collapse" aria-expanded="false" style="height: 0px;">
										<div class="panel-body">
											<ul class="list-unstyled">
												<li><a href="#">Mitra dan Rekanan</a></li>
												<li><a href="#">Syarat dan Ketentuan</a></li>
												<li><a href="#">Kebijakan Pribadi</a></li>
												<li><a href="#">FAQ</a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion7" href="#collapse7Four" aria-expanded="false">
												PENDAFTARAN
												<span class="custom-accordion-plus"></span>
											</a>
										</h4>
									</div>
									<div id="collapse7Four" class="accordion-body collapse" aria-expanded="false" style="height: 0px;">
										<div class="panel-body">
											<ul class="list-unstyled">
												<li><a href="#">Umroh</a></li>
												<li><a href="#">Haji</a></li>
												<li><a href="#">Mitra</a></li>
												<li><a href="#">Kredit Pelanggan</a></li>
											</ul>
										</div>
									</div>
								</div>
						</div>
        			</div>

        			<!-- end footer mobile !-->
        			
					<div class="row f-dekstop">
			            <div class="col-md-12 foot-mitra">
				            <div class="row">
				                <div class="col-md-5">
				                  <h4>Terakreditasi Oleh</h4>
				                  <div class="row">
				                    <div class="col-md-2 col-sm-2">
				                      <img class="img-responsive" src="<?php echo base_url() ?>assets/theme/img/akreditasi_1.jpg" alt="Akreditasi">
				                    </div>
				                    <div class="col-md-2 col-sm-2">
				                      <img class="img-responsive" src="<?php echo base_url() ?>assets/theme/img/akreditasi_2.jpg" alt="Akreditasi">
				                    </div>
				                    <div class="col-md-2 col-sm-2">
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
									<h5>MENU</h5>
									<ul class="list-unstyled">
										<li><a href="#">Tentang Kami</a></li>
										<li><a href="#">CSR</a></li>
										<li><a href="#">Karir</a></li>
										<li><a href="#">Blog</a></li>
									</ul>
								</div>
								<div class="col-md-3">
									<h5>Bantuan</h5>
									<ul class="list-unstyled">
										<li><a href="#">Kontak</a></li>
										<li><a href="#">Pembayaran</a></li>
										<li><a href="#">Jadwal Acara</a></li>
										<li><a href="#">Masuk</a></li>
									</ul>
								</div>
								<div class="col-md-3">
									<h5>Dokumen</h5>
									<ul class="list-unstyled">
										<li><a href="#">Mitra dan Rekanan</a></li>
										<li><a href="#">Syarat dan Ketentuan</a></li>
										<li><a href="#">Kebijakan Pribadi</a></li>
										<li><a href="#">FAQ</a></li>
									</ul>
								</div>
								<div class="col-md-3">
									<h5>Pendaftaran</h5>
									<ul class="list-unstyled">
										<li><a href="#">Umroh</a></li>
										<li><a href="#">Haji</a></li>
										<li><a href="#">Mitra</a></li>
										<li><a href="#">Kredit Pelanggan</a></li>
									</ul>
								</div>
				                <div class="col-md-8">
				                  <div class="heading heading-border heading-middle-border">
				                    <h4><strong>Subscribe</strong></h4>
				                  </div>
				                    <div class="row">
				                      <div class="col-md-9">
				                        <input id="subscribe_txt" class="form-control" style="height: 50px;" placeholder="Masukkan Email Kamu di Sini" name="newsletterEmail" id="newsletterEmail" type="email">
				                      </div>

				                      <div class="col-md-3" style="padding-left: 0px;">
				                        <button class="btn btn-primary btn-block" style="height: 50px;" type="button" onclick="save_subscribe()" id="btn_subscribe">Kirim</button>
				                      </div>
				                      <div class="col-md-9" id="result_subscribe">
				                      </div>
				                    </div>
				                </div>
							</div>
						</div>
						<div class="col-md-3">
							<h5 class="bold mb-sm"><strong>Hubungi Annisa Travel</strong></h5>
							<ul class="list list-icons mt-xl">
								<li><i class="fa fa-map-marker"></i> <strong></strong>Jl. Raya Lenteng Agung Timur Blok A No.8A, RT.5/RW.8, Lenteng Agung, Jagakarsa, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12610</li>
								<li><i class="fa fa-phone"></i> <strong></strong> <a href="tel:+622129127777">+62 21 2912 7777</a></li>
								<li><i class="fa fa-envelope"></i> <strong></strong> <a href="mailto:info@annisatravel.com">info@annnisatravel.com</a></li>
								<li><i class="fa fa-whatsapp"></i> <strong></strong> <a href="https://api.whatsapp.com/send?phone=+628113567777&text=Hello, bantu saya untuk menemukan program travel terbaik">+62 811 356 7777</a></li>
								
							</ul>
						</div>
					</div>
          		<hr class="solid tall">
				<div class="row">
					<div class="col-md-1 col-sm-2 f-tl">
						<a href="#" class="logo">
							<img alt="Annisa Travel" class="img-responsive" src="<?php echo base_url() ?>assets/theme/img/logo.png">
						</a>
					</div>
					<div class="col-md-7 col-sm-6 cpright-d">
						<p class="p-d">&copy; 2017 Annisa Travel. All Right Reserved. </p>
					</div>
					<div class="col-md-4 col-sm-4 f-tr">
						<ul class="social-icons pull-right">
							<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
							<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
							<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						
						</ul>
					</diV>
				</div>
				<div class="row">
					<div class="col-md-7 col-sm-6 cpright-m">
						<p class="p-m">&copy; 2017 Annisa Travel. All Right Reserved. </p>
					</div>
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
              	<form action="<?php echo site_url('Search') ?>" method="get">
	              <input class="input-search" id="search-input" name="q" type="text" placeholder="Search Your Destination" autocomplete="off" autocorrect="off">
	              <button class="button-close" type="button" name="submit" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	            </form>  
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
    <script src="<?php echo base_url() ?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>
<?php if($this->uri->segment(2)=='program' and $this->uri->segment(3)=='detail') { }else{?>

	<!-- Theme Custom -->
	<script src="<?php echo base_url() ?>assets/theme/js/custom.js"></script>
<?php } ?>

	<!-- Theme Initialization Files -->
	<script src="<?php echo base_url() ?>assets/theme/js/theme.init.js"></script>

	<script>
		jQuery(document).ready(function($) {
			 $('.datepicker').datepicker(
        	{
   					 format: 'yyyy-mm-dd',
        	}
        	);

				
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
