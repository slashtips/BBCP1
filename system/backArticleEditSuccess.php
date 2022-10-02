<?php
include  '../db/db.php';


$title = $_POST["title"];
$topicSec = $_POST["topicSec"];

$content = $_POST["content"];
$source = $_POST["source"];
date_default_timezone_set('Asia/Taipei'); //時區
$date = date("Y-m-d H:i:s"); //日期
$id = $_POST["id"];
$body = $_POST["body"];
date_default_timezone_set('Asia/Taipei'); //時區
$sql = "UPDATE `article` SET  `title` = '$title',`topicSec` = '$topicSec', `content` = '$content', `updateTime` = '$date' WHERE `article`.`id` = $id;";

$res = mysqli_query($connect, $sql);
header("Location:../backArticleEditInfo.php");
