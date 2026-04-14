
<?php
include 'includes/head.php';
?>
<?php
//include '../action/update/update-tender.php';
?>
<?php
include '../action/create/create.php';
?>
 <?php
 $tender= "select * from `products`";
 $product_result = $db->query($tender);
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
                                            
                                            <?php
                                           $update_p_msg ="";
                                           $d_p_msg="";
                                           if(isset($_GET['tender_s'])){
                                               $update_tender_msg = "<div class='alert alert-success' role='alert'><button type='button' class='btn-close' data-bs-dismiss='alert' aria-hidden='true'>×</button>
											<i class='fa fa-check-circle-o me-2' aria-hidden='true'></i> updated Successfully</div> ";
                                                       
                                           }
                                           elseif(isset ($_GET['p~_d'])){
                                            $d_p_msg = "<div class='alert alert-success' role='alert'><button type='button' class='btn-close' data-bs-dismiss='alert' aria-hidden='true'>×</button>
											<i class='fa fa-check-circle-o me-2' aria-hidden='true'></i> Product Removed Successfully</div> ";
                                                 
                                        }
                                        elseif(isset ($_GET['p_u'])){
                                            $update_p_msg = "<div class='alert alert-success' role='alert'><button type='button' class='btn-close' data-bs-dismiss='alert' aria-hidden='true'>×</button>
											<i class='fa fa-check-circle-o me-2' aria-hidden='true'></i> Product UPDATED Successfully</div> ";
                                                 
                                        }
                                           ?>
                        	

						
						<!--Row-->
						<div class="row">
                                                    	<?php
                                                        echo $d_p_msg;
                                                        echo $update_p_msg;
                                                        echo $p_msg;
                                                        echo $p_msg2;
                                                        ?>	
                                                    
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
                                                                                            <input type="text" class="form-control" id="name1" name="pn" placeholder="product name" required="">
											</div>
											</div>
                                                                                            
                                                                                            
											<div class="col-sm-12 col-md-12">
												<div class="form-group">
													<label class="form-label">Product Tags <span class="text-red">*</span></label>
                                                                                                        <input type="text" class="form-control" placeholder="Product Tags" name="pt">
												</div>
											</div>
                                                                                            
                                                                                          
                                                                                           <div class="form-group">
											<textarea class="form-control content_" name="des" rows="6" placeholder="Product description"></textarea>
											</div>
                                                                                            <div class="col-sm-12 col-md-12">
												<div class="form-group">
                                                                                              <label class="form-label">Meta Tags <span class="text-red">*</span></label>
                                                                                            <input type="text" class="form-control" id="name1" name="mt" placeholder="meta tags" >
											</div>
											</div>
                                                                                            
                                                                                            
											<div class="col-sm-12 col-md-12">
												<div class="form-group">
													<label class="form-label">Key Words <span class="text-red">*</span></label>
                                                                                                        <input type="text" class="form-control" placeholder="Meta Key Words" name="kw">
												</div>
											</div>
                                                                                            
                                                                                            <div class="col-sm-12 col-md-12">
												<div class="form-group">
                                                                                                <label class="form-label">Product Status <span class="text-red">*</span></label>
                                                                                                <select class="form-control custom-select select2" name="status" required="">
														
														<option value="active">Active</option>
                                                                                                                <option value="disable">Disabled</option>
                                                                                                                
														
													</select>
												</div>
                                                                                          
											</div>
                                                                                            <div class="col-sm-12 col-md-12">
												<div class="form-group">
                                                                                                <label class="form-label">Product Color <span class="text-red">*</span></label>
                                                                                               <input type="text" class="form-control" id="condition" name="condition" placeholder="product color">
												</div>
                                                                                           </div>
                                                                                        </div>	
											</div>
											<div class="tab-pane " id="tab6">
													<div class="row">
											<div class="col-sm-12 col-md-12">
												<div class="form-group">
                                                                                              <label class="form-label">Model <span class="text-red">*</span></label>
                                                                                            <input type="text" class="form-control" id="name1" name="m" placeholder="product model">
											</div>
											</div>
                                                                                            
                                                                                            
											<div class="col-sm-12 col-md-12">
												<div class="form-group">
													<label class="form-label">Price <span class="text-red">*</span></label>
                                                                                                        <input type="number" class="form-control" placeholder="Price" name="price" required="">
												</div>
											</div>
                                                                                           <div class="col-sm-12 col-md-12">
												<div class="form-group">
													<label class="form-label">Quantity <span class="text-red">*</span></label>
                                                                                                        <input type="number" class="form-control" placeholder="Quantity" name="qty">
												</div>
											</div>
                                                                                            <div class="col-sm-12 col-md-12">
												<div class="form-group">
                                                                                              <label class="form-label">Dimension (L x W x H) <span class="text-red">*</span></label>
                                                                                            <input type="text" class="form-control" id="name1" name="dimension" placeholder="(L x W x H)">
											</div>
											</div>
                                                                                            
                                                                                            
											<div class="col-sm-12 col-md-12">
												<div class="form-group">
													<label class="form-label">Weight(Kg) <span class="text-red">*</span></label>
                                                                                                        <input type="text" class="form-control" placeholder="product weight(kg)" name="w">
												</div>
											</div>
                                                                                            
                                                                                          <div class="col-sm-12 col-md-12">
												<div class="form-group">
													<label class="form-label">Discount(%) <span class="text-red">*</span></label>
                                                                                                        <input type="number" class="form-control" placeholder="Discount(%)e.g 10" name="discount">
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
                                                                                                    <option value="">--Select Brand  Name--</option>
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
                                                                                                <select class="form-control custom-select select2" name="category" required="">
                                                                                                    
											<option value="">--Select Brand  Category--</option>
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
                                                                                                
                                                                                                <div class="col-sm-12 col-md-12">
												<div class="form-group">
													<label class="form-label">Video Link <span class="text-red"></span></label>
                                                                                                        <input type="url" class="form-control" placeholder="video link" name="v_link">
												</div>
											</div>
                                                                                       </div>
                                                                                      </div>
													<div class="tab-pane " id="tab8">
														
                                                                                                            <div class="row">
											<div class="col-sm-12 col-md-12">
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
											</div>
                                                                                            
                                                                                                                 <div class="col-sm-12 col-md-12 my-5">
											<button type="submit" name="submit_product" class="btn btn-primary"><i class="fe fe-save me-2"></i>Save Product</button>
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
								<!-- /div -->
                                                       <?php
                                                            $blog_result ="";
                                                            if(mysqli_num_rows($product_result)< 1){
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
														<th>S/N</th>
                                                                                                                <th>PRODUCT IMAGE</th>
                                                                                                                <th>PRODUCT NAME</th>
														<th>PRICE</th>
                                                                                                                <th>QTY</th>
														<th>STATUS</th>
                                                                                                                <th>ACTION</th>
														
													</tr>
												</thead>
												<tbody>
                                                                                         <?php 
                                                                                         $i=1;
                                                                                         while($row_p = $product_result->fetch_assoc()) {
                                                                                         $pn=$row_p['pn'];
                                                                                         $price =$row_p['price'];
                                                                                         $qty=$row_p['qty'];
                                                                                          $img=$row_p['img'];
                                                                                          $discount=$row_p['discount'];
                                                                                          $status=$row_p['status'];
                                                                                         
                                                                                          
                                                                                          $p_id=$row_p['id'];
                                                                                          $pn = substr($pn,0, 100);
                                                                                          /*
                                                                                           $t_message = substr($t_message,0, 150);
                                                                                           $t_company = substr($t_company,0, 100);
                                                                                          $t_created_at=date("d M,Y",strtotime($t_created_at));
                                                                                          $t_deadline=date("d M,Y",strtotime($t_deadline));
                                                                                           
                                                                                           */
                                                                                          
                                                                                             ?>
													<tr>
														<td>
													      <a class="font-weight-normal1"><?php echo $i++;?></a>
														</td>
                                                                                                                <td><img class="avatat avatar-md brround me-2" src="product_image/<?php echo $img;?>" alt="img"></td>
                                                                                                                <td><?php echo $pn;?></td>
                                                                                                                <?php
                                                                                                                if($discount > 0){
                                                                                                                    echo "<td>$price </td>";
                                                                                                                }
                                                                                                             else {
                                                                                                                 $p = $price *(1-($discount/100));
                                                                                                                 echo "<td><del class='text-danger'>$price </del> $p; </td>";
                                                                                                                 }
                                                                                                                ?>
														
														<td><?php echo $qty;?></td>
                                                                                                                <td><?php echo $status?></td>
                                                                                                                <td>
                                                                                                                    <div class="btn-list list-tab">
                                                                                                                        <a href="../action/delete/d-product.php?tv=<?php echo $p_id;?>[{P}HJj_{}FV546JL<?php echo md5(rand())?>" class="btn btn-icon btn-danger" onclick="return confirm('Are you sure you want to remove this Product?')"><i class="fa fa-trash"></i></a>
                                                                                                                       <a href="product-update?w=<?php echo $p_id;?>[{P}HJj_{}FV546JL<?php echo md5(rand())?>" class="btn btn-icon btn-teal"onclick="return confirm('Are you sure you want to Edit this product?')"><i class="fa fa-edit" ></i></a>
                                                                                                                      <!--- <a href="options?w=<?php //echo $p_id;?>[{P}HJj_{}FV546JL<?php //echo md5(rand())?>" class="btn btn-icon btn-primary"><i class="fa fa-plus" ></i>Add Options</a>--->
                                                                                                                    
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

