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


    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

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
						<!-- <div>

                <div class="aa-header-right">

                   <a class="dropdown-toggle" data-toggle="dropdown" href="#">user
                     <span class="caret"></span>
                   </a>
                   <ul class="dropdown-menu" role="menu">
                     <li><a href="#">Add properties</a></li>
                     <li><a href="#">Manage properties</a></li>
                     <li><a href="#">Edit profile</a></li>
                     <li><a href="#">Logout</a></li>
                   </ul>
                </div>
              </div> -->
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
           <a class="navbar-brand aa-logo" href="#"> Find <span>House</span></a>
           <!-- Image based logo -->
           <!-- <a class="navbar-brand aa-logo-img" href="index.html"><img src="img/logo.png" alt="logo"></a> -->
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right aa-main-nav">
            <li class="active"><a href="welcome">HOME</a></li>
             <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">For Sale <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Condo</a></li>
                <li><a href="#">Detached House</a></li>
                <li><a href="#">Townhouse</a></li>
                <li><a href="#">Apartment</a></li>
                <li><a href="#">Land</a></li>
              </ul>
            </li>
            <li class="dropdown">
             <a class="dropdown-toggle" data-toggle="dropdown" href="#">For Rent <span class="caret"></span></a>
             <ul class="dropdown-menu" role="menu">
               <li><a href="#">Condo</a></li>
               <li><a href="#">Detached House</a></li>
               <li><a href="#">Townhouse</a></li>
               <li><a href="#">Apartment</a></li>
               <li><a href="#">Land</a></li>
             </ul>
           </li>
           <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php $name=$this->session->userdata('name');
                                    echo $name ?><span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="<?php echo base_url('addprop'); ?>">User Management</a></li>
              <li><a href="<?php echo base_url('login/logout'); ?>">Logout</a></li>
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
