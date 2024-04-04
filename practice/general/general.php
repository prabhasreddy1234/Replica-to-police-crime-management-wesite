<?php
require("config.php");
if(($con->connect_error)){
    die("connection failed" .$con->connect_erro);

}

    $stmt = $con->prepare( "INSERT INTO generalreport (stateorut,m_arrested,f_arrested,chargesheeted,convicted,discharged,name) VALUES(?,?,?,?,?,?,?)");


    $var1=$_POST["stateorut"];
    $var2 = $_POST["m_arrested"];
    $var3 =$_POST["f_arrested"];
    $var4=$_POST["chargesheeted"];
    $var5=$_POST["convicted"];
    $var6=$_POST["discharged"];
    $var7=$_POST["name"];

    $stmt->bind_param("siiiiis",$var1,$var2,$var3,$var4,$var5,$var6,$var7);


    $stmt->execute();


    $success= "successfully inserted";

?>

<html>
<head>
<link rel="stylesheet" href="\practice\button.css">

</head>    
<center>
<h2 style="color:white;"><?php echo $success;?></h2>
<button><a href="generalform.php">go back</a></button>
<button><a href="\practice\welcome.php">go to home</a></button></center>
</html>


