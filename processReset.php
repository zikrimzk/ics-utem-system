<?php
    session_start();
    include("headindex.php");
    include('database/connect.php');
    $userid=$_POST['matrik'];
    $phone=$_POST['phone'];
    $pass=$_POST['pass'];
    $pass1=$_POST['pass1'];
    $sql="SELECT * FROM user where no_matrik='$userid' and phone='$phone'";
    $result=$conn->query($sql);

    if($result->num_rows>0){
    $row = $result->fetch_assoc();
    if($pass!=$pass1)
    {
        echo"<script>";
        echo"alert('Password does not match ')";
        echo"</script>";
        echo"<meta http-equiv=\"refresh\" content=\"0;URL=reset.php\">";
    }else{
        
        $sql="UPDATE user SET password='$pass' WHERE no_matrik='$userid'";
        $result= $conn->query($sql);
           if ($conn->query($sql)===TRUE){
               echo"Password Updated";
               echo"<meta http-equiv=\"refresh\" content=\"3;URL=index.php\">";
           }else{
               echo "<p>";
               echo "<p style='text-align:center'> ERROR" .$sql. " <br>" . $conn->error;
               }
           $conn->close();
               
   
    }
}else{
    echo"<script>";
    echo"alert('Matric / Staff Number OR Phone Number invalid ')";
    echo"</script>";
    echo"<meta http-equiv=\"refresh\" content=\"0;URL=reset.php\">";
}
    

    

        
        
    
    

    
?>
    