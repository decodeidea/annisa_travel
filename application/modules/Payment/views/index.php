
      <div role="main" class="main">
	  <?php if($data->num_rows()>0){ ?>
	  <form action="<?php echo site_url('Payment/submit_payment') ?>" method="post" enctype="multipart/form-data">
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
		<?php if($this->session->flashdata('msg')){ ?>
		<div class="col-md-8 alert alert-danger center">Maaf, silahkan pilih salah satu metode pembayaran untuk bisa melanjutkan proses.</div>
		<?php } ?>
		<section class="section section-no-border background-color-light p-none">
			<div class="container">
				<div class="col-md-12">
					<div class="payment">
						<h4><strong>RINGKASAN PEMESANAN</strong></h4>
						<div class="tp">
							<table class="table-payment">
								<thead>
									<tr>
										<th>Program</th>
										<th>Tanggal</th>
										<th>ROOM</th>
										<th>HARGA</th>
										<th>PAX</th>
										<th>TOTAL</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$total_price=0;
									$no=0;
									foreach ($data->result() as $key) {
										$no++;
									 $total_price+=$key->price*$key->qtt;
									?>

									<input type="hidden" name="id_program<?php echo $no ?>" value="<?php echo $key->program->id ?>">
									<input type="hidden" name="type_room<?php echo $no ?>" value="<?php echo $key->type_room ?>">
									<input type="hidden" name="qtt<?php echo $no ?>" value="<?php echo $key->qtt ?>">
									<input type="hidden" name="total_amountp<?php echo $no ?>" value="<?php echo $key->price*$key->qtt?>">
									<tr class="py-tr">
										<td><?php echo $key->program->title ?></td>
										<td><?php echo $key->program_day->day ?></td>
										<td style="text-transform: uppercase;"><?php echo $key->type_room ?></td>
										<td>Rp. <?php echo idr($key->price) ?>.-</td>
										<td><?php echo $key->qtt ?> Orang</td>
										<td>Rp. <?php echo idr($key->price*$key->qtt) ?></td>
										
									</tr>
									<?php }
									$ppn=$total_price/100*10;
									?>

									<input type="hidden" name="no" value="<?php echo $no ?>">
									<tr class="py-col">
										<td colspan="4"></td>
										<td class="ppn">Ppn 10%</td>
										<td><?php echo idr($ppn) ?> <input type="hidden" name="ppn" value="<?php echo $ppn ?>"><input type="hidden" name="day_program" value="<?php echo $key->program_day->id ?>"></td>
									</tr>
									<tr class="py-col">
										<td colspan="4"></td>
										<td class="tot">Total Pembayaran</td>
										<td class="tot"> <input type="hidden" name="total_amount" value="<?php echo $total_price ?>"><?php echo idr($ppn+$total_price); ?></td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="button-bayar pull-right">
							<button class="btn btn-payment mt-xl mb-sm" type="submit">BAYAR SEKARANG</button>
						</div>
						
					</div>
				</div>
				
			</div>
			<div class="container">
				<div class="col-md-12">
					<div class="payment">
						<h4><strong>PEMBAYARAN</strong></h4>
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
								</div>
								<div id="collapseOne" class="accordion-body collapse">
										<div class="panel-body">
											<div class="row">
													<div class="form-group">
														<div class="col-md-5">
															<label>Pilih Kartu</label>
															<select name="kartu_kredit" class="form-control">
																<option value="">-- Pilih Opsi Pembayaran --</option>
																<option value="15">Semua Kartu</option>
															</select>
														</div>
														<div class="col-md-5">
															<label>Tipe Pembayaran</label>
															<select class="form-control">
																<option value="1">Bayar Penuh</option>
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
										</div>
									</div>
							</div>

							<div class="panel-group" id="accordion">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title cpay">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne2">
												<div class="cr">
													<div class="circle"></div>
												</div>
												Internet Banking
											</a>
										</h4>
									</div>
								</div>
								<div id="collapseOne2" class="accordion-body collapse">
										<div class="panel-body">
											<div class="row">
													<div class="form-group">
														<div class="col-md-5">
															<label>Pilih Kartu</label>
															<select name="internet_banking" class="form-control">
																<option value="">-- Pilih Opsi Pembayaran --</option>
																<option value="25">Bank Muamalat</option>
																<option value="28">Bank Permata</option>
																<option value="28">Bank Danamon</option>
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
										</div>
									</div>
							</div>
							<div class="panel-group" id="accordion">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title cpay">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne3">
												<div class="cr">
													<div class="circle"></div>
												</div>
												Alfamart Group
											</a>
										</h4>
									</div>
								</div>
								<div id="collapseOne3" class="accordion-body collapse">
										<div class="panel-body">
											<div class="row">
													<div class="form-group">
														<div class="col-md-5">
															<label>Pilih Kartu</label>
															<select name="alfamart" class="form-control">
																<option value="">-- Pilih Opsi Pembayaran --</option>
																<option value="35">Alfamart Group</option>
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
										</div>
									</div>
							</div>
							<div class="panel-group" id="accordion">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title cpay">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne4">
												<div class="cr">
													<div class="circle"></div>
												</div>
												ATM Transfer
											</a>
										</h4>
									</div>
								</div>
								<div id="collapseOne4" class="accordion-body collapse">
										<div class="panel-body">
											<div class="row">
													<div class="form-group">
														<div class="col-md-5">
															<label>Pilih Kartu</label>
															<select name="atm_transfer" class="form-control">
																<option value="">-- Pilih Opsi Pembayaran --</option>
																<option value="BNI">BNI</option>
																<option value="BCA">BCA</option>
																<option value="MANDIRI">MANDIRI</option>
																<option value="BRI">BRI</option>
															</select>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="form-group">
														<div class="col-md-12">
															<ul class="LP list-pay-atts">
																<li>Selesaikan Pembayaran dalam waktu 1x24 jam untuk menghindari pembatalan transaksi secara otomatis</li>
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
										</div>
									</div>
							</div>
						</div>
				</div>
				
			</div>
		</div>
		<br>
			<div class="container">
				<div class="col-md-12">
					<div class="payment">
						<h4><strong>VOUCHER</strong></h4>
						<div class="tp">
							<div class="panel-heading border-none">
								<div class="panel-title PMP">Masukan kode Voucher / promo ID / Kupon ID :</div>
							</div>
							<div class="panel-heading border-none">
									<div class="row">
										<div class="form-group">
											<div class="col-md-5">
												<input type="text" value="" name="voucher" class="form-control">
											</div>
											
										</div>
									</div>
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
    </form>
<?php }else{ ?>
<br><br><br><br>
<div class="alert alert-danger col-md-7 center" style="float: none; margin: 0 auto; position: relative; padding: 100px"><h4>Silahkan pesan program terlebih dahulu.</h4></div>
<br><br>
<?php } ?>
      </div>