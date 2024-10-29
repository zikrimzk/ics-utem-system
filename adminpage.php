<link rel="stylesheet" href="css/adminP1.css">
<html>
  <title>ADMIN ICS HOMEPAGE</title>
  
  <body>
  <div>
    <center><a href="logout.php" class="logout"><p  class="atas"><img src="image/but_logout.png" width="25px"></p></a></center>
    </div>
    <br/>
  <img src="image/bannerO.png" class="banner">
  <h1 class="greet">WELCOME TO <font color=red> ADMIN </font>PAGE</h1>
<section class="sec_2">
   <center>
    <table border="0" cellpadding="10" cellspacing="50">
      <tr>
        <th colspan="5"> <h2 class="greet">ADMIN ACCESS</h2></th>
      </tr>
      <tr>
      <td align="center"><a href="alluser.php"><img src="image/but_profile.png" class="button"></td>
        <td align="center"><a href="csd.php"><img src="image/but_student.png" class="button"></td>
        <td align="center"><a href="cst.php"><img src="image/but_staff.png" class="button"></td>
      </tr>
      <tr>
      <td align="center" class="text2">User</td>
        <td align="center" class="text2">Student Complaint</td>
        <td align="center" class="text2">Staff Complaint</td>
      </tr>

    </table>
  </center>
    </section>
    
  </body>
  <footer>
  <?php
    include("footerAdmin.php");
  ?>
</footer>
</html>