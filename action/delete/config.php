<?php

$db = new mysqli;
$db->connect("localhost","root","","linjust");

if(!$db){
    echo ' Not Connected Successfully';
}
