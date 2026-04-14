
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
							<h4 class="page-title mb-0 text-primary">ALL ORDERS</h4>
							</div>
						</div>
						<!--End Page header-->

						
						<!--Row-->
						<?php 
                                               include 'includes/all_orders.php';
                                                ?>
                                                
                                                
			</div>
			<?php
                       include 'includes/footer.php';
                        ?>

		<?php
                include 'includes/foot.php';
                ?>


