<?php
require 'connection/config.php';
include 'common/page-info.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
//define("DEMO", true); 
$template_file ='email/template2.php';
if(isset($_POST['name'])){
$comment = $_POST['message'];
$name = $_POST['name'];
//$lname = $_POST['lastname'];
$subject = $_POST['subject'];
$phone = $_POST['phone'];
$email = $_POST['email'];
//$name = $lname.$fname;
$comment = mysqli_real_escape_string($db, $comment);
$name = mysqli_real_escape_string($db, $name);
$subject = mysqli_real_escape_string($db, $subject);
$phone = mysqli_real_escape_string($db, $phone);
$email = mysqli_real_escape_string($db, $email);
if(($comment == "")||($name== "") || ($email== "")){
 echo "<p class='text-danger font-size-16 text-center'> All fields are not completely filled!</p>";    
}
 
else {
   
$sql = "insert into `reviews`(name,comment,subject,phone,email)values('$name','$comment','$subject','$phone','$email')";
$val = $db->query($sql);  
if($val){
    $swap_var = array(
    "{SHOP-NAME}" => "{$page_name}",
    "{SUBJECT}" => "{$subject}",
    "{PHONE}" => "{$phone_number}",
    "{SHOP-EMAIL}" => "{$email_address}",
     "{MESSAGE}" => "{$comment}",
      "{FB}" => "{$facebook}",
       "{IN}" => "{$instagram}",
        "{TW}" => "{$twitter}",
        "{NAME}" => "{$name}"
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
   $mail->SMTPDebug = false;                      
    $mail->isSMTP();                                            
    $mail->Host       = $mail_host;                     
    $mail->SMTPAuth   = true;                                  
    $mail->Username   = $in_coming_mail;                     
    $mail->Password   = $mail_password;                              
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
    $mail->Port       = $port;                                   

    //Recipients
    $mail->setFrom($in_coming_mail , $page_name);
    $mail->addAddress($email_address , $name);     
     $mail->isHTML(true);                                 
    $mail->Subject = $subject;
    $mail->Body    = $message;
    $mail->send();
 
  if($mail){  
    
    echo "<p class='text-success font-size-16 text-center'>Thanks for your time.your message is sent!</p>";  
  } 
   
}
}
}


?>