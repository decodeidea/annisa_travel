<div role="main" class="main">
			<section class="page-header page-header-light page-header-reverse page-header-more-padding p-sm">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<ul class="breadcrumb breadcrumb-valign-mid">
								<li><a href="#">Account</a></li>
								<li class="active">My Account</li>
							</ul>
							
						</div>
					</div>
				</div>
			</section>
			<section class="mb-none pb-none">
				<div class="container">
					
					<div class="row">
						
						<div class="tab-content border-none">
							<div id="account" class="col-md-9 col-md-push-3 my-account form-section tab-pane">
								
								<h1 class="h2 heading-primary font-weight-normal">Profile</h1>
								
								<div class="featured-box featured-box-primary featured-box-flat featured-box-text-left mt-md">
									<div class="box-content">
									
										<form action="#">
												
											<h4 class="heading-primary text-uppercase mb-lg">ACCOUNT INFORMATION</h4>
											<div class="row">
												<div class="col-sm-4 col-md-3">
													<div class="form-group">
														<label class="font-weight-normal">First Name <span class="required">*</span></label>
														<input type="text" class="form-control" required>
													</div>
												</div>
												<div class="col-sm-4 col-md-3">
													<div class="form-group">
														<label class="font-weight-normal">Middle Name</label>
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="col-sm-4 col-md-5">
													<div class="form-group">
														<label class="font-weight-normal">Last Name <span class="required">*</span></label>
														<input type="text" class="form-control" required>
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-xs-12">
													<div class="form-group">
														<label class="font-weight-normal">Email Address <span class="required">*</span></label>
														<input type="email" class="form-control" required>
													</div>
												</div>

												<div class="col-xs-12">
													<div class="form-group">
														<label class="font-weight-normal">Current Password <span class="required">*</span></label>
														<input type="password" class="form-control" required>
													</div>
												</div>
											</div>

											<div class="checkbox mb-xs">
												<label>
													<input type="checkbox" value="1" id="change-pass-checkbox">
													Change Password
												</label>
											</div>

											<div id="account-chage-pass">
												<h4 class="heading-primary text-uppercase mb-lg">CHANGE PASSWORD</h4>
												<div class="row">
													<div class="col-sm-6">
														<div class="form-group">
															<label class="font-weight-normal">Password <span class="required">*</span></label>
															<input type="password" class="form-control" required>
														</div>
													</div>

													<div class="col-sm-6">
														<div class="form-group">
															<label class="font-weight-normal">Confirm Password <span class="required">*</span></label>
															<input type="password" class="form-control" required>
														</div>
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-xs-12">
													<p class="required mt-lg mb-none">* Required Fields</p>

													<div class="form-action clearfix mt-none">
														<a href="#" class="pull-left"><i class="fa fa-angle-double-left"></i> Back</a>

														<input type="submit" class="btn btn-primary" value="Save">
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
							<?php //print_r($cek_menu);exit(); ?>
							<div id="pesanan" class="col-md-9 col-md-push-3 my-account form-section tab-pane <?php echo isset($_GET['mn'])?"":"active"; ?>">
								<h1 class="h2 heading-primary font-weight-normal">Pesanan</h1>
								
								
								<div class="row">
									<div class="col-md-12">
										<div class="tabs">
											<ul class="nav nav-tabs nav-justified">
												<li class="active">
													<a href="#psi" data-toggle="tab" class="text-center">Pesanan Saat Ini</a>
												</li>
												<li>
													<a href="#ps" data-toggle="tab" class="text-center">Pesanan Selesai</a>
												</li>
												<li>
													<a href="#pb" data-toggle="tab" class="text-center">Pesanan Batal</a>
												</li>
											</ul>
											<div class="tab-content">
												<div id="psi" class="tab-pane active">
													<h4><strong>Detail Transaksi</strong></h4>
													<?php foreach ($data_pesanan as $key) {
														# code...
													?>
													<div class="tp">
														<table class="table-payment">
															<thead>
																<tr>
																	<th>PRODUCT</th>
																	<th>ROOM</th>
																	<th>PAX</th>
																	<th>TOTAL PEMBAYARAN</th>
																	<th>STATUS</th>
																</tr>
															</thead>
															<tbody>
																<tr class="py-tr">
																	<td><a href="" ><?php echo $key->program ?></a></td>
																	<td style="text-transform: uppercase;"><?php 
																	$qtt=0;
																	foreach ($key->product as $key2) {
																		$qtt+=$key2->qtt;
																		echo $key2->type_room.", ";
																	} ?></td>	
																	<td><?php echo $qtt ?> Orang</td>
																	<td> 
																		Rp. <?php echo idr($key->total_all_amount) ?> 
																		<a class="lr" href="">Lihat Rincian</a>
																	</td>
																	<td style="text-transform: uppercase;"><?php echo $key->doku->trxstatus ?></td>
																</tr>
															</tbody>
														</table>
													</div>
													<?php } ?>

												
												</div>
												
												<div id="ps" class="tab-pane">
													
												</div>
												<div id="pb" class="tab-pane">
													
												</div>
											</div>
										</div>
									</div>
								</div>
								
								
							</div>
							
							<div id="mywhislist" class="col-md-9 col-md-push-3 my-account form-section tab-pane <?php echo isset($_GET['mn'])?"active":"" ?>">
								<h1 class="h2 heading-primary font-weight-normal">My Whislist</h1>
								
								<div class="featured-box featured-box-primary align-left mt-sm">
									<div class="box-content">
										<?php 
										
											$get_whis = select_where($this->tbl_whislist,'id_member',$data->id)->result();
										    //print_r($get_whis);exit();
											foreach ($get_whis as $key => $value) {
													
											$get_program = select_where($this->tbl_program,'id',$value->id_program)->row();
											
											$image_program=select_where($this->tbl_program_images,'id_program',$value->id_program)->row();
											//print_r($image_program);exit();
											$date_program=select_where($this->tbl_program_day,'id_program',$value->id_program)->row();
										?>

											<div class="agent-item book">
												<div class="row">
													<div class="col-md-2">
														<img src="<?php echo base_url() ?>assets/uploads/album_program/<?php echo $image_program->id ?>/<?php echo $image_program->images ?>" class="img-responsive" alt="">
													</div>
													<div class="col-md-8">
														<h3 class="mt-xs mb-xs"><a href="<?php echo site_url() ?>/Program/detail/<?php echo $get_program->id ?>/<?php echo str_replace(" ", "-",$get_program->title) ?>"><?php echo $get_program->title ?></a></h3>
														<h6 class="mb-xs">
															<?php echo tanggal_indo(substr($date_program->day, 0,10)) ?> -
															<?php
																$now = $date_program->day; // or your date as well
																$your_date = $date_program->off_day;
																$datediff = $now - $your_date;

																if(floor($datediff / (60 * 60 * 24))==0){
																echo 1;
																}else{
																	echo floor($datediff / (60 * 60 * 24));
																}
															?>

															 Hari
														</h6>
														<p>A successful real estate broker for over 20 years, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate.</p>
														
														
													</div>
													
												</div>
											</div>

										<?php
											}
										?>
										
									
									</div>
								</div>
							</div>
							
							<div id="myexpe" class="col-md-9 col-md-push-3 my-account form-section tab-pane">
								<h1 class="h2 heading-primary font-weight-normal">Share Your Experience</h1>
								
								<div class="featured-box featured-box-primary align-left mt-sm">
									<div class="box-content">
										<form action="http://preview.oklerthemes.com/" id="frmBillingAddress" method="post">
											
											<div class="row">
												<div class="form-group">
													<div class="col-md-6">
														<label>Story Title</label>
														<input type="text" value="" class="form-control">
													</div>
													<div class="col-md-6">
														<label>Name</label>
														<input type="text" value="" class="form-control">
													</div>
												</div>
											</div>
										
											<div class="row">
												<div class="form-group">
													<div class="col-md-12">
														<label>Category</label>
														<select class="form-control">
															<option value="">Select a category</option>
														</select>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="form-group">
													<div class="col-md-12">
														<label>Destination</label>
														<select class="form-control">
															<option value="">Select a destination</option>
														</select>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="form-group">
													<div class="col-md-12">
														<label>Type Your Story </label>
														<textarea id="summernote" name="content" placeholder="Enter text ..." class="form-control" rows="10"></textarea>
													</div>
												</div>
											</div>
											<div class="row">
											<div class="form-group">
												<div class="col-md-12">
													<label>Do you have photos to share? <small>(optional)</small></label>
													<input type="file" value="" class="form-control">
												</div>
											</div>
											</div>
											<div class="row">
												<div class="col-md-12">
													<input type="submit" value="Submit Review" class="btn btn-primary pull-right mb-xl" data-loading-text="Loading...">
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
							
							<div id="listexpe" class="col-md-9 col-md-push-3 my-account form-section tab-pane">
								<h1 class="h2 heading-primary font-weight-normal">List Experience</h1>
								
								<div class="featured-box featured-box-primary align-left mt-sm">
									<div class="box-content">
										<div class="agent-item book">
											<div class="row">
												<div class="col-md-2">
													<img src="<?php echo base_url() ?>assets/theme/img/pb/pb_1.jpg" class="img-responsive" alt="">
												</div>
												<div class="col-md-10">
													<h3 class="mt-xs mb-xs"><a href="">Umroh Plus Turki 12 Hari</a></h3>
													<h6 class="mb-xs">06 Oktober 2017 - 12 Hari</h6>
													<p>A successful real estate broker for over 20 years, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate.</p>
													
													
												</div>
												
											</div>
										</div>
										<div class="agent-item book">
											<div class="row">
												<div class="col-md-2">
													<img src="<?php echo base_url() ?>assets/theme/img/pb/pb_1.jpg" class="img-responsive" alt="">
												</div>
												<div class="col-md-8">
													<h3 class="mt-xs mb-xs"><a href="">Umroh Plus Turki 12 Hari</a></h3>
													<h6 class="mb-xs">06 Oktober 2017 - 12 Hari</h6>
													<p>A successful real estate broker for over 20 years, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate.</p>
													
													
												</div>
												
											</div>
										</div>
									</div>
								</div>
							</div>
							
						</div>

						<div class="col-md-3 col-md-pull-9">
							<aside class="sidebar">

								
								<ul class="nav nav-list">
									<div class="side-profile">
										<?php if($data->login_type==1){ ?>
										<img src="<?php echo base_url() ?>assets/uploads/member/<?php echo $data->id ?>/<?php echo $this->session->userdata('photo') ?>" width="235"/>
										<?php }else{ ?>
										<img src="<?php echo $this->session->userdata('photo') ?>" width="235"/>
										<?php } ?>
										<h2><?php echo $this->session->userdata('firstname') ?></h2>
										<span><?php echo $data->address ?></span>
										<p>Member Sejak <?php echo substr(tanggal_indo($data->date_created),12,12) ?></p>
									</div>
									<li><a href="#account" data-toggle="tab">Profile</a></li>
									<li  class="active"><a href="#pesanan" data-toggle="tab">Pesanan (1)</a></li>
									<li><a href="#mywhislist" data-toggle="tab">My Whislist</a></li>
									<li><a href="#myexpe" data-toggle="tab">My Experience</a></li>
									<li><a href="#listexpe" data-toggle="tab">List Experience</a></li>
									<li><a href="#">Logout</a></li>
									
								</ul>

							</aside>
						</div>
					
					
				</div>
				</div>


			</section>
	
		

       

      </div>