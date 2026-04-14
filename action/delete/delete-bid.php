<?php
include '../../connection/config.php';
$id=$_GET['w'];
$sql = "delete from bids where id ='$id'";
$val = $db->query($sql);

 if($val ){

     header('location:../../meAdmin/un-approved-bid?b_d=d');

}