<?php
include("includes/head.php");
?>
    <body>

        <!-- preloader -->
       <?php
include("includes/preloader.php");
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

        <!-- main-area -->
        <main>

            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-content">
                                <h2 class="title">About Us</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">About us</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

            <!-- ingredients-area -->
            <section class="ingredients-area pt-90 pb-90">
                <div class="container">
                    <div class="ingredients-inner-wrap">
                        <div class="row align-items-center">
                            <div class="col-7">
                                <div class="ingredients-img">
                                    <img src="img/images/ingredients_img.jpg" alt="">
                                    <div class="active-years">
                                        <h2 class="title">2+ <span>Years</span></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="ingredients-content-wrap">
                                    <div class="ingredients-section-title">
                                        <span class="sub-title">About <?php echo $page_name?></span>
                                        <h2 class="title">Your No.1 Grocery Store </h2>
                                    </div>
                                    <p><?php
                                    echo $about_us;
                                    ?></p>
                                    <div class="ingredients-fact">
                                        
                                    </div>
                                    <div class="ingredients-btn-wrap">
                                        <a href="shop" class="btn">Shop now</a>
                                        <a href="index" class="store-link">our Super Store <i class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ingredients-area-end -->

            <!-- services-area -->
            <section class="services-area services-bg">
                <div class="container">
                    <div class="container-inner-wrap">
                        <div class="row justify-content-center">
                            <div class="col-xl-7 col-lg-9">
                                <div class="services-section-title text-center mb-55">
                                    <h2 class="title">What We Provide?</h2>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                                <div class="services-item">
                                    <a href="shop" class="services-link"></a>
                                    <div class="icon"><i class="flaticon-return"></i></div>
                                    <div class="content">
                                        <h5>Easy Checkout</h5>
                                        <p>We provide easy and secure checkout process</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                                <div class="services-item">
                                    <a href="shop" class="services-link"></a>
                                    <div class="icon"><i class="flaticon-delivery"></i></div>
                                    <div class="content">
                                        <h5>Nationwide Delivery</h5>
                                        <p>We deliver to all parts of the country</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                                <div class="services-item">
                                    <a href="shop" class="services-link"></a>
                                    <div class="icon"><i class="flaticon-like-1"></i></div>
                                    <div class="content">
                                        <h5>Discounted Sale</h5>
                                        <p>We provide discount on every order</p>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </section>
            <!-- services-area-emd -->

            <!-- newsletter-area -->
            <section class="newsletter-area pt-90 pb-90">
                <div class="container">
                    <div class="container-inner-wrap">
                        <div class="row">
                            <div class="col-12">
                                <div class="newsletter-wrap">
                                    <h2 class="title">Subscribe to our newsletter <span>to receive promotion offers</span></h2>
                                    <div class="newsletter-form">
                                        <form action="#" id="sub1" method="POST">
                                            <input type="email" placeholder="Email address" name="email" required="">
                                            <button class="btn" type="submit" id="btn_subzr">subscribe</button>
                                        </form>
                                        
                                    </div>
                                    <img src="img/images/newsletter_shape01.png" alt="" class="newsletter-shape top-shape wow fadeInDownBig" data-wow-delay=".3s">
                                    <img src="img/images/newsletter_shape02.png" alt="" class="newsletter-shape bottom-shape wow fadeInUpBig" data-wow-delay=".3s">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- newsletter-area-end -->

            <!-- online-support-area -->
            
            <!-- online-support-area-end -->

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