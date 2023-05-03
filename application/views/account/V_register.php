


 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Sign In</title>
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
        <form class="login100-form validate-form" action="<?=base_url()?>index.php/register" method="POST">

        
      <?php echo form_open('register');?>

          <span class="login100-form-title p-b-59">
            Sign In
          </span>


          <div class="wrap-input100 validate-input" data-validate="Name is required">
            <span class="label-input100">Nama</span>
            <input type="text" class="input100" name="name" value="<?php echo set_value('name'); ?>"/>
            <p> <?php echo form_error('name'); ?> </p>
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input" data-validate="Username is required">
            <span class="label-input100">Username</span>
            <input type="text" class="input100" name="username" value="<?php echo set_value('username'); ?>"/>
            <p> <?php echo form_error('username'); ?> </p>
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input" data-validate="Email is required">
            <span class="label-input100">Email</span>
            <input type="text" class="input100" name="email" value="<?php echo set_value('email'); ?>"/>
            <p> <?php echo form_error('email'); ?> </p>
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input" data-validate="Password is required">
            <span class="label-input100">Password</span>
            <input type="password" class="input100" name="password" value="<?php echo set_value('password'); ?>"/>
            <p> <?php echo form_error('password'); ?> </p>
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input" data-validate="Password is required">
            <span class="label-input100">Password Confirm</span>
            <input type="password" class="input100" name="password_conf" value="<?php echo set_value('password_conf'); ?>"/>
            <p> <?php echo form_error('password_conf'); ?> </p>
            <span class="focus-input100"></span>
          </div>

          

         

         

          <div class="container-login100-form-btn">
            <div class="wrap-login100-form-btn">
              <div class="login100-form-bgbtn"></div>
              
                <button class="login100-form-btn" name="btnSubmit" value="Daftar">
                 Confirm
              </button>
              
            </div>

            
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