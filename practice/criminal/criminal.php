<?php
require("config.php");
if(($con->connect_error)){
    die("connection failed" .$con->connect_erro);

}

$stmt = $con->prepare( "INSERT INTO criminal  (fname,lname,address,phone,chargedfor,dob) VALUES(?,?,?,?,?,?)");


$var1=$_POST["fname"];
$var2 = $_POST["lname"];
$var3 =$_POST["address"];
$var4=$_POST["phone"];
$var5=$_POST["chargedfor"];
$var6=$_POST["dob"];



$stmt->bind_param("ssssss",$var1,$var2,$var3,$var4,$var5,$var6);


$stmt->execute();

$success= "successfully inserted";

?>

<html>
<head>
<link rel="stylesheet" href="\practice\button.css">

</head>    
<center>
<h2 style="color:white;"><?php echo $success;?></h2></center>
<button><a href="criminalform.php">go back</a></button>
<button><a href="\practice\welcome.php">go to home</a></button>
</html>


