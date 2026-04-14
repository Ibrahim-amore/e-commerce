<?php
include '../../connection/config.php';
$id=$_GET['dr'];
$sql = "delete from product_reviews where id ='$id'";
$val = $db->query($sql);

 if($val ){
 header('location:../../meAdmin/product_reviews?pr~~_d=d');

}