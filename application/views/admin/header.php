<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta name="description" content="Miminium Admin Template v.1">
	<meta name="author" content="Isna Nur Azis">
	<meta name="keyword" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>FindHouse | Addproperty</title>
  <script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
  <link rel="stylesheet" href="<?php echo base_url('https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('asset/css/style2.css');?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/bootstrap.min.css');?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/plugins/font-awesome.min.css');?>"/>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/plugins/simple-line-icons.css');?>"/>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/plugins/animate.min.css');?>"/>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/plugins/fullcalendar.min.css');?>"/>
	<link href="<?php echo base_url('asset/css/style.css" rel="stylesheet');?>">
	<link rel="shortcut icon" href="<?php echo base_url('img/favicon.ico" type="image/x-icon');?>">
  <link rel="stylesheet" href="<?php echo base_url('asset/lobian/demo/demo.css');?>"/>
  <link rel="stylesheet" href="<?php echo base_url('asset/lobian/dist/css/Lobibox.min.css');?>"/>

  <script src="asset/swal/sweetalert.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/swal/sweetalert.css');?>">

  </head>

 <body id="mimin" class="dashboard">

      <!-- start: Header -->
      <nav class="navbar navbar-default header navbar-fixed-top">
        <div class="col-md-12 nav-wrapper">
          <div class="navbar-header" style="width:100%;">
            <div class="opener-left-menu is-open">
              <span class="top"></span>
              <span class="middle"></span>
              <span class="bottom"></span>
            </div>

            <ul class="nav navbar-nav navbar-right user-nav" style="padding:5px;">
              <li class="user-name"><span><i class="fa fa-circle text-success"></i> online</span></li>
                <li class="dropdown avatar-dropdown">
                 <img src="asset/img/avatar.jpg" class="img-circle avatar" alt="user name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"/>
                 <ul class="dropdown-menu user-dropdown">
                   <li role="separator" class="divider"></li>
									 <li class="dropdown-header text-center">Account</li>
									 <li class="divider"></li>
									 <li><a href="#"><span class="fa fa-user"></span><strong> <?=$this->session->userdata('username');?></strong></a></li>
                   <li><a href="<?=base_url();?>signout"><span class="fa fa-calendar"></span> Logout</a></li>
                   <li role="separator" class="divider"></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- end: Header -->

      <div class="container-fluid mimin-wrapper">

          <!-- start:Left Menu -->
            <div id="left-menu">
              <div class="sub-left-menu scroll">
                <ul class="nav nav-list">
                    <li><div class="left-bg"></div></li>
                    <li class="time">
                      <h1 class="animated fadeInLeft">21:00</h1>
                      <p class="animated fadeInRight">Sat,October 1st 2029</p>
                    </li>
                    <li class="active ripple">
                      <a class="tree-toggle nav-header"><span class="fa-home fa"></span> จัดการสาขา
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">

                      </ul>
                    </li>
                  </ul>
                </div>
            </div>

          <div id="content">

              <div class="panel">
                <div class="panel-body">
                    <div class="col-md-6 col-sm-12">
                      <h3 class="animated fadeInLeft">Administrator Management</h3>

                    </div>
                </div>
              </div>

              <form class="cmxform" id="addBranchForm" method="get" action="">

              <div class="col-md-12">
                  <div class="col-md-1">
                  </div>
                  <div class="col-md-10 panel">
                    <div class="col-md-12 panel-heading">
                      <h4>รายการประกาศ</h4>
                    </div>
