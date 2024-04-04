<?php
require("config.php");
if(($con->connect_error)){
    die("connection failed" .$con->connect_erro);

}

$stmt = $con->prepare( "INSERT INTO suspect  (name,address,chargedfor,phone,dob) VALUES(?,?,?,?,?)");


$var1=$_POST["name"];
$var2 = $_POST["address"];
$var3 =$_POST["chargedfor"];
$var4=$_POST["phone"];
$var5=$_POST["dob"];



$stmt->bind_param("sssss",$var1,$var2,$var3,$var4,$var5);


$stmt->execute();

$success= "successfully inserted";

?>

<html>
<head>
<link rel="stylesheet" href="button.css">

</head>    
<center>
<h2 style="color:white;"><?php echo $success;?></h2>
<button><a href="suspectform.php">go back</a></button>
<button><a href="practice/welcome.php">go to home</a></button></center>
</html>


