<?php
include 'includes/head.php';
?>
<?php
include '../action/update/wholesale-update.php';
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
							<h4 class="page-title mb-0 text-primary">PRODUCT UPDATE</h4>
							</div>
						</div>
						<!--End Page header-->

						
						<!--Row-->
						<div class="row">
                                                    				
                                                  <div class="col-md-12">
								<div class="card">
									<div class="card-body p-0">
										<div class="panel panel-primary">
											<div class=" tab-menu-heading p-0 bg-light">
												<div class="tabs-menu1 ">
													<!-- Tabs -->
													<ul class="nav panel-tabs">
														<li class=""><a href="#tab5" class="active" data-bs-toggle="tab">General</a></li>
														<li><a href="#tab6" data-bs-toggle="tab">Data</a></li>
														
													</ul>
												</div>
											</div>
                                                                                    
                                                                                    <form action="" method="POST" enctype="multipart/form-data">
											<div class="panel-body tabs-menu-body">
												<div class="tab-content">
													<div class="tab-pane active " id="tab5">
											<div class="row">
											<div class="col-sm-12 col-md-12">
												<div class="form-group">
                                                                                              <label class="form-label">Product Name <span class="text-red">*</span></label>
                                                                                              <input type="text" class="form-control" id="name1" name="n" placeholder="product name" required="" value="<?php echo $n;?>">
											</div>
											</div>
                                                                                        <div class="col-sm-12 col-md-12">
												<div class="form-group">
                                                                                                <label class="form-label">Product Category <span class="text-red">*</span></label>
                                                                                                <select class="form-control custom-select select2" name="c" required="">
                                                                                                    
											<option value="<?php echo $c;?>"><?php echo $c;?></option>
                                                                                         <?php 
                                                                                         $cat= "select * from `category`";
                                                                                          $cat1_result = $db->query($cat);
                                                                                         while($row_cat = $cat1_result->fetch_assoc()) {
                                                                                         $cat_img=$row_cat['image'];
                                                                                         $cat_name =$row_cat['cat_name'];
                                                                                         $cat_id=$row_cat['id'];
                                                                                          
                                                                                          ?>
											<option value="<?php echo $cat_name;?>"><?php echo $cat_name;?></option>
                                                                                                   <?php
                                                                                                 }
                                                                                                   ?>             
													</select>
												</div>
                                                                                            </div>
                                                                                           <div class="form-group">
											<textarea class="form-control content_" name="d" rows="6" placeholder="Product description"><?php echo $d;?></textarea>
											</div>
                                                                                            
                                                                                         <div class="col-sm-12 col-md-12">
												<div class="form-group">
													<label class="form-label">Price <span class="text-red">*</span></label>
                                                                                                        <input type="number" class="form-control" placeholder="price" name="p" required="" value="<?php echo $p;?>">
												</div>
											</div>
                                                                                           <div class="col-sm-12 col-md-12">
												<div class="form-group">
													<label class="form-label">Quantity <span class="text-red">*</span></label>
                                                                                                        <input type="number" class="form-control" placeholder="Quantity" name="q" value="<?php echo $q;?>">
												</div>
											</div>   
                                                                                           
                                                                                       <div class="col-sm-12 col-md-2">
                                                                                           <img class="avatat avatar-md brround me-2" src="wholesale_image/<?php echo $image;?>">
											</div>

                                                                                            <div class="col-sm-12 col-md-10">
											<div class="form-group">
											<label class="form-label">Product Image <span class="text-red">*</span></label>
											<div class="input-group file-browser mb-5">
                                                                                        <input type="text" class="form-control browse-file" placeholder="choose" readonly>
											<label class="input-group-text btn btn-primary">
                                                                                        Browse your Files <input type="file" class="file-browserinput" style="display: none;" name="i" >
											</label>
										       </div>
											</div>
											</div>
                                                                                            
                                                                                            
                                                                                        <div class="col-sm-12 col-md-12">
											<button type="submit" name="update_wholesale" class="btn btn-primary"><i class="fe fe-save me-2"></i>Update Product</button>
											</div>
                                                                                        </div>	
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
			<?php
                       include 'includes/footer.php';
                        ?>

		<?php
                include 'includes/foot.php';
                ?>

