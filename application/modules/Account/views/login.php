    <div class="row">
      <div class="col-md-6 tex-center" style="background: url(<?php echo base_url() ?>assets/theme/img/login.jpg); height: 100vh; background-size: cover">
        <div class="login-form-social text-center">
         <a href="<?php echo base_url() ?>"> <img src="<?php echo base_url() ?>assets/theme/img/logo.png" width="150px"></a>
          <br><br>
          <span>Masuk dengan</span>
          <br><br>
          <?php 
            $url = site_url().'/account/loginFb';
           
          ?>
          <?php echo linkNewTabFb($url);?><br><br>
          <!--<a href="<?php echo $login_url ?>"><img src="<?php echo base_url() ?>assets/theme/img/facebook-login.png" height="40px"></a><br><br>
          !-->
          <a href="<?php echo $login_google ?>"><img src="<?php echo base_url() ?>assets/theme/img/google-login.png" height="40px"></a>
        </div>
      </div>
      <div class="col-md-6">
        <div class="login-form">
        <h3>Masuk Annisa Travel</h3>
        <span>Belum punya akun? Daftar </span><a href="register">di sini</a>  
        <form action="<?php echo site_url() ?>/Account/do_login" class="form-login" method="post">
          <div class="form-group">
            <div class="inner-addon left-addon">
    <i class="glyphicon glyphicon-envelope"></i>
    <input type="email" required name="email" class="form-control text-login" placeholder="Masukan email kamu" />
</div>
          </div>
          <div class="form-group">
            <div class="inner-addon left-addon">
    <i class="glyphicon glyphicon-lock"></i>
    <input type="password" required name="password" class="form-control text-login" placeholder="Masukan kata sandi" />
</div>
          </div>
          <div class="form-group">
            <div class="row"">
              <div class="col-md-7 pull-left"><input type="checkbox" style="border:1px solid blue"> ingat saya</div>
              <div class="col-md-5 pull-right text-left"><a style="text-decoration: underline;" href="#">Lupa kata sandi</a></div>
            </div>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-login">Masuk</button>
          </div>
        <?php if($this->session->flashdata('msg')){ ?>
        <div class="form-group">
                            <div class="alert alert-danger text-center text-login" style="height: auto;">
                        <?php echo $this->session->flashdata('msg') ?>
                        </div>
                      </div>
                        <?php } ?>
        </form>

        </div>
      </div>
    </div>
  
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '{your-app-id}',
      cookie     : true,
      xfbml      : true,
      version    : '{latest-api-version}'
    });
      
    FB.AppEvents.logPageView();   
      
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>