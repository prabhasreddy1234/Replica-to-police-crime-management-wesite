<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    body{
        background-image:url("https://www.nttdata.com/global/en/-/media/nttdataglobal/1_images/services/cybersecurity/cybersecurity_d.jpg?h=1680&la=en&w=2800&hash=DD3CA9787189EA30A6F0D47069AC5261C0DBF2DF");
        background-repeat:no-repeat;
        background-size:cover;
    }
    .btn{
        background-color:blue;
        color:white;
        border-radius:5px;
       

    }
    .btn:hover{
       
        transform:scale(1.1);
        transition:0.3s;
        color:white;
    }
    
    </style>
     <link rel="stylesheet" href="nav.css">
</head>
<body>
<ul class="nav">
  <li class="navele"><a  href="home.php">Home</a></li>
  <li class="navele"><a href="news.php">News</a></li>
  <li class="navele"><a href="register.php">login</a></li>
  <li class="navele" ><a href="\practice\loginform.php">cyber police login</a></li>
  <li class="navele" style="width: 50%;color: red;"><center><marquee behavior="" direction="left" width="90%">Cyber crime department</marquee></center></li>
 <li class="navele"><a href="welcome.php"><?php $v; $v=$_SESSION["username"]; echo htmlspecialchars($v); ?></li>
 <li class="img1" style="float:center;"><center><a href="welcome.php"><img style="height:40px;border-radius:20px" src="https://static.vecteezy.com/system/resources/previews/005/129/844/non_2x/profile-user-icon-isolated-on-white-background-eps10-free-vector.jpg" ></a></center></li>
</ul>


    <center>

    <h1 class="my-5" style="color:white;">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome <img src="" alt=""></h1>
    <p>
        <a href="reset-password.php" class="btn">Reset Your Password</a>
        <a href="logout.php" class="btn" style="background-color:red;">Sign Out of Your Account</a></center>
    
    </p>
</body>
</html>