<?php
include  'db/db.php';
$topicSec   = $_GET['topicSec'];
$sql = "SELECT * FROM `article` Where `publish` = 1 ORDER BY id DESC";
$res = mysqli_query($connect, $sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title><?php echo $topicSec ?> </title> -->
    <title></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@300;400;500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/article.css">
    <style>
        * {
            box-sizing: border-box;
        }


        .wrap {
            max-width: 1200px;
        }

        .top {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            flex-wrap: wrap;

        }

        .top .option {
            width: 100%;
            display: flex;
            justify-content: space-between;
        }

        h1 {
            display: block;
            width: 100%;
        }

        .option input {
            background: #F0EBE3;
            border-radius: 40px;
        }

        .inputTextGroup {
            position: relative;
        }

        .inputTextGroup input {
            width: 368px;
            height: 54px;
            background: #F0EBE3;
            border-radius: 40px;
            padding-left: 15%;
            border: none;
        }

        .inputTextGroup img {
            position: absolute;
            left: 5%;
            top: 50%;
            transform: translateY(-50%);
        }





        .articleGroup {
            max-width: 1200px;
            margin: 0 auto;
            padding-top: 60px;
        }

        .articleGroup .article {

            flex-wrap: wrap;
        }

        .articleGroup .article:hover {
            cursor: pointer;
        }

        .articleGroup h1 {
            width: 100%;
            font-weight: 500;
            font-size: 80px;
            line-height: 94px;
            letter-spacing: 0.04em;
            color: #424452;
        }

        .articleGroup .group {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;

        }

        .articleGroup .article .left {
            width: 100%;
        }

        .articleGroup .article .right {
            width: 100%;
        }

        .articleGroup a {
            /* text-decoration: none; */
        }

        .articleGroup .article {
            display: flex;
            cursor: pointer;
            width: 30%;
            margin-top: 40px;
            background: #FFFFFF;
            border: 1px solid #ECECEC;
            border-radius: 8px;
            max-height: 523px;
            overflow: hidden;

        }

        .articleGroup .article .left img {
            height: 240px;
            width: 100%;
        }


        .articleGroup .article .right {
            padding: 2rem;
            width: 80%;
        }

        .articleGroup .article .right .tag {
            background: #FFFFFF;
            border: 0.5px solid #424452;
            border-radius: 8px;
            font-weight: 500;
            font-size: 18px;
            text-align: center;
            letter-spacing: 0.01em;
            color: #333541;
            max-width: 112px;
            white-space: nowrap;
            padding: 3px 0;
        }

        .articleGroup .article .right h3 {
            font-weight: 500;
            font-size: 24px;
            line-height: 28px;
            letter-spacing: 0.01em;
            color: #424452;
            margin-top: 1rem;
            overflow: hidden;
            display: -webkit-box;
            text-overflow: ellipsis;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
        }

        .articleGroup .article .right .content {
            font-weight: 400;
            font-size: 18px;
            line-height: 36px;
            letter-spacing: 0.01em;
            color: #898B91;
            overflow: hidden;
            display: -webkit-box;
            text-overflow: ellipsis;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            white-space: normal;
            margin-top: 1rem;
        }

        .RWDTop {
            display: none;
        }

        .searchBox {
            position: absolute;
            top: 110%;
            box-shadow: 0px 2px 4px rgba(29, 31, 40, 0.04), 0px 8px 16px rgba(66, 68, 82, 0.16);
            border-radius: 16px;
            background-color: #fff;
            padding: 5%;
            z-index: 9999;
            width: 60%;
            max-height: 500px;
            overflow-y: scroll;
            display: none;
        }

        .searchBox ul h3 {
            font-size: 1.5rem;
            color: #424452;
            font-weight: 600;
        }

        .searchBox ul li {
            margin-top: 0.75rem;
            background-color: #efefef;
            box-shadow: 0 0 5px rgba(200, 200, 200, .2);
            border-radius: 1rem;
        }

        .searchBox ul li a {
            text-decoration: none;
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-size: 20px;
            color: #424452;
            margin: 0;
            padding: 0;
            font-size: 14px;
        }

        @media screen and (max-width:576px) {

            .RWDTop {
                display: flex;
            }

            .menu {
                display: none;
            }

            .top .option .backS {
                display: none;
            }

            .RWDTop {

                max-width: 327px;
                margin: 0 auto;
                display: block;
                padding-top: 20px;
                position: relative;
            }

            .RWDTop h3 {
                font-family: 'Roboto';
                font-style: normal;
                font-weight: 600;
                font-size: 20px;
                text-align: center;
                letter-spacing: 0.04em;
                color: #FFFFFF;
                position: absolute;
                left: 50%;
                top: 72.5%;
                transform: translate(-50%, -50%);
            }

            .top {
                margin-top: 20px;
            }

            .top .inputTextGroup {
                text-align: center;

                margin: 0 auto;
            }

            .top .option input {
                max-width: 327px;
                height: 54px;
                background: #F0EBE3;
                border-radius: 40px;
                margin: 0 auto;

            }

            .articleGroup h1 {
                font-family: 'Roboto';
                font-style: normal;
                font-weight: 600;
                font-size: 40px;
                letter-spacing: 0.04em;
                color: #424452;
            }

            .articleGroup .group {
                max-width: 327px;
                margin: 0 auto;
                flex-wrap: wrap;

            }

            .articleGroup .group .article {
                width: 100%;
                min-height: 350px;
                overflow: hidden;
            }

            .article a {
                /* flex-direction: row;
                width: 100%; */

            }

            .articleGroup .group img {
                width: 100%;
                height: 150px !important;
            }

            .article .right {
                overflow: hidden;
                display: -webkit-box;
                text-overflow: ellipsis;
                -webkit-line-clamp: 2;
                /*行數*/
                -webkit-box-orient: vertical;
                white-space: normal;
            }

            .searchBox {
                position: absolute;
                top: 110%;
                -webkit-box-shadow: 0px 2px 4px rgba(29, 31, 40, 0.04), 0px 8px 16px rgba(66, 68, 82, 0.16);
                box-shadow: 0px 2px 4px rgba(29, 31, 40, 0.04), 0px 8px 16px rgba(66, 68, 82, 0.16);
                border-radius: 16px;
                background-color: #fff;
                padding: 5%;
                z-index: 9999;
                width: 60%;
                max-height: 500px;
                overflow-y: scroll;
                display: none;
            }

            .searchBox ul h3 {
                font-size: 1.5rem;
                color: #424452;
                font-weight: 600;
            }

            .searchBox ul li {
                margin-top: 0.75rem;
                background-color: #efefef;
                -webkit-box-shadow: 0 0 5px rgba(200, 200, 200, 0.2);
                box-shadow: 0 0 5px rgba(200, 200, 200, 0.2);
                border-radius: 1rem;
            }

            .searchBox ul li a {
                text-decoration: none;
                font-family: 'Roboto';
                font-style: normal;
                font-weight: 400;
                font-size: 20px;
                color: #424452;
                margin: 0;
                padding: 0;
                font-size: 14px;
            }
        }
    </style>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <script src="include/jquery-ui-1.13.2/jquery-ui.min.js"></script>
<script src="include/jquery-ui-touch-punch-master/jquery.ui.touch-punch.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>
</head>

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
        <img class="backS" src="pic/Common/backS.svg" alt="">
        <h3>腸癌新知</h3>
    </div>

    <div class="top">
        <div class="option">
            <a href="ArticleIndex.php"><img src="pic/Common/back.svg" alt=""></a>
            <div class="inputTextGroup">
                <img src="pic/Common/search.svg" alt="">
                <input type="text" placeholder="請輸入關鍵字">
                <div class="searchBox">
                    <div class="article">
                        <h3>Article</h3>
                        <ul class="articleUl">
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>



    <div class="articleGroup">
        <h1>最新消息</h1>
        <div class="group">


            <?php
            foreach ($res as $article) {
                echo '
                    <div class="article" data-id = "' . $article['id'] . '">
                            <div class="left">
                                <img class="errorImg" src="' . $article['articlePath'] . '" alt="">
                            </div>
                            <div class="right">
                                <div class="tag">' . $article['topicSec'] . '</div>
                                <h3>' . $article['title'] . '</h3>
                                <div class="content">'  . $article['content'] . '</div>
                            </div>
                    </div>
                ';
            }
            ?>


        </div>

        <div class="pagination">
            <div class="numberGroup"></div>
            <div class="next">
                <img src="pic/Common/next.svg" alt="">
            </div>
        </div>


    </div>
    <div class="footer"></div>




</body>


<script src="js/common.js"></script>
<script src="js/article.js"></script>

<script>
    //搜尋
    let searchInput = document.querySelector(".option .inputTextGroup input");
    let searchStr = "";
    $(document).ready(function() {
        $(".option .inputTextGroup input").keyup(function(e) {

            let value = $(this).val().trim();
            console.log(value);
            if (value != "") {
                $(".searchBox").show();
            } else {
                $(".searchBox").hide();
            }

            $.ajax({
                type: "POST",
                url: "system/ArticleIndexSearch.php",
                data: {
                    "str": value,
                },
                success: function(response) {
                    let arrayRes = response.split(',')
                    let arrayStr = "";
                    for (let i = 0; i < arrayRes.length - 1; i++) {
                        arrayStr += arrayRes[i]
                    }
                    let articleUl = document.querySelectorAll(".searchBox .articleUl");
                    if (articleUl) {
                        articleUl.forEach(function(element) {
                            element.innerHTML = arrayStr
                        }, false)
                    }
                    console.log(arrayStr);
                }
            });
            // let articleTitle = document.querySelectorAll(".articleGroup .article .right")
            // let articleULStr = ``;
            // articleTitle.forEach(function(element) {

            //     let idd = element.dataset.id;
            //     if (element.children[1].textContent.includes(value, 1) == true || element.children[2].textContent.includes(value, 1) == true) {
            //         articleULStr += `<li><a href="ArticleCommon.php?i=${idd}">${element.children[1].textContent}</a></li>`;
            //     }
            //     console.log();
            // })
            // document.querySelector(".articleUl").innerHTML = articleULStr

        })
    });

    let group = document.querySelector(".articleGroup .group")
    let article = document.querySelectorAll(".articleGroup .article");
    let paginationNum = Math.ceil(article.length / 10);
    let paginationNumStr = "";
    let numberGroup = document.querySelector(".numberGroup");
    //製造分頁
    for (let i = 1; i <= paginationNum; i++) {
        paginationNumStr += `<div class="number">
    <h5>${i}</h5>
    </div>`
    }
    numberGroup.innerHTML = paginationNumStr;

    //新增article上去
    let numberBtn = document.querySelectorAll(".numberGroup .number")

    numberBtn.forEach(function(element, index) {
        //分頁Active
        element.addEventListener("click", function(e) {
            e.preventDefault();
            numberBtn.forEach(function(element) {
                element.classList.remove("numberActive")
            });
            element.classList.add("numberActive")

            let ArticleStr = "";
            for (let i = index; i < index + 10; i++) {
                let n = i + index * 9
                if (article[n]) {
                    ArticleStr += `${article[n].outerHTML}`
                }
            }
            group.innerHTML = ArticleStr


            //文章點
            let articleN = document.querySelectorAll(".articleGroup .article");
            articleN.forEach(function(element) {
                element.addEventListener("click", function(e) {
                    window.location.href = "ArticleCommon.php?i=" + element.dataset.id;
                }, false)
            }, false)

            //圖片錯誤
            let errorImg = document.querySelectorAll(".errorImg")
            errorImg.forEach(function(element) {
                element.addEventListener("error", function(e) {
                    element.src = "pic/Common/R/r2.png"
                }, false)
            })

        }, false)
    })

    numberBtn[0].click();

    let backSImg = document.querySelector(".RWDTop img")
    if (backSImg) {
        backSImg.addEventListener("click", function(e) {
            window.location.href = "ArticleIndex.php";
        }, false)
    }
</script>




</html>