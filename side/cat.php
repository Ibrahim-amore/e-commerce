<div class="widget shop-widget">
                                    <div class="shop-widget-title">
                                        <h6 class="title">Product Categories</h6>
                                    </div>
                                    <div class="shop-cat-list">
                                        
                                        <ul>
                                             <?php 
                                     $cat= "select * from `category`";
                                     $cat1_result = $db->query($cat);
                                     while($row_cat = $cat1_result->fetch_assoc()) {
                                     $cat_img=$row_cat['image'];
                                     $cat_name =$row_cat['cat_name'];
                                     //$cat_id=$row_cat['id'];
                                                                                          
                                      ?>
                                           
                                            <li><a href="shop?cat=<?php echo $cat_name;?>"><?php echo $cat_name;?> <span>+</span></a></li>
                                            
                                            <?php
                                             }
                                            ?>
                                        </ul>
                                    </div>
                                </div>