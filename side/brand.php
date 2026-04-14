<div class="widget shop-widget">
                                    <div class="shop-widget-title">
                                        <h6 class="title">BRANDS</h6>
                                    </div>
                                    <div class="shop-cat-list">
                                        <ul>
                                            <?php 
                                                                                         $b= "select * from `brand`";
                                                                                          $b_result = $db->query($b);
                                                                                         while($row_b = $b_result->fetch_assoc()) {
                                                                                        // $b_img=$row_b['image'];
                                                                                         $b_name =$row_b['brand_name'];
                                                                                         //$b_id=$row_b['id'];
                                                                                          
                                                                                          ?>
                                            <li><a href="shop?brand=<?php echo $b_name;?>"><?php echo $b_name;?> <span>+</span></a></li>
                                                                                         <?php 
                                                                                         
                                                                                         }
                                                                                         ?>
                                        </ul>
                                    </div>
                                </div>