
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

//create connection with sql
$con = new mysqli($servername,$username,$password,$dbname);

if(($con->connect_error)){
    die("connection failed" .$con->connect_erro);

}
$sql="SELECT * FROM suspect";
//  $stmt = $con->prepare( "SELECT * FROM complaint");
$res = mysqli_query($con,$sql);
$num=mysqli_num_rows($res);
if(mysqli_num_rows($res)>0){
    // echo "<p>All Complaints</p>";
        echo "<tr>
                <td>Sucpect id</td>
                <td>name</td>
                <td>address</td>
                <td>charged for </td>
                <td>phone number</td>
                <td>date of birth</td>
        </tr>";
    while($row=$res->fetch_assoc()){
        
        echo 
               "<tr  > <td>". $row['sid']."</td>
               <td>".$row['name']."</td>
                <td>".$row['address']."</td>
                <td>".$row['chargedfor']."</td>
                <td>".$row['phone']."</td>
                <td>".$row['dob']."</td>
        </tr>";
    }
    // else{
    //     echo "there are no current complaints";     
    // }
    

}
$con->close();
?></center>
<center>
<h2 style="color:white;">ALL SUSPECTS</h2>

</table><br><br><br>

<button><a href="\practice\welcome.php">go to home</a></button></center>
</html> 

