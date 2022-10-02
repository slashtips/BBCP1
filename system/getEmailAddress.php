<?php

include  '../db/db.php';
$email = $_COOKIE["email"];
$emailStr = $_POST['emailStr'];
$sql = "SELECT COUNT(EmailAddress) as EmailAddress FROM EmailAddress WHERE EmailAddress = '$emailStr';";


$res = mysqli_query($connect, $sql);
$row = mysqli_fetch_array($res);
if ($row["EmailAddress"] > 0) {
    echo 1;
} else {
    echo 0;
}
