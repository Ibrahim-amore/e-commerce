
<?php
include 'includes/head.php';
?>
 <?php
 $bids= "select * from `bids`";
 $bids_result = $db->query($bids);
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
                                           $bid_msg ="";
                                           if(isset($_GET['b_d'])){
                                               $bid_msg = "<div class='alert alert-success' role='alert'><button type='button' class='btn-close' data-bs-dismiss='alert' aria-hidden='true'>×</button>
											<i class='fa fa-check-circle-o me-2' aria-hidden='true'></i> Entry Deleted Successfully</div> ";
                                                       
                                           }
                                           
                                           ?>
                                            
						<div class="page-header">
							<div class="page-leftheader">
							<h4 class="page-title mb-0 text-primary">BIDS AND TENDERS</h4>
							</div>
						</div>
						<!--End Page header-->

						
						<!--Row-->
						<div class="row">
                                                   <?php
                                                            $blog_result ="";
                                                            if(mysqli_num_rows($bids_result)< 1){
                                                                $blog_result ="No Records Yet ";
                                                                 }
                                                            else{
                                                             ?>
                                                    <div class="col-xl-12 col-lg-12 col-md-12 my-4">
                                                       				<div class="card">
									<div class="card-body">
                                                                            <?php
                                                                            echo $bid_msg;
                                                                            ?>
										<div class="table-responsive">
											<table class="table table-bordered card-table table-vcenter text-nowrap" id="datatable">
												<thead>
													<tr>
														<th>NAME</th>
                                                                                                                <th>PHONE</th>
                                                                                                                <th>EMAIL</th>
                                                                                                                <th>COMPANY NAME</th>
                                                                                                                <th>MESSAGE</th>
														<th>DATE CREATED</th>
														<th>DEADLINE</th>
                                                                                                                <th>CATEGORY</th>
														<th>ACTION</th>
														
													</tr>
												</thead>
												<tbody>
                                                                                        <?php while($row_b = $bids_result->fetch_assoc()) {
                                                                                         $b_name=$row_b['name'];
                                                                                         $b_category =$row_b['category'];
                                                                                         $b_phone =$row_b['phone'];
                                                                                         $b_email =$row_b['email'];
                                                                                         $b_message=$row_b['message'];
                                                                                          $b_company=$row_b['company'];
                                                                                          $b_deadline=$row_b['deadline'];
                                                                                          $b_created_at=$row_b['date'];
                                                                                          $bid_id=$row_b['id'];
                                                                                          $b_name = substr($b_name,0, 100);
                                                                                           $b_message = substr($b_message,0, 150);
                                                                                           $b_company = substr($b_company,0, 100);
                                                                                          $b_created_at=date("d M,Y",strtotime($b_created_at));
                                                                                          $b_deadline=date("d M,Y",strtotime($b_deadline));
                                                                                          
                                                                                             ?>
													<tr>
														<td>
													      <a class="font-weight-normal1"><?php echo $b_name;?></a>
														</td>
                                                                                                                <td><?php echo $b_phone;?></td>
                                                                                                                <td><?php echo $b_email;?></td>
														<td><?php echo $b_company;?></td>
                                                                                                                <td><?php echo $b_message;?></td>
														<td><?php echo $b_created_at;?></td>
														<td><?php echo $b_deadline;?></td>
                                                                                                                <td><?php echo $b_category;?></td>
                                                                                                                <td>
                                                                                                                    <div class="btn-list list-tab">
                                                                                                                        <a href="../action/delete/delete-bid.php?w=<?php echo $bid_id;?>[{P}HJj_{}FV546JL<?php echo md5(rand())?>" class="btn btn-icon btn-danger" onclick="return confirm('Are you sure you want to remove this?')"><i class="fa fa-trash"></i></a>
                                                                                                                        <a href="tender_view.php?w=<?php echo $bid_id;?>W[{P}HJj_{}FV546JL<?php echo md5(rand())?>" class="btn btn-icon btn-primary" onclick="return confirm('Are you sure you want to View this?')"><i class="fa fa-eye"></i></a>
                                                                                                                       
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


