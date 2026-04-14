
<?php
include "config.php";
$id=$_GET['id'];
$sql = "delete from `client_reciept` where id ='$id'";
$val = $db->query($sql);

 if($val ){

     header('location:../admin?rec=deleted');

}