<title>FKP Info </title>
<?php
include("head.php");
?>
<br>
<br>
<br>
<br>
<head>
    <link rel="stylesheet" href="css/faculty1.css">
</head>
<html>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
  
  <div class="sidebar">
    <a href="postfkp.php">Create Post</a>
  </div>
  
  <div class="content">
    <h1 class="text_1">Fakulti Kejuruteraan Pembuatan</h1>
   
        
           
    <?php
 session_start();
include ('database/connect.php');

$userid= $_SESSION['no_matrik'];
$password= $_SESSION['password'];

$sql= "SELECT * FROM infofkp order by infoNum desc";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	
	while($row = $result->fetch_assoc()) {
    echo"<table cellspacing='5' cellpadding='5'class='post' align='center'>";
    echo"<tr>";
    echo "<td colspan='3' align='left' ><p class='send' style='font-weight:bolder; font-size: 11pt; color: rgb(192, 105, 0); margin-top:0;'>".$row['matrik']."</p></td>";
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
   
    if($row['matrik']== $userid)
    {
    ?>
    <tr><td align="right"><a href="updateFkp.php?infoNum=<?php echo $row["infoNum"];?>" class="update">Edit</a> <a href="deleteFkp.php?infoNum=<?php echo $row["infoNum"];?>"  class="update">Delete</a></td></tr>

    <?php
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