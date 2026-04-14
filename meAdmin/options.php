
<?php
include 'includes/head.php';
?>

<?php
//include '../action/update/update-tender.php';
?>
<?php
//include '../action/create/create.php';
if(!isset($_GET['w'])){
     header('location:products');
}else{
   $pid = $_GET['w']; 
}

?>
 <?php
 $faq= "select * from `attribute`";
 $a_result = $db->query($faq);
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
	                                                <div class="page-header">
							<div class="page-leftheader">
							<h4 class="page-title mb-0 text-primary">Product Variation</h4>
							</div>
						</div>
                                            <div id="msg_option"></div>
						<!--Row-->
						<div class="row">
                                                    <?php 
                                                                                                   
                                                         while($row_a = $a_result->fetch_assoc()) {
                                                         $attr_name=$row_a['attr_name'];
                                                          $a_id=$row_a['id'];
                                                            ?>
						   <div class="col-lg-6">
								<div class="expanel expanel-default">
								<div class="expanel-heading"><?php echo $attr_name;?> Variation</div>
                                                                <?php
                                                     $faq_= "select * from `variation` where `attr_id` = '$a_id'";
                                                     $package_result = $db->query($faq_);
                                                                  ?>
								<div class="expanel-body">
                                                                    <?php 
                                                                                   $i=1;
                                                                                   while($row_p = $package_result->fetch_assoc()) {
                                                                                   $var_name=$row_p['var_name'];
                                                                                   $v_id=$row_p['id'];
                                                                                          
                                                                                             ?>
                                                                    <form method="POST" id="<?php echo $var_name;?>">
                                                                    <div class="row">
                                                                        
                                                                        <div class="col-md-3">
                                                                            <div class="form-group">
                                                                                <input type="text" class="form-control" placeholder="Product Tags" name="v_name" value="<?php echo $var_name;?>" readonly="">
										</div>
                                                                        </div>
                                                                        <input type="hidden" name="v_id" value="<?php echo $v_id;?>" required="">
                                                                        <input type="hidden" name="attr_id" value="<?php echo $a_id;?>" required="">
                                                                        <input type="hidden" value="<?php echo $pid;?>" name="pid" required="">
                                                                          <input type="hidden" value="<?php echo $attr_name;?>" name="an" required="">
                                                                       
                                                                        <div class="col-md-3">
                                                                            <div class="form-group">
                                                                                <input type="number" class="form-control" placeholder="Qty" name="qty" min="0" required="">
									</div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="form-group">
                                                                                <input type="number" class="form-control" placeholder="price" name="price" min="0">
									</div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="form-group">
                                                                                <button type="submit" name="submit_product" class="btn btn-primary" id="btn<?php echo $v_id?>"><i class="fe fe-plus-circle me-2"></i>Assign</button>
                                                                                	
										</div>
                                                                        </div>
                                                                       
                                                                    </div>
                                                                        
                                                                    </form>
                                                                   <?php
                include 'includes/foot.php';
                ?>
                                                                    <script>
 $('form#<?php echo $var_name;?>').submit(function(e){
        e.preventDefault();
       var formData = new FormData(this);
 $.ajax({
        type: 'POST',
        url:'option_api.php',
        data:formData,
        cache:false,
        processData:false,
        contentType:false,
        beforeSend:function(){
        $('#btn<?php echo $v_id?>').html("<span class='spinner-border spinner-border-sm me-1' role='status' aria-hidden='true'></span>loading...");
                     
                  },
       success:function(response){
                       $("#msg_option").fadeIn().html(response);
                       $('#btn<?php echo $v_id?>').html("<i class='fe fe-save me-2'></i>Assigned");
                     setTimeout(function () {
                            $('#msg_option').fadeOut('slow');
                        },3000);
                       
                   }
       
                 });
             }); 
                                                                    </script>
                                                                     <?php
                                                                          }
                                                                        ?>
								</div>
								
								</div>
							</div>
                                                       <?php
                                                         }
                                                       ?>
				
                                                    
			</div>
                           <?php
                                   $opr1 =$db->query("SELECT *FROM `options` WHERE `pid` = '$pid' AND `attr_name` ='length'");
                                 //$opr =$db->query("SELECT *FROM op,*,va FROM options op, variation va WHERE va.id = op.v_id");
                                      ?>  
                                                 <?php
                                   $opr =$db->query("SELECT *FROM `options` WHERE `pid` = '$pid' AND `attr_name` ='color'");
                                 //$opr =$db->query("SELECT *FROM op,*,va FROM options op, variation va WHERE va.id = op.v_id");
                                      ?> 
                         <div class="row">
                             <h3 class="text-center text-success"> Product Attribute</h3>
                              <?php
                                                            $blog_result ="";
                                                            if(mysqli_num_rows($opr)< 1){
                                                                $blog_result ="No Records Yet ";
                                                                 }
                                                            else{
                                                             ?>
                             <div class="col-lg-6">
                                <div class="card">
				<div class="card-body">
                              <div class="table-responsive">
                                    <table class="table table-bordered card-table table-vcenter text-nowrap" id="datatable676">
				
                                     <thead>
				   <tr>
                                   <th>Color</th>
                                   <th>Action</th>
                                  </tr>
			     </thead>
                             <tbody>
                                 <?php
                                 
                                  while($rp1 = $opr->fetch_assoc()){
                                      //$aa_name = $rp['attr_name'];
                                      $idd=$rp1['id'];
                                      $v_name = $rp1['v_name'];
                                      $price = $rp1['price'];
                                      $qty = $rp1['qty'];
                                 ?>
                             
                                  <tr>
                                   <td>
                                      
                                     <?php echo $v_name; ?>        
                                   </td>
                                  
                                  <td>
                                      <a href="../action/delete/dopt?v=<?php echo $idd;?>" class="btn btn-icon btn-danger" onclick="return confirm('Are you sure you want to remove this attribute?')"><i class="fa fa-trash"></i></a></td> 
                               
                                 </tr>
                             
                                 <?php
                                  }
                                 ?>
                                 </tbody>
                                </table>
                                </div>
                                </div>
                                </div>
                                                                                                
                             </div> 
                             <?php
                               }
                             ?>
                             
                             
                             <!---- LENGTH VARIATION----->
                              <?php
                                                            $blog_result ="";
                                                            if(mysqli_num_rows($opr1)< 1){
                                                                $blog_result ="No Records Yet ";
                                                                 }
                                                            else{
                                                             ?>
                               <div class="col-lg-6">
                                <div class="card">
				<div class="card-body">
                                               
                                    
				<div class="table-responsive">
                                    <table class="table table-bordered card-table table-vcenter text-nowrap" id="datatable676">
				
                                     <thead>
				   <tr>
                                   <th>Length</th>
                                   <th>Action</th>
                                  </tr>
			     </thead>
                             <tbody>
                                 <?php
                                 
                                  while($rp = $opr1->fetch_assoc()){
                                      //$aa_name = $rp['attr_name'];
                                      $idd=$rp['id'];
                                      $v_name = $rp['v_name'];
                                      $price = $rp['price'];
                                      $qty = $rp['qty'];
                                 ?>
                                  <tr>
                                   <td>
                                      
                                     <?php echo $v_name ?>yd        
                                   </td>
                                   <td><a href="../action/delete/dopt?v=<?php echo $idd;?>" class="btn btn-icon btn-danger" onclick="return confirm('Are you sure you want to remove this attribute?')"><i class="fa fa-trash"></i></a></td> 
                                  
                                 </tr>
                                 <?php
                                  }
                                 ?>
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
			<?php
                       include 'includes/footer.php';
                        ?>

		<?php
               // include 'includes/foot.php';
                ?>
 
