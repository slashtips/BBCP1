<?php

include  '../db/db.php';
$email = $_COOKIE["email"];
$emailSpliceStr = $_POST['emailSpliceStr'];
$sql = "SELECT COUNT(domain) as domain FROM domain WHERE domain = '$emailSpliceStr';";


$res = mysqli_query($connect, $sql);
$row = mysqli_fetch_array($res);
if ($row["domain"] > 0) {
    echo 1;
} else {
    echo 0;
}
