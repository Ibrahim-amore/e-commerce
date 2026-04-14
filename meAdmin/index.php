<?php
include 'includes/head2.php';
 ?>
<?php
include '../action/login/login.php';
?>
 <?php
 $login_msg ="";
 if(isset ($_GET['n'])){
 $login_msg = " <div class='alert alert-danger' role='alert'><button type='button' class='btn-close' data-bs-dismiss='alert' aria-hidden='true'>×</button>
											<i class='fa fa-frown-o me-2' aria-hidden='true'></i>Incorrect Credentials</div>";                      
                  }
 
 ?>  
<body>
     <div id="global-loader">
               <?php
       //include 'includes/preloader.php';
                ?>
            </div>
                <!-- /GLOBAL-LOADER -->

		<div class="register1">
			<div class="page">
				<div class="page-single">
					<div class="container">
						<div class="row">
							<div class="col mx-auto">
                                                            
								<div class="row justify-content-center">
									<div class="col-xl-7 col-lg-12">
                                                                           
										<div class="row p-0 m-0">
											<div class="col-md-8 col-lg-8 p-0 mx-auto">
                                                                                             <?php echo $login_msg;?>
											<div class="bg-white text-dark br-7 br-tl-0 br-bl-0">
                                                                                            <div class="card-body" style="border-radius:20px;">
													<div class="text-center mb-3">
													         <img src="logo/<?php echo $page_logo;?>" class="header-brand-img desktop-lgo" alt="Azea logo">
													</div>
                                                                                                <form class="mt-5" method="POST" action="">
														<div class="input-group mb-4">
																<div class="input-group-text">
																	<i class="fe fe-user"></i>
																</div>
                                                                                                                    <input type="text" class="form-control" placeholder="Username" name="username" required="">
														</div>
														<div class="input-group mb-4">
															<div class="input-group" id="Password-toggle">
															<a href="#" class="input-group-text">
															<i class="fe fe-eye" aria-hidden="true"></i>
															</a>
                                                                                                                            <input class="form-control" type="password" placeholder="Password" name="password" required="">
														</div>
														</div>
														
														<div class="form-group text-center my-5">
                                                                                                                <button type="submit" name="login" class="btn btn-primary btn-lg w-100 br-7">Log In</button>
														</div>
                                                                                                            </form>
												</div>
											</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

        </div>

		<?php
                include 'includes/foot.php';
                ?>