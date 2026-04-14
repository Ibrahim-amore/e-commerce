
<?php
include 'includes/head.php';
?>
<?php
include '../action/update/update-user.php';
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
                                           $user_msg ="";
                                           if(isset($_GET['u_u'])){
                                               $user_msg = "<div class='alert alert-success' role='alert'><button type='button' class='btn-close' data-bs-dismiss='alert' aria-hidden='true'>×</button>
											<i class='fa fa-check-circle-o me-2' aria-hidden='true'></i>User Credentials updated Successfully</div> ";
                                                       
                                           }
                                           ?>
                        	<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
							<h4 class="page-title mb-0 text-primary">ADMIN LOGIN DETAILS</h4>
							</div>
                                                    
						</div>
						<!--End Page header-->

						
						<!--Row-->
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12">
							<div class="card">
                                                            <?php
                                                    echo $user_msg;
                                                    ?>
									<div class="card-header text-center">
										<h3 class="card-title">LOGIN CREDENTIALS</h3>
									</div>
									<div class="card-body">
                                                                            <form method="POST">
										<div class="row">
                                                                                    
											<div class="col-md-12">
												<div class="form-group">
													<label class="form-label">Username <span class="text-red">*</span></label>
                                                                                                        <input type="text" class="form-control" placeholder="username" name="username"value="<?php echo $username;?>">
												</div>
											</div>
											<div class="col-md-12">
												<div class="input-group mb-4">
                                                                                                    <label class="form-label">Password <span class="text-red">*</span></label>
															<div class="input-group" id="Password-toggle">
																<a href="#" class="input-group-text">
																<i class="fe fe-eye" aria-hidden="true"></i>
																</a>
                                                                                                                            <input class="form-control" type="password" name="password" value="<?php echo $password;?>">
															</div>
														</div>
											</div>
											
											<div class="col-md-12">
                                                                                    <div class="form-group text-center mb-3">
                                                                                        <button type="submit" name="change-user" class="btn btn-primary btn-lg w-100 br-7"><i class="fa fa-edit me-2"></i>Update</button>
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

