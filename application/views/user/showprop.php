<div id="content">

    <div class="panel">
      <div class="panel-body">
          <div class="col-md-6 col-sm-12">
            <h3 class="animated fadeInLeft">Property Management</h3>
            <!-- <p class="animated fadeInDown"><i class="fa fa-plus-square"></i> </p> -->
          </div>
      </div>
    </div>
    <div class="col-md-12" id="table_2" style="display:">
        <div class="col-md-1">
        </div>
        <div class="col-md-10 panel">
          <div class="col-md-12 panel-heading">
            <h4>แก้ไขรายการประกาศ</h4>
          </div>
          <div class="col-md-6 panel-body" style="padding-bottom:30px;">
            <div class="col-md-12">
              <div class="panel-body">
                <div class="table-responsive">
                  <div class="overflow: auto">
                    <table class="table table-striped table-bordered table-hover">
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
                          <td><?php echo $rs['propertyname'];?>&nbsp&nbsp&nbsp<input name="propertyname" type="text" id="slot_1" style="display:none" placeholder="<?php echo $rs['propertyname'];?>">
                            &nbsp&nbsp&nbsp <button type="button" value="1" onclick="show_slot(this.value);">แก้ไข</button>
                          </td>

                        </tr>
                        <tr>
                          <td>ประเภทของประกาศ</td>
                          <td><?php echo $rs['proptype'];?>&nbsp&nbsp&nbsp
                            <select id="slot_2" style="display:none" name="proptype" >
                              <option value="sale">ขาย</option>
                              <option value="rent">ให้เช่า</option>
                            </select>
                          &nbsp&nbsp&nbsp <button type="button" value="2" onclick="show_slot(this.value);">แก้ไข</button></td>
                        </tr>
                        <tr>
                          <tr>
                            <td>ประเภทของอสังหาริมทัพย์</td>
                            <td>
                                <?php echo $rs['ptype'];?>&nbsp&nbsp&nbsp
                                <select id="slot_3" style="display:none" name="ptype">
															  <option value="detach">บ้านเดี่ยว</option>
																<option value="town">ทาวน์เฮ้าส์</option>
																<option value="condo">คอนโด</option>
																<option value="apart">อพาร์ตเมนต์</option>
																<option value="land">ที่ดิน</option>
																</select>
                                &nbsp&nbsp&nbsp <button type="button" value="3" onclick="show_slot(this.value);">แก้ไข</button></td></td>
                          </tr>
                          <tr>
                            <tr>
                              <td>รายละเอียด</td>
                              <td><?php echo $rs['detail'];?>&nbsp&nbsp&nbsp<input name="detail" type="text" id="slot_4" style="display:none" placeholder="<?php echo $rs['detail'];?>">
                                &nbsp&nbsp&nbsp <button type="button" value="4" onclick="show_slot(this.value);">แก้ไข</button></td>
                            </tr>
                            <tr>
                              <tr>
                                <td>สถานที่ใกล้เคียง</td>
                                <td><?php echo $rs['ntype']."  ".$rs['ndetail'];?>&nbsp&nbsp&nbsp <button type="button" value="5" onclick="show_slot(this.value);">แก้ไข</button>
                                  <br><br><select id="slot_5" style="display:none" name="ntype">
                                                                      <option value="" selected>--------- ตัวเลือก ---------</option>
                                                                      <option value="สถานีรถไฟฟ้าบีทีเอส">สถานีรถไฟฟ้าบีทีเอส</option>
                                                                      <option value="สถานีรถไฟฟ้าเอ็มอาร์ที">สถานีรถไฟฟ้าเอ็มอาร์ที</option>
                                                                      <option value="โรงพยาบาล">โรงพยาบาล</option>
                                                                      <option value="โรงเรียน">โรงเรียน</option>
                                                                      <option value="วัด">วัด</option>
                                                                      <option value="สถานที่ราชการ">สถานที่ราชการ</option>
                                                                      <option value="อื่นๆ">อื่นๆ</option>
                                                                    </select>
                                  &nbsp&nbsp&nbsp<input name="ndetail" type="text" id="slot_5_1" style="display:none" placeholder="กรุณาระบุ">
                                </td>
                              </tr>
                              <tr>
                                <tr>
                                  <td>ชื่อหมู่บ้าน/โครงการ</td>
                                  <td><?php echo $rs['house'];?>&nbsp&nbsp&nbsp<input name="house" type="text" id="slot_6" style="display:none" placeholder="<?php echo $rs['house'];?>">
                                    &nbsp&nbsp&nbsp <button type="button" value="6" onclick="show_slot(this.value);">แก้ไข</button></td>
                                </tr>
                                <tr>
                                  <td>เลขที่</td>
                                  <td><?php echo $rs['number'];?>&nbsp&nbsp&nbsp<input name="number" type="text" id="slot_7" style="display:none" placeholder="<?php echo $rs['number'];?>">
                                    &nbsp&nbsp&nbsp <button type="button" value="7" onclick="show_slot(this.value);">แก้ไข</button></td>
                                </tr>
                                <tr>
                                  <td>ถนน</td>
                                  <td><?php echo $rs['road'];?>&nbsp&nbsp&nbsp<input name="road" type="text" id="slot_8" style="display:none" placeholder="<?php echo $rs['road'];?>">
                                    &nbsp&nbsp&nbsp <button type="button" value="8" onclick="show_slot(this.value);">แก้ไข</button></td>
                                </tr>
                                <tr>
                                  <td>ชื่อหมู่บ้าน/โครงการ</td>
                                  <td><?php echo $rs['house'];?>&nbsp&nbsp&nbsp<input name="house" type="text" id="slot_6" style="display:none" placeholder="<?php echo $rs['house'];?>">
                                    &nbsp&nbsp&nbsp <button type="button" value="6" onclick="show_slot(this.value);">แก้ไข</button></td>
                                </tr>
                                <tr>
                                  <td>ชื่อหมู่บ้าน/โครงการ</td>
                                  <td><?php echo $rs['house'];?>&nbsp&nbsp&nbsp<input name="house" type="text" id="slot_6" style="display:none" placeholder="<?php echo $rs['house'];?>">
                                    &nbsp&nbsp&nbsp <button type="button" value="6" onclick="show_slot(this.value);">แก้ไข</button></td>
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
                          <td>สถานะการอนุมัติ</td>
                          <form class="form" action="<?php echo base_url('admin/admin_signin/update/'.$rs['property_id']);?>" method="post">
                          <td><select name="mydropdown"><?php echo $rs['activation'];?>
                              <option value="No">-- Choose --</option>
                              <option value="Yes">Yes</option>
                              <option value="No">No</option>
                            </select></td>
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
                        </tbody>
                    </table>
                  </div>
                </div>
          </div>
          </div>
        </div>
    </div>
  </div>
