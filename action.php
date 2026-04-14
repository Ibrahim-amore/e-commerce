<?php
session_start();
$ss_id = session_id();
//require 'connection/connection.php';
require 'connection/config.php';
//$idc="";
if(isset($_POST['pid'])){
   $pid= $_POST['pid'];
    $pname= $_POST['pname'];
     $pprice= $_POST['pprice'];
      $pw= $_POST['pw'];
      $s_id= $_POST['s_id'];
      $pimg= $_POST['pimg'];
      $pcode= $_POST['pcode'];
      $qty =$_POST['qty'];
      $tprice = $pprice*$qty;
      $r = $db->query("SELECT *FROM `cart` WHERE `product_code`='$pcode' AND `s_id` = '$s_id'");
      $n_r = mysqli_num_rows($r);
      //$color =$_POST['color'];
      //$size =$_POST['size'];
      /*$tprice = $pprice*$qty;
      $stmt = $conn->prepare("SELECT product_code FROM cart WHERE product_code=? AND s_id='$s_id'");
      $stmt->bind_param("s",$pcode);
      $stmt->execute();
      $res=$stmt->get_result();
      $r= $res->fetch_assoc();
      
      $stmt1 = $conn->prepare("SELECT s_id FROM cart WHERE s_id=? AND product_code='$pcode'");
      $stmt1->bind_param("s",$s_id);
      $stmt1->execute();
      $res1=$stmt1->get_result();
      $r1= $res1->fetch_assoc();
      $sss_id= $r1['s_id'];
      
      $sql= "SELECT *FROM cart WHERE product_code ='$pcode' AND password ='$password'";
    $result = $db->query($sql);
    if(mysqli_num_rows($result)>0)
      
      $code= $r['product_code'];
      if(!$code && !$sss_id){
       $query =$conn->prepare("INSERT INTO cart (pname,pimag,pw,qty,pprice,s_id,product_code,p_id,total_price)VALUES(?,?,?,?,?,?,?,?,?)");
       $query->bind_param("ssdisssid", $pname,$pimg,$pw,$qty,$pprice,$s_id,$pcode,$pid,$tprice);
       $query->execute();
       echo "<p class='text-success'>Product Added to Cart</p>";
      }
      */
      if($n_r < 1){
         $db->query("INSERT INTO `cart`(pname,pimag,pw,qty,pprice,s_id,product_code,p_id,total_price)VALUES('$pname','$pimg','$pw','$qty','$pprice','$s_id','$pcode','$pid','$tprice')");
          echo "<p class='text-success'>Product Added to Cart</p>";   
          }
      else{
          echo "<p class='text-danger'>Product already on cart</p>";
      }
}

if(isset($_GET['cartItem']) && isset($_GET['cartItem']) == 'cart_item'){
    $stmt = $db->prepare("SELECT * FROM cart WHERE s_id ='$ss_id'");
    $stmt->execute();
    $stmt->store_result();
    $rows = $stmt->num_rows;
    echo $rows;
}




if(isset($_GET['remove'])){
    $id =$_GET['remove'];
    $n =$_GET['session'];
     $stmt =$db->query("DELETE FROM cart WHERE id='$id' AND s_id='$n'");
    /*$stmt =$db->prepare("DELETE FROM cart WHERE id=? AND s_id=?");
    $stmt->bind_param("is",$id,$n);
    $stmt->execute();*/
    $_SESSION['showAlert'] = 'block';
    $_SESSION['message'] = "Product Removed from Cart Successfully";
    header('location:cart');
}


if(isset($_GET['removed'])){
    $id1 =$_GET['removed'];
    $n1 =$_GET['sessiond'];
     $stmt =$db->query("DELETE FROM cart WHERE id='$id1' AND s_id='$n1'");
    $stmt =$db->prepare("DELETE FROM cart WHERE id=? AND s_id=?");
    /*$stmt->bind_param("is",$id1,$n1);
    $stmt->execute();*/
    $_SESSION['showAlert'] = 'block';
    $_SESSION['message'] = "Product Removed from Cart Successfully";
    header('location:');
}
if(isset($_GET['r'])){
    $r =$_GET['r'];
    $se =$_GET['se'];
    $stmt =$db->query("DELETE FROM cart WHERE id='$r' AND s_id='$se'");
    /*$stmt->bind_param("is",$r,$se);
    $stmt->execute();*/
    $_SESSION['showAlert'] = 'block';
    $_SESSION['message'] = "Product Removed from Cart Successfully";
    header('location:cart');
}


if(isset($_GET['clear'])){
    $db->query("DELETE FROM cart");
   /* $stmt =$db->prepare("DELETE FROM cart");
    $stmt->execute();*/
    $_SESSION['showAlert'] = 'block';
    $_SESSION['message'] = " Cart emptied successfully";
    header('location:cart');
}
if(isset($_POST['qtyy'])){
    $qtyy = $_POST['qtyy'];
    $s_id = $_POST['s_id'];
     $idc = $_POST['idc'];
      $pprice=$_POST['pprice'];
      $tprice = $qtyy * $pprice;
      $db->query("UPDATE `cart` SET qty='$qtyy',total_price='$tprice' WHERE id ='$idc' AND s_id ='$s_id'");
      /*$stmt = $db->prepare("UPDATE cart SET qty=?,total_price=? WHERE id =? AND s_id =?");
      $stmt->bind_param("isis",$qty,$tprice,$pid,$s_id);
       $stmt->execute();*/
}





?>