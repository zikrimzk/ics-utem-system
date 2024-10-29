<link rel="stylesheet" href="css/post.css">
<?php
session_start();

include ('headindex.php');
include('database/connect.php');
$id=$_REQUEST['id'];
$sql =" SELECT * FROM user WHERE id= '".$id."'";

$result = $conn->query($sql);

if($result->num_rows>0)
{
    while($row = $result -> fetch_assoc()){
echo "<center><h3>EDIT POST </h3>";
echo "<form method='post' action='updateUserE.php'>";
echo "<table cellpadding='10'>";
echo "<tr>	<td>ID : </td><td><input type='text' name='u_id' value='".$row['id']."'readonly/></td></tr>";	
echo "<tr>	<td>FULL NAME : </td><td><input type='text' name='u_name' value='".$row['name']."'required/></td></tr>";	
echo "<tr>	<td>MATRIC/STAFF NUMBER : </td> <td> <input type = 'text' name = 'u_matric' value='".$row['no_matrik']."'onkeyup='this.value = this.value.toUpperCase();' required/></td></tr> ";
echo "<tr>	<td>IC NUMBER : </td> <td> <input type = 'text' name = 'u_ic' value='".$row['no_ic']."' required/></td></tr> ";
echo "<tr>	<td>EMAIL : </td> <td> <input type = 'email' name = 'u_email' value='".$row['email']."' required/></td></tr> ";
echo "<tr>	<td>PHONE : </td> <td> <input type = 'text' name = 'u_phone' value='".$row['phone']."' required/></td></tr> ";
if($row['kategori']=="STUDENT"){
    echo "<tr>	<td>CATEGORY : </td> <td><select value='category' class='selectbtn1'  class='kategori' name='u_kategori'> 
    <option value='".$row['kategori']."'>".$row['kategori']."</option>
    <option value='STAFF'> STAFF</option>
    <option value='ADMIN'> ADMIN</option>
    </select></td>
    </tr>";
    
    }else{
        echo "<tr>	<td>CATEGORY : </td> <td><select value='category' class='selectbtn1'  class='kategori' name='u_kategori'> 
        <option value='".$row['kategori']."'>".$row['kategori']."</option>
        <option value='STUDENT'>STUDENT</option>
        <option value='ADMIN'> ADMIN</option>
        </select></td>
        </tr>";
    
    }

echo "<br />";
echo "<tr><td colspan='2'><input type='submit' name='submit' value= 'Update'/> <input type='reset' value='Clear '/> <a href='alluser.php'><input type='button' value='Cancel'/></a></td></tr>";
echo "</table>";
echo "</form>";
echo "</center>";
}
}
?>