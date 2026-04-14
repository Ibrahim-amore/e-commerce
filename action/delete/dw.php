<?php
include '../../connection/config.php';
$id=$_GET['tv'];
$sql = "delete from wholesale where id ='$id'";
$val = $db->query($sql);

 if($val ){

     header('location:../../meAdmin/wholesale?p~_d=d');

}