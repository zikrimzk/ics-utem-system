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
    echo "<h3 class='title01'> UPDATE YOUR PROFILE </h3>";
    echo"<hr>";
    echo "<form method='post' action='updateProfilE.php'>";
        echo "<div class='col-sm-6'>";
        echo "<p class='m-b-10 f-w-600'>Name</p>";
        echo"<input type'text' name='u_name' value='".$row['name']."'>";
        echo"</div>";

        echo "<div class='col-sm-6'>";
        echo "<p class='m-b-10 f-w-600'>Matric / Staff Number</p>";
        echo"<input type'text' name='u_matrik' value='".$row['no_matrik']."'readonly>";
        echo"</div>";

        echo "<div class='col-sm-6'>";
        echo "<p class='m-b-10 f-w-600'>IC Number</p>";
        echo"<input type'text' name='u_ic'value='".$row['no_ic']."'>";
        echo"</div>";

        echo "<div class='col-sm-6'>";
        echo "<p class='m-b-10 f-w-600'>Phone</p>";
        echo"<input type'text' name='u_phone'value='".$row['phone']."'>";
        echo"</div>";

        echo "<div class='col-sm-6'>";
        echo "<p class='m-b-10 f-w-600'>Email</p>";
        echo"<input type'email' name='u_email'value='".$row['email']."'>";
        echo"</div>";

        echo "<div class='col-sm-6'>";
        echo "<p class='m-b-10 f-w-600'>Status</p>";
        echo"<h6 class='text-muted f-w-400'>".$row['kategori']."";
        echo"</div>";

        echo"<div align='right'><input type='submit' name='submit'value='UPDATE PROFILE'></div>";

    echo "</form>";
    echo"</div>";
     
    }
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

                                           