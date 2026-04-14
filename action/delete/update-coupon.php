<?php
include 'config.php';
$promo_id =1;
$sql=" select * from coupon where id ='$promo_id'";
$result = $db->query($sql);
$row = $result->fetch_assoc();
$code = $row['code'];
$value = $row['value'];


if(isset($_POST['submit-code'])){
$value_u =$_POST['value'];
 $code_u =$_POST['code'];
 
 $value_u = mysqli_real_escape_string($db, $value_u);
 $code_u = mysqli_real_escape_string($db, $code_u);
 
    $sql= "UPDATE `coupon` SET  code ='$code_u',value='$value_u' WHERE id='$promo_id'";
    $result81= $db->query($sql);
    
    if($result81){
       header('location:promo-code?promo_status=Updated');
    } else {
        echo 'error';
    }

}
?>



