<title>ICS Student Report</title>
<link rel="stylesheet" href="css/adminP1.css">

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
        <td> MATRIC NUMBER</td>
        <td> EMAIL </td>
        <td> FACULTY </td>
        <td> PROGRAMME </td>
        <td> YEAR </td>
        <td> TITLE </td>
        <td> COMPLAINT </td>
        </tr>

        <?php
      
       
       $userid= $_SESSION['no_matrik'];
       $password= $_SESSION['password'];
       
       $sql= "SELECT * FROM studentcomplaint ";
       
       $result = $conn->query($sql);
       
       if ($result->num_rows > 0) {
           // output data of each row
         
         while($row = $result->fetch_assoc()) {//panggil table 
  


            echo "<tr><td>".$row['id']. "</td>";
            echo "<td>".$row['name']. "</td>";
            echo "<td>".$row['matric']. "</td>";
            echo "<td>".$row['email']. "</td>";
            echo "<td>".$row['faculty']."</td>";
            echo "<td>".$row['prog']."</td>";
            echo "<td>".$row['year']."</td>";
            echo "<td>".$row['title']."</td>";
            echo "<td>".$row['complaint']."</td>";
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