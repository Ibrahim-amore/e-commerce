
<?php
include 'includes/head.php';
?>
	<body class="app sidebar-mini">
		<!-- End Switcher -->
		<!-- GLOBAL-LOADER -->
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
                        	<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0 text-primary">Dashboard</h4>
							</div>
						</div>
						
						<!-- Row-1 -->
						<?php
                                            include 'includes/widget.php';
                                                ?>
						
					<?php 
                                        include 'includes/orders.php';
                                        ?>                
			</div>
			</div>
			<?php
                       include 'includes/footer.php';
                        ?>

		<?php
                include 'includes/foot.php';
                ?>