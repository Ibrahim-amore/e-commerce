
<?php
include 'includes/head.php';
?>
<?php
include '../action/update/update-home.php';
?>
	<body class="app sidebar-mini">
		<!-- End Switcher -->
		<!-- GLOBAL-LOADER -->
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
                                           $home_msg ="";
                                           if(isset($_GET['h_u'])){
                                               $home_msg = "<div class='alert alert-success' role='alert'><button type='button' class='btn-close' data-bs-dismiss='alert' aria-hidden='true'>×</button>
											<i class='fa fa-check-circle-o me-2' aria-hidden='true'></i>Payment Credentials updated Successfully</div> ";
                                                       
                                           }
                                           ?>
                        	<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
							<h4 class="page-title mb-0 text-primary">Page Content</h4>
							</div>
						</div>
						<!--End Page header-->

						
						<!--Row-->
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12">
							<div class="card">
									<div class="card-header text-center">
										<h3 class="card-title">Page Information</h3>
									</div>
									<div class="card-body">
                                                                            <?php
                                                                            echo $home_msg;
                                                                            ?>
                                                                            <form method="POST" enctype="multipart/form-data">
										<div class="row">
											<div class="col-sm-6 col-md-6">
												<div class="form-group">
													<label class="form-label">Phone Number <span class="text-red">*</span></label>
                                                                                                        <input type="tel" class="form-control" placeholder="phone number"name="phone" value="<?php echo $page_phone;?>">
												</div>
											</div>
											<div class="col-sm-6 col-md-6">
												<div class="form-group">
													<label class="form-label">Email <span class="text-red">*</span></label>
                                                                                                        <input type="email" class="form-control" placeholder="Email" name="email" value="<?php echo $page_email;?>">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="form-label">Facebook link <span class="text-red">*</span></label>
                                                                                                        <input type="url" class="form-control" placeholder="facebok link" name="fb" value="<?php echo $page_fb;?>">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="form-label">Instagram link <span class="text-red">*</span></label>
                                                                                                        <input type="url" class="form-control" placeholder="Instagram Link" name="ins" value="<?php echo $page_ins;?>">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="form-label">Twitter link <span class="text-red">*</span></label>
                                                                                                        <input type="url" class="form-control" placeholder="Twitter link" name="tw" value="<?php echo $page_tw;?>">
												</div>
											</div>
                                                                                    <div class="col-md-12">
												<div class="form-group">
													<label class="form-label">Youtube Chanel <span class="text-red">*</span></label>
                                                                                                        <input type="url" class="form-control" placeholder="Youtube channel link" name="tel" value="<?php echo $page_tel;?>">
												</div>
											</div>
                                                                                    <div class="col-md-12">
												<div class="form-group">
													<label class="form-label">Linkedln Link <span class="text-red">*</span></label>
                                                                                                        <input type="url" class="form-control" placeholder="Linkedln link" name="ln" value="<?php echo $page_ln;?>">
												</div>
											</div>
                                                                                    <div class="col-md-12">
												<div class="form-group">
													<label class="form-label">Whatsapp link <span class="text-red">*</span></label>
                                                                                                        <input type="url" class="form-control" placeholder="Whatsapp link" name="wl" value="<?php echo $wl;?>">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="form-label">Site Name <span class="text-red">*</span></label>
                                                                                                        <input type="text" class="form-control" placeholder="Site Name" name="address" value="<?php echo $page_address;?>">
												</div>
											</div>
											<div class=" col-md-12">
												<div class="form-group">
													<label class="form-label">Meta Title <span class="text-red">*</span></label>
                                                                                                        <input type="text" class="form-control" placeholder="Page Title" name="title" value="<?php echo $page_title;?>">
												</div>
											</div>
                                                                                    <div class=" col-md-12">
												<div class="form-group">
													<label class="form-label">Meta Key words <span class="text-red">*</span></label>
                                                                                                        <input type="text" class="form-control" placeholder="Key words" name="key_words" value="<?php echo $page_key_words;?>">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
                                                                                                    <label class="form-label">Meta Description <span class="text-red">*</span></label>
											<textarea class="form-control" name="description" rows="6" placeholder="MEta Description"><?php echo $page_description;?></textarea>
											</div>
											</div>
                                                                                    <div class="col-md-12">
												<div class="form-group">
                                                                                                    <label class="form-label">LIVE CHAT API <span class="text-red">*</span></label>
											<textarea class="form-control" name="chat" rows="6" placeholder="Live chat API codes"><?php echo $page_chat;?></textarea>
											</div>
											</div>
                                                                                    
                                                                                    
                                                                                    <div class="col-md-12">
												<div class="form-group">
                                                                                                    <label class="form-label">Google Analytics codes <span class="text-red">*</span></label>
											<textarea class="form-control" name="android" rows="6" placeholder="google analytics"><?php echo $android;?></textarea>
											</div>
											</div>
                                                                                    
                                                                                    <div class="col-md-12">
												<div class="form-group">
                                                                                                    <label class="form-label">Pixel codes <span class="text-red">*</span></label>
											<textarea class="form-control" name="ios" rows="6" placeholder="facebook pixel codes here"><?php echo $ios;?></textarea>
											</div>
											</div>
                                                                                    
											
                                                                                    
                                                                                    <div class="col-md-12">
												<div class="form-group">
                                                                                                    <label class="form-label">Shop Address <span class="text-red">*</span></label>
											<textarea class="form-control" name="h" rows="6" placeholder="Address"><?php echo $h;?></textarea>
											</div>
											</div>
                                                                                     
                                                                                    
                                                                                    <div class="col-md-12">
												<div class="form-group">
                                                                                                    <label class="form-label">About Us Content <span class="text-red">*</span></label>
											<textarea class="form-control" name="p" rows="6" placeholder="Paragraph text"><?php echo $p;?></textarea>
											</div>
											</div>
                                                                                     <div class="col-md-12">
												<div class="form-group">
                                                                                                    <label class="form-label">Welcome Message <span class="text-red">*</span></label>
											<textarea class="form-control" name="welcome" rows="6" placeholder=" Welcome Message"><?php echo $welcome;?></textarea>
											</div>
											</div>
                                                                                    
                                                                                    <div class="col-md-12">
												<div class="form-group">
                                                                                                    <label class="form-label">Google map iframe <span class="text-red">*</span></label>
											<textarea class="form-control" name="map" rows="6" placeholder="Paragraph text"><?php echo $map?></textarea>
											</div>
											</div>
                                                                                  
                                                                                    
                                                                                    
                                                                                    <div class="col-sm-6 col-md-8">
												<div class="form-group">
													<label class="form-label">LOGO (166 by 55)<span class="text-red">*</span></label>
													<div class="input-group file-browser mb-5">
                                                                                                            
											<input type="text" class="form-control browse-file" placeholder="choose" readonly>
											<label class="input-group-text btn btn-primary">
                                                                                            Browse your Files <input type="file" class="file-browserinput" style="display: none;" name="attachment">
											</label>
										              </div>
												</div>
											</div>
											<div class="col-sm-4 col-md-4">
                                                                                            <img src="logo/<?php echo $page_logo;?>" width="166px" height="55px">
											</div>
                                                                                    <div class="col-sm-6 col-md-8">
												<div class="form-group">
													<label class="form-label">FAVICON (50 by 50)<span class="text-red">*</span></label>
													<div class="input-group file-browser mb-5">
                                                                                                            
											<input type="text" class="form-control browse-file" placeholder="choose" readonly>
											<label class="input-group-text btn btn-primary">
                                                                                            Browse your Files <input type="file" class="file-browserinput" style="display: none;" name="app">
											</label>
										              </div>
												</div>
											</div>
											<div class="col-sm-4 col-md-4">
                                                                                            <img src="app_logo/<?php echo $app_logo;?>" width="50px" height="50px">
											</div>
                                                                                         <h3>Email Settings</h3>
                                                                                    <div class="col-sm-6 col-md-3">
												<div class="form-group">
													<label class="form-label">Mail host <span class="text-red">*</span></label>
                                                                                                        <input type="text" class="form-control" placeholder="mail host" name="mh" value="<?php echo $mail_host;?>">
												</div>
											</div>
											<div class="col-sm-6 col-md-3">
												<div class="form-group">
													<label class="form-label">Incoming Email Address <span class="text-red">*</span></label>
                                                                                                        <input type="email" class="form-control" placeholder="Email" name="icm" value="<?php echo $in_coming_mail;?>">
												</div>
											</div>
                                                                                         
                                                                                         <div class="col-sm-6 col-md-3">
												<div class="form-group">
													<label class="form-label">Mail Password <span class="text-red">*</span></label>
                                                                                                        <input type="password" class="form-control" placeholder="mail password" name="mp" value="<?php echo $mail_password;?>">
												</div>
											</div>
                                                                                         
											<div class="col-sm-6 col-md-3">
												<div class="form-group">
													<label class="form-label">Port <span class="text-red">*</span></label>
                                                                                                        <input type="number" class="form-control" placeholder="port" name="port" value="<?php echo $port;?>" min="0">
												</div>
											</div>
                                                                                         
                                                                                         <h3>Bank Account Details</h3>
                                                                                    <div class="col-sm-6 col-md-4">
												<div class="form-group">
													<label class="form-label">Account Name <span class="text-red">*</span></label>
                                                                                                        <input type="text" class="form-control" placeholder="Account name" name="a_n" value="<?php echo $acc_name;?>">
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group">
													<label class="form-label">Bank Name <span class="text-red">*</span></label>
                                                                                                        <input type="text" class="form-control" placeholder="Bank Name" name="b_n" value="<?php echo $b_n;?>">
												</div>
											</div>
                                                                                         
                                                                                         <div class="col-sm-6 col-md-4">
												<div class="form-group">
													<label class="form-label">Account Number <span class="text-red">*</span></label>
                                                                                                        <input type="text" class="form-control" placeholder="Account Number" name="acc" value="<?php echo $acc_no;?>">
												</div>
											</div>
                                                                                         
                                                                                    <div class="col-md-12">
                                                                                    <div class="form-group text-center mb-3">
                                                                                     <button type="submit" name="update-home" class="btn btn-primary btn-lg w-100 br-7"><i class="fa fa-edit me-2"></i>Update</button>
														</div>
                                                                                    
											</div>
										</div>
                                                                                
                                                                                
                                                                        </form>
									</div>
								</div>
                                                            
                                                            
                                                            
                                                            
							</div>
						</div>
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
			</div>
			</div>
			<?php
                       include 'includes/footer.php';
                        ?>

		<?php
                include 'includes/foot.php';
                ?>
