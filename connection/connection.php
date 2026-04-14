<?php
$conn = new mysqli("localhost","root","","grocery");
        if($conn->connect_error){
            die("connection Failed" .$conn->connect_error);
        }

?>
