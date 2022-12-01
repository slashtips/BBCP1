<?php
include  '../db/db.php';
$id = $_POST['id'];
$sql = "DELETE FROM `meeting` WHERE `meeting`.`id` = $id";
$res = mysqli_query($connect, $sql);

