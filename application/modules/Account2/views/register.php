
      <div class="row">
        <div class="col-md-6 tex-center" style="background: url(<?php echo base_url() ?>assets/theme/img/login.jpg); height: 100vh; background-size: cover">
          <div class="login-form-social text-center">
            <a href="<?php echo base_url() ?>"><img src="<?php echo base_url() ?>assets/theme/img/logo.png" width="150px"></a>
            <br><br>
            <span>Masuk dengan</span>
            <br><br>
            <a href="<?php echo $login_url ?>"><img src="<?php echo base_url() ?>assets/theme/img/facebook-login.png" height="40px"></A><br><br>
            <a href="<?php echo $login_google ?>"><img src="<?php echo base_url() ?>assets/theme/img/google-login.png" height="40px"></a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="register-form">
            <h3>Daftar Annisa Travel</h3>
            <span>Sudah punya akun? Masuk </span><a href="<?php echo site_url('Account/login') ?>">di sini</a>
            <form action="<?php echo site_url() ?>/Account/do_register" class="form-login"  method="post">
            <div class="form-group">
              <div class="inner-addon left-addon">
                <i class="glyphicon glyphicon-user"></i>
                <input type="text" name="first_name" required class="form-control text-login" placeholder="Nama Lengkap" />
              </div>
            </div>
            <div class="form-group">
              <div class="inner-addon left-addon">
                <i class="glyphicon glyphicon-phone"></i>
                <input type="text" name="phone" required class="form-control text-login" placeholder="Nomor Telepon" />
                <span class="help-block">Pastikan nomor ponsel Anda aktif untuk keamanan dan kemudahan transaksi.</span>
              </div>
            </div>
            <div class="form-group">
              <div class="inner-addon left-addon">
                <i class="glyphicon glyphicon-envelope"></i>
                <input type="email" name="email" required class="form-control text-login" placeholder="Email" />
              </div>
            </div>
            <div class="form-group">
              <div class="inner-addon left-addon">
                <i class="glyphicon glyphicon-lock"></i>
                <input type="password" name="password" required class="form-control text-login" placeholder="Masukan kata sandi" />
                <span class="help-block">Minimal 6 karakter</span>
              </div>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-login">Daftar Akun</button>
              <span class="help-agreement">Dengan Menekan Daftar Akun Saya Mengkonfirmasi Telah Menyetujui <br> <a href="#">Syarat dan Ketentuan</a> Serta <a href="#">Kebijakan Privasi</a> Annisa Travel</span>
            </div>
            <?php if($this->session->flashdata('msg')){ ?>
                            <div class="form-group text-center" >
                        <h4 style="color:red"><?php echo $this->session->flashdata('msg') ?></h4>
                        </div>
                        <?php } ?>
          </form>
          </div>
        </div>
      </div>