<?php
include  '../db/db.php';
$title = $_POST['title'];
$content = $_POST['content'];
$status = 0;
$publish = 0;
date_default_timezone_set('Asia/Taipei'); //時區
$date = date("Y-m-d H:i:s"); //日期


date_default_timezone_set('Asia/Taipei'); //時區
$sql = "INSERT INTO `meeting` (`title`, `content`, `status`, `publish`, `createTime`, `updateTime`) VALUES ( '$title', '$content', '$status', '$publish', '$date', '$date');";

$res = mysqli_query($connect, $sql);

$sqlU = "SELECT * FROM `meeting`  ORDER BY id DESC LIMIT 0 , 1";
$resU = mysqli_query($connect, $sqlU);
$rowU = mysqli_fetch_array($resU);

// $sqlC = "CREATE TABLE Customer
// (id char(50),
// Last_Name char(50),
// Address char(50),
// City char(50),
// Country char(25),
// Birth_Date datetime);";
// $resC = mysqli_query($connect, $sqlC);






$id  = $rowU['id'];

// $sqlA = "SELECT * FROM `article` WHERE id = $id";
// $resA = mysqli_query($connect, $sqlA);
// $rowA = mysqli_fetch_array($resA);

$str = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>' . $title . '</title>
       <style>
        body,
        html {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #aaa;
            width:100%;
            height:100vh;
        }

        h1 {
            font-size: 3rem;
        }
    </style>
</head>
<body>
    ' . $content . '
</body>
</html>';
$url = "meeting{$id}.php";
if ($res) {
    $fp = fopen("../{$url}", "w+");
    echo $url;
    fwrite($fp, $content) or die("錯誤");
    // header("Location:../{$url}");
    exit;
}
