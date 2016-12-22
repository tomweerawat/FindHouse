<body>
  <?php echo $map['js'];?>
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
                                    echo base_url("".$img.""); ?>" class="user-image img-responsive"/>
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
                     <h2>Create Property</h2>
                    </div>
                </div>

        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    กรุณากรอกข้อมูลด้านล่างให้ครบถ้วน
                </div>
                <!-- ส่วนที่1 -->
                <div class="row">
                 <div class="col-md-12" id="table_1" style="display:" >
                  <div class="panel-body">

                    <div class="row">
                      <div class="col-md-2">
                            <label>รายละเอียดทั่วไป</label>

                    </div>

                  <div class="col-md-8">
                    <div class="progress progress-striped active">
                      <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width:10%">
                        <span class="sr-only">10% Complete (success)</span>
                      </div>
                    </div>
                    <form role="form" method="post" action="<?php echo base_url("user_backend/addprop/insert"); ?>" enctype="multipart/form-data">
                      <div class="form-group">
                          <label>ชื่อประกาศ</label>
                          <input class="form-control" name="propertyname" placeholder="กรุณาใส่ชื่อประกาศ" />
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
                          <input class="form-control"  name="ndetail" placeholder="กรุณาระบุ"/>

                          <label>รายละเอียด</label>
                          <textarea class="form-control" name="detail" rows="4" ></textarea>
                        </div>
                        <?php echo $map['html'];?>
                        <div class="row">
                          <div class="col-md-6">
                            <label>ละติจูต</label>
                            <input type="text" id="lat" class="form-control" name="lat" placeholder="Latitude" value="<?=$lat;?>" />
                          </div>
                          <div class="col-md-6">
                            <label>ลองติจูต</label>
                            <input type="text" id="lng" class="form-control" name="lng" placeholder="Longitude" value="<?=$lng;?>" />
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-11">
                          </div>
                          <div class="col-md-1">
                            <button class="btn btn-primary" type="button" value="2" onclick="show_table(this.value);">ถัดไป</button>
                          </div>
                        </div>

                </div>
              <div class="col-md-2">
            </div>
          </div>
        </div>
        </div>
        </div>
        <!-- ส่วนที่1 -->

        <!-- ส่วนที่2 -->
                <div class="row">
                  <div class="col-md-12" id="table_2" style="display:none">
                    <div class="panel-body">
                      <div class="row">
                       <div class="col-md-2">
                            <label>ที่อยู่</label>
                       </div>

                  <div class="col-md-8">
                    <div class="progress progress-striped active">
                      <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                        <span class="sr-only">40% Complete (success)</span>
                      </div>
                    </div>
                      <div class="form-group">
                          <label>ชื่อหมู่บ้าน/โครงการ</label>
                          <input class="form-control" name="house" placeholder="" />
                          <label>เลขที่</label>
                          <input class="form-control" name="number" placeholder="" />
                          <label>ถนน</label>
                          <input class="form-control" name="road" placeholder="" />
                          <label>ตำบล/แขวง</label>
                          <input class="form-control" name="subdistrict" placeholder="" />
                          <label>อำเภอ/เขต</label>
                          <input class="form-control" name="district" placeholder="" />
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
                          <label>รหัสไปรษณีย์</label>
                          <input class="form-control" name="zipcode" placeholder="" />
                        </div>

                </div>
                <div class="col-md-2">

                </div>
               </div>
               <div class="row">
                 <div class="col-md-1">
                   <button class="btn btn-primary" type="button" value="1" onclick="show_table(this.value);">ย้อนกลับ</button>
                 </div>
                 <div class="col-md-10">
                 </div>
                 <div class="col-md-1">
                   <button class="btn btn-primary" type="button" value="3" onclick="show_table(this.value);">ถัดไป</button>
                 </div>
               </div>
              </div>
             </div>
            </div>
          <!-- ส่วนที่2 -->

          <!-- ส่วนที่3 -->
          <div class="row">
           <div class="col-md-12" id="table_3" style="display:none" >
             <div class="panel-body">

            <div class="row">
              <div class="col-md-2">
                    <label>รายละเอียดย่อย</label>

            </div>

          <div class="col-md-8">
            <div class="progress progress-striped active">
              <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                <span class="sr-only">90% Complete (success)</span>
              </div>
            </div>
              <div class="form-group">
                <label>ราคา</label>
                <div class="form-group input-group">
                    <span class="input-group-addon"><i class="fa fa-btc"></i>
                    </span>
                    <input type="text" class="form-control" name="price" placeholder="Font Awesome Icon">
                </div>
                <div class="row">
                    <div class="col-md-3">
                      <label>จำนวนห้องน้ำ</label>
                      <input class="form-control" name="rroom" placeholder="" />
                    </div>
                    <div class="col-md-3">
                      <label>จำนวนห้องนอน</label>
                      <input class="form-control" name="broom" placeholder="" />
                    </div>
                    <div class="col-md-3">
                      <label>จำนวนห้องครัว</label>
                      <input class="form-control" name="kroom" placeholder="" />
                    </div>
                    <div class="col-md-3">
                      <label>จำนวนห้องนั่งเล่น</label>
                      <input class="form-control" name="lroom" placeholder="" />
                    </div>
                </div>
                <label>รูปภาพประกอบ</label>

                <input type="file" name="userfile[]" id="files" multiple>
                <p class="help-block">*อัปโหลดรูปได้ไม่เกิน 5 รูป</p>
                </div>
                <div class="row">
                  <div class="col-md-5">
                    <button class="btn btn-primary" type="button" value="2" onclick="show_table(this.value);">ย้อนกลับ</button>
                  </div>
                  <div class="col-md-2">
                    <button class="btn btn-success" type="submit" name="fileSubmit">บันทึกข้อมูล</button>
                  </div>
                  <div class="col-md-5">

                  </div>
                </div>
            </form>
        </div>

              <div class="col-md-2">

              </div>
          </div>
        </div>
        </div>
        </div>
        <!-- ส่วนที่3 -->
      </div>
                 <!-- /. ROW  -->
                 <hr />

    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="<?php echo base_url('asset/user_backend/js/jquery-1.10.2.js'); ?>"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?php echo base_url('asset/user_backend/js/bootstrap.min.js'); ?>"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?php echo base_url('asset/user_backend/js/jquery.metisMenu.js'); ?>"></script>
    <!-- CUSTOM SCRIPTS -->
    <!-- <script src="<?php echo base_url('asset/user_backend/js/custom.js'); ?>"></script> -->
      <!-- TABLE SCRIPTS -->
    <script src="<?php echo base_url('asset/user_backend/js/table.js'); ?>"></script>


</body>
</html>
