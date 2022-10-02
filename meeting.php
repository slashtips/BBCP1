<?php
include 'db/db.php';
$sqlL = "SELECT * FROM `meeting`  Where `publish` = 1 ORDER BY id DESC ";
$resL = mysqli_query($connect, $sqlL);

$sqlC = "SELECT COUNT(id) as `total` FROM `meeting` WHERE`publish` = 1;";
$resC = mysqli_query($connect, $sqlC);
$rowC = mysqli_fetch_array($resC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會議活動</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@300;400;500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/news.css">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>
</head>

<script src="include/jquery-ui-1.13.2/jquery-ui.min.js"></script>
<script src="include/jquery-ui-touch-punch-master/jquery.ui.touch-punch.js"></script>

<body>
    <div class="cookie"></div>
    <div class="cover"></div>


    <div class="menum"></div>
    <div class="menu"></div>
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


    <div class="titleRWD">
        <img src="pic/Common/backWhite.png" alt="">
        <h5>個管師專區</h5>
    </div>

    <div class="meetingSmallCard meetingSmallCardSearch">
        <div class="title">
            <h3>搜尋</h3>
            <img src="pic/Common/cancel.png" alt="">
        </div>
        <div class="search">
            <input type="text" placeholder="請輸入關鍵字">
            <ul>
                <li><a href="#">AAA</a></li>
                <li><a href="#">AAA</a></li>
                <li><a href="#">AAA</a></li>
            </ul>
            <img src="pic/Common/search.svg" alt="">
        </div>
    </div>

    <div class="meetingSmallCard meetingSmallCardActiveStatus">
        <div class="title">
            <h3>活動狀態</h3>
            <img src="pic/Common/cancel.png" alt="">
        </div>
        <div class="timeOrder">
            <label for="">活動排序</label>
            <div class="select">
                <div class="box">活動時間近到遠
                    <img src="pic/Common/arrowDown.png" alt="">
                </div>
                <ul>
                    <li>活動時間近到遠</li>
                    <li>活動時間遠到近</li>
                </ul>
            </div>
        </div>
        <div class="activeStatus">
            <label for="">活動狀態</label>
            <div class="select">
                <div class="box">
                    進行中
                    <div class="number">+1</div>
                    <img src="pic/Common/arrowDown.png" alt="">
                </div>
                <ul>
                    <li><input type="checkbox" id="meetingStatus1" class="meetingStatus"><label for="meetingStatus1">進行中</label>
                    </li>
                    <li><input type="checkbox" id="meetingStatus2" class="meetingStatus"><label for="meetingStatus2">即將到來</label></li>
                    <li><input type="checkbox" id="meetingStatus3" class="meetingStatus"><label for="meetingStatus3">已結束</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="menu1"></div>
    <div class="loginH"></div>
    <div class="wrap">
        <div class="top">
            <div class="left">
                <img src="pic/Common/back.svg" alt="">
            </div>
            <div class="right">
                <input class="keyWord" type="text" placeholder="請輸入關鍵字">
            </div>
        </div>
        <div class="title">
            <h1>會議活動</h1>
            <div class="titleRight">
                <div class="timeOrder">
                    <label for="">活動排序</label>
                    <div class="select">
                        <div class="box">活動時間近到遠
                            <img src="pic/Common/arrowDown.png" alt="">
                        </div>
                        <ul>
                            <li>活動時間近到遠</li>
                            <li>活動時間遠到近</li>

                        </ul>
                    </div>
                </div>
                <div class="activeStatus">
                    <label for="">活動狀態</label>
                    <div class="select">
                        <div class="box">
                            進行中
                            <div class="number">+1</div>
                            <img src="pic/Common/arrowDown.png" alt="">
                        </div>
                        <ul>
                            <li><input type="checkbox" id="meetingStatus1" class="meetingStatus"><label for="meetingStatus1">進行中</label></li>
                            <li><input type="checkbox" id="meetingStatus2" class="meetingStatus"><label for="meetingStatus2">即將到來</label></li>
                            <li><input type="checkbox" id="meetingStatus3" class="meetingStatus"><label for="meetingStatus3">已結束</label></li>
                        </ul>
                    </div>
                </div>
                <div class="RWDIcon">
                    <img src="pic/Common/uu.png" alt="">
                </div>
            </div>
        </div>

        <div class="dataTitle">
            <!-- <div class="dataTitleleft">
                <input type="button" class="c2 meetingBtn" value="會議">
                <input type="button" class="workBtn" value="工作坊">
            </div> -->
            <h5 style="margin-left: auto;">共<?php echo $rowC['total'] ?>場</h5>
        </div>

        <div class="cardGroup">
            <?php
            foreach ($resL as $meeting) {
                echo '
                <div class="row">
                    <div class="card" data-id = "' . $meeting['id'] . '">
                        <img class="errorImg" src = "pic/Common/R/r3.png"  alt="">
                        <div class="textWrap">
                            <div class="cardTitle">
                                <div class="tag">' . $meeting['tag'] . '</div>
                                <small>' . $meeting['meetingTime'] . '</small>
                            </div>
                            <h3>' . $meeting['title'] . '</h3>
                            <h5></h5>
                            <small>' . $meeting['source'] . '</small>
                        </div>
                    </div>
                </div>
                ';
            }
            ?>
            <!-- <div class="row">
                <div class="col">
                    <img src="pic/Common/R/r3.png" alt="">
                    <div class="textWrap">
                        <div class="cardTitle">
                            <div class="tag">進行中</div>
                            <small>2022-05-11 11:00 ~ 13:00</small>
                        </div>
                        <h3>會議名稱 X X X X X X</h3>
                        <h5>會議地點</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum consequuntur odit dolorem
                            nulla
                            ipsa
                            animi, ullam labore quam iusto? Quidem ipsum dolorem excepturi expedita vero animi enim
                            praesentium?
                            Sint, fugiat!</p>
                        <small>來源 : 公司內部XX部門</small>
                    </div>
                </div>

                <div class="col">
                    <img src="pic/Common/R/r4.png" alt="">
                    <div class="textWrap">
                        <div class="cardTitle">
                            <div class="tag">進行中</div>
                            <small>2022-05-11 11:00 ~ 13:00</small>
                        </div>
                        <h3>會議名稱 X X X X X X</h3>
                        <h5>會議地點</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum consequuntur odit dolorem
                            nulla
                            ipsa
                            animi, ullam labore quam iusto? Quidem ipsum dolorem excepturi expedita vero animi enim
                            praesentium?
                            Sint, fugiat!</p>
                        <small>來源 : 公司內部XX部門</small>
                    </div>
                </div>

                <div class="col">
                    <img src="pic/Common/R/r4.png" alt="">
                    <div class="textWrap">
                        <div class="cardTitle">
                            <div class="tag">進行中</div>
                            <small>2022-05-11 11:00 ~ 13:00</small>
                        </div>
                        <h3>會議名稱 X X X X X X</h3>
                        <h5>會議地點</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum consequuntur odit dolorem
                            nulla
                            ipsa
                            animi, ullam labore quam iusto? Quidem ipsum dolorem excepturi expedita vero animi enim
                            praesentium?
                            Sint, fugiat!</p>
                        <small>來源 : 公司內部XX部門</small>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <img src="pic/Common/R/r3.png" alt="">
                    <div class="textWrap">
                        <div class="cardTitle">
                            <div class="tag">進行中</div>
                            <small>2022-05-11 11:00 ~ 13:00</small>
                        </div>
                        <h3>會議名稱 X X X X X X</h3>
                        <h5>會議地點</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum consequuntur odit dolorem
                            nulla
                            ipsa
                            animi, ullam labore quam iusto? Quidem ipsum dolorem excepturi expedita vero animi enim
                            praesentium?
                            Sint, fugiat!</p>
                        <small>來源 : 公司內部XX部門</small>
                    </div>
                </div>

                <div class="col">
                    <img src="pic/Common/R/r4.png" alt="">
                    <div class="textWrap">
                        <div class="cardTitle">
                            <div class="tag">進行中</div>
                            <small>2022-05-11 11:00 ~ 13:00</small>
                        </div>
                        <h3>會議名稱 X X X X X X</h3>
                        <h5>會議地點</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum consequuntur odit dolorem
                            nulla
                            ipsa
                            animi, ullam labore quam iusto? Quidem ipsum dolorem excepturi expedita vero animi enim
                            praesentium?
                            Sint, fugiat!</p>
                        <small>來源 : 公司內部XX部門</small>
                    </div>
                </div>

                <div class="col">
                    <img src="pic/Common/R/r4.png" alt="">
                    <div class="textWrap">
                        <div class="cardTitle">
                            <div class="tag">進行中</div>
                            <small>2022-05-11 11:00 ~ 13:00</small>
                        </div>
                        <h3>會議名稱 X X X X X X</h3>
                        <h5>會議地點</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum consequuntur odit dolorem
                            nulla
                            ipsa
                            animi, ullam labore quam iusto? Quidem ipsum dolorem excepturi expedita vero animi enim
                            praesentium?
                            Sint, fugiat!</p>
                        <small>來源 : 公司內部XX部門</small>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <img src="pic/Common/R/r3.png" alt="">
                    <div class="textWrap">
                        <div class="cardTitle">
                            <div class="tag tagComing">即將到來</div>
                            <small>2022-05-11 11:00 ~ 13:00</small>
                        </div>
                        <h3>會議名稱 X X X X X X</h3>
                        <h5>會議地點</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum consequuntur odit dolorem
                            nulla
                            ipsa
                            animi, ullam labore quam iusto? Quidem ipsum dolorem excepturi expedita vero animi enim
                            praesentium?
                            Sint, fugiat!</p>
                        <small>來源 : 公司內部XX部門</small>
                    </div>
                </div>

                <div class="col">
                    <img src="pic/Common/R/r4.png" alt="">
                    <div class="textWrap">
                        <div class="cardTitle">
                            <div class="tag tagComing">即將到來</div>
                            <small>2022-05-11 11:00 ~ 13:00</small>
                        </div>
                        <h3>會議名稱 X X X X X X</h3>
                        <h5>會議地點</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum consequuntur odit dolorem
                            nulla
                            ipsa
                            animi, ullam labore quam iusto? Quidem ipsum dolorem excepturi expedita vero animi enim
                            praesentium?
                            Sint, fugiat!</p>
                        <small>來源 : 公司內部XX部門</small>
                    </div>
                </div>

                <div class="col">
                    <img src="pic/Common/R/r4.png" alt="">
                    <div class="textWrap">
                        <div class="cardTitle">
                            <div class="tag tagComing">即將到來</div>
                            <small>2022-05-11 11:00 ~ 13:00</small>
                        </div>
                        <h3>會議名稱 X X X X X X</h3>
                        <h5>會議地點</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum consequuntur odit dolorem
                            nulla
                            ipsa
                            animi, ullam labore quam iusto? Quidem ipsum dolorem excepturi expedita vero animi enim
                            praesentium?
                            Sint, fugiat!</p>
                        <small>來源 : 公司內部XX部門</small>
                    </div>
                </div>
            </div> -->
        </div>

        <div class="pagination"></div>
    </div>
    <div class="footer"></div>
</body>
<script src="js/common.js"></script>
<script>
    // let meetingBtn = document.querySelector(".meetingBtn");
    // meetingBtn.addEventListener("click", function (e) {
    //     window.location = "news.html";
    // })
    // let workBtn = document.querySelector(".workBtn");
    // workBtn.addEventListener("click", function (e) {
    //     window.location = "work.html";
    // })
    // let backBtn = document.querySelector(".top .left img");
    // if (backBtn) {
    //     backBtn.addEventListener("click", function (e) {
    //         window.location.href = "MedicalArea.html";
    //     }, false)
    // }
    document.querySelector(".RWDIcon img").addEventListener("click", function(e) {
        cover.style = "display:block"
        document.querySelector(".meetingSmallCardActiveStatus").style = "display:block;animation: toggleDown .5s;animation - fill - mode: forwards;"
    }, false)
    //關閉
    let meetingSmallCardClose = document.querySelectorAll(".meetingSmallCard .title");
    meetingSmallCardClose.forEach(function(element) {
        element.addEventListener("click", function(e) {
            cover.style = "display:none"
            document.querySelectorAll(".meetingSmallCard").forEach(function(element2) {
                element2.style = "display:none"
            });
        }, false)
    })
    let backM = document.querySelector(".top .left img");
    if (backM) {
        backM.addEventListener("click", function(e) {
            window.location.href = "MedicalArea.html";
        }, false)
    }

    //圖片錯誤
    let errorImg = document.querySelectorAll(".errorImg")
    errorImg.forEach(function(element) {
        element.addEventListener("error", function(e) {
            element.src = "pic/Common/R/r3.png"
        }, false)
    })

    //即將到來
    let CardTag = document.querySelectorAll(".card .tag")
    if (CardTag) {
        CardTag.forEach(function(element) {
            if (element.textContent == "即將到來") {
                element.classList.add("tagComing")
            }
        })
    }


    let card = document.querySelectorAll(".cardGroup .card");
    if (card) {
        card.forEach(function(element) {
            element.addEventListener("click", function(e) {
                window.location.href = "meetingCommon.php?i=" + element.dataset.id;
            }, false)
        })
    }
</script>

</html>