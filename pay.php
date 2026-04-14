<?php
include 'includes/head.php';
$page_id =1;
$sql_p=" select * from payment where id ='$page_id'";
$result_p = $db->query($sql_p);
$row_p = $result_p->fetch_assoc();
$secret_key = $row_p['secret_key'];
?>

<?php
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

  $request = [
   'tx_ref' => time(),
   'amount' => $amount,
   'currency' => 'NGN',
   'redirect_url' => 'https://www.shauntifabrics.com/process',
   'payment_options' => 'card',
      
   'meta' =>[
      'price' => $amount,
      'address'=> $address,
       'state'=>$state,
       'city'=>$city,
       'delivery'=>$delivery,
       'dis'=>$dis,
   ],
   'customer' => [
      'email' => $email,
      'phone_number' => $phone,
      'name' => $name,
      
       
   ],
   'customizations' => [
      'title' => $page_name,
      'description' => 'Sample message',
       'logo' => 'https://www.shauntifabrics.com/meAdmin/app_logo/'.$app_logo,
      
   ]
   ];

$curl = curl_init();
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.flutterwave.com/v3/payments",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode($request),
  CURLOPT_HTTPHEADER => array(
    "Content-Type: application/json",
    "Authorization: Bearer {$secret_key}"
  )
));

$response = curl_exec($curl);
curl_close($curl);
$res = json_decode($response);
if($res->status == 'success')
{
    $link = $res->data->link;
    header('location:' .$link);
}
 else {
   echo 'you cannot process payment at the moment'; 
}

    

}




?>

