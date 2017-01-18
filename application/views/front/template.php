<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url() ?>.asset/front/favicon.ico">

    <title><?= $title ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url() ?>asset/front/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="<?php echo base_url() ?>asset/front/dist/css/bootstrap-theme.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?php echo base_url() ?>asset/front/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url() ?>asset/front/css/theme.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!-- <script src="<?php echo base_url() ?>asset/js/ie-emulation-modes-warning.js"></script> -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Find House</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">หน้าหลัก</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ขาย <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">บ้านเดี่ยว</a></li>
                <li><a href="#">ทาวน์เฮ้าส์</a></li>
                <li><a href="#">คอนโดมิเนียม</a></li>
                <li><a href="#">อพาตเมนต์</a></li>
                <li><a href="#">ที่ดิน</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ให้เช่า <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">บ้านเดี่ยว</a></li>
                <li><a href="#">ทาวน์เฮ้าส์</a></li>
                <li><a href="#">คอนโดมิเนียม</a></li>
                <li><a href="#">อพาตเมนต์</a></li>
                <li><a href="#">ที่ดิน</a></li>
              </ul>
            </li>
              <li><a href="#about">บทความ</a></li>
          </ul>
          <div class="navbar-right">
            <ul class="nav navbar-nav">
              <li><a href="#about">สมัครสมาชิก</a></li>
              <li><a href="#about">เข้าสู่ระบบ</a></li>
            </ul>
          </div>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <!-- CONTENT -->
    <?php $this->load->view('front/content'); ?>
    <!-- FOOTER -->
    <footer>
      <hr>
      <p class="pull-right"><a href="#">Back to top</a></p>
      <p>&copy; 2016 Company, Inc. &middot; <a href="#">ติดต่อเรา</a> &middot; <a href="#">ลงประกาศโฆษณา</a></p>
    </footer>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php echo base_url() ?>asset/front/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="<?php echo base_url() ?>asset/front/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>asset/front/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo base_url() ?>asset/front/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
