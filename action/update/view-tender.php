<?php
include '../connection/config.php';
$id=$_GET['w'];
$sql=" select * from bids where id ='$id'";
$result = $db->query($sql);
$row = $result->fetch_assoc();
$bids_name = $row['name'];
$bids_category = $row['category'];
$bids_message = $row['message'];
$bids_deadline = $row['deadline'];
$bids_company = $row['company'];
$bids_document = $row['image'];
$bids_phone = $row['phone'];
$bids_email = $row['email'];

?>

