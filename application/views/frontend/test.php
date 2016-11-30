<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta name="description" content="Miminium Admin Template v.1">
	<meta name="author" content="Isna Nur Azis">
	<meta name="keyword" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>FindHouse | User Management</title>

  <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/backend_user/css/bootstrap.min.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/backend_user/css/plugins/font-awesome.min.css'); ?>"/>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/backend_user/css/plugins/simple-line-icons.css'); ?>"/>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/backend_user/css/plugins/animate.min.css'); ?>"/>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/backend_user/css/plugins/fullcalendar.min.css'); ?>"/>
	<link href="<?php echo base_url('asset/backend_user/css/style.css" rel="stylesheet'); ?>">
	<link rel="shortcut icon" href="<?php echo base_url('asset/frontend/img/favicon.ico" type="image/x-icon'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('asset/frontend/lobian/demo/demo.css'); ?>"/>
  <link rel="stylesheet" href="<?php echo base_url('asset/frontend/lobian/dist/css/Lobibox.min.css'); ?>"/>

  <script src="<?php echo base_url('asset/swal/sweetalert.min.js'); ?>"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/swal/sweetalert.css'); ?>">

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

                 <img src="<?php $img=$this->session->userdata('userimage');
                    echo base_url("".$img.""); ?>" class="img-circle avatar" alt="username" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"/>

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
                      <a class="tree-toggle nav-header"><span class="fa-home fa"></span> Menu
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                          <li link="#">Create Property</li>
                          <li link="#">Property Management</li>
                          <li link="#">Edit Profile</li>
                      </ul>
                    </li>
                  </ul>
                </div>
            </div>

          <div id="content">

              <div class="panel">
                <div class="panel-body">
                    <div class="col-md-6 col-sm-12">
                      <h3 class="animated fadeInLeft">Create Property</h3>
                      <!-- <p class="animated fadeInDown"><i class="fa fa-plus-square"></i> </p> -->
                    </div>
                </div>
              </div>

              <form class="cmxform"method="post" action="<?=base_url();?>test/file_upload" enctype="multipart/form-data">

              <div class="col-md-12">
                  <div class="col-md-1">
                  </div>
                  <div class="col-md-10 panel">
                    <div class="col-md-12 panel-heading">
                      <h4>รายละเอียดทั่วไป</h4>
                    </div>
                    <div class="col-md-6 panel-body" style="padding-bottom:30px;">
                      <div class="col-md-12">
                        <div class="panel-body">
                          <div class="form-group form-animate-text" style="margin-top:40px !important;">
                            <span class="bar"></span>
                            <a>ประเภทของประกาศ : &nbsp</a><input type="radio" name="proptype" value="sale"> ขาย &nbsp <input type="radio" name="proptype" value="rent"> ให้เช่า<br>
                          </div>
                          <div class="form-group form-animate-text" style="margin-top:40px !important;">
                            <!-- <input type="text" class="form-text" name="propertydesc" id="propertydesc" > -->
                            <span class="bar"></span>
                            <a>ประเภทของอสังหาริมทัพย์ : &nbsp</a><select name="ptype">
																															  <option value="detach">บ้านเดี่ยว</option>
																															  <option value="town">ทาวน์เฮ้าส์</option>
																															  <option value="condo">คอนโด</option>
																															  <option value="apart">อพาร์ตเมนต์</option>
																																<option value="land">ที่ดิน</option>
																															</select>
                          </div>
													<div class="form-group form-animate-text" style="margin-top:40px !important;">
														<a>ชื่อประกาศ : &nbsp</a>
                            <input type="text" class="form-text" name="propname" id="propname" >
                            <span class="bar"></span>
													</div>
													<div class="form-group form-animate-text" style="margin-top:40px !important;">
														<a>รายละเอียด : &nbsp</a>
                            <input type="text" class="form-text" name="detail" id="detail" >
                            <span class="bar"></span>
													</div>
													<div class="form-group form-animate-text" style="margin-top:40px !important;">
                            <!-- <input type="text" class="form-text" name="propertydesc" id="propertydesc" > -->
                            <span class="bar"></span>
                            <a>สถานที่ใกล้เคียง : &nbsp</a><select name="ntype">
															  																<option value="" selected>--------- ตัวเลือก ---------</option>
																															  <option value="สถานีรถไฟฟ้าบีทีเอส">สถานีรถไฟฟ้าบีทีเอส</option>
																															  <option value="สถานีรถไฟฟ้าเอ็มอาร์ที">สถานีรถไฟฟ้าเอ็มอาร์ที</option>
																															  <option value="โรงพยาบาล">โรงพยาบาล</option>
																															  <option value="โรงเรียน">โรงเรียน</option>
																																<option value="วัด">วัด</option>
																																<option value="สถานที่ราชการ">สถานที่ราชการ</option>
																																<option value="อื่นๆ">อื่นๆ</option>
																															</select>
																															<input type="text" name="ndetail" placeholder="กรุณาระบุ">
                          </div>
                      </div>
                    </div>
                    </div>
                  </div>
              </div>

              <div class="col-md-12">
                  <div class="col-md-1">
                  </div>
                  <div class="col-md-10 panel">
                    <div class="col-md-12 panel-heading">
                      <h4>สถานที่ตั้ง</h4>
                    </div>
                    <div class="col-md-6 panel-body" style="padding-bottom:30px;">
                      <div class="col-md-12">
                        <div class="panel-body">
                          <div class="form-group form-animate-text" style="margin-top:40px !important;">
                            <a>จังหวัด : &nbsp</a><select name="province">
																						      <option value="" selected>--------- เลือกจังหวัด ---------</option>
																						      <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
																						      <option value="กระบี่">กระบี่ </option>
																						      <option value="กาญจนบุรี">กาญจนบุรี </option>
																						      <option value="กาฬสินธุ์">กาฬสินธุ์ </option>
																						      <option value="กำแพงเพชร">กำแพงเพชร </option>
																						      <option value="ขอนแก่น">ขอนแก่น</option>
																						      <option value="จันทบุรี">จันทบุรี</option>
																						      <option value="ฉะเชิงเทรา">ฉะเชิงเทรา </option>
																						      <option value="ชัยนาท">ชัยนาท </option>
																						      <option value="ชัยภูมิ">ชัยภูมิ </option>
																						      <option value="ชุมพร">ชุมพร </option>
																						      <option value="ชลบุรี">ชลบุรี </option>
																						      <option value="เชียงใหม่">เชียงใหม่ </option>
																						      <option value="เชียงราย">เชียงราย </option>
																						      <option value="ตรัง">ตรัง </option>
																						      <option value="ตราด">ตราด </option>
																						      <option value="ตาก">ตาก </option>
																						      <option value="นครนายก">นครนายก </option>
																						      <option value="นครปฐม">นครปฐม </option>
																						      <option value="นครพนม">นครพนม </option>
																						      <option value="นครราชสีมา">นครราชสีมา </option>
																						      <option value="นครศรีธรรมราช">นครศรีธรรมราช </option>
																						      <option value="นครสวรรค์">นครสวรรค์ </option>
																						      <option value="นราธิวาส">นราธิวาส </option>
																						      <option value="น่าน">น่าน </option>
																						      <option value="นนทบุรี">นนทบุรี </option>
																						      <option value="บึงกาฬ">บึงกาฬ</option>
																						      <option value="บุรีรัมย์">บุรีรัมย์</option>
																						      <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์ </option>
																						      <option value="ปทุมธานี">ปทุมธานี </option>
																						      <option value="ปราจีนบุรี">ปราจีนบุรี </option>
																						      <option value="ปัตตานี">ปัตตานี </option>
																						      <option value="พะเยา">พะเยา </option>
																						      <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา </option>
																						      <option value="พังงา">พังงา </option>
																						      <option value="พิจิตร">พิจิตร </option>
																						      <option value="พิษณุโลก">พิษณุโลก </option>
																						      <option value="เพชรบุรี">เพชรบุรี </option>
																						      <option value="เพชรบูรณ์">เพชรบูรณ์ </option>
																						      <option value="แพร่">แพร่ </option>
																						      <option value="พัทลุง">พัทลุง </option>
																						      <option value="ภูเก็ต">ภูเก็ต </option>
																						      <option value="มหาสารคาม">มหาสารคาม </option>
																						      <option value="มุกดาหาร">มุกดาหาร </option>
																						      <option value="แม่ฮ่องสอน">แม่ฮ่องสอน </option>
																						      <option value="ยโสธร">ยโสธร </option>
																						      <option value="ยะลา">ยะลา </option>
																						      <option value="ร้อยเอ็ด">ร้อยเอ็ด </option>
																						      <option value="ระนอง">ระนอง </option>
																						      <option value="ระยอง">ระยอง </option>
																						      <option value="ราชบุรี">ราชบุรี</option>
																						      <option value="ลพบุรี">ลพบุรี </option>
																						      <option value="ลำปาง">ลำปาง </option>
																						      <option value="ลำพูน">ลำพูน </option>
																						      <option value="เลย">เลย </option>
																						      <option value="ศรีสะเกษ">ศรีสะเกษ</option>
																						      <option value="สกลนคร">สกลนคร</option>
																						      <option value="สงขลา">สงขลา </option>
																						      <option value="สมุทรสาคร">สมุทรสาคร </option>
																						      <option value="สมุทรปราการ">สมุทรปราการ </option>
																						      <option value="สมุทรสงคราม">สมุทรสงคราม </option>
																						      <option value="สระแก้ว">สระแก้ว </option>
																						      <option value="สระบุรี">สระบุรี </option>
																						      <option value="สิงห์บุรี">สิงห์บุรี </option>
																						      <option value="สุโขทัย">สุโขทัย </option>
																						      <option value="สุพรรณบุรี">สุพรรณบุรี </option>
																						      <option value="สุราษฎร์ธานี">สุราษฎร์ธานี </option>
																						      <option value="สุรินทร์">สุรินทร์ </option>
																						      <option value="สตูล">สตูล </option>
																						      <option value="หนองคาย">หนองคาย </option>
																						      <option value="หนองบัวลำภู">หนองบัวลำภู </option>
																						      <option value="อำนาจเจริญ">อำนาจเจริญ </option>
																						      <option value="อุดรธานี">อุดรธานี </option>
																						      <option value="อุตรดิตถ์">อุตรดิตถ์ </option>
																						      <option value="อุทัยธานี">อุทัยธานี </option>
																						      <option value="อุบลราชธานี">อุบลราชธานี</option>
																						      <option value="อ่างทอง">อ่างทอง </option>
																						      <option value="อื่นๆ">อื่นๆ</option>
																						</select>
                          </div>
                          <div class="form-group form-animate-text" style="margin-top:40px !important;">
														<a>อำเภอ/เขต : &nbsp</a>
                            <input type="text" class="form-text" id="district"name="district" >
                            <span class="bar"></span>
                          </div>
													<div class="form-group form-animate-text" style="margin-top:40px !important;">
														<a>ตำบล/แขวง : &nbsp</a>
                            <input type="text" class="form-text" id="subdistrict"name="subdistrict" >
                            <span class="bar"></span>
                          </div>
													<div class="form-group form-animate-text" style="margin-top:40px !important;">
														<a>ชื่อหมู่บ้าน/โครงการ : &nbsp</a>
                            <input type="text" class="form-text" id="house"name="house" >
                            <span class="bar"></span>
                          </div>
													<div class="form-group form-animate-text" style="margin-top:40px !important;">
														<a>เลขที่ : &nbsp</a>
                            <input type="text" class="form-text" id="number"name="number" >
                            <span class="bar"></span>
                          </div>
													<div class="form-group form-animate-text" style="margin-top:40px !important;">
														<a>ถนน : &nbsp</a>
                            <input type="text" class="form-text" id="road"name="road" >
                            <span class="bar"></span>
                          </div>
													<div class="form-group form-animate-text" style="margin-top:40px !important;">
														<a>รหัสไปรษณีย์ : &nbsp</a>
                            <input type="text" class="form-text" id="zipcode"name="zipcode" >
                            <span class="bar"></span>
                          </div>
                        </div>
                    </div>
                    </div>
                  </div>
              </div>

              <div class="col-md-12">
                  <div class="col-md-1">
                  </div>
                  <div class="col-md-10 panel">
                    <div class="col-md-12 panel-heading">
                      <h4>รายละเอียดย่อย</h4>
                    </div>
                    <div class="col-md-6 panel-body" style="padding-bottom:30px;">
                      <div class="col-md-12">
                        <div class="panel-body">
													<div class="form-group form-animate-text" style="margin-top:40px !important;">
														<a>ราคา : &nbsp</a>
                            <input type="text" name="price" placeholder="กรุณาระบุราคา">
                            <span class="bar"></span>
                          </div>
													<div class="form-group form-animate-text" style="margin-top:40px !important;">
														<a>จำนวนห้องน้ำ : &nbsp</a>
														<input type="text" name="rroom" placeholder="กรุณาระบุจำนวนห้อง">
														<span class="bar"></span>
													</div>
													<div class="form-group form-animate-text" style="margin-top:40px !important;">
														<a>จำนวนห้องนอน : &nbsp</a>
														<input type="text" name="broom" placeholder="กรุณาระบุจำนวนห้อง">
														<span class="bar"></span>
													</div>
													<div class="form-group form-animate-text" style="margin-top:40px !important;">
														<a>จำนวนห้องครัว : &nbsp</a>
														<input type="text" name="kroom" placeholder="กรุณาระบุจำนวนห้อง">
														<span class="bar"></span>
													</div>
													<div class="form-group form-animate-text" style="margin-top:40px !important;">
														<a>จำนวนห้องนั่งเล่น : &nbsp</a>
														<input type="text" name="lroom" placeholder="กรุณาระบุจำนวนห้อง">
														<span class="bar"></span>
													</div>
                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                            <!-- <input type="file" class="form-text" id="branchCover" name="userFiles[]" multiple/> -->
														<a for="file">Filename: *ไม่เกิน 5 รูป</a>
														<input type="file" name="userfile[]" id="file" multiple>
														<!-- <ul class="gallery">

                    						<li class="item">
                        						<img  src=""  >

                    						</li>

                					</ul> -->
                            <span class="bar"></span>
                            <label></label>
                          </div>
                        <div class="col-md-12">
                          <button class="submit btn btn-danger" type="submit" id="addBranch" name="fileSubmit">เพิ่มประกาศ</button>
                        </div>
                      </div>
                    </div>
                    </div>
                  </div>
              </div>

            </form>

          </div>
           <!-- End Content -->

      </div>
      <!-- End Container -->



    <script src="<?php echo base_url('asset/js/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('asset/js/jquery.ui.min.js'); ?>"></script>
    <script src="<?php echo base_url('asset/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('asset/js/plugins/moment.min.js'); ?>"></script>
    <script src="<?php echo base_url('asset/js/plugins/jquery.nicescroll.js'); ?>"></script>
    <script src="<?php echo base_url('asset/js/plugins/chart.min.js'); ?>"></script>
    <script src="<?php echo base_url('asset/js/main.js'); ?>"></script>
    <script src="<?php echo base_url('asset/frontend/lobian/dist/js/Lobibox.min.js'); ?>"></script>
    <script src="<?php echo base_url('asset/frontend/lobian/demo/demo.js'); ?>"></script>
    <script src="<?php echo base_url('asset/frontend/lobian/dist/js/Lobibox.min.js'); ?>"></script>
    <script src="<?php echo base_url('asset/frontend/lobian/demo/demo.js'); ?>"></script>

		<!-- <script type="text/javascript">
				///Submit Form
				$("#addBranch").click(function(){
					branchName = $("#branchName").val();
					branchDetail = $("#branchDetail").val();
					branchCover = $("#branchCover").val();
					branchAdd1 = $("#Address1").val();
					branchAdd2 = $("#Address2").val();
					branchAdd3 = $("#Address3").val();
					branchAdd4 = $("#Address4").val();

					if(branchName == ""){
						Lobibox.notify('error', {
							msg: 'กรุณากรอกชื่อร้าน'
						});
						$("#branchName").focus();
					} else if(branchDetail == ""){
						Lobibox.notify('error', {
							msg: 'กรุณากรอกรายละเอียดร้าน'
						});
						$("#branchDetail").focus();
					}  else if(branchAdd1 == "" || branchAdd2 == "" || branchAdd3 == "" || branchAdd4 == ""){
						Lobibox.notify('error', {
							msg: 'กรุณากรอกที่อยู่ให้ครบถ้วน'
						});
					} else if(branchCover == ""){
						Lobibox.notify('error', {
							msg: 'กรุณาอัพโหลดรูปภาพร้าน'
						});
						$("#branchCover").focus();
					} else {

						swal({
							title: "ขอบคุณสำหรับการสมัครสมาชิก",
							text: "Thank You",
							type: "success",
							timer: 2000,
							showCancelButton: false,
							showConfirmButton: false,
							confirmButtonColor: "#DD6B55",
							animation:false}, function(){
								$("#addBranchForm").submit()
						});

					}
				});
				</script>
				<script> -->
				</script>
  </body>
</html>
