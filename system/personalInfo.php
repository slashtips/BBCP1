<?php
//session_start();
include  '../db/db.php';
$email = $_COOKIE["email"];
// echo $_COOKIE["email"];
// echo $email;
// echo $password;
$sql = "SELECT * FROM `users` WHERE `email`='$email';";
$res = mysqli_query($connect, $sql);
$row = mysqli_fetch_array($res);
// echo $row;

foreach ($res as $user) {
    $text =  "" . $user['id'] . "," . $user['firstName'] . "," . $user['lastName'] . "," . $user['email'] . "," . $user['password'] . "," . $user['date'] . "," . $user['status'] . ","  . $user['title'] . "," . $user['photoPath'] . ",";
    echo $text;
}

// if (mysqli_num_rows($res) > 0) {
//     //$_SESSION['U']=$name;
//     // setcookie("user", "$name", time()+14400);
//     // header("Location:../../loginingPage.php"); 
//     echo 1;
// } else {
//     // header("Location:../../index.php");
//     echo 0;
// }
