<?php

// var_dump($_FILES);
// $name = $_FILES['img']['name'];
// $size = $_FILES['img']['size'];
// $tmp_name = $_FILES['img']['tmp_name'];
// $error = $_FILES['img']['error'];
// $full_path = $_FILES['img']['full_path'];
// $type = $_FILES['img']['type'];
// echo $name;
// echo '<br>';
// echo $size;
// echo '<br>';
// echo $tmp_name;
// echo '<br>';
// echo $error;
// echo '<br>';
// echo $full_path;
// echo '<br>';
// echo $type;
// echo '<br>';


extract($_FILES['photo']);

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


$folder = '../store/user/'; //上傳路徑
$target = $folder . $fullname; // 目標路徑
$path = 'store/user/' . $fullname;
if (!is_dir($folder)) {
    mkdir($folder);
    //若資料夾不存在就建立資料夾
}
switch ($error) {
    case 0:
        if (move_uploaded_file($tmp_name, $target)) {
            echo '<script>alert("上傳成功")</script>';
        } else {
            echo '<script>alert("上傳失敗")</script>';
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



include  '../db/db.php';

$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$email = $_POST["email"];
$password = $_POST["password"];
$cookieEmail  = $_COOKIE["email"];

// if (isset($photo)) {
//     $photoName = $photo['name'];
//     $photoType = $photo['type'];
//     $photoTempName = $photo['tmp_name'];
//     $photoSize  = $photo['size'];
//     $photoError = $photo['error'];
// }
// echo $photoName;
// echo $photoTempName;
// echo $firstName;
// echo $lastName;
// echo $email;
// echo $password;
// echo $cookieEmail;

// $picPath = "pic/usersPhoto/";
// move_uploaded_file($_FILES["photo"]['tmp_name'], $picPath . $photoName);
// $PPPN =  $picPath . $photoName;
if ($password != "") {
    $sql = "UPDATE `users` SET `firstName` = '$firstName', `lastName` = '$lastName', `password` = '$password', `photoPath` = '$path' WHERE `users`.`email` = '$cookieEmail';";
} else {
    $sql = "UPDATE `users` SET `firstName` = '$firstName', `lastName` = '$lastName', `photoPath` = '$path' WHERE `users`.`email` = '$cookieEmail';";
}


$res = mysqli_query($connect, $sql);

// $row = mysqli_fetch_array($res);

echo
    ' 
        <script>
                document.cookie = "username=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
                document.cookie = "photoPath=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";

                document.cookie = "username=' . $firstName . $lastName . '; max-age=7200; path=/";
                document.cookie = "photoPath=' . $path . '; max-age=7200; path=/";
        </script>
    ';

echo "<script>window.location.href='../personal.html'</script>";








// foreach ($res as $user) {
//     echo $user['id'];
//     echo $user["firstName"];
// }



// $photo = $picPath .$photoName;

//session_start();
// include  '../db/db.php';
// $photo = $_POST["photo"];
//  var_dump($photo);
// $target_dir = "uploads/";
// $target_file = $target_dir . basename($_FILES["photo"]["name"]);
// $uploadOk = 1;
// $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
// if (isset($_POST["lastName"])) {
//     $check = getimagesize($_FILES["photo"]["tmp_name"]);
//     if ($check !== false) {
//         echo "File is an image - " . $check["mime"] . ".";
//         $uploadOk = 1;
//     } else {
//         echo "File is not an image.";
//         $uploadOk = 0;
//     }
// }

// // Check if file already exists
// if (file_exists($target_file)) {
//     echo "Sorry, file already exists.";
//     $uploadOk = 0;
// }

// // Check file size
// if ($_FILES["photo"]["size"] > 500000) {
//     echo "Sorry, your file is too large.";
//     $uploadOk = 0;
// }

// // Allow certain file formats
// if (
//     $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
//     && $imageFileType != "gif"
// ) {
//     echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
//     $uploadOk = 0;
// }

// // Check if $uploadOk is set to 0 by an error
// if ($uploadOk == 0) {
//     echo "Sorry, your file was not uploaded.";
//     // if everything is ok, try to upload file
// } else {
//     if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
//         echo "The file " . htmlspecialchars(basename($_FILES["photo"]["name"])) . " has been uploaded.";
//     } else {
//         echo "Sorry, there was an error uploading your file.";
//     }
// }

// echo $_COOKIE["email"];
// echo $email;
// echo $password;
// $sql = "SELECT * FROM `users` WHERE `email`='$email';";
// $res = mysqli_query($connect, $sql);
// $row = mysqli_fetch_array($res);
// echo $row;

// foreach ($res as $user) {
// $text = "" . $user['id']."," . $user['firstName'] . $user['lastName'] . "," . $user['email'] . "," . $user['date'] . "," . $user['status'] ."," . $user['title'] . "," . $user['photoPath'] . ",";
// echo $text;
// }

// if (mysqli_num_rows($res) > 0) {
// //$_SESSION['U']=$name;
// // setcookie("user", "$name", time()+14400);
// // header("Location:../../loginingPage.php");
// echo 1;
// } else {
// // header("Location:../../index.php");
// echo 0;
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>更新中</title>
    <style>
        body,
        html {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .center img {
            width: 30%;
        }
    </style>
</head>

<body>
    <div class="center">
        <img src="../pic/Common/loading.png" alt="">
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js" integrity="sha256-hlKLmzaRlE8SCJC1Kw8zoUbU8BxA+8kR3gseuKfMjxA=" crossorigin="anonymous"></script>


<script>
    //Cookie讀取
    function parseCookie() {
        var cookieObj = {};
        var cookieAry = document.cookie.split(';');
        var cookie;
        for (var i = 0, l = cookieAry.length; i < l; ++i) {
            cookie = jQuery.trim(cookieAry[i]);
            cookie = cookie.split('=');
            cookieObj[cookie[0]] = cookie[1];
        }

        return cookieObj;
    }

    function getCookieByName(name) {
        var value = parseCookie()[name];
        if (value) {
            value = decodeURIComponent(value);
        }

        return value;
    }
</script>

</html>