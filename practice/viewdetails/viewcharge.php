
<html>
    <head>
    <link rel="stylesheet" href="\practice\button.css">
    <style>
        
    </style>
    </head>
    <center>
<table class="table" border="solid 2px" style="color:white;border-color:white;">
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
$sql="SELECT * FROM chargesheet";
//  $stmt = $con->prepare( "SELECT * FROM complaint");
$res = mysqli_query($con,$sql);
$num=mysqli_num_rows($res);
if(mysqli_num_rows($res)>0){
    // echo "<p>All Complaints</p>";
        echo "<tr class='tab'>
                <td>charge sheet id</td>
                <td>address</td>
                <td>suspect name</td>
                <td>allegated for</td>
                <td>status</td>
                
        </tr>";
    while($row=$res->fetch_assoc()){
        
        echo 
               "<tr>
                <td>". $row['csid']."</td>
               <td>".$row['address']."</td>
                <td>".$row['sname']."</td>
                <td>".$row['allegatedfor']."</td>
                <td>".$row['status']."</td>
                
        </tr>";
    }
    // else{
    //     echo "there are no current complaints";     
    // }
    

}
$con->close();
?></center>
<center>
<h2 style="color:white;">ALL CHARGE SHEETS</h2>

</table><br><br><br>

<button><a href="\practice\welcome.php">go to home</a></button></center>
</html> 

