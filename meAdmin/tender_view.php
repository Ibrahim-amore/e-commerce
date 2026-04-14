<?php
include 'includes/head.php';
?>
<?php
include '../action/update/view-tender.php';
?>

 
	<body class="app sidebar-mini">
		<!-- End Switcher -->
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
                                            
                                           
                        	<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
							<h4 class="page-title mb-0 text-primary">TENDER VIEW</h4>
							</div>
						</div>
						<!--End Page header-->

						
						<!--Row-->
						<div class="row">
                                                    				
                                                    
							<div class="col-xl-12 col-lg-12 col-md-12 my-4">
							<div class="card mb-lg-0">
									
									<div class="card-body">
                                                                            	<div class="pt-2">
                                                                                    <form action="" method="POST" enctype="multipart/form-data">
											<div class="form-group">
                                                                                            <label class="form-label">NAME</label>
                                                                                            <input type="text" class="form-control" id="name1"  value="<?php echo $bids_name;?>" disabled="">
											</div>
											<div class="form-group">
                                                                                            <label class="form-label">PHONE NUMBER</label>
                                                                                            <input type="text" class="form-control" id="name1"  value="<?php echo $bids_phone;?>" disabled="">
											</div>
                                                                                        <div class="form-group">
                                                                                            <label class="form-label">EMAIL ADDRESS</label>
                                                                                            <input type="text" class="form-control" id="name1"  value="<?php echo $bids_email;?>" disabled="">
											</div>
                                                                                        <div class="form-group">
                                                                                            <label class="form-label">COMPANY</label>
                                                                                            <input type="text" class="form-control" id="name1" required="" value="<?php echo $bids_company;?>" disabled="">
											</div>
                                                                                        <div class="row">
											<div class="col-sm-6 col-md-6">
												<div class="form-group">
													<label class="form-label">CATEGORY <span class="text-red">*</span></label>
                                                                                                        <input type="text" class="form-control"  value="<?php echo $bids_category;?>" disabled="">
												</div>
											</div>
											<div class="col-sm-6 col-md-6">
												<div class="form-group">
													<label class="form-label">DEADLINE <span class="text-red">*</span></label>
                                                                                                        <input type="date" class="form-control"  name="deadline" value="<?php echo $bids_deadline;?>" disabled="">
												</div>
											</div>
                                                                                            
                                                                                        <div class="form-group">
                                                                                            <textarea class="form-control" disabled="" name="message" rows="6"><?php echo $bids_message;?></textarea>
											</div>
                                                                                            
                                                                                        </div>
                                                                                    <div class="d-flex flex-wrap gap-2">
                                                                                        <a href="bid_image/<?php echo $bids_document;?>" download="<?php echo $bids_name;?>Ducuments" class="btn btn-primary"><i class="bx bx-download me-2"></i> Download Document</a>
                                                                                           </div>
                                                                                    </form>
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



