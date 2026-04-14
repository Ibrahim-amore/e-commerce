<?php 
include 'connection/config.php';
include 'connection/connection.php';
include 'common/page-info.php';
?>
<?php
session_start();
//$s_id = session_id();
session_regenerate_id();
?>
<html class="no-js" lang="">
 <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>
        <?php
        if(isset($_GET['pid'])){
            echo $pn;
        }
        else{
          echo $page_title;
        }
        ?>
    </title>
    <meta name="keywords" content="
           <?php
        if(isset($_GET['w'])){
            echo $k_w;
        }
        else{
          echo $page_key_words;
        }
        ?>
          " />
    <meta name="description" content="
           <?php
        if(isset($_GET['pid'])){
            echo $des1;
        }
        else{
          echo $page_description;
        }
        ?>
          ">
    <meta name="author" content="Ziftytech">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" type="image/x-icon" href="meAdmin/app_logo/<?php echo $app_logo;?>">
        
		<!-- CSS here -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/fontawesome-all.min.css">
        <link rel="stylesheet" href="css/jquery-ui.css">
        <link rel="stylesheet" href="css/flaticon.css">
        <link rel="stylesheet" href="css/aos.css">
        <link rel="stylesheet" href="css/slick.css">
        <link rel="stylesheet" href="css/default.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
        <?php
echo $page_chat_api;
?>
  <?php
echo $google_analytics;
?>
  <?php
echo $facebook_pixel;
?>
    </head>