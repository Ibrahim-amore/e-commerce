
<?php
include 'includes/head.php';
?>
<?php
//include '../action/update/update-faq.php';
?>
<?php
include '../action/create/create.php';
?>
 <?php
 $faq= "select * from `testimonial`";
 $faq_result = $db->query($faq);
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
                                           $update_faq_msg ="";
                                           if(isset($_GET['faq_s'])){
                                               $update_faq_msg = "<div class='alert alert-success' role='alert'><button type='button' class='btn-close' data-bs-dismiss='alert' aria-hidden='true'>×</button>
											<i class='fa fa-check-circle-o me-2' aria-hidden='true'></i> updated Successfully</div> ";
                                                       
                                           }elseif (isset ($_GET['faq_d'])){
                                            $update_faq_msg = "<div class='alert alert-success' role='alert'><button type='button' class='btn-close' data-bs-dismiss='alert' aria-hidden='true'>×</button>
											<i class='fa fa-check-circle-o me-2' aria-hidden='true'></i> Testimonial DELETED Successfully</div> ";
                                                 
                                        }
                                           ?>
                        	<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
							<h4 class="page-title mb-0 text-primary">TESTIMONIAL</h4>
							</div>
						</div>
						<!--End Page header-->

						
						<!--Row-->
						<div class="row">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 my-4">
							<div class="card mb-lg-0">
									<div class="card-header">
										<h3 class="card-title text-center">Testimonial</h3>
									</div>
                                                            
									<div class="card-body">
                                                                            <?php
                                                                            echo $faq_msg;
                                                                            ?>
										<div class="pt-2">
                                                                                    <form  method="POST" enctype="multipart/form-data">
											<div class="form-group">
                                                                                            <input type="text" class="form-control" id="name1" name="name" placeholder="name">
											</div>
											<div class="form-group">
                                                                                            <input type="text" class="form-control" id="name1" name="role" placeholder="Role c.g IT specialist)">
											</div>
											<div class="form-group">
											<textarea class="form-control" name="comment" rows="6" placeholder="Comment"></textarea>
											</div>
                                                                                        <div class="form-group">
													<label class="form-label">Image <span class="text-red">*</span></label>
													<div class="input-group file-browser mb-5">
                                                                                                            
											<input type="text" class="form-control browse-file" placeholder="choose" readonly>
											<label class="input-group-text btn btn-primary">
                                                                                            Browse your Files <input type="file" class="file-browserinput" style="display: none;" name="attachment90" >
											</label>
										</div>
												</div>
                                                                                    <button type="submit" name="submit-test" class="btn btn-primary">Save Testimonial</button>
                                                                                    </form>
										</div>
									</div>
								</div>	
                                                            </div>
                                                    <?php
                                                            $blog_result ="";
                                                            if(mysqli_num_rows($faq_result)< 1){
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
														<th>NAME</th>
														<th>COMMENT</th>
														<th>IMAGE</th>
														
                                                                                                                <th>ROLE</th>
                                                                                                                <th>ACTION</th>
														
													</tr>
												</thead>
												<tbody>
                                                                                       <?php 
                                                                                       $i=1;
                                                                                       while($row_f = $faq_result->fetch_assoc()) {
                                                                                          $name=$row_f['name'];
                                                                                         $comment=$row_f['comment'];
                                                                                         $role=$row_f['role'];
                                                                                         $image=$row_f['image'];
                                                                                         $comment = substr($comment,0, 120);
                                                                                          $test_id=$row_f['id'];
                                                                                          
                                                                                             ?>
													<tr>
														<td>
														<?php echo $i++;?>
														</td>
														<td><?php echo $name;?></td>
														<td><?php echo $comment;?></td>
														 <td><img class="avatat avatar-md brround me-2" src="Testimonial_image/<?php echo $image;?>" alt="img"></td>
                                                                                                                <td><?php echo $role;?></td>
                                                                                                                <td>
                                                                                                                    <div class="btn-list list-tab">
                                                                                                                        <a href="../action/delete/delete-testimonial.php?v=<?php echo $test_id;?>PHJj_{}FV546JL<?php echo md5(rand())?>" class="btn btn-icon btn-danger" onclick="return confirm('Are you sure you want to remove this Testimonial?')"><i class="fa fa-trash"></i></a>
                                                                                                                        
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
