<?php?>

<html>
    <head>
    <link rel="stylesheet" href="\practice\button.css">
    </head><center>
    <form action="general.php" method="post">
    <h2 style="color:white;">ENTER THE CRIMINAL DETAILS</h2>
        <input type="text" name="stateorut" placeholder="enter state or union territory..." require><br><br>
        <input type="text" name="name" placeholder="enter name of state or union territory" require><br><br>
        <input type="text" name="m_arrested" placeholder="enter number of male arrested..." require>
        <br>
        <br> 
        <input type="text" name="f_arrested" placeholder="enter number of females arrested..." require><br><br>
       
        <input type="text" name="chargesheeted" placeholder="number of people chargesheeted..." require><br><br>
        
        <input type="text" name="convicted" placeholder="number of people convicted..." require><br><br>

        <input style="width:170px;" type="text" name="discharged" placeholder="number of people discharged" require>
        <br><br>
        <input type="submit" value="submit">
        <button><a href="\practice\welcome.php">go back</a></button>
    </form></center>
    
    
</html>