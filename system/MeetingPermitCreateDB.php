<?php

include  '../db/db2.php';
$inputname = $_POST['inputname'];
$id  = $_POST['id'];



$sql = "CREATE TABLE meeting$id (
  Id INT AUTO_INCREMENT,
";

foreach ($inputname as $key) {
  $sql .= $key . " text ,";
}

$sql .= "PRIMARY KEY (Id));";
echo $sql;
$res = mysqli_query($connect, $sql);

mysqli_close($connect);

include '../db/db.php';

$sql2 = "UPDATE `meeting` SET  `status` = 1 WHERE `meeting`.`id` = $id;";
$res2 = mysqli_query($connect, $sql2);
