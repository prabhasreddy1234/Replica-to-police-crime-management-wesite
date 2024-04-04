<?php

$servername ="localhost";
$username = "root";
$password = '';
$dbname= "dbns";



// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");

	
    exit;
}

//create connection with sql
$con = new mysqli($servername,$username,$password,$dbname);








$stmt = $con->prepare( "INSERT INTO complaint  (chargedfor,status,sname,vphone,plaintiff,complaintstatus) VALUES(?,?,?,?,?,?)");



$var1=$_POST["chargedfor"];
$var2 = $_POST["status"];
$var3 =$_POST["sname"];
$var4=$_POST["vphone"];
$var5 = $_SESSION['username'];
$var6="not updated yet";




$stmt->bind_param("ssssss",$var1,$var2,$var3,$var4,$var5,$var6);


$stmt->execute();

$success= "successfully inserted";

?>

<html>
<head>
<link rel="stylesheet" href="\practice\button.css">

</head>    
<center>
<h2 style="color:white;"><?php echo $success;?></h2>
<button><a href="reportform.php">go back</a></button>
<button><a href="home.php ">go to home</a></button></center>
</html>


