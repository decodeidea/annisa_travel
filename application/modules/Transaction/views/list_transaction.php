     
    <?php if($this->session->flashdata('notif')){ ?> 
    <div class="alert alert-<?php echo $this->session->flashdata('notif') ?>">
<button class="close" data-dismiss="alert"></button>
<?php echo $this->session->flashdata('notif') ?>:&nbsp;<?php echo $this->session->flashdata('msg') ?></div>
<?php } ?>

     <div class="row-fluid">
        <div class="span12">
          <div class="grid simple ">
            <div class="grid-title">
              <h4><span class="semi-bold"><?php echo $method ?></span></h4>
              <input type="hidden" name="base_url" value="<?php echo base_url() ?>" id="base_url">
              <input type="hidden" name="controller" id="controller" value="<?php echo $controller ?>">
              <input type="hidden" name="method" value="<?php echo $function ?>" id="method">
              <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="javascript:;" class="reload"></a> </div>
            </div>
            <div class="grid-body ">
              <table class="table" id="list_data2" >
                <thead>
                  <tr>
                  <th>No</th>
                    <th>Name Program</th>
                    <th>Nama Pemesan</th>
                    <!-- 
                    <th>Type Room</th>
                    <th>Quantity</th>  
                    <th>Voucher</th>
                    <th>Type Transaction</th>
                    <th>Total Amount</th> -->
                    <th>Kelengkapan</th>
                    <th>Status</th>
                    <th>Date Created</th>
                    <th>Detail</th>
                  </tr>
                </thead>
                <tbody>
               <?php
                $no=0;
                foreach ($list as $data) {
                $no++;
                ?>
                  <tr >
                    <td><?php echo $no ?></td>
                    <td><?php echo $data->program ?></td>
                    <td><?php echo $data->member->first_name ?></td>
                   <!--  <td><?php 
                                  $qtt=0;
                                  foreach ($data->product as $key2) {
                                    $qtt+=$key2->qtt;
                                    echo $key2->type_room.", ";
                                  } ?></td>
                    <td><?php echo $qtt ?> Orang</td>
                    <td><?php echo $data->voucher_amount ?></td>
                    <td><?php
                    if($data->type_transaction==15){
                      echo"Credit Card";
                    }elseif(35){
                      echo"ALFA DOKU";
                    }elseif(04){
                      echo"Doku Wallet";
                    }elseif(28){
                      echo"Permata.net";
                    }elseif(25){
                      echo"IB MUAMALAT";
                    }elseif(36){
                      echo"Permata VA";
                    }else{
                      echo "Mandiri VA";
                    }
                     ?></td>
                    <td><?php echo idr($data->total_all_amount) ?></td> -->
                    <td><?php if($data->inquiry==0){echo"Belum Melengkapi";}else{ echo"Sudah Melengkapi";} ?></td>
                    <td><?php echo $data->doku->trxstatus ?></td>
                    <td><?php echo $data->date_created ?></td>
                    <td> <a href="<?php echo site_url()."/".$controller."/".$function."_detail/"."".$data->id; ?>" ><button   data-toggle="tooltip" data-original-title="Detail" class="btn btn-info btn-xs btn-mini tip" type="button"><i class="fa fa-file"></i></button></a> </td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

<div class="admin-bar" id="quick-access" style="display: none;">
<div class="admin-bar-inner delete-bar">
<div class="form-horizontal">
<h4><b>Are you sure you want to delete this data?</b></h4>
</div>
<button class="btn btn-primary btn-cons btn-add" onclick="delete_data()" id="delete_confirm"   data-id="" type="button">Yes</button>
<button class="btn btn-white btn-cons btn-cancel" type="button">Cancel</button>
</div>
</div>