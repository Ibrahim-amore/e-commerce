
<?php
include 'includes/head.php';
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
                                           $s_msg ="";
                                           if(isset($_GET['s_d'])){
                                               $s_msg = "<div class='alert alert-success' role='alert'><button type='button' class='btn-close' data-bs-dismiss='alert' aria-hidden='true'>×</button>
											<i class='fa fa-check-circle-o me-2' aria-hidden='true'></i> Subscriber Deleted Successfully</div> ";
                                                       
                                           }
                                           
                                           ?>
                                            
						<div class="page-header">
							<div class="page-leftheader">
							<h4 class="page-title mb-0 text-primary">SUBSCRIBERS TABLE</h4>
							</div>
						</div>
						<!--End Page header-->

						
						<!--Row-->
						<div class="row">
                                                    <?php
                                      $s= "select * from `subscribers`";
                                      $s_result = $db->query($s);
                                               ?>
                                                   <?php
                                                            $blog_result ="";
                                                            if(mysqli_num_rows($s_result)< 1){
                                                                $blog_result ="No Records Yet ";
                                                                 }
                                                            else{
                                                             ?>
                                                    <div class="col-xl-12 col-lg-12 col-md-12 my-4">
                                                       				<div class="card">
									<div class="card-body">
                                                                            <?php
                                                                            echo $s_msg;
                                                                            ?>
										<div class="table-responsive">
											<table class="table table-bordered card-table table-vcenter text-nowrap" id="datatable">
												<thead>
													<tr>
														
                                                                                                                <th>EMAIL</th>
                                                                                                                <th>DATE</th>
                                                                                                                
														
														<th>ACTION</th>
														
													</tr>
												</thead>
												<tbody>
                                                                                        <?php while($row_b = $s_result->fetch_assoc()) {
                                                                                         
                                                                                         $s_email =$row_b['email'];
                                                                                         $s_date =$row_b['date'];
                                                                                        $s_date=date("d M,Y",strtotime($s_date));
                                                                                         
                                                                                          
                                                                                             ?>
													<tr>
														
                                                                                                                
                                                                                                                <td><?php echo $s_email;?></td>
														
                                                                                                                <td><?php echo $s_date;?></td>
														
                                                                                                                
                                                                                                                <td>
                                                                                                                    <div class="btn-list list-tab">
                                                                                                                        <a href="../action/delete/delete-sub.php?s=<?php echo $s_id;?>[{P}HJj_{}FV546JL<?php echo md5(rand())?>" class="btn btn-icon btn-danger" onclick="return confirm('Are you sure you want to remove this?')"><i class="fa fa-trash"></i></a>
                                                                                                                        
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


