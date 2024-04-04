<?php?>

<html>
    <head>
    <link rel="stylesheet" href="\practice\button.css">
    </head><center>
    <form action="charge.php" method="post">
    <h2 style="color:white;">ENTER THE CHARGE SHEET DETAILS</h2>
        <input type="text" name="sname" placeholder="enter name...">
       
        <br>
        <br> 
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <textarea name="address" id="" cols="30" rows="10" placeholder="enter the address" require></textarea><br><br>

        
        <input type="text" name="allegatedfor" placeholder="allegated for..." require><br><br>

        <input  type="text" name="status" placeholder="status of the complaint..." require>
        <br><br>
        <input type="submit" value="submit">
        <button><a href="\practice\welcome.php">go back</a></button>
    </form></center>
    
    
</html>