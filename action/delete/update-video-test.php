<?php
include 'config.php';
$video_test_id =$_GET['id'];
$sql=" select * from video_testimonial where id ='$video_test_id'";
$result = $db->query($sql);
$row = $result->fetch_assoc();
$namet = $row['name'];
$contentt = $row['content'];
$rolet = $row['role'];
$videot = $row['video'];



if(isset($_POST['update-testimonial'])){
$namet_ =$_POST['name'];
 $contentt_ =$_POST['content'];
 $videot_ =$_POST['video'];
 $rolet_ =$_POST['role'];
 
 
 $namet_ = mysqli_real_escape_string($db, $namet_);
 $contentt_ = mysqli_real_escape_string($db, $contentt_);
 $videot_ = mysqli_real_escape_string($db, $videot_);
 $rolet_ = mysqli_real_escape_string($db, $rolet_);
 
    $sql4= "UPDATE `video_testimonial` SET  name ='$namet_',content='$contentt_',role='$rolet_',video='$videot_' WHERE id='$video_test_id'";
    $result4= $db->query($sql4);
    
    if($result4){
       header('location:video-testimonial?video_testimonial_status=Updated');
    } else {
        echo 'error';
    }

}
?>





