<?php
include  '../db/db.php';
$id = $_POST['id'];
$sql = "DELETE FROM `articleM` WHERE `articleM`.`id` = $id";
$res = mysqli_query($connect, $sql);

