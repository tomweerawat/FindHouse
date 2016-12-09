<div id="content">

    <div class="panel">
      <div class="panel-body">
          <div class="col-md-6 col-sm-12">
            <h3 class="animated fadeInLeft">Property Management</h3>
            <!-- <p class="animated fadeInDown"><i class="fa fa-plus-square"></i> </p> -->
          </div>
      </div>
    </div>
    <div class="col-md-12" id="table_1" style="display:">
        <div class="col-md-1">
        </div>
        <div class="col-md-10 panel">
          <div class="col-md-12 panel-heading">
            <h4>รายการประกาศ</h4>
          </div>
          <div class="col-md-6 panel-body" style="padding-bottom:30px;">
            <div class="col-md-12">
              <div class="panel-body">
                <div class="table-responsive">
                  <div class="overflow: auto">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>หมายเลขประกาศ</th>
                                <th>ชื่อประกาศ</th>
                                <th>สถานะการอนุมัติ</th>
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
                                <td><?php echo anchor("editprop/edit/".$r['property_id'],"แก้ไข");}?></td>
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

</div>
