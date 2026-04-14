<?php
include 'includes/head.php';
?>
<?php
include '../action/update/product-update.php';
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
														<li><a href="#tab7" data-bs-toggle="tab">Links</a></li>
														<li><a href="#tab8" data-bs-toggle="tab">Images</a></li>
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
                                                                                              <input type="text" class="form-control" id="name1" name="pn" placeholder="product name" value="<?php echo $pn;?>">
											</div>
											</div>
                                                                                            
                                                                                            
											<div class="col-sm-12 col-md-12">
												<div class="form-group">
													<label class="form-label">Product Tags <span class="text-red">*</span></label>
                                                                                                        <input type="text" class="form-control" placeholder="Product Tags" name="pt" value="<?php echo $pt;?>">
												</div>
											</div>
                                                                                            
                                                                                          
                                                                                           <div class="form-group">
											<textarea class="form-control content_" name="des" rows="6" placeholder="product description"><?php echo $des;?></textarea>
											</div>
                                                                                            <div class="col-sm-12 col-md-12">
												<div class="form-group">
                                                                                              <label class="form-label">Meta Tags <span class="text-red">*</span></label>
                                                                                            <input type="text" class="form-control" id="name1" name="mt" placeholder="meta tags" value="<?php echo $mt;?>">
											</div>
											</div>
                                                                                            
                                                                                            
											<div class="col-sm-12 col-md-12">
												<div class="form-group">
													<label class="form-label">Key Words <span class="text-red">*</span></label>
                                                                                                        <input type="text" class="form-control" placeholder="Meta Key Words" name="kw" value="<?php echo $kw;?>">
												</div>
											</div>
                                                                                            
                                                                                            <div class="col-sm-12 col-md-12">
												<div class="form-group">
                                                                                                <label class="form-label">Product Status <span class="text-red">*</span></label>
                                                                                                <select class="form-control custom-select select2" name="status" >
														<option value="<?php echo $status;?>"><?php echo $status;?></option>
														<option value="active">Active</option>
                                                                                                                <option value="disable">Disabled</option>
                                                                                                                
														
													</select>
												</div>
                                                                                          
											</div>
                                                                                          <div class="col-sm-12 col-md-12">
												<div class="form-group">
                                                                                                <label class="form-label">Product Color <span class="text-red">*</span></label>
                                                                                                 <input type="text" class="form-control" id="condition" name="cond" placeholder="product color" value="<?php echo $condition;?>">
												
                                                                                                
												</div>
                                                                                          
											</div>  
                                                                                            
                                                                                            
                                                                                        </div>	
											</div>
											<div class="tab-pane " id="tab6">
													<div class="row">
											<div class="col-sm-12 col-md-12">
												<div class="form-group">
                                                                                              <label class="form-label">Model <span class="text-red">*</span></label>
                                                                                            <input type="text" class="form-control" id="name1" name="m" placeholder="product model" value="<?php echo $m;?>">
											</div>
											</div>
                                                                                            
                                                                                            
											<div class="col-sm-12 col-md-12">
												<div class="form-group">
													<label class="form-label">Price <span class="text-red">*</span></label>
                                                                                                        <input type="number" class="form-control" placeholder="Price" name="price"value="<?php echo $price;?>">
												</div>
											</div>
                                                                                           <div class="col-sm-12 col-md-12">
												<div class="form-group">
													<label class="form-label">Quantity <span class="text-red">*</span></label>
                                                                                                        <input type="number" class="form-control" placeholder="Quantity" name="qty" value="<?php echo $qty;?>">
												</div>
											</div>
                                                                                            <div class="col-sm-12 col-md-12">
												<div class="form-group">
                                                                                              <label class="form-label">Dimension (L x W x H) <span class="text-red">*</span></label>
                                                                                            <input type="text" class="form-control" id="name1" name="dimension" placeholder="(L x W x H)" value="<?php echo $dimension;?>">
											</div>
											</div>
                                                                                            
                                                                                            
											<div class="col-sm-12 col-md-12">
												<div class="form-group">
													<label class="form-label">Weight(Kg) <span class="text-red">*</span></label>
                                                                                                        <input type="text" class="form-control" placeholder="product weight(kg)" name="w" value="<?php echo $w;?>">
												</div>
											</div>
                                                                                            
                                                                                          <div class="col-sm-12 col-md-12">
												<div class="form-group">
													<label class="form-label">Discount(%) <span class="text-red">*</span></label>
                                                                                                        <input type="number" class="form-control" placeholder="Discount(%)e.g 10" name="discount" value="<?php echo $discount;?>">
												</div>
											</div>  
                                                                                        </div>
                                                                                         </div>
											<div class="tab-pane " id="tab7">
                                                                                            <div class="row">
											<div class="col-sm-12 col-md-12">
												<div class="form-group">
                                                                                                <label class="form-label">Brand Name <span class="text-red">*</span></label>
                                                                                                <select class="form-control custom-select select2" name="brand">
														
														<option value="<?php echo $brand;?>"><?php echo $brand;?></option>
                                                                                                                <?php 
                                                                                         $b= "select * from `brand`";
                                                                                          $b_result = $db->query($b);
                                                                                         while($row_b = $b_result->fetch_assoc()) {
                                                                                         $b_img=$row_b['image'];
                                                                                         $b_name =$row_b['brand_name'];
                                                                                         $b_id=$row_b['id'];
                                                                                          
                                                                                          ?>
											<option value="<?php echo $b_name;?>"><?php echo $b_name;?></option>
                                                                                                   <?php
                                                                                                 }
                                                                                                   ?> 
														
													</select>
												</div>
                                                                                          
											</div>
                                                                                      <div class="col-sm-12 col-md-12">
												<div class="form-group">
                                                                                                <label class="form-label">Product Category <span class="text-red">*</span></label>
                                                                                                <select class="form-control custom-select select2" name="category">
														<option value="<?php echo $category;?>"><?php echo $category;?></option>
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
                                                                                       </div>
                                                                                      </div>
													<div class="tab-pane " id="tab8">
														
                                                                                                            <div class="row">
                                                                                                                <div class="col-sm-4 col-md-4">
                                                                                                                    <img class="avatat avatar-md brround me-2" src="product_image/<?php echo $img;?>" alt="img">
                                                                                                                </div>
											<div class="col-sm-8 col-md-8">
											<div class="form-group">
											<label class="form-label">Product Image <span class="text-red">*</span></label>
											<div class="input-group file-browser mb-5">
                                                                                        <input type="text" class="form-control browse-file" placeholder="choose" readonly>
											<label class="input-group-text btn btn-primary">
                                                                                            Browse your Files <input type="file" class="file-browserinput" style="display: none;" name="attachment11" >
											</label>
										       </div>
											</div>
											</div>
                                                                                            
                                                                                            
											<div class="col-sm-4 col-md-4">
												<div class="form-group">
											<label class="form-label">Product Image(optional) <span class="text-red">*</span></label>
											<div class="input-group file-browser mb-5">
                                                                                                            
											<input type="text" class="form-control browse-file" placeholder="choose" readonly>
											<label class="input-group-text btn btn-primary">
                                                                                            Browse your Files <input type="file" class="file-browserinput" style="display: none;" name="attachment12" >
											</label>
										          </div>
											</div>
                                                                                            <?php
                                                                                           if($img1 == ""){
                                                                                               
                                                                                           }else{
                                                                                            ?> 
                                                                                            <img class="avatat avatar-md brround me-2" src="product_image1/<?php echo $img1;?>">
                                                                                            <?php } ?>
                                                                                           
											</div>
                                                                                            
                                                                                          
                                                                                          <div class="col-sm-4 col-md-4">
												<div class="form-group">
													<label class="form-label">Product Image(optional) <span class="text-red">*</span></label>
													<div class="input-group file-browser mb-5">
                                                                                                            
											<input type="text" class="form-control browse-file" placeholder="choose" readonly>
											<label class="input-group-text btn btn-primary">
                                                                                            Browse your Files <input type="file" class="file-browserinput" style="display: none;" name="attachment13" >
											</label>
										          </div>
											</div>
                                                                                              <?php
                                                                                           if($img2 == ""){
                                                                                               
                                                                                           }else{
                                                                                            ?> 
                                                                                            <img class="avatat avatar-md brround me-2" src="product_image2/<?php echo $img2;?>">
                                                                                            <?php } ?>
											</div>
                                                                                            <div class="col-sm-4 col-md-4">
												<div class="form-group">
											<label class="form-label">Product Image(optional) <span class="text-red">*</span></label>
											<div class="input-group file-browser mb-5">
                                                                                                            
											<input type="text" class="form-control browse-file" placeholder="choose" readonly>
											<label class="input-group-text btn btn-primary">
                                                                                            Browse your Files <input type="file" class="file-browserinput" style="display: none;" name="attachment14" >
											</label>
										         </div>
											</div>
                                                                                               <?php
                                                                                           if($img3 == ""){
                                                                                               
                                                                                           }else{
                                                                                            ?> 
                                                                                            <img class="avatat avatar-md brround me-2" src="product_image3/<?php echo $img3;?>">
                                                                                            <?php } ?>
                                                                                                
											</div>
                                                                                            
                                                                                            
											<div class="col-sm-12 col-md-12">
											<button type="submit" name="update_product" class="btn btn-primary"><i class="fe fe-save me-2"></i>Update</button>
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

