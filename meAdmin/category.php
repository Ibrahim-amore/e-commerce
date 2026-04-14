
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
 $faq= "select * from `category`";
 $cat_result = $db->query($faq);
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
                                           
                                           $cat_del_msg ="";
                                           if(isset($_GET['package_s'])){
                                               $update_package_msg = "<div class='alert alert-success' role='alert'><button type='button' class='btn-close' data-bs-dismiss='alert' aria-hidden='true'>×</button>
											<i class='fa fa-check-circle-o me-2' aria-hidden='true'></i> updated Successfully</div> ";
                                                       
                                           }
                                           elseif (isset ($_GET['cat_d'])){
                                            $cat_del_msg = "<div class='alert alert-success' role='alert'><button type='button' class='btn-close' data-bs-dismiss='alert' aria-hidden='true'>×</button>
											<i class='fa fa-check-circle-o me-2' aria-hidden='true'></i> Category Removed Successfully</div> ";
                                                 
                                        }
                                           ?>
                        	<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
							<h4 class="page-title mb-0 text-primary">PRODUCTS CATEGORY</h4>
							</div>
						</div>
						<!--End Page header-->

						
						<!--Row-->
						<div class="row">
                                                    				
                                                    
							<div class="col-xl-12 col-lg-12 col-md-12 my-4">
							<div class="card mb-lg-0">
									<div class="card-header">
										<h3 class="card-title text-center">PRODUCTS CATEGORY</h3>
									</div>
									<div class="card-body">
                                                                            <?php echo $cat_del_msg?>
                                                                            <?php echo $cat_create_msg;?>
										<div class="pt-2">
                                                                                    <form action="" method="POST" enctype="multipart/form-data">
											 <div class="row">
											<div class="col-sm-6 col-md-6">
												<div class="form-group">
													<label class="form-label">Product category name <span class="text-red">*</span></label>
                                                                                                        <input type="text" class="form-control" placeholder="Category Name (e.g body lotion)" name="cat_name">
												</div>
											</div>
											<div class="col-sm-6 col-md-6">
												<div class="form-group">
													<label class="form-label">Category Image(400 by 400) <span class="text-red">*</span></label>
													<div class="input-group file-browser mb-5">
                                                                                                            
											<input type="text" class="form-control browse-file" placeholder="choose" readonly>
											<label class="input-group-text btn btn-primary">
                                                                                            Browse your Files <input type="file" class="file-browserinput" style="display: none;" name="attachment6" >
											</label>
										</div>
												</div>
											</div>
                                                                                            
                                                                                            
                                                                                        </div>
                                                                                    <button type="submit" name="submit_cat" class="btn btn-primary">Save Category</button>
                                                                                    </form>
										</div>
									</div>
								</div>	
                                                            </div>
                                                                  <?php
                                                            $blog_result ="";
                                                            if(mysqli_num_rows($cat_result)< 1){
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
														<th>CATEGORY IMAGE</th>
														<th>CATEGORY NAME</th>
                                                                                                                
														<th>ACTION</th>
														
													</tr>
												</thead>
												<tbody>
                                                                                                    <?php 
                                                                                                    $i=1;
                                                                                                    while($row_c = $cat_result->fetch_assoc()) {
                                                                                         $c_name=$row_c['cat_name'];
                                                                                         $c_image=$row_c['image'];
                                                                                        
                                                                                          $c_id=$row_c['id'];
                                                                                          
                                                                                             ?>
													<tr>
														<td>
													      <a class="font-weight-normal1"><?php  
                                                                                                                echo $i++;                                                                                     
                                                                                                              ?></a>
														</td>
                                                                                                                <td><img class="avatat avatar-md brround me-2" src="category_image/<?php echo $c_image;?>" alt="img"></td>
														
														<td><?php echo $c_name?></td>
                                                                                                                <td>
                                                                                                                    <div class="btn-list list-tab">
                                                                                                                        <a href="../action/delete/delete-cat.php?cat=<?php echo $c_id;?>PHJj_{}FV546JL<?php echo md5(rand())?>" class="btn btn-icon btn-danger" onclick="return confirm('Are you sure you want to remove this Product Category?')"><i class="fa fa-trash"></i></a>
                                                                                                                        
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
