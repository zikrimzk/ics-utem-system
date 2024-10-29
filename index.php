<title>ICS LOG IN </title>
<?php

session_start();
if( isset($_SESSION['no_matrik']) )
{
    $_SESSION = array();
    session_destroy();
}

?>
<body >
<link rel="stylesheet" href="css/index1.css">
<div class="login-box">
  <center><img src="image/icslogo.png" width=40%></center>
<br>
  <h2>Login ICS</h2>
    <form action="login.php" method="POST">
    <div class="user-box">
      <input type="text" name="no_matrik" onkeyup="this.value = this.value.toUpperCase();"required>
      <label>Matric / Staff Number</label>
    </div>
    <div class="user-box">
      <input type="password" name="password"   pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required="">
      <label>Password</label>
    </div>
    <table align="center" cellspacing=0 cellpadding="5">
      <tr>
      <td  align="center" colspan="2"><input type="submit" name="submit" class="login" value="Log in" ></td>
        <td></td>
    
    </tr>
    <tr>
      <td ><a href="register.php"><p class="signup"> sign up </p> </a></td>
      <td> <a href="reset.php"><p class="signup">Reset Password</p> </a></td>
      
    </tr>
    </table>
  </form>
</div>


</body>