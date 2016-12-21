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
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             รายการประกาศของคุณ
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>หมายเลขประกาศ</th>
                                            <th>ชื่อประกาศ</th>
                                            <th>สถานะการอนุมัติ</th>
                                            <th>วันที่ประกาศ</th>
                                            <th>รายละเอียด</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php
                                          foreach($rs as $r){?>
                                        <tr>
                                            <td><?php echo $r['property_id'];?></td>
                                            <td><?php echo $r['propertyname'];?></td>
                                            <td><?php echo $r['activation'];?></td>
                                            <td><?php echo $r['created'];?></td>
                                            <td><a href="<?php echo base_url("user_backend/dashboard/edit/".$r['property_id']);?>" class="btn btn-info btn-sm">Click!</a></td>
                                            <?php } ?>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                    <!--End Advanced Tables -->
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
     <!-- DATA TABLE SCRIPTS -->
    <script src="<?php echo base_url('asset/user_backend/js/dataTables/jquery.dataTables.js'); ?>"></script>
    <script src="<?php echo base_url('asset/user_backend/js/dataTables/dataTables.bootstrap.js'); ?>"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
    <!-- CUSTOM SCRIPTS -->
  <script src="<?php echo base_url('asset/user_backend/js/custom.js'); ?>"></script>

</body>
</html>
