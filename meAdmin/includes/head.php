
<?php
ob_start();
include '../connection/config.php';
session_start();
if(!isset($_SESSION['id'])){
header('location:index');
}

$total_messages = $db->query("select *from reviews")->num_rows;
$total_products = $db->query("select *from products")->num_rows;
$total_subscribers= $db->query("select *from subscribers")->num_rows;
$total_order= $db->query("select *from sales")->num_rows;
include '../common/page-info.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta content="<?php echo $page_description;?>" name="description">
		<meta content="Ziftytech" name="author">
		<meta name="keywords" content="<?php echo $page_key_words;?>">

		<!-- Title -->
		<title><?php echo $page_title;?></title>

		<!--Favicon -->
                <link rel="icon" href="app_logo/<?php echo $app_logo;?>" type="image/x-icon"/>

		<!--Bootstrap css -->
		<link id="style" href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

		<!-- Style css -->
		<link href="assets/css/style.css" rel="stylesheet" />
		<link href="assets/css/dark.css" rel="stylesheet" />
		<link href="assets/css/skin-modes.css" rel="stylesheet" />

		<!-- Animate css -->
		<link href="assets/css/animated.css" rel="stylesheet" />


		<!-- P-scroll bar css-->
		<link href="assets/plugins/p-scrollbar/p-scrollbar.css" rel="stylesheet" />

		<!---Icons css-->
		<link href="assets/css/icons.css" rel="stylesheet" />

	    <!-- Color Skin css -->
		<link id="theme" href="assets/colors/color1.css" rel="stylesheet" type="text/css"/>

	    <!-- INTERNAL Switcher css -->
		<link href="assets/switcher/css/switcher.css" rel="stylesheet"/>
		<link href="assets/switcher/demo.css" rel="stylesheet"/>
		<!-- INTERNAL Morris Charts css -->
		<link href="assets/plugins/morris/morris329d.css?v=1647804400" rel="stylesheet" />
               <!-- INTERNAL File Uploads css -->
		<link href="assets/plugins/fancyuploder/fancy_fileupload.css" rel="stylesheet" />
                    <!-- INTERNAL Time picker css -->
		<link href="assets/plugins/time-picker/jquery.timepicker.css" rel="stylesheet" />

		<!-- INTERNAL Date Picker css -->
		<link href="assets/plugins/date-picker/date-picker.css" rel="stylesheet" />

		<!--Date Picker-->
		<link href="assets/plugins/bootstrap-datepicker/bootstrap-datepicker.css" rel="stylesheet" />

		<!-- INTERNAL Select2 css -->
		<link href="assets/plugins/select2/select2.min329d.css?v=1647804400" rel="stylesheet" />
                   <!-- INTERNAL File Uploads css-->
              <link href="assets/plugins/fileupload/css/fileupload.css" rel="stylesheet" type="text/css" />
		<!-- Data table css -->
		<link href="assets/plugins/datatables/DataTables/css/dataTables.bootstrap5.css" rel="stylesheet" />
		<link href="assets/plugins/datatables/Buttons/css/buttons.bootstrap5.min.css"  rel="stylesheet">
		<link href="assets/plugins/datatables/Responsive/css/responsive.bootstrap5.min.css" rel="stylesheet" />

	    <!-- Color Skin css -->
		<link id="theme" href="assets/colors/color1329d.css?v=1647804400" rel="stylesheet" type="text/css"/>
                <!-- INTERNAL Jquerytransfer css-->
		<link rel="stylesheet" href="assets/plugins/jQuerytransfer/jquery.transfer.css">
		<link rel="stylesheet" href="assets/plugins/jQuerytransfer/icon_font/icon_font.css">

		<!-- INTERNAL multi css-->
		<link rel="stylesheet" href="assets/plugins/multi/multi.min.css">
                <!-- INTERNAl Quill css -->
		<link href="assets/plugins/quill/quill.snow.css" rel="stylesheet">
		<link href="assets/plugins/quill/quill.bubble.css" rel="stylesheet">
          <script src="https://kit.fontawesome.com/e30b33a5ff.js" crossorigin="anonymous"></script>
                
		<!-- INTERNAl WYSIWYG Editor css -->
		<link href="assets/plugins/wysiwyag/richtext.css" rel="stylesheet" />

	</head>