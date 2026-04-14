
<?php
include 'includes/head.php';
?>
<?php 
if(!isset($_GET['w'])){
    header('location:dashboard');
}else{
   $s_id = $_GET['w'];
   $s_r = $db->query("SELECT *FROM `sales` WHERE `s_id`='$s_id' LIMIT 1");
   $row_b = $s_r->fetch_assoc(); 
                                                                                       $s_name=$row_b['name'];
                                                                                        $s_phone =$row_b['phone'];
                                                                                         $s_email =$row_b['email'];
                                                                                         $s_meth=$row_b['meth'];
                                                                                          $s_date=$row_b['date'];
                                                                                          $s_amount = $row_b['amount'];
                                                                                          $s_country = $row_b['city'];
                                                                                          $s_state = $row_b['state'];
                                                                                          $s_address = $row_b['address'];
                                                                                          $s_order_id = $row_b['order_id'];
                                                                                          $dis = $row_b['dis'];
                                                                                          $delivery = $row_b['delivery'];
                                                                                          $status = $row_b['status'];
                                                                                          $s_ref = $row_b['ref'];
                                                                                          $s_id=$row_b['s_id'];
                                                                                         $s_date=date("d M,Y",strtotime($s_date));
   
   
                              
}

?>
<?php
 $s_pp = $db->query("SELECT *FROM `cart` WHERE `s_id`= '$s_id'");       
//include '../action/create/create.php';
?>
 <?php
 $faq= "select * from `brand`";
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
                                           $brand_del_msg ="";
                                           if(isset($_GET['package_s'])){
                                               $update_package_msg = "<div class='alert alert-success' role='alert'><button type='button' class='btn-close' data-bs-dismiss='alert' aria-hidden='true'>×</button>
											<i class='fa fa-check-circle-o me-2' aria-hidden='true'></i> updated Successfully</div> ";
                                                       
                                           }
                                           elseif (isset ($_GET['brand_d'])){
                                            $brand_del_msg = "<div class='alert alert-success' role='alert'><button type='button' class='btn-close' data-bs-dismiss='alert' aria-hidden='true'>×</button>
											<i class='fa fa-check-circle-o me-2' aria-hidden='true'></i> Brand Removed Successfully</div> ";
                                                 
                                        }
                                           ?>
                        	<!--Page header-->
						
						<!--End Page header-->

						
						<div class="row">
							<div class="col-md-12">
								<div class="card overflow-hidden">
									<div class="card-body">
                                                                            <div style="max-width: 150px; margin: 0 auto">
                                                                                <img src="logo/<?php echo $page_logo;?>" style="width: 100%"> 
                                                                            </div>
										<h2 class="font-weight-bold text-primary">INVOICE </h2>
										<div class="">
											<h5 class="mb-1"><strong>ORDER ID:<?php echo $s_order_id;?> </strong>,</h5>
											This is the receipt for a payment of <strong>&#8358;<?= number_format($s_amount,2)?></strong>
										</div>

										<div class="card-body ps-0 pe-0">
											<div class="row">
												<div class="col-sm-6">
													<span>Transaction Ref no. </span><br>
													<strong><?php echo $s_ref;?></strong>
												</div>
												<div class="col-sm-6 text-end">
													<span>Payment Date</span><br>
													<strong><?php echo $s_date;?></strong>
												</div>
											</div>
										</div>
										<div class="dropdown-divider"></div>
										<div class="row pt-4">
											<div class="col-lg-6 ">
												<p class="h5 font-weight-bold">Delivery Info</p>
												<address>
													Address: <?php echo $s_address;?><br>
													State: <?php echo $s_state;?> <br> City: <?php echo $s_country;?><br>
													Email: <?php echo $s_email;?>
												</address>
											</div>
											<div class="col-lg-6 text-end">
												<p class="h5 font-weight-bold">Delivery Info</p>
												<address>
													Order ID: <?php echo $s_order_id;?> <br>
													Phone: <?php echo $s_phone;?><br>
													Name: <?php echo $s_name;?><br>
													
												</address>
											</div>
										</div>
                                                                                
                                                                                
										<div class="table-responsive push">
											<table class="table table-bordered table-hover text-nowrap">
                                                                                            
												<tr class=" ">
													<th class="text-center " style="width: 1%"></th>
                                                                                                        
													<th>Product</th>
													<th class="text-center" style="width: 1%">Yard</th>
													<th class="text-end" style="width: 1%">Unit Price</th>
													<th class="text-end" style="width: 1%">Amount</th>
												</tr>
                                                                                                <?php
                                    $grand_total = 0;
                                   $total_price = 0;
                                    $i=1;
                              while($row_ = $s_pp->fetch_assoc()){
                                            ?>
												<tr>
													<td class="text-center"><?php echo $i++;?></td>
                                                                                                        
													<td>
                                                                                                        <img class="avatat avatar-md brround me-2" src="product_image/<?= $row_['pimag']?>" alt="img">
													<div class="text-muted"><?= $row_['pname']?></div>
													</td>
													<td class="text-center"><?= $row_['size']?></td>
													<td class="text-end">&#8358;<?= number_format($row_['pprice'],2)?></td>
													<td class="text-end">&#8358;<?= number_format($row_['total_price'],2)?></td>
												</tr>
                                                                                                
                                                                                                <?php
                                                                                                $grand_total +=$row_['total_price'];
                                                                                                   }
                                                                                                ?>
                                                                                                
												<tr>
													<td colspan="4" class="font-weight-semibold text-end">Subtotal</td>
													<td class="text-end">&#8358;<?= number_format($grand_total,2)?></td>
												</tr>
												<tr>
													<td colspan="4" class="font-weight-semibold text-end">Delivery Fee</td>
													<td class="text-end">&#8358;<?= number_format($delivery,2)?></td>
												</tr>
												<tr>
													<td colspan="4" class="font-weight-semibold text-end">Discount</td>
													<td class="text-end">-&#8358;<?= number_format($dis,2)?></td>
												</tr>
												<tr class="text-danger">
													<td colspan="4" class="font-weight-bold text-uppercase text-end h4 mb-0">Total Due</td>
													<td class="font-weight-bold text-end h4 mb-0">&#8358;<?= number_format($s_amount,2)?></td>
												</tr>
												<tr>
													<td colspan="5" class="text-end">
													<button type="button" class="btn btn-secondary" onClick="javascript:window.print();"><i class="si si-printer"></i> Print Invoice</button>
													</td>
												</tr>
											</table>
										</div>
										<p class="text-muted text-center">Thank you for shopping with us.</p>
									</div>
								</div>
							</div>
						</div>
						<!-- End row-->

                                                
						
			</div>
			<?php
                       include 'includes/footer.php';
                        ?>

		<?php
                include 'includes/foot.php';
                ?>
