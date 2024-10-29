<?php
session_start();

include ('head.php');
include('database/connect.php');
$id=$_REQUEST["id"];
$sql =" DELETE FROM user WHERE id = '".$id."'";

$result = $conn->query($sql);

if ($conn->query($sql)===TRUE){
    echo"<meta http-equiv=\"refresh\" content=\"0;URL=alluser.php\">";
}else{
    echo "<p>";
    echo "<p style='text-align:center'> ERROR" .$sql. " <br>" . $conn->error;
}
$conn->close();
?>