<?php
include '../../connection/config.php';
$id=$_GET['brand'];
$sql = "delete from brand where id ='$id'";
$val = $db->query($sql);

 if($val ){

     header('location:../../meAdmin/brand?brand_d=d');

}