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
                <a class="navbar-brand" href="index.html">Find House</a>
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : 30 May 2014 &nbsp; <a href="<?php echo base_url('user_backend/dashboard/logout'); ?>" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="<?php $img=$this->session->userdata('img');
                                    echo base_url("".$img.""); ?>"
                    class="user-image img-responsive"/>
					</li>


          <li>
              <a  href="<?php echo base_url('user_backend/dashboard'); ?>"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
          </li>
            <li>
              <a  href="<?php echo base_url('user_backend/addprop'); ?>"><i class="fa fa-desktop fa-3x"></i> Create Property</a>
          </li>
          <li>
              <a  href="<?php echo base_url('user_backend/editprofile'); ?>"><i class="fa fa-qrcode fa-3x"></i> Edit Profile</a>
          </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>User Management</h2>


                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />

            <div class="row">
                <div class="col-md-4">


                </div>
                <div class="col-md-4">
                  <div class="col-md-4">
                  <label>ชื่อ :</label><br>
                  <label>นามสกุล :</label><br>
                  <label>อีเมล์ :</label><br>
                  <label>เบอร์โทรติดต่อ :</label><br>
                  <label>รูปภาพ :</label><br>
                </div>
                  <div class="col-md-8">
                    <label><?php echo $rs['first_name']; ?></label><br>
                    <label><?php echo $rs['last_name']; ?></label><br>
                    <label><?php echo $rs['email']; ?></label><br>
                    <label><?php echo $rs['tel']; ?></label><br>
                    <div class="img">
                    <a target="_blank" href="<?php $img2= $rs['userimage'];
                    echo base_url("".$img2.""); ?>">
                    <img src="<?php $img2= $rs['userimage'];
                    echo base_url("".$img2.""); ?>" alt="Fjords" width="300" height="200"></a><br>
                    </div>
                  </div>
                  <div class="row">
                      <div class="col-md-4">
                      </div>
                      <div class="col-md-4">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-edit "></i> Edit</button>
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title" id="myModalLabel">แก้ไขข้อมูลส่วนตัว</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">

                                            <form role="form">
                                              <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>ชื่อ</label>
                                                    <input class="form-control" />
                                                </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group">
                                                <label>นามสกุล</label>
                                                <input class="form-control" />
                                            </div>
                                      </div>
                                        </div>
                                      <div class="row">
                                        <div class="col-md-12">
                                          <div class="form-group">
                                              <label>อีเมล์</label>
                                              <input class="form-control" />
                                              <label>เบอร์โทรติดต่อ</label>
                                              <input class="form-control" />
                                          </div>
                                        </div>
                                      </div>
                                    </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>
                                        <button type="button" class="btn btn-primary">บันทึกข้อมูล</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                      </div>
                </div>
                <div class="col-md-4">


                </div>
            </div>
                </div>
            </div>
                <!-- /. ROW  -->
        </div>

    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="<?php echo base_url('asset/user_backend/js/jquery-1.10.2.js'); ?>"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?php echo base_url('asset/user_backend/js/bootstrap.min.js'); ?>"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?php echo base_url('asset/user_backend/js/jquery.metisMenu.js'); ?>"></script>
    <!-- image SCRIPTS -->
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
    <!-- CUSTOM SCRIPTS -->
  <script src="<?php echo base_url('asset/user_backend/js/custom.js'); ?>"></script>

</body>
</html>
