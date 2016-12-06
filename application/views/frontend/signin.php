<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Property | Signin</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url('img/favicon.ico'); ?>" type="image/x-icon">


    <!-- Font awesome -->
    <link href="<?php echo base_url('asset/frontend/css/font-awesome.css'); ?>" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="<?php echo base_url('asset/frontend/css/bootstrap.css'); ?>" rel="stylesheet">
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/frontend/css/slick.css'); ?>">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/frontend/css/nouislider.css'); ?>">
    <!-- Theme color -->
    <link id="switcher" href="<?php echo base_url('asset/frontend/css/theme-color/default-theme.css'); ?>" rel="stylesheet">

    <!-- Main style sheet -->
    <link href="<?php echo base_url('asset/frontend/css/style.css'); ?>" rel="stylesheet">
    <link rel="<?php echo base_url('stylesheet" href="asset/frontend/lobian/demo/demo.css'); ?>"/>
    <link rel="<?php echo base_url('stylesheet" href="asset/frontend/lobian/dist/css/Lobibox.min.css'); ?>"/>


    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
  </head>

  <body>
  <section id="aa-signin">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-signin-area">
            <div class="aa-signin-form">
              <div class="aa-signin-form-title">
                <a class="aa-property-home" href="index.html">Find House</a>
                <h4>Sign in to your account</h4>
              </div>

              <form class="contactform" action="<?=base_url();?>login/checkLogin" method="post" id="signinform" enctype="multipart/form-data">
              <!-- <form class="contactform"> -->
                <div class="aa-single-field">
                  <label for="email">E-mail <span class="required">*</span></label>
                  <input type="email" required="required" aria-required="true" value="" name="email" id="email">
                </div>
                <div class="aa-single-field">
                  <label for="password">Password <span class="required">*</span></label>
                  <input type="password" name="password" id="password">
                </div>
                <div class="aa-single-field">
                <label>
                  <input type="checkbox" name="remem"> Remember me
                </label>
                </div>
                <div class="aa-single-submit">
                  <input type="submit" value="LogIn" class="aa-browse-btn" name="submit" id="submit">
                  <p>Don't Have A Account Yet? <a href="register">CREATE NOW!</a></p>
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>


    <script type="text/javascript">
  // Ajax post
  $(document).ready(function() {
  $("#submit").click(function(event) {
  event.preventDefault();
  var username = $("input#username").val();
  var password = $("input#password").val();
  if(username == ""){
    swal({
   title: "กรุณาใส่ username",
   type: "error",
   text: "I will close in 2 seconds.",
   timer: 2000,
   showConfirmButton: false
  });
}
// else if (password == "") {
//   swal({
//  title: "กรุณาใส่ password",
//  type: "error",
//  text: "I will close in 2 seconds.",
//  timer: 2000,
//  showConfirmButton: false
// });
// }

  // jQuery.ajax({
  // type: "POST",
  // url: "<?php echo base_url(); ?>" + "index.php/signin/user_data_submit",
  // dataType: 'json',
  // data: {username: username, password: password},
  // success: function(res) {
  // if (res)
  // {
  //   swal({
  //           title: "Login Success",
  //           text: "Thank You",
  //           type: "success",
  //           timer: 2000,
  //           showCancelButton: false,
  //           showConfirmButton: false,
  //           confirmButtonColor: "#DD6B55",
  //           animation:false}, function(){
  //           window.location.href = "<?php echo site_url('addpropertyuser'); ?>";
  //         });
  //
  // }
  // else {
  //
  // }
  // }
  // });
  // });
  // });
  // </script>


  </body>
</html>
