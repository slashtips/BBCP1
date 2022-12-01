<?php
include '../db/db.php';
$SMTP_Server = $_POST["SMTP_Server"];
$SMTP_Email = $_POST["SMTP_Email"];
$SMTP_Password = $_POST["SMTP_Password"];
$Port = $_POST["Port"];
$Send_ID = $_POST["Send_ID"];
$Reply_Email = $_POST["Reply_Email"];
$sql = "UPDATE `SMTP` SET `SMTP_Server` = '$SMTP_Server', `SMTP_Email` = '$SMTP_Email', `SMTP_Password` = '$SMTP_Password', `Port` = '$Port',  `Send_ID` = '$Send_ID',  `Reply_Email` = '$Reply_Email', `status` = '1' WHERE `SMTP`.`id` = 1;";

$res = mysqli_query($connect, $sql);

// $row = mysqli_fetch_array($res);


// if ($res) {
//     echo "<script>  window.location.href='../backGA.php'</script>";
// }
// else{
//     echo "<script>alert('d')</script>";
// }
