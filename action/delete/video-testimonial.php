<?php
include "config.php";
$id=$_GET['id'];
$sql = "delete from video_testimonial where id ='$id'";
$val = $db->query($sql);

 if($val ){

     header('location:../video-testimonial?testimonial_vid=deleted');

}