<?php
session_start();
unset($_SESSION["name"]);
// header("Location:loginform.php");
?>
<html>
<head>
    <link rel="stylesheet" href="button.css">
    </head>
    <body>
    <center>
    <h2 style="color:white;margin-top:100px;">logged out successfully <a href="loginform.php">click here to login</a></h2></center> 
    </body>
</html>