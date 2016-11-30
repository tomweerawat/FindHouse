<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fine House : Administrator Management</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="<?php echo base_url('asset/css/admin/css/bootstrap.css'); ?>" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="<?php echo base_url('asset/css/admin/css/font-awesome.css'); ?>" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="<?php echo base_url('asset/css/admin/js/morris/morris-0.4.3.min.css'); ?>" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="<?php echo base_url('asset/css/admin/css/custom.css');?>" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <style>
    div.img {
      margin: 5px;
      border: 1px solid #ccc;
      float: left;
      width: 180px;
      }

    div.img:hover {
        border: 1px solid #777;
    }

    div.img img {
        width: 100%;
        height: auto;
    }

    div.desc {
        padding: 15px;
        text-align: center;
    }
    </style>
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Fine House</a>
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"><?php $name=$this->session->userdata('name');
                        echo $name ?>&nbsp;&nbsp; <a href="signout" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="<?php $img=$this->session->userdata('userimage');
                    echo base_url("asset/css/admin/img/".$img.""); ?>" class="user-image img-responsive"/>
					</li>


                    <li>
                        <a class="active-menu"  href="<?=base_url();?>admin/admin_signin/select"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Administrator Management</h2>
                        <h5>Welcome back <?php $name=$this->session->userdata('name');
                                                echo $name ?></h5>
                    </div>
                </div>
