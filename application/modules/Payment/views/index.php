
      <div role="main" class="main">
	  <?php if($data->num_rows()>0){ ?>
	  <form action="#" method="post">
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
										<th>Program</th>
										<th>ROOM</th>
										<th>HARGA</th>
										<th>PAX</th>
										<th>TOTAL</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$total_price=0;
									foreach ($data->result() as $key) {
									 $total_price+=$key->price*$key->qtt;
									?>
									<tr class="py-tr">
										<td><?php echo $key->program->title ?></td>
										<td style="text-transform: uppercase;"><?php echo $key->type_room ?></td>
										<td>Rp. <?php echo idr($key->price) ?>.-</td>
										<td><?php echo $key->qtt ?> Orang</td>
										<td>Rp. <?php echo idr($key->price*$key->qtt) ?></td>
									</tr>
									<?php }
									$ppn=$total_price/100*10;
									?>

									<tr class="py-col">
										<td colspan="3"></td>
										<td class="ppn">Ppn 10%</td>
										<td><?php echo idr($ppn) ?></td>
									</tr>
									<tr class="py-col">
										<td colspan="3"></td>
										<td class="tot">Total Pembayaran</td>
										<td class="tot"><?php echo idr($ppn+$total_price); ?></td>
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
						<h4><strong>PEMBAYRAN</strong></h4>
						<div class="tp2">
							<div class="panel-heading">
								<div class="panel-title PMP">Pilih Metode Pembayaran</div>
							</div>
							<div class="panel-group" id="accordion">
								<div class="panel panel-default">
									<div class="panel-heading">
										
										<div class="panel-heading">
										
										<h4 class="panel-title cpay">
												<div class="cr">
													<input type="radio" name="pembayaran" required value="doku_walet"> Doku Wallet
												</div>
										</h4>
									</div>
									<div class="panel-heading">
										<h4 class="panel-title cpay">
												<div class="cr">
													<input type="radio" name="pembayaran" required="" value="Kartu_kredit"> Kartu Kredit
												</div>
										</h4>
									</div>
									<div class="panel-heading">
										<h4 class="panel-title cpay">
												<div class="cr">
													<input type="radio" name="pembayaran" required="" value="alfamart"> Alfamart Group
												</div>
										</h4>
									</div>
									<div class="panel-heading">
										<h4 class="panel-title cpay">
												<div class="cr">
													<input type="radio" name="pembayaran" required="" value="permata"> PermataNET
												</div>
										</h4>
									</div>
									<div class="panel-heading">
										<h4 class="panel-title cpay">
												<div class="cr">
													<input type="radio" name="pembayaran" required="" value="muamalat"> Internet Banking Muamalat
												</div>
										</h4>
									</div>
									<div class="panel-heading">
										<h4 class="panel-title cpay">
												<div class="cr">
													<input type="radio" name="pembayaran" required="" value="danamon"> Danamon online banking
												</div>
										</h4>
									</div>
									<div class="panel-heading">
										<h4 class="panel-title cpay">
												<div class="cr">
													<input type="radio" name="pembayaran" required="" value="va"> Virtual Permata & Virtual Mandiri
												</div>
										</h4>
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
    </form>
<?php }else{ ?>
<br><br><br><br>
<div class="alert alert-warning col-md-7 center">Silahkan pesan program terlebih dahulu</div>
<br><br>
<?php } ?>
      </div>