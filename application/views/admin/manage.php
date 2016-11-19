                    <div class="col-md-6 panel-body" style="padding-bottom:30px;">
                      <div class="col-md-12">
                        <div class="panel-body">
                          <div class="form-group form-animate-text" style="margin-top:40px !important;">
                            <?php echo form_open("admin/Admindashboard/Edit".$rs['property_id']);?>
                            <table>
                              <tr>
                                <td>เลขที่ประกาศ</td>
                                <td><?php echo $rs['property_id'];?></td>
                              </tr>
                              <tr>
                                <td>ชื่อประกาศ</td>
                                <td><?php echo $rs['propertyname'];?></td>
                              </tr>
                              <tr>
                                <td>ผู้ประกาศ</td>
                                <td><?php echo $rs['contact'];?></td>
                              </tr>
                              <tr>
                                <td>ที่อยู่</td>
                                <td><?php echo $rs['location'];?></td>
                              </tr>
                              <tr>
                                <td>สถานะ</td>
                                <td><?php echo $rs['status'];?></td>
                              </tr>
                              <tr>
                                <td>ราคา</td>
                                <td><?php echo $rs['price'];?></td>
                              </tr>
                              <tr>
                                <td>รายละเอียด</td>
                                <td><?php echo $rs['description'];?></td>
                              </tr>
                              <tr>
                                <td>สถานะการอนุมัติ</td>
                                <td><?php echo $rs['activation'];?></td>
                              </tr>
                            </table>
                          </div>
                          <!-- <div class="form-group form-animate-text" style="margin-top:40px !important;">
                            <input type="text" class="form-text" name="branchDetail" id="branchDetail" required>
                            <span class="bar"></span>
                            <label>รายละเอียด*</label>
                          </div> -->
                      </div>
                    </div>
                    </div>
                  </div>
              </div>
