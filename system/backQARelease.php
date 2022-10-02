<?php
include '../db/db.php';
$id = $_GET['id'];
$sql = "UPDATE `QA` SET `publish` = '1' WHERE `QA`.`id` = $id;";
$res = mysqli_query($connect, $sql);

if ($res) {

    echo "<script> alert('問答已發布!'); window.location.href='../back_QA.html'</script>";
}
