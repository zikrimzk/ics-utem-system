<?php
$servername = "localhost:3306";//servername
$username = "root";
$password = "";
$dbname = "guestbook";//name database

$conn = new mysqli($servername, $username, $password, $dbname); 

if ($conn ->connect_error){
    die("Connect failed !!: " . $conn->connect_error);
}//echo " Connected successfully";
?>