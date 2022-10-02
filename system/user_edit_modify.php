<?php
include  '../db/db.php';
$id = $_GET['i'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$password = $_POST['password'];
$status = $_POST['status'];

echo $date;
$sql = "UPDATE `users` SET `firstName` = '$firstName', `lastName` = '$lastName', `email` = '$email' ,  `password` = '$password' , `status` = '$status' WHERE `users`.`id` = $id;";
echo $sql;
$res = mysqli_query($connect, $sql);

if ($res) {
    header("Location:../back_user_Info.php");
} else {
    echo "修改錯誤";
}
