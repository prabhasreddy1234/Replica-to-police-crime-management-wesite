
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
$sql="SELECT * FROM generalreport";
//  $stmt = $con->prepare( "SELECT * FROM complaint");
$res = mysqli_query($con,$sql);
$num=mysqli_num_rows($res);
if(mysqli_num_rows($res)>0){
    // echo "<p>All Complaints</p>";
        echo "<tr>
                <td>report number</td>
                <td> state or ut</td>
                <td>name</td>
                <td>male arrested</td>
                <td>female arrested</td>
                <td>charge sheeted</td>
                <td>convicted </td>
                <td>discharged</td>
        </tr>";
    while($row=$res->fetch_assoc()){
        
        echo 
               "<tr  > <td>". $row['rno']."</td>
                <td>".$row['stateorut']."</td>
                <td>".$row['name']."</td>
                <td>".$row['m_arrested']."</td>
                <td>".$row['f_arrested']."</td>
                <td>".$row['chargesheeted']."</td>
                <td>".$row['convicted']."</td>
                <td>".$row['discharged']."</td>
        </tr>";
    }
    // else{
    //     echo "there are no current complaints";     
    // }
    

}














$con->close();
?></center>
<center>
<h2 style="color:white;">GENERAL REPORT OF CYBER CRIME</h2>

</table><br><br><br>

<button><a href="home.php">go to home</a></button></center>
</html> 

