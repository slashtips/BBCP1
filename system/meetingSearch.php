<?php
include '../db/db.php';
$str = $_POST["str"];
$sql = "SELECT * FROM `meeting` WHERE  `publish` = 1 AND ( `title` LIKE '%$str%' OR `content` LIKE '%$str%')   order by `id` DESC";

$res = mysqli_query($connect, $sql);

$row = mysqli_fetch_array($res);


if ($res) {
    foreach ($res as $meeting) {
        echo '<li><a href="meetingCommon.php?i=' . $meeting['id'] . '">' . $meeting['title'] . '</a></li>' . ',';
    }
}
