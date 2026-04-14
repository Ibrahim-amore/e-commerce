<?php
require 'connection/config.php';
if(isset($_POST['email'])){
$email =$_POST['email'];
$email = mysqli_real_escape_string($db,$email);
 $sql= "select * from `subscribers` WHERE `email` = '$email'";
 $result = $db->query($sql);
$num_email =(mysqli_num_rows($result));
 
  if($email == ""){
    echo "<p class='text-danger text-center'> This field cannot be empty </p>";    
  }
  else{
     if($num_email == 0){
        
$sql = "insert into subscribers(email)values('$email')";
$val = $db->query($sql);

  if($val){
      echo "<p class='text-success text-center'> Subscription Successful </p>";
      
  }else{
     echo "<p class='text-danger text-center'> Subscription failed </p>"; 
  }
         
     }
     else {
         echo "<p class='text-danger text-center'> Email Already exist </p>";
     }
  }  

}
