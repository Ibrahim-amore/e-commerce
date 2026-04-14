<?php
include "config.php";
$id=$_GET['v'];
$sql = "delete from testimonial where id ='$id'";
$val = $db->query($sql);

 if($val ){

     header('location:../../meAdmin/testimonial?faq_d=d');

}