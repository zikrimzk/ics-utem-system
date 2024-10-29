<html>
<head>
<title>CREATE POST</title>
<link rel="stylesheet" href="css/post.css">
</head>
<?php
include("headindex.php");
?>
<body>

<center><h2>CREATE POST </h2>
<?php
 session_start();
include ('database/connect.php');

$userid= $_SESSION['no_matrik'];
$password= $_SESSION['password'];

$sql= "SELECT * FROM user where no_matrik ='$userid' and password= '$password'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	
	$row = $result->fetch_assoc();
    echo "<form method = 'post' action = 'processFke.php'  enctype='multipart/form-data'>";
    echo "<table cellpadding='10'>";
    echo "<tr><td>Sender : </td>";
    echo "<td><input type='text' name='mat' value=".$row['no_matrik']." readonly></td></tr>";
} 
 $conn->close();
?>
<tr>	<td>Title : </td>
<td><input type="text" name="title" required/></td>	
</tr>
<tr>	<td>Date : </td> 	
<td> <input type = "date" name = "date" required/></td>
</tr> 
<tr><td>Content :</td>
<td><textarea name = "content" rows=15 cols=150></textarea></td>
</tr>
<tr><td>Image :</td>
<td>  <input type="file" class="img" name="file"></td>
</tr>
<br />
<tr>
<td colspan="2"><input type="submit" name="submit" value= "Create Post"/> <input type="reset" value="Clear Post"/> <a href="fke.php"><input type="button" value="Cancel"/></a></td>
</tr>
	</table>
	</form>
</center>
</body>
</html>