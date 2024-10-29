<title>Reset Password</title>
<link rel="stylesheet" href="css/post.css">
<?php
    include("headindex.php");
?>
    <form action='processReset.php' method='post'>
    <table border='0' align="center" cellpadding='10' cellspacing='10' class="reset">
    <tr>
        <th colspan="2"> <h2>Reset Password</h2> </th> 
    </tr>
    <tr>
        <td> Matric / Staff Number :</td> 
        <td> <input type='text' name='matrik' class='matrik' onkeyup="this.value = this.value.toUpperCase();" required></td>
    </tr>
    <tr>
        <td> Phone Number :</td> 
        <td> <input type='text' name='phone' class='phone' required></td>
    </tr>
    <tr>
        <td> New Password :</td> 
        <td> <input type='password' name='pass' class='pass' required></td>
    </tr>
    <tr>
        <td> Confirm Password :</td> 
        <td> <input type='password' name='pass1' class='pass1' required></td>
    </tr>
    <tr>
        <td colspan='2' align='center'> <input type='submit' name='submit' value='RESET' ></td>
    </tr>

    </table>
    </form>
<br><br><br>
<footer>
  <?php
    include("footer.html");
  ?>
</footer>
