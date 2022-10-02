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



    </style>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/common.css">

</head>

<body>

    <div class="cookie"></div>
    <div class="cover"></div>

    <div class="menum"></div>
    <div class="menuWrap">
        <div class="menu"></div>
    </div>
    <div class="loginH"></div>
    <div class="register"></div>
    <div class="questionAsk"></div>
    <div class="commonCard openPass"></div>
    <div class="commonCard forgetPassword"></div>

    <div class="commonCardSmall registerSmall"></div>
    <div class="commonCardSmall openPassSmall"></div>
    <div class="commonCardSmall forgetPasswordSmall"></div>
    <div class="menu1"></div>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/mee">
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js"
        integrity="sha256-hlKLmzaRlE8SCJC1Kw8zoUbU8BxA+8kR3gseuKfMjxA=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/meeting.css">


    <div class="bigTitle">
        <h1>' . $title . '</h1>
    </div>
    <div class="wrapp">
        <div class="left">
            <div class="top">
                <div class="option">
                    <a href="meeting.html">
                        <img src="pic/Common/back.svg" alt="">
                    </a>
                </div>
                <div class="source">
                    <small></small>
                </div>
            </div>
            <div class="hrs"></div>
            <div class="meetingContent">
                <div class="media">
                    <img src="pic/Common/pageT1.png" alt="">
                </div>
                <form action="">
                    ' . $content . '
                </form>
            </div>

        </div>

        <div class="right">
            <div class="catelog2">
                <div class="meetingCatelog">
                    <h2>會議目錄</h2>
                    <ul>
                        <li><a href="#">asdasd</a></li>
                    </ul>
                </div>
                <div class="relatedMeeting">
                    <h2>相關會議</h2>

                    <div class="card">
                        <a href="#">
                            <img src="" alt="">
                            <div class="cardText">
                                <h3>asdasd</h3>
                                <p>asda</p>
                            </div>
                        </a>
                    </div>

                    <div class="card">
                        <a href="#">
                            <img src="" alt="">
                            <div class="cardText">
                                <h3>asdasd</h3>
                                <p>asda</p>
                            </div>
                        </a>
                    </div>

                </div>
            </div>

        </div>

    </div>
    <div class="footer"></div>
    <script src="js/common.js"></script>
    <script src="js/article.js"></script>
</body>

</html>';
$url = "meeting{$id}.php";
if ($res) {
    $fp = fopen("../store/meeting/{$url}", "w+");
    echo "store/meeting/" . $url;
    fwrite($fp, $content) or die("錯誤");
    // header("Location:../{$url}");
    exit;
}
