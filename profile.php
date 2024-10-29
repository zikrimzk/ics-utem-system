<title>Profile</title>
<link rel="stylesheet" href="css/profile.css">
<?php
session_start();

include ('head.php');
include ('database/connect.php');

$userid= $_SESSION['no_matrik'];
$password= $_SESSION['password'];

$sql= "SELECT * FROM user where no_matrik ='$userid' and password= '$password'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	
	while($row = $result->fetch_assoc()) {
        echo "<br>  <br>  <br>  <br>";
    echo "<div class='profile'>";
    echo "<h3 class='title01'>YOUR PROFILE </h3><a href='updateProfil.php'><img src='image/but_edit.png' class='but'></a> ";
    echo"<hr>";

        echo "<div class='col-sm-6'>";
        echo "<p class='m-b-10 f-w-600'>Name</p>";
        echo"<h6 class='text-muted f-w-400'>".$row['name']."";
        echo"</div>";

        echo "<div class='col-sm-6'>";
        echo "<p class='m-b-10 f-w-600'>Matric / Staff Number</p>";
        echo"<h6 class='text-muted f-w-400'>".$row['no_matrik']."";
        echo"</div>";

        echo "<div class='col-sm-6'>";
        echo "<p class='m-b-10 f-w-600'>IC Number</p>";
        echo"<h6 class='text-muted f-w-400'>".$row['no_ic']."";
        echo"</div>";

        echo "<div class='col-sm-6'>";
        echo "<p class='m-b-10 f-w-600'>Phone</p>";
        echo"<h6 class='text-muted f-w-400'>".$row['phone']."";
        echo"</div>";

        echo "<div class='col-sm-6'>";
        echo "<p class='m-b-10 f-w-600'>Email</p>";
        echo"<h6 class='text-muted f-w-400'>".$row['email']."";
        echo"</div>";

        echo "<div class='col-sm-6'>";
        echo "<p class='m-b-10 f-w-600'>Status</p>";
        echo"<h6 class='text-muted f-w-400'>".$row['kategori']."";
        echo"</div>";
    echo"</div>";
     
    }
	echo "</table>";
} else {
    echo "0 results";
}
 $conn->close();

         

?>
<br><br><br><br>
<footer>

  <?php
 
    include("footer.html");
   
  ?>
  <br>
</footer>

                                           