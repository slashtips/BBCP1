<?php
include  '../db/db.php';
$id = $_POST['id'];
$sql = "DELETE FROM `QA` WHERE `QA`.`id` = $id";
$res = mysqli_query($connect, $sql);
header("Location:../back_QA_EditInfo.php");
