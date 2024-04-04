<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index");

	if(!isset($v)){echo 'login first';exit;}
    exit;
}
?>

<head>
    <link rel="stylesheet" href="boxes.css">
    <link rel="stylesheet" href="nav.css">
</head>
<body style="color: white; background-image: url(https://amtrustfinancial.com/getattachment/ANA-Blog/Blog/Small-Business/March-2019/Cybersecurity-vs-Data-Privacy/GettyImages-914788014-cybersecurity-vs-data-privacy-1-min.jpg?width=600&height=319);background-repeat: no-repeat;background-size: cover;background-attachment: fixed;">
<ul class="nav">
  <li class="navele"><a  href="home.php">Home</a></li>
  <li class="navele"><a href="news.php">News</a></li>
  <li class="navele"><a href="register.php">login</a></li>
  <li class="navele" ><a href="\practice\loginform.php">cyber police login</a></li>
  <li class="navele" style="width: 50%;color: red;"><center><marquee behavior="" direction="left" width="90%">Cyber crime department</marquee></center></li>
 <li class="navele"><a href="welcome.php"><?php $v; $v=$_SESSION["username"]; echo htmlspecialchars($v); ?></li>
 <li class="img1" style="float:center;"><center><a href="welcome.php"><img style="height:40px;border-radius:20px" src="https://static.vecteezy.com/system/resources/previews/005/129/844/non_2x/profile-user-icon-isolated-on-white-background-eps10-free-vector.jpg" ></a></center></li>
</ul>
    










    <button class="but"><a href="NEWS1.php">next</a></button>
  
</body>