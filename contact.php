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

?>
        <!-- header-area-end -->


        <!-- main-area -->
        <main>
               <?php
           $page ="Contact us";
           include("includes/breadcum.php");
           ?>

            <!-- contact-area -->
            <section class="contact-area pt-90 pb-90">
                <div class="container">
                    <div class="container-inner-wrap">
                        <div class="row justify-content-center justify-content-lg-between">
                            <div class="col-lg-6 col-md-8 order-2 order-lg-0">
                                <div class="contact-title mb-25">
                                    <h5 class="sub-title">Contact Us</h5>
                                    <h2 class="title">Send us a message<span>.</span></h2>
                                </div>
                                <div class="contact-wrap-content">
                                    <form action="#" class="contact-form" id="contactform" method="POST">
                                        <div class="form-grp">
                                            
                                            <input type="text" name="name" placeholder="name" required="">
                                        </div>
                                        <div class="form-grp">
                                            
                                            <input type="tel" name="phone" placeholder="Phone number" required="">
                                        </div>
                                        <div class="form-grp">
                                            
                                            <input type="email" name="email" placeholder="email" required="">
                                        </div>
                                        <div class="form-grp">
                                            
                                            <input type="tel" name="subject" placeholder="Subject" required="">
                                        </div>
                                        <div class="form-grp">
                                            
                                            <textarea name="message" name="message" placeholder="Enter your Message"></textarea>
                                        </div>
                                       
                                        <button type="submit" class="btn rounded-btn" id="btnc">Send </button>
                                    </form>
                                    <p class="text-center text-danger" id="msg_c"></p>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-6 col-md-8">
                                <div class="contact-info-wrap">
                                    <div class="contact-img">
                                        <img src="img/images/contact_img.png" alt="">
                                    </div>
                                    <div class="contact-info-list">
                                        <ul>
                                            <li>
                                                <div class="icon p-3"><i class="fas fa-map-marker-alt"></i></div>
                                                <div class="content">
                                                    <p><?php echo $shop_address_1;?></p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon p-3"><i class="fas fa-phone-alt"></i></div>
                                                <div class="content">
                                                    <p><?php echo $phone_number;?></p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon"><i class="fas fa-envelope-open p-3"></i></div>
                                                <div class="content">
                                                    <p><?php echo $email_address;?></p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="contact-social">
                                        <ul>
                                            <li><a href="<?php echo $facebook;?>"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="<?php echo $twitter;?>"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="<?php echo $instagram;?>"><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact-area-end -->

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