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
        <!-- header-area-end -->


        <!-- main-area -->
        <main>
            <!-- slider-area -->
            <section class="slider-area" data-background="img/bg/slider_area_bg.jpg">
                <div class="container custom-container">
                    <div class="row">
                        <div class="col-7">
                            <div class="slider-active">
                                <div class="single-slider slider-bg" data-background="img/slider/phones-2.jpg">
                                    <div class="slider-content">
                                        <h5 class="sub-title" data-animation="fadeInUp" data-delay=".2s">TOP DEAL !</h5>
                                        <h2 class="title" data-animation="fadeInUp" data-delay=".4s">QUALITY PHONE</h2>
                                        <p data-animation="fadeInUp" data-delay=".6s">Get up to 50% OFF Today Only</p>
                                        <a href="shop.php" class="btn rounded-btn" data-animation="fadeInUp" data-delay=".8s">Shop Now</a>
                                    </div>
                                </div>
                                <div class="single-slider slider-bg" data-background="img/slider/rex.jpg">
                                    <div class="slider-content">
                                        <h5 class="sub-title" data-animation="fadeInUp" data-delay=".2s">Real simple !</h5>
                                        <h2 class="title" data-animation="fadeInUp" data-delay=".4s">AFFORDABLE LAPTOPS</h2>
                                        <p data-animation="fadeInUp" data-delay=".6s">Get up to 50% OFF Today Only</p>
                                        <a href="shop.php" class="btn rounded-btn" data-animation="fadeInUp" data-delay=".8s">Shop Now</a>
                                    </div>
                                </div>
                                <div class="single-slider slider-bg" data-background="img/slider/slider__bg0A.jpg">
                                    <div class="slider-content">
                                        <h5 class="sub-title" data-animation="fadeInUp" data-delay=".2s">QUALITY SOUND !</h5>
                                        <h2 class="title" data-animation="fadeInUp" data-delay=".4s">HEADSET</h2>
                                        <p data-animation="fadeInUp" data-delay=".6s">Get up to 50% OFF Today Only</p>
                                        <a href="shop.php" class="btn rounded-btn" data-animation="fadeInUp" data-delay=".8s">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="slider-banner-img mb-20">
                                <a href="shop.php"><img src="img/slider/sliderB.jpg" alt=""></a>
                            </div>
                            <div class="slider-banner-img">
                                <a href="shop.php"><img src="img/slider/sliderC.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="slider-banner-img">
                                <a href="shop.php"><img src="img/slider/sliderD.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- category-area -->
               <?php
               include ("includes/home-cat.php");
               ?>
                <!-- category-area-end -->

            </section>
            <!-- slider-area-end -->

            <!-- discount-area -->
            <section class="discount-area pt-30">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-4 col-lg-6 col-md-8">
                            <div class="discount-item mb-20">
                                <div class="discount-thumb">
                                    <img src="img/slider/phone-cove.jpg" alt="" style="height: 220px; width: 420px;">
                                </div>
                                <div class="discount-content">
                                    <span style="color: #000;">Correct pouch</span>
                                    <h4 class="title" style="color: #070707;"><a href="shop">100% rubber</a></h4>
                                    <a href="shop" class="btn">shop now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-8">
                            <div class="discount-item mb-20">
                                <div class="discount-thumb">
                                    <img src="./img/product/laptop-2(2).jpg" alt="" style="height: 220px; width: 420px;">
                                </div>
                                <div class="discount-content">
                                    <span  style="color: #070707;">Accessory</span>
                                    <h4 class="title" style="color: #070707;"><a href="shop">portable powerhouse</a></h4>
                                    <a href="shop" class="btn">shop now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-8">
                            <div class="discount-item style-two mb-20">
                                <div class="discount-thumb">
                                    <img src="img/product/pod.jpg" alt="" style="height: 220px; width: 420px;">
                                </div>
                                <div class="discount-content">
                                    <span>music</span>
                                    <h4 class="title"><a href="shop">earpods <br>UP TO 5%</a></h4>
                                    <a href="shop" class="btn">shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- discount-area-end -->

            <!-- best-deal-area -->
         <?php
         include("discount.php");
         ?>
            <!-- best-deal-area-end -->

            <!-- special-products-area -->
            <section class="special-products-area gray-bg pt-50 pb-30">
                <div class="container">
                    <div class="row align-items-end mb-50">
                        <div class="col-md-8 col-sm-9">
                            <div class="section-title">
                                <span class="sub-title">Featured Items</span>
                                <h2 class="title">Browse our product collections</h2>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-3">
                            <div class="section-btn text-left text-md-right">
                                <a href="shop" class="btn">View All</a>
                            </div>
                        </div>
                    </div>
                    <div class="special-products-wrap">
                        <div class="row">
                            <div class="col-3 d-none d-lg-block">
                                <div class="special-products-add">
                                    <div class="sp-add-thumb">
                                        <img src="img/product/aside-1.jpg" alt="" style="width: 250px; height: 700px;">
                                    </div>
                                    <div class="sp-add-content">
                                        <span class="sub-title">high quality</span>
                                        <h4 class="title">smartphone<br><b>camera</b></h4>
                                       <!-- <p>Super Offer TO 50% OFF</p>-->
                                        <a href="shop" class="btn rounded-btn">shop now</a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-9">
                                <div class="row justify-content-center">
                                     <?php 
                             $p= $db->query("SELECT *FROM `products` WHERE `status`='active' LIMIT 8");
                           while($row_g = $p->fetch_assoc()) {
                                 $pn=$row_g['pn'];
                                 $price =$row_g['price'];
                                 $img=$row_g['img'];
                                 $img1=$row_g['img1'];
                                 $img2=$row_g['img2'];
                                 $img3=$row_g['img3'];
                                 $dimension=$row_g['dimension'];
                                 $discount=$row_g['discount'];
                                 $status=$row_g['status'];
                                 $brand=$row_g['brand'];
                                 $category=$row_g['category'];
                                  $des=$row_g['des'];
                                  $w=$row_g['w'];
                                  $pt=$row_g['pt'];
                                  $pcode=$row_g['product_code'];
                                  $price_1 =($price - ($price * ($discount/100)));
                                  $p_id=$row_g['id'];
                                  $des1 = substr($des,0, 400); 
                                  $pn1 = substr($pn,0, 10); 
                                  $pn = substr($pn,0, 20); 
                                  $pt = substr($pt,0, 15); 
                                  ?>           
                                    <div class="col-xl-3 col-md-4 col-sm-6 col-6">
                                        <?php
                                       include("includes/pp.php");
                                       ?>
                                    </div>
                                    <?php
                           }
                                    ?>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- special-products-area-end -->

            <!-- coupon-area -->
            <div class="coupon-area gray-bg pb-30">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <?php
            include("includes/coupon-area.php");
            ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- coupon-area-end -->

            <!-- best-sellers-area -->
            <?php
            include("new-arrival.php");
            ?>
            <!-- best-sellers-area-end -->

             <!-- discount-area -->
             <section class="discount-style-two pt-60 pb-50">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="discount-item-two">
                                <div class="discount-thumb">
                                    <img src="img/product/smart.jpg" alt="" style="height: 300px; width:640px">
                                </div>
                                <div class="discount-content">
                                    <span style="color: white;">pocket buddy</span>
                                    <h4 class="title" style="color: white;"><a href="shop">your world <br>in your hands</a></h4>
                                    <p style="color: white;">Super Offer TO 5% OFF</p>
                                    <a href="shop" class="btn rounded-btn">shop now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="discount-item-two">
                                <div class="discount-thumb">
                                    <img src="img/product/earp.jpg" alt="" style="height: 300px; width: 650px;">
                                </div>
                                <div class="discount-content">
                                    <span>ear buddy</span>
                                    <h4 class="title"><a href="shop">your music, <br>your world</a></h4>
                                    <p>Super Offer TO 5% OFF</p>
                                    <a href="shop" class="btn rounded-btn">shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- discount-area-end -->

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



