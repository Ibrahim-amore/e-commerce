<?php
include '../connection/config.php';
$faq_id =1;
$sql=" select * from content where id ='$faq_id'";
$result = $db->query($sql);
$row = $result->fetch_assoc();
$faq_page_h = $row['header'];
$faq_page_p = $row['paragraph'];

if(isset($_POST['update-faq-text'])){
$faq_p_u =$_POST['faq-p-text'];
 $faq_h_u =$_POST['faq-h-text'];
 $faq_p_u = mysqli_real_escape_string($db, $faq_p_u);
 $faq_h_u = mysqli_real_escape_string($db, $faq_h_u);

    $sql= "UPDATE `content` SET  paragraph='$faq_p_u',header='$faq_h_u',id='$faq_id' WHERE id='$faq_id'";
    $result8= $db->query($sql);
    
    if($result8){
       header('location:faq?faq_s=u');
    } else {
        echo 'error';
    }
}
?>

