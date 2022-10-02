<?php
include  '../db/db.php';


$title = $_POST["title"];
$topicSec = $_POST['topicSec'];
$content = $_POST["content"];
// date_default_timezone_set('Asia/Taipei'); //時區
// $date = date("Y-m-d H:i:s"); //日期
$id = $_POST["id"];
date_default_timezone_set('Asia/Taipei'); //時區
$sql = "UPDATE `QA` SET  `title` = '$title', `content` = '$content',`topicSec` = '$topicSec', WHERE `QA`.`id` = $id;";

$res = mysqli_query($connect, $sql);
header("Location:../back_QA_EditInfo.php");
