<?php
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS='';
$DATABASE_NAME= 'main cyber crime records';
$v= $_POST['username'];
$a= $_POST['password'];
$c=$_POST['email'];


$con = mysqli_connect($DATABASE_HOST,$DATABASE_USER,$DATABASE_PASS,$DATABASE_NAME);


if(mysqli_connect_error()){
    exit('Error conecting to the database'.mysqli_connect_error());
}

if(!isset($v,$a,$c  )){
    exit('Empty feilds(s) ');
}

if(empty($v) || empty($a)|| empty($c)){
    exit('values empty');
}

if($stmt = $con->prepare('SELECT id ,password FROM users WHERE username=?')){
    $stmt -> bind_param('s',$v);
    $stmt -> execute();
    $stmt->store_result();

    if($stmt->num_rows>0){
        echo 'username Already Exists . Try Again';
    }
    else{
        if($stmt = $con->prepare('INSERT INTO users (username,password,email) VALUES (?,?,?)')){
            $passowrd = password_hash($a,PASSWORD_DEFAULT);
            $stmt->bind_param('sss',$v,$a,$c);
            $stmt ->execute();
            echo 'successfully registered ';
            header('location:cplogin.php');
        }
        else{
            echo 'error occured ';
        }

    }
    $stmt->close();
}
else{
    echo 'Error occured';
}
$con->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
        background-image:url("https://www.nttdata.com/global/en/-/media/nttdataglobal/1_images/services/cybersecurity/cybersecurity_d.jpg?h=1680&la=en&w=2800&hash=DD3CA9787189EA30A6F0D47069AC5261C0DBF2DF");
        background-repeat:no-repeat;
        background-size:cover;}
    </style>
</head>
<body>
    
</body>
</html>


