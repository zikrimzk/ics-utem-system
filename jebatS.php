<title>Jebat info</title>
<?php
include("headS.php");
?>
<br>
<br>
<br>
<br>
<head>
    <link rel="stylesheet" href="css/faculty.css">
</head>
<html>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
  
  <div class="content">
    <h1 class="text_1"> Blok Jebat </h1>
   
        
    <?php
 session_start();
include ('database/connect.php');

$userid= $_SESSION['no_matrik'];
$password= $_SESSION['password'];

$sql= "SELECT * FROM infojebat ORDER by infoNum desc  ";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	
	while($row = $result->fetch_assoc()) {
    echo"<table cellspacing='5' cellpadding='5'class='post' align='center'>";
    echo"<tr>";
    echo "<td colspan='3' align='left' ><p class='send' style='font-weight:bolder; font-size: 11pt; color:blue; margin-top:0;'>".$row['matrik']."</p></td>";
    echo "</tr>";
    echo"<tr>";
    echo "<td colspan='3' align='center' class='tajuk'>".$row['title']."</td>";
    echo "</tr>";

    echo"<tr>";
    echo "<td colspan='3' align='left'>".$row['date']."</td>";
    echo "</tr>";

    $text=$row['content'];
    echo"<tr>";
    echo "<td colspan='3' align='left' ><p class='mak1'>".nl2br($text)."</p></td>";
    echo "</tr>";
    if($row["image"]=="")
      {

      }
          else{
          $imageurl='upload/'.$row["image"];
          echo"<tr>";
          echo "<td colspan='3' align='left'><center><img src='".$imageurl."' class='image'></center></td>";
          echo "</tr>";
      }
   
    }
	echo "</table>";
  echo"<br>";
} else {
    echo "0 results";
}
 $conn->close();
 echo "<br><br><br><br>";	
 echo"</div>";
echo"</body>";
echo"<footer>";
include("footer.html");
echo"</footer>";

?>