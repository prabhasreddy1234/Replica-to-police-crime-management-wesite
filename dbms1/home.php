<?php
?>

<!DOCTYPE html>
<html>
<head>
<style>
.nav {
 
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

.navele {
  float: left;
  border-right:1px solid #bbb;
}

.navele:last-child {
  border-left:1px solid #bbb;
}
.h{
	float:right;
	width: 790px;
	color: red;
	margin-top: 9px;
	font-size: 18px;
	
}

.navele a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
.a{
	 list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}


li a:hover:not(.active) {
  background-color:#4edb35;
}

body{
	background-image: url(https://images.unsplash.com/photo-1624969862644-791f3dc98927?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80);
    background-attachment: fixed;
}
.box1{
	width: 100%;
	height:300px;
	border: 2px solid white;
	background-color:rgba(136,136,136,0.5);
	color:white; 	
}
.but1{
	background-color: orange;
	border-radius: 10px;
}
.but1:hover{
	background-color: rgb(225, 170, 67);
}
.box2{
    background-image: url("image1.png");
	background-size:cover;
	height: 400	px;


}
.box3{
	height: 450px;
	width: 400px;
	border: 2px solid white;
	background-color:rgba(136,136,136,0.5);
	color:white;
}
.box3:hover{
	scale: 1.01;
	transition: 1s;
}
.but2{
	background-color: rgb(0,0,0);
	color: white;
	border-radius: 10px;
}
.but2:hover{
	background-color: #4edb35;
}


</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
    <center>
	<div class="loader-wrapper">
        <img  src="https://loading.io/asset/622462" style="height: 100%;">
        </div></center>



<ul class="nav">
  <li class="navele"><a  href="home.php">Home</a></li>
  <li class="navele"><a href="#news">News</a></li>
  <li class="navele"><a href="register1.php">login</a></li>
  <li class="navele" ><a href="login.php">complaint</a></li>
  <li class="navele" style="width: 70%;color: red;"><center><marquee behavior="" direction="left" width="90%">Cyber crime department</marquee></center></li>
 
</ul>

<div class="box2">
	<p>
	</p>
	<!-- <img style="scale: 0.5 ;" src="image1.png" alt=""> -->
</div>

<br>
<center>
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" style="height:300px;width:300px">
	<div class="carousel-inner">
	  <div class="carousel-item active">
		<img class="d-block w-100"  src="https://www.cybercrimehelpline.com/wp-content/uploads/2020/05/CCH_final.png" alt="First slide">
	  </div>
	  <div class="carousel-item">
		<img class="d-block w-100" style="height:50;width: 150;" src="https://v4web.com/riteshbhatia-article-images/toi-02-01-2021.jpg" alt="Second slide">
	  </div>
	  <div class="carousel-item">
		<img class="d-block w-100" src="https://pbs.twimg.com/media/C_C08VGU0AArp0n.jpg" alt="Third slide">
	  </div>
	</div>
  </div>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://www.lucasr.com.br/teste/_/js/prefixfree.min.js'></script><script  src="./script.js"></script>
<br>

<div class="box1"> 
	<h3 style="text-align: center; color:black;">Filing a Complaint on National Cyber Crime Reporting Portal</h3>
	<p>This portal is an initiative of Government of India to facilitate victims/complainants to report cyber crime complaints online. This portal caters to complaints pertaining to cyber crimes only with special focus on cyber crimes against women and children. Complaints reported on this portal are dealt by law enforcement agencies/ police based on the information available in the complaints. It is imperative to provide correct and accurate details while filing complaint for prompt action.

		<br> <br>
		Please contact local police in case of an emergency or for reporting crimes other than cyber crimes. National police helpline number is 100. National women helpline number is 181.</p>
		<br>
		<center><a href="https://cybercrime.gov.in/Webform/CrimeCatDes.aspx" target="_blank"><button class="but1">learn about cyber crime</button></a>
                <a href="visualize.csv"download target="_blank"><button class="but1">  General report</button></a>
		</center>
</div>

<center>>
<div class="box3">
	<h3><u>REPORT CRIME</u></h3>
	<p>A Cybercrime is any criminal activity that involves a computer, networked device or a network. If a citizen illegally enters the computer cyberspace and commits a crime in space, any country may exercise jurisdiction over the perpetrator according to the laws of its own country.
        <br><br>
		After a complaint is filed, the investigation cells start with the search and seizure of digital evidence, which are the intangible data of the virtual world. The aim of this project is to design and develop a database for the cyber crime bureau to maintain records of crimes and criminals across the country.
		</p><br>
	<button class="but2">report crime</button>

</div></center>

<br><center>
<H3 style="color: white;"><img style="width:70px ;" src="https://www.pngkey.com/png/full/306-3064446_developer-developer-png.png" alt="">DEVELOPERS</H3></center>
<hr style="background-color: white;">
<div style="display:flex ;justify-content:space-between;">
<div  class="card text-white bg-primary mb-3" style="max-width:12rem; "  >
	<div class="card-header">RISHITH PRANAV</div>
	<div class="card-body">
	  <img style="width:150px ;height:150px" src="me.png" alt="">
	  <h5 class="card-title">CSE-C</h5>
	  <p class="card-text">CB.EN.U4CSE21232</p>
	</div>
  </div>
  <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
	<div class="card-header">JASWANTH P</div>
	<div class="card-body">
		<img style="width:150px ;height:150px" src="jas.jfif" alt="">
	  <h5 class="card-title">CSE-C</h5>
	  <p class="card-text">CB.EN.U4CSE21227</p>
	</div>
  </div>
  <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
	<div class="card-header">PRABHAS REDDY</div>
	<div class="card-body">
		<img style="width:150px ;height:150px" src="PRABHAS.png" alt="">
	  <h5 class="card-title">CSE-C</h5>
	  <p class="card-text">CB.EN.U4CSE21230</p>
	</div>
  </div>
  <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
	<div class="card-header">LOKESH CHANDRA</div>
	<div class="card-body">
		<img style="width:150px ;height:150px" src="LOKESH.png" alt="">
	  <h5 class="card-title">CSE-C</h5>
	  <p class="card-text">CB.EN.U4CSE21211</p>
	</div>
  </div>
</div>



</body>


<script>  
	$(window).on('load', function () {  
	$(".loader-wrapper").delay(1000).fadeOut("slow"); 
	});  
</script> 
</html>