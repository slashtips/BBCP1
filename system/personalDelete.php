<?php


include  '../db/db.php';
$email = $_COOKIE["email"];
echo $email;
$sql0 = "SELECT * FROM `users` Where `email` = '$email'";
$res0 = mysqli_query($connect, $sql0);
$row0 = mysqli_fetch_array($res0);
$photoPath = "../" .$row0['photoPath'];
// if (is_dir('../' . $photoPath)) {
    unlink($photoPath); //將檔案刪除

// }


$sql = "UPDATE `users` SET `photoPath` = 'pic/Common/userNone.png' WHERE `users`.`email` = '$email';";
echo $sql;
$res = mysqli_query($connect, $sql);
// $row = mysqli_fetch_array($res);

// if ($res) {
//     // header('location:form.php');
//     header('Refresh:0;url=personal.html');
// }
