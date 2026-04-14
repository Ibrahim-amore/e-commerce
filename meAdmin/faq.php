
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
 $faq= "select * from `faq`";
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
                                                       
                                           }else if (isset($_GET['faq_d'])){
                                            $update_faq_msg = "<div class='alert alert-success' role='alert'><button type='button' class='btn-close' data-bs-dismiss='alert' aria-hidden='true'>×</button>
											<i class='fa fa-check-circle-o me-2' aria-hidden='true'></i> FAQ DELETED Successfully</div> ";
                                                 
                                        }
                                           ?>
                        	<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
							<h4 class="page-title mb-0 text-primary">FAQ</h4>
							</div>
						</div>
						<!--End Page header-->

						
						<!--Row-->
						<div class="row">
                                                  	<div class="col-xl-12 col-lg-12 col-md-12 my-4">
							<div class="card mb-lg-0">
									<div class="card-header">
										<h3 class="card-title text-center">Ask Question</h3>
									</div>
                                                            
									<div class="card-body">
                                                                            <?php
                                                                            echo $faq_msg;
                                                                            ?>
                                                                            <?php
                                                                            echo $update_faq_msg;
                                                                            ?>
										<div class="pt-2">
                                                                                    <form action="" method="POST">
											<div class="form-group">
                                                                                            <input type="text" class="form-control" id="name1" name="question" placeholder="Question" required="">
											</div>
											
											<div class="form-group">
                                                                                            <textarea class="form-control" name="answer" rows="6" placeholder="Answer" required=""></textarea>
											</div>
                                                                                    <button type="submit" name="submit-faq" class="btn btn-primary">Save Question</button>
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
														<th>QUESTION</th>
														<th>ANSWER</th>
														<th>ACTION</th>
														
													</tr>
												</thead>
												<tbody>
                                                                                       <?php while($row_f = $faq_result->fetch_assoc()) {
                                                                                          $question_faq=$row_f['question'];
                                                                                         $answer_faq=$row_f['answer'];
                                                                                         
                                                                                         $answer_faq = substr($answer_faq,0, 250);
                                                                                        $question_faq = substr($question_faq,0, 120);
                                                                                          $faq=$row_f['id'];
                                                                                          
                                                                                             ?>
													<tr>
														<td>
														<a class="font-weight-normal1"><?php echo $faq;?></a>
														</td>
														<td><?php echo $question_faq;?></td>
														<td><?php echo $answer_faq;?></td>
														
                                                                                                                <td>
                                                                                                                    <div class="btn-list list-tab">
                                                                                                                        <a href="../action/delete/delete-faq.php?faq=<?php echo $faq;?>j_{}FV546JL<?php echo md5(rand())?>" class="btn btn-icon btn-danger" onclick="return confirm('Are you sure you want to remove this FAQ?')"><i class="fa fa-trash"></i></a>
                                                                                                                        
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
