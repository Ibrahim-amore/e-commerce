<?php
include '../../connection/config.php';
$id=$_GET['attr'];
$sql = "delete from attribute where id ='$id'";
$val = $db->query($sql);

 if($val ){

     header('location:../../meAdmin/attribute?attr_d=d');

}