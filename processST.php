<?php
session_start();
include("database/connect.php");
$fn=$_POST['nama'];
$matric=$_POST['matrik'];
$phone=$_POST['phone'];
$title=$_POST['title'];
$comp=$_POST['complaint'];

$sql = "INSERT INTO staffcomplaint (st_name, st_id, phone, title, complaint)
VALUES ('$fn', '$matric', '$phone', '$title', '$comp')"
 or die ("Error complaint");

 if( $conn->query($sql) === TRUE){
    echo"<script>";
     echo " alert('Your complaint is sent successfully')";
     echo"</script>";
     echo " <meta http-equiv=\"refresh\" content=\"0; URL=home.php\">";
 } else{
     echo " Error : " . $sql . " <br>" . $conn->error;
 }

 $conn ->close();
 ?>