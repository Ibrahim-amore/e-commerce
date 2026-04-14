<?php
require 'connection/config.php';

if((isset($_POST['name']))&&(isset($_POST['pid']))){
$name = $_POST['name'];
$pid = $_POST['pid'];
$comment = $_POST['comment'];
$email = $_POST['email'];



$email = mysqli_real_escape_string($db, $email);
$name = mysqli_real_escape_string($db, $name);
$pid = mysqli_real_escape_string($db, $pid);
$comment = mysqli_real_escape_string($db, $comment);


 
$sql = "insert into `product_reviews`(name,pid,email,comment)values('$name','$pid','$email','$comment')";
$val = $db->query($sql);  
if($val){
 
 echo "<div class='alert alert-success' role='alert'><button type='button' class='btn-close' data-bs-dismiss='alert' aria-hidden='true'>×</button>
<i class='fa fa-check-circle-o me-2' aria-hidden='true'></i> Thanks for your feedback</div>";
   

}
 else {
  echo "<div class='alert alert-danger' role='alert'><button type='button' class='btn-close' data-bs-dismiss='alert' aria-hidden='true'>×</button><i class='fa fa-frown-o me-2' aria-hidden='true'></i>Error has occured, try Again.</div>";         
}
}


?>