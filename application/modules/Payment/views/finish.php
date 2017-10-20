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
            <h4><strong>Pesan</strong></h4>
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
                   $total_price+=$key->price*$key->qtt;
                  ?>

                  <input type="hidden" name="id_program<?php echo $no ?>" value="<?php echo $key->program->id ?>">
                  <input type="hidden" name="type_room<?php echo $no ?>" value="<?php echo $key->type_room ?>">
                  <input type="hidden" name="qtt<?php echo $no ?>" value="<?php echo $key->qtt ?>">
                  <input type="hidden" name="total_amountp<?php echo $no ?>" value="<?php echo $key->price*$key->qtt?>">
                  <tr class="py-tr">
                    <td><?php echo $key->program->title ?></td>
                    <td style="text-transform: uppercase;"><?php echo $key->type_room ?></td>
                    <td>Rp. <?php echo idr($key->price) ?>.-</td>
                    <td><?php echo $key->qtt ?> Orang</td>
                    <td>Rp. <?php echo idr($key->price*$key->qtt) ?></td>
                    <td class="text-center"><a href="#" alt="delete" onclick="delete_tmp(<?php echo $key->id ?>)" ><span class="glyphicon glyphicon-remove"></span></a></td>
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
            
          </div>
        </div>
        
      </div>
      <div class="container">
        <div class="col-md-12 mt-cs text-center">
          <h3><strong>TERIMA KASIH</strong></h3>
          <p>Transaksi anda telah di proses</p>
          <p>Kode Transaksi :</p>
          <h1 class="f-blue">#<?php echo $data->invoice ?></h1>
          
        </div>
        <div class="button-bayar text-center">
            <a class="btn btn-payment mt-xl mb-sm" href="<?php echo site_url() ?>/Account">LENGKAPI DATA ANDA</a>
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