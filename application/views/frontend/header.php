<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Find House | Home</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url('asset/frontend/img/favicon.ico'); ?>" type="image/x-icon">

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
    <link rel="stylesheet" href="<?php echo base_url('asset/frontend/lobian/demo/demo.css'); ?>"/>
    <link rel="stylesheet" href="<?php echo base_url('asset/frontend/lobian/dist/css/Lobibox.min.css'); ?>"/>

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>


  </head>
  <body class="aa-price-range">
  <!-- Pre Loader -->
  <div id="aa-preloader-area">
    <div class="pulse"></div>
  </div>
  <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-angle-double-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header section -->
  <header id="aa-header">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-header-area">
            <div class="row">
              <!--<div class="col-md-6 col-sm-6 col-xs-6">-->
							<div>

            <!--  <div class="col-md-6 col-sm-6 col-xs-6">-->
						<div>

                <div class="aa-header-right">
                  <a href="<?php echo base_url('register'); ?>" class="aa-register">Register</a>
                  <a href="<?php echo base_url('login'); ?>" class="aa-login">Login</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- End header section -->

  <!-- Start menu section -->
  <section id="aa-menu-area">
    <nav class="navbar navbar-default main-navbar" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->
          <!-- Text based logo -->
           <a class="navbar-brand aa-logo" href="welcome"> Find <span>House</span></a>
           <!-- Image based logo -->
           <!-- <a class="navbar-brand aa-logo-img" href="index.html"><img src="img/logo.png" alt="logo"></a> -->
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right aa-main-nav">
            <li class="active"><a href="welcome">HOME</a></li>
             <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="properties.html">For Sale <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Condo</a></li>
                <li><a href="#">Detached House</a></li>
                <li><a href="#">Townhouse</a></li>
                <li><a href="#">Apartment</a></li>
                <li><a href="#">Land</a></li>
              </ul>
            </li>
            <li class="dropdown">
             <a class="dropdown-toggle" data-toggle="dropdown" href="properties.html">For Rent <span class="caret"></span></a>
             <ul class="dropdown-menu" role="menu">
               <li><a href="#">Condo</a></li>
               <li><a href="#">Detached House</a></li>
               <li><a href="#">Townhouse</a></li>
               <li><a href="#">Apartment</a></li>
               <li><a href="#">Land</a></li>
             </ul>
           </li>
            <!-- <li><a href="gallery.html">GALLERY</a></li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="blog-archive.html">BLOG <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="blog-archive.html">BLOG</a></li>
                <li><a href="blog-single.html">BLOG DETAILS</a></li>
              </ul>
            </li>
            <li><a href="contact.html">CONTACT</a></li>
           <li><a href="404.html">404 PAGE</a></li> -->
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
  </section>
