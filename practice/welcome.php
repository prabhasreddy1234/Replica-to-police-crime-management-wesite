
<?php
// Initialize the session
session_start();
 

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: loginform.php");
    
    exit;
}
?>
<html>
<head>
<link rel="stylesheet" href="button.css">
</head>

<center>
<h1 style="color:white;" >Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome <img src="" alt=""></h1><br></center>
    <center><p>
        
        <a  href="logout.php" class="btn">Sign Out of Your Account</a></center>


        <br>
        <center>
        <h1 style="color:white;">CYBER POLICE</h1>
        <hr>
    <button class="button"><a href="criminal/criminalform.php" style="text-decoration:none;color:white  "> Enter the criminal details</a></button>
    <button class="button"><a href="chargesheet/chargeform.php" style="text-decoration:none;color:white;">Enter charge sheet</a></button>
    <button class="button"><a href="manages/suspectform.php" style="text-decoration:none;color:white;">ENTER SUSPECT DETAILS</a></button><br><br>
    <button class="button"><a href="general/generalform.php" style="text-decoration:none;color:white;">GENERATE  A GENERAL REPORT</a></button><br><br>
<hr>

    <button class="button"><a href="chargesheet/updatecharge.php" style="text-decoration:none;color:white;">Update Charge sheet status</a></button>
    <button class="button"><a href="complaintsee/complaintupform.php" style="text-decoration:none;color:white;">UPDATE COMPLAINTS</a></button>

    <br><br>

    <hr>
    <button class="button"><a href="complaintsee/viewcomplaints.php" style="text-decoration:none;color:white;">VIEW COMPLAINTS</a></button>
    <button class="button"><a href="viewdetails/viewcharge.php" style="text-decoration:none;color:white;">VIEW CHARGESHEETS</a></button>
    <button class="button"><a href="viewdetails/viewcriminal.php" style="text-decoration:none;color:white;">VIEW CRIMINAL</a></button>
    <button class="button"><a href="viewdetails/viewsuspect.php" style="text-decoration:none;color:white;">VIEW SUSPECTS</a></button><br><br>
    <hr>
    <button class="button"><a href="dischargecrim/dischargeform.php" style="text-decoration:none;color:white;">DISCHARGE CRIMINAL</a></button><br><br>



</center>

<!-- <script data-name="BMC-Widget" data-cfasync="false" src="https://cdnjs.buymeacoffee.com/1.0.0/widget.prod.min.js" data-id="programmingfans" data-description="feedback on the website" data-message="" data-color="#FF813F" data-position="Right" data-x_margin="18" data-y_margin="18"></script> -->

</center>

</body>
    
    </p>
</html>