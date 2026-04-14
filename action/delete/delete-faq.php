<?php
include '../../connection/config.php';
$id=$_GET['faq'];
$sql = "delete from faq where id ='$id'";
$val = $db->query($sql);

 if($val ){

     header('location:../../meAdmin/faq?faq_d=d');

}