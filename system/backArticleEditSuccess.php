<?php
include  '../db/db.php';
$id = $_POST["id"];
$sqlS = "SELECT * FROM `article` WHERE `id` = $id";
$resS = mysqli_query($connect, $sqlS);
$rows = $resS->fetch_assoc();

$articlePathOld = $rows['articlePath'];
$videoOld = $rows['video'];
$pictureOld = $rows['picture'];

if ($_FILES['articlePath']) {
    unlink("../" . $articlePathOld);
    extract($_FILES['articlePath']);
    $img_name = md5(time()); //建立亂數檔名
    $ext = pathinfo($name, PATHINFO_EXTENSION); //取得副檔名
    $fullname = $img_name . '.' . $ext; //合併檔名+副檔名



    //判斷圖片格式
    // if ($ext != 'jpg' && $ext != 'jpeg' && $ext != 'gif' && $ext != 'png') {
    //     echo '<script>alert("請上傳正確的圖片格式")</script>';
    //     header('refresh:0;url=personal.html');
    //     return;
    //     // 終止下面的動作
    // }



    $folder = '../store/articleImg/'; //上傳路徑
    $target = $folder . $fullname; // 目標路徑

    $path = 'store/articleImg/' . $fullname;
    echo $path;
    if (!is_dir($folder)) {
        mkdir($folder);
        //若資料夾不存在就建立資料夾
    }
    // if (!$_FILES["articlePath"]["name"]) {
    //     $path = "pic/Common/R/r2.png";
    // } 


    switch ($error) {
        case 0:
            if (move_uploaded_file($tmp_name, $target)) {
            } else {
                echo '<script>alert("檔案上傳失敗")</script>';
            }
            break;
        case 1:
            echo '上傳檔案過大(伺服器限制)';
            break;
            // 不會顯示出來 會直接報錯
        case 2:
            echo '上傳檔案過大(表單限制)';
            break;
        case 3:
            echo '只有部分上傳';
            break;
        case 4:
            echo '請選擇檔案';
            break;
        case 6:
            echo '遺失暫存資料夾';
            break;
        case 7:
            echo '無法寫入';
            break;
        case 8:
            echo '不支援檔案上傳';
            break;
    }
}




if ($_FILES['picture']) {
    unlink("../" . $pictureOld);
    extract($_FILES['picture']);

    $img_name = md5(time()); //建立亂數檔名
    $ext2 = pathinfo($name, PATHINFO_EXTENSION); //取得副檔名
    $fullname = $img_name . '_.' . $ext2; //合併檔名+副檔名

    //判斷圖片格式
    // if ($ext != 'jpg' && $ext != 'jpeg' && $ext != 'gif' && $ext != 'png') {
    //     echo '<script>alert("請上傳正確的圖片格式")</script>';
    //     header('refresh:0;url=personal.html');
    //     return;
    //     // 終止下面的動作
    // }



    $folder = '../store/articleImg/'; //上傳路徑
    $target = $folder . $fullname; // 目標路徑
    $path2 = 'store/articleImg/' . $fullname;
    echo $path2;
    if (!is_dir($folder)) {
        mkdir($folder);
        //若資料夾不存在就建立資料夾
    }
    // if (!$_FILES["articlePath"]["name"]) {
    //     $path = "pic/Common/R/r2.png";
    // } 


    switch ($error) {
        case 0:
            if (move_uploaded_file($tmp_name, $target)) {
            } else {
                echo '<script>alert("檔案上傳失敗")</script>';
            }
            break;
        case 1:
            echo '上傳檔案過大(伺服器限制)';
            break;
            // 不會顯示出來 會直接報錯
        case 2:
            echo '上傳檔案過大(表單限制)';
            break;
        case 3:
            echo '只有部分上傳';
            break;
        case 4:
            echo '請選擇檔案';
            break;
        case 6:
            echo '遺失暫存資料夾';
            break;
        case 7:
            echo '無法寫入';
            break;
        case 8:
            echo '不支援檔案上傳';
            break;
    }
}


$title = $_POST["title"];
$topicSec = $_POST["topicSec"];

$content = $_POST["content"];
$source = $_POST["source"];
date_default_timezone_set('Asia/Taipei'); //時區
$date = date("Y-m-d H:i:s"); //日期

$body = $_POST["body"];
date_default_timezone_set('Asia/Taipei'); //時區

$video = $_POST["video"];
if ($path && $path2) {
    $sql = "UPDATE `article` SET `topicSec` = '$topicSec', `title` = '$title', `content` = '$content', `source` = '$source', `articlePath` = '$path', `video` = '$video', `picture` = '$path2' WHERE `article`.`id` = $id;";
} else if ($path) {
    $sql = "UPDATE `article` SET `topicSec` = '$topicSec', `title` = '$title', `content` = '$content', `source` = '$source', `articlePath` = '$path', `video` = '$video' WHERE `article`.`id` = $id;";
} else if ($path2) {
    $sql = "UPDATE `article` SET `topicSec` = '$topicSec', `title` = '$title', `content` = '$content', `source` = '$source', `video` = '$video', `picture` = '$path2' WHERE `article`.`id` = $id;";
} else {
    $sql = "UPDATE `article` SET `topicSec` = '$topicSec', `title` = '$title', `content` = '$content', `source` = '$source', `video` = '$video' WHERE `article`.`id` = $id;";
}

echo $sql;

$res = mysqli_query($connect, $sql);
// header("Location:../backArticleEditInfo.php");
