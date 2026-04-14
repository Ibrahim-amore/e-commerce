<?php
include '../../connection/config.php';
$id=$_GET['cat'];
$sql = "delete from category where id ='$id'";
$val = $db->query($sql);

 if($val ){

     header('location:../../meAdmin/category?cat_d=d');

}