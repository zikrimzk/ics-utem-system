<?php
session_start();
include("database/connect.php");
$fn=$_POST['nama'];
$matric=$_POST['matrik'];
$email=$_POST['email'];
$fc=$_POST['fakulti'];
$program=$_POST['program'];
$year=$_POST['thun'];
$title=$_POST['title'];
$comp=$_POST['complaint'];

    $sql = "INSERT INTO studentcomplaint (name, matric, email, faculty, prog, year, title, complaint)
            VALUES ('$fn', '$matric', '$email', '$fc','$program', '$year', '$title', '$comp')"
            or die ("Error complaint");

 if( $conn->query($sql) === TRUE){
     echo"<script>";
     echo " alert('Your complaint is sent successfully')";
     echo"</script>";
     echo " <meta http-equiv=\"refresh\" content=\"0; URL=homeS.php\">";
 } else{
     echo " Error : " . $sql . " <br>" . $conn->error;
 }



 $conn ->close();
 ?>