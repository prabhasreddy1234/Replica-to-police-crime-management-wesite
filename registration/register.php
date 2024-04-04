<?php
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS='12345';
$DATABASE_NAME= 'main cyber crime records';

$con = mysqli_connect($DATABASE_HOST,$DATABASE_USER,$DATABASE_PASS,$DATABASE_NAME);


if(mysqli_connect_error()){
    exit('Error conecting to the database'.mysqli_connect_error());
}

if(!isset($_POST['username'],$_POST['passowrd'],$_POST['email']  )){
    exit('Empty feilds(s) ');
}

if(empty($_POST['username']) || empty($_POST['password'])|| empty($_POST['email'])){
    exit('values empty');
}

if($stmt = $conn->prepare('SELECT id ,passowrd FROM users WHERE username=?')){
    $stmt -> bind_param('s',$_POST['username']);
    $stmt -> execute();
    $stmt->store_result();

    if($stmt->num_rows>0){
        echo 'username Already Exists . Try Again';
    }
    else{
        if($stmt = $con->prepare('INSERT INTO users (username,password,email) VALUES (?,?,?)')){
            $passowrd = password_hash($_POST['password'],PASSWORD_DEFAULT);
            $stmt->bind_param('sss',$_POST['username'],$password,$_POST['email']);
            $stmt ->execute();
            echo 'successfully registered ';

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




