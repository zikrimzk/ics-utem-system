<html>
<head>
<title>See you again</title>
</head>

<body>

<?php
session_start();
if(isset($_SESSION['no_matrik']))
{
    $_SESSION = array();
    session_destroy();
    echo"<meta http-equiv=\"refresh\" content=\"3;URL=index.php\">";
    
}
?>

</body>
</html>