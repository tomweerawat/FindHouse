
                    <div class="col-md-6 panel-body" style="padding-bottom:30px;">
                      <div class="col-md-12">
                        <div class="panel-body">
                          <div class="form-group form-animate-text" style="margin-top:40px !important;">
														<div class="table-responsive-vertical shadow-z-1">
														<!-- Table starts here -->
														<table id="table" class="table table-hover table-mc-light-blue" align="center">
																<thead>
																	<tr>
																		<th>เลขที่ประกาศ</th>
																		<th>ชื่อประกาศ</th>
																		<th>สถานะการประกาศ</th>
																		<th>แก้ไข</th>
																	</tr>
																</thead>
																<tbody>
																	<?php
																		if(count($rs)==0){
																			echo"<tr><td colspan='4' align='center'>--no data--</td></tr>";
																		}else{
																			foreach($rs as $r){
																				echo "<tr>";
																				echo "<td align='center'>".$r['property_id']."</td>";
																				echo "<td align='center'>".$r['propertyname']."</td>";
																				echo "<td align='center'>".$r['activation']."</td>";
																				echo "<td align='center'>";
																				echo anchor("admin/admindashboard/edit/".$r['property_id'],"edit");
																				echo "</td>";
																				echo "</tr>";
																			}
																		}
																	?>
																</tbody>
															</table>
														</div>
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
