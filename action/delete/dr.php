<?php
include '../../connection/config.php';
$id=$_GET['r'];
$sql = "delete from reviews where id ='$id'";
$val = $db->query($sql);

 if($val ){

     header('location:../../meAdmin/reviews?r~~_d=d');

}