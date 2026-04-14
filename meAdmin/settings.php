
<?php
include 'includes/head.php';
?>
<?php
include '../action/update/update-email.php';
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
                                           $email_msg ="";
                                           if(isset($_GET['e_u'])){
                                               $email_msg = "<div class='alert alert-success' role='alert'><button type='button' class='btn-close' data-bs-dismiss='alert' aria-hidden='true'>×</button>
											<i class='fa fa-check-circle-o me-2' aria-hidden='true'></i>Settings updated Successfully</div> ";
                                                       
                                           }
                                           ?>
                        	<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
							<h4 class="page-title mb-0 text-primary">Email Notification Settings</h4>
							</div>
                                                    
						</div>
						<!--End Page header-->

						
						<!--Row-->
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12">
							<div class="card">
                                                            <?php
                                                    echo $email_msg;
                                                    ?>
									<div class="card-body">
                                                                            <form method="POST">
										<div class="row">
                                                                                    
											<div class="col-md-12">
												<div class="form-group">
													<label class="form-label">First Subscription Notice [days]<span class="text-red">*</span></label>
                                                                                                        <input type="number" class="form-control" placeholder="14 days" name="first" value="<?php echo $first_notice;?>">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="form-label">Second Subscription Notice [days]<span class="text-red">*</span></label>
                                                                                                        <input type="number" class="form-control" placeholder="3 days" name="second" value="<?php echo $second_notice;?>">
												</div>
											</div>
											
											<div class="col-md-12">
                                                                                    <div class="form-group text-center mb-3">
                                                                                        <button type="submit" name="settings" class="btn btn-primary btn-lg w-100 br-7"><i class="fa fa-edit me-2"></i>Update</button>
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


