<?php
include "config.php";
session_start();
$username=$password="";

if(isset($_POST['login'])){
    $username =$_POST['username'];
    $password =$_POST['password'];
    $sql= "SELECT *FROM users WHERE username ='$username' AND password ='$password'";
    $result = $db->query($sql);
    if(mysqli_num_rows($result)>0){
        while ($row = $result->fetch_assoc()){
         
            $_SESSION['id']=$row['id'];

        }
        header('location:admin');
    }
    else {
        header('location:index?login1=error');

    }
}

