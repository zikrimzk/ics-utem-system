<title>ICS login gateway</title>
<link rel="stylesheet" href="css/index.css">
<?php
session_start();

if(!isset($_SESSION['no_matrik']))
{
    $_SESSION['no_matrik']=$_POST['no_matrik'];
    $_SESSION['password']=$_POST['password'];
}
include("database/connect.php");

$sql = " SELECT * FROM user WHERE no_matrik = '". $_SESSION['no_matrik'] ."'
AND password='" . $_SESSION['password'] ."'";

$result =$conn->query($sql);

if($result ->num_rows==0)
{
    echo"<center> <div class='lds-roller'><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div><br>";
    echo " MATRIC / STAFF NUMBER OR PASSWORD INCORRECT !!</center>" ;
    session_unset();
    echo " <meta http-equiv=\"refresh\" content=\"3; URL=index.php\">";
}
 else
{
    $row = $result->fetch_assoc();
    if($row['kategori']=='STUDENT')
    {
        include("homeS.php");
    }
    else if($row['kategori']=='STAFF'){
        include("home.php");
    }
    else{
        include("adminpage.php");
    }
   
}

$conn->close();
?>
