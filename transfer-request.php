
<?php
include("includes/head2.php");
?>
<?php
if((!isset($_GET['p']))||($_GET['p'] == "")){
    header('location:index');
}
 else {
   $ref = $_GET['p']; 
}

?>


        <!-- main-area -->
        <main>
      <!-- 404-area -->
            <section class="error-area pt-100 pb-100">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-10">
                            <div class="error-content text-center">
                                <div class="error_txt"><img src="c.gif"></div>
                                <h5 class="text-success">Your Order has Been Placed Successfully !!</h5>
                                 <p><b>Order ID:</b> <?php echo $ref;?></p>
                                <div class="search_form">
                                    <form method="POST" action="" enctype="multipart/form-data">
                                        <div class="col-sm-12 col-md-12 my-2">
								     <div class="form-group mb-0">
                                                                     <label style="font-weight: bold; font-size: 1.0rem;">Upload Evidence of payment</label>   
                                                                     <label class="uploadLabel">
                                                                        <i class="fas fa-file-upload text-primary"></i> 
                                                                        <input type="file"  accept=".pdf,.jpg,.png,.gif" class="uploadButton" id="file" name="file"/>
                                                                        <div class="upload-p mx-1">
                                                                           <p>Add your files here ... <a class="text-primary">Browse</a> <br>
                                                                           <em>we only accept pdf/image max <strong class="text-danger">5mb;</strong></em>
                                                                           <p> 
                                                                        </div>       
                                                                       </label>
                                                                        </div>
                                            <div id="show_output"></div>
									</div>
                                        <input type="hidden" name="ref" value="1">
                                    </form>
                                </div>
                                <a href="index" class="btn rounded-btn">Return Home</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- 404-area-end -->

        </main>
        <!-- main-area-end -->

<a href="<?php echo $whatsapp;?>"><div class="whatsapp" title="send us a message"> <img src="img/wa.png"></div></a>

          <?php
//include("includes/footer.php");
?>

        <!-- footer-area-end -->
<?php
include("includes/foot.php");
?>