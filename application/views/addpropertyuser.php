<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta name="description" content="Miminium Admin Template v.1">
	<meta name="author" content="Isna Nur Azis">
	<meta name="keyword" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Miminium</title>

  <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/font-awesome.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/simple-line-icons.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/animate.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/fullcalendar.min.css"/>
	<link href="asset/css/style.css" rel="stylesheet">
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="asset/lobian/demo/demo.css"/>
  <link rel="stylesheet" href="asset/lobian/dist/css/Lobibox.min.css"/>

  <script src="asset/swal/sweetalert.min.js"></script>
  <link rel="stylesheet" type="text/css" href="asset/swal/sweetalert.css">

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
              <li class="user-name"><span>Restuarant</span></li>
                <li class="dropdown avatar-dropdown">
                 <img src="asset/img/avatar.jpg" class="img-circle avatar" alt="user name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"/>
                 <ul class="dropdown-menu user-dropdown">
                   <li role="separator" class="divider"></li>
									 <li><a href="#"><span class="fa fa-user"></span><strong><?=$this->session->userdata('username');?></strong></a></li>
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
                      <h3 class="animated fadeInLeft">เพิ่มสาขา</h3>
                      <p class="animated fadeInDown"><i class="fa fa-plus-square"></i> Add Branch</p>
                    </div>
                </div>
              </div>

              <form class="cmxform" id="addBranchForm" method="get" action="">

              <div class="col-md-12">
                  <div class="col-md-1">
                  </div>
                  <div class="col-md-10 panel">
                    <div class="col-md-12 panel-heading">
                      <h4>ชื่อสาขา</h4>
                    </div>
                    <div class="col-md-6 panel-body" style="padding-bottom:30px;">
                      <div class="col-md-12">
                        <div class="panel-body">
                          <div class="form-group form-animate-text" style="margin-top:40px !important;">
                            <input type="text" class="form-text" name="branchName" id="branchName" required>
                            <span class="bar"></span>
                            <label>ชื่อสาขา*</label>
                          </div>
                          <div class="form-group form-animate-text" style="margin-top:40px !important;">
                            <input type="text" class="form-text" name="branchDetail" id="branchDetail" required>
                            <span class="bar"></span>
                            <label>รายละเอียด*</label>
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
                            <input type="text" class="form-text" id="latitute" name="latitute" required>
                            <span class="bar"></span>
                            <label>ละติจูด</label>
                          </div>
                          <div class="form-group form-animate-text" style="margin-top:40px !important;">
                            <input type="text" class="form-text" id="longtitute"name="longtitute" required>
                            <span class="bar"></span>
                            <label>ลองติจูด</label>
                          </div>
                          <div class="form-group form-animate-text" style="margin-top:40px !important;">
                            <input type="text" class="form-text" id="Address1" name="address1" required>
                            <span class="bar"></span>
                            <label>ที่อยู่ 1*</label>
                          </div>
                          <div class="form-group form-animate-text" style="margin-top:40px !important;">
                            <input type="text" class="form-text" id="Address2" name="address2" required>
                            <span class="bar"></span>
                            <label>ที่อยู่ 2*</label>
                          </div>
                          <div class="form-group form-animate-text" style="margin-top:40px !important;">
                            <input type="text" class="form-text" id="Address3" name="address3" required>
                            <span class="bar"></span>
                            <label>ที่อยู่ 3*</label>
                          </div>
                          <div class="form-group form-animate-text" style="margin-top:40px !important;">
                            <input type="text" class="form-text" id="Address4" name="address4" required>
                            <span class="bar"></span>
                            <label>ที่อยู่ 4*</label>
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
                      <h4>รูปร้าน</h4>
                    </div>
                    <div class="col-md-6 panel-body" style="padding-bottom:30px;">
                      <div class="col-md-12">
                        <div class="panel-body">
                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                            <input type="file" class="form-text" id="branchCover" name="branchCover" required>
                            <span class="bar"></span>
                            <label></label>
                          </div>
                        <div class="col-md-12">
                          <button class="submit btn btn-danger" type="button" id="addBranch" name="addBranch">เพิ่มสาขา</button>
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



    <script src="asset/js/jquery.min.js"></script>
    <script src="asset/js/jquery.ui.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
    <script src="asset/js/plugins/moment.min.js"></script>
    <script src="asset/js/plugins/jquery.nicescroll.js"></script>
    <script src="asset/js/plugins/chart.min.js"></script>
    <script src="asset/js/main.js"></script>
    <script src="asset/lobian/dist/js/Lobibox.min.js"></script>
    <script src="asset/lobian/demo/demo.js"></script>
    <script src="asset/lobian/dist/js/Lobibox.min.js"></script>
    <script src="asset/lobian/demo/demo.js"></script>

		<script type="text/javascript">
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
  </body>
</html>
