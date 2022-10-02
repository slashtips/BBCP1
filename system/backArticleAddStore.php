<?php
include  '../db/db.php';

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


if ($_FILES['picture']) {

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





// $topic = $_POST["topic"];
$title = $_POST["title"];
$topicSec = $_POST["topicSec"];
// $type = $_POST["type"];
$content = $_POST["content"];
$source = $_POST["source"];
$video = $_POST["video"];
date_default_timezone_set('Asia/Taipei'); //時區
$date = date("Y-m-d H:i:s"); //日期
$status = 0;
$publish = 0;

date_default_timezone_set('Asia/Taipei'); //時區
$sql = "INSERT INTO `article` ( `topicSec`,`title`, `content`, `source`,`articlePath`,`video`,`picture`,`status`,`publish`, `createTime`, `updateTime`) VALUES (  '$topicSec', '$title', '$content', '$source','$path','$video','$path2','$status','$publish', '$date', '$date');";
$res = mysqli_query($connect, $sql);

// $sqlU = "SELECT * FROM `article`  ORDER BY id DESC LIMIT 0 , 1";
// $resU = mysqli_query($connect, $sqlU);
// $rowU = mysqli_fetch_array($resU);

// $sqlR1 = "SELECT * FROM `article`  ORDER BY id DESC LIMIT 0 , 9";
// $resR1 = mysqli_query($connect, $sqlR1);
// $rowR1 = mysqli_fetch_array($resR1);

// $sqlB = "SELECT * FROM `article` where  `publish` = 1 AND `topicSec` = ' . $topicSec . '";
// $resB = mysqli_query($connect, $sqlB);
// $rowB = mysqli_fetch_array($resB);

// $id  = $rowU['id'];

// $sqlA = "SELECT * FROM `article` WHERE id = $id";
// $resA = mysqli_query($connect, $sqlA);
// $rowA = mysqli_fetch_array($resA);

echo "<script> alert('文章新增成功，請等候批准');window.location.href='../back_articleArticleIndex.html'; </script>";
exit;
