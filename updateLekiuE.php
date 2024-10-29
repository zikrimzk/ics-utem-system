<?php
session_start();

include ('headindex.php');
include('database/connect.php');
$ui=$_POST['u_id'];
$ut=$_POST['u_title'];
$ud=$_POST['u_date'];
$uc=$_POST['u_content'];
$targetdir ="upload/";
$filename= basename($_FILES["u_file"]["name"]);
$targetPath = $targetdir . $filename;
$fileType=pathinfo($targetPath, PATHINFO_EXTENSION);
if(isset($_POST["submit"])&& !empty($_FILES["u_file"]["name"])){
    $allowType=array('jpg','png','jpeg','gif','pdf');
   
        if(in_array($fileType,$allowType)){
            if(move_uploaded_file($_FILES["u_file"]["tmp_name"], $targetPath))
            {
                $sql= "UPDATE infolekiu SET title ='".$ut."' , date='".$ud."', content='".$uc."', image='".$filename."' WHERE infoNum= '".$ui."' "
                 or die ("Error Post");
                
                 if( $conn->query($sql) === TRUE){
                     echo " <meta http-equiv=\"refresh\" content=\"0; URL=lekiu.php\">";
                 } else{
                     echo " Error : " . $sql . " <br>" . $conn->error;
                 }

            }
        }
    
   
}else{
    $sql= "UPDATE infolekiu SET title ='".$ut."' , date='".$ud."', content='".$uc."', image='".$filename."' WHERE infoNum= '".$ui."' "
    or die ("Error Post");
   
    if( $conn->query($sql) === TRUE){
        echo " <meta http-equiv=\"refresh\" content=\"0; URL=lekiu.php\">";
    } else{
        echo " Error : " . $sql . " <br>" . $conn->error;
    }
}




$conn->close();

?>