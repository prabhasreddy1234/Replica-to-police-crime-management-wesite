<?php?>
<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");

	
    exit;
}
?>
<html>
    <head>
    <link rel="stylesheet" href="\practice\button.css">
    </head><center>
    <form action="report.php" method="post" enctype="multipart/form-data">
    <h2 style="color:white;">ENTER THE COMPLAINT DETAILS</h2>
        <input type="text" name="chargedfor" placeholder="charged for..." require><br><br>
        <input type="text" name="status" placeholder="status of victim...">
        <br>
        <br> 
        <input type="text" name="sname" placeholder="suspect name..." ><br><br>
        
        <input type="text" name="vphone" placeholder="enter your phone number..." require><br><br>
        <!-- <input type="text" name="pla" placeholder="plaintiff" value=style="border:solid white;"><br><br> -->
        <input type="file" name="image" placeholder="enter proof if any in png format" style="border:solid white;">
        <br><br>
        <input type="submit" value="submit">
        <button><a href="home.php">go back</a></button>

        
    </form></center>
    
    
</html>