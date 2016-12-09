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
font-size: 16px;"> Last access : 30 May 2014 &nbsp; <a href="#" class="btn btn-danger square-btn-adjust">Logout</a> </div>
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
                                            <th>หัวข้อ</th>
                                            <th>รายละเอียด</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>เลขที่ประกาศ</td>
                                        <td><?php echo $rs['property_id'];?></td>
                                      </tr>
                                      <tr>
                                        <td>ชื่อประกาศ</td>
                                        <td><?php echo $rs['propertyname'];?></td>
                                      </tr>
                                      <tr>
                                        <td>ที่อยู่</td>
                                        <td><?php echo $rs['house']." ".$rs['number']
                                        ." ".$rs['road']." ".$rs['subdistrict']
                                        ." ".$rs['district']." ".$rs['province']." ".$rs['zipcode'];?></td>
                                      </tr>
                                      <tr>
                                        <td>สถานะ</td>
                                        <td><?php echo $rs['proptype'];?></td>
                                      </tr>
                                      <tr>
                                        <td>ราคา</td>
                                        <td><?php echo $rs['price'];?></td>
                                      </tr>
                                      <tr>
                                        <td>รายละเอียด</td>
                                        <td><?php echo $rs['detail'];?></td>
                                      </tr>
                                      <tr>
                                        <td>จำนวนห้อง</td>
                                        <td><?php echo "ห้องน้ำ ".$rs['rroom']." ห้อง<br>".
                                        "ห้องนอน ".$rs['broom']." ห้อง<br>".
                                        "ห้องครัว ".$rs['kroom']." ห้อง<br>".
                                        "ห้องนั่งเล่น ".$rs['lroom']." ห้อง";?></td>
                                      </tr>
                                      <tr>
                                        <td>รูปภาพ</td>
                                        <td><?php if($rs['img1']== null){
                                           echo "No picture";
                                        }else{ ?>
                                            <div class="img">
                                            <a target="_blank" href="<?php $img1= $rs['img1'];
                                            echo base_url("".$img1.""); ?>">
                                            <img src="<?php $img1= $rs['img1'];
                                            echo base_url("".$img1.""); ?>" alt="Fjords" width="300" height="200"></a>
                                            </div>

                                            <div class="img">
                                            <a target="_blank" href="<?php $img2= $rs['img2'];
                                            echo base_url("".$img2.""); ?>">
                                            <img src="<?php $img2= $rs['img2'];
                                            echo base_url("".$img2.""); ?>" alt="Fjords" width="300" height="200"></a>
                                            </div>

                                            <div class="img">
                                            <a target="_blank" href="<?php $img3= $rs['img3'];
                                            echo base_url("".$img3.""); ?>">
                                            <img src="<?php $img3= $rs['img3'];
                                            echo base_url("".$img3.""); ?>" alt="Fjords" width="300" height="200"></a>
                                            </div>

                                            <div class="img">
                                            <a target="_blank" href="<?php $img4= $rs['img4'];
                                                            echo base_url("".$img4.""); ?>">
                                            <img src="<?php $img4= $rs['img4'];
                                                            echo base_url("".$img4.""); ?>" alt="Fjords" width="300" height="200"></a>
                                            </div>

                                            <div class="img">
                                            <a target="_blank" href="<?php $img5= $rs['img5'];
                                                            echo base_url("".$img5.""); ?>">
                                            <img src="<?php $img5= $rs['img5'];
                                                            echo base_url("".$img5.""); ?>" alt="Fjords" width="300" height="200"></a>
                                            </div>
                                            <?php } ?>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>แก้ไขข้อมูล</td>
                                        <td><button class="btn btn-primary" data-toggle="modal" data-target="#myModal">แก้ไขข้อมูล</button>
                                          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                              <div class="modal-dialog">
                                                  <div class="modal-content">
                                                      <div class="modal-header">
                                                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                          <h4 class="modal-title" id="myModalLabel">แก้ไขข้อมูลประกาศ</h4>
                                                      </div>
                                                      <div class="modal-body">
                                                        <form role="form" method="post" action="<?php echo base_url("user_backend/dashboard/update/".$rs['property_id']); ?>">
                                                            <div class="form-group input-group-sm">
                                                                <label>ชื่อประกาศ</label>
                                                                <input class="form-control" name="propertyname" placeholder="<?php echo $rs['propertyname'];?>"/>
                                                                <label>ประเภทของประกาศ</label>
                                                                <select class="form-control" name="proptype">
                                                                  <option value="" selected>--------- ตัวเลือก ---------</option>
                                                                  <option value="ขาย">ขาย</option>
  																															  <option value="ให้เช่า">ให้เช่า</option>
                                                                </select>
                                                                <label>ประเภทของอสังหาริมทรัพย์</label>
                                                                <select class="form-control" name="ptype">
                                                                  <option value="" selected>--------- ตัวเลือก ---------</option>
                                                                  <option value="บ้านเดี่ยว">บ้านเดี่ยว</option>
  																															  <option value="ทาวน์เฮ้าส์">ทาวน์เฮ้าส์</option>
  																															  <option value="คอนโด">คอนโด</option>
  																															  <option value="อพาร์ตเมนต์">อพาร์ตเมนต์</option>
  																																<option value="ที่ดิน">ที่ดิน</option>
                                                                </select>
                                                                <label>สถานที่ใกล้เคียง</label>
                                                                <select class="form-control" name="ntype">
                                                                  <option value="" selected>--------- ตัวเลือก ---------</option>
                                                                  <option value="สถานีรถไฟฟ้าบีทีเอส">สถานีรถไฟฟ้าบีทีเอส</option>
                                                                  <option value="สถานีรถไฟฟ้าเอ็มอาร์ที">สถานีรถไฟฟ้าเอ็มอาร์ที</option>
                                                                  <option value="โรงพยาบาล">โรงพยาบาล</option>
                                                                  <option value="โรงเรียน">โรงเรียน</option>
                                                                  <option value="วัด">วัด</option>
                                                                  <option value="สถานที่ราชการ">สถานที่ราชการ</option>
                                                                  <option value="อื่นๆ">อื่นๆ</option>
                                                                </select>
                                                                <input class="form-control"  name="ndetail" placeholder="<?php echo $rs['ndetail'];?>"/>
                                                              </div>
                                                            <div class="form-group">
                                                                <label>รายละเอียด</label>
                                                                <textarea class="form-control" name="detail" rows="3" placeholder="<?php echo $rs['detail'];?>"></textarea>
                                                            </div>
                                                          <div class="row">
                                                                <div class="col-md-4">
                                                              <div class="form-group input-group-sm">
                                                                <label>ชื่อหมู่บ้าน/โครงการ</label>
                                                                <input class="form-control" name="house" placeholder="<?php echo $rs['house'];?>" />
                                                                <label>ตำบล</label>
                                                                <input class="form-control" name="subdistrict" placeholder="<?php echo $rs['subdistrict'];?>" />
                                                                <label>รหัสไปรษณีย์</label>
                                                                <input class="form-control" name="zipcode" placeholder="<?php echo $rs['zipcode'];?>" />
                                                              </div>
                                                            </div>
                                                              <div class="col-md-4">
                                                            <div class="form-group input-group-sm">
                                                              <label>เลขที่</label>
                                                              <input class="form-control" name="number" placeholder="<?php echo $rs['number'];?>" />
                                                              <label>อำเภอ</label>
                                                              <input class="form-control" name="district" placeholder="<?php echo $rs['district'];?>" />
                                                            </div>
                                                          </div>
                                                            <div class="col-md-4">
                                                          <div class="form-group input-group-sm">
                                                            <label>ถนน</label>
                                                            <input class="form-control" name="road" placeholder="<?php echo $rs['road'];?>" />
                                                            <label>จังหวัด</label>
                                                            <select class="form-control" name="province">
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
                                                        </div>
                                                      </div>
                                                            <div class="form-group input-group-sm">
                                                                <label>ราคา</label>
                                                                <input class="form-control" name="price" placeholder="<?php echo $rs['price'];?>" />
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                  <label>จำนวนห้องน้ำ</label>
                                                                  <input class="form-control" name="rroom" placeholder="<?php echo $rs['rroom'];?>" />
                                                                </div>
                                                                <div class="col-md-3">
                                                                  <label>จำนวนห้องนอน</label>
                                                                  <input class="form-control" name="broom" placeholder="<?php echo $rs['broom'];?>" />
                                                                </div>
                                                                <div class="col-md-3">
                                                                  <label>จำนวนห้องครัว</label>
                                                                  <input class="form-control" name="kroom" placeholder="<?php echo $rs['kroom'];?>" />
                                                                </div>
                                                                <div class="col-md-3">
                                                                  <label>จำนวนห้องนั่งเล่น</label>
                                                                  <input class="form-control" name="lroom" placeholder="<?php echo $rs['lroom'];?>" />
                                                                </div>
                                                      </div>

                                                      <div class="modal-footer">
                                                          <button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>
                                                          <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
                                                      </div>
                                                    </form>
                                                  </div>
                                              </div>
                                          </div>
                                        </td>
                                      </tr>
                                    </tbody>
                                </table>
                            </div>
                            <a href="<?php echo base_url('user_backend/dashboard'); ?>" class="btn btn-default">ย้อนกลับ</a>
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
    <!-- CUSTOM SCRIPTS -->
  <script src="<?php echo base_url('asset/user_backend/js/custom.js'); ?>"></script>
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
</body>
</html>
