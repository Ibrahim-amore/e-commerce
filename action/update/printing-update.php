<?php
include '../connection/config.php';
$print_id =4;
$sql=" select * from content where id ='$print_id'";
$result = $db->query($sql);
$row = $result->fetch_assoc();
$print_page_h = $row['header'];
$print_page_p = $row['paragraph'];

if(isset($_POST['update-print-text'])){
$print_p_u =$_POST['package-p-text'];
 $print_h_u =$_POST['package-h-text'];
 $print_p_u = mysqli_real_escape_string($db, $print_p_u);
 $print_h_u = mysqli_real_escape_string($db, $print_h_u);
$sql= "UPDATE `content` SET  paragraph='$print_p_u',header='$print_h_u',id='$print_id' WHERE id='$print_id'";
$result8= $db->query($sql);
 if($result8){
  header('location:printing-service?print_s=u');
    } else {
        echo 'error';
    }
}
?>

