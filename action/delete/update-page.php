<?php
include 'config.php';
$page_id =1;
$sql=" select * from page_info where id ='$page_id'";
$result = $db->query($sql);
$row = $result->fetch_assoc();
$yl = $row['yl'];
$yc = $row['yc'];
$fl = $row['fl'];
$ig = $row['ig'];
$tl = $row['tl'];
$p_name = $row['page_name'];
$logo = $row['logo'];
if(isset($_POST['update-info'])){
$yl_u =$_POST['yl'];
 $pn_u =$_POST['name'];
 $fl_u =$_POST['fl'];
 $ig_u =$_POST['ig'];
 $tl_u =$_POST['tl'];
 $yc_u =$_POST['yc'];
 $yl_u = mysqli_real_escape_string($db, $yl_u);
 $pn_u = mysqli_real_escape_string($db, $pn_u);
 $fl_u = mysqli_real_escape_string($db, $fl_u);
 $ig_u = mysqli_real_escape_string($db, $ig_u);
 $tl_u = mysqli_real_escape_string($db, $tl_u);
 $yc_u = mysqli_real_escape_string($db, $yc_u);
 if(isset($_FILES['attachment']['name']) && ($_FILES['attachment']['name']!="")){

        $logopicture = time().'_'. $_FILES['attachment']['name'];
        unlink("admin_logo/$logo");

        $target= 'admin_logo/' . $logopicture;
        move_uploaded_file($_FILES['attachment']['tmp_name'], $target);
    } else {
        $logopicture=$logo;

    }
 
    $sql= "UPDATE `page_info` SET  page_name ='$pn_u',yl='$yl_u',yc='$yc_u',fl='$fl_u',ig='$ig_u',tl='$tl_u',logo='$logopicture' WHERE id='$page_id'";
    $result8= $db->query($sql);
    
    if($result8){
       header('location:page-info?page_status=Updated');
    } else {
        echo 'error';
    }

}
?>

