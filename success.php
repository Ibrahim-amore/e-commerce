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
                                <h2 class="text-success">Your Order has Been Placed Successfully !!</h2>
                                <p>Kindly check your email for details relating to this order.</p>
                               
                                 <p><b>Transaction Ref:</b> <?php echo $ref;?></p>
                                
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