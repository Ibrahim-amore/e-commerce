
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
 $faq= "select * from `attribute`";
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
                                           $attr_del_msg ="";
                                           if(isset($_GET['package_s'])){
                                               $update_package_msg = "<div class='alert alert-success' role='alert'><button type='button' class='btn-close' data-bs-dismiss='alert' aria-hidden='true'>×</button>
											<i class='fa fa-check-circle-o me-2' aria-hidden='true'></i> updated Successfully</div> ";
                                                       
                                           }
                                           elseif (isset ($_GET['attr_d'])){
                                            $attr_del_msg = "<div class='alert alert-success' role='alert'><button type='button' class='btn-close' data-bs-dismiss='alert' aria-hidden='true'>×</button>
											<i class='fa fa-check-circle-o me-2' aria-hidden='true'></i> Attribute Removed Successfully</div> ";
                                                 
                                        }
                                           ?>
                        	<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
							<h4 class="page-title mb-0 text-primary">Product Attribute</h4>
							</div>
						</div>
						<!--End Page header-->

						
						<!--Row-->
						<div class="row">
                                                    				
                                                    
							<div class="col-xl-12 col-lg-12 col-md-12 my-4">
							<div class="card mb-lg-0">
									<div class="card-header">
										<h3 class="card-title text-center">PRODUCT ATTRIBUTE</h3>
									</div>
									<div class="card-body">
                                                                            <?php echo $attr_del_msg?>
                                                                            <?php echo $attr_create_msg;?>
										<div class="pt-2">
                                                                                    <form action="" method="POST">
											 <div class="row">
											<div class="col-sm-6 col-md-6">
												<div class="form-group">
													<label class="form-label">Attribute name <span class="text-red">*</span></label>
                                                                                                        <input type="text" class="form-control" placeholder="Attribute Name (e.g color)" name="attr_name">
												</div>
											</div>
											<div class="col-sm-6 col-md-6 mt-5">
												<button type="submit" name="add_attr" class="btn btn-primary py-3">Add Attribute</button>
											
                                                                                            
                                                                                            
                                                                                        </div>
                                                                                    
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
														
														<th>ATTRIBUTE</th>
                                                                                                                
														<th>ACTION</th>
														
													</tr>
												</thead>
												<tbody>
                                                                                                    <?php 
                                                                                                    $i=1;
                                                                                                    while($row_p = $package_result->fetch_assoc()) {
                                                                                         $attr_name=$row_p['attr_name'];
                                                                                          $a_id=$row_p['id'];
                                                                                          
                                                                                             ?>
													<tr>
														<td>
													      <a class="font-weight-normal1"><?php  
                                                                                                                echo $i++;                                                                                     
                                                                                                              ?></a>
														</td>
                                                                                                                
														<td><?php echo $attr_name?></td>
                                                                                                                <td>
                                                                                                                    <div class="btn-list list-tab">
                                                                                                                        <a href="../action/delete/delete-attribute.php?attr=<?php echo $a_id;?>PHJj_{}FV546JL<?php echo md5(rand())?>" class="btn btn-icon btn-danger" onclick="return confirm('Are you sure you want to remove this BRAND NAME?')"><i class="fa fa-trash"></i></a>
                                                                                                                        <a href="variation?var=<?php echo $attr_name;?>&varid=<?php echo $a_id?>" class="btn btn-icon btn-primary" onclick="return confirm('Are you sure you want to Add Variations to this attribute?')"><i class="fa fa-plus"></i></a>
                                                                                                                        
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
