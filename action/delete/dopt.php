<?php
include '../../connection/config.php';
$id = $_GET['v'];
$sql = "delete from options where id ='$id'";
$val = $db->query($sql);

 if($val ){

     header('location:../../meAdmin/options?v_d=d');

}