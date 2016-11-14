<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Property | Signin</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">


    <!-- Font awesome -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="css/nouislider.css">
    <!-- Theme color -->
    <link id="switcher" href="css/theme-color/default-theme.css" rel="stylesheet">

    <!-- Main style sheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../asset/lobian/demo/demo.css"/>
    <link rel="stylesheet" href="../asset/lobian/dist/css/Lobibox.min.css"/>


    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


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

              <form class="contactform" action="<?=base_url();?>checklogin" method="post" id="signinform">
              <!-- <form class="contactform"> -->
                <div class="aa-single-field">
                  <label for="email">Username <span class="required">*</span></label>
                  <input type="text" required="required" aria-required="true" value="" name="username" id="username">
                </div>
                <div class="aa-single-field">
                  <label for="password">Password <span class="required">*</span></label>
                  <input type="password" name="password" id="password">
                </div>
                <div class="aa-single-field">
                <label>
                  <input type="checkbox"> Remember me
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

  <!-- jQuery library -->
  <!--   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
  <script src="js/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.js"></script>
  <!-- slick slider -->
  <script type="text/javascript" src="js/slick.js"></script>
  <!-- Price picker slider -->
  <script type="text/javascript" src="js/nouislider.js"></script>

  <!-- Custom js -->
  <script src="js/custom.js"></script>
  <script src="asset/swal/sweetalert.min.js"></script>
  <link rel="stylesheet" type="text/css" href="asset/swal/sweetalert.css">
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
