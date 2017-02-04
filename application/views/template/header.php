<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo base_url() ?>asset/front/favicon.ico">

    <title>Find House | <?php echo $title ?></title>
    <link href="<?php echo base_url() ?>asset/front/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>asset/front/dist/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>asset/front/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>asset/front/css/theme.css" rel="stylesheet">
    <script src="<?php echo base_url() ?>asset/front/js/ie-emulation-modes-warning.js"></script>
    <script src="<?php echo base_url('asset/front/js/jquery-2.2.3.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>asset/front/js/front.js"></script>
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
            <li><a data-toggle="modal" data-target="#register2"><span class="glyphicon glyphicon-pencil"></span> สมัครสมาชิก</a></li>
            <li><a data-toggle="modal" data-target="#login"><span class="glyphicon glyphicon-log-in"></span> เข้าสู่ระบบ</a></li>
          </ul>
          <?php }else{ ?>
            <ul class="nav navbar-nav navbar-right">
              <li><img src="<?php $img=$this->session->userdata('img'); echo base_url($img) ?>" class="img-circle" alt="Cinque Terre" width="44" height="44"></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php $name=$this->session->userdata('name'); echo $name ?> <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">จัดการรายการประกาศ</a></li>
                  <li><a data-toggle="modal" data-target="#editpic">แก้ไขรูปโปรไฟล์</a></li>
                  <li><a data-toggle="modal" data-target="#editpro">แก้ไขข้อมูลส่วนตัว</a></li>
                  <li><a href="<?php echo base_url() ?>front/login/logout" style="color:red">ออกจากระบบ</a></li>
                </ul>
              </li>
              <li><button type="button" class="btn btn-success" style="margin-top: 8px;">เพิ่มรายการประกาศ</button></li>
            </ul>
          <?php } ?>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

<!-- LOGIN -->
<div id="login" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><span class="glyphicon glyphicon-log-in"></span> เข้าสู่ระบบ</h4>
      </div>
      <div class="modal-body">
        <div id="error"></div>
        <form id="form_login" action="<?php echo base_url() ?>front/login/chk_login" method="post">
          <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control" id="email" name="email">
          </div>
          <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="password" name="password">
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" onclick="send_login()">เข้าสู่ระบบ</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
      </form>
      </div>
    </div>

  </div>
</div>
<!-- LOGIN -->

<!-- REGISTER2 -->
<div id="register2" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><span class="glyphicon glyphicon-pencil"></span> สมัครสมาชิก</h4>
      </div>
      <div class="modal-body">
        <div id="the-message"></div>
        <form id="form-user" action="<?php echo base_url() ?>front/register/save" method="post" enctype="multipart/form-data">
				<!-- <?php echo form_open_multipart("front/register/save", array("id" => "form-user", "class" => "form-horizontal")) ?> -->
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
  						<label for="fname">ชื่อ :</label>
  							<input type="text" name="fname" id="fname" class="form-control">
  					</div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
  						<label for="lname">นามสกุล :</label>
  							<input type="text" name="lname" id="lname" class="form-control">
  					</div>
          </div>
        </div>
          <div class="form-group">
						<label for="telephone">เบอร์โทรศัพท์</label>
							<input type="text" name="telephone" id="telephone" class="form-control">
					</div>
					<div class="form-group">
						<label for="email">อีเมลแอดเดรส</label>
							<input type="text" name="regis_email" id="regis_email" class="form-control">
					</div>
					<div class="form-group">
						<label for="password">พาสเวิร์ด</label>
							<input type="password" name="regis_password" id="regis_password" class="form-control">
					</div>
					<div class="form-group">
						<label for="password_confirm">ยืนยันพาสเวิร์ด</label>
							<input type="password" name="password_confirm" id="password_confirm" class="form-control">
					</div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">สมัครสมาชิก</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
      </form>
      <!-- <?php echo form_close(); ?> -->
      </div>
    </div>
  </div>
</div>
<!-- REGISTER2 -->

<!-- EDITPIC -->
<div id="editpic" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><span class="glyphicon glyphicon-log-in"></span> แก้ไขรูปโปรไฟล์</h4>
      </div>
      <div class="modal-body">
        <?php $id=$this->session->userdata('uid'); ?>
        <form  action="<?php echo base_url('front/edit_profile/edit_pic/').$id ?>" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="pic">รูปภาพประกอบ</label>
            <input type="file" name="userfile" id="userfile" onchange/>
          </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">บันทึก</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
      </form>
      </div>
    </div>

  </div>
</div>
<!-- EDITPIC -->

<!-- EDITPRO -->
<div id="editpro" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><span class="glyphicon glyphicon-pencil"></span> แก้ไขข้อมูลส่วนตัว</h4>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url('front/edit_profile/edit_pro/').$id ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
  						<label for="fname">ชื่อ :</label>
  							<input type="text" name="edit_fname" id="edit_fname" class="form-control" placeholder="<?php echo $name ?>">
  					</div>
            <div class="form-group">
  						<label for="lname">นามสกุล :</label>
  							<input type="text" name="edit_lname" id="edit_lname" class="form-control" placeholder="<?php $lname=$this->session->userdata('lname'); echo $lname ?>">
  					</div>
          <div class="form-group">
						<label for="telephone">เบอร์โทรศัพท์</label>
							<input type="text" name="edit_telephone" id="edit_telephone" class="form-control">
					</div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">บันทึก</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
      </form>
      </div>
    </div>
  </div>
</div>
<!-- EDITPRO -->
<script>
	$('#form-user').submit(function(e) {
		e.preventDefault();

		var me = $(this);

		// perform ajax
		$.ajax({
			url: me.attr('action'),
			type: 'post',
			data: me.serialize(),
			dataType: 'json',
			success: function(response) {
				if (response.success == true) {
					// if success we would show message
					// and also remove the error class
					$('#the-message').append('<div class="alert alert-success">' +
						'<span class="glyphicon glyphicon-ok"></span>' +
						' Data has been saved' +
						'</div>');
					$('.form-group').removeClass('has-error')
									.removeClass('has-success');
					$('.text-danger').remove();

					// reset the form
					me[0].reset();

					// close the message after seconds
					$('.alert-success').delay(500).show(10, function() {
						$(this).delay(10).hide(10, function() {
							$(this).remove();
              window.location.reload()
						});
					})
				}
				else {
					$.each(response.messages, function(key, value) {
						var element = $('#' + key);

						element.closest('div.form-group')
						.removeClass('has-error')
						.addClass(value.length > 0 ? 'has-error' : 'has-success')
						.find('.text-danger')
						.remove();

						element.after(value);
					});
				}
			}
		});
	});
</script>
