<?php 
include("headindex.php");
?>

<html>
    <head>
    <link rel="stylesheet" href="css/register.css">
        <title> ICS Registration Form</title>
    </head>
    <body>
            <form method="POST" action="user.php">

            <div class="form-style-10">
        <h1>Sign Up <span>Please fill up all the information that have <font color="red">*</font></span></h1>
        <form>
            <div class="section"><span>1</span>First Name &amp; IC Number</div>
            <div class="inner-wrap">
                <label>Full Name <font color="red">*</font> <td><input type="text" name="name" class="name"/></td></label>
                <label>IC Number <font color="red">*</font> <input type="text" name="no_ic" class="no_ic"/></label>
            </div>

            <div class="section"><span>2</span>Email &amp; Phone</div>
            <div class="inner-wrap">
                <label>Email Address <input type="email" name="email" class="email"></label>
                <label>Phone Number <font color="red">*</font><input type="text" name="phone" class="phone"/></label>
            </div>
            <div class="section"><span>4</span>Matric / Staff Number &amp; Category</div>
                <div class="inner-wrap">
                <label>Matric / Staff Number <font color="red">*</font> <input type="text" name="no_matrik" class="no_matrik" onkeyup="this.value = this.value.toUpperCase();"/></label>
                <label>Category <font color="red">*</font> <select value="category" class="selectbtn1"  class="kategori" name="kategori"> 
                                <option value="STUDENT"> STUDENT</option>
                                <option value="STAFF"> STAFF</option>
                            </select></label>
            </div>

            <div class="section"><span>3</span>Passwords</div>
                <div class="inner-wrap">
                <label>Password <font color="red">*</font> <input type="password" name="password" id="password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required/></label>
                <label>Confirm Password <font color="red">*</font> <input type="password" name="password1" id="password1"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required/></label>
                <span id='message'></span>
            </div>
                
            <div class="button-section">
            <input type="submit" name="submit" id="submit" value="REGISTER" required/>
            <input type="reset" name="reset" id="reset" value="CLEAR FORM" required/>
            </div>
    </form>
</div>

</body>
</html>
<footer>
  <?php
    include("footer.html");
  ?>
</footer>
</html>