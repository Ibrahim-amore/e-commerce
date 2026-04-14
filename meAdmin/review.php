
<?php
include 'includes/head.php';
?>

 <?php
 $id=$_GET['w'];
 $faq= "select * from `reviews` where id = '$id'";
 $r_result = $db->query($faq);
 $row_r = $r_result->fetch_assoc();
 $name =$row_r['name'];
  $subject =$row_r['subject'];
   $phone =$row_r['phone'];
    $email =$row_r['email'];
     $date =$row_r['date'];
 $comment=$row_r['comment'];
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
							<h4 class="page-title mb-0 text-primary">Review</h4>
							</div>
						</div>
						<!--End Page header-->

						
						<!--Row-->
						<div class="row">
                                                    				
                                                    
							<div class="col-xl-12 col-lg-12 col-md-12 my-4">
							<div class="card mb-lg-0">
									
									<div class="card-body">
                                                                            
										<div class="pt-2">
                                                                                 	 <div class="row">
											<div class="col-sm-6 col-md-12">
												<div class="form-group">
													<label class="form-label">Customer's Name </label>
                                                                                                        <input type="text" class="form-control" value="<?php echo $name;?>">
												</div>
                                                                                            <div class="form-group">
													<label class="form-label">Message Subject </label>
                                                                                                        <input type="text" class="form-control" value="<?php echo $subject;?>">
												</div>
											</div>
											<div class="col-sm-12 col-md-12">
												 <div class="form-group">
											<textarea class="form-control content" rows="6"><?php echo $comment;?></textarea>
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
                       include 'includes/footer.php';
                        ?>

		<?php
                include 'includes/foot.php';
                ?>
