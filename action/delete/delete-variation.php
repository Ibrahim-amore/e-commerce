<?php
include '../../connection/config.php';
$id = $_GET['var'];
$sql = "delete from variation where id ='$id'";
$val = $db->query($sql);

 if($val ){

     header('location:../../meAdmin/variation?v_d=d');

}