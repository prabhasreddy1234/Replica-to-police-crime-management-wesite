<?php
require("config.php");
if(($con->connect_error)){
    die("connection failed" .$con->connect_erro);

}

$stmt = $con->prepare( "INSERT INTO chargesheet  (address,sname,allegatedfor,status) VALUES(?,?,?,?)");


$var1=$_POST["address"];
$var2 = $_POST["sname"];
$var3 =$_POST["allegatedfor"];
$var4=$_POST["status"];




$stmt->bind_param("ssss",$var1,$var2,$var3,$var4);


$stmt->execute();

$success= "successfully inserted";

?>

<html>
<head>
<link rel="stylesheet" href="\practice\button.css">

</head>    
<center>
<h2 style="color:white;"><?php echo $success;?></h2>
<button><a href="chargeform.php">go back</a></button>
<button><a href="\practice\welcome.php ">go to home</a></button></center>
</html>


