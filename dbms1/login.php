<?php
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="signup.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
   </head>
   <style>

</style>
<body style="background-color:#000080;">


  





  <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">

      
      </div>
      <div class="back">

        
      </div>
    </div>
    <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title">Login</div>

<!-- login         -->

          <form action="login.php" method="post">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>



                <input type="email" name="username" id="username" placeholder="Enter your email" required>



              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>


                <input type="password" placeholder="Enter your password" id="password" name="password" required>
              
              </div>
              <div class="text"><a href="#">Forgot password?</a></div>
              <div class="button input-box">
                <input type="submit" value="Submit">
              </div>
            </br>
              <button class="social-signin google">Log in with Google+</button>
              <div class="text sign-up-text">Don't have an account? <label for="flip">Sigup now</label></div>
            </div>
        </form>
      </div>
        <div class="signup-form">
          <div class="title">Signup</div>
<!-- registration   -->

        <form action="register.php"  method="post">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user"></i>


                <input type="text" name="username" id="username" placeholder="Enter your name" required>


              </div>
              <div class="input-box">
                <i class="fas fa-envelope"></i>


                <input type="email" name="email" id="email" placeholder="Enter your email" required>
              
              
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>


                <input type="password" name="password" id="password" placeholder="Enter your password" required>
              
              
              </div>
              <div class="button input-box">
                <input type="submit" value="submit">
              </div>
              <div class="text sign-up-text">Already have an account? <label for="flip">Login now</label></div>
            </div>
            
      </form>

    </div>

    
    </div>

    </div>
    
  </div>

  
</body>
</html>