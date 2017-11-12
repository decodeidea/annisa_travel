<div role="main" class="main">
    
    <div class="container">
      <div class="row step">
        <div class="step-pay">
          <div class="circleBase step-one">1</div>
          <div class="circleBase step-two-end">2</div>
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
            <h4><strong>Pesanan</strong></h4>
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
                  <?php
                  $total_price=0;
                  $no=0;
                  foreach ($product as $key) {
                    $no++;
                   ?>

                  <tr class="py-tr">
                    <td><?php echo $key->program->title ?></td>
                    <td style="text-transform: uppercase;"><?php echo $key->type_room ?></td>
                    <td>Rp. <?php if($key->type_room=='quad'){echo idr($key->program->price1); }elseif ($key->type_room=='triple') {
                      echo idr($key->program->price2);}else{echo idr($key->program->price3);}  ?>.-</td>
                    <td><?php echo $key->qtt ?> Orang</td>
                    <td>Rp. <?php echo idr($key->total_amount) ?></td>
                  </tr>
                  <?php }?>
                  <tr class="py-col">
                    <td colspan="3"></td>
                    <td class="ppn">Ppn 10%</td>
                    <td><?php echo idr($data->total_amount_ppn) ?></td>
                  </tr>
                  <tr class="py-col">
                    <td colspan="3"></td>
                    <td class="tot">Total Pembayaran</td>
                    <td class="tot"><?php echo idr($data->total_all_amount); ?></td>
                  </tr>
                </tbody>
              </table>
            </div>
            
          </div>
        </div>
        
      </div>
      <div class="container">
        <div class="col-md-12 mt-cs text-center">
          <h3><strong><?php
            if($doku->trxstatus=='Success'){echo"TERIMA KASIH";}
                      elseif($doku->trxstatus=='Failed'){
                        echo"MOHON MAAF";
                      }else{echo"TERIMA KASIH";}
                                   ?>
           </strong></h3>
          <p>Transaksi anda telah di proses</p>
          <p>Status Anda : </p>
          <h1 class="f-blue">
          <?php 

                                   if($doku->trxstatus=='Success'){echo"Paid";}
                      elseif($doku->trxstatus=='Failed'){
                        echo"Rejected";
                      }else{echo"Requested";}
                                   ?>
                                 </h1>
          <p>Kode Transaksi :</p>
          <h1 class="f-blue">#<?php echo $data->invoice ?></h1>
          
        </div>
        <div class="button-bayar text-center">
          <?php if($doku->trxstatus!='Failed'){ ?>
            <a class="btn btn-payment mt-xl mb-sm" href="<?php echo site_url() ?>/Account?inquiry=<?php echo $data->invoice ?>">LENGKAPI DATA ANDA</a>
            <?php } ?>
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