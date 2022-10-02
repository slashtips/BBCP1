<?php
include '../db/db.php';
$id = $_POST['id'];
$sql = "UPDATE `meeting` SET `publish` = '1' WHERE `meeting`.`id` = $id;";
$res = mysqli_query($connect, $sql);

// if ($res) {

//     echo "<script> alert('會議已發布!'); window.location.href='../back_meeting.html'</script>";
// }
