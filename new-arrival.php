<?php
   $pgd= $db->query("SELECT *FROM `products` WHERE YEAR(date) = YEAR(NOW()) AND MONTH(date)= MONTH(NOW()) AND WEEK(date)= WEEK(NOW()) AND `status`='active' LIMIT 4");  ?>
<?php
$blog_result ="";
      if(mysqli_num_rows($pgd)< 1){
      $blog_result ="No Products Found";
        }
      else{
      ?>
<section class="best-sellers-area pt-75">
                <div class="container">
                    <div class="row align-items-end mb-50">
                        <div class="col-md-8 col-sm-9">
                            <div class="section-title">
                                <span class="sub-title">New Arrival</span>
                                <h2 class="title">Be the first to View</h2>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-3">
                            <div class="section-btn text-left text-md-right">
                                <a href="shop" class="btn">View All</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="best-sellers-products">
                        <div class="row justify-content-center">
                            <?php 
                             
                           while($row_g = $pgd->fetch_assoc()) {
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
            </section>
<?php
 }
?>