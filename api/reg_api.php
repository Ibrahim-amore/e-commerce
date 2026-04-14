<?php
require 'connection/config.php';
require 'common/page-info.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
//define("DEMO", true); 
$template_file ='email/verify_mail.php';
if(isset($_POST['firstname'])){
$email = $_POST['email'];
$lastname = $_POST['lastname'];
$firstname = $_POST['firstname'];
$password = $_POST['password'];
$phone = $_POST['phonenumber'];
$state = $_POST['state'];
$address = $_POST['address'];
$pcode = $_POST['postalcode'];
$mess ="Kindly click the button below to verify your account";
$password = mysqli_real_escape_string($db, $password);
$hashFormat = "$2y$10$";
$salt = "iloveomomoferoseline21";
$hash_and_salt = $hashFormat.$salt;
$password = crypt($password,$hash_and_salt);
$chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$pin = substr( str_shuffle( $chars ), 0, 6 ); 
$v_key = md5(time().$email);
$link ='https://www.mofet.com/verify?v='.$v_key;
//echo $password;
$fname = mysqli_real_escape_string($db, $firstname);
$lname = mysqli_real_escape_string($db, $lastname);
$state = mysqli_real_escape_string($db, $state);
$address = mysqli_real_escape_string($db, $address);
$pcode = mysqli_real_escape_string($db, $pcode);
$phone = mysqli_real_escape_string($db, $phone);
$email = mysqli_real_escape_string($db, $email);
 $sql65= "select * from `customers` WHERE `email` = '$email'";
 $result = $db->query($sql65);
 $num_s =(mysqli_num_rows($result));   
 if($num_s > 0){
  echo "<p class='text-danger font-size-16 text-center'> Customer already exist</p>";       
 }
 else{
$sql = "insert into `customers`(ln,fn,email,password,phone,address,verify_token,state,pcode)values('$lname','$fname','$email','$password','$phone','$address','$v_key','$state','$pcode')";
$val = $db->query($sql);  
if($val){
  $swap_var = array(
    "{PAGE-NAME}" => "{$page_name}",
    "{EMAIL}" => "{$email}",
    "{PHONE}" => "{$phone_number}",
    "{NAME}" => "{$name}",
     "{VERIFY-LINK}" => "{$link}",
      "{FB}" => "{$facebook}",
       "{IN}" => "{$instagram}",
        "{TW}" => "{$twiter}",
        "{MESSAGE}" => "{$mess}"
);
 if(file_exists($template_file)){
$message = file_get_contents ($template_file);
foreach (array_keys($swap_var) as $key){
   if(strlen($key)> 2 && trim($key) != ""){
    $message = str_replace($key, $swap_var[$key], $message);
   }    
}

}

   //Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);
   //Server settings
    $mail->SMTPDebug = false;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = $mail_host;                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = $in_coming_mail;                     //SMTP username
    $mail->Password   = $mail_password;                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = $port;                                   

    //Recipients
    $mail->setFrom($in_coming_mail, $page_name);
    $mail->addAddress($email , $name);     //Add a recipient
   

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Email Verification';
    $mail->Body  = $message;
    
 $mail->send(); 
  if($mail){  
  echo "<p class='text-success font-size-16 text-center'>Thanks for Registering! A verification link has been sent to your email.Kindly verify your account to continue.</p>";  
  }
  //echo "registerd successfully";  
   
}
}
}


?>