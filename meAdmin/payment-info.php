
<?php
include 'includes/head.php';
?>
<?php
include '../action/update/update-payment-info.php';
?>
	<body class="app sidebar-mini">
		<!-- End Switcher -->
		<!-- GLOBAL-LOADER -->
		<?php
                //include 'includes/preloader.php';
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
                                           $payment_msg ="";
                                           if(isset($_GET['p_i'])){
                                               $payment_msg = "<div class='alert alert-success' role='alert'><button type='button' class='btn-close' data-bs-dismiss='alert' aria-hidden='true'>×</button>
											<i class='fa fa-check-circle-o me-2' aria-hidden='true'></i>Payment Credentials updated Successfully</div> ";
                                                       
                                           }
                                           ?>
                        	<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
							<h4 class="page-title mb-0 text-primary">FLUTTER WAVE SETUP</h4>
							</div>
                                                    <?php
                                                    echo $payment_msg;
                                                    ?>
						</div>
						<!--End Page header-->

						
						<!--Row-->
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12">
							<div class="card">
									<div class="card-header text-center">
										<h3 class="card-title">Payment Setup</h3>
									</div>
									<div class="card-body">
                                                                            <form method="POST">
										<div class="row">
                                                                                    
											<div class="col-md-12">
												<div class="input-group mb-4">
                                                                                                    <label class="form-label">SECRET KEY <span class="text-red">*</span></label>
															<div class="input-group" id="Password-toggle">
																<a href="#" class="input-group-text">
																<i class="fe fe-eye" aria-hidden="true"></i>
																</a>
                                                                                                                            <input class="form-control" type="password" value="<?php echo $s_k;?>" name="secret_key">
															</div>
														</div>
											</div>
											<div class="col-md-12">
												<div class="input-group mb-4">
                                                                                                    <label class="form-label">PUBLIC KEY <span class="text-red">*</span></label>
															<div class="input-group" id="Password-toggle">
																<a href="#" class="input-group-text">
																<i class="fe fe-eye" aria-hidden="true"></i>
																</a>
                                                                                                                            <input class="form-control" type="password" value="<?php echo $p_k;?>" name="public_key">
															</div>
														</div>
											</div>
											<div class="col-md-12">
												<div class="input-group mb-4">
                                                                                                    <label class="form-label">ENCRYPTION KEY <span class="text-red">*</span></label>
															<div class="input-group" id="Password-toggle">
																<a href="#" class="input-group-text">
																<i class="fe fe-eye" aria-hidden="true"></i>
																</a>
                                                                                                                            <input class="form-control" type="password" value="<?php echo $e_k;?>" name="encryption_key">
															</div>
														</div>
											</div>
											<div class="col-md-12">
                                                                                    <div class="form-group text-center mb-3">
                                                                                                                    <button type="submit" name="update-payment" class="btn btn-primary btn-lg w-100 br-7"><i class="fa fa-edit me-2"></i>Update</button>
														</div>
                                                                                    
											</div>
                                                                                </div>
                                                                                </form>
											
										</div>
									</div>
								</div>	
                                                            
                                                            
							</div>
						</div>
                                              
                                                
			</div>
			</div>
			<?php
                       include 'includes/footer.php';
                        ?>

		<?php
                include 'includes/foot.php';
                ?>
