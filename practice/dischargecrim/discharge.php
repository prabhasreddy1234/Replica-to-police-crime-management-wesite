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








$sql = "DELETE FROM criminal WHERE criminalid=?";

$stmt= $con->prepare($sql);


$v=$_POST['crimid'];

$stmt->bind_param("i",$v);


$stmt->execute();
$con->close();
?>


<html>
<head>
<link rel="stylesheet" href="\practice\button.css">

</head>    
<center>
<h2 style="color:white;"><?php echo "successfully updated";?></h2>
<button><a href="dischargeform.php">go back</a></button>
<button><a href="\practice\welcome.php ">go to home</a></button></center>
</html>


