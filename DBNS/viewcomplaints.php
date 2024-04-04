
<html>
    <head>
    <link rel="stylesheet" href="\practice\button.css">

    </head>
    <center>
<table class="table" border="solid 2px" style="color:white;border-color:white;">
<?php
$servername ="localhost";
$username = "root";
$password = '';
$dbname= "dbns";


session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");

	
    exit;
}
//create connection with sql
$con = new mysqli($servername,$username,$password,$dbname);

if(($con->connect_error)){
    die("connection failed" .$con->connect_erro);

}
$var5 = $_SESSION['username'];
$sql="SELECT * FROM complaint WHERE plaintiff='".$var5."'";

$c=0;
//  $stmt = $con->prepare( "SELECT * FROM complaint");
$res = mysqli_query($con,$sql);
$num=mysqli_num_rows($res);
if(mysqli_num_rows($res)>0){
    // echo "<p>All Complaints</p>";
        echo "<tr>
                <td>cid</td>
                <td>charged for</td>
                <td>status</td>
                <td>sname</td>
                <td>status of the complaint</td>
                <td>proof</td>
        </tr>";
    while($row=$res->fetch_assoc()){
        
        echo 
               "<tr  > <td>". $row['cid']."</td>
                <td>".$row['chargedfor']."</td>
                <td>".$row['status']."</td>
                <td>".$row['sname']."</td>
                <td>".$row['complaintstatus']."</td>
                <td>".$row['proof']."</td>
        </tr>";
    }
}

    else{
        $c=1;
        $v="no complaints";
            
    }
    
















$con->close();
?></center>
<center>
<h2 style="color:white;">ALL COMPLAINTS</h2>

</table><br><br><br>
<h3 style="color:white;" ><?php if($c==1){
   echo htmlspecialchars($v); }?> </h3>
<button><a href="home.php">go to home</a></button></center>
</html> 

