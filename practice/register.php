<?php
$servername ="localhost";
$username = "root";
$password = '';
$dbname= "dbns";

//create connection with sql
$con = new mysqli($servername,$username,$password,$dbname);

if(($con->connect_error)){
    die("connection failed" .$con->connect_erro);

}

$stmt = $con->prepare( "INSERT INTO cyberpolice (username,email,password,executivepos,phoneno) VALUES(?,?,?,?,?)");

$var1=$_POST["username"];
$var2 = $_POST["email"];
$var3 =$_POST["password"];
$var4=$_POST["executivepos"];
$var5=$_POST["phone"];

$stmt->bind_param("sssss",$var1,$var2,$var3,$var4,$var5);


$stmt->execute();
header("location:loginform.php");
echo "connection successful";

"printing values";







$con->close();
?>

