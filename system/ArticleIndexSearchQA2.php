<?php
include '../db/db.php';
$id = $_POST["id"];
$sql = "SELECT * FROM `QA` WHERE `id` = $id";

$res = mysqli_query($connect, $sql);

$row = mysqli_fetch_array($res);


if ($res) {
    echo $row['title'] . "," . $row['content'];
}
