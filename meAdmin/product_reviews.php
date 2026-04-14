
<?php
include 'includes/head.php';
?>
<?php
//include '../action/update/update-package.php';
?>
<?php
//include '../action/create/create.php';
?>
 <?php
 $faq= "select * from `product_reviews`";
 $review_result = $db->query($faq);
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
                                           $r_d ="";
                                           if(isset($_GET['package_s'])){
                                               $update_package_msg = "<div class='alert alert-success' role='alert'><button type='button' class='btn-close' data-bs-dismiss='alert' aria-hidden='true'>×</button>
											<i class='fa fa-check-circle-o me-2' aria-hidden='true'></i> updated Successfully</div> ";
                                                       
                                           }
                                           elseif (isset ($_GET['pr~~_d'])){
                                            $r_d = "<div class='alert alert-success' role='alert'><button type='button' class='btn-close' data-bs-dismiss='alert' aria-hidden='true'>×</button>
											<i class='fa fa-check-circle-o me-2' aria-hidden='true'></i>Customer's Review Deleted Successfully</div> ";
                                                 
                                        }
                                           ?>
                        	<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
							<h4 class="page-title mb-0 text-primary">Customers Reviews</h4>
							</div>
						</div>
						<!--End Page header-->

						
						<!--Row-->
						<div class="row">
                                                 <?php echo $r_d;?>
                                                    <?php
                                                            $blog_result ="";
                                                            if(mysqli_num_rows($review_result)< 1){
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
														<th>CUSTOMER'S NAME</th>
                                                                                                               <th>COMMENT</th>
                                                                                                                <th>DATE</th>
                                                                                                                <th>EMAIL</th>
                                                                                                                <th>PRODUCT ID</th>
                                                                                                               <th>ACTION</th>
														
													</tr>
												</thead>
												<tbody>
                                                                                                    <?php 
                                                                                                    $i=1;
                                                                                                    while($row_r = $review_result->fetch_assoc()) {
                                                                                         $name=$row_r['name'];
                                                                                         $comment=$row_r['comment'];
                                                                                        $date=$row_r['date'];
                                                                                          $r_id=$row_r['id'];
                                                                                          $pid=$row_r['pid'];
                                                                                             $email=$row_r['email'];
                                                                                          $date=date("d M,Y",strtotime($date));
                                                                                          
                                                                                          

                                                                                            ?>
											<tr>
														<td>
													      <a class="font-weight-normal1"><?php  
                                                                                                                echo $i++;                                                                                     
                                                                                                              ?></a>
														</td>
                                                                                                                <td><?php echo $name?></td>
                                                                                                                
														<td><?php echo $comment?></td>
                                                                                                                <td><?php echo $date?></td>
                                                                                                                <td><?php echo $email?></td>
                                                                                                                <td><?php echo $pid?></td>
                                                                                                                <td>
                                                                                                                    <div class="btn-list list-tab">
                                                                                                                        <a href="../action/delete/dpr?dr=<?php echo $r_id;?>PHJj_{}FV546JL<?php echo md5(rand())?>" class="btn btn-icon btn-danger" onclick="return confirm('Are you sure you want to remove this Review?')"><i class="fa fa-trash"></i></a>
                                                                                                                        
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
                                                 <?php 
                                                 
                                                 }
                                                 ?>
                                             
                                                
			</div>
			</div>
			<?php
                       include 'includes/footer.php';
                        ?>

		<?php
                include 'includes/foot.php';
                ?>
