<?php

include("database/connect.php");
$nm=$_POST['name'];
$nom=$_POST['no_matrik'];
$nic=$_POST['no_ic'];
$em=$_POST['email'];
$phone=$_POST['phone'];
$category=$_POST['kategori'];
$pass=$_POST['password'];
$pass2=$_POST['password1'];
if($pass==$pass2)
{
    $sql = "INSERT INTO user (name, no_matrik, no_ic, email, phone, kategori, password)
    VALUES ('$nm', '$nom', '$nic', '$em', '$phone', '$category', '$pass')"
     or die ("Error inserting into table");
     if( $conn->query($sql) === TRUE){
        echo " New record created successfully";
        echo " <meta http-equiv=\"refresh\" content=\"3; URL=index.php\">";
    } else{
        echo " Error : " . $sql . " <br>" . $conn->error;
    }
    
}
else{
    echo"<script>";
    echo" alert(' Password did not match !')";
    echo"</script>";
    echo " <meta http-equiv=\"refresh\" content=\"0; URL=register.php\">";
}


 $conn ->close();
 ?>