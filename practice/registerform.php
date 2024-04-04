<?php?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="button.css">
</head>
<body><center>
  <h2 style="color:white;">REGISTER HERE</h2>
  <form class="frm" style="border:solid 2px; width:20%;margin-top:50px;" action="register.php" method="post"><br>
    <input type="text" name="username" placeholder="username" require><br><br>
    <input type="email" name="email" placeholder="email" require ><br><br>
    <input type="text" name="phone" placeholder="phone number" require ><br><br>
    <input type="text" name="executivepos" placeholder="executive position" require><br><br>
    
    <input type="password" name="password" placeholder="password"  require ><br><br>
    <input type="submit">
    <p>already have an account <a href="loginform.php" style="color:red;"> sign in</a></p></center>
  </form>  
</body>
</html>