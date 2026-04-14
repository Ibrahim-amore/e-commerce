<?php
include 'config.php';
$product_id =$_GET['id'];
$sql=" select * from product where id ='$product_id'";
$result = $db->query($sql);
$row = $result->fetch_assoc();
$plan = $row['plan'];
$description = $row['description'];
$price = $row['price'];
$duration = $row['Duration'];
$productcode = $row['product_code'];


if(isset($_POST['update-plan'])){
$productname_u =$_POST['productname'];
 $description_u =$_POST['description'];
 $productcde_u =$_POST['productcde'];
 $price_u =$_POST['price'];
 $duration_u =$_POST['duration'];
 
 $productname_u = mysqli_real_escape_string($db, $productname_u);
 $description_u = mysqli_real_escape_string($db, $description_u);
 $productcde_u = mysqli_real_escape_string($db, $productcde_u);
 $price_u = mysqli_real_escape_string($db, $price_u);
 $duration_u = mysqli_real_escape_string($db, $duration_u);
 
    $sql4= "UPDATE `product` SET  plan ='$productname_u',price='$price_u',description='$description_u',Duration='$duration_u',product_code='$productcde_u' WHERE id='$product_id'";
    $result4= $db->query($sql4);
    
    if($result4){
       header('location:product?product_status=Updated');
    } else {
        echo 'error';
    }

}
?>



