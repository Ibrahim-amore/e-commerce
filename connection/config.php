<?php

$db = new mysqli;
$db->connect("localhost","root","","grocery");

if(!$db){
    echo ' Not Connected Successfully';
}
