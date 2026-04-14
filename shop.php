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
        <?php
    if(isset($_GET['cat'])){
        $page = $_GET['cat'];
        $p= $db->query("SELECT *FROM `products` WHERE `status`='active' AND `category`='$page'");
        $total_cat = $db->query("select *from products where category ='$page'")->num_rows;
    }elseif(isset($_GET['brand'])){
        
    $page = $_GET['brand']; 
    $p= $db->query("SELECT *FROM `products` WHERE `status`='active' AND `brand`='$page'");
    $total_cat = $db->query("select *from products where brand ='$page'")->num_rows;
    }
    else{
      $page ="Shop";
      $p= $db->query("SELECT *FROM `products` WHERE `status`='active'");
      $total_cat = $db->query("select *from products where `status` ='active'")->num_rows;
    }
    
    ?>

        <!-- main-area -->
        <main>

            <!-- breadcrumb-area -->
           <?php
           include("includes/breadcum.php");
           ?>
            <!-- breadcrumb-area-end -->
 
            <!-- shop-area -->
            <section class="shop--area pt-50 pb-50">
                <div class="container">
                    
                    <div class="row justify-content-center">
                        <div class="col-3 order-2 order-lg-0">
                            <aside class="shop-sidebar">
                                 <?php
                                include("side/cat.php");
                                ?>
                               
                               <?php
                                include("side/filter.php");
                                ?>
                                <?php
                                include("side/brand.php");
                                ?>
                                  <div class="widget">
                                    <div class="shop-widget-banner text-center">
                                        <a href="shop"><img src="img/product/sidebar_shop_ad.jpg" alt=""></a>
                                    </div>
                                </div>
                            </aside>
                        </div>
                        <?php
      $blog_result ="";
      if(mysqli_num_rows($p)< 1){
      $blog_result ="No Products Found";
        }
      else{
      ?>
                        <div class="col-9">
                            <div class="shop-discount-area">
                                <div class="discount-content shop-discount-content">
                                    <span>portable speaker</span>
                                    <h4 class="title"><a href="shop.php">Sound That Moves With You</a></h4>
                                    <p>Super Offer TO 50% OFF</p>
                                    <a href="shop.php" class="btn rounded-btn">shop now</a>
                                </div>
                            </div>
                            
                            <div class="shop-top-meta mb-30">
                                <div class="row">
                                    <div class="col-md-3 col-sm-7 col-6">
                                        <div class="shop-top-left">
                                            <ul>
                                                <li><a href="#"><i class="fas fa-bars"></i> FILTER</a></li>
                                                
                                                
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-5 col-6" style="">
                                        <div class="shop-top-right">
                                            <form action="#" class="kkk">
                                                <select name="select" id="perpage">
                                                    <option>Per page</option>
                                                    <option value="2">2</option>
                                                    <option value="10">10</option>
                                                    <option value="20">20</option>
                                                    <option value="50">50</option>
                                                    <option value="100">100</option>
                                                    <option value="150">150</option>
                                                     <option value="200">200</option>
                                                </select>
                                            </form>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-5 col-sm-5">
                                        <div class="shop-top-right">
                                            <div class="header-search-wrap" style="margin-top: -10px; width: 60%;">
                                                <form action="#" class="kdf">
                                                    <select class="custom-select" id="cat_search1" style="">
                                           <option selected="">All Categories</option>
                                           <?php 
                                     $cat= "select * from `category`";
                                     $cat1_result1 = $db->query($cat);
                                     while($row_cat1 = $cat1_result1->fetch_assoc()) {
                                     //$cat_img=$row_cat['image'];
                                     $cat_name =$row_cat1['cat_name'];
                                     //$cat_id=$row_cat['id'];
                                                                                          
                                      ?>
                                    <option value="<?php echo $cat_name;?>"> <?php echo $cat_name;?></option> 
                                            <?php
                                            }
                                           ?>    
                                        </select>
                                        <input type="text" placeholder="Search Product,brand,category..." id="search">
                                        <button><i class="flaticon-loupe-1"></i></button>
                                    </form>
                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="shop-products-wrap">
                                <div class="row justify-content-center product_f search_result1 cat_search perpage_search search_result2 cat_search1">
                                     <?php 
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
                           <?php
            }
            ?>
                    <h3 class="text-danger text-center"><?php echo $blog_result;?></h3>
                    
                    </div>
                    
                  
                </div>
            </section>
            
           
            <!-- shop-area-end -->

        </main>
        <!-- main-area-end -->


        <!-- footer-area -->
               <?php
include("includes/foot.php");
?>

        <!-- footer-area-end -->
<?php
include("includes/foot.php");
?>