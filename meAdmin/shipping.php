
<?php
include 'includes/head.php';
?>
<?php
//include '../action/update/update-package.php';
?>
<?php
include '../action/create/create.php';
?>
 <?php
 $faq= "select * from `delivery`";
 $package_result = $db->query($faq);
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
                                           $update_package_msg ="";
                                           $brand_del_msg ="";
                                           if(isset($_GET['package_s'])){
                                               $update_package_msg = "<div class='alert alert-success' role='alert'><button type='button' class='btn-close' data-bs-dismiss='alert' aria-hidden='true'>×</button>
											<i class='fa fa-check-circle-o me-2' aria-hidden='true'></i> updated Successfully</div> ";
                                                       
                                           }
                                           elseif (isset ($_GET['d_d'])){
                                            $brand_del_msg = "<div class='alert alert-success' role='alert'><button type='button' class='btn-close' data-bs-dismiss='alert' aria-hidden='true'>×</button>
											<i class='fa fa-check-circle-o me-2' aria-hidden='true'></i>State Removed Successfully</div> ";
                                                 
                                        }
                                           ?>
                        	<!--Page header-->
						
						
						<!--Row-->
						<div class="row">
                                                    				
                                                    
							<div class="col-xl-12 col-lg-12 col-md-12 my-4">
							<div class="card mb-lg-0">
									<div class="card-header">
										<h3 class="card-title text-center">DELIVERY FEE SETTINGS</h3>
									</div>
									<div class="card-body">
                                                                            <?php echo $brand_del_msg?>
                                                                            <?php echo $d_msg;?>
										<div class="pt-2">
                                                                                    <form action="" method="POST" enctype="multipart/form-data">
											 <div class="row">
											<div class="col-sm-6 col-md-6">
												<div class="form-group">
                                                                                                <label class="form-label">State<span class="text-red">*</span></label>
                                                                                                <select class="form-control custom-select select2" name="state" required="">
												<option value="" selected="selected">- Select State -</option>
              <option value="Abuja FCT">Abuja FCT</option>
              <option value="Abia">Abia</option>
              <option value="Adamawa">Adamawa</option>
              <option value="Akwa Ibom">Akwa Ibom</option>
              <option value="Anambra">Anambra</option>
              <option value="Bauchi">Bauchi</option>
              <option value="Bayelsa">Bayelsa</option>
              <option value="Benue">Benue</option>
              <option value="Borno">Borno</option>
              <option value="Cross River">Cross River</option>
              <option value="Delta">Delta</option>
              <option value="Ebonyi">Ebonyi</option>
              <option value="Edo">Edo</option>
              <option value="Ekiti">Ekiti</option>
              <option value="Enugu">Enugu</option>
              <option value="Gombe">Gombe</option>
              <option value="Imo">Imo</option>
              <option value="Jigawa">Jigawa</option>
              <option value="Kaduna">Kaduna</option>
              <option value="Kano">Kano</option>
              <option value="Katsina">Katsina</option>
              <option value="Kebbi">Kebbi</option>
              <option value="Kogi">Kogi</option>
              <option value="Kwara">Kwara</option>
              <option value="Lagos">Lagos</option>
              <option value="Nassarawa">Nassarawa</option>
              <option value="Niger">Niger</option>
              <option value="Ogun">Ogun</option>
              <option value="Ondo">Ondo</option>
              <option value="Osun">Osun</option>
              <option value="Oyo">Oyo</option>
              <option value="Plateau">Plateau</option>
              <option value="Rivers">Rivers</option>
              <option value="Sokoto">Sokoto</option>
              <option value="Taraba">Taraba</option>
              <option value="Yobe">Yobe</option>
              <option value="Zamfara">Zamfara</option>
                                </select>
												</div>
											</div>
											<div class="col-sm-6 col-md-6">
										      <div class="form-group">
											<label class="form-label">price<span class="text-red">*</span></label>
                                                                                                        <input type="text" class="form-control" placeholder="Brand Name (e.g 2000)" name="fees" required="">
												</div>
											</div>
                                                                                        </div>
                                                                                    <button type="submit" name="btn_delivery" class="btn btn-primary">Save Shipping</button>
                                                                                    </form>
										</div>
									</div>
								</div>	
                                                            </div>
                                                    <?php
                                                            $blog_result ="";
                                                            if(mysqli_num_rows($package_result)< 1){
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
														<th>ID</th>
														<th>STATE</th>
														<th>DELIVERY FEE</th>
                                                                                                               <th>ACTION</th>
														
													</tr>
												</thead>
												<tbody>
                                                                                                    <?php 
                                                                                                    $i=1;
                                                                                                    while($row_p = $package_result->fetch_assoc()) {
                                                                                         $state=$row_p['state'];
                                                                                         $fees=$row_p['fees'];
                                                                                         $b_id=$row_p['id'];
                                                                                          
                                                                                             ?>
													<tr>
														<td>
													      <a class="font-weight-normal1"><?php  
                                                                                                                echo $i++;                                                                                     
                                                                                                              ?></a>
														</td>
                                                                                                                <td><?php echo $state;?></td>
														
														<td>&#8358;<?= number_format($fees,2)?></td>
                                                                                                                <td>
                                                                                                                    <div class="btn-list list-tab">
                                                                                                                        <a href="../action/delete/dd?delivery=<?php echo $b_id;?>" class="btn btn-icon btn-danger" onclick="return confirm('Are you sure you want to remove this State?')"><i class="fa fa-trash"></i></a>
                                                                                                                        
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
			</div>
			<?php
                       include 'includes/footer.php';
                        ?>

		<?php
                include 'includes/foot.php';
                ?>
