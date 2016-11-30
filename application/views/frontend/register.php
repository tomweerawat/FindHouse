<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Property | Register</title>

    <link rel="shortcut icon" href="<?php echo base_url('img/favicon.ico'); ?>" type="image/x-icon">
    <link href="<?php echo base_url('asset/frontend/css/font-awesome.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('asset/frontend/css/bootstrap.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/frontend/css/slick.css'); ?>">
    <link id="switcher" href="<?php echo base_url('asset/frontend/css/theme-color/default-theme.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('asset/frontend/css/style.css'); ?>" rel="stylesheet">
    <link rel="<?php echo base_url('stylesheet" href="asset/frontend/lobian/demo/demo.css'); ?>"/>
    <link href='https://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  </head>

  <body>
  <section id="aa-signin">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-signin-area">
            <div class="aa-signin-form">
              <div class="aa-signin-form-title">
                <a class="aa-property-home" href="index.html">Register</a>
                <h4>Create your account and Stay with us</h4>
              </div>
              <form class="contactform" action="<?=base_url();?>registeruser" method="post" enctype="multipart/form-data">
                <div class="aa-single-field">
                  <label for="name">First Name <span class="required">*</span></label>
                  <input type="text" required="required" aria-required="true" value="" name="fname">
                </div>
                <div class="aa-single-field">
                  <label for="email">Last Name <span class="required">*</span></label>
                  <input type="text" required="required" aria-required="true" value="" name="lname">
                </div>
                <div class="aa-single-field">
                  <label for="email">Email <span class="required">*</span></label>
                  <input type="email" required="required" aria-required="true" value="" name="email">
                </div>
                <div class="aa-single-field">
                  <label for="name">Username <span class="required">*</span></label>
                  <input type="text" required="required" aria-required="true" value="" name="uname">
                </div>
                <div class="aa-single-field">
                  <label for="password">Password <span class="required">*</span></label>
                  <input type="password" name="pass">
                </div>
                <div class="aa-single-field">
                  <label for="confirm-password">Confirm Password <span class="required">*</span></label>
                  <input type="password" name="repass">
                </div>
                <div class="aa-single-field">
                  <label for="telephone">Tel.<span class="required">*</span></label>
                  <input type="text" name="telephone" maxlength="10">
                </div>
                <div class="aa-single-field" data-trigger="fileinput">
                  <input id="uploadFile" placeholder="Choose File" disabled="disabled" />
                  <div class="fileUpload btn btn-primary">
                      <span>Upload</span>
                      <input id="uploadBtn" type="file" name="file[]"class="upload" onchange/>
                    </div>
                </div>
                <div class="aa-single-submit">
                  <input type="submit" value="Create Account" name="submit">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <script src="<?php echo base_url('asset/frontend/js/jquery.min.js'); ?>"></script>
  <script src="<?php echo base_url('asset/frontend/js/bootstrap.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('asset/frontend/js/slick.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('asset/frontend/js/nouislider.js'); ?>"></script>
  <script src="<?php echo base_url('asset/frontend/js/custom.js'); ?>"></script>
  <script src="<?php echo base_url('asset/frontend/swal/sweetalert.min.js'); ?>"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/frontend/swal/sweetalert.css'); ?>">
  </script>
  <!-- <script type="text/javascript">
  function register() {
    swal({

      title: "ขอบคุณสำหรับการสมัครสมาชิก",
      text: "Thank You",
      type: "success",
      timer: 2000,
      showCancelButton: false,
      showConfirmButton: false,
      confirmButtonColor: "#DD6B55",
      animation:false});
    // swal("Here's a message!")
  }


  </script> -->
  <style>
  .fileUpload {
  	position: relative;
  	overflow: hidden;
  	margin: 10px;
  }
  .fileUpload input.upload {
  	position: absolute;
  	top: 0;
  	right: 0;
  	margin: 0;
  	padding: 0;
  	font-size: 20px;
  	cursor: pointer;
  	opacity: 0;
  	filter: alpha(opacity=0);
  }
</style>

<script type="text/javascript">
document.getElementById("uploadBtn").onchange = function a() {
document.getElementById("uploadFile").value = this.value;
};

</script>



  </body>
</html>
