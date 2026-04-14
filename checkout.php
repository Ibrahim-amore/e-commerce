<?php
include("includes/head.php");
?>
    <body>

        <!-- preloader -->
       <?php
//include("includes/preloader.php");
?>
        <!-- preloader-end -->


<!-- Scroll-top -->
       <?php
include("includes/scroll.php");
?>
        <!-- Scroll-top-end-->

        <!-- header-area -->
       <?php
include("includes/header.php");
$page = "Checkout";
?>



        <!-- main-area -->
        <main>
     <!-- breadcrumb-area -->
            <?php
           include("includes/breadcum.php");
           ?>
            <!-- breadcrumb-area-end -->

            <!-- checkout-area -->
            <div class="checkout-area pt-30 pb-90">
                <div class="container">
                    
                    <form action="" id="form_1" method="POST">
                    <div class="row justify-content-center">
                        
                        <div class="col-lg-7">
                            <div class="checkout-form-wrap">
                                  <div class="building-info-wrap">
                                        <h5 class="title">Billing Information</h5>
                                        <div class="row">
                                            <div class="col-md-6 px-3">
                                                <input type="text" placeholder="First Name *" name="firstname" required="">
                                            </div>
                                            <div class="col-md-6 px-3">
                                                <input type="text" placeholder="Last Name *" name="lastname" required="">
                                            </div>
                                        </div>
                                        <input type="email" placeholder="email*" name="email" required="">
                                        <input type="tel" placeholder="phone *" name="phone" required="">
                                        
                                        <div class="row">
                                            <div class="col-md-6 px-3">
                                                <select class="" id="state" name="state" required="">
                                                        <option value="">Select State of Delivery</option>
              <option value="Abuja FCT">Abuja FCT</option>
              <option value="Abia">Abia</option>
              <option value="Adamawa">Adamawa</option>
              <option value="Akwa Ibom">Akwa Ibom</option>
              <option value="Anambra">Anambra</option>
              <option value="Bauchi">Bauchi</option>
              <option value="Bayelsa">Bayelsa</option>
              <option value="Benue">Benue</option>
              <option value="Borno">Borno</option>
              <option value="Cross River">Cross River</option>
              <option value="Delta">Delta</option>
              <option value="Ebonyi">Ebonyi</option>
              <option value="Edo">Edo</option>
              <option value="Ekiti">Ekiti</option>
              <option value="Enugu">Enugu</option>
              <option value="Gombe">Gombe</option>
              <option value="Imo">Imo</option>
              <option value="Jigawa">Jigawa</option>
              <option value="Kaduna">Kaduna</option>
              <option value="Kano">Kano</option>
              <option value="Katsina">Katsina</option>
              <option value="Kebbi">Kebbi</option>
              <option value="Kogi">Kogi</option>
              <option value="Kwara">Kwara</option>
              <option value="Lagos">Lagos</option>
              <option value="Nassarawa">Nassarawa</option>
              <option value="Niger">Niger</option>
              <option value="Ogun">Ogun</option>
              <option value="Ondo">Ondo</option>
              <option value="Osun">Osun</option>
              <option value="Oyo">Oyo</option>
              <option value="Plateau">Plateau</option>
              <option value="Rivers">Rivers</option>
              <option value="Sokoto">Sokoto</option>
              <option value="Taraba">Taraba</option>
              <option value="Yobe">Yobe</option>
              <option value="Zamfara">Zamfara</option>
                            
                               </select>
                          </div>
                        <div class="col-md-6 px-3">
                     <input type="text" placeholder="Town/ City" name="city">
                        </div>
                       </div>
                      <input type="text" placeholder="Street Address*" name="address" required="">
                    <textarea name="note" placeholder=""></textarea>
                      </div>
                        </div>  
                            
                         </div>
                        
                        <div class="col-lg-5">
                            <div class="shop-cart-total order-summary-wrap">
                                <h3 class="title">Order Summary</h3>
                                <div class="shop-cart-widget">
                                    
                                        <div id="show_state"> 
                              </div>
                                        
                                            <div class="payment-method-info">
                                                <div class="paypal-method-flex mt-10">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="radio" class="custom-control-input" id="customCheck7" name="p" value="flutterwave" checked="">
                                                    <label class="custom-control-label" for="customCheck7">Flutterwave</label>
                                                </div>
                                                <div class="paypal-logo"><img src="img/images/card.png" alt=""></div>
                                            </div>
                                            <div class="paypal-method-flex mt-10">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="radio" class="custom-control-input" id="customCheck5" name="p" value="delivery">
                                                    <label class="custom-control-label" for="customCheck5">Cash on delivery</label>
                                                   
                                                </div>
                                            </div>
                                                 <div class="paypal-method-flex mt-10">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="radio" class="custom-control-input" id="customCheck6" name="p" value="transfer">
                                                    <label class="custom-control-label" for="customCheck6">Bank Transfer</label>
                                                </div>
                                                     <div class="paypal-logo"><b>Bank Name:<?php echo $bank_name;?></b><br><b>Acc Name:<?php echo $acc_name;?></b><br><b>Acc No:<?php echo $acc_no;?></b></div>
                                            </div>
                                            
                                                
                                        </div>
                                    
                                    <button class="btn" type="submit" name="pay">Place order</button>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    
               </form>
                </div>
            </div>
            <!-- checkout-area-end -->

        </main>
        <!-- main-area-end -->


        <!-- footer-area -->
             <?php
include("includes/footer.php");
?>

        <!-- footer-area-end -->
<?php
include("includes/foot.php");
?>