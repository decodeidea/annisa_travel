<?php $this->session->set_userdata('current',current_url()); ?>
<script>
jQuery(document).ready(function($) {
  $('.popup').click(function(event) {
    var width  = 575,
        height = 400,
        left   = ($(window).width()  - width)  / 2,
        top    = ($(window).height() - height) / 2,
        url    = this.href,
        opts   = 'status=1' +
                 ',width='  + width  +
                 ',height=' + height +
                 ',top='    + top    +
                 ',left='   + left;
    
    window.open(url, 'twitter', opts);
 
    return false;
  });
   });
</script>
<div role="main" class="main pt-sm">
        <div class="container">
      <div class="row">
        <!-- <div class="breadcumb">
          <span><a href="#" >Saudi Arabia </a> </span> > <span> <a href="#" >  ?> </a></span>
        </div> -->
      </div>
    </div>
    
    <section class="mt-xl mb-none pb-none dc">
    <div class="container">
      <div class="row">
      
        <div class="col-md-12 center">
		 
          <h1 class="title-news"> <?php echo $data->title ?></h1>
          <div class="bg-line-red"> </div>
        </div>
      </div>
      <div class="featured row">
        
            <div class="col-md-8">
              <div class="row">
                <div class="carousel slide" id="myCarousel">
                  <!-- Carousel items -->
                  <div class="carousel-inner">
                    <?php
                     $no=0;
                     foreach ($album_image as $key) {
                     ?>
                    <div class="<?php if($no==0){echo"active ";} ?>item alif" data-slide-number="<?php echo $no ?>">
                    <img src="<?php echo base_url() ?>assets/uploads/album_program/<?php echo $key->id ?>/<?php echo $key->images ?>"></div>
                    <?php
                     $no++;
                     } ?>
                  </div><!-- Carousel nav -->
                  <!--<a class="carousel-control left" data-slide="prev" href="#myCarousel">‹</a> <a class="carousel-control right" data-slide="next" href="#myCarousel">›</a> !-->
                </div>
                  <ul class="thumbnails-alif">
                    <?php 
                    $no=0;
                    foreach ($album_image as $key) {
                     ?>
                    <li class="thumb-sub-alif">
                      <a class="img-alif" id="carousel-selector-<?php echo $no ?>"><img class="thm-img" src="<?php echo base_url() ?>assets/uploads/album_program/<?php echo $key->id ?>/<?php echo $key->images ?>"></a>
                    </li>
                    <?php
                     $no++;
                     } ?>
                  </ul>
              </div>
              
              <div class="row m-top">
                <div class="tabs tabs-product">
                    <ul class="nav nav-tabs">
                      <li class="active"><a href="#productDescription" data-toggle="tab">Itenary</a></li>
                      <li><a href="#productInfo" data-toggle="tab">Fasilitas</a></li>
                      <!--<li><a href="#productReviews" data-toggle="tab">Ulasan (15)</a></li>-->
                    </ul>
                    <div class="tab-content">
                      <div class="tab-pane active" id="productDescription">
                       <?php echo $data->itenary ?>
                      
                      </div>
                      <div class="tab-pane" id="productInfo">
                        <?php echo $data->fasilitas ?>
                      
                      </div><!-- 
                      <div class="tab-pane" id="productReviews">
                        <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sagittis, massa fringilla consequat blandit, mauris ligula porta nisi, non tristique enim sapien vel nisl. Suspendisse vestibulum lobortis dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent nec tempus nibh. Donec mollis commodo metus et fringilla. Etiam venenatis, diam id adipiscing convallis, nisi eros lobortis tellus, feugiat adipiscing ante ante sit amet dolor. Vestibulum vehicula scelerisque facilisis. Sed faucibus placerat bibendum. Maecenas sollicitudin commodo justo, quis hendrerit leo consequat ac. Proin sit amet risus sapien, eget interdum dui. Proin justo sapien, varius sit amet hendrerit id, egestas quis mauris.</p>
                      
                      </div> -->
                    </div>
                  </div>
              </div>
              
            
            </div>
            

            <div class="col-md-4">
              <aside class="sidebar annis">

                <h4 class="heading-primary annis-title">HARGA</h4>
                <form action="<?php echo site_url('Payment/tmp_payment'); ?>" method="POST">
                  <?php if($data->price1!=0){ ?>
                <div class="nav div-room-white">
                  <input type="hidden" name="id_program" value="<?php echo $data->id ?>">
                  <div class="col-md-7 rt">
                    <span class="room-type">QUAD ROOM</span></br>
                   <?php if($data->disc>0){ ?>
                       <span class="room-price disc-text">Rp. <?php echo idr($data->price1) ?>/orang</span><br>
                      <span class="room-price">Rp. <?php $a=($data->price1/100)*$data->disc; $b=$data->price1-$a; echo idr($b);  ?>/orang</span>
                      <?php }else{ ?>
                      <span class="room-price">Rp. <?php echo idr($data->price1) ?>/orang</span>
                      <?php } ?>
                  </div>
                  <div class="col-md-4">
                    <div class="quantity">
                      <input type="button" class="minus" value="-">
                      <input type="text" class="input-text qty text" title="Qty" value="0" name="quantity1" min="1" step="1">
                      <input type="button" class="plus" value="+">
                    </div>
                  </div>
                </div>
                <?php } ?>
                 <?php if($data->price2!=0){ ?>
                <div class="nav div-room">
                  <div class="col-md-7 rt">
                    <span class="room-type">TRIPLE ROOM</span></br>
                   <?php if($data->disc>0){ ?>
                       <span class="room-price disc-text">Rp. <?php echo idr($data->price2) ?>/orang</span><br>
                      <span class="room-price">Rp. <?php $a=($data->price2/100)*$data->disc; $b=$data->price2-$a; echo idr($b);  ?>/orang</span>
                      <?php }else{ ?>
                      <span class="room-price">Rp. <?php echo idr($data->price2) ?>/orang</span>
                      <?php } ?>
                  </div>
                  <div class="col-md-4">
                    <div class="quantity">
                      <input type="button" class="minus" value="-">
                      <input type="text" class="input-text qty text" title="Qty" value="0" name="quantity2" min="1" step="1">
                      <input type="button" class="plus" value="+">
                    </div>
                  </div>
                </div>
                 <?php } ?>
                 <?php if($data->price3!=0){ ?>
                <div class="nav div-room-white">
                  <div class="col-md-7 rt">
                    <span class="room-type">DOUBLE ROOM</span></br>
                     <?php if($data->disc>0){ ?>
                       <span class="room-price disc-text">Rp. <?php echo idr($data->price3) ?>/orang</span><br>
                      <span class="room-price">Rp. <?php $a=($data->price3/100)*$data->disc; $b=$data->price3-$a; echo idr($b);  ?>/orang</span>
                      <?php }else{ ?>
                      <span class="room-price">Rp. <?php echo idr($data->price3) ?>/orang</span>
                      <?php } ?>
                  </div>
                  <div class="col-md-4">
                    <div class="quantity">
                      <input type="button" class="minus" value="-">
                      <input type="text" class="input-text qty text" title="Qty" value="0" name="quantity3" min="1" step="1">
                      <input type="button" class="plus" value="+">
                    </div>
                  </div>
                </div>
                <?php } ?>
                <div class="col-md-12 br-bar">
                  <div class="line-bar"></div>
                </div>
                
                <div class="nav div-room">
                  <div class="col-md-12 rto">
                    <h5>Ketersedian Tanggal</h5>
                  </div>
                </div>
                <div class="s2">
                  <select name="date" required class="select2 form-control">
                    <?php foreach ($date as $key) {
                  # code...
                 ?>
                    <option value="<?php echo $key->id ?>">
                     <?php echo hari_indo($key->day) ?>, <?php echo tanggal_indo($key->day) ?>
                    </option>
                    <?php } ?>
                  </select>
                </div>
<?php if($this->session->flashdata('msg')){ ?>
<br>
        <div class="form-group">
                            <div class="alert alert-danger text-center text-login" style="height: auto;">
                        <?php echo $this->session->flashdata('msg') ?>
                        </div>
                      </div>
                        <?php } ?>
                <div class="col-md-12 br-bar">
                  <div class="line-bar"></div>
                </div>
                <div class="nav div-btn">
                  <div class="col-md-12 text-center">
                   <button type="submit" name="submit" class="btn-book" >BOOK NOW </button>
                  </div>
                </form>
                  <div class="col-md-12 text-center mtb12">
                    <form action="<?php echo site_url('Account/whislist') ?>" method="POST">
                    <input type="hidden" name="idP" value="<?php echo $data->id ?>">
                    <button type="submit" name="submit" class="btn-whis" >SAVE TO WISHLIST </button>
                    </form>
                  </div>
                  
                </div>
                <?php
                  //print_r(base_url());die();
                  $title = $data->title;
                  $summary = $data->summary;
                  $image='http://demo.berbagiyuks.com/black-white-img/img/1.jpg';
                  $url = site_url()."/program/detail/".$data->id."/".str_replace(" ", "-",$data->title);
                  //print_r($url);die();
                ?>
                <div class="nav div-sosmed">
                  <div class="col-md-12">
                    <div class="social">
                      <span class="text-right"><p>SHARE TO FREIND</p></span>
                      <a class="social-icon facebook" data-tooltip="Facebook" href="javascript: void(0)" onClick="window.open('http://www.facebook.com/sharer.php?u=<?php echo $url; ?>', 'sharer', 'toolbar=0,status=0,width=550,height=400');">
                      <i class="fa fa-facebook"></i>
                      </a>

                      <a class="social-icon twitter" target="blank" data-tooltip="Twitter" href="http://twitter.com/share?source=sharethiscom&text=<?php echo $title;?>&url=<?php echo $url; ?>&via=annisa_travel.com">
                      <i class="fa fa-twitter"></i>
                      </a>

                      <a class="social-icon linkedin" target="blank" data-tooltip="LinkedIn" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo $url; ?> &title=<?php echo $title;?>&summary=<?php echo $summary;?>&source=annisa_travel.com">
                      <i class="fa fa-linkedin"></i>
                      </a>

                      <a class="social-icon google-plus" target="blank" data-tooltip="Google +" href="javascript:void(0);" onclick="popUp=window.open('https://plus.google.com/share?url=<?php echo $url; ?> ','popupwindow','scrollbars=yes,width=800,height=400');popUp.focus();return false">
                      <i class="fa fa-google-plus"></i>
                      </a>

                      <!--<a class="social-icon email" target="blank" data-tooltip="Contact e-Mail" href="mailto:hirensojitra007@gmail.com">
                      <i class="fa fa-envelope-o"></i>!-->
                      </a>

                    </div>
                
                  </div>
                </div>
                
              </aside>
              <div class="nav">
                
              </div>
            </div>
          
      </div>
    </div>
    
    
    </section>
  
    <div class="container">
      <div class="row">
        <div class="bg-breadcumb col-md-12">
              
          <div class="bg-line col-md-12"></div>
        </div>
      </div>
    </div>
    <section class="section section-no-background pb-none mb-none">
    <div class="container">
      <div class="row">
        
        <div class="col-md-12 center">
          <h1 class="title-news"> Program Berkaitan </h1>
          <div class="bg-line-red"> </div>
        </div>
      </div>
      <div class="featured row">
        <?php foreach ($program_related as $key) {
         ?>
          <div class="col-sm-4 col-md-3">
            <a href="<?php echo site_url() ?>/program/detail/<?php echo $key->id ?>/<?php echo str_replace(" ", "-", $key->title) ?>" class="text-decoration-none">
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
                   <p style="min-height: 100px"> <?php echo substr($key->summary,0,200) . "..."; ?></p>
                    <span class="sf">Start From</span>
                    <span class="item-rp-pb">Rp</span>
                    <?php if($key->disc>0){ ?>
                      <span class="item-price-pb-disc1"><?php echo idr($key->price1) ?></span>
                      <span class="item-price-pb-disc2"><?php $a=($key->price1/100)*$key->disc; $b=$key->price1-$a; echo idr($b);  ?></span>
                      <?php }else{ ?>
                      <span class="item-price-pb"><?php echo idr($key->price1) ?></span>
                      <?php } ?>
                    <!--<span class="item-kos-pb">.000</span>-->
                  </span>
                </span>
              </span>
            </a>
          </div>
          <?php } ?>
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
			  	<div class="fb-comments" data-href="<?php echo site_url() ?>/Program/detail/<?php echo $data->id ?>/<?php echo str_replace(" ", "-",$data->title) ?>" data-width="100%" data-numposts="2" data-colorscheme="light"></div>
            
            </div>
              
          
            
          </div>
          
        </div>
      </div>
    </section>
	

       

      </div>

<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js"></script>
<script type="text/javascript">
    $( document ).ready(function() {
        // $('.select2').select2();

        $('.quantity .minus').click(function(){
          var v = $(this).parent().find('input[type=text]').val(), vm = 0;
          if(v > 0){
            vm = parseInt(v) - 1;
          }
          console.log("ds");
          $(this).parent().find('input[type=text]').val(vm);
        });

        $('.quantity .plus').click(function(){
          var v = $(this).parent().find('input[type=text]').val();
              vm = parseInt(v) + 1;
          $(this).parent().find('input[type=text]').val(vm);
        });
    });
</script>