<?php?>

<html>
    <head>
    <link rel="stylesheet" href="\practice\button.css">
    </head><center>
    <form action="criminal.php" method="post">
    <h2 style="color:white;">ENTER THE CRIMINAL DETAILS</h2>
        <input type="text" name="fname" placeholder="enter first name...">
        <input type="text" name="lname" placeholder="enter last name...">
        <br>
        <br> 
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <textarea name="address" id="" cols="30" rows="10" placeholder="enter the address" require></textarea><br><br>
        <input type="text" name="chargedfor" placeholder="charged for..." require><br><br>
        
        <input type="text" name="phone" placeholder="enter phone number..." require><br><br>

        <input style="width:170px;" type="date" name="dob" require>
        <br><br>
        <input type="submit" value="submit">
        <button><a href="\practice\welcome.php">go back</a></button>
    </form></center>
    
    
</html>