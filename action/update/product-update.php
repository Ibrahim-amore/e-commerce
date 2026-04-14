<?php
include '../connection/config.php';
$id=$_GET['w'];
$sql=" select * from products where id ='$id'";
$result = $db->query($sql);
$row = $result->fetch_assoc();
$pn = $row['pn'];
$des = $row['des'];
$mt = $row['mt'];
$pt = $row['pt'];
$kw = $row['kw'];
$m = $row['m'];
$price = $row['price'];
$qty = $row['qty'];
$w = $row['w'];
$brand = $row['brand'];
$category = $row['category'];
$img = $row['img'];
$img1 = $row['img1'];
$img2 = $row['img2'];
$img3 = $row['img3'];
$status = $row['status'];
$discount = $row['discount'];
$dimension = $row['dimension'];
$condition = $row['condition'];
if(isset($_POST['update_product'])){
$pn_u =$_POST['pn'];
 $des_u =$_POST['des'];
 $mt_u =$_POST['mt'];
 $pt_u =$_POST['pt'];
 $kw_u =$_POST['kw'];
 $m_u =$_POST['m'];
 $condition_u =$_POST['cond'];
 $price_u =$_POST['price'];
 $category_u =$_POST['category'];
 $qty_u =$_POST['qty'];
 $w_u =$_POST['w'];
 $brand_u =$_POST['brand'];
 $status_u =$_POST['status'];
 $discount_u =$_POST['discount'];
 $dimension_u =$_POST['dimension'];
 
 
 
 $pn_u = mysqli_real_escape_string($db, $pn_u);
 $des_u = mysqli_real_escape_string($db, $des_u);
 $mt_u = mysqli_real_escape_string($db, $mt_u);
 $pt_u = mysqli_real_escape_string($db, $pt_u);
 $kw_u = mysqli_real_escape_string($db, $kw_u);
 $m_u = mysqli_real_escape_string($db, $m_u);
 $price_u = mysqli_real_escape_string($db, $price_u);
 $category_u = mysqli_real_escape_string($db, $category_u);
 $qty_u = mysqli_real_escape_string($db, $qty_u);
 $w_u = mysqli_real_escape_string($db, $w_u);
 $brand_u = mysqli_real_escape_string($db, $brand_u);
 $status_u = mysqli_real_escape_string($db, $status_u);
 $discount_u = mysqli_real_escape_string($db, $discount_u);
 $dimension_u = mysqli_real_escape_string($db, $dimension_u);
 $condition_u = mysqli_real_escape_string($db, $condition_u);
 
 if(isset($_FILES['attachment11']['name']) && ($_FILES['attachment11']['name']!="")){
  $logopicture = time().'_'. $_FILES['attachment11']['name'];
        unlink("product_image/$img");

        $target= 'product_image/' . $logopicture;
        move_uploaded_file($_FILES['attachment11']['tmp_name'], $target);
    } else {
        $logopicture = $img;

    }
    //image 1
   if(isset($_FILES['attachment12']['name']) && ($_FILES['attachment12']['name']!="")){

        $logopicture1 = time().'_'. $_FILES['attachment12']['name'];
        unlink("product_image1/$img1");

        $target= 'product_image1/' . $logopicture1;
        move_uploaded_file($_FILES['attachment12']['tmp_name'], $target);
    } else {
        $logopicture1 = $img1;

    }
    //Image2
    if(isset($_FILES['attachment13']['name']) && ($_FILES['attachment13']['name']!="")){

        $logopicture2 = time().'_'. $_FILES['attachment13']['name'];
        unlink("product_image2/$img2");

        $target= 'product_image2/' . $logopicture2;
        move_uploaded_file($_FILES['attachment13']['tmp_name'], $target);
    } else {
        $logopicture2 = $img2;

    }
    //image3
    if(isset($_FILES['attachment14']['name']) && ($_FILES['attachment14']['name']!="")){

        $logopicture3 = time().'_'. $_FILES['attachment14']['name'];
        unlink("product_image3/$img3");

        $target= 'product_image3/' . $logopicture3;
        move_uploaded_file($_FILES['attachment14']['tmp_name'], $target);
    } else {
        $logopicture3 = $img3;

    }
    
 
    $sql= "UPDATE `products` SET  pn ='$pn_u',des='$des_u',category='$category_u',mt='$mt_u',pt='$pt_u',kw='$kw_u',m='$m_u',price='$price_u',qty='$qty_u',w='$w_u',brand='$brand_u',img='$logopicture',img1='$logopicture1',img2='$logopicture2',img3='$logopicture3',status='$status_u',discount='$discount_u',dimension='$dimension_u',cond='$condition_u' WHERE id='$id'";
    $result8= $db->query($sql);
    
    if($result8){
       header('location:products?p_u=Updated');
    } else {
        echo 'error';
    }

}
?>

