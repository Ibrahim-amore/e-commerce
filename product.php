<?php
include 'connection/config.php';
?>
<?php
if(!isset($_GET['pid'])){
header('location:shop');
}else{
 $p_id = $_GET['pid'];
 $tender= "select * from `products` where id='$p_id' AND status='active'";
 $product_result = $db->query($tender);
  $row_p = $product_result->fetch_assoc();
                                                                                         $pn=$row_p['pn'];
                                                                                         $price =$row_p['price'];
                                                                                         $qty=$row_p['qty'];
                                                                                          $img=$row_p['img'];
                                                                                          $img1=$row_p['img1'];
                                                                                          $img2=$row_p['img2'];
                                                                                          $img3=$row_p['img3'];
                                                                                          $dimension=$row_p['dimension'];
                                                                                          $discount=$row_p['discount'];
                                                                                          $status=$row_p['status'];
                                                                                           $brand=$row_p['brand'];
                                                                                            $category=$row_p['category'];
                                                                                             $des=$row_p['des'];
                                                                                             $w=$row_p['w'];
                                                                                             $k_w=$row_p['kw'];
                                                                                              $video=$row_p['video_link'];
                                                                                             $pt=$row_p['pt'];
                                                                                             $condition=$row_p['cond'];
                                                                                             $pcode=$row_p['product_code'];
                                                                                             $price_1 =($price - ($price * ($discount/100)));
                                                                                          $p_id=$row_p['id'];
                                                                                          $des1 = substr($des,0, 300);
                                                                                         
 
}
$page = $pn;
include ('includes/head.php');


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



        <!-- main-area -->
        <main>

            <!-- breadcrumb-area -->
           <?php
           include("includes/breadcum.php");
           ?>
            <!-- breadcrumb-area-end -->

            <!-- shop-details-area -->
            <section class="shop-details-area pt-90 pb-90">
                <div class="container" style="max-width: 1200px;">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="shop-details-flex-wrap">
                                <div class="shop-details-nav-wrap">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link active" id="item-one-tab" data-toggle="tab" href="#item-one" role="tab" aria-controls="item-one" aria-selected="true"><img src="meAdmin/product_image/<?php echo $img?>" alt=""></a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" id="item-two-tab" data-toggle="tab" href="#item-two" role="tab" aria-controls="item-two" aria-selected="false"><img src="meAdmin/product_image1/<?php echo $img1?>" alt=""></a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" id="item-three-tab" data-toggle="tab" href="#item-three" role="tab" aria-controls="item-three" aria-selected="false"><img src="meAdmin/product_image2/<?php echo $img2?>" alt=""></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="shop-details-img-wrap">
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="item-one" role="tabpanel" aria-labelledby="item-one-tab">
                                            <div class="shop-details-img">
                                                <img src="meAdmin/product_image/<?php echo $img?>" alt="">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="item-two" role="tabpanel" aria-labelledby="item-two-tab">
                                            <div class="shop-details-img">
                                                <img src="meAdmin/product_image1/<?php echo $img1?>" alt="">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="item-three" role="tabpanel" aria-labelledby="item-three-tab">
                                            <div class="shop-details-img">
                                                <img src="meAdmin/product_image2/<?php echo $img2?>" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="shop-details-content">
                                <h4 class="title"><?php echo $pn;?></h4>
                                <div class="shop-details-meta">
                                    <ul>
                                        <li>Brands : <a href="shop?brand=<?php echo $b_name;?>"><?php echo $brand;?></a></li>
                                        <li class="shop-details-review">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <span>Review</span>
                                        </li>
                                        <li>ID : <span><?php echo $pcode;?></span></li>
                                    </ul>
                                </div>
                                <div class="shop-details-price">
                                    <h2 class="price"><?php echo $naira;?><?= number_format($price_1,2)?> 
                                        <?php 
                                      if($discount > 0){
                                                ?>
                                        <span><del><?php echo $naira;?><?= number_format($price,2)?></del></span>
                                        <?php
                                      }
                                        ?>
                                    </h2>
                                    
                                </div>
                                <p><?php echo $des1;?></p>
                                <div class="shop-details-list">
                                    <ul>
                                        <li>Category : <span><?php echo $category;?></span></li>
                                        <li>Color : <span><?php echo $condition;;?></span></li>
                                        <li>Tag : <span><?php echo $pt;?></span></li>
                                    </ul>
                                </div>
                                <form action="#" method="POST" class="gt">
                                <div class="shop-perched-info">
                                    <div class="sd-cart-wrap">
                                        
                                            <div class="cart-plus-minus">
                                               <input type="number" class="qty-input" value="1" name="qty">
                                            </div>
                                        <input type="hidden" class="pid" value="<?php echo $p_id;?>">
                                             <input type="hidden" class="pname" value="<?php echo $pn;?>">
                                              <input type="hidden" class="pimg" value="<?php echo $img;?>">
                                               <input type="hidden" class="pprice" value="<?php echo $price_1;?>">
                                               <input type="hidden" class="pw" value="<?php echo $w;?>">
                                               <input type="hidden" class="s_id" value="<?php echo $s_id;?>">
                                              <input type="hidden" class="pcode" value="<?php echo $pcode;?>">
                                        
                                        
                                    </div>
                                    <button class="addItemBtn btn" id="btn_cart" type="submit" style="margin-top: -10px;"><i class="fas fa-cart-plus me-2" ></i> add to cart</button>
                                </div>
                                </form>
                                <p id="message"></p>
                                
                                <div class="shop-details-bottom">
                                     <div class="addthis_inline_share_toolbox"></div>
                                    <h5 class="title"><a href="#"><i class="far fa-plus"></i> Additional Info</a></h5>
                                    <ul>
                                        <li>
                                            <span>Tag : </span>
                                            <a href="#"><?php echo $pt;?></a>
                                        </li>
                                        <li>
                                            <span>CATEGORIES :</span>
                                            <a href="#"><?php echo $category;?></a>
                                           
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="product-desc-wrap">
                                <ul class="nav nav-tabs" id="myTabTwo" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="details-tab" data-toggle="tab" href="#details" role="tab"
                                            aria-controls="details" aria-selected="true">Product Details</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="val-tab" data-toggle="tab" href="#val" role="tab" aria-controls="val"
                                            aria-selected="false">Viewers Also Like</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab"
                                            aria-controls="review" aria-selected="false">Product Reviews</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContentTwo">
                                    <div class="tab-pane fade show active" id="details" role="tabpanel" aria-labelledby="details-tab">
                                        <div class="product-desc-content">
                                            <h4 class="title">Product Details</h4>
                                            <div class="row">
                                                <div class="col-xl-12 col-md-12">
                                                    <h5 class="small-title"><?php echo $pn;?></h5>
                                                    <p>
                                                      <?php echo $des;?>  
                                                    </p>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                                        <div class="product-desc-content">
                                            <h4 class="title">Reviews</h4>
                                           <!---
                                            <div class="row">
                                                <div class="col-xl-3 col-md-5">
                                                    <div class="product-desc-img">
                                                        <img src="img/product/desc_img.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-xl-9 col-md-7">
                                                   
                                                </div>
                                            </div>
                                            -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- shop-details-area-end -->

            <!-- coupon-area -->
            <div class="coupon-area">
                <div class="container" style="max-width: 1200px;">
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
            <section class="best-sellers-area pt-85 pb-70">
                <div class="container" style="max-width: 1200px;">
                    <div class="row align-items-end mb-40">
                        <div class="col-md-8 col-sm-9">
                            <div class="section-title">
                                <span class="sub-title">Related Products</span>
                                <h2 class="title">From this Category</h2>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-3">
                            <div class="section-btn text-left text-md-right">
                                <a href="shop?cat=<?php echo $category;?>" class="btn">View All</a>
                            </div>
                        </div>
                    </div>
                    <div class="best-sellers-products">
                        <div class="row justify-content-center">
                            
                             <?php 
                              $pr= $db->query("SELECT *FROM `products` WHERE `status`='active' AND `category`='$category' LIMIT 4");
                           while($row_g = $pr->fetch_assoc()) {
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
                            <div class="col-xl-3 col-md-3 col-sm-6 col-6">
                                
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
            </section>
            <!-- best-sellers-area-end -->

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