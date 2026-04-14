<?php
include '../../connection/config.php';
$id = $_GET['delivery'];
$sql = "delete from delivery where id ='$id'";
$val = $db->query($sql);

 if($val ){
header('location:../../meAdmin/shipping?d_d=d');

}






