<?php
session_start();

include ('headindex.php');
include('database/connect.php');
$id=$_POST['u_id'];
$name=$_POST['u_name'];
$no_mat=$_POST['u_matric'];
$ic=$_POST['u_ic'];
$eml=$_POST['u_email'];
$phone=$_POST['u_phone'];
$cat=$_POST['u_kategori'];

$sql= "UPDATE user SET name ='".$name."' , no_matrik='".$no_mat."', no_ic='".$ic."', email='".$eml."', phone='".$phone."', kategori='".$cat."' WHERE id= '".$id."' ";

$result = $conn->query($sql);

if ($conn->query($sql)===TRUE){
    echo"<meta http-equiv=\"refresh\" content=\"0;URL=alluser.php\">";
}else{
    echo "<p>";
    echo "<p style='text-align:center'> ERROR" .$sql. " <br>" . $conn->error;
}
$conn->close();

?>