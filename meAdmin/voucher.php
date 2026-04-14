
<?php
include 'includes/head.php';
?>
<?php
include '../action/update/update-coupon.php';
?>
<?php
//include '../action/create/create.php';
?>
 <?php
 $faq= "select * from `voucher`";
 $v_result = $db->query($faq);
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
                                            
                                           
                        	<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
							<h4 class="page-title mb-0 text-primary">COUPON CODE</h4>
							</div>
						</div>
						<!--End Page header-->

						
						<!--Row-->
						<div class="row">
                                                    				
                                                    
							<div class="col-xl-12 col-lg-12 col-md-12 my-4">
							<div class="card mb-lg-0">
									<div class="card-header">
										<h3 class="card-title text-center"> CREATE COUPON</h3>
									</div>
									<div class="card-body">
                                                                            <?php echo $ms_c;?>
                                                                            
										<div class="pt-2">
                                                                                    <form action="" method="POST">
											 <div class="row">
											<div class="col-sm-6 col-md-12">
												<div class="form-group">
													<label class="form-label">Coupon Code <span class="text-red">*</span></label>
                                                                                                        <input type="text" class="form-control" placeholder="Copen Code (e.g EGFER547JT6)" name="code">
												</div>
											</div>
											<div class="col-sm-6 col-md-12">
												<div class="form-group">
													<label class="form-label">Value(e.g 10%) <span class="text-red">*</span></label>
                                                                                                        <input type="number" min="1" class="form-control" placeholder="enter a number here" name="value">
												</div>
											</div>
                                                                                            
                                                                                            
                                                                                        </div>
                                                                                    <button type="submit" name="submit_coupon" class="btn btn-primary">Update Coupon</button>
                                                                                    </form>
										</div>
									</div>
								</div>	
                                                            </div>
                                                    <?php
                                                            $blog_result ="";
                                                            if(mysqli_num_rows($v_result)< 1){
                                                                $blog_result ="No Records Yet ";
                                                                 }
                                                            else{
                                                             ?>
                                                    <div class="col-xl-12 col-lg-12 col-md-12 my-4">
                                                       				<div class="card">
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-bordered card-table table-vcenter text-nowrap" id="datatable">
												<thead>
													<tr>
														<th>S/N</th>
														<th>COUPON CODE</th>
														<th>VALUE</th>
                                                                                                                
														
														
													</tr>
												</thead>
												<tbody>
                                                                                                    <?php 
                                                                                                    $i=1;
                                                                                                    while($row_c = $v_result->fetch_assoc()) {
                                                                                         $code=$row_c['code'];
                                                                                         $value=$row_c['value'];
                                                                                        $date=$row_c['date'];
                                                                                          $id=$row_c['id'];
                                                                                          $date=date("d M,Y",strtotime($date));
                                                                                          
                                                                                             ?>
													<tr>
														<td>
													      <a class="font-weight-normal1"><?php  
                                                                                                                echo $i++;                                                                                     
                                                                                                              ?></a>
														</td>
                                                                                                                <td><?php echo $code;?></td>
														
														<td><?php echo $value;?>%</td>
                                                                                                                
														
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
			</div>
			<?php
                       include 'includes/footer.php';
                        ?>

		<?php
                include 'includes/foot.php';
                ?>
