
<?php
include 'includes/head.php';
?>
<?php
include '../action/update/printing-update.php';
include '../action/update/price-update.php';
?>

 <?php
 $print= "select * from `print`";
 $print_result = $db->query($print);
 
 $payout = "select * from `payout`";
 $payout_result = $db->query($payout);
         ?>
	<body class="app sidebar-mini">
		<!-- End Switcher -->
		<?php
include 'includes/preloader.php';
?>
		<!-- /GLOBAL-LOADER -->

		<!-- Page -->
		<div class="page">
			<div class="page-main">
                        	<?php
                                  include 'includes/side-bar.php';
                                     ?>
				<!--aside closed-->
				<!-- App-Content -->
				<div class="app-content main-content">
					<div class="side-app">

				<?php
                                  include 'includes/nav.php';
                                     ?>	
                                            
                                            <?php
                                            $price_msg ="";
                                           $update_print_msg ="";
                                           if(isset($_GET['print_s'])){
                                               $updat_print_msg = "<div class='alert alert-success' role='alert'><button type='button' class='btn-close' data-bs-dismiss='alert' aria-hidden='true'>×</button>
											<i class='fa fa-check-circle-o me-2' aria-hidden='true'></i>Content updated Successfully</div> ";
                                                       
                                           }
                                           elseif (isset ($_GET['print_d'])){
                                            $update_print_msg = "<div class='alert alert-success' role='alert'><button type='button' class='btn-close' data-bs-dismiss='alert' aria-hidden='true'>×</button>
											<i class='fa fa-check-circle-o me-2' aria-hidden='true'></i> DELETED Successfully</div> ";
                                                 
                                        }
                                        elseif (isset ($_GET['price_u'])){
                                            $price_msg = "<div class='alert alert-success' role='alert'><button type='button' class='btn-close' data-bs-dismiss='alert' aria-hidden='true'>×</button>
											<i class='fa fa-check-circle-o me-2' aria-hidden='true'></i> PRICE UPDATED Successfully</div> ";
                                                 
                                        }
                                        
                                           ?>
                        	<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
							<h4 class="page-title mb-0 text-primary">PRINTING SERVICES</h4>
							</div>
						</div>
						<!--End Page header-->

						
						<!--Row-->
						<div class="row">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 my-5">
							<div class="card mb-lg-0">
									<div class="card-header">
										<h3 class="card-title text-center">H2 and P Text [4]</h3>
									</div>
									<div class="card-body">
                                                                            <?php echo $update_print_msg?>
                                                                            
										<div class="pt-2">
                                                                                    <form action="" method="POST">
											<div class="form-group">
                                                                                            <textarea class="form-control" name="package-h-text" rows="6" placeholder="Page Header Text"><?php echo $print_page_h?></textarea>
											</div>
											
											<div class="form-group">
											<textarea class="form-control" name="package-p-text" rows="6" placeholder="Paragraph Text"><?php echo $print_page_p?></textarea>
											</div>
                                                                                        
                                                                                    <button type="submit" name="update-print-text" class="btn btn-primary">Update Content</button>
                                                                                    </form>
										</div>
									</div>
								</div>	
                                                            </div>
                                                    <div class="col-xl-12 col-lg-12 col-md-12">
							<div class="card">
									<div class="card-header text-center">
										<h3 class="card-title">PRINTING PRICES</h3>
									</div>
									<div class="card-body">
                                                                            <?php
                                                                            echo $price_msg;
                                                                            ?>
                                                                            <form method="POST" enctype="multipart/form-data">
										<div class="row">
											<div class="col-sm-6 col-md-6">
												<div class="form-group">
													<label class="form-label">Black and white Price <span class="text-red">*</span></label>
                                                                                                        <input type="number" class="form-control" placeholder="Black and white Price" name="b_w_p" value="<?php echo $b_w_p;?>">
												</div>
											</div>
											<div class="col-sm-6 col-md-6">
												<div class="form-group">
													<label class="form-label">Colored Printing Price <span class="text-red">*</span></label>
                                                                                                        <input type="number" class="form-control" placeholder="Colored Printing Price" name="c_p_p" value="<?php echo $c_p_p;?>">
												</div>
											</div>
											<div class="col-sm-6 col-md-6">
												<div class="form-group">
													<label class="form-label">Within State Delivery Fee<span class="text-red">*</span></label>
                                                                                                        <input type="number" class="form-control" placeholder="Within State Delivery" name="w_s_d" value="<?php echo $w_s_d;?>">
												</div>
											</div>
											<div class="col-sm-6 col-md-6">
												<div class="form-group">
													<label class="form-label">Inter-State Delivery Fee <span class="text-red">*</span></label>
                                                                                                        <input type="number" class="form-control" placeholder="Inter-State Delivery Fee" name="i_s_d" value="<?php echo $i_s_d;?>">
												</div>
											</div>
											<div class="col-sm-6 col-md-6">
												<div class="form-group">
													<label class="form-label">Spiral Binding Price <span class="text-red">*</span></label>
                                                                                                        <input type="number" class="form-control" placeholder="Spiral Binding Price" name="s_b_p" value="<?php echo $s_b_p;?>">
												</div>
											</div>
                                                                                    <div class="col-sm-6 col-md-6">
												<div class="form-group">
													<label class="form-label">Slide Binding Price <span class="text-red">*</span></label>
                                                                                                        <input type="number" class="form-control" placeholder="Slide Binding Price" name="slide_binding" value="<?php echo $slide_price;?>">
												</div>
											</div>
                                                                                    
                                                                                    <div class="col-sm-6 col-md-6">
												<div class="form-group">
													<label class="form-label">Colored Photocopy price <span class="text-red">*</span></label>
                                                                                                        <input type="number" class="form-control" placeholder="Colored Photocopy price" name="c_ph_p" value="<?php echo $c_ph_p;?>">
												</div>
											</div>
                                                                                    <div class="col-sm-6 col-md-6">
												<div class="form-group">
													<label class="form-label">Black and white photocopy Price <span class="text-red">*</span></label>
                                                                                                        <input type="number" class="form-control" placeholder="Black and white photocopy Price" name="b_w_ph_p" value="<?php echo $b_w_ph_p;?>">
												</div>
											</div>
                                                                                    
											 <div class="col-sm-6 col-md-6">
												<div class="form-group">
													<label class="form-label">Envelope Price <span class="text-red">*</span></label>
                                                                                                        <input type="number" class="form-control" placeholder="Envelope Price" name="envelope" value="<?php echo $envelope_price;?>">
												</div>
											</div>
											
                                                                                    
											
                                                                                    <div class="col-md-12">
                                                                                    <div class="form-group text-center mb-3">
                                                                                     <button type="submit" name="update-price" class="btn btn-primary btn-lg w-100 br-7"><i class="fa fa-edit me-2"></i>Update</button>
														</div>
                                                                                    
											</div>
										</div>
                                                                        </form>
									</div>
								</div>
                                                            
                                                            
                                                            
                                                            
							</div>
                                                    
                                                    
                                                    
                                                    
                                                    
				         <?php
                                                            $blog_result ="";
                                                            if(mysqli_num_rows($print_result)< 1){
                                                                $blog_result ="No Records Yet ";
                                                                 }
                                                            else{
                                                             ?>
                                                    <div class="col-xl-12 col-lg-12 col-md-12 my-4">
                                                       				
                                                                            <?php while($row_pay = $payout_result->fetch_assoc()) {
                                                                                        $device_id=$row_pay['session_id'];
                                                                                        $pay_name=$row_pay['name'];
                                                                                         $pay_State=$row_pay['state'];
                                                                                         $pay_lga=$row_pay['lga'];
                                                                                          $pay_address=$row_pay['address'];
                                                                                          $pay_phone=$row_pay['phone'];
                                                                                          $pay_email=$row_pay['email'];
                                                                                           $pay_comment=$row_pay['comment'];
                                                                                           $pay_amount=$row_pay['amount'];
                                                                                           $pay_date=$row_pay['date'];
                                                                                          $pay_id=$row_pay['id'];
                                                                                          $pay_date=date("d M,Y",strtotime($pay_date));
                                                                                            ?>
                                                                            <div class="card">
									<div class="card-body">
                                                                            <div class="row">
                                                                                <div class="col-3 col-md-4 col-sm-6"><strong>DATE:</strong> <?php echo $pay_date;?></div>
                                                                                <div class="col-3 col-md-4 col-sm-6"><strong>DEVICE ID:</strong> <?php echo $device_id;?></div>
                                                                                <div class="col-3 col-md-4 col-sm-6"><strong>TOTAL AMOUNT:</strong> &#8358;<?= number_format($pay_amount,2)?></div>
                                                                                <div class="col-3 col-md-4 col-sm-6"><strong>ADDRESS:</strong> <?php echo $pay_address;?> </div>
                                                                                <div class="col-3 col-md-4 col-sm-6"><strong>STATE:</strong> <?php echo $pay_State;?> </div>
                                                                                <div class="col-3 col-md-4 col-sm-6"><strong>L.G.A:</strong> <?php echo $pay_lga;?> </div>
                                                                                <div class="col-3 col-md-4 col-sm-6"><strong>NAME:</strong> <?php echo $pay_name;?></div>    
                                                                                <div class="col-3 col-md-4 col-sm-6"><strong>PHONE NUMBER:</strong> <?php echo $pay_phone;?></div>
                                                                                <div class="col-3 col-md-4 col-sm-6"><strong>EMAIL:</strong> <?php echo $pay_email;?></div>
                                                                                <div class="col-3 col-md-4 col-sm-6"><strong>COMMENT:</strong>  <?php echo $pay_comment;?></div>
                                                                            </div>
                                                                            <hr>
                                                                            <div class="table-responsive">
											<table class="table table-bordered" id="datatable4t">
												<thead>
													<tr>
														<th>DOCUMENT</th>
														<th>PAGES</th>
														<th>COST OF PRINTING</th>
                                                                                                                <th>NUMBER OF COPIES</th>
                                                                                                                <th>PRINTING TYPE</th>
														<th>STYLE</th>
                                                                                                                <th>BINDING TYPE</th>
														<th>ENVELOPE?</th>
														
													</tr>
												</thead>
                                                                                             <tbody>
                                                                                              <?php
                                                                                          $print= "select * from `print` where `session_id` = '$device_id'";
                                                                                          $print_result = $db->query($print);
                                                                                         while($row_p = $print_result->fetch_assoc()) {
                                                                                         $document=$row_p['document'];
                                                                                         $pages=$row_p['pages'];
                                                                                         $num_copy=$row_p['num_copy'];
                                                                                         $printing_type=$row_p['type'];
                                                                                         $printing_cost=$row_p['cost'];
                                                                                         $printing_style=$row_p['style'];
                                                                                         $envelope=$row_p['envelope'];
                                                                                         $binding_type=$row_p['binding_type'];
                                                                                         $id=$row_p['id'];
                                                                                             ?>  
                                                                                                 
                                                                                                       <tr>
														<td>
                                                                                                                  <?php echo $document;?>.pdf<br>
                                                                                                                  <a href="../print/<?php echo $document;?>.pdf" download="" class=""><i class="bx bx-download me-2 text-primary"></i></a>
														</td>
														<td><?php echo $pages;?></td>
														<td><?php echo $printing_cost;?></td>
														<td><?php echo $num_copy;?></td>
                                                                                                                <td><?php echo $printing_type;?></td>
														<td><?php echo $printing_style;?></td>
                                                                                                                <td><?php echo $binding_type;?></td>
                                                                                                                <td><?php echo $envelope;?></td>
                                                                                                              
													</tr>
                                                                                                     <?php
                                                                                                   }
                                                                                                   ?>
												</tbody>
                                                                                                
											</table>
                                                                                 <hr>
										</div>
                                                                            
									</div>
                                                                          
                                                                       </div>
                                                                         <?php
                                                                            }
                                                                            ?>    
										
						</div>
                                                 <?php }?>
                                             
                                                
			</div>
			</div>
			<?php
                       include 'includes/footer.php';
                        ?>

		<?php
                include 'includes/foot.php';
                ?>


