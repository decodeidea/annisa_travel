<html>
<body style="font-family:Arial, Helvetica, sans-serif; background-color:#CCC"> 
<div style="padding:20px; width:780px; background-color:#FFF; margin:auto;"> 
		<div style="margin:auto; text-align:center; color:#FFF;"> 
			 <img alt="Annisa Travel" width="200" class="img-responsive" src="<?php echo base_url() ?>assets/theme/img/logo.png">
		</div>
		<div class="container">
			<div style="position: relative;
		min-height: 1px;
		padding-right: 15px;
		padding-left: 15px;">
				<div style="border-bottom: 1px solid #ccc;
height: 140px !important;">
					<h1 style="font-size: 26px !important;
font-weight: bold;padding: 68px 0 0 0 !important;">Tagihan Pembayaran #<?php echo $data->invoice ?></h1>
				</div>
			</div>

			
		</div>
		<section style="margin: 30px 0;">
			<div class="container">
				<div style="position: relative;
		min-height: 1px;
		padding-right: 15px;
		padding-left: 15px;">
					<div class="payment">
						<h4 style="font-size: 16px;
font-weight: 400;
letter-spacing: normal;
line-height: 27px;
margin: 0 0 14px 0;margin-bottom: 5px;">Hai <?php echo $member->first_name ?>,</h4>
						<h4 style="font-size: 16px;
font-weight: 400;
letter-spacing: normal;
line-height: 27px;
margin: 0 0 14px 0;margin-bottom: 5px;">Terima kasih atas kepercayaan anda telah memilih Annisa Travel untuk menjadi biro perjalanan anda.</h4>
						
					</div>
				</div>
				
			</div>
			<div class="container mt-xlg">
				<div  style="position: relative;
		min-height: 1px;
		padding-right: 15px;
		padding-left: 15px;">
					<div style="text-align: center;">
						<?php if($doku->trxstatus=='Success'){ ?>
						<h6 style="font-size: 18px;">Terima kasih anda telah melakukan pembayaran sebesar.</h6>
						<h1 style="    font-size: 45px !important;">Rp. <?php echo idr($data->total_all_amount); ?></h1>
						<?php }else{ ?>
						<h6 style="font-size: 18px;">Lakukan pembayaran sebesar.</h6>
						<h1 style="    font-size: 45px !important;">Rp. <?php echo idr($data->total_all_amount); ?></h1>
						<h6 style="font-size: 18px;">Mohon segera melakuan pembayaran sebelum:</h6>
						<h2 style="background-color: #f5f5f5;
padding: 10px;
font-weight: 500;"><?php echo $f_tgl=substr($data->date_created,8,2)+1; ?> <?php echo substr(tanggal_indo($data->date_created),2,20); ?> pukul 00.00 WIB (1 x 24 jam)</h2>
						<?php } ?>
					</div>
				</div>
				
			</div>
			<?php if($doku->trxstatus!='Success'){ ?>
			<div class="container mt-xlg" style="height: 430px;">
				<div style="position: relative;
		min-height: 1px;
		padding-right: 15px;
		padding-left: 15px;">
					<div class="payment" style="text-align: center;">
						<h4 style="font-size: 16px;
font-weight: 400;
letter-spacing: normal;
line-height: 27px;
margin: 0 0 14px 0;">Pembayaran dapat dilakukan ke salah satu rekening a/n <strong>PT. Radian Kharisma Wisata</strong></h4>
						<div style="margin-top: 15px;width: 45%;float: left;padding: 15px;">
							<div  style="height: 80px;padding: 0;clear: both;border-top:1px solid #CCC; border-bottom:1px solid #CCC; position: relative;
		min-height: 1px;
		padding-right: 15px;
		padding-left: 15px;">
								<div style="float: left;
width: 48%;">
									<img src="<?php echo base_url() ?>assets/theme/img/inv/bca.jpg" width="150" />
								</div>
								<div style="text-align: right;padding-top: 17px;float: left;
width: 48%;">
									<span style="font-weight: normal;">Bank BCA, Depok</span></br>
									<span style="font-size: 20px;position: relative;top: 4px;"><strong>4213008041</strong></span>
								</div>
							</div>
							<div class="col-md-12" style="height: 80px;padding: 0;clear: both;border-top:1px solid #CCC; border-bottom:1px solid #CCC">
								<div style="float: left;
width: 48%;">
									<img src="<?php echo base_url() ?>assets/theme/img/inv/mandiri-syariah.jpg" width="150" />
								</div>
								<div style="float: left;
width: 48%; text-align: right;padding-top: 17px;">
									<span style="font-weight: normal;">Bank BSM, Depok</span></br>
									<span style="font-size: 20px;position: relative;top: 4px;"><strong>7112345714</strong></span>
								</div>
							</div>
							<div class="col-md-12" style="height: 80px;padding: 0;clear: both;border-top:1px solid #CCC; border-bottom:1px solid #CCC">
								<div style="float: left;
width: 48%;">
									<img src="<?php echo base_url() ?>assets/theme/img/inv/bni.jpg" width="150" />
								</div>
								<div class="gridb" style="    text-align: right;padding-top: 17px;float: left;
width: 48%;">
									<span style="font-weight: normal;">Bank BNI, Depok</span></br>
									<span style="font-size: 20px;position: relative;top: 4px;"><strong>0358497606</strong></span>
								</div>
							</div>
							<div class="col-md-12" style="height: 80px;padding: 0;clear: both;border-top:1px solid #CCC; border-bottom:1px solid #CCC">
								<div class="gridb" style="float: left;
width: 48%;">
									<img src="<?php echo base_url() ?>assets/theme/img/inv/danamon.jpg" width="150" />
								</div>
								<div class="gridb" style="    text-align: right;padding-top: 17px;float: left;
width: 48%;">
									<span style="font-weight: normal;">Bank Danamaon, Depok</span></br>
									<span style="font-size: 20px;position: relative;top: 4px;"><strong>3604878185</strong></span>
								</div>
							</div>
							
						</div>
						
						<div style="margin-top: 15px;width: 45%;float: left;padding: 15px;">
							<div class="col-md-12" style="height: 80px;padding: 0;clear: both;border-top:1px solid #CCC; border-bottom:1px solid #CCC">
								<div class="gridb" style="float: left;
width: 48%;">
									<img src="<?php echo base_url() ?>assets/theme/img/inv/mandiri.jpg" width="150" />
								</div>
								<div class="gridb" style="    text-align: right;padding-top: 17px;float: left;
width: 48%;">
									<span style="font-weight: normal;">Bank Mandiri, Jakarta</span></br>
									<span style="font-size: 20px;position: relative;top: 4px;"><strong>1570000130162</strong></span>
								</div>
							</div>
							<div class="col-md-12" style="height: 80px;padding: 0;clear: both;border-top:1px solid #CCC; border-bottom:1px solid #CCC">
								<div class="gridb" style="float: left;
width: 48%;">
									<img src="<?php echo base_url() ?>assets/theme/img/inv/bii.jpg" width="150" />
								</div>
								<div class="gridb" style="    text-align: right;padding-top: 17px;float: left;
width: 48%;">
									<span style="font-weight: normal;">Bank BII, Depok</span></br>
									<span style="font-size: 20px;position: relative;top: 4px;"><strong>2102158090</strong></span>
								</div>
							</div>
							<div class="col-md-12" style="height: 80px;padding: 0;clear: both;border-top:1px solid #CCC; border-bottom:1px solid #CCC">
								<div class="gridb" style="float: left;
width: 48%;">
									<img src="<?php echo base_url() ?>assets/theme/img/inv/btn.jpg" width="150" />
								</div>
								<div class="gridb" style="    text-align: right;padding-top: 17px;float: left;
width: 48%;">
									<span style="font-weight: normal;">Bank BTN, Cisalak</span></br>
									<span style="font-size: 20px;position: relative;top: 4px;"><strong>004090130000078</strong></span>
								</div>
							</div>
							<div class="col-md-12" style="height: 80px;padding: 0;clear: both;border-top:1px solid #CCC; border-bottom:1px solid #CCC">
								<div class="gridb" style="float: left;
width: 48%;">
									<img src="<?php echo base_url() ?>assets/theme/img/inv/cimb-niaga.jpg" width="150" />
								</div>
								<div class="gridb" style="    text-align: right;padding-top: 17px;float: left;
width: 48%;">
									<span style="font-weight: normal;">Bank CIMB Niaga, Depok</span></br>
									<span style="font-size: 20px;position: relative;top: 4px;"><strong>860005359400</strong></span>
								</div>
							</div>
							
						</div>	
						
					</div>
				</div>
				
			</div>
			<?php } ?>
			<div class="container" style="margin-top:30px">
				<div class="col-md-12">
					<div class="payment">
						<h4 style="font-size: 16px;
font-weight: 400;
letter-spacing: normal;
line-height: 27px;
margin: 0 0 14px 0;">Berikut detail penjelasan tagihan pembayaran :</h4>
						<div class="tp" style="padding: 15px;
border: solid 1px #ccc;">
							<table class="table-payment" style="width: 100%;
max-width: 100%;
margin-bottom: 20px;">
                <thead>
                  <tr>
                    <th style="font-size: 12px;
font-weight: normal;
color: #a9a9a9;">PRODUCT</th>
                    <th style="font-size: 12px;
font-weight: normal;
color: #a9a9a9;">ROOM</th>
                    <th style="font-size: 12px;
font-weight: normal;
color: #a9a9a9;">HARGA</th>
                    <th style="font-size: 12px;
font-weight: normal;
color: #a9a9a9;">PAX</th>
                    <th style="font-size: 12px;
font-weight: normal;
color: #a9a9a9;">TOTAL</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $total_price=0;
                  $no=0;
                  foreach ($product as $key) {
                    $no++;
                   ?>

                  <tr class="py-tr">
                    <td style="font-weight: bold;
border-bottom: solid 1px #e6e5e5;
padding-bottom: 8px;
text-align: center;"><?php echo $key->program->title ?></td>
                    <td style="text-transform: uppercase;font-weight: bold;
border-bottom: solid 1px #e6e5e5;
padding-bottom: 8px;
text-align: center;"><?php echo $key->type_room ?></td>
                    <td style="font-weight: bold;
border-bottom: solid 1px #e6e5e5;
padding-bottom: 8px;
text-align: center;">Rp. <?php if($key->type_room=='quad'){echo idr($key->program->price1); }elseif ($key->type_room=='triple') {
                      echo idr($key->program->price2);}else{echo idr($key->program->price3);}  ?>.-</td>
                    <td style="font-weight: bold;
border-bottom: solid 1px #e6e5e5;
padding-bottom: 8px;
text-align: center;"><?php echo $key->qtt ?> Orang</td>
                    <td style="font-weight: bold;
border-bottom: solid 1px #e6e5e5;
padding-bottom: 8px;
text-align: center;">Rp. <?php echo idr($key->total_amount) ?></td>
                  </tr>
                  <?php }?>
                  <tr class="py-col">
                    <td colspan="3"></td>
                    <td class="ppn" style="color: #0088cc; text-align: right;">Ppn 10%</td>
                    <td style="color: #0088cc; text-align: center;">Rp. <?php echo idr($data->total_amount_ppn) ?></td>
                  </tr>
                  <tr class="py-col">
                    <td colspan="3"></td>
                    <td class="tot" style="color: #0088cc; text-align: right;">Total Pembayaran</td>
                    <td class="tot" style="color: #0088cc; text-align: center;">Rp. <?php echo idr($data->total_all_amount); ?></td>
                  </tr>
                  <tr class="py-col">
                    <td colspan="3"></td>
                    <td class="tot" style="color: #0088cc; text-align: right;">Status</td>
                    <td class="tot" style="color: #0088cc; text-align: center;"><?php 

                                   if($doku->trxstatus=='Success'){echo"Paid";}
                      elseif($doku->trxstatus=='Failed'){
                        echo"Rejected";
                      }else{echo"Requested";}
                                   ?></td>
                  </tr>
                </tbody>
              </table>
						</div>
					</div>
				</div>
				
			</div>
			<br>
			<div class="container mt-xlg border-top" style="border-top: 1px solid #ccc;border-bottom: 1px solid #ccc;
    ;">
					<div class="col-md-12 pay-info" style="padding: 15px">
						<span style="line-height: 19px; font-size: 14px;
line-height: 22px;">Setelah melakukan pembayaran, sistem kami akan memverifikasi pembayaran secara otomatis. Jika kamu menghadapi kendala mengenai pembayaran, silakan langsung Hubungi Customer service kami atau Ubah Metode Pembayaran untuk memilih metode pembayaran lain.</span><br/>
						
					</div>
				
			</div>
			<br>
			<div class="container mt-xlg border-top">
				<div class="col-md-12 pay-info">
				</div>
				
				
			</div>
			<div class="container mt-xlg border-top">
			
					<div class="col-md-12 pay-info">
						<div style="position: relative; background-color:#e4e4e4;padding: 20px;">
							<div>
								<span>Promo Program</span>
							<div>
							<article style="padding-top: 20px;">
								<div class="col-md-6 pl-none pr-none" style="width:50%; float:left; padding-left:0; padding-right:0;">
									<img src="<?php echo base_url() ?>assets/uploads/album_program/<?php echo $produck_rek_image->id ?>/<?php echo $produck_rek_image->images ?>" alt="" class="img-responsive" style="width:100%">
								</div>
								
								<div class="col-md-6" style="width:45%; float:left; margin-left: 20px;">
									<h1 class="title-cat"> <?php echo $product_rek->title ?></h1>
									<p><?php echo $product_rek->summary ?></p>
									<div class="red-cat" style="height: auto;
width: 80%;
background-color: #ae0613;
position: relative; color: #fff; padding: 10px;">
										<span class="sf">Start From</span><br>
										<span class="rp">Rp</span>
										<span class="price" style="color: #fff;
font-size: 22px;
font-weight: 900;"><?php echo idr($product_rek->price1) ?></span>
									</div>
								</div>
								<div style="clear:left;"></div>
								<div style="col-md-12 cat-line"></div>
							</article>
							
						</div>
					</div>
				
			</div>
			
			<div class="container mt-xlg border-top" style="border-top: 1px solid #ccc; padding: 10px; margin-top: 10px;">
			
					
				<span style="font-size: 14px;">Kesulitan Pembayaran? Hubungi kami.</span><br/>
				<span style="position: relative;top: 6px;font-size: 14px;">021 - 2912 7777 | info@annisatravel.com</span><br/>
				<span style="position: relative;top: 12px;font-size: 14px;">Jl.Raya Lenteng Agung No. 8a</span></br>
			
				
			</div>
		</section>
       
		
        
</div>
<div style="padding:20px;  width:780px; background-color:#297cb7; margin:auto; text-align:center; color:#FFF;"> 
	COPYRIGHT @ANNISA TRAVEL 2017'easy as click' All Rights Reserved.</br>
	<a href="#"> Syarat & Ketentuan </a>| <a href="#">Kebijakan Privasi </a>
</div>
</body>
</html> 	