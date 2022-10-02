<?php
include  '../db/db.php';


$title = $_POST['title'];
$content = $_POST['content'];
$source = $_POST['source'];
$tag = $_POST['tag'];
$status = 0;
$publish = 0;
date_default_timezone_set('Asia/Taipei'); //時區
$date = date("Y-m-d H:i:s"); //日期

date_default_timezone_set('Asia/Taipei'); //時區
$sql = "INSERT INTO `meeting` (`title`, `content`, `status`,`source`,`tag`, `publish`, `createTime`, `updateTime`) VALUES ( '$title', '$content', '$status','$source','$tag', '$publish', '$date', '$date');";

$res = mysqli_query($connect, $sql);

$sqlU = "SELECT * FROM `meeting`  ORDER BY id DESC LIMIT 0 , 1";
$resU = mysqli_query($connect, $sqlU);
$rowU = mysqli_fetch_array($resU);


$id  = $rowU['id'];

echo $id;

// $sqlA = "SELECT * FROM `article` WHERE id = $id";
// $resA = mysqli_query($connect, $sqlA);
// $rowA = mysqli_fetch_array($resA);


// $url = "meeting{$id}.php";
// if ($res) {
//     $fp = fopen("../store/meeting/{$url}", "w+");
//     echo "store/meeting/" . $url;
//     fwrite($fp, $content) or die("錯誤");
//     // header("Location:../{$url}");
//     exit;
// }
