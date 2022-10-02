<?php
include  '../db/db.php';
$id = $_POST['id'];
$sql = "DELETE FROM `article` WHERE `article`.`id` = $id";
$res = mysqli_query($connect, $sql);
header("Location:../backArticleEditInfo.php");
