<?php
//session_start();
//$session_id = session_id();
include 'connection/config.php';
       
if($_FILES["file"]["name"] !=''){
//$ref =$_POST['ref'];
$test = explode(".", $_FILES["file"]["name"]);
$extension = end($test);
$name = rand(100 , 99999).'.'.$extension;
$location ='./evidence/'.$name;
move_uploaded_file($_FILES["file"]["tmp_name"], $location);

$path = './print/'.$name;
//echo $totoalPages;	



$sql = "insert into evidence(document)values('$name')";
$val = $db->query($sql);
if($val){
 echo"<div class='alert alert-success' role='alert'><button type='button' class='btn-close' data-bs-dismiss='alert' aria-hidden='true'>×</button>
			<i class='fa fa-check-circle-o me-2' aria-hidden='true'></i>Your Document is uploaded successfully</div>";                                                  
}
}
 else {
    echo ''; 
}

?>
	      
           
             
                       
