<?php

$host = 'localhost';
$password = '1234 ';
$database = 'oer';
$userName = 'diana';

$conn = new mysqli($host, $password, $database, $userName);

if ($connection->connect_error){
  echo "connected successfully";
}else {
 die("connection failed: " . $conn->connect_error);
}
$table="CREATE TABLE user(
id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100),
email VARCHAR(100),
reg_date TIMESTAMP DEFAULT CURRET_TIMESTAMP ON UPDATE
   CURRENT_TIMESTAMP
)";
if($connection->query($table)===true) {
echo "table created successfully";
}else{
echo "error".$connection->error;
}

$UPLOAD =$_POST['UPLOAD'];
$UPDATE = $_POST['UPDATE'];
$SHARE = $POST['SHARE'];

//database connection

?>