<?php
include  '../db/db.php';

// $topic = $_POST["topic"];
// $title = $_POST["title"];
$topicSec = $_POST["topicSec"];
$type = $_POST["type"];
$content = $_POST["content"];
$source = $_POST["source"];
date_default_timezone_set('Asia/Taipei'); //時區
$date = date("Y-m-d H:i:s"); //日期
$status = 0;
$publish = 0;

date_default_timezone_set('Asia/Taipei'); //時區
$sql = "INSERT INTO `article0` ( `topicSec`, `content`, `source`,`status`,`publish`, `createTime`, `updateTime`) VALUES ( '$topicSec', '$content', '$source','$status','$publish', '$date', '$date');";
$res = mysqli_query($connect, $sql);

if($res)
{
    echo "<script>window.location.href='../backArticleAdd.php'</script>";
}

$sqlU = "SELECT * FROM `article0`  ORDER BY id DESC LIMIT 0 , 1";
$resU = mysqli_query($connect, $sqlU);
$rowU = mysqli_fetch_array($resU);



$id  = $rowU['id'];

