<?php
session_start();

include ('head.php');
include('database/connect.php');
$infonum=$_REQUEST["infoNum"];
$sql =" DELETE FROM infofkp WHERE infoNum = '".$infonum."'";

$result = $conn->query($sql);

if ($conn->query($sql)===TRUE){
    echo"<meta http-equiv=\"refresh\" content=\"0;URL=fkp.php\">";
}else{
    echo "<p>";
    echo "<p style='text-align:center'> ERROR" .$sql. " <br>" . $conn->error;
}
$conn->close();
?>