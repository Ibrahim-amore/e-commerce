<?php
//session_start();
$username=$password="";
$msg="";
if(isset($_POST['login'])){
    $email =$_POST['email'];
    $password =$_POST['password'];
  $email = mysqli_real_escape_string($db, $email);
 $password = mysqli_real_escape_string($db, $password);
$hashFormat = "$2y$10$";
$salt = "iloveomomoferoseline21";
$hash_and_salt = $hashFormat.$salt;
$password = crypt($password,$hash_and_salt);
    $sql= "SELECT *FROM customers WHERE email='$email' AND password='$password' AND verified = 1";
    $result = $db->query($sql);
    if(mysqli_num_rows($result)>0){
        while ($row = $result->fetch_assoc()){
         
            $_SESSION['id']=$row['id'];
            $_SESSION['email']=$row['email'];
             $_SESSION['phone']=$row['phone'];
              $_SESSION['address']=$row['address'];
        }
        //echo "<strong class='text-success'>Login successful.<a href='index'> Browe</a></strong>";
        header('location:');
        $msg ="<p class='text-success'>
          Login successful
           </p>";
        
    }
    else {
       $msg ="<p class='text-danger'>
          Incorrect login Credentials!! Try Again.
          
          </p>";
    }
}


