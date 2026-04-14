<?php
$promo_id =4;
$sql=" select * from voucher where id ='$promo_id'";
$result = $db->query($sql);
$row = $result->fetch_assoc();
$code = $row['code'];
$value = $row['value'];

$ms_c="";
if(isset($_POST['submit_coupon'])){
$value_u =$_POST['value'];
 $code_u =$_POST['code'];
 
 $value_u = mysqli_real_escape_string($db, $value_u);
 $code_u = mysqli_real_escape_string($db, $code_u);
 
    $sql= "UPDATE `voucher` SET  code ='$code_u',value='$value_u' WHERE id='$promo_id'";
    $result81= $db->query($sql);
    
    if($result81){
       $ms_c = "<div class='alert alert-success' role='alert'><button type='button' class='btn-close' data-bs-dismiss='alert' aria-hidden='true'>×</button>
											<i class='fa fa-check-circle-o me-2' aria-hidden='true'></i> updated Successfully</div>";
    } else {
        $ms_c = "error";
    }

}
?>



