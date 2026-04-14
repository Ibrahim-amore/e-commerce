<?php
include '../../connection/config.php';
$id=$_GET['tv'];
$sql = "delete from products where id ='$id'";
$val = $db->query($sql);

 if($val ){

     header('location:../../meAdmin/products?p~_d=d');

}