<?php
include '../connection/config.php';
$page_id =1;
$sql=" select * from page_info where id ='$page_id'";
$result = $db->query($sql);
$row = $result->fetch_assoc();
$page_key_words = $row['key_words'];
$page_description = $row['description'];
$page_title = $row['title'];
$page_phone = $row['phone'];
$page_email = $row['email'];
$page_fb = $row['fb'];
$page_tw = $row['tw'];
$page_ln = $row['ln'];
$page_chat = $row['chat'];
$page_ins = $row['ins'];
$p = $row['p'];
$h = $row['h'];
$v_p = $row['v_p'];
$map = $row['map'];
$v_h = $row['v_h'];
$wl = $row['wl'];
$mail_host = $row['mh'];
$in_coming_mail = $row['icm'];
$mail_password = $row['mp'];
$port = $row['port'];
$page_tel = $row['tel'];
$page_address = $row['address'];
$page_logo = $row['logo'];
$app_logo = $row['app_logo'];
$android = $row['android'];
$ios = $row['ios'];
$welcome = $row['welcome'];
$b_n = $row['bank_name'];
$acc_name = $row['acc_name'];
$acc_no = $row['acc_number'];
if(isset($_POST['update-home'])){
$tel_u =$_POST['tel'];
 $title_u =$_POST['title'];
 $description_u =$_POST['description'];
 $key_words_u =$_POST['key_words'];
 $phone_u =$_POST['phone'];
 $email_u =$_POST['email'];
 $fb_u =$_POST['fb'];
 $ins_u =$_POST['ins'];
 $address_u =$_POST['address'];
 $tw_u =$_POST['tw'];
  $h_u =$_POST['h'];
   $p_u =$_POST['p'];
   $ln_u =$_POST['ln'];
    $v_p_u =$_POST['v_p'];
     $v_h_u =$_POST['v_h'];
      $wl_u =$_POST['wl'];
       $map_ =$_POST['map'];
      $chat_u =$_POST['chat'];
       $android_ =$_POST['android'];
        $ios_ =$_POST['ios'];
      $welcome_ =$_POST['welcome'];
      $mh =$_POST['mh'];
      $icm =$_POST['icm'];
      $mp =$_POST['mp'];
      $a_n =$_POST['a_n'];
      $b_n =$_POST['b_n'];
      $acc = $_POST['acc'];
      $port_u =$_POST['port'];
      $port_u = mysqli_real_escape_string($db, $port_u);
      $mp = mysqli_real_escape_string($db, $mp);
      $icm = mysqli_real_escape_string($db, $icm);
      
      
      $a_n = mysqli_real_escape_string($db, $a_n);
      $b_n = mysqli_real_escape_string($db, $b_n);
      $acc = mysqli_real_escape_string($db, $acc);
      
      
      $mh = mysqli_real_escape_string($db, $mh);
     $map_ = mysqli_real_escape_string($db, $map_); 
 $tel_u = mysqli_real_escape_string($db, $tel_u);
 $title_u = mysqli_real_escape_string($db, $title_u);
 $description_u = mysqli_real_escape_string($db, $description_u);
 $key_words_u = mysqli_real_escape_string($db, $key_words_u);
 $phone_u = mysqli_real_escape_string($db, $phone_u);
 $email_u = mysqli_real_escape_string($db, $email_u);
 $fb_u = mysqli_real_escape_string($db, $fb_u);
 $ins_u = mysqli_real_escape_string($db, $ins_u);
 $address_u = mysqli_real_escape_string($db, $address_u);
 $tw_u = mysqli_real_escape_string($db, $tw_u);
 $h_u = mysqli_real_escape_string($db, $h_u);
 $p_u = mysqli_real_escape_string($db, $p_u);
 $v_p_u = mysqli_real_escape_string($db, $v_p_u);
 $v_h_u = mysqli_real_escape_string($db, $v_h_u);
 $ln_u = mysqli_real_escape_string($db, $ln_u);
 $wl_u = mysqli_real_escape_string($db, $wl_u);
 $chat_u = mysqli_real_escape_string($db, $chat_u);
 $android_ = mysqli_real_escape_string($db, $android_);
 $ios_ = mysqli_real_escape_string($db, $ios_);
 $welcome_ = mysqli_real_escape_string($db, $welcome_);
 if(isset($_FILES['attachment']['name']) && ($_FILES['attachment']['name']!="")){
     $logopicture = time().'_'. $_FILES['attachment']['name'];
        unlink("logo/$page_logo");
        $target= 'logo/' . $logopicture;
        move_uploaded_file($_FILES['attachment']['tmp_name'], $target);
    } else {
        $logopicture=$page_logo;

    }
 if(isset($_FILES['app']['name']) && ($_FILES['app']['name']!="")){
     $apppicture = time().'_'. $_FILES['app']['name'];
        unlink("app_logo/$app_logo");
        $target= 'app_logo/' . $apppicture;
        move_uploaded_file($_FILES['app']['tmp_name'], $target);
    } else {
        $apppicture=$app_logo;

    }
    $sql= "UPDATE `page_info` SET  key_words ='$key_words_u',description='$description_u',title='$title_u',phone='$phone_u',ins='$ins_u',tel='$tel_u',logo='$logopicture',address='$address_u',email='$email_u',fb='$fb_u',tw='$tw_u',h='$h_u',p='$p_u',v_p='$v_p_u',v_h='$v_h_u',ln='$ln_u',chat='$chat_u',mh='$mh',icm='$icm',mp='$mp',port='$port_u',app_logo='$apppicture',ios='$ios_',android='$android_',welcome='$welcome_',map='$map_',wl='$wl_u',bank_name='$b_n',acc_name='$a_n',acc_number='$acc' WHERE id='$page_id'";
    $result8= $db->query($sql);
    
    if($result8){
       header('location:home?h_u=u');
    } else {
        echo 'error';
    }

}
?>

