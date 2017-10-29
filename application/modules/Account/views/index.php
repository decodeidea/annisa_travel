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
							<div id="account" class="col-md-9 col-md-push-3 my-account form-section tab-pane <?php echo (isset($_GET['mn']) && $_GET['mn'] == 'profile')?"active":"" ?>">
								
								<h1 class="h2 heading-primary font-weight-normal">Profile</h1>
								<?php 
									if(isset($_GET['mn']) && $_GET['mn'] == 'profile'){

									
										if($this->session->flashdata('msg')){
								?>
											<div class="alert alert-danger text-center text-login" style="height: auto;">
					                        	<?php echo $this->session->flashdata('msg') ?>
					                        </div>
								<?php
										}
									}
								?>
								<div class="featured-box featured-box-primary featured-box-flat featured-box-text-left mt-md">
									<div class="box-content">
									
										<form action="<?php echo site_url('Account/change_profile') ?>" id="frmBillingAddress" method="POST" enctype="multipart/form-data">
											<input type="hidden" name="id" value="<?php echo $data->id ?>">
											<?php
												$name_m = explode(' ',$data->first_name);
												//print_r($name_m);exit();
											?>
											<h4 class="heading-primary text-uppercase mb-lg">ACCOUNT INFORMATION</h4>
											<div class="row">
												<div class="col-sm-4 col-md-6">
													<div class="form-group">
														<label class="font-weight-normal">First Name <span class="required">*</span></label>
														<input type="text" name="first_name" value="<?php echo isset($name_m[0])?$name_m[0]:"" ?>" class="form-control" required>
													</div>
												</div>
											
												<div class="col-sm-4 col-md-6">
													<div class="form-group">
														<label class="font-weight-normal">Last Name <span class="required">*</span></label>
														<input type="text" name="last_name" value="<?php echo isset($name_m[1])?$name_m[1]:"" ?>" class="form-control" required>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-4 col-md-6">
													<div class="form-group">
														<label class="font-weight-normal">Email Address <span class="required">*</span></label>
														<input type="email" name="email" value="<?php echo isset($data->email)?$data->email:"" ?>" class="form-control" required>
													</div>
												</div>
											
												<div class="col-sm-4 col-md-6">
													<div class="form-group">
														<label class="font-weight-normal">Phone Number <span class="required">*</span></label>
														<input type="text" name="phone" value="<?php echo isset($data->phone)?$data->phone:"" ?>" class="form-control" required>
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-xs-12">
													<div class="form-group">
														<label class="font-weight-normal">Alamat <span class="required">*</span></label>
														<textarea class="form-control" name="address"><?php echo isset($data->address)?$data->address:"" ?></textarea>
													</div>
												</div>

												
											</div>
											<div class="row">
											<div class="form-group">
												<div class="col-md-12">
													<label>Do you have photos to share? <small>(optional)</small></label>
													<input type="file" name="profile_pict" id="profile_pict" value="<?php echo isset($data->profile_pict)?$data->profile_pict:"" ?>" class="form-control">
												</div>
											</div>
											</div>

											

											<div class="row">
												<div class="col-xs-12">
													<p class="required mt-lg mb-none">* Required Fields</p>

													<div class="form-action clearfix mt-none">
														<a href="#" class="pull-left"><i class="fa fa-angle-double-left"></i> Back</a>

														<input type="submit" name="submit" class="btn btn-primary" value="Save">
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>

							<div id="cp" class="col-md-9 col-md-push-3 my-account form-section tab-pane <?php echo (isset($_GET['mn']) && $_GET['mn'] == 'change_password')?"active":"" ?>">
								
								<h1 class="h2 heading-primary font-weight-normal">Change Password</h1>
								<?php 
									if(isset($_GET['mn']) && $_GET['mn'] == 'change_password'){

									
										if($this->session->flashdata('msg')){
								?>
											<div class="alert alert-danger text-center text-login" style="height: auto;">
					                        	<?php echo $this->session->flashdata('msg') ?>
					                        </div>
								<?php
										}
									}
								?>
								<div class="featured-box featured-box-primary featured-box-flat featured-box-text-left mt-md">
									<div class="box-content">
									
										<form action="<?php echo site_url('Account/change_password') ?>" id="frmBillingAddress" method="POST" enctype="multipart/form-data">
											<input type="hidden" name="id" value="<?php echo $data->id ?>">
											
											<h4 class="heading-primary text-uppercase mb-lg">Manage your security setting</h4>
											
											<div class="row">
												<div class="col-sm-4 col-md-6">
													<div class="form-group">
														<label class="font-weight-normal">Enter your new password <span class="required">*</span></label>
														<input type="password" name="password1" value="" class="form-control" required>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-4 col-md-6">
													<div class="form-group">
														<label class="font-weight-normal">Confirm new password <span class="required">*</span></label>
														<input type="password" name="password2" value="" class="form-control" required>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-xs-12">
													<p class="required mt-lg mb-none">* Required Fields</p>

													<div class="form-action clearfix mt-none">
														<a href="#" class="pull-left"><i class="fa fa-angle-double-left"></i> Back</a>

														<input type="submit" name="submit" class="btn btn-primary" value="Save">
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
													<br>
													<?php foreach ($data_pesanan as $key) {
														# code...
													?>
													<div class="tp">
														<table class="table-payment">
															<thead>
																<tr>
																	<th>PROGRAM</th>
																	<th>ROOM</th>
																	<th>PAX</th>
																	<th>TOTAL PEMBAYARAN</th>
																	<th>STATUS</th>
																</tr>
															</thead>
															<tbody>
																<tr class="py-tr">
																	<td>
																		<?php $no=1;
																	foreach ($key->product as $product) {
																	 if($no==1){?>
																	<a href="#" ><?php
																		echo $product->title;
																		$no++;
																	
																	?></a><?php }} ?></td>
																	<td style="text-transform: uppercase;"><?php
																	foreach ($key->product as $product) {
																		echo $product->type_room.", ";
																	}
																	?></td>	
																	<td><?php $qtt=0;foreach ($key->product as $product) {
																		$qtt+=$product->qtt; 

																	} echo $qtt; ?> Orang</td>
																	<td> 
																		Rp. <?php echo idr($key->total_all_amount) ?> 
																		<a class="lr" href="<?php echo site_url('Payment/finish/'.$key->invoice) ?>">Lihat Rincian</a>
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
							
							<div id="mywhislist" class="col-md-9 col-md-push-3 my-account form-section tab-pane <?php echo (isset($_GET['mn']) && $_GET['mn'] == 'mywhislist')?"active":"" ?>">
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
														<p><?php echo substr($get_program->itenary, 0, 200) ?>...</p>
														
														
													</div>
													
												</div>
											</div>

										<?php
											}
										?>
										
									
									</div>
								</div>
							</div>
							
							<div id="myexpe" class="col-md-9 col-md-push-3 my-account form-section tab-pane <?php echo (isset($_GET['mn']) && $_GET['mn'] == 'experience')?"active":"" ?>">
								<h1 class="h2 heading-primary font-weight-normal">Share Your Experience</h1>
											<?php 
									if(isset($_GET['mn']) && $_GET['mn'] == 'experience'){

									
										if($this->session->flashdata('msg')){
								?>
											<div class="alert alert-danger text-center text-login" style="height: auto;">
					                        	<?php echo $this->session->flashdata('msg') ?>
					                        </div>
								<?php
										}
									}
								?>
								
								
								<div class="featured-box featured-box-primary align-left mt-sm">
									<div class="box-content">
										<form action="<?php echo site_url('Account/experience') ?>" id="frmBillingAddress" method="POST" enctype="multipart/form-data">
											<input type="hidden" name="id_member" value="<?php echo $data->id ?>">
											<div class="row">
												<div class="form-group">
													<div class="col-md-6">
														<label>Story Title</label>
														<input type="text" name="title" id="title" value="" class="form-control">
													</div>
													<div class="col-md-6">
														<label>Name</label>
														<input type="text" name="name" id="name" value="<?php echo isset($data->first_name)?$data->first_name:"" ?>" class="form-control">
													</div>
												</div>
											</div>
										
											<div class="row">
												<div class="form-group">
													<div class="col-md-12">
														<label>Program</label>
														<select class="form-control" name="id_program" id="id_program">
															<option value="">Select a program</option>
															<?php 
																$expe_program = select_where_group($this->tbl_payment_product,$this->tbl_payment,'id_member',$data->id,'id_program')->result();
																
																//print_r($expe_program);exit();
																foreach ($expe_program as $key => $value) {
																	$get_program = select_where($this->tbl_program,'id',$value->id_program)->row();
																	# code...
															?>
																<option value="<?php echo $value->id_program ?>"><?php echo $get_program->title ?></option>
															<?php
																}
															?>
															
														</select>
													</div>
												</div>
											</div>
											
											<div class="row">
												<div class="form-group">
													<div class="col-md-12">
														<label>Type Your Story </label>
														<textarea id="summernote" name="your_story" id="your_story" placeholder="Enter text ..." class="form-control" rows="10"></textarea>
													</div>
												</div>
											</div>
											<div class="row">
											<div class="form-group">
												<div class="col-md-12">
													<label>Do you have photos to share? <small>(optional)</small></label>
													<input type="file" name="images" id="images" value="" class="form-control">
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
										<?php
											$get_listexpe = select_where($this->tbl_experience,'id_member',$data->id)->result();
										    //print_r($get_whis);exit();
											foreach ($get_listexpe as $key => $value) {
												$get_program = select_where($this->tbl_program,'id',$value->id_program)->row();
												
												$image_program=select_where($this->tbl_program_images,'id_program',$value->id_program)->row();
												//print_r($image_program);exit();
												$date_program=select_where($this->tbl_program_day,'id_program',$value->id_program)->row();
										?>
												<div class="agent-item book">
													<div class="row">
														<div class="col-md-2">
															<img src="<?php echo base_url() ?>assets/uploads/experience/<?php echo $value->id ?>/<?php echo $value->images ?>" class="img-responsive" alt="">
														</div>
														<div class="col-md-8">
															<h3 class="mt-xs mb-xs"><?php echo $value->title ?> - ( <a href="<?php echo site_url() ?>/Program/detail/<?php echo $get_program->id ?>/<?php echo str_replace(" ", "-",$get_program->title) ?>"><?php echo $get_program->title ?></a> )</h3>
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
															<p><?php echo $value->your_story ?>.</p>
															
															
														</div>
														
													</div>
												</div>
										<?php
											}
										?>
										
									</div>
								</div>
							</div>
							
						</div>

						<div class="col-md-3 col-md-pull-9">
							<aside class="sidebar">

								
								<ul class="nav nav-list">
									<div class="side-profile">
										<?php if($data->login_type==1){ ?>
										<img src="<?php echo base_url() ?>assets/uploads/profile/<?php echo $data->id ?>/<?php echo $this->session->userdata('photo') ?>" width="235"/>
										<?php }else{ ?>
										<img src="<?php echo $this->session->userdata('photo') ?>" width="235"/>
										<?php } ?>
										<h2><?php echo $this->session->userdata('firstname') ?></h2>
										<span><?php echo $data->address ?></span>
										<p>Member Sejak <?php echo substr(tanggal_indo($data->date_created),12,12) ?></p>
									</div>
									<li><a href="#account" data-toggle="tab">Profile</a></li>
									<li  class="active"><a href="#pesanan" data-toggle="tab">Pesanan</a></li>
									<li><a href="#mywhislist" data-toggle="tab">My Whislist</a></li>
									<li><a href="#myexpe" data-toggle="tab">My Experience</a></li>
									<li><a href="#listexpe" data-toggle="tab">List Experience</a></li>
									<li><a href="#cp" data-toggle="tab">Change Password</a></li>
									<li><a href="<?php echo site_url('Account/logout') ?>">Logout</a></li>


									
								</ul>

							</aside>
						</div>
					
					
				</div>
				</div>


			</section>
	
		

       

      </div>