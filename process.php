<?php
include 'includes/head.php';
$page_id =1;
$sql_p=" select * from payment where id ='$page_id'";
$result_p = $db->query($sql_p);
$row_p = $result_p->fetch_assoc();
$secret_key = $row_p['secret_key'];

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

if(isset($_GET['status'])){
    
    if($_GET['status']=='cancelled'){
        header('location:checkout');
    }
    elseif ($_GET['status']=='successful') {
        $text_id =$_GET['transaction_id'];
        
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true);
  curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.flutterwave.com/v3/transactions/{$text_id}/verify",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "Content-Type: application/json",
    "Authorization: Bearer {$secret_key}"
  ),
));

$response = curl_exec($curl);

curl_close($curl);
$res = json_decode($response);

if($res->status){
 $amountPaid = $res->data->charged_amount;
 $amoutToPay =  $res->data->meta->price;
 $trans_ref = $res->data->tx_ref;
 $cus_name= $res->data->customer->name;
 $cus_email= $res->data->customer->email;
 $cus_address= $res->data->meta->address;
 $city= $res->data->meta->city;
 $state= $res->data->meta->state;
 $delivery= $res->data->meta->delivery;
 $dis = $res->data->meta->dis;
$cus_phone= $res->data->customer->phone_number;
 $currency_type =$res->data->currency;
 $payment_type =$res->data->payment_type;
 $status = $res->data->status;  
 
 if($amountPaid >= $amoutToPay){
     
$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
$order_id = substr( str_shuffle( $chars ), 0, 8 );

$sql201 = "insert into sales(ref,amount,name,state,city,address,phone,email,dis,delivery,s_id,meth,status,order_id)values('$trans_ref','$amountPaid','$cus_name','$state','$city','$cus_address','$cus_phone','$cus_email','$dis','$delivery','$s_id','$payment_type','$status','$order_id')";
$val7 = $db->query($sql201);

if($val7){
$swap_var = array(
    "{SITE_ADDRESS}" =>"https://www.shauntifabrics.com",
    "{LOGO}" => "https://www.shauntifabrics.com/meAdmin/logo/".$page_logo,
    "{INVOICE-LINK}" =>'https://shauntifabrics.com/invoice?w='.$s_id,
    "{PAGE-NAME}" => "{$page_name}",
   "{EMAIL}" => "{$cus_email}",
     "{NAME}" => "{$cus_name}",
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


//Create an instance; passing `true` enables exceptions
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
    $mail->addAddress($cus_email , $cus_name);     //Add a recipient
   
   

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'INVOICE';
    $mail->Body    = $message;
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
 $mail->send();
 //header('location:delivery?p='.$trans_ref);
if($mail->send()){
header('location:delivery?p='.$trans_ref);
 }else{
     echo "could not send message";
 }
 } else {
    echo("Error:".$db->error); 
 
     
 }
 
 }
 
 else {
     echo 'fraud transaction';  
 }
    
}

}
    
}




















