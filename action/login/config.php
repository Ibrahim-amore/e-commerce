<?php

$db = new mysqli;
$db->connect("localhost","root","","printing");

if(!$db){
    echo ' Not Connected Successfully';
}
