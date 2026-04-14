<?php
include 'config.php';
session_start();
$username=$password="";
include '../../common/page-info.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require '../../vendor/autoload.php';

//define("DEMO", true);
$template_file ='../../email/template3.php';


if(isset($_POST['re-email'])){
    $email_rec =$_POST['re-email'];
    
    $sql= "SELECT *FROM subscribers WHERE email = '$email_rec' AND days_left > 0";
    $result_recover = $db->query($sql);
    if(mysqli_num_rows($result_recover) < 1){
        echo "<b class='text-danger'>Email does not exist or subscription has expired</b>";
        
    }
    else {
       $row_rec = $result_recover->fetch_assoc();
       $cus_name = $row_rec['name'];
       $cus_password = $row_rec['password'];
       
      $swap_var = array(
    "{SITE_ADDRESS}" =>"https://www.print-tenders.com.ng/",
    "{IMAGE}" => "https://www.print-tenders.com.ng/meAdmin/logo/{$page_logo}",
    "{SITE_NAME}" => "{$page_name}",
    "{EMAIL_TITLE}" => "SUBSCRIPTION NOTICE",
    "{PASSWORD}" => "{$cus_password}",
     "{TO_NAME}" => "{$cus_name}"
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
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;  
    $mail->SMTPDebug = false;                    //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'mail.print-tenders.com.ng';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = $email_address;                     //SMTP username
    $mail->Password   = 'ziftytech@2020';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                   

    //Recipients
    $mail->setFrom($email_address , $page_name);
    $mail->addAddress($email_rec , $cus_name);     //Add a recipient
   

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Subscription Credentials';
    $mail->Body    = $message;
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
 $mail->send();
 if($mail->send()){
   echo "<b class='text-success'>Your Password has been sent to your mail</b>";
 }
        
        
   
    }
}


