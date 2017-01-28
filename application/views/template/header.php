<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url() ?>asset/front/favicon.ico">

    <title>Find House | <?php echo $title ?></title>
    <link href="<?php echo base_url() ?>asset/front/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>asset/front/dist/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>asset/front/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>asset/front/css/theme.css" rel="stylesheet">
    <script src="<?php echo base_url() ?>asset/front/js/ie-emulation-modes-warning.js"></script>
    <script src="<?php echo base_url('asset/front/js/jquery-2.2.3.min.js') ?>"></script>
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
          <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-home"></span> FindHouse</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">หน้าหลัก</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ขาย <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">บ้านเดี่ยว</a></li>
                <li><a href="#">ทาวเฮ้าส์</a></li>
                <li><a href="#">คอนโดมิเนียม</a></li>
                <li><a href="#">อพาตเมนต์</a></li>
                <li><a href="#">ที่ดิน</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ให้เช่า <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">บ้านเดี่ยว</a></li>
                <li><a href="#">ทาวเฮ้าส์</a></li>
                <li><a href="#">คอนโดมิเนียม</a></li>
                <li><a href="#">อพาตเมนต์</a></li>
                <li><a href="#">ที่ดิน</a></li>
              </ul>
            </li>
            <li><a href="#about">บทความ</a></li>
          </ul>
          <?php if($this->session->userdata('is_login') == false){ ?>
          <ul class="nav navbar-nav navbar-right">
            <li><a data-toggle="modal" data-target="#register"><span class="glyphicon glyphicon-pencil"></span> สมัครสมาชิก</a></li>
            <li><a data-toggle="modal" data-target="#login"><span class="glyphicon glyphicon-log-in"></span> เข้าสู่ระบบ</a></li>
          </ul>
          <?php }else{ ?>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#"><?php $name=$this->session->userdata('name'); echo $name ?></a></li>
              <li><a href="<?php echo base_url() ?>front/login/logout">ออกจากระบบ</a></li>
            </ul>
          <?php } ?>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <!-- Trigger the modal with a button -->
    <?php if($this->session->userdata('is_login') == true && $alert==false){ ?>
    <div class="alert alert-success " role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <strong>เข้าสู่ระบบสำเร็จ, </strong>ยินดีต้อนรับคุณ <?php $name=$this->session->userdata('name'); echo $name ?>
    </div>
    <?php }else if($this->session->userdata('is_login') == false && $alert==true){ ?>
      <div class="alert alert-danger " role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>เข้าสู่ระบบไม่สำเร็จ, </strong>อีเมล หรือ พาสเวิร์ดของคุณไม่ถูกต้อง
      </div>
    <?php } ?>

<!-- LOGIN -->
<div id="login" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><span class="glyphicon glyphicon-log-in"></span> เข้าสู่ระบบ</h4>
      </div>
      <div class="modal-body">
        <?php
          if(validation_errors()){
        ?>
        <div class="alert alert-danger alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <strong><?php echo validation_errors();?></strong>
        </div>
        <?php
        }
        ?>
        <form action="<?php echo base_url() ?>front/login/" method="post">
          <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control" id="email" name="email">
          </div>
          <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="password" name="password">
          </div>
          <div class="checkbox">
            <label><input type="checkbox"> Remember me</label>
          </div>

      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">เข้าสู่ระบบ</button>
        </form>
        <button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
      </div>
    </div>

  </div>
</div>
<!-- REGISTER -->
<div id="register" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><span class="glyphicon glyphicon-pencil"></span> สมัครสมาชิก</h4>
      </div>
      <div class="modal-body">
        <div id="message"></div>
        <p style="color:red">กรุณากรอกข้อมูลให้ครบทุกช่อง</p>
          <div class="row">
            <div class="col-md-6">
              <!-- <?php echo form_open('register', array('name'=>'form_register')); ?> -->
              <form id="form_register" action="<?php echo base_url() ?>front/register/get_data" method="post">
              <div class="form-group">
                <label for="fname">ชื่อ:</label>
                <input type="text" class="form-control" id="fname" name="fname">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="lname">นามสกุล:</label>
                <input type="text" class="form-control" id="lname" name="lname">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="email">อีเมล์:</label>
            <input type="email" class="form-control" id="email" name="email">
          </div>
          <div class="form-group">
            <label for="telephone">เบอร์โทรศัพท์:</label>
            <input type="text" class="form-control" id="telephone" name="telephone">
          </div>
          <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password">
          </div>
          <div class="form-group">
            <label for="repassword">Re-Password:</label>
            <input type="password" class="form-control" id="repassword" name="repassword">
          </div>
          <div class="form-group">
            <label for="pic">รูปภาพประกอบ</label>
            <input type="file" name="userfile" id="files">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" onclick="send_data()">สมัครสมาชิก</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
        <!-- <?php echo form_close(); ?> -->
      </form>
      </div>
    </div>

  </div>
</div>
<!-- SCRIPT -->
<script type="text/javascript">
  function send_data() {
    $.ajax({
      url: "<?php echo base_url() ?>front/register/get_data",
      type: 'POST',
      dataType: 'json',
      data: $('#form_register').serialize(),
      encode:true,
      success:function(data) {
        if(!data.success){
          if(data.errors){
            $('#message').html(data.errors).addClass('alert alert-danger');
            window.setTimeout(function () {
                            $("#message").alert('close'); }, 2000);
          }
        }else {
          alert(data.message);
          setTimeout(function() {
            window.location.reload()
          }, 400);
        }
      }
    })
  }
  </script>
<!-- SCRIPT -->
