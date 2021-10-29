<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'oer';


$conn = mysqli_connect("$servername","$username","$password","$database");

if(!$conn){
    die("Database is not connected :" .connection_error());
}


?>