<link rel="stylesheet" href="css/post.css">
<?php
session_start();

include ('headindex.php');
include('database/connect.php');
$id=$_REQUEST['infoNum'];
$sql =" SELECT * FROM infotuah WHERE infoNum= '".$id."'";

$result = $conn->query($sql);

if($result->num_rows>0)
{
    while($row = $result -> fetch_assoc()){
    
echo "<center><h3>EDIT POST </h3></center>";
echo "<form method='post' action='updateTuahE.php' enctype='multipart/form-data'>";
echo "<table cellpadding='10'>";
echo "<tr>	<td>Post ID : </td><td><input type='text' name='u_id' value='".$row['infoNum']."'readonly/></td></tr>";	
echo "<tr>	<td>Title : </td><td><input type='text' name='u_title' value='".$row['title']."'required/></td></tr>";	
echo "<tr>	<td>Date : </td> <td> <input type = 'date' name = 'u_date' value='".$row['date']."' required/></td></tr> ";
echo "<tr><td>Content :</td> <td><textarea name = 'u_content' rows=15 cols=150 >".$row['content']."</textarea></td></tr>";
echo "<tr>	<td>Image : </td> <td> <input type = 'file' name = 'u_file' ></td></tr> ";
echo "<br />";
echo "<tr><td colspan='2'><input type='submit' name='submit' value= 'Edit Post'/> <input type='reset' value='Clear Post'/> <a href='tuah.php'><input type='button' value='Cancel'/></a></td></tr>";
echo "</table>";
echo "</form>";
echo "</center>";
}
}
?>