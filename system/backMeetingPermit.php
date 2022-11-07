<?php
include '../db/db.php';
$id = $_GET['i'];
$sql = "UPDATE `meeting` SET `status` = '1' WHERE `meeting`.`id` = $id;";

$res = mysqli_query($connect, $sql);

if($res)
{
    echo "<script> alert('會議審核通過!可在發布區選取發布會議'); window.location.href='../backArticlePermit.php'</script>";
}

else{
    echo "<script> alert('失敗'); window.location.href='../backMeetingPermit.php'</script>";
}