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
    exit('Empty feilds(s)');
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


