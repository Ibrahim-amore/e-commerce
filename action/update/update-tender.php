<?php
include '../connection/config.php';
$tender_id =3;
$sql=" select * from content where id ='$tender_id'";
$result = $db->query($sql);
$row = $result->fetch_assoc();
$tender_page_h = $row['header'];
$tender_page_p = $row['paragraph'];

if(isset($_POST['update-tender-text'])){
$tender_p_u =$_POST['tender-p-text'];
 $tender_h_u =$_POST['tender-h-text'];
 $tender_p_u = mysqli_real_escape_string($db, $tender_p_u);
 $tender_h_u = mysqli_real_escape_string($db, $tender_h_u);

    $sql= "UPDATE `content` SET  paragraph='$tender_p_u',header='$tender_h_u',id='$tender_id' WHERE id='$tender_id'";
    $result8= $db->query($sql);
    
    if($result8){
       header('location:tender?tender_s=u');
    } else {
        echo 'error';
    }
}
?>

