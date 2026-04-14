<?php
include '../connection/config.php';
$package_id =2;
$sql=" select * from content where id ='$package_id'";
$result = $db->query($sql);
$row = $result->fetch_assoc();
$package_page_h = $row['header'];
$package_page_p = $row['paragraph'];

if(isset($_POST['update-package-text'])){
$package_p_u =$_POST['package-p-text'];
 $package_h_u =$_POST['package-h-text'];
 $package_p_u = mysqli_real_escape_string($db, $package_p_u);
 $package_h_u = mysqli_real_escape_string($db, $package_h_u);

    $sql= "UPDATE `content` SET  paragraph='$package_p_u',header='$package_h_u',id='$package_id' WHERE id='$package_id'";
    $result8= $db->query($sql);
    
    if($result8){
       header('location:packages?package_s=u');
    } else {
        echo 'error';
    }
}
?>

