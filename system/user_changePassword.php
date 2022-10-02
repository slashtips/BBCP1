<?php
include  '../db/db.php';
$email = $_POST['email'];
$password = $_POST['password'];
// echo "1";
// print_r($_POST);
// echo $email;
// echo $password;

// echo $email;
$sql = "UPDATE `users` SET `password` = '$password' WHERE `users`.`email` = '$email';";


// echo $sql;
$res = mysqli_query($connect, $sql);

if ($res) {
    echo "1";
    
    // header("Location:../../back.php");
}
else{
    echo "0";
}
