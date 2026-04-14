<?php
include '../../connection/config.php';
$id=$_GET['s'];
$sql = "delete from subscribers where id ='$id'";
$val = $db->query($sql);

 if($val ){

     header('location:../../meAdmin/subscribers?s_d=d');

}