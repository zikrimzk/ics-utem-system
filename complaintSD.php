<title>ICS Student Complaint</title>
<?php
include("headS.php");
session_start();
include ('database/connect.php');
?>
<br>
<br>
<br>
<br>

<link rel="stylesheet" href="css/complaint.css">
<html>
  <title> STUDENT COMPLAINT </title>
  
  <body>
  <h1 class="text1_3">COMPLAINT SYSTEM</h1>
    <h4 class="text2">User <bold>must </bold>fill in all textfield that have <font color=red>*</font></h4> 
  
  
    <section class="sec1">
        <table border="0" cellspacing="10" cellpadding="10" class="table"> 
            <form method = "post" action = "processSD.php">  
            <?php
                $userid= $_SESSION['no_matrik'];
                $password= $_SESSION['password'];

                $sql= "SELECT * FROM user where no_matrik ='$userid' and password= '$password'";

                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    
                    $row = $result->fetch_assoc();
                    echo "<tr><td>FULL NAME <input type='text' value='".$row['name']."'  class='nama' name='nama' readonly></td></tr>";
                    echo "<tr><td>MATRIC NUMBER  <input type='text' value='".$row['no_matrik']."'  class='matrik' name='matrik' readonly> </td> </tr>";
                    echo "<tr><td>EMAIL  <input type='email' value='".$row['email']."'  class='email' name='email' readonly></td> </tr>";
                } 
                $conn->close();
                ?>
                    <tr>
                        <td>FACULTY <font color=red>*</font> <br/><br/><select value="faculty" class="selectbtn"  class="fakulti" name="fakulti">
                            <option value="">select</option>
                            <option value="FTMK">FTMK</option>
                            <option value="FKEKK">FKEKK</option>
                            <option value="FKM">FKM</option>
                            <option value="FKE">FKE</option>
                            <option value="FKP">FKP</option></select></td>
                     
                    </tr>
                    <tr>
                        <td>PROGRAMME <font color=red>*</font> <input type="text" placeholder="Eg. DIT"  class="program" name="program" required></td>
                    </tr>
                    <tr>
                        <td>YEAR <font color=red>*</font> <br/><br/><select value="year" class="selectbtn"  class="thun" name="thun">
                            <option value="">select</option>
                            <option value="1"> TAHUN 1</option>
                            <option value="2"> TAHUN 2</option>
                            <option value="3"> TAHUN 3</option>
                            <option value="4">TAHUN 4</option>
                            <option value="5"> TAHUN 5</option>
                        </select></td>
                       
                    </tr>
                    <tr>
                        <td colspan="2">TITLE  <font color=red>*</font> <p><textarea class="title" name="title" required></textarea></p></td>
                       
                    </tr>
                    <tr>
                        <td colspan="2">COMPLAINT <font color=red>*</font> <p><textarea rows="10" cols="50" placeholder="YOUR COMPLAINT"  class="complaint" name="complaint" required></textarea></p></td>
                       
                    </tr>
                    <tr>
                        <td><center><input type="submit" name="submit" value="SUBMIT FORM"> <input type="reset" value="CLEAR FORM"></center></td>
                       
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