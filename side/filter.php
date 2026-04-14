 <div class="widget shop-widget">
                                    <div class="shop-widget-title">
                                        <h6 class="title">Filter By Price</h6>
                                         <?php
                                $pppp= $db->query("SELECT MIN(`price`) AS `lowest`,MAX(`price`) AS `highest` FROM `products` WHERE `status`='active'");
                                $row_ = $pppp->fetch_assoc();
                                $p_1 = $row_['lowest'];
                                $p_2 = $row_['highest'];
                                ?>
                                    </div>
     <form method="POST" id="form_filter">
                                    <div class="price_filter">
                                        <div class="row">
                                            <div class="col-6" style="padding: 0 5px;"><input type="number"  name="p1" placeholder="<?php echo $naira;?> <?= number_format($p_1,2)?>" min="<?= number_format($p_1,2)?>" max="<?= number_format($p_2,2)?>" required=""/></div>
                                            <div class="col-6" style="padding: 0 5px;"> <input type="number" name="p2" placeholder="<?php echo $naira;?> <?= number_format($p_2,2)?>" min="<?= number_format($p_2,2)?>" max="<?= number_format($p_2,2)?>" required=""/></div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-center">
                                            <button type="submit" class="btn" id="btn_f"> Filter Price</button>
                                          
                                            </div>
                                            
                                        </div>
                                     </form>
     
                                    </div>
                            