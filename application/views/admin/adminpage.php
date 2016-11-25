                <div class="row" >
                    <!-- <div class="col-md-9 col-sm-12 col-xs-12"> -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           รายการประกาศ
                        </div>
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
                                            <td><?php echo anchor("admin/admin_signin/edit/".$r['property_id'],"แก้ไข");}?></td>
                                        </tr>
                                    </tbody>
                                </table>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
