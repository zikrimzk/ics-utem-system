<link rel="stylesheet" href="css/adminP1.css">
<title>ICS User Data</title>
<?php
session_start();
include ('database/connect.php');
include("headAdmin.php");
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
?>
<table border="1" cellpadding="5" cellspacing="5" align="center" class="data1" >
        <tr style=" font-weight:bolder;">
        <td> ID </td>
        <td> FULL NAME </td>
        <td> USER ID</td>
        <td> IC NUMBER </td>
        <td> EMAIL </td>
        <td> PHONE </td>
        <td> CATEGORY </td>
        <td> UPDATE </td>
        </tr>

        <?php
      
       
       $userid= $_SESSION['no_matrik'];
       $password= $_SESSION['password'];
       
       $sql= "SELECT * FROM user ";
       
       $result = $conn->query($sql);
       
       if ($result->num_rows > 0) {
           // output data of each row
         
         while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row['id']. "</td>";
            echo "<td>".$row['name']. "</td>";
            echo "<td>".$row['no_matrik']. "</td>";
            echo "<td>".$row['no_ic']. "</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td>".$row['phone']."</td>";
            echo "<td>".$row['kategori']."</td>";
            if($row['kategori']!="ADMIN")
            {
            ?>
            <td align="right"><a href="updateUser.php?id=<?php echo $row["id"];?>" class="update">Edit</a> <a href="deleteUser.php?id=<?php echo $row["id"];?>"  class="update">Delete</a></td>
            <?php
            }
            echo "</tr>";
        }
      }
$conn->close();
echo"</table>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

?>
 <footer>
  <?php
    include("footerAdmin.php");
  ?>
</footer>