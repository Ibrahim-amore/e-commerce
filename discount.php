   <?php
   $pgt= $db->query("SELECT *FROM `products` WHERE `status`='active' AND `discount` !=0 LIMIT 10");
   ?>
<?php
$blog_result ="";
      if(mysqli_num_rows($pgt)< 1){
      $blog_result ="No Products Found";
        }
      else{
      ?>
<section class="best-deal-area pt-60">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-7 col-lg-9">
                            <div class="best-deal-top-wrap">
                                <div class="bd-section-title">
                                    <h3 class="title">Discounted <span> Deals of this Week!</span></h3>
                                    <p>Take advantage of this week discount to shop your favourite items</p>
                                </div>
                                <div class="coming-time" data-countdown="2022/12/25"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row best-deal-active">
                         <?php 
                           while($row_g = $pgt->fetch_assoc()) {
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
                            <div class="best-deal-item">
                                <div class="best-deal-thumb">
                                     <?php 
                                      if($discount > 0){
                                                ?>
                                                <span class="batch discount"><?php echo $discount;?>%</span>
                                                <?php
                                               }
                                                ?>
                                    <a href="product?pid=<?php echo $p_id;?><?php echo $pn1;?>"><img src="meAdmin/product_image/<?php echo $img;?>" alt="" style="max-width: 150px;max-height: 150px;"></a>
                                </div>
                                <div class="best-deal-content">
                                    <div class="main-content">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <h4 class="title"><a href="product?pid=<?php echo $p_id;?><?php echo $pn1;?>"><?php echo $pn;?></a></h4>
                                        <p>
                                                    <b><?php echo $naira;?><?= number_format($price_1,2)?></b> 
                                                      <?php 
                                      if($discount > 0){
                                                ?>
                                                   <span><del><?php echo $naira;?><?= number_format($price,2)?></del></span>
                                                   <?php
                                      }
                                                   ?>
                                                </p>
                                    </div>
                                    <div class="icon"><a href="product?pid=<?php echo $p_id;?><?php echo $pn1;?>" title="view product"><i class="fas fa-eye"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <?php
                           }
                        ?>
                        
                       
                        
                    </div>
                </div>
            </section>
<?php
      }
?>