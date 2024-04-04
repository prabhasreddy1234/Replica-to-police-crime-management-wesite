<?php?>

<html>

<head>
<link rel="stylesheet" href="button.css">
</head>
<body><center>
    <h2 style="color:white;">ENTER THE SUSPECT DETAILS</h2>
    <form action="suspect.php" method="post">
        <input type="text" name="name" placeholder="enter name...">
        <br>
        <br> 
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <textarea name="address" id="" cols="30" rows="10" placeholder="enter the address"></textarea><br><br>
        <input type="text" name="chargedfor" placeholder="charged for..."><br><br>
        
        <input type="text" name="phone" placeholder="enter phone number..."><br><br>

        <input style="width:170px;" type="date" name="dob">
        <br><br>
        <input type="submit" value="submit">
        <button><a href="\practice\welcome.php">go back</a></button>
    </form></center>
</body>
</html>