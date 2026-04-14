<?php
include 'includes/head.php';
?>
<?php
if(isset($_SESSION['v'])){
  $cv = $_SESSION['v'];  
}else{
    $cv = 0;
}
?>

<?php
if((isset($_SESSION['email']))&& (isset($_SESSION['id']))){
 $id = $_SESSION['id'];
$d_ = $db->query("SELECT `state` FROM `customers` WHERE `id`='$id' LIMIT 1");
$r_ = mysqli_fetch_assoc($d_);
$state_ = $r_['state'];
$d_g =$db->query("SELECT `fees` FROM `delivery` WHERE `state`='$state_' LIMIT 1");
$dg_ = mysqli_fetch_assoc($d_g);
$delivery_fee = $dg_['fees'];
}
else if(isset($_POST['state'])){
$state = $_POST['state'];
$d_f =$db->query("SELECT `fees` FROM `delivery` WHERE `state`='$state' LIMIT 1");
$r_d = mysqli_fetch_assoc($d_f);
$delivery_fee = $r_d['fees'];
//echo $delivery_fee;
}
else{
    $delivery_fee = 0;
}
 
?>
<?php
$check2s = $db->query("SELECT SUM(total_price) AS total_cost FROM `cart` WHERE `s_id` = '$s_id'");
$rows3s = mysqli_fetch_assoc($check2s);
$sub_total = $rows3s['total_cost'];
$coupon_fee = $cv * $sub_total;
$total = $sub_total + $delivery_fee - $coupon_fee;
?>
   
                        
                         <input type="hidden" value="<?php echo $total;?>" name="amount">
                         <input type="hidden" value="<?php echo $coupon_fee;?>" name="dis">
                         <input type="hidden" value="<?php echo $delivery_fee;?>" name="del">
                         
                                 <ul>
                              <li class="sub-total"><span>Subtotal:</span> <?php echo $naira?><?= number_format($sub_total,2)?></li>
                            <li class="sub-total"><span>Delivery Fee:</span> <?php echo $naira;?><?= number_format($delivery_fee ,2)?></li>
                           <li class="sub-total"><span>Discount</span> <b style="color:green;"> -<?php echo $naira;?><?= number_format($coupon_fee ,2)?></b></li>
                                            
                                     <li class="cart-total-amount"><span>Total: </span> <span class="amount"><?php echo $naira;?><?= number_format($total,2)?></span></li> 
                                        
                                        </ul>
       
                            <!--- mobile view--->
                            
                            
       
       
       