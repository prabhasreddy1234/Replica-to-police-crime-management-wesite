<?php

require("config.php");
session_start();

if(isset($_POST['username'])){
    $uname = $_POST['username'];
    $password = $_POST['password'];

    $sql="SELECT * FROM cyberpolice WHERE username='".$uname."' AND password='".$password."' limit 1 ";
    
    $res=mysqli_query($con,$sql);
    $sql2="SELECT * FROM cyberpolice WHERE email='".$uname."' AND password='".$password."' limit 1 ";
    
    $res2=mysqli_query($con,$sql);

    if(mysqli_num_rows($res)==1){
        echo " Welcome    - ".$_POST['username']." sir";
        $_SESSION["loggedin"] = true;
        $_SESSION["username"] = $uname;
        header("location:welcome.php");
    }
    else{
        echo "you have entered wrong credential";
        header("location:loginform.php");
        $sql->close();
        $res->close();
        $con->close();
        
    }

    
}


?>


