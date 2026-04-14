<?php
include '../../connection/config.php';
$id=$_GET['c'];
$sql = "delete from voucher where id ='$id'";
$val = $db->query($sql);

 if($val ){

     header('location:../../meAdmin/voucher?c~~_d=d');

}