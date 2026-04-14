<?php
include("includes/head.php");
?>
    <body>

        <!-- preloader -->
       <?php
include("includes/preloader.php");
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
    $page ="Shopping Cart"
    ?>
    <?php
$msg="";
$coupon_value = 0.0; 
//$_SESSION['v']= $coupon_value;
if(isset($_POST['use-promocode'])){
    $promo_code = $_POST['promocode'];
       if($promo_code === "$ccode"){
           $coupon_value = $ccodev/100; 
          $_SESSION['v']= $coupon_value;
          
           $msg = "<p style='color:green'>Coupon code Added successfully</p>";
       }
 else{
       $coupon_value = 0.0;
       $msg = "<p style='color:red'>Invalid Coupon code</p>";
       }
      }
     $_SESSION['v']= $coupon_value; 
     
?>
    <?php
/*$stmt=$conn->prepare("SELECT * FROM cart WHERE s_id ='$s_id'");
$stmt->execute();
$result =$stmt->get_result();*/
$result = $db->query("SELECT * FROM cart WHERE s_id ='$s_id'");



$page ="Shopping Cart";
    ?> 

        <!-- main-area -->
        <main>
    <!-- breadcrumb-area -->
           <?php
           //$page ="Shopping Cart";
           include("includes/breadcum.php");
           ?>
            <!-- breadcrumb-area-end -->

            <!-- cart-area -->
            <div class="cart-area pt-90 pb-90">
                <div class="container">
                    <div style="display:<?php if(isset($_SESSION['showAlert'])){echo $_SESSION['showAlert'];} else {
    
    echo 'none';}unset($_SESSION['showAlert']);?>" class="alert alert-success alert-dismissible fade show" role="alert">
                                                <i class="mdi mdi-check-all me-2"></i>
                                       <strong> <?php if(isset($_SESSION['message'])){echo $_SESSION['message'];}unset($_SESSION['showAlert']);?></strong>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                            
                                          </div>
                    <?php
                                      $cart_result ="";
                                      if(mysqli_num_rows($result)< 1){
                                       $cart_result ="<h3 class='text-danger text-center'>No Item on Cart <a href='shop' class='text-dark font-size-16'> Continue To Home Page</a> </h3>";
                                       }
                                      else{
                                        ?>
                    <div class="row justify-content-center">
                        <div class="col-xl-7">
                            <div class="cart-wrapper">
                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead>
                                            <tr>
                                                <th class="product-thumbnail"></th>
                                                <th class="product-name">Product</th>
                                                <th class="product-price">Price</th>
                                                <th class="product-quantity">QUANTITY</th>
                                                <th class="product-subtotal">SUBTOTAL</th>
                                                <th class="product-delete"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                    $grand_total = 0;
                                   $total_price = 0;
                              while($row = $result->fetch_assoc()){
                                            ?>
                                            <tr>
                                                <td class="product-thumbnail"><a href="details?pid=<?= $row['p_id']?>"><img src="meAdmin/product_image/<?= $row['pimag']?>" alt="" style="max-width:60px;"></a></td>
                                                <td class="product-name">
                                                    <h4><?= $row['pname']?></h4>
                                                </td>
                                                <td class="product-price"><?php echo $naira;?><?= number_format($row['pprice'],2)?></td>
                                                <td class="product-quantity">
                                                    <div class="cart--plus--minus">
                                                        <form action="#" class="num-block">
                                                            <input type="text" class="in-num itemQty" value="<?= $row['qty']?>" readonly="" >
                                                             <input type="hidden" class="idc" value="<?= $row['id'];?>">
                                                        <input type="hidden" class="ssn_id" value="<?= $row['s_id'];?>">
                                                        <input type="hidden" class="pprice" value="<?= $row['pprice'];?>">
                                                         
                                                            <div class="qtybutton-box">
                                                                <span class="plus"><i class="fas fa-angle-up"></i></span>
                                                                <span class="minus dis"><i class="fas fa-angle-down"></i></span>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </td>
                                                <td class="product-subtotal"><span><?php echo $naira;?><?= number_format($row['total_price'],2)?></span></td>
                                                
                                                <td class="product-delete"><a href="action.php?remove=<?= $row['id']?>& session=<?= $row['s_id']?>" onclick="return confirm('Are you sure you want to remove this product?')"><i class="far fa-trash-alt"></i></a></td>
                                                
                                            </tr>
                                            
                                            <?php
                                            $grand_total +=$row['total_price'];
                                             }
                                            ?>
                                            
                                            
                                        </tbody>
                                        <?php
                          $grand_total +=$row['total_price'];
                             ?>
                                    </table>
                                </div>
                            </div>
                            <div class="shop-cart-bottom">
                                <div class="cart-coupon">
                                    <form action="" method="POST">
                                        <input type="text" placeholder="Enter Coupon Code..." name="promocode" required=""> 
                                        <button class="btn" type="submit" name="use-promocode">Apply Coupon</button>
                                    </form>
                                    <small style="text-align:center;"><?php echo $msg;?></small>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-12">
                            <?php
                                                    $discount_1 = $grand_total * $coupon_value;
                                                    $_SESSION['discount'] = $discount_1;
                                                    $_SESSION['amount'] = $grand_total;
                                                    ?>
                            <div class="shop-cart-total">
                                <h3 class="title">Cart Totals</h3>
                                <div class="shop-cart-widget">
                                    <form action="#">
                                        <ul>
                                            <li class="sub-total"><span>Subtotal:</span> <?php echo $naira;?><?= number_format($grand_total,2)?></li>
                                            <li class="sub-total"><span>Delivery Fee:</span> calculated at checkout</li>
                                            <li class="sub-total"><span>Discount</span> <b style="color:green;"> -<?php echo $naira;?><?= number_format($discount_1,2)?></b></li>
                                            <?php
                                            $total = $grand_total - $discount_1;
                                            ?>
                                            <li class="cart-total-amount"><span>Total: </span> <span class="amount"><?php echo $naira;?><?= number_format($total,2)?></span></li>
                                        </ul>
                                        <a href="checkout" class="btn">PROCEED TO CHECKOUT</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3 class="text-center text-dark"><?php echo $cart_result;?></h3>
                    <?php
                    
                    }
                    ?>
                </div>
            </div>
            <!-- cart-area-end -->

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