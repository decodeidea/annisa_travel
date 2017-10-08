
      <div role="main" class="main">
	  
		<div class="container">
			<div class="row step">
				<div class="step-pay">
					<div class="circleBase step-one">1</div>
					<div class="circleBase step-two">2</div>
					<div class="step-title-1 pull-left">Pembayaran</div>
					<div class="step-title-2 pull-right">Selesai</div>
					<div class="step-line"></div>
				</div>
			</div>
		</div>
		<section class="section section-no-border background-color-light p-none">
			<div class="container">
				<div class="col-md-12">
					<div class="payment">
						<h4><strong>RINGKASAN PEMESANAN</strong></h4>
						<div class="tp">
							<table class="table-payment">
								<thead>
									<tr>
										<th>PRODUCT</th>
										<th>ROOM</th>
										<th>HARGA</th>
										<th>PAX</th>
										<th>TOTAL</th>
									</tr>
								</thead>
								<tbody>
									<tr class="py-tr">
										<td>Umroh Series Reguler 9 Hari</td>
										<td>Quad</td>
										<td>Rp. 21.500.000.-</td>
										<td>3 Orang</td>
										<td>64.500.000</td>
									</tr>
									<tr class="py-col">
										<td colspan="3"></td>
										<td class="ppn">Ppn 10%</td>
										<td>6.450.000</td>
									</tr>
									<tr class="py-col">
										<td colspan="3"></td>
										<td class="tot">Total Pembayaran</td>
										<td class="tot">70.950.000</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="button-bayar pull-right">
							<a class="btn btn-payment mt-xl mb-sm" href="<?php echo site_url() ?>/Payment/finish">BAYAR SEKARANG</a>
						</div>
						
					</div>
				</div>
				
			</div>
			<div class="container">
				<div class="col-md-12">
					<div class="payment">
						<h4><strong>PEMBAYRAN</strong></h4>
						<div class="tp2">
							<div class="panel-heading">
								<div class="panel-title PMP">Pilih Metode Pembayaran</div>
							</div>
							<div class="panel-group" id="accordion">
								<div class="panel panel-default">
									<div class="panel-heading">
										
										<h4 class="panel-title cpay">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
												<div class="cr">
													<div class="circle"></div>
												</div>
												Kartu Kredit / Debit
											</a>
										</h4>
									</div>
									<div id="collapseOne" class="accordion-body collapse in">
										<div class="panel-body">
											<form action="#" id="frmBillingAddress" method="post">
												<div class="row">
													<div class="form-group">
														<div class="col-md-5">
															<label>Pilih Kartu</label>
															<select class="form-control">
																<option value="">-- Pilih Opsi Pembayaran --</option>
															</select>
														</div>
														<div class="col-md-5">
															<label>Tipe Pembayaran</label>
															<select class="form-control">
																<option value="">Bayar Penuh</option>
															</select>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="form-group">
														<div class="col-md-12">
															<ul class="LP list-pay-atts">
																<li>Selesaikan Pembayaran dalam waktu 1 jam untuk menghindari pembatalan transaksi secara otomatis</li>
																<li>Pilih metode pembayaran ini untuk menikmati promo khusus dari Bank pilihan</li>
															</ul>
														</div>
														
													</div>
												</div>
												<div class="row">
													<div class="form-group">
														<div class="col-md-12">
															<ul class="LP list-pay">
																<li class="m-none"><img src="<?php echo base_url() ?>assets/theme/img/pay-visa.jpg" /></li>
																<li><img src="<?php echo base_url() ?>assets/theme/img/pay-mastercard.jpg" /></li>
																<li><img src="<?php echo base_url() ?>assets/theme/img/pay-paypal.jpg" /></li>
																<li><img src="<?php echo base_url() ?>assets/theme/img/pay-bca.jpg" /></li>
															</ul>
														</div>
														
													</div>
												</div>
											
											</form>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										
										<h4 class="panel-title cpay">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
												<div class="cr">
													<div class="circle"></div>
												</div>
												Cicilan Tanpa Kartu Kredit
											</a>
										</h4>
									</div>
									<div id="collapseTwo" class="accordion-body collapse">
										<div class="panel-body">
											<form action="#/" id="frmBillingAddress" method="post">
												<div class="row">
													<div class="form-group">
														<div class="col-md-5">
															<label>Pilih Kartu</label>
															<select class="form-control">
																<option value="">-- Pilih Opsi Pembayaran --</option>
															</select>
														</div>
														<div class="col-md-5">
															<label>Tipe Pembayaran</label>
															<select class="form-control">
																<option value="">Bayar Penuh</option>
															</select>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="form-group">
														<div class="col-md-12">
															<ul class="LP list-pay-atts">
																<li>Selesaikan Pembayaran dalam waktu 1 jam untuk menghindari pembatalan transaksi secara otomatis</li>
																<li>Pilih metode pembayaran ini untuk menikmati promo khusus dari Bank pilihan</li>
															</ul>
														</div>
														
													</div>
												</div>
												<div class="row">
													<div class="form-group">
														<div class="col-md-12">
															<ul class="LP list-pay">
																<li class="m-none"><img src="<?php echo base_url() ?>assets/theme/img/pay-visa.jpg" /></li>
																<li><img src="<?php echo base_url() ?>assets/theme/img/pay-mastercard.jpg" /></li>
																<li><img src="<?php echo base_url() ?>assets/theme/img/pay-paypal.jpg" /></li>
																<li><img src="<?php echo base_url() ?>assets/theme/img/pay-bca.jpg" /></li>
															</ul>
														</div>
														
													</div>
												</div>
											
											</form>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										
										<h4 class="panel-title cpay">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
												<div class="cr">
													<div class="circle"></div>
												</div>
												Internet Banking
											</a>
										</h4>
									</div>
									<div id="collapseTwo" class="accordion-body collapse">
										<div class="panel-body">
											<form action="http://preview.oklerthemes.com/" id="frmBillingAddress" method="post">
												<div class="row">
													<div class="form-group">
														<div class="col-md-5">
															<label>Pilih Kartu</label>
															<select class="form-control">
																<option value="">-- Pilih Opsi Pembayaran --</option>
															</select>
														</div>
														<div class="col-md-5">
															<label>Tipe Pembayaran</label>
															<select class="form-control">
																<option value="">Bayar Penuh</option>
															</select>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="form-group">
														<div class="col-md-12">
															<ul class="LP list-pay-atts">
																<li>Selesaikan Pembayaran dalam waktu 1 jam untuk menghindari pembatalan transaksi secara otomatis</li>
																<li>Pilih metode pembayaran ini untuk menikmati promo khusus dari Bank pilihan</li>
															</ul>
														</div>
														
													</div>
												</div>
												<div class="row">
													<div class="form-group">
														<div class="col-md-12">
															<ul class="LP list-pay">
																<li class="m-none"><img src="<?php echo base_url() ?>assets/theme/img/pay-visa.jpg" /></li>
																<li><img src="<?php echo base_url() ?>assets/theme/img/pay-mastercard.jpg" /></li>
																<li><img src="<?php echo base_url() ?>assets/theme/img/pay-paypal.jpg" /></li>
																<li><img src="<?php echo base_url() ?>assets/theme/img/pay-bca.jpg" /></li>
															</ul>
														</div>
														
													</div>
												</div>
											
											</form>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										
										<h4 class="panel-title cpay">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
												<div class="cr">
													<div class="circle"></div>
												</div>
												Transfer	
											</a>
										</h4>
									</div>
									<div id="collapseTwo" class="accordion-body collapse">
										<div class="panel-body">
											<form action="#" id="frmBillingAddress" method="post">
												<div class="row">
													<div class="form-group">
														<div class="col-md-5">
															<label>Pilih Kartu</label>
															<select class="form-control">
																<option value="">-- Pilih Opsi Pembayaran --</option>
															</select>
														</div>
														<div class="col-md-5">
															<label>Tipe Pembayaran</label>
															<select class="form-control">
																<option value="">Bayar Penuh</option>
															</select>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="form-group">
														<div class="col-md-12">
															<ul class="LP list-pay-atts">
																<li>Selesaikan Pembayaran dalam waktu 1 jam untuk menghindari pembatalan transaksi secara otomatis</li>
																<li>Pilih metode pembayaran ini untuk menikmati promo khusus dari Bank pilihan</li>
															</ul>
														</div>
														
													</div>
												</div>
												<div class="row">
													<div class="form-group">
														<div class="col-md-12">
															<ul class="LP list-pay">
																<li class="m-none"><img src="<?php echo base_url() ?>assets/theme/img/pay-visa.jpg" /></li>
																<li><img src="<?php echo base_url() ?>assets/theme/img/pay-mastercard.jpg" /></li>
																<li><img src="<?php echo base_url() ?>assets/theme/img/pay-paypal.jpg" /></li>
																<li><img src="<?php echo base_url() ?>assets/theme/img/pay-bca.jpg" /></li>
															</ul>
														</div>
														
													</div>
												</div>
											
											</form>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										
										<h4 class="panel-title cpay">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
												<div class="cr">
													<div class="circle"></div>
												</div>
												Uang Elektronik
											</a>
										</h4>
									</div>
									<div id="collapseTwo" class="accordion-body collapse">
										<div class="panel-body">
											<form action="#" id="frmBillingAddress" method="post">
												<div class="row">
													<div class="form-group">
														<div class="col-md-5">
															<label>Pilih Kartu</label>
															<select class="form-control">
																<option value="">-- Pilih Opsi Pembayaran --</option>
															</select>
														</div>
														<div class="col-md-5">
															<label>Tipe Pembayaran</label>
															<select class="form-control">
																<option value="">Bayar Penuh</option>
															</select>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="form-group">
														<div class="col-md-12">
															<ul class="LP list-pay-atts">
																<li>Selesaikan Pembayaran dalam waktu 1 jam untuk menghindari pembatalan transaksi secara otomatis</li>
																<li>Pilih metode pembayaran ini untuk menikmati promo khusus dari Bank pilihan</li>
															</ul>
														</div>
														
													</div>
												</div>
												<div class="row">
													<div class="form-group">
														<div class="col-md-12">
															<ul class="LP list-pay">
																<li class="m-none"><img src="<?php echo base_url() ?>assets/theme/img/pay-visa.jpg" /></li>
																<li><img src="<?php echo base_url() ?>assets/theme/img/pay-mastercard.jpg" /></li>
																<li><img src="<?php echo base_url() ?>assets/theme/img/pay-paypal.jpg" /></li>
																<li><img src="<?php echo base_url() ?>assets/theme/img/pay-bca.jpg" /></li>
															</ul>
														</div>
														
													</div>
												</div>
											
											</form>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										
										<h4 class="panel-title cpay">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
												<div class="cr">
													<div class="circle"></div>
												</div>
												Indomaret
											</a>
										</h4>
									</div>
									<div id="collapseTwo" class="accordion-body collapse">
										<div class="panel-body">
											<form action="#" id="frmBillingAddress" method="post">
												<div class="row">
													<div class="form-group">
														<div class="col-md-5">
															<label>Pilih Kartu</label>
															<select class="form-control">
																<option value="">-- Pilih Opsi Pembayaran --</option>
															</select>
														</div>
														<div class="col-md-5">
															<label>Tipe Pembayaran</label>
															<select class="form-control">
																<option value="">Bayar Penuh</option>
															</select>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="form-group">
														<div class="col-md-12">
															<ul class="LP list-pay-atts">
																<li>Selesaikan Pembayaran dalam waktu 1 jam untuk menghindari pembatalan transaksi secara otomatis</li>
																<li>Pilih metode pembayaran ini untuk menikmati promo khusus dari Bank pilihan</li>
															</ul>
														</div>
														
													</div>
												</div>
												<div class="row">
													<div class="form-group">
														<div class="col-md-12">
															<ul class="LP list-pay">
																<li class="m-none"><img src="<?php echo base_url() ?>assets/theme/img/pay-visa.jpg" /></li>
																<li><img src="<?php echo base_url() ?>assets/theme/img/pay-mastercard.jpg" /></li>
																<li><img src="<?php echo base_url() ?>assets/theme/img/pay-paypal.jpg" /></li>
																<li><img src="<?php echo base_url() ?>assets/theme/img/pay-bca.jpg" /></li>
															</ul>
														</div>
														
													</div>
												</div>
											
											</form>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										
										<h4 class="panel-title cpay">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
												<div class="cr">
													<div class="circle"></div>
												</div>
												Pos Indonesia
											</a>
										</h4>
									</div>
									<div id="collapseTwo" class="accordion-body collapse">
										<div class="panel-body">
											<form action="#" id="frmBillingAddress" method="post">
												<div class="row">
													<div class="form-group">
														<div class="col-md-5">
															<label>Pilih Kartu</label>
															<select class="form-control">
																<option value="">-- Pilih Opsi Pembayaran --</option>
															</select>
														</div>
														<div class="col-md-5">
															<label>Tipe Pembayaran</label>
															<select class="form-control">
																<option value="">Bayar Penuh</option>
															</select>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="form-group">
														<div class="col-md-12">
															<ul class="LP list-pay-atts">
																<li>Selesaikan Pembayaran dalam waktu 1 jam untuk menghindari pembatalan transaksi secara otomatis</li>
																<li>Pilih metode pembayaran ini untuk menikmati promo khusus dari Bank pilihan</li>
															</ul>
														</div>
														
													</div>
												</div>
												<div class="row">
													<div class="form-group">
														<div class="col-md-12">
															<ul class="LP list-pay">
																<li class="m-none"><img src="<?php echo base_url() ?>assets/theme/img/pay-visa.jpg" /></li>
																<li><img src="<?php echo base_url() ?>assets/theme/img/pay-mastercard.jpg" /></li>
																<li><img src="<?php echo base_url() ?>assets/theme/img/pay-paypal.jpg" /></li>
																<li><img src="<?php echo base_url() ?>assets/theme/img/pay-bca.jpg" /></li>
															</ul>
														</div>
														
													</div>
												</div>
											
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						
					</div>
				</div>
				
			</div>
			<div class="container mt-xlg">
				<div class="col-md-12">
					<div class="payment">
						<h4><strong>VOUCHER</strong></h4>
						<div class="tp">
							<div class="panel-heading border-none">
								<div class="panel-title PMP">Masukan kode Voucher / promo ID / Kupon ID :</div>
							</div>
							<div class="panel-heading border-none">
								<form action="#" id="frmBillingAddress" method="post">
									<div class="row">
										<div class="form-group">
											<div class="col-md-5">
												<input type="text" value="" class="form-control">
											</div>
											
										</div>
									</div>
								</form>
							</div>
										
							
						</div>
						
						
					</div>
				</div>
				
			</div>
			<div class="container mt-xlg border-top">
			
					<div class="col-md-12 pay-info">
						<span>Kesulitan Pembayaran? Hubungi kami.</span><br/>
						<span>021 - 2912 7777  &nbsp&nbsp&nbsp|&nbsp&nbsp&nbsp  info@annisatravel.com</span>
					</div>
				
			</div>
		</section>
    

      </div>