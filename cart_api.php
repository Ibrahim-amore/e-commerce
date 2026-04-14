<?php
session_start();
$ss_id = session_id();
require 'connection/connection.php';
require 'connection/config.php';
require 'common/page-info.php';
?>
<?php
if(isset($_GET['cartItem_1']) && isset($_GET['cartItem_1']) == 'cart_item'){
    
    
    $sql1= "SELECT *FROM cart WHERE `s_id` = '$ss_id'";
 $result_pp = $db->query($sql1);
 $num_r =(mysqli_num_rows($result_pp));  
if($num_r > 0){ ?>
       
                                             <?php 
                                   $grand_total = 0;
                               $total_price =0;
                           while($row_g = $result_pp->fetch_assoc()) {
                                 $pn=$row_g['pname'];
                                 $price =$row_g['pprice'];
                                 $img=$row_g['pimag'];
                                 $pid=$row_g['p_id'];
                                 $qty=$row_g['qty'];
                                 //$size=$row_g['size'];
                                // $color=$row_g['color'];
                                 $t_price=$row_g['total_price'];
                                   $pn22 = substr($pn,0, 10);
                                   $pn = substr($pn,0, 20);
                                   $id=$row_g['id'];
                                  ?>           
                        
                                         <li class="d-flex align-items-start">
                                                        <div class="cart-img">
                                                            <a href="product?pid=<?php echo $pid;?><?php echo $pn22;?>"><img src="meAdmin/product_image/<?php echo $img;?>" alt="" style="max-width:80px;"></a>
                                                        </div>
                                                        <div class="cart-content">
                                                            <h4><a href="product?pid=<?php echo $pid;?><?php echo $pn22;?>"><?php echo $pn;?></a> x <?php echo $qty;?></h4>
                                                            <div class="cart-price">
                                                                <span class="new"><?php echo $naira;?><?= number_format($t_price,2)?></span>
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="del-icon">
                                                            <a href="action.php?r=<?= $row_g['id']?>& se=<?= $row_g['s_id']?>"><i class="far fa-trash-alt"></i></a>
                                                        </div>
                                                    </li>
                                          
                                        <?php
                                         $grand_total +=$row_g['total_price'];
                                          }
                                          ?>
                                          <li>
                                                        <div class="total-price">
                                                            <span class="f-left">Total:</span>
                                                            <span class="f-right"><?php echo $naira;?><?= number_format($grand_total,2)?></span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkout-link">
                                                            <a href="cart">Shopping Cart</a>
                                                            <a class="black-color" href="checkout">Checkout</a>
                                                        </div>
                                                    </li>          
                                       
                                     
                                 <?php   
                                    } 
  else {
  echo "<p class='text-danger text-center'> Cart is Empty</p>";
               
  }
    
    
    
    
}

?>