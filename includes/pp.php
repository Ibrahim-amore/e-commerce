    
<div class="sp-product-item mb-10">
                                            <div class="sp-product-thumb">
                                                <?php 
                                      if($discount > 0){
                                                ?>
                                                <span class="batch discount"><?php echo $discount;?>%</span>
                                                <?php
                                               }
                                                ?>
                                                <a href="product?pid=<?php echo $p_id;?><?php echo $pn1;?>"><img src="meAdmin/product_image/<?php echo $img;?>" alt="" style="max-width: 150px; max-height: 150px;"></a>
                                            </div>
                                            
                                            <div class="sp-product-content">
                                                <div class="rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <h6 class="title"><a href="product?pid=<?php echo $p_id;?><?php echo $pn1;?>"><?php echo $pn;?></a></h6>
                                               
                                                <div class="sp-cart-wrap">
                                                    <a href="product?pid=<?php echo $p_id;?><?php echo $pn1;?>" class="btn" style="padding: 0.6rem 1rem; border-radius: 10px;"><i class="fas fa-cart-plus mx-1"></i>Buy now</a>
                                                </div>
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
                                        </div>