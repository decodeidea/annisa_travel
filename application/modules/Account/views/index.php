<div role="main" class="main">
			<section class="page-header page-header-light page-header-reverse page-header-more-padding p-sm">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<ul class="breadcrumb breadcrumb-valign-mid">
								<li><a href="#">Umroh & Haji</a></li>
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
																	<td><a href="" >Umroh Series Reguler 9 Hari</a></td>
																	<td>Quad</td>	
																	<td>3 Orang</td>
																	<td> 
																		Rp. 70.950.000 
																		<a class="lr" href="">Lihat Rincian</a>
																	</td>
																	<td>PAID</td>
																</tr>
																
															</tbody>
														</table>
														
														
													</div>
													<div class="col-md-12">
														<hr/>
													</div>
													<h4><strong>Isi Data</strong></h4>
													<div class="tp">
														<form action="#">
															<div class="row">
																<div class="col-sm-4 col-md-6">
																	<div class="form-group">
																		<label class="font-weight-normal">Nama Lengkap<span class="required">*</span></label>
																		<input type="text" class="form-control" required>
																	</div>
																</div>
																<div class="col-sm-4 col-md-6">
																	<div class="form-group">
																		<label class="font-weight-normal">Tempat/Tgl Lahir</label>
																		<input type="text" class="form-control">
																	</div>
																</div>
															
															</div>
															<div class="row">
																<div class="col-sm-4 col-md-6">
																	<div class="form-group">
																		<label class="font-weight-normal">Nama Ayah<span class="required">*</span></label>
																		<input type="text" class="form-control" required>
																	</div>
																</div>
																<div class="col-sm-4 col-md-6">
																	<div class="form-group">
																		<label class="font-weight-normal">Nama Ibu</label>
																		<input type="text" class="form-control">
																	</div>
																</div>
															
															</div>
															<div class="row">
																<div class="col-sm-4 col-md-6">
																	<div class="form-group">
																		<label class="font-weight-normal">No.ID KTP<span class="required">*</span></label>
																		<input type="text" class="form-control" required>
																	</div>
																</div>
																<div class="col-sm-4 col-md-6">
																	<div class="form-group">
																		<label class="font-weight-normal">Upload KTP</label>
																		<input type="file" class="form-control">
																	</div>
																</div>
															
															</div>

															<div class="row">
																<div class="col-sm-4 col-md-2">
																	<div class="form-group">
																		<label class="font-weight-normal">Jenis Kelamin<span class="required">*</span></label>
																		<select class="form-control">
																			<option value=""></option>
																		</select>
																	</div>
																</div>
																<div class="col-sm-4 col-md-5">
																	<div class="form-group">
																		<label class="font-weight-normal">Nama Mahram</label>
																		<input type="input" class="form-control">
																	</div>
																</div>
																<div class="col-sm-4 col-md-5">
																	<div class="form-group">
																		<label class="font-weight-normal">Status</label>
																		<input type="input" class="form-control">
																	</div>
																</div>
															
															</div>

															<div class="row">
																<div class="col-xs-12">
																	<div class="form-group">
																		<label class="font-weight-normal">Alamat <span class="required">*</span></label>
																		<input type="input" class="form-control" required>
																	</div>
																</div>
																<div class="col-sm-4 col-md-2">
																	<div class="form-group">
																		<label class="font-weight-normal">RT/RW<span class="required">*</span></label>
																		<input type="input" class="form-control" required>
																	</div>
																</div>
																<div class="col-sm-4 col-md-2">
																	<div class="form-group">
																		<label class="font-weight-normal">Kelurahan<span class="required">*</span></label>
																		<input type="input" class="form-control" required>
																	</div>
																</div>
																<div class="col-sm-4 col-md-2">
																	<div class="form-group">
																		<label class="font-weight-normal">Kecamatan<span class="required">*</span></label>
																		<input type="input" class="form-control" required>
																	</div>
																</div>
																<div class="col-sm-4 col-md-2">
																	<div class="form-group">
																		<label class="font-weight-normal">Kode Pos<span class="required">*</span></label>
																		<input type="input" class="form-control" required>
																	</div>
																</div>
															</div>
															<div class="row">
																<div class="col-sm-4 col-md-6">
																	<div class="form-group">
																		<label class="font-weight-normal">Telepon<span class="required">*</span></label>
																		<input type="text" class="form-control" required>
																	</div>
																</div>
																<div class="col-sm-4 col-md-6">
																	<div class="form-group">
																		<label class="font-weight-normal">Email</label>
																		<input type="email" class="form-control">
																	</div>
																</div>
															
															</div>

															<div class="checkbox mb-xs" style="border: 1px solid #CCC;">
																
															</div>

															<div id="account-chage-pass">
															
																<div class="row">
																	<div class="col-sm-4 col-md-6">
																		<div class="form-group">
																			<label class="font-weight-normal">No. Paspor<span class="required">*</span></label>
																			<input type="text" class="form-control" required>
																		</div>
																	</div>
																	<div class="col-sm-4 col-md-6">
																		<div class="form-group">
																			<label class="font-weight-normal">Upload Paspor</label>
																			<input type="file" class="form-control">
																		</div>
																	</div>
																
																</div>
																<div class="row">
																	<div class="col-sm-4 col-md-4">
																		<div class="form-group">
																			<label class="font-weight-normal">Dikeluarkan di<span class="required">*</span></label>
																			<select class="form-control">
																				<option value=""></option>
																			</select>
																		</div>
																	</div>
																	<div class="col-sm-4 col-md-4">
																		<div class="form-group">
																			<label class="font-weight-normal">Tanggal dikeluarkan</label>
																			<input type="input" class="form-control">
																		</div>
																	</div>
																	<div class="col-sm-4 col-md-4">
																		<div class="form-group">
																			<label class="font-weight-normal">Tanggal berlaku</label>
																			<input type="input" class="form-control">
																		</div>
																	</div>
																
																</div>
															</div>
															
															<div class="checkbox mb-xs" style="border: 1px solid #CCC;">
																
															</div>
															<div id="account-chage-pass">
															
																<div class="row">
																	
																	<div class="col-sm-4 col-md-3">
																		<div class="form-group">
																			<label class="font-weight-normal">Merokok</label>
																			<select class="form-control">
																				<option value=""></option>
																			</select>
																		</div>
																	</div>
																
																
																	<div class="col-sm-4 col-md-4">
																		<div class="form-group">
																			<label class="font-weight-normal">Memiliki Penyakit Khusus<span class="required">*</span></label>
																			<select class="form-control">
																				<option value=""></option>
																			</select>
																			
																		</div>
																	</div>
																	
																	<div class="col-sm-4 col-md-4">
																		<div class="form-group">
																			<label class="font-weight-normal"></label>
																			<input type="input" value="-- sebutkan --" class="form-control">
																		</div>
																	</div>
																
																</div>
																<div class="row">
																	
																	<div class="col-sm-4 col-md-4">
																		<div class="form-group">
																			<label class="font-weight-normal">Kursi Roda</label>
																			<select class="form-control">
																				<option value=""></option>
																			</select>
																		</div>
																	</div>
																</div>
															</div>

															<div class="row">
															<div class="col-xs-12">
															

																<div class="form-action clearfix mt-none">
																	<a href="" class="pull-left"><i class="fa fa-angle-double-left"></i> Back</a>

																	<input type="submit" class="btn btn-primary" value="Tambah Data">
																</div>
															</div>
															</div>
														</form>
													</div>
													<div class="checkbox mb-xs">
														<label>
															<input type="checkbox" value="1" id="change-pass-checkbox">
															Saya setuju mendaftar Umrah dengan Annisa Travel sesuai dengan syarat dan kondisi yang berlaku
															</br>
															<a href="">Terms & Condition</a>
														</label>
														<div class="row text-center">
															<input type="submit" class="btn btn-primary" value="SUBMIT">
														</div>
													</div>
												
												</div>
												
												<div id="ps" class="tab-pane">
													<p>Recent</p>
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.</p>
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
								<?php //print_r($data);exit(); ?>
								<div class="alert alert-danger text-center text-login" style="height: auto;">
		                        	<?php echo $this->session->flashdata('msg') ?>
		                        </div>
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
									<li><a href="<?php echo site_url('Account/logout') ?>">Logout</a></li>
									
								</ul>

							</aside>
						</div>
					
					
				</div>
				</div>


			</section>
	
		

       

      </div>