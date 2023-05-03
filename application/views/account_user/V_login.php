
 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="<?=base_url()?>asset/account/images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>asset/account/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>asset/account/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>asset/account/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>asset/account/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>asset/account/vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>asset/account/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>asset/account/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>asset/account/vendor/select2/select2.min.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>asset/account/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>asset/account/css/util.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>asset/account/css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #999999;">
  
  <div class="limiter">
    <div class="container-login100">
      <div class="login100-more" style="background-image: url('<?=base_url()?>asset/account/images/mobil.jpg');"></div>

      <div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
        <form class="login100-form validate-form" action="<?=base_url()?>index.php/login_user/proses_login" method="POST">

        <?php
   
      if($this->session->flashdata('sukses')) {
           echo '<p class="warning" style="margin: 10px 20px;">'.$this->session->flashdata('sukses').'</p>';
      }
      ?>
      <?php echo form_open('login_user');?>

          <span class="login100-form-title p-b-59">
            Sign Up
          </span>


          <div class="wrap-input100 validate-input" data-validate="Username is required">
            <span class="label-input100">Username</span>
            <input class="input100" placeholder="Username..." type="text" name="username" value="<?php echo set_value('username'); ?>"/ >
            <p> <?php echo form_error('username'); ?> </p>
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "Password is required">
            <span class="label-input100">Password</span>
            <input class="input100" placeholder="*************" type="password" name="password" value="<?php echo set_value('password'); ?>"/>
            <p> <?php echo form_error('password'); ?> </p>
            <span class="focus-input100"></span>
          </div>

         

         

          <div class="container-login100-form-btn">
            <div class="wrap-login100-form-btn">
              <div class="login100-form-bgbtn"></div>
              
                <button class="login100-form-btn" name="btnSubmit" value="Login_user">
                Sign in
              </button>
              
            </div>

            <a href="<?=base_url()?>index.php/register_user" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
              Sign Up
              <i class="fa fa-long-arrow-right m-l-5"></i>
            </a>
          </div>
           <?php echo form_close();?>
        </form>
      </div>
    </div>
  </div>
  
<!--===============================================================================================-->
  <script src="<?=base_url()?>asset/account/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="<?=base_url()?>asset/account/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="<?=base_url()?>asset/account/vendor/bootstrap/js/popper.js"></script>
  <script src="<?=base_url()?>asset/account/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="<?=base_url()?>asset/account/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="<?=base_url()?>asset/account/vendor/daterangepicker/moment.min.js"></script>
  <script src="<?=base_url()?>asset/account/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="<?=base_url()?>asset/account/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="<?=base_url()?>asset/account/js/main.js"></script>

</body>
</html>