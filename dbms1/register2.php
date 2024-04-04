<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="nav.css">

    <style>
          body{
            background-image: url(https://img.freepik.com/premium-vector/cyber-security-concept-shield-with-keyhole-icon-digital-data-background-illustrates-cyber-data-security-information-privacy-idea-blue-abstract-hi-speed-internet-technology_43778-624.jpg?w=1380);
            
        }    
         .cont1{
            border: solid;
            width: 35%;
            height: 40% ;
            background-color: rgba(0, 0,0, 0.7);
            color:white;
            border-radius: 10px;
            transition: transform .2s;
        }
        .cont1:hover{
            transform: scale(1.1);
        }
        .but{
            border-radius: 5px;
            background-color: beige;
            
        }
        .but:hover{
            background-color: bisque;
        }
    </style>
</head>
<body>
 
    <!-- nav bar -->
    <ul class="nav">
        <li class="navele"><a  href="home.html">Home</a></li>
        <li class="navele"><a href="#news">News</a></li>
        <li class="navele"><a href="#contact">Report</a></li>
        <li class="navele" ><a href="login.html">login</a></li>
        <li class="navele" style="width: 70%;color: red;"><center><marquee behavior="" direction="left" width="90%">Cyber crime department</marquee></center></li>
       
      </ul>


      
      <br>
      <br><br><br>
      
   <center>
    <h2 style="color:white;"><img src="https://www.pngkey.com/png/full/306-3064446_developer-developer-png.png" style="width: 35px;" alt=""> Register here if you do not have an account yet</h2>

      <div  class="cont1" >
          <h3>REGISTRATION PAGE</h3>
          <center>
          <form name="login" action="register.php" method="post" style="margin-top:30px ;">
          <!-- <label for="uid">User ID: &nbsp;&nbsp;&nbsp;&nbsp;</label>
          <input type="text" name="uid">
          <br><br> -->

          
            <label for="username">User Name:</label>
            <input type="text" name="username" value="">
            <br><br>
<!-- 
            <label for="phone">Phone No:</label>
            <input type="text" name="phone">
            <br><br> -->

            <!-- <label for="add" > &nbsp;Address:</label>
            <textarea name="add" id="add" cols="30" rows="10" placeholder="enter your address"></textarea>
            <br><br>
            
            <label for="dob">DOB:</label>
            <input type="date" name="dob" id=""><br><br>
             -->
          
          <label for="password">Password:</label>
          <input type="password" name="password" id="password" value=""><br>
          <br>

          <label for="email">email:</label>
          <input type="email" id="email" name="email" value=""><br>
          <br>
          
          <button class="but">Register</button>

          <button class="but"><a href="login.html" style="text-decoration: none;">Go Back</a></button>
  
          </form></center>
      </div></center>



</body>

<script>  
	$(window).on('load', function () {  
	$(".loader-wrapper").delay(1000).fadeOut("slow"); });  
</script> 
</html>