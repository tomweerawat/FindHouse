<div class="row" >
    <!-- <div class="col-md-9 col-sm-12 col-xs-12"> -->
    <div class="panel panel-default">
        <div class="panel-heading">
           ข้อมูลประกาศ
        </div>
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
                        <form class="form" action="<?php echo base_url('admin/admin_signin/update/'.$rs['property_id']);?>" method="post">
                        <td><select name="mydropdown"><?php echo $rs['activation'];?>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                          </select></td>
                      </tr>
                      <tr>
                        <td>รูปภาพ</td>
                        <td>
                            <div class="img">
                            <a target="_blank" href="<?php $img1= $rs['image1'];
                            echo base_url("asset/css/admin/img/".$img1.""); ?>">
                            <img src="<?php $img1= $rs['image1'];
                            echo base_url("asset/css/admin/img/".$img1.""); ?>" alt="Fjords" width="300" height="200"></a>
                            </div>

                            <div class="img">
                            <a target="_blank" href="<?php $img2= $rs['image2'];
                            echo base_url("asset/css/admin/img/".$img2.""); ?>">
                            <img src="<?php $img2= $rs['image2'];
                            echo base_url("asset/css/admin/img/".$img2.""); ?>" alt="Fjords" width="300" height="200"></a>
                            </div>

                            <div class="img">
                            <a target="_blank" href="<?php $img3= $rs['image3'];
                            echo base_url("asset/css/admin/img/".$img3.""); ?>">
                            <img src="<?php $img3= $rs['image3'];
                            echo base_url("asset/css/admin/img/".$img3.""); ?>" alt="Fjords" width="300" height="200"></a>
                            </div>

                            <div class="img">
                            <a target="_blank" href="<?php $img4= $rs['image4'];
                                            echo base_url("asset/css/admin/img/".$img4.""); ?>">
                            <img src="<?php $img4= $rs['image4'];
                                            echo base_url("asset/css/admin/img/".$img4.""); ?>" alt="Fjords" width="300" height="200"></a>
                            </div>
                        </td>
                      </tr>
                    </tbody>
                </table>
                <button type="submit" id="login-button">Save</button></form>
              </div>
            </div>
        </div>
    </div>
</div>
