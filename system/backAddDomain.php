<?php
include  '../db/db.php';

$domain = $_POST["domain"];
date_default_timezone_set('Asia/Taipei'); //時區
$date = date("Y-m-d H:i:s"); //日期


date_default_timezone_set('Asia/Taipei'); //時區
$sql = "INSERT INTO `domain` (domain) VALUES ('$domain');";
$res = mysqli_query($connect, $sql);

if ($res) {
    echo "<script> alert('domain Add Success');window.location.href='../back_permission.html'; </script>";
    exit;
}
