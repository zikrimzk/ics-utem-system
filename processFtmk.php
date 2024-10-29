<?php
session_start();
include("database/connect.php");
$matrik=$_POST['mat'];
$title=$_POST['title'];
$date=$_POST['date'];
$content=$_POST['content'];

    $targetdir ="upload/";
    $filename= basename($_FILES["file"]["name"]);
    $targetPath = $targetdir . $filename;
    $fileType=pathinfo($targetPath, PATHINFO_EXTENSION);

if(isset($_POST["submit"])&& !empty($_FILES["file"]["name"])){
    $allowType=array('jpg','png','jpeg','gif','pdf');
        if(in_array($fileType,$allowType)){
            if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetPath))
            {
                $sql = "INSERT INTO infoftmk (matrik, title, date, content, image)
                VALUES ('$matrik', '$title', '$date', '$content','$filename')"
                 or die ("Error Post");
                
                 if( $conn->query($sql) === TRUE){
                     echo " <meta http-equiv=\"refresh\" content=\"0; URL=ftmk.php\">";
                 } else{
                     echo " Error : " . $sql . " <br>" . $conn->error;
                 }

            }
        
        }
    
   
}else{
    $sql = "INSERT INTO infoftmk (matrik, title, date, content, image)
    VALUES ('$matrik', '$title', '$date', '$content','$filename')"
    or die ("Error Post");
                
     if( $conn->query($sql) === TRUE){
         echo " <meta http-equiv=\"refresh\" content=\"0; URL=ftmk.php\">";
        } else{
            echo " Error : " . $sql . " <br>" . $conn->error;
        }
}


 $conn ->close();
 ?>