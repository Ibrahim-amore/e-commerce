<?php
include '../connection/config.php';
$id=$_GET['w'];
$sql=" select * from wholesale where id ='$id'";
$result = $db->query($sql);
$row = $result->fetch_assoc();
$n = $row['n'];
$d = $row['d'];
$c = $row['c'];
$q = $row['q'];
$p = $row['p'];
$image = $row['i'];

if(isset($_POST['update_wholesale'])){
$n =$_POST['n'];
 $c =$_POST['c'];
 $d =$_POST['d'];
 $q =$_POST['q'];
 $p =$_POST['p'];
 //$i =$_POST['i'];
 
 
 $n_ = mysqli_real_escape_string($db, $n);
 $c_ = mysqli_real_escape_string($db, $c);
 $d_ = mysqli_real_escape_string($db, $d);
 $q_ = mysqli_real_escape_string($db, $q);
 $p_ = mysqli_real_escape_string($db, $p);
 
 if(isset($_FILES['i']['name']) && ($_FILES['i']['name']!="")){
  $i_ = time().'_'. $_FILES['i']['name'];
        unlink("wholesale_image/$image");

        $target= 'wholesale_image/' . $i_;
        move_uploaded_file($_FILES['i']['tmp_name'], $target);
    } else {
        $i_ = $image;

    }
   
 
    $sql= "UPDATE `wholesale` SET  n ='$n_',c='$c_',d='$d_',q='$q_',p='$p_',i='$i_' WHERE id='$id'";
    $result8= $db->query($sql);
    
    if($result8){
       header('location:wholesale?p_u=Updated');
    } else {
        echo 'error';
    }

}
?>

