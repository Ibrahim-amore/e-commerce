<?php
include '../connection/config.php';
$payment_id =1;
$sql=" select * from payment where id ='$payment_id'";
$result = $db->query($sql);
$row = $result->fetch_assoc();
$s_k = $row['secret_key'];
$p_k = $row['public_key'];
$e_k = $row['encryption_key'];

if(isset($_POST['update-payment'])){
$e_key_u =$_POST['encryption_key'];
 $p_key_u =$_POST['public_key'];
 $s_key_u =$_POST['secret_key'];
 
 $e_key_u = mysqli_real_escape_string($db, $e_key_u);
 $p_key_u = mysqli_real_escape_string($db, $p_key_u);
 $s_key_u = mysqli_real_escape_string($db, $s_key_u);

    $sql= "UPDATE `payment` SET  secret_key='$s_key_u',public_key='$p_key_u',encryption_key='$e_key_u' WHERE id='$payment_id'";
    $result8= $db->query($sql);
    
    if($result8){
       header('location:payment-info?p_i=u');
    } else {
        echo 'error';
    }

}
?>

