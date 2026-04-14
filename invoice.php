
<?php
include("connection/config.php");
include("common/page-info.php");
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Invoice From <?php echo $page_name;?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">

    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="asset/fonts/font-awesome/css/font-awesome.min.css">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="meAdmin/app_logo/<?php echo $app_logo;?>" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="asset/css/style.css">
</head>
<?php 
if(!isset($_GET['w'])){
    header('location:dashboard');
}else{
   $s_id = $_GET['w'];
   $s_r = $db->query("SELECT *FROM `sales` WHERE `s_id`='$s_id' LIMIT 1");
   $row_b = $s_r->fetch_assoc(); 
                                                                                       $s_name=$row_b['name'];
                                                                                        $s_phone =$row_b['phone'];
                                                                                         $s_email =$row_b['email'];
                                                                                         $s_meth=$row_b['meth'];
                                                                                          $s_date=$row_b['date'];
                                                                                          $s_amount = $row_b['amount'];
                                                                                          $s_country = $row_b['city'];
                                                                                          $s_state = $row_b['state'];
                                                                                          $s_address = $row_b['address'];
                                                                                          $s_order_id = $row_b['order_id'];
                                                                                          $dis = $row_b['dis'];
                                                                                          $delivery = $row_b['delivery'];
                                                                                          $status = $row_b['status'];
                                                                                          $s_ref = $row_b['ref'];
                                                                                          $s_id=$row_b['s_id'];
                                                                                         $s_date=date("d M,Y",strtotime($s_date));
   
   
                              
}

?>
<?php
 $s_pp = $db->query("SELECT *FROM `cart` WHERE `s_id`= '$s_id'");       
//include '../action/create/create.php';
?>
 <?php
 $faq= "select * from `brand`";
 $package_result = $db->query($faq);
         ?>
<body>

<!-- Invoice 4 start -->
<div class="invoice-4 invoice-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="invoice-inner clearfix">
                    <div class="invoice-info clearfix" id="invoice_wrapper">
                        <div class="invoice-headar">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="invoice-logo">
                                        <!-- logo started -->
                                        <div class="logo">
                                            <img src="meAdmin/logo/<?php echo $page_logo;?>" alt="logo" style="width: 100%; height:100%;">
                                        </div>
                                        <!-- logo ended -->
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="invoice-id">
                                        <div class="info">
                                            <h1 class="inv-header-1">Invoice</h1>
                                            <p class="mb-1">ORDER ID: <span><?php echo $s_order_id;?></span></p>
                                            <p class="mb-0">Invoice Date: <span><?php echo $s_date;?></span></p>
                                               <p class="mb-0">Transaction Ref: <span><?php echo $s_ref;?></span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="invoice-top">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="invoice-number mb-30">
                                        <h4 class="inv-title-1">Invoice To</h4>
                                        <h2 class="name"><?php echo $s_name;?></h2>
                                        <p class="invo-addr-1">
                                            <?php echo $s_phone;?><br/>
                                            <?php echo $s_email;?> <br/>
                                            State: <?php echo $s_state;?> <br> City: <?php echo $s_country;?><br>
                                            <?php echo $s_address;?> <br/>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="invoice-number mb-30">
                                        <div class="invoice-number-inner">
                                            <h4 class="inv-title-1">Invoice From</h4>
                                            <h2 class="name"><?php echo $page_name;?></h2>
                                            <p class="invo-addr-1">
                                                <?php echo $shop_address_1;?> <br/>
                                                <?php echo $email_address;?> <br/>
                                                
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="invoice-center">
                            <div class="table-responsive">
                                <table class="table mb-0 table-striped invoice-table">
                                    <thead class="bg-active">
                                    <tr class="tr">
                                        <th>Image</th>
                                        <th class="pl0 text-start">Product name</th>
                                        <th class="text-center">Price</th>
                                        <th class="text-center">Number of yards</th>
                                        <th class="text-end">Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                         <?php
                                    $grand_total = 0;
                                   $total_price = 0;
                                    $i=1;
                              while($row_ = $s_pp->fetch_assoc()){
                                            ?>
                                    <tr class="tr">
                                        <td>
                                            <div class="">
                                                <div style="width: 50px; height:50px; border-radius: 50%;">
                                                    <img src="meAdmin/product_image/<?= $row_['pimag']?>" style="width: 100%; height: 100%; border-radius: 50%;">  
                                                </div>
                                            </div>
                                        </td>
                                        <td class="pl0"><?= $row_['pname']?></td>
                                        <td class="text-center"><?php echo $naira;?><?= number_format($row_['pprice'],2)?></td>
                                        <td class="text-center"><?= $row_['size']?></td>
                                        <td class="text-end"><?php echo $naira;?><?= number_format($row_['total_price'],2)?></td>
                                    </tr>
                                    <?php
                                    $grand_total +=$row_['total_price'];
                              }
                                    ?>
                                    
                                    
                                    

                                    
                                    <tr class="tr2">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="text-center">SubTotal</td>
                                        <td class="text-end"><?php echo $naira;?><?= number_format($grand_total,2)?></td>
                                    </tr>
                                    <tr class="tr2">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="text-center">Discount</td>
                                        <td class="text-end" style="color: green;">-<?php echo $naira;?><?= number_format($dis,2)?></td>
                                    </tr>
                                    <tr class="tr2">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="text-center">Delivery</td>
                                        <td class="text-end"><?php echo $naira;?><?= number_format($delivery,2)?></td>
                                    </tr>
                                    <tr class="tr2">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="text-center f-w-600" style="color:#ff321d;"><b>Grand Total</b></td>
                                        <td class="f-w-600 text-end"style="color:#ff321d;"><b><?php echo $naira;?><?= number_format($s_amount,2)?></b></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="invoice-bottom">
                            <div class="row">
                                
                                <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                                    <div class="terms-conditions mb-30">
                                        <h3 class="inv-title-1">About Us</h3>
                                        <p><?php
                                        echo $about_us1;
                                        ?> <a href="about" class="text-danger">...</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="invoice-contact clearfix">
                            <div class="row g-0">
                                <div class="col-sm-12">
                                    <div class="contact-info clearfix">
                                        <a href="tel:<?php echo $phone_number;?>" class="d-flex"><i class="fa fa-phone"></i><?php echo $phone_number;?></a>
                                        <a href="tel:<?php echo $email_address;?>" class="d-flex"><i class="fa fa-envelope"></i> <?php echo $email_address;?></a>
                                        <a href="" class="mr-0 d-flex d-none-580"><i class="fa fa-map-marker"></i><?php echo $shop_address_1;?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="invoice-btn-section clearfix d-print-none">
                        <a href="javascript:window.print()" class="btn btn-lg btn-print">
                            <i class="fa fa-print"></i> Print Invoice
                        </a>
                        <a id="invoice_download_btn" class="btn btn-lg btn-download btn-theme">
                            <i class="fa fa-download"></i> Download Invoice
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Invoice 4 end -->

<script src="asset/js/jquery.min.js"></script>
<script src="asset/js/jspdf.min.js"></script>
<script src="asset/js/html2canvas.js"></script>
<script src="asset/js/app.js"></script>
</body>
</html>
