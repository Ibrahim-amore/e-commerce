
<?php
include 'includes/head.php';
?>
<?php
if((isset($_GET['var'])) && (isset($_GET['varid']))){
    $attr_id = $_GET['varid'];
    $attr =$_GET['var'];
}
 else {
    header('location:attribute'); 
}
?>
<?php
//include '../action/create/create.php';
$var_create_msg ="";
if(isset($_POST['add_var'])){
$var_name = $_POST['var_name'];
$var_name = mysqli_real_escape_string($db, $var_name);

$sqva = "insert into variation(attr_name,attr_id,var_name)values('$attr','$attr_id','$var_name')";
$vva = $db->query($sqva);

if($vva){

$var_create_msg = "<div class='alert alert-success' role='alert'><button type='button' class='btn-close' data-bs-dismiss='alert' aria-hidden='true'>×</button>
											<i class='fa fa-check-circle-o me-2' aria-hidden='true'></i>Variation added successfully</div> ";  
}
else{
$var_create_msg = "<div class='alert alert-danger' role='alert'><button type='button' class='btn-close' data-bs-dismiss='alert' aria-hidden='true'>×</button>
											<i class='fa fa-frown-o me-2' aria-hidden='true'></i>Error Has occured:pls try again!</div>";   

}
}
?>
 <?php
 $faq= "select * from `variation` where `attr_id` = '$attr_id' AND `attr_name` = '$attr'";
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
                                           $var_del_msg ="";
                                           if(isset($_GET['package_s'])){
                                               $update_package_msg = "<div class='alert alert-success' role='alert'><button type='button' class='btn-close' data-bs-dismiss='alert' aria-hidden='true'>×</button>
											<i class='fa fa-check-circle-o me-2' aria-hidden='true'></i> updated Successfully</div> ";
                                                       
                                           }
                                           elseif (isset ($_GET['v_d'])){
                                            $var_del_msg = "<div class='alert alert-success' role='alert'><button type='button' class='btn-close' data-bs-dismiss='alert' aria-hidden='true'>×</button>
											<i class='fa fa-check-circle-o me-2' aria-hidden='true'></i> {$attr} Removed Successfully</div> ";
                                                 
                                        }
                                           ?>
                        	<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
							<h4 class="page-title mb-0 text-primary"><?php echo $attr;?></h4>
							</div>
						</div>
						<!--End Page header-->

						
						<!--Row-->
						<div class="row">
                                                    				
                                                    
							<div class="col-xl-12 col-lg-12 col-md-12 my-4">
							<div class="card mb-lg-0">
									<div class="card-header">
										<h3 class="card-title text-center"><?php echo $attr;?></h3>
									</div>
									<div class="card-body">
                                                                            <?php echo $var_del_msg?>
                                                                            <?php echo $var_create_msg;?>
										<div class="pt-2">
                                                                                    <form action="" method="POST">
											 <div class="row">
											<div class="col-sm-6 col-md-6">
												<div class="form-group">
													<label class="form-label"><?php echo $attr;?><span class="text-red">*</span></label>
                                                                                                        <input type="text" class="form-control" placeholder="Enter <?php echo $attr;?> (e.g blue, M)" name="var_name">
												</div>
											</div>
											<div class="col-sm-6 col-md-6 mt-5">
												<button type="submit" name="add_var" class="btn btn-primary p-2">Add <?php echo $attr;?></button>
											</div>
                                                                                            
                                                                                            
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
														
														<th>NAME</th>
                                                                                                                
														<th>ACTION</th>
														
													</tr>
												</thead>
												<tbody>
                                                                                                    <?php 
                                                                                                    $i=1;
                                                                                                    while($row_p = $package_result->fetch_assoc()) {
                                                                                         $var_name=$row_p['var_name'];
                                                                                          $v_id=$row_p['id'];
                                                                                          
                                                                                             ?>
													<tr>
														<td>
													      <a class="font-weight-normal1"><?php  
                                                                                                                echo $i++;                                                                                     
                                                                                                              ?></a>
														</td>
                                                                                                                
														<td><?php echo $var_name?></td>
                                                                                                                <td>
                                                                                                                    <div class="btn-list list-tab">
                                                                                                                        <a href="../action/delete/delete-variation.php?var=<?php echo $v_id;?>" class="btn btn-icon btn-danger" onclick="return confirm('Are you sure you want to remove this?')"><i class="fa fa-trash"></i></a>
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
