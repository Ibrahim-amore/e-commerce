<?php
include '../connection/config.php';
$email_id =1;
$sql=" select * from email_setting where id ='$email_id'";
$result = $db->query($sql);
$row = $result->fetch_assoc();
$first_notice = $row['first'];
$second_notice = $row['second'];


if(isset($_POST['settings'])){
$first_u =$_POST['first'];
 $second_u =$_POST['second'];
 
 $first_u = mysqli_real_escape_string($db, $first_u);
 $second_u = mysqli_real_escape_string($db, $second_u);
 
    $sql9= "UPDATE `email_setting` SET  first ='$first_u',second='$second_u' WHERE id='$email_id'";
    $result89= $db->query($sql9);
    
    if($result89){
       header('location:settings?e_u=u');
    } else {
        echo 'error';
    }

}
?>