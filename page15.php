<?php
include 'db/db.php';
$sqlR = "SELECT * FROM `article` WHERE `topicSec` = '腸癌治療' AND `publish` = 1 ORDER BY id DESC LIMIT 0 , 3 ";
$resR = mysqli_query($connect, $sqlR);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>社會資源</title>

    <link rel="p reconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@300;400;500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/article.css">

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <style>
        .pic {

            text-align: center;
        }

        .pic img {
            width: 60%;
        }

        .bigIcon img {
            width: 368px;
        }

        .pic h5 {
            font-family: 'Kiwi Maru';
            font-style: normal;
            font-weight: 500;
            font-size: 32px;
            line-height: 46px;
            text-align: center;
            color: #424452;
            margin-bottom: 80px;
        }

        .article {
            max-width: 740px;
        }

        @media screen and(max-width:576px) {
            .content .article .hideHR {
                display: none;
            }
        }
    </style>
</head>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

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

    <div class="RWDTop">
        <img src="pic/Common/backS.svg" alt="">
        <h3>社會資源</h3>
    </div>

    <div class="RWDArrow">
        <img src="pic/Common/arrowTop.svg" alt="">
    </div>

    <div class="topic">
        <div class="text">
            <h3>5. 腸癌照護</h3>
            <h1>社會資源</h1>
        </div>

        <div class="bigIcon">
            <img src="pic/page15/page15_bigIcon.svg" alt="">
        </div>
    </div>



    <div class="wrap">
        <div class="article">

            <div class="content">
                <div class="back">
                    <img src="pic/Common/back.svg" alt="">
                    <!-- <small>資訊來源：門諾醫院癌症中心 陳儀瑾臨床心理師</small> -->
                </div>
                <div class="hr"></div>
                <div class="pic">
                    <img src="pic/Common/Error.svg" alt="">
                    <h5>建置中...</h5>
                </div>
            </div>



            <!-- 
            <div class="fans">
                <a href="#"><img src="pic/Common/line.svg" alt=""></a>

                <a href="#"><img src="pic/Common/facebook.svg" alt=""></a>
            </div> -->

            <div class="hr hideHR"></div>
            <div class="LR">
                <div class="previous">
                    <a href="page14.php">
                        <img src="pic/Common/previous.svg" alt="">
                        <h4>心理健康</h4>
                    </a>

                </div>
                <div class="next">
                    <a href="page16.php">
                        <img src="pic/Common/next.svg" alt="">
                        <h4>癌症資源中心</h4>
                    </a>
                </div>
            </div>
            <div class="hr hideHR"></div>


        </div>

        <div class="catelog">
            <div class="catelogTab"></div>
            <div class="relatedArticles">
                <h2>相關文章</h2>
                <div class="cardGroup">
                    <?php foreach ($resR as $article) {
                        echo '
                    <div class="card" data-id="' . $article['id'] . '">
                            <img class="relatedImg" src="' . $article['articlePath'] . '" alt="">
                            <div class="cardText">
                                <div class="tag">' . $article['topicSec'] . '</div>
                                <div class = "relatedTitle">' . $article['title'] . '</div>
                                <div class = "relatedContent">' . $article['content'] . '</div>
                            </div>
                    </div>
                    ';
                    }
                    ?>
                </div>
            </div>


        </div>

    </div>

    <div class="menuArticleSmall">
        <div class="menuArticleSmallBtnGroup">
            <img class="homeS" src="pic/Common/menuArticleSmallBtn1.svg" alt="">
            <img class="sourceS" src="pic/Common/menuArticleSmallBtn2.svg" alt="">
            <img class="catelogS" src="pic/Common/menuArticleSmallBtn3.svg" alt="">
        </div>
    </div>

    <div class="fansCard"></div>
    <div class="catelogCard"></div>

    <div class="footer">

    </div>
</body>
<script src="js/common.js"></script>
<script src="js/article.js"></script>
<script>
    let title = document.querySelector(".topic h3");
    let titleSec = document.querySelector(".topic h1")
    let cateloggTitle = document.querySelectorAll(".catelogg .title");
    let cateloggTitleH3 = document.querySelectorAll(".catelogg .title h3");
    let catelogA = document.querySelectorAll(".catelogg ul a")
    if (cateloggTitle) {
        //點擊反應
        cateloggTitle.forEach(function(element) {
            element.addEventListener("click", function(e) {

                let thisImg = element.children[1].children[0]
                let thisUl = element.parentNode.children[1];
                if (thisUl.style.display == "block") {
                    thisUl.style = "display:none";
                    thisImg.src = "pic/Common/plus.svg"
                } else {
                    thisUl.style = "display:block"

                    thisImg.src = "pic/Common/minus.svg"

                }

            }, false)
        });

        //抓標題加上Active
        cateloggTitleH3.forEach(function(element) {
            console.log(element.textContent);
            console.log(title.textContent);
            if (element.textContent.trim() == title.textContent.trim()) {
                element.classList.add("titleActive")
                element.click();
            }

        })
        //抓副標題
        catelogA.forEach(function(element) {

            if (element.textContent.trim() == titleSec.textContent.trim()) {
                element.classList.add("titleSecActive")
            }
        })
    }
</script>

</html>