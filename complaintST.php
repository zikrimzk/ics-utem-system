<title>ICS Staff Complaint</title>
<?php
include("head.php");
session_start();
include ('database/connect.php');
?>
<br>
<br>
<br>
<br>

<link rel="stylesheet" href="css/complaint.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<html>
  <title> STAFF COMPLAINT </title>
  
  <body>
  <h1 class="text1_3">COMPLAINT SYSTEM</h1>
    <h4 class="text2">User <bold>must </bold>fill in all textfield that have <font color=red>*</font></h4> 
  
  
    <section class="sec1">
        <table border="0" cellspacing="10" cellpadding="10" class="table"> 
          <form method = "post" action = "processST.php">   
          <?php
                $userid= $_SESSION['no_matrik'];
                $password= $_SESSION['password'];

                $sql= "SELECT * FROM user where no_matrik ='$userid' and password= '$password'";

                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    echo "<tr><td>FULL NAME <input type='text' value='".$row['name']."'  class='nama' name='nama' readonly></td></tr>";
                    echo "<tr><td>STAFF ID  <input type='text' value='".$row['no_matrik']."'  class='matrik' name='matrik' readonly> </td> </tr>";
                    echo "<tr><td>PHONE  <input type='email' value='".$row['phone']."'  class='phone' name='phone' readonly></td> </tr>";
                } 
                $conn->close();
                ?>

            <tr>
                <td colspan="2">TITLE <font color=red>*</font><p><textarea class="title" name="title" required></textarea></p></td>
               
            </tr>
            <tr>
                <td colspan="2">COMPLAINT <font color=red>*</font><p><textarea rows="10" cols="50" placeholder="YOUR COMPLAINT" class="complaint" name="complaint" required></textarea></p></td>
               
            </tr>
            <tr>
              <td colspan="2">  <center><input type="submit" name="submit" value="SUBMIT FORM"> <input type="reset" value="CLEAR FORM"></center></td>
               
            </tr>
            </form> 
        </table>
    </section>
  </body>
  <footer>
  <?php
    include("footer.html");
  ?>
</footer>
</html>