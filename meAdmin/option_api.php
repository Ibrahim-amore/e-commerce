<?php
require '../connection/config.php';

if((isset($_POST['v_id']))&&(isset($_POST['attr_id']))){
$v_id = $_POST['v_id'];
$attr_id = $_POST['attr_id'];
$pid = $_POST['pid'];
$qty = $_POST['qty'];
$price = $_POST['price'];
$v_name = $_POST['v_name'];
$an = $_POST['an'];
$an = mysqli_real_escape_string($db, $an);
$v_id = mysqli_real_escape_string($db, $v_id);
$attr_id = mysqli_real_escape_string($db, $attr_id);
$pid = mysqli_real_escape_string($db, $pid);
$qty = mysqli_real_escape_string($db, $qty);
$price = mysqli_real_escape_string($db, $price);
$v_name = mysqli_real_escape_string($db, $v_name);
$sql65= "select * from `options` WHERE `v_id`='$v_id' AND `attr_id`='$attr_id' AND `pid` ='$pid' AND `attr_name`= '$an'";
 $result = $db->query($sql65);
 $num_s =(mysqli_num_rows($result));   
 if($num_s > 0){
  echo "<div class='alert alert-danger' role='alert'><button type='button' class='btn-close' data-bs-dismiss='alert' aria-hidden='true'>×</button><i class='fa fa-frown-o me-2' aria-hidden='true'></i>Already Assigned</div>";       
 }
 else{
$sql = "insert into `options`(attr_id,pid,v_id,qty,price,v_name,attr_name)values('$attr_id','$pid','$v_id','$qty','$price','$v_name','$an')";
$val = $db->query($sql);  
if($val){
 
 echo "<div class='alert alert-success' role='alert'><button type='button' class='btn-close' data-bs-dismiss='alert' aria-hidden='true'>×</button>
<i class='fa fa-check-circle-o me-2' aria-hidden='true'></i> Attribute Assigned</div>";
   
}
}
}


?>