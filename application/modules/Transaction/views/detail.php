

     <div class="row-fluid">
        <div class="span12">
          <div class="grid simple ">
          
            <div class="well well-large">
              <h4>
                  Nama Pemesan:
                  <span class="semi-bold"><?php echo $member->first_name ?></span>
              </h4>
              <h4>
                  No Invoice:
                  <span class="semi-bold"><?php echo $list->invoice ?></span>
              </h4>
            </div>
     
    <?php if($this->session->flashdata('notif')){ ?> 
    <div class="alert alert-<?php echo $this->session->flashdata('notif') ?>">
<button class="close" data-dismiss="alert"></button>
<?php echo $this->session->flashdata('notif') ?>:&nbsp;<?php echo $this->session->flashdata('msg') ?></div>
<?php } ?>
          <ul class="nav nav-tabs" id="tab-01">
            <li id="tab_mahasiswa" class="active"><a href="#detail">Detail Transaksi</a></li>
            <li class=""><a href="#inquiry">Detail Inquiry</a></li>
            <li class=""><a href="#confirmation">Confirmation Pesanan</a></li>
          </ul>
          <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
          <div class="tab-content">
            <div class="tab-pane active" id="detail">
              <div class="row column-seperation">
                <div class="col-md-12">
                  <table style="width: 70%">
                    <tr>
                      <td>Nama Pemesan</td>
                      <td> : </td>
                      <td><?php echo $member->first_name ?></td>
                    </tr>
                    <tr>
                      <td>Email</td>
                      <td> : </td>
                      <td><?php echo $member->email ?></td>
                    </tr>
                    <tr>
                      <td>Phone</td>
                      <td> : </td>
                      <td><?php echo $member->phone ?></td>
                    </tr>
                    <tr>
                      <td>Program</td>
                      <td> : </td>
                      <td><?php $i=1; foreach ($pay_program as $key) {
                        if($i==1){
                          echo $key->program->title;
                        }
                      $i++;
                    }  ?></td>
                    </tr>
                    <tr>
                      <td>Date</td>
                      <td> : </td>
                      <td><?php echo $day->day  ?></td>
                    </tr>
                     <tr>
                      <td>Off Date</td>
                      <td> : </td>
                      <td><?php echo $day->off_day  ?></td>
                    </tr>
                    <tr>
                      <td>Type Room</td>
                      <td> : </td>
                      <td><?php  $qtt=0 ; $i=1; foreach ($pay_program as $key) {
                        if($i==1){
                          echo $key->type_room.", ";
                        }
                         $qtt+=$key->qtt;
                      $i++;
                    }  ?></td>
                    </tr>
                    <tr>
                      <td>Quantity</td>
                      <td> : </td>
                      <td><?php echo $qtt; ?></td>
                    </tr>
                    <tr>
                      <td>Type Transaction</td>
                      <td> : </td>
                      <td><?php
                    if($list->type_transaction==15){
                      echo"Credit Card";
                    }elseif($list->type_transaction==35){
                      echo"ALFA DOKU";
                    }elseif($list->type_transaction==04){
                      echo"Doku Wallet";
                    }elseif($list->type_transaction==28){
                      echo"Permata.net";
                    }elseif($list->type_transaction==25){
                      echo"IB MUAMALAT";
                    }elseif($list->type_transaction==36){
                      echo"Permata VA";
                    }else{
                      echo "ATM Transfer ".$list->type_transaction;
                    }
                     ?></td>
                    </tr>
                    <tr>
                      <td>Total Amount</td>
                      <td> : </td>
                      <td><?php echo"RP. ".idr($list->total_amount); ?></td>
                    </tr>
                    <tr>
                      <td>PPN 10%</td>
                      <td> : </td>
                      <td><?php echo"RP. ".idr($list->total_amount_ppn); ?></td>
                    </tr>
                     <tr>
                      <td>Kode Voucher</td>
                      <td> : </td>
                      <td><?php if($voucher->num_rows()>0){ $voucher=$voucher->row(); echo $voucher->kode_voucher;} ?></td>
                    </tr>
                    <tr>
                      <td>Voucher</td>
                      <td> : </td>
                      <td><?php echo"RP. ".idr($list->voucher_amount); ?></td>
                    </tr> 
                    <tr>
                      <td>Total All amount</td>
                      <td> : </td>
                      <td><?php echo"RP. ".idr($list->total_all_amount); ?></td>
                    </tr>
                    <tr>
                      <td>Status</td>
                      <td> : </td>
                      <td><?php  
                      if($doku->trxstatus=='Success'){echo"Paid";}
                      elseif($doku->trxstatus=='Failed'){
                        echo"Rejected";
                      }else{echo"Requested";}
                       ?></td>
                    </tr>
                  </table>
                  <br>
                  <div style="border:2px solid #333843; padding: 15px; width: 70%; color: #333843; background: #eee">
                    <form method="post" enctype="multipart/form-data" action="<?php echo site_url('Transaction/change_status') ?>">
                      <input type="hidden" name="id" value="<?php echo $list->id ?>">
                    <div class="form-group">
                      <label>Change Status</label>
                      <div >
                        <select name="status" class="select2 form-control">
                          <option <?php if($doku->trxstatus=='Requested'){echo"selected";} ?> value="Requested">Requested</option>
                          <option <?php if($doku->trxstatus=='Success'){echo"selected";} ?> value="Success">Paid</option>
                          <option <?php if($doku->trxstatus=='Failed'){echo"selected";} ?>  value="Failed">Rejected</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <div class="controls">
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </div>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="inquiry">
              <div class="row">
                <div class="col-md-9">
                  <?php $no=0; foreach ($inquiry as $key) {
                  $no++;
                   ?>
                 <h4 style="border-bottom: 2px solid #eee"><b>No. <?php echo $no ?></b></h4>
                          <div class="tp">
                              <div class="row">
                                <div class="col-sm-4 col-md-6">
                                  <div class="form-group">
                                    <label class="font-weight-normal">Nama Lengkap<span class="required">*</span></label>
                                    <input type="text" value="<?php echo $key->nama ?>" readonly class="form-control" required>
                                  </div>
                                </div>
                                <div class="col-sm-4 col-md-6">
                                  <div class="form-group">
                                    <label class="font-weight-normal">Tempat/Tgl lahir<span class="required">*</span></label>
                                    <div class="row">
                                      <div class="col-md-7">
                                    <input readonly value="<?php echo $key->tempat_lahir ?>"  name="tempat_lahir[<?php echo $i ?>]" type="text" required class="form-control">
                                  </div>

                                      <div class="col-md-5">
                                    <input value="<?php echo $key->tgl_lahir ?>" name="tgl_lahir[<?php echo $i ?>]" type="text" readonly required class="form-control">
                                    </div>
                                    <div class="clearfix"></div>
                                  </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-sm-4 col-md-6">
                                  <div class="form-group">
                                    <label  class="font-weight-normal">Nama Ayah<span class="required">*</span></label>
                                    <input value="<?php echo $key->nama_ayah ?>" readonly name="nama_ayah[<?php echo $i ?>]" type="text" class="form-control" required>
                                  </div>
                                </div>
                                <div class="col-sm-4 col-md-6">
                                  <div class="form-group">
                                    <label  class="font-weight-normal">Nama Ibu</label>
                                    <input value="<?php echo $key->nama_ibu ?>" readonly name="nama_ibu[<?php echo $i ?>]" type="text" class="form-control">
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-sm-4 col-md-6">
                                  <div class="form-group">
                                    <label class="font-weight-normal">No.ID KTP<span class="required">*</span></label>
                                    <input  value="<?php echo $key->ktp ?>" readonly name="ktp[<?php echo $i ?>]" type="text" class="form-control" required>
                                  </div>
                                  <div class="form-group">
                                    <label class="font-weight-normal">Jenis Kelamin<span class="required">*</span></label>
                                    <input value="<?php echo $key->jk ?>" readonly name="jk[<?php echo $i ?>]" type="text" class="form-control" required>
                                  </div>
                                  <div class="form-group">
                                    <label  class="font-weight-normal">Nama Mahram</label>
                                    <input value="<?php echo $key->nama_mahram ?>" readonly name="nama_mahram[<?php echo $i ?>]" type="text" class="form-control">
                                  </div>

                                  <div class="form-group">
                                    <label class="font-weight-normal">Status</label>
                                     <input value="<?php echo $key->status ?>" readonly name="status[<?php echo $i ?>]" type="text" class="form-control" required>
                                  </div>
                                </div>
                                <div class="col-sm-4 col-md-6">
                                  <div class="form-group">
                                    <label class="font-weight-normal">Foto KTP</label>
                                    <img height="300px" src="<?php echo base_url() ?>assets/uploads/inquiry/<?php echo $key->id ?>/<?php echo $key->foto_ktp ?>">
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-xs-12">
                                  <div class="form-group">
                                    <label class="font-weight-normal">Alamat <span class="required">*</span></label>
                                    <textarea readonly name="alamat[<?php echo $i ?>]" required="" class="form-control"><?php echo $key->alamat ?></textarea>
                                  </div>
                                </div>
                                <div class="col-sm-4 col-md-3">
                                  <div class="form-group">
                                    <label class="font-weight-normal">RT/RW<span class="required">*</span></label>
                                    <input value="<?php echo $key->rt_rw ?>" readonly name="rt_rw[<?php echo $i ?>]" type="text" class="form-control" required>
                                  </div>
                                </div>
                                <div class="col-sm-4 col-md-3">
                                  <div class="form-group">
                                    <label  class="font-weight-normal">Kelurahan<span class="required">*</span></label>
                                    <input value="<?php echo $key->kelurahan ?>" readonly name="kelurahan[<?php echo $i ?>]" type="text" class="form-control" required>
                                  </div>
                                </div>
                                <div class="col-sm-4 col-md-3">
                                  <div class="form-group">
                                    <label class="font-weight-normal">Kecamatan<span class="required">*</span></label>
                                    <input value="<?php echo $key->kecamatan ?>" readonly name="kecamatan[<?php echo $i ?>]" type="text" class="form-control" required>
                                  </div>
                                </div>
                                <div class="col-sm-4 col-md-3">
                                  <div class="form-group">
                                    <label class="font-weight-normal">Kode Pos<span class="required">*</span></label>
                                    <input value="<?php echo $key->kode_pos ?>"  readonly  name="kode_pos[<?php echo $i ?>]" type="text" class="form-control" required>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-sm-4 col-md-6">
                                  <div class="form-group">
                                    <label class="font-weight-normal">Telepon<span class="required">*</span></label>
                                    <input value="<?php echo $key->telepon ?>" readonly name="telepon[<?php echo $i ?>]" type="text" class="form-control" required>
                                  </div>
                                </div>
                                <div class="col-sm-4 col-md-6">
                                  <div class="form-group">
                                    <label class="font-weight-normal">Email</label>
                                    <input value="<?php echo $key->email ?>" readonly name="email[<?php echo $i ?>]" type="email" class="form-control">
                                  </div>
                                </div>
                              </div>
                              <div id="account-chage-pass">
                              
                                <div class="row">
                                  <div class="col-sm-4 col-md-6">
                                    <div class="form-group">
                                      <label class="font-weight-normal">No. Paspor<span class="required">*</span></label>
                                      <input value="<?php echo $key->paspor ?>" readonly name="paspor[<?php echo $i ?>]" type="text" class="form-control" required>
                                      </div>
                                      <div class="form-group">
                                      <label class="font-weight-normal">Dikeluarkan di<span class="required">*</span></label>
                                      <input value="<?php echo $key->tempat_paspor ?>"  readonly required name="tempat_paspor[<?php echo $i ?>]" type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                      <label class="font-weight-normal">Tanggal dikeluarkan</label>
                                       <input value="<?php echo $key->tgl_paspor ?>" required readonly name="tgl_paspor[<?php echo $i ?>]" class="form-control" type="text"> 
                                    </div>
                                    <div class="form-group">
                                      <label class="font-weight-normal">Tanggal berlaku</label>
                                      <input value="<?php echo $key->tgl_berlaku_paspor ?>" type="text"  name="tgl_berlaku_paspor[<?php echo $i ?>]" class="form-control" readonly>
                                    </div>
                                  </div>
                                  <div class="col-sm-4 col-md-6">
                                    <div class="form-group">
                                      <label class="font-weight-normal">Foto Paspor</label>
                                       <img height="300px" src="<?php echo base_url() ?>assets/uploads/inquiry/<?php echo $key->id ?>/<?php echo $key->foto_ktp ?>">
                                    </div>
                                  </div>
                                
                                </div>
                              </div>
                              <div id="account-chage-pass">
                              
                                <div class="row">
                                  
                                  <div class="col-sm-4 col-md-3">
                                    <div class="form-group">
                                      <label class="font-weight-normal">Merokok</label>
                                      <input value="<?php if($key->merokok==0){echo'Tidak';}else{echo'Iya';} ?>" type="text"  name="tgl_berlaku_paspor[<?php echo $i ?>]" class="form-control" readonly>
                                    </div>
                                  </div>
                                
                                
                                  <div class="col-sm-4 col-md-4">
                                    <div class="form-group">
                                      <label   class="font-weight-normal">Memiliki Penyakit Khusus<span class="required">*</span></label>
                                      <input type="text" value="<?php if($key->penyakit==0){echo'Tidak';}else{echo'Iya';} ?>"  name="tgl_berlaku_paspor[<?php echo $i ?>]" class="form-control" readonly>
                                      
                                    </div>
                                  </div>
                                  
                                  <div class="col-sm-4 col-md-4">
                                    <div class="form-group">
                                      <label class="font-weight-normal">Nama Penyakit khusus</label>
                                      <input readonly  name="nama_penyakit[<?php echo $i ?>]" type="text" placeholder="-- sebutkan --" value="<?php echo $key->nama_penyakit ?>" class="form-control">
                                    </div>
                                  </div>
                                
                                </div>
                                <div class="row">
                                  
                                  <div class="col-sm-4 col-md-4">
                                    <div class="form-group">
                                      <label class="font-weight-normal">Kursi Roda</label>
                                      <input type="text"  value="<?php if($key->kursi_roda==0){echo'Tidak';}else{echo'Iya';} ?>" name="tgl_berlaku_paspor[<?php echo $i ?>]" class="form-control" readonly>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              
                          </div>
                          <br>
                          <?php } ?>
                </div>
              </div>
            </div>

            <div class="tab-pane" id="confirmation">
              <div class="row">
                <div class="col-md-12">
                  <table width="70%"class="table">
                     <thead>
                    <tr>
                      <td>No.</td>
                      <td>Nama Pengirim</td>
                      <td>Metode Pembayaran</td>
                      <td>Notes</td>
                      <td>Date Created</td>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no=0;
                     foreach ($confirmation as $key) {
                      $no++;
                     ?>
                    <tr>
                      <td><?php echo $no; ?></td>
                      <td><?php echo $key->nama_pengirim ?></td>
                      <td><?php echo $key->metode_pembayaran ?></td>
                      <td><?php echo $key->notes ?></td>
                      <td><?php echo $key->date_created ?></td>
                    </tr>
                    <?php } ?>
                  </tbody>
                  </table>
                </div>
              </div>
            </div>

          </div>
          </div>
        </div>
      </div>
<script src="<?php echo base_url() ?>assets/js/tabs_accordian.js" type="text/javascript"></script>