<?php
include '../connection/config.php';
$user_id =1;
$sql=" select * from users where id ='$user_id'";
$result = $db->query($sql);
$row = $result->fetch_assoc();
$username = $row['username'];
$password = $row['password'];


if(isset($_POST['change-user'])){
$username_u =$_POST['username'];
 $password_u =$_POST['password'];
 
 $username_u = mysqli_real_escape_string($db, $username_u);
 $password_u = mysqli_real_escape_string($db, $password_u);
 
    $sql9= "UPDATE `users` SET  username ='$username_u',password='$password_u' WHERE id='$user_id'";
    $result89= $db->query($sql9);
    
    if($result89){
       header('location:user?u_u=u');
    } else {
        echo 'error';
    }

}
?>