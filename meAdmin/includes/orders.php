<div class="row">
                                                    <?php
                                      $s= "select * from `sales`";
                                      $s_result = $db->query($s);
                                               ?>
                                                   <?php
                                                            $blog_result ="";
                                                            if(mysqli_num_rows($s_result)< 1){
                                                                $blog_result ="No Records Yet ";
                                                                 }
                                                            else{
                                                             ?>
                                                    <div class="col-xl-12 col-lg-12 col-md-12 my-4">
                                                       				<div class="card">
                                                                                    <div class="card-header">
                                                                                        THIS WEEK ORDERS
                                                                                    </div>
                                                                                    
									<div class="card-body">
                                                                           
										<div class="table-responsive">
											<table class="table table-bordered card-table table-vcenter text-nowrap" id="datatable">
												<thead>
													<tr>
                                                                                                                <th>S/N</th>
                                                                                                                <th>TRANS REF</th>
                                                                                                                <th>DATE</th>
                                                                                                                <th>AMOUNT PAID</th>
                                                                                                                <th>PAYMENT METHOD</th>
                                                                                                                <th>STATUS</th>
														<th>NAME</th>
                                                                                                                <th>PHONE</th>
                                                                                                                <th>EMAIL</th>
                                                                                                                <th>ACTION</th>
													       </tr>
												     </thead>
												<tbody>
                                                                                        <?php 
                                                                                        $i=1;
                                                                                        while($row_b = $s_result->fetch_assoc()) {
                                                                                         $s_name=$row_b['name'];
                                                                                        $s_phone =$row_b['phone'];
                                                                                         $s_email =$row_b['email'];
                                                                                         $s_meth=$row_b['meth'];
                                                                                          $s_date=$row_b['date'];
                                                                                          $s_amount = $row_b['amount'];
                                                                                          $s_country = $row_b['city'];
                                                                                          $s_state = $row_b['state'];
                                                                                          $s_address = $row_b['address'];
                                                                                          $s_order_id = $row_b['order_id'];
                                                                                          $dis = $row_b['dis'];
                                                                                          $delivery = $row_b['delivery'];
                                                                                          $status = $row_b['status'];
                                                                                          $s_ref = $row_b['ref'];
                                                                                          $s_id=$row_b['s_id'];
                                                                                         $s_date=date("d M,Y",strtotime($s_date));
                                                                                         
                                                                                             ?>
													<tr>
                                                                                                            <td><?php echo $i++;?></td>
														
                                                                                                               <td><?php echo $s_ref;?></td>
                                                                                                               <td><?php echo $s_date;?></td>
                                                                                                               <td>&#8358;<?= number_format($s_amount,2)?></td>
                                                                                                                <td><?php echo $s_meth;?></td>
                                                                                                                <td><?php echo $status;?></td>
                                                                                                                
														<td>
													      <a class="font-weight-normal1"><?php echo $s_name;?></a>
														</td>
                                                                                                                <td><?php echo $s_phone;?></td>
                                                                                                                <td><?php echo $s_email;?></td>
														<td>
                                                                                                                  <div class="btn-list list-tab">
                                                                                                                        <a href="invoice?w=<?php echo $s_id;?>" class="btn btn-icon btn-primary" onclick="return confirm('Are you sure you want to View this?')"><i class="fa fa-eye"></i> View Invoice</a>
                                                                                                                       
                                                                                                                     </div>  
                                                                                                                    
                                                                                                                </td>
                                                                                                 	</tr>
                                                                                                    <?php }?>
													
													
												</tbody>
											</table>
										</div>
									</div>
                                                                
                                                                       </div>
                                                    
						</div>
                                                 <?php }?>
                                              </div>