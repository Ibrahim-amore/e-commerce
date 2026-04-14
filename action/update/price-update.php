<?php
include '../connection/config.php';
$price_id =1;
$sql_1=" select * from price where id ='$price_id'";
$result_1 = $db->query($sql_1);
$row_1 = $result_1->fetch_assoc();

$b_w_p = $row_1['b_w_p'];
$c_p_p = $row_1['c_p_p'];
$w_s_d = $row_1['w_s_d'];
$i_s_d = $row_1['i_s_d'];
$s_b_p = $row_1['s_b_p'];
$c_ph_p = $row_1['c_ph_p'];
$b_w_ph_p = $row_1['b_w_ph_p'];
$slide_price = $row_1['slide_binding'];
$envelope_price = $row_1['envelope'];

if(isset($_POST['update-price'])){
$b_w_p_u =$_POST['b_w_p'];
 $c_p_p_u =$_POST['c_p_p'];
 $w_s_d_u =$_POST['w_s_d'];
 $i_s_d_u =$_POST['i_s_d'];
 $s_b_p_u =$_POST['s_b_p'];
 $c_ph_p_u =$_POST['c_ph_p'];
 $slide =$_POST['slide_binding'];
 $envelope =$_POST['envelope'];
 $b_w_ph_p_u =$_POST['b_w_ph_p'];
  $sql18= "UPDATE `price` SET  b_w_p ='$b_w_p_u',c_p_p='$c_p_p_u',w_s_d='$w_s_d_u',i_s_d='$i_s_d_u',s_b_p='$s_b_p_u',c_ph_p='$c_ph_p_u',b_w_ph_p='$b_w_ph_p_u',slide_binding='$slide',envelope='$envelope' WHERE id='$price_id'";
   $result81= $db->query($sql18);
    if($result81){
       header('location:printing-service?price_u=u');
    } else {
        header('location:printing-service?price_u=Failed');
    }

}
?>

