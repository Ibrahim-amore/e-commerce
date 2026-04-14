<?php
include 'includes/head.php';
$check2s = $db->query("SELECT SUM(total_price) AS total_cost FROM `cart` WHERE `s_id` = '$s_id'");
$rows3s = mysqli_fetch_assoc($check2s);
$gt = $rows3s['total_cost'];

$mss ="Your purchased was completed successfully,Kindly Click on the button Below to view your invoice.";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
//define("DEMO", true); 
$template_file ='email/payment.php';

if(isset($_POST['pay'])){
   $email =$_POST['email'];
    $dis =$_POST['dis'];
    $delivery =$_POST['del'];
    $fname =$_POST['firstname'];
     $lname =$_POST['lastname'];
     $phone =$_POST['phone'];
     $amount =$_POST['amount'];
     $address =$_POST['address'];
      $state =$_POST['state'];
      $city = $_POST['city'];
      $name = $fname.$lname;
      
$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
$rref = "0123456789";
$order_id = substr( str_shuffle( $chars ), 0, 8 );
$trans_ref = substr( str_shuffle( $rref ), 0, 11 );
$status= "pending";
$payment_type = "pay on Delivery";
$sql201 = "insert into sales(ref,amount,name,state,city,address,phone,email,dis,delivery,s_id,meth,status,order_id)values('$trans_ref','$amount','$name','$state','$city','$address','$phone','$email','$dis','$delivery','$s_id','$payment_type','$status','$order_id')";
$val7 = $db->query($sql201);
if($val7){
 $swap_var = array(
    "{SITE_ADDRESS}" =>"https://deemart.com.ng",
    "{LOGO}" => "https://deemart.com.ng/meAdmin/logo/".$page_logo,
    "{INVOICE-LINK}" =>'https://deemart.com.ng/invoice?w='.$s_id,
    "{PAGE-NAME}" => "{$page_name}",
   "{EMAIL}" => "{$email}",
     "{NAME}" => "{$name}",
       "{EMAIL_ADDRESS}" => "{$email_address}",
           "{IN}" => "{$instagram}",
            "{FB}" => "{$facebook}",
             "{TW}" => "{$twitter}",
               "{MESSAGE}" =>"{$mss}"
                    
);

if(file_exists($template_file)){
$message = file_get_contents ($template_file);
foreach (array_keys($swap_var) as $key){
   if(strlen($key)> 2 && trim($key) != ""){
        $message = str_replace($key, $swap_var[$key], $message);
   }    
}

}
$mail = new PHPMailer(true);

    //Server settings
    $mail->SMTPDebug = true;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = $mail_host;                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = $in_coming_mail;                     //SMTP username
    $mail->Password   = $mail_password;                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = $port;                                   

    //Recipients
    $mail->setFrom($in_coming_mail , $page_name);
    $mail->addAddress($cus_email , $name);     //Add a recipient
   
   

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'INVOICE';
    $mail->Body    = $message;
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    $mail->send();
if($mail->send()){
header('location:delivery?p='.$order_id);
}else{
     echo "could not send message";
 }
    
    
}//val7 ends here
  
    

      
      
}


?>






