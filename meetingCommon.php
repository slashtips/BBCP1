<?php
include 'db/db.php';
$id = $_GET['i'];
$sql = "SELECT * FROM `meeting` WHERE `id` = $id";
$res = mysqli_query($connect, $sql);
$row = mysqli_fetch_array($res);

$sqlR = "SELECT * FROM `meeting` WHERE `id` <> $id AND `publish` = 1 ORDER BY id DESC LIMIT 1 , 3 ";
$resR = mysqli_query($connect, $sqlR);
$sqlC = "SELECT * FROM `meeting` WHERE `id` <> $id AND `publish` = 1 ORDER BY id DESC LIMIT 1 , 9 ";
$resC = mysqli_query($connect, $sqlC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        .CheckB {
            display: none;
        }

        .wrapp {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;

        }

        .wrapp .right {
            max-width: 230px;
        }

        .wrapp .left {
            max-width: 741px;
        }



        .submitGroup {
            margin-top: 1rem;
        }

        .submitGroup input {
            background: #424452;
            border-radius: 40px;
            font-weight: 600;
            font-size: 1.5rem;
            letter-spacing: 0.01em;
            color: #FFFFFF;
            padding: .25rem 1rem;
            border: none;
        }

        .meetingContent {
            width: 100%;
        }

        .FormSubmit {
            width: 100%;
        }

        .NotWidth {
            opacity: 0;
            height: 0;
            width: 760px;
        }

        .notWidthDiv {
            width: 100%;
        }

        .countDiv {
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            /* text-align: center; */
            margin-top: 1.5rem;
        }

        .countDiv h4 {
            width: 100%;
            font-size: 1.5rem;
            color: #424452;
            letter-spacing: 0.01em;
            /* text-align: center; */
            margin-bottom: 0.5rem;

        }

        .countDiv input[type="text"] {
            width: 100%;
            background: #F0EBE3;
            border-radius: 40px;
            padding: 1rem;
            color: #424452;
            font-weight: 600;
            font-size: 20px;
            letter-spacing: 0.04em;
            margin-right: auto !important;

        }

        .countDiv input[type="radio"] {
            width: 20px;
            height: 20px;
        }

        .countDiv input[type="checkbox"] {
            width: 20px;
            height: 20px;
        }

        .countDiv input {
            /* margin: 0 auto; */
        }
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
    <div class="questionSelectCard"></div>
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
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js" integrity="sha256-hlKLmzaRlE8SCJC1Kw8zoUbU8BxA+8kR3gseuKfMjxA=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/meeting.css">

    <script src="include/jquery-ui-1.13.2/jquery-ui.min.js"></script>
<script src="include/jquery-ui-touch-punch-master/jquery.ui.touch-punch.js"></script>

    <div class="bigTitle">
        <h1><?php echo $row['title'] ?></h1>
    </div>
    <div class="wrapp">
        <div class="left">
            <div class="notWidthDiv">
                <img class="NotWidth" src="pic/Common/R/r3.png" alt="">
            </div>

            <div class="top">
                <div class="option">
                    <a href="meeting.php">
                        <img src="pic/Common/back.svg" alt="">
                    </a>
                </div>
                <div class="source">
                    <small>資訊來源：<?php echo $row['source'] ?></small>
                </div>
            </div>
            <div class="hrs"></div>
            <div class="meetingContent">
                <div class="media">
                    <!-- <img src="pic/Common/pageT1.png" alt=""> -->
                </div>
                <form action="" class="FormSubmit">
                    <?php echo $row['content'] ?>

                    <div class="submitGroup">
                        <input type="submit" class="meetingSubmit" value="確定">
                    </div>
                </form>
            </div>

        </div>

        <div class="right">
            <div class="catelog2">
                <div class="meetingCatelog">
                    <h2>會議目錄</h2>
                    <ul>
                        <?php
                        foreach ($resR as $meeting) {
                            echo '
                              <li><a href="meetingCommon.php?i=' . $meeting['id'] . '">' . $meeting['title'] . '</a></li>
                            ';
                        }
                        ?>

                    </ul>
                </div>
                <div class="relatedMeeting">
                    <h2>相關會議</h2>
                    <?php
                    foreach ($resR as $meeting) {
                        echo '
                        <div class="card">
                            <a href="meetingCommon.php?i=' . $meeting['id'] . '">
                                <img src="pic/Common/R/r3.png" alt="">
                                <div class="cardText">
                                    <h3>' . $meeting['title'] . '</h3>
                                </div>
                            </a>
                        </div>
                        ';
                    }

                    ?>
                    <!-- <div class="card">
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
                    </div> -->
                </div>
            </div>

        </div>

    </div>
    <div class="footer"></div>
    <script src="js/common.js"></script>
    <script src="js/article.js"></script>
</body>

</html>

<script>
    let countDiv = document.querySelectorAll(".countDiv");

    // let inputname = [];
    // if (countDiv) {
    //     countDiv.forEach(function(element) {
    //         console.log(element);
    //         inputname.push(element.dataset.inputname)
    //     }, false)
    // }
    // if (inputname > 0) {
    //     document.querySelectorAll(".CheckB").forEach(function(element) {
    //         element.style = "display:block"
    //     })
    // }


    let inputname = [];
    if (countDiv) {
        countDiv.forEach(function(element) {
            inputname.push(element.dataset.inputname)
        }, false)
    }

    if (inputname.length < 1) {
        document.querySelector(".meetingSubmit").style = "display:none"
    }
    console.log(inputname);

    let inputValue = [];


    $('.FormSubmit').on("submit", function(e) {
        e.preventDefault()
        var form = $(this);

        if (countDiv) {
            countDiv.forEach(function(element) {
                let str = "";
                for (let i = 0; i < element.children.length; i++) {


                    if (element.children[i].hasAttribute("name") && element.children[i].type == "checkbox" && element.children[i].checked) {

                        str += element.children[i].value + ",";
                    } else if (element.children[i].hasAttribute("name") && element.children[i].type == "radio" && element.children[i].checked) {
                        str += element.children[i].value;
                    } else if (element.children[i].hasAttribute("name") && element.children[i].type == "text") {

                        str += element.children[i].value;
                    }
                }
                inputValue.push(str)
            }, false)
        }
        console.log(inputValue);

        $.ajax({
            type: "Post",
            url: "system/meetingSubmit.php",
            data: {
                array1: form.serialize(),
                "id": <?php echo $id; ?>,
                inputname: inputname,
                inputValue: inputValue,
            },
            success: function(response) {
                console.log(response);
                alert("填表完成")
                window.location.reload();
            },
            error: function(err) {
                console.log(err);
            },
        });


    })
</script>