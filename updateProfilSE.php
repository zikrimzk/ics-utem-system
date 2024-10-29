<?php
session_start();

include ('headindex.php');
include('database/connect.php');
$userid= $_SESSION['no_matrik'];
$password= $_SESSION['password'];
$name=$_POST['u_name'];
$ic=$_POST['u_ic'];
$eml=$_POST['u_email'];
$phone=$_POST['u_phone'];


$sql= "UPDATE user SET name ='".$name."' , no_ic='".$ic."', email='".$eml."', phone='".$phone."' WHERE no_matrik ='$userid' and password= '$password'";

$result = $conn->query($sql);

if ($conn->query($sql)===TRUE){
    echo"<script>";
    echo"alert('Profile Updated')";
    echo"</script>";
    echo"<meta http-equiv=\"refresh\" content=\"0;URL=profileS.php\">";
}else{
    echo "<p>";
    echo "<p style='text-align:center'> ERROR" .$sql. " <br>" . $conn->error;
}
$conn->close();

?>