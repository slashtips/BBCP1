<?php
include  '../db/db.php';
$id = $_GET['i'];
$title = $_POST['title'];

echo $date;
$sql = "UPDATE `users` SET `title` = '$title' WHERE `users`.`id` = $id;";
echo $sql;
$res = mysqli_query($connect, $sql);

if ($res) {
    header("Location:../backPermissionInfo.php");
} else {
    echo "修改錯誤";
}
