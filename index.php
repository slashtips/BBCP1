<?php
include  'db/db.php';
$sqlGA = "SELECT * FROM `GACode`";
$resGA = mysqli_query($connect, $sqlGA);
$rowGA = mysqli_fetch_array($resGA);
?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>腸癌易點通</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@300;400;500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/common.css">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
</head>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>


<script src="include/jquery-ui-1.13.2/jquery-ui.min.js"></script>
<script src="include/jquery-ui-touch-punch-master/jquery.ui.touch-punch.js"></script>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script> -->

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $rowGA['CodeID'] ?>"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', '<?php echo $rowGA['CodeID'] ?>');
</script>

<body>
    <div class="cover"></div>
    <div class="menu"></div>

    <div class="alert">
        <img src="pic/Common/tags.png" alt="">
        <h6></h6>
    </div>

    <div class="cookie">

    </div>

    <div class="bgWrap">

        <div class="bg">
            <img class="opa0Img" src="pic/index/bg/back1.svg" alt="">
            <div class="topicc">
                <div class="tp tp1">
                    <img class="tp1" src="pic/index/bg/topic1.svg" alt="">
                    <input type="button" class="tpBtn tp1Btn" value="1.症狀察覺">
                </div>

                <div class="tp tp2">
                    <img class="tp2" src="pic/index/bg/topic2.svg" alt="">
                    <input type="button" class="tpBtn tp2Btn" value="2.疾病診斷">
                </div>

                <div class="tp tp3">
                    <img class="tp3" src="pic/index/bg/topic3.svg" alt="">
                    <input type="button" class="tpBtn tp3Btn" value="3.治療種類">
                </div>

                <div class="tp tp4">
                    <img class="tp4" src="pic/index/bg/topic4.svg" alt="">
                    <input type="button" class="tpBtn tp4Btn" value="4.後續追蹤">
                </div>

                <div class="tp tp5">
                    <img class="tp5" src="pic/index/bg/topic5.svg" alt="">
                    <input type="button" class="tpBtn tp5Btn" value="5.腸癌照護">
                </div>
            </div>
        </div>

    </div>
    <div class="bgWrapSm">
        <img src="pic/index/bg/bgSm.svg" alt="">
        <div class="tpGroup">
            <div class="tp1">
                <img src="pic/index/bg/topic1.svg" alt="">
                <input type="button" class="tpBtn tp1Btn" value="1.症狀察覺">
            </div>
            <div class="tp2">
                <img src="pic/index/bg/topic2.svg" alt="">
                <input type="button" class="tpBtn tp1Btn" value="2.疾病診斷">
            </div>
            <div class="tp3">
                <img src="pic/index/bg/topic3.svg" alt="">
                <input type="button" class="tpBtn tp1Btn" value="3.治療種類">
            </div>
            <div class="tp4">
                <img src="pic/index/bg/topic4.svg" alt="">
                <input type="button" class="tpBtn tp1Btn" value="4.後續追蹤">
            </div>
            <div class="tp5">
                <img src="pic/index/bg/topic5.svg" alt="">
                <input type="button" class="tpBtn tp1Btn" value="5.腸癌照護">
            </div>
        </div>
    </div>

    <div class="cover"></div>
    <div class="loginH"></div>
    <div class="OutHref"></div>
    <div class="questionSelectCard">
        <!-- <div class="title">
            <h3>已選問題 5/5</h3>
            <img src="pic/Common/cancel.png" alt="">
        </div>
        <div class="questionListGroup">
            <div class="questionList">
                <h4>我的診斷是什麼？</h4>
                <img src="pic/Common/remove.png" alt="">
            </div>
            <div class="questionList">
                <h4>為什麼要做基因檢測?</h4>
                <img src="pic/Common/remove.png" alt="">
            </div>
            <div class="questionList">
                <h4>我可以接受哪些治療？</h4>
                <img src="pic/Common/remove.png" alt="">
            </div>
            <div class="questionList">
                <h4>我年紀大了，會建議開刀嗎?</h4>
                <img src="pic/Common/remove.png" alt="">
            </div>
            <div class="questionList">
                <h4>什麼情況下建議做化療?我的情況建議做嗎？</h4>
                <img src="pic/Common/remove.png" alt="">
            </div>
        </div>
        <div class="btnGroup">
            <input type="button" value="關閉">
        </div> -->
    </div>

    <div class="questionAsk"></div>
    <!-- 
            <div class="questionCompletedCard">
                <div class="title">
                <small>就醫提問單</small>
                <img src="pic/Common/cancelWhite.png" alt="">
            </div>
            <h3>結果</h3>
            <small>填寫時間：2022.03.21 14:23:54</small>
            <div class="bigIcon">
                <img src="pic/Common/CommonCard/bigIcon4.png" alt="">
            </div>
            <div class="result">
                <div class="resultTitle">
                    <h5>一. 在意程度</h5>
                    <p>關於癌症治療，我在意的程度是：（排序分數越低代表越在意）</p>
                </div>
                <div class="resultRank">
                    <div class="col">No.1 健保是否給付</div>
                    <div class="col">No.2 需要額外自費</div>
                    <div class="col">No.3 治療的效果</div>
                    <div class="col">No.4 治療的副作用</div>
                    <div class="col">No.5 生活品質</div>
                </div>
            </div>

            <div class="result">
                <div class="resultTitle">
                    <h5>二. 在意問題</h5>
                    <p>關於癌症治療，我在意的問題是：</p>
                </div>
                <div class="resultRank">
                    <div class="col">我的診斷是什麼？</div>
                    <div class="col">為什麼要做基因檢測?</div>
                    <div class="col">我可以接受哪些治療？</div>
                    <div class="col">我年紀大了，會建議開刀嗎?</div>
                    <div class="col">什麼情況下建議做化療?我的情況建議做嗎？</div>
                </div>
            </div>
            <div class="btnGroup">
                <input type="button" value="返回首頁" name="" id="">
            </div>
        </div>
    </div>
    
    <div class="questionCard">
        <div class="title">
            <small>就醫提問單</small>
            <img src="pic/Common/cancelWhite.png" alt="">
        </div>
        <h3>Hello</h3>
        <p>就醫提問單的簡單介紹，就醫提問單的簡單介紹，就醫提問單的簡單介紹。</p>
        <div class="bigIcon">
            <img src="pic/Common/questionBigIcon.png" alt="">
        </div>
        <div class="questionBtnGroup">
            <input type="button" value="開始提問">
        </div>
    </div>
    <div class="askQuestionCard">
        <div class="title">
            <small>就醫提問單</small>
            <img src="pic/Common/cancelWhite.png" alt="">
        </div>
        <div class="radioGroup">
            <input type="radio" class="radioActive">
            <input type="radio">
        </div>

        <form action="">
            <div class="frame1">
                <div class="title2">
                    <h4>在意程度</h4>
                    <small>為了幫助您更了解大腸癌的相關問題，請回答以下資訊：</small>
                </div>

                <h5>A. 自我評估</h5>
                <p>再進行治療選擇時，請評估對下面各面向您在意的程度點選分數。（五分最在意）</p>
                <div class="question question1">
                    <label for="">1. 治療的效果</label>
                    <div class="btnGroup">
                        <input class="btnActive" type="button" name="question1" value="1">
                        <input type="button" name="question1" value="2">
                        <input type="button" name="question1" value="3">
                        <input type="button" name="question1" value="4">
                        <input type="button" name="question1" value="5">
                    </div>
                    <div class="smallGroup">
                        <small>非常不在意</small>
                        <small>普通</small>
                        <small>非常在意</small>
                    </div>
                </div>
                <div class="question question2">
                    <label for="">2. 健保是否給付</label>
                    <div class="btnGroup">

                        <input type="button" name="question2" value="1">
                        <input class="btnActive" type="button" name="question2" value="2">
                        <input type="button" name="question2" value="3">
                        <input type="button" name="question2" value="4">
                        <input type="button" name="question2" value="5">
                    </div>
                    <div class="smallGroup">
                        <small>非常不在意</small>
                        <small>普通</small>
                        <small>非常在意</small>
                    </div>
                </div>
                <div class="question question3">
                    <label for="">3. 需要額外自費</label>
                    <div class="btnGroup">

                        <input type="button" name="question3" value="1">
                        <input type="button" name="question3" value="2">
                        <input class="btnActive" type="button" name="question3" value="3">
                        <input type="button" name="question3" value="4">
                        <input type="button" name="question3" value="5">
                    </div>
                    <div class="smallGroup">
                        <small>非常不在意</small>
                        <small>普通</small>
                        <small>非常在意</small>
                    </div>
                </div>
                <div class="question question4">
                    <label for="">4. 治療的副作用</label>
                    <div class="btnGroup">

                        <input type="button" name="question4" value="1">
                        <input type="button" name="question4" value="2">
                        <input type="button" name="question4" value="3">
                        <input class="btnActive" type="button" name="question4" value="4">
                        <input type="button" name="question4" value="5">
                    </div>
                    <div class="smallGroup">
                        <small>非常不在意</small>
                        <small>普通</small>
                        <small>非常在意</small>
                    </div>
                </div>
                <div class="question question5">
                    <label for="">5. 生活品質</label>
                    <div class="btnGroup">

                        <input type="button" name="question5" value="1">
                        <input type="button" name="question5" value="2">
                        <input type="button" name="question5" value="3">
                        <input type="button" name="question5" value="4">
                        <input class="btnActive" type="button" name="question5" value="5">
                    </div>
                    <div class="smallGroup">
                        <small>非常不在意</small>
                        <small>普通</small>
                        <small>非常在意</small>
                    </div>
                </div>


                <h5>B. 優先排序</h5>
                <p>進行治療選擇時，請依照在意程度手動排序下方的相關面向。長按項目重新排序，最在意的項目在上，最不在意的項目在下。</p>
                <div class="rank">
                    <div class="rankBtn">
                        <div class="text">
                            <div class="circle">1</div>
                            <div class="h4">健保是否給付</div>
                        </div>
                        <img src="pic/Common/barTwo.png" alt="">
                    </div>
                    <div class="rankBtn">
                        <div class="text">
                            <div class="circle">2</div>
                            <div class="h4">需要額外自費</div>
                        </div>
                        <img src="pic/Common/barTwo.png" alt="">
                    </div>
                    <div class="rankBtn">
                        <div class="text">
                            <div class="circle">3</div>
                            <div class="h4">治療的效果</div>
                        </div>
                        <img src="pic/Common/barTwo.png" alt="">
                    </div>
                    <div class="rankBtn">
                        <div class="text">
                            <div class="circle">4</div>
                            <div class="h4">生活品質</div>
                        </div>
                        <img src="pic/Common/barTwo.png" alt="">
                    </div>
                    <div class="rankBtn">
                        <div class="text">
                            <div class="circle">5</div>
                            <div class="h4">治療的副作用</div>
                        </div>
                        <img src="pic/Common/barTwo.png" alt="">
                    </div>
                </div>
                <div class="BtnGroup">
                    <input type="button" value="下一步">
                </div>
            </div>
            <div class="frame2">
                <div class="title2">
                    <h4>在意問題</h4>
                    <small>針對問卷回饋，我們已整理出相關的問題，請選擇您目前最急迫想知道的問題（最多可選擇 5 題）</small>
                </div>
                <div class="question question1">
                    <h6 for="">1. 篩檢與分期</h6>
                    <div class="checkboxGroup">
                        <div class="chechbox">
                            <input type="checkbox">
                            <label for="">我的診斷是什麼 ? </label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox">
                            <label for="">我是屬於哪一期的？ </label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox">
                            <label for="">癌指數(CEA)是什麼? </label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox">
                            <label for="">癌症是否已轉移？如果是，轉移到哪裡？ </label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox">
                            <label for="">目前在台灣，罹患腸癌的年齡有越來越年輕的趨勢嗎？ </label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox">
                            <label for="">年輕就罹患腸癌的患者是不是存活率較差?</label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox">
                            <label for="">年紀大的人得腸癌，治療上有什麼不一樣？ </label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox">
                            <label for="">如果得了腸癌延誤治療或放著不管，會怎麼樣？ </label>
                        </div>

                    </div>
                </div>

                <div class="question question2">
                    <h6 for="">2. 精準醫療</h6>
                    <div class="checkboxGroup">
                        <div class="chechbox">
                            <input type="checkbox">
                            <label for="">為什麼要做基因檢測? </label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox">
                            <label for="">K-RAS基因檢測是做什麼用的? </label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox">
                            <label for="">基因檢測的流程有哪些? 報告會很久才出來嗎? </label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox">
                            <label for="">如果我想得到最好的治療，有哪些重點是需要掌握的？ </label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox">
                            <label for="">醫生是如何為我擬定治療計畫的？ </label>
                        </div>


                    </div>
                </div>

                <div class="hr"></div>
                <h5>B. 開始接受治療</h5>

                <div class="question question3">
                    <h6 for="">1. 討論治療選擇</h6>
                    <div class="checkboxGroup">
                        <div class="chechbox">
                            <input type="checkbox">
                            <label for="">我可以接受哪些治療？ </label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox">
                            <label for="">我的治療如何進行？多久作一次？需持續多久？ </label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox">
                            <label for="">我需要改變生活作息嗎(例如:可以繼續上班嗎？)如果需要改變，要多久？</label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox">
                            <label for="">治療的花費健保是否給付？需自費多少？ </label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox">
                            <label for="">是否有新的療法？臨床試驗適合我嗎？ </label>
                        </div>
                    </div>
                </div>

                <div class="question question4">
                    <h6 for="">2. 手術治療</h6>
                    <div class="checkboxGroup">
                        <div class="chechbox">
                            <input type="checkbox">
                            <label for="">我年紀大了，會建議開刀嗎? </label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox">
                            <label for="">手術前的注意事項有哪些? </label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox">
                            <label for="">手術切除直腸後，常見的術後緩解方法有?</label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox">
                            <label for="">什麼事腸造口? 如何照顧? </label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox">
                            <label for="">什麼狀況下須裝置永久腸造口? </label>
                        </div>

                        <div class="chechbox">
                            <input type="checkbox">
                            <label for="">什麼狀況下須裝置臨時腸造口? 多久可以關閉? </label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox">
                            <label for="">什麼狀況下須裝置人工血管? </label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox">
                            <label for="">腸造口本身一定會有異味嗎?</label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox">
                            <label for="">腸造口的腸變小是正常的嗎?</label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox">
                            <label for="">做完手術是否不能飲食?或只吃流質呢?</label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox">
                            <label for="">腸術前/術後如何調整飲食? 基本觀念為何?</label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox">
                            <label for="">裝置人工肛門的患者，飲食上有沒有什麼禁忌呢?</label>
                        </div>
                    </div>
                </div>

                <div class="question question5">
                    <h6 for="">3. 化學治療</h6>
                    <div class="checkboxGroup">
                        <div class="chechbox">
                            <input type="checkbox">
                            <label for="">什麼情況下建議做化療?我的情況建議做嗎？</label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox">
                            <label for="">切腸手術之後，一般須等多久才建議開始化療?</label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox">
                            <label for="">臨常見的腸癌化療藥物有哪些？</label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox">
                            <label for="">化療常見的副作用有哪些? 會持續多久? </label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox">
                            <label for="">如果我做化療，會搭配其他治療一起做嗎?</label>
                        </div>

                        <div class="chechbox">
                            <input type="checkbox">
                            <label for="">化療過程中帶來的不舒服要怎麼減輕？有辦法避免嗎？ </label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox">
                            <label for="">手足症候群是什麼？如果發生了要怎麼處理？</label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox">
                            <label for="">療程結束後何時移除人工血管比較好？</label>
                        </div>
                    </div>
                </div>

                <div class="question question6">
                    <h6 for="">4. 放射性治療</h6>
                    <div class="checkboxGroup">
                        <div class="chechbox">
                            <input type="checkbox">
                            <label for="">什麼是腸癌放射線治療？哪些人需要做?</label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox">
                            <label for="">放射線治療期間我應該注意什麼呢?</label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox">
                            <label for="">放射線治療常見副作用和照護?</label>
                        </div>

                    </div>
                </div>

                <div class="question question7">
                    <h6 for="">5. 標靶治療</h6>
                    <div class="checkboxGroup">
                        <div class="chechbox">
                            <input type="checkbox">
                            <label for="">何時會用到標靶治療?</label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox">
                            <label for="">常見腸癌的標靶藥物有哪些? 療效如何?</label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox">
                            <label for="">標靶治療會有哪些副作用呢? 該如何照護?</label>
                        </div>

                        <div class="chechbox">
                            <input type="checkbox">
                            <label for="">療程中如何知道標靶藥失效或出現抗藥性？如果出現了就是復發嗎？</label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox">
                            <label for="">生物相似藥是什麼？</label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox">
                            <label for="">生物相似藥效果和原廠藥品一樣嗎?</label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox">
                            <label for="">療程中被換藥我會知道嗎? 我可以選擇嗎? 該注意什麼?</label>
                        </div>

                    </div>
                </div>

                <div class="question question8">
                    <h6 for="">6. 免疫療法</h6>
                    <div class="checkboxGroup">
                        <div class="chechbox">
                            <input type="checkbox">
                            <label for="">什麼是免疫療法?</label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox">
                            <label for="">什麼狀況下我可以考慮接受免疫療法嗎?</label>
                        </div>


                    </div>
                </div>

                <h5>C. 結束治療</h5>
                <div class="question question9">
                    <h6 for="">治療後的照護</h6>
                    <div class="checkboxGroup">
                        <div class="chechbox">
                            <input type="checkbox">
                            <label for="">要多久追蹤一次?</label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox">
                            <label for="">如何預防復發?</label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox">
                            <label for="">大腸癌術後復健運動建議?</label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox">
                            <label for="">有造口要怎麼辦? 如何照護?</label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox">
                            <label for="">治療後的飲食如何吃呢? 營養該如何維持?</label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox">
                            <label for="">市面上癌症營養品如何挑選? 使用原則是什麼?</label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox">
                            <label for="">裝置人工肛門的患者，飲食上有沒有什麼禁忌呢?</label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox">
                            <label for="">我能夠吃中藥或是保健食品嗎?</label>
                        </div>
                        <div class="chechbox">
                            <input type="checkbox">
                            <label for="">吃素的癌友對於營養品友那些選擇?</label>
                        </div>


                    </div>
                </div>

                <div class="btnGroup">
                    <input type="button" value="上一步">
                    <input type="button" class="c2" value="下一步">
                </div>
            </div>
        </form> -->
    <!-- </div> -->



    <div class="register"></div>

    <div class="commonCard openPass"></div>
    <div class="commonCard forgetPassword"></div>

    <div class="commonCard vertifyCode">
        <img class="bigIcon" src="/pic/Common/CommonCard/bigIcon2.png" alt="">
        <div class="textContent">
            <div class="title">
                <h3>輸入驗證碼</h3>
                <img src="pic/Common/cancel.png" alt="">
            </div>
            <p>我們已將驗證碼寄到您的信箱，請查收信件並在下方輸入驗證碼。</p>
            <div class="vertify">
                <label for="text">驗證碼 *</label>
                <input type="text" placeholder="例 : 123456">
            </div>
            <div class="inputGroup">
                <input class="inputGroupC2 " type="submit" value="送出">
            </div>
        </div>
    </div>

    <div class="commonCard setNewPassword">
        <img class="bigIcon" src="/pic/Common/CommonCard/bigIcon3.png" alt="">
        <div class="textContent">
            <div class="title">
                <h3>設置新密碼</h3>
                <img src="pic/Common/cancel.png" alt="">
            </div>
            <p>請輸入新密碼，作為未來登入使用。</p>
            <div class="password">
                <label for="NewPassword">新密碼 *</label>
                <input id="NewPassword" type="password" placeholder="例 : * * * * * *">
                <small>* 密碼必須包含英文字母和數字</small>
                <small>* 六位數以上</small>
            </div>
            <div class="password">
                <label for="NewPasswordAgain">再次輸入新密碼 *</label>
                <input id="NewPasswordAgain" type="password" placeholder="例 : * * * * * *">
            </div>
            <div class="inputGroup">
                <input class="inputGroupC2 " type="submit" value="確定">
            </div>
        </div>
    </div>

    <div class="commonCard setNewPasswordCompleted">
        <img class="bigIcon" src="/pic/Common/CommonCard/bigIcon4.png" alt="">
        <div class="textContent">
            <div class="title">
                <h3>密碼設置完成</h3>
                <img src="pic/Common/cancel.png" alt="">
            </div>
            <p>密碼已重設成功！請用新密碼重新登入。</p>
            <div class="inputGroup">
                <input class="inputGroupC2" type="button" value="重新登入">
            </div>
        </div>
    </div>

    <div class="commonCardSmall loginSmall">
        <!-- <div class="commonTitleSmall">
            <h3>醫療人員登入</h3>
            <img src="pic/Common/cancel.png" alt="">
        </div>
        <form action="" class="loginFormSmall">
            <div class="emailSmall">
                <label for="emailSmall">Email信箱 * </label>
                <input name="email" type="email" id="emailSmall" placeholder="例 : example.com">
            </div>
            <div class="passwordSmall">
                <label for="passwordSmall">密碼 *</label>
                <input name="password" type="text" placeholder="例 : * * * * * *">
            </div>
            <div class="hintSmall">
                <div class="checkboxGroup">
                    <input type="checkbox" id="rememberSmall">
                    <label for="rememberSmall">記住我</label>
                </div>
                <a class="loginSmallForgetLink" href="#">忘記密碼</a>
            </div>
            <input class="smallBtn smallc2 loginSmallBtnLogin" type="submit" value="登入">
            <div class="hr"></div>
            <input class="smallBtn smallc1 loginSmallBtnRegister" type="button" value="立即註冊">
            <small>初次使用本網站的醫護人員，請先用醫院信箱註冊帳號。</small>
        </form> -->
    </div>

    <div class="commonCardSmall registerSmall">
        <!-- <div class="commonTitleSmall">
            <h3>醫療人員註冊</h3>
            <img src="pic/Common/cancel.png" alt="">
        </div>
        <h4>請用醫院信箱完成註冊。</h4>
        <form action="">
            <div class="firstNameSmall">
                <label for="firstNameSmall">姓氏*</label>
                <input type="text" placeholder="例 : 王">
            </div>
            <div class="lastNameSmall">
                <label for="lastNameSmall">名字*</label>
                <input type="text" placeholder="例 : 小明">
            </div>
            <div class="emailSmall">
                <label for="emailSmall">Email信箱 * </label>
                <input type="email" id="emailSmall" placeholder="例 : example.com">
            </div>
            <div class="passwordSmall">
                <label for="passwordSmall">密碼 *</label>
                <input class="password1" type="text" placeholder="例 : * * * * * *">

                <div class="hint">
                    <img src="pic/Common/Register/!.png" alt="">
                    <small class="hint"></small>
                </div>

            </div>

            <div class="checkPasswordSmall">
                <label for="checkPasswordSmall">確認密碼 *</label>
                <input class="password2" id="checkPasswordSmall" type="text" placeholder="例 : * * * * * *">
            </div>

            <div class="smallBtnGroup">
                <input class="smallBtn smallc2 " type="button" value="返回登入">
                <input class="smallBtn smallc1 loginSmallBtn" type="button" value="立即註冊">
            </div>
        </form> -->
    </div>

    <div class="commonCardSmall openPassSmall">
        <!-- <div class="commonTitleSmall">
            <h3>開通帳號</h3>
            <img src="pic/Common/cancel.png" alt="">
        </div>
        <div class="bigIcon">
            <img src="pic/Common/CommonCard/bigIcon1.png" alt="">
        </div>
        <p>我們已將帳號開通連結傳至您的信箱，請查收信件並點擊該連結，即可開通帳號完成註冊流程。</p>
        <input type="button" class="smallc2" value="關閉"> -->
    </div>

    <div class="commonCardSmall registerCompletedSmall">
        <!-- <div class="commonTitleSmall">
            <h3>註冊完成</h3>
            <img src="pic/Common/cancel.png" alt="">
        </div>
        <div class="bigIcon">
            <img src="pic/Common/CommonCard/bigIcon4.png" alt="">
        </div>
        <p>我們已將帳號開通連結傳至您的信箱，請查收信件並點擊該連結，即可開通帳號完成註冊流程。</p>
        <input type="button" class="smallc2" value="醫護專區"> -->
    </div>


    <div class="commonCardSmall forgetPasswordSmall">
        <!-- <div class=" commonTitleSmall">
            <h3>忘記密碼</h3>
            <img src="pic/Common/cancel.png" alt="">
        </div>
        <h4>確定要重設密碼？您需要先輸入註冊信箱來完成重設流程。</h4>
        <form action="">
            <div class="emailSmall">
                <label for="emailSmall">Email信箱 * </label>
                <input type="email" id="emailSmall" placeholder="例 : example.com">
            </div>
            <div class="smallBtnGroup">
                <input class="smallBtn  smallc1" type="button" value="返回登入">
                <input class="smallBtn smallc2 loginSmallBtn" type="button" value="寄送驗證碼">
            </div>
        </form> -->
    </div>

    <div class="commonCardSmall verificationCode">
        <!-- <div class=" commonTitleSmall">
            <h3>輸入驗證碼</h3>
            <img src="pic/Common/cancel.png" alt="">
        </div>
        <h4>我們已將驗證碼寄到您的信箱，請查收信件並在下方輸入驗證碼。</h4>
        <form action="">
            <div class="Vertify">
                <label for="Vertify">驗證碼 * </label>
                <input type="text" id="Vertify" placeholder="例 : 1 2 3 4 5 6">
            </div>
            <input class="smallc2" type="submit" value="送出">
        </form> -->
    </div>

    <div class="commonCardSmall setNewPasswordSmall">
        <!-- <div class=" commonTitleSmall">
            <h3>設置新密碼</h3>
            <img src="pic/Common/cancel.png" alt="">
        </div>
        <h4>請輸入新密碼，作為未來登入使用。</h4>
        <form action="">
            <div class="password">
                <label for="password">新密碼 * </label>
                <input type="password" id="password" placeholder="例 : 1 2 3 4 5 6">
                <br><br>
                <small>・密碼必須包含英文字母和數字</small>
                <br>
                <small>・六位數以上</small>
            </div>

            <div class="NewPasswordAgain">
                <label for="NewPasswordAgain">再次輸入新密碼 *</label>
                <input id="NewPasswordAgain" type="password" placeholder="例 : * * * * * *">
            </div>

            <input class="smallc2" type="submiIt" value="確定">
        </form> -->
    </div>


    <div class="commonCardSmall setNewPasswordCompletedSmall ">
        <div class="commonTitleSmall">
            <h3>密碼設置完成</h3>
            <img src="pic/Common/cancel.png" alt="">
        </div>
        <div class="bigIcon">
            <img src="pic/Common/CommonCard/bigIcon4.png" alt="">
        </div>
        <p>密碼已重設成功！請用新密碼重新登入。</p>
        <input type="button" class="smallc2" value="重新登入">
    </div>

    <div class="footer"></div>


    <div class="menu1">
        <!-- <div class="wrap">
            <h3>主要選單</h3>
            <div class="hr"></div>
            <ul>
                <li><a href="ArticleIndex.html">腸癌新知</a><img src="pic/index/right.png" alt=""></li>
                <li><a href="#">最新消息</a><img src="pic/index/right.png" alt=""></li>
                <li><a href="#">常見問題</a><img src="pic/index/right.png" alt=""></li>
                <li><a href="#">就醫提問單</a><img src="pic/index/right.png" alt=""></li>
            </ul>
            <div class="RWDHide">
                <h3>醫護選單</h3>
                <div class="hr hrs"></div>
                <h2>個管師專區</h2>
                <ul class="RWDHide">

                    <li><a href="#">最新消息</a><img src="pic/index/right.png" alt=""></li>
                    <li><a href="#">會議與工作坊</a><img src="pic/index/right.png" alt=""></li>
                </ul>
            </div>
            <p>你加入 icare 官方 line 了嗎？<br> 現在趕快掃描加入吧！</p>
            <div class="line">
                <img src="pic/Common/QRcode.png" alt="">
            </div>
            <div class="inputGroup">
                <input class="loginSmallBtn" type="button" value="登入">
                <input class="logoutSmallBtn" type="button" value="登出">
            </div>

            <img class="closeBtn" src="pic/index/cancel.svg" alt="">
        </div> -->
    </div>

    <div class="menum">
        <!-- <div class="wrap">
            <div class="switch">
                <div class="unlogin">
                    <h3>主要選單</h3>
                    <div class="hr"></div>
                    <ul>
                        <li><a href="ArticleIndex.html">腸癌新知</a><img src="pic/index/right.png" alt=""></li>
                        <li><a href="#">最新消息</a><img src="pic/index/right.png" alt=""></li>
                        <li><a href="#">常見問題</a><img src="pic/index/right.png" alt=""></li>
                        <li><a href="#">就醫提問單</a><img src="pic/index/right.png" alt=""></li>
                    </ul>
                </div>

                <div class="login">
                    <h3 class="RWDHide">醫護人員選單</h3>
                    <div class="hr hrs"></div>
                    
                    <ul class="RWDHide">
                        <li><a href="#">最新消息</a><img src="pic/index/right.png" alt=""></li>
                        <li><a href="#">會議與工作坊</a><img src="pic/index/right.png" alt=""></li>
                    </ul>
                </div>
            </div>

            <div class="hrb"></div>

            <div class="line">
                <div class="left">
                    <img src="pic/Common/QRcode.png" alt="">
                    <p>你加入 icare 官方 line 了嗎？<br> 現在趕快掃描加入吧！</p>
                </div>

                <div class="inputGroup">
                    <input class="loginInBtn" type="button" value="登入">
                    <input class="loginOutBtn" type="button" value="登出">
                </div>
            </div>

            <img class="closeBtn" src="pic/index/cancel.svg" alt="">
        </div> -->
    </div>



    <div class="topicLL">
        <div class="Ltopic topicLL1">
            <div class="topicBigIcon">
                <img src="pic/index/bg/topic1.svg" alt="">
            </div>
            <div class="top">
                <div class="drl">
                    <div class="text">
                        <h3>1.症狀察覺</h3>
                        <img src="pic/Common/arrowDown.png" alt="">
                    </div>

                    <ul>
                        <li>1.症狀察覺</li>
                        <li>2.疾病診斷</li>
                        <li>3.治療種類</li>
                        <li>4.後續追蹤</li>
                        <li>5.腸癌照護</li>
                    </ul>

                </div>
                <div class="close"><img src="pic/Common/cancel.png" alt=""></div>
            </div>
            <div class="topicLSec">
                <div class="row">
                    <a href="page1.php">
                        <img src="pic/page1/page1_bigIcon.svg" alt="">
                        <h3>疾病篩檢</h3>
                    </a>
                    <a href="page2.php">
                        <img src="pic/page2/page2_bigIcon.png" alt="">
                        <h3>疾病症狀</h3>
                    </a>
                </div>
            </div>

        </div>

        <div class="Ltopic topicLL2">
            <div class="topicBigIcon">
                <img src="pic/index/bg/topic2.svg" alt="">
            </div>
            <div class="top">
                <div class="drl">
                    <div class="text">
                        <h3>2.疾病診斷</h3>
                        <img src="pic/Common/arrowDown.png" alt="">
                    </div>

                    <ul>
                        <li>1.症狀察覺</li>
                        <li>2.疾病診斷</li>
                        <li>3.治療種類</li>
                        <li>4.後續追蹤</li>
                        <li>5.腸癌照護</li>
                    </ul>

                </div>
                <div class="close"><img src="pic/Common/cancel.png" alt=""></div>
            </div>
            <div class="topicLSec">
                <div class="row">
                    <a href="page3.php">
                        <img src="pic/page3/page3_bigIcon.png" alt="">
                        <h3>病理報告</h3>
                    </a>
                    <a href="page4.php">
                        <img src="pic/page4/page4_bigIcon.png" alt="">
                        <h3>影像學</h3>
                    </a>
                </div>
                <div class="row">
                    <a href="page5.php">
                        <img src="pic/page5/page5_bigIcon.png" alt="">
                        <h3>基因測試</h3>
                    </a>
                    <a href="page6.php">
                        <img src="pic/page6/page6_bigIcon.png" alt="">
                        <h3>癌症分期</h3>
                    </a>
                </div>
            </div>

        </div>

        <div class="Ltopic topicLL3">
            <div class="topicBigIcon">
                <img src="pic/index/bg/topic3.svg" alt="">
            </div>
            <div class="top">
                <div class="drl">
                    <div class="text">
                        <h3>3.治療種類</h3>
                        <img src="pic/Common/arrowDown.png" alt="">
                    </div>

                    <ul>
                        <li>1.症狀察覺</li>
                        <li>2.疾病診斷</li>
                        <li>3.治療種類</li>
                        <li>4.後續追蹤</li>
                        <li>5.腸癌照護</li>
                    </ul>

                </div>
                <div class="close"><img src="pic/Common/cancel.png" alt=""></div>
            </div>
            <div class="topicLSec">
                <div class="row">
                    <a href="page7.php">
                        <img src="pic/page7/page7_bigIcon.png" alt="">
                        <h3>化學藥物治療</h3>
                    </a>
                    <a href="page8.php">
                        <img src="pic/page8/page8_bigIcon.png" alt="">
                        <h3>手術治療</h3>
                    </a>
                </div>
                <div class="row">
                    <a href="page9.php">

                        <img src="pic/page9/page9_bigIcon.png" alt="">
                        <h3>放射治療</h3>

                    </a>
                    <a href="page10.php">

                        <img src="pic/page10/page10_bigIcon.png" alt="">
                        <h3>標靶治療</h3>

                    </a>
                </div>
            </div>

        </div>

        <div class="Ltopic topicLL4">
            <div class="topicBigIcon">
                <img src="pic/index/bg/topic4.svg" alt="">
            </div>
            <div class="top">
                <div class="drl">
                    <div class="text">
                        <h3>4.後續追蹤</h3>
                        <img src="pic/Common/arrowDown.png" alt="">
                    </div>

                    <ul>
                        <li>1.症狀察覺</li>
                        <li>2.疾病診斷</li>
                        <li>3.治療種類</li>
                        <li>4.後續追蹤</li>
                        <li>5.腸癌照護</li>
                    </ul>

                </div>
                <div class="close"><img src="pic/Common/cancel.png" alt=""></div>
            </div>
            <div class="topicLSec">
                <div class="row">
                    <a href="page11.php">
                        <img src="pic/page11/page11_bigIcon.png" alt="">
                        <h3>手術後照護</h3>
                    </a>
                    <a href="page12.php">
                        <img src="pic/page12/page12_bigIcon.png" alt="">
                        <h3>副作用管理</h3>
                    </a>
                </div>
                <div class="row">
                    <a href="page13.php">
                        <img src="pic/page13/page13_bigIcon.png" alt="">
                        <h3>營養建議</h3>
                    </a>
                </div>
            </div>
        </div>

        <div class="Ltopic topicLL5">
            <div class="topicBigIcon">
                <img src="pic/index/bg/topic5.svg" alt="">
            </div>
            <div class="top">
                <div class="drl">
                    <div class="text">
                        <h3>5.腸癌照護</h3>
                        <img src="pic/Common/arrowDown.png" alt="">
                    </div>

                    <ul>
                        <li>1.症狀察覺</li>
                        <li>2.疾病診斷</li>
                        <li>3.治療種類</li>
                        <li>4.後續追蹤</li>
                        <li>5.腸癌照護</li>
                    </ul>

                </div>
                <div class="close"><img src="pic/Common/cancel.png" alt=""></div>
            </div>
            <div class="topicLSec">
                <div class="row">
                    <a href="page14.php">
                        <img src="pic/page14/page14_bigIcon.png" alt="">
                        <h3>心理健康</h3>
                    </a>
                    <a href="page15.php">
                        <img src="pic/page15/page15_bigIcon.png" alt="">
                        <h3>社會資源</h3>
                    </a>
                </div>
                <div class="row">
                    <a href="page16.php">
                        <img src="pic/page16/page16_bigIcon.png" alt="">
                        <h3>癌症資源中心</h3>
                    </a>
                    <a href="page17.php">
                        <img src="pic/page17/page17_bigIcon.png" alt="">
                        <h3>個人化精準醫療</h3>
                    </a>
                </div>

            </div>
        </div>


    </div>

    <!--  舊版 -->
    <!-- <div class="topicL">
        <div class="topic topicL1">
            <div class="wrap">
                <img src="pic/index/topicL1.svg" alt="">
                <div class="dr">
                    <ul>
                        <li> <a href="page1.html"> 1.症狀察覺 </a></li>
                        <li> <a href="#"> 2.疾病診斷 </a></li>
                        <li> <a href="#"> 3.治療種類 </a></li>
                        <li> <a href="#"> 4.後續追蹤 </a></li>
                        <li> <a href="#"> 5.腸癌照護 </a></li>
                    </ul>
                </div>
                <div class="tool">
                    <div class="close"></div>
                    <div class="toggle"></div>
                </div>
            </div>
            <div class="articleBtnGroup">
                <a href="page1.php" class="articleBtn1"></a>
                <a href="page2.php" class="articleBtn2"></a>
            </div>
        </div>

        <div class="topic topicL2">
            <div class="wrap">
                <img src="pic/index/topicL2.svg" alt="">
                <div class="dr">
                    <ul>
                        <li> <a href="page1.html"> 1.症狀察覺 </a></li>
                        <li> <a href="#"> 2.疾病診斷 </a></li>
                        <li> <a href="#"> 3.治療種類 </a></li>
                        <li> <a href="#"> 4.後續追蹤 </a></li>
                        <li> <a href="#"> 5.腸癌照護 </a></li>
                    </ul>
                </div>
                <div class="tool">
                    <div class="close"></div>
                    <div class="toggle"></div>
                </div>
                <div class="articleBtnGroup">
                    <a href="page3.php" class="articleBtn1"></a>
                    <a href="page4.php" class="articleBtn2"></a>
                    <a href="page5.php" class="articleBtn3"></a>
                    <a href="page6.php" class="articleBtn4"></a>
                </div>
            </div>
        </div>

        <div class="topic topicL3">
            <div class="wrap">
                <img src="pic/index/topicLd3.png" alt="">
                <div class="dr">
                    <ul>
                        <li> <a href="page1.html"> 1.症狀察覺 </a></li>
                        <li> <a href="#"> 2.疾病診斷 </a></li>
                        <li> <a href="#"> 3.治療種類 </a></li>
                        <li> <a href="#"> 4.後續追蹤 </a></li>
                        <li> <a href="#"> 5.腸癌照護 </a></li>
                    </ul>
                </div>
                <div class="tool">
                    <div class="close"></div>
                    <div class="toggle"></div>
                </div>
                <div class="articleBtnGroup">
                    <a href="page7.php" class="articleBtn1"></a>
                    <a href="page8.php" class="articleBtn2"></a>
                    <a href="page9.php" class="articleBtn3"></a>
                    <a href="page10.php" class="articleBtn4"></a>
                </div>
            </div>
        </div>

        <div class="topic topicL4">
            <div class="wrap">
                <img src="pic/index/topicL4.svg" alt="">
                <div class="dr">
                    <ul>
                        <li> <a href="page1.html"> 1.症狀察覺 </a></li>
                        <li> <a href="#"> 2.疾病診斷 </a></li>
                        <li> <a href="#"> 3.治療種類 </a></li>
                        <li> <a href="#"> 4.後續追蹤 </a></li>
                        <li> <a href="#"> 5.腸癌照護 </a></li>
                    </ul>
                </div>
                <div class="tool">
                    <div class="close"></div>
                    <div class="toggle"></div>
                </div>
                <div class="articleBtnGroup">
                    <a href="page11.php" class="articleBtn1"></a>
                    <a href="page12.php" class="articleBtn2"></a>
                    <a href="page13.php" class="articleBtn3"></a>
                </div>
            </div>
        </div>

        <div class="topic topicL5">
            <div class="wrap">
                <img src="pic/index/topicL5.svg" alt="">
                <div class="dr">
                    <ul>
                        <li> <a href="page1.html"> 1.症狀察覺 </a></li>
                        <li> <a href="#"> 2.疾病診斷 </a></li>
                        <li> <a href="#"> 3.治療種類 </a></li>
                        <li> <a href="#"> 4.後續追蹤 </a></li>
                        <li> <a href="#"> 5.腸癌照護 </a></li>
                    </ul>
                </div>
                <div class="tool">
                    <div class="close"></div>
                    <div class="toggle"></div>
                </div>
                <div class="articleBtnGroup">
                    <a href="page14.php" class="articleBtn1"></a>
                    <a href="page15.php" class="articleBtn2"></a>
                    <a href="page16.php" class="articleBtn3"></a>
                    <a href="page17.php" class="articleBtn4"></a>
                </div>
            </div>
        </div>
    </div> -->






    <!-- <div class="topicSS topicS1">
            <div class="wrap">
                <img src="pic/index/bg/topicS1.svg" alt="">
                <div class="dr">
                    <ul>
                        <li> <a href="page1.html"> 1.症狀察覺 </a></li>
                        <li> <a href="#"> 2.疾病診斷 </a></li>
                        <li> <a href="#"> 3.治療種類 </a></li>
                        <li> <a href="#"> 4.後續追蹤 </a></li>
                        <li> <a href="#"> 5.腸癌照護 </a></li>
                    </ul>
                </div>
                <div class="tool">
                    <div class="close"></div>
                    <div class="toggle"></div>
                </div>
                <div class="articleBtnGroup">
                    <div class="articleBtn1"></div>
                    <div class="articleBtn2"></div>
                </div>
            </div>
        </div>
        <div class="topicSS topicS2">
            <div class="wrap">
                <img src="pic/index/bg/topicS2.svg" alt="">
                <div class="dr">
                    <ul>
                        <li> <a href="page1.html"> 1.症狀察覺 </a></li>
                        <li> <a href="#"> 2.疾病診斷 </a></li>
                        <li> <a href="#"> 3.治療種類 </a></li>
                        <li> <a href="#"> 4.後續追蹤 </a></li>
                        <li> <a href="#"> 5.腸癌照護 </a></li>
                    </ul>
                </div>
                <div class="tool">
                    <div class="close"></div>
                    <div class="toggle"></div>
                    <div class="articleBtnGroup">
                        <div class="articleBtn1"></div>
                        <div class="articleBtn2"></div>
                        <div class="articleBtn3"></div>
                        <div class="articleBtn4"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="topicSS topicS3">
            <div class="wrap">
                <img src="pic/index/bg/topicS3.png" alt="">
                <div class="dr">
                    <ul>
                        <li> <a href="page1.html"> 1.症狀察覺 </a></li>
                        <li> <a href="#"> 2.疾病診斷 </a></li>
                        <li> <a href="#"> 3.治療種類 </a></li>
                        <li> <a href="#"> 4.後續追蹤 </a></li>
                        <li> <a href="#"> 5.腸癌照護 </a></li>
                    </ul>
                </div>
                <div class="tool">
                    <div class="close"></div>
                    <div class="toggle"></div>
                </div>
            </div>
        </div>
        <div class="topicSS topicS4">
            <div class="wrap">
                <img src="pic/index/bg/topicS4.svg" alt="">
                <div class="dr">
                    <ul>
                        <li> <a href="page1.html"> 1.症狀察覺 </a></li>
                        <li> <a href="#"> 2.疾病診斷 </a></li>
                        <li> <a href="#"> 3.治療種類 </a></li>
                        <li> <a href="#"> 4.後續追蹤 </a></li>
                        <li> <a href="#"> 5.腸癌照護 </a></li>
                    </ul>
                </div>
                <div class="tool">
                    <div class="close"></div>
                    <div class="toggle"></div>
                </div>
            </div>
        </div>
        <div class="topicSS topicS5">
            <div class="wrap">
                <img src="pic/index/bg/topicS5.svg" alt="">
                <div class="dr">
                    <ul>
                        <li> <a href="page1.html"> 1.症狀察覺 </a></li>
                        <li> <a href="#"> 2.疾病診斷 </a></li>
                        <li> <a href="#"> 3.治療種類 </a></li>
                        <li> <a href="#"> 4.後續追蹤 </a></li>
                        <li> <a href="#"> 5.腸癌照護 </a></li>
                    </ul>
                </div>
                <div class="tool">
                    <div class="close"></div>
                    <div class="toggle"></div>
                </div>
            </div>
        </div> -->
    </div>

    <!-- 
    <div class="bg">
        <div class="bgl">
            <img class="bgl" src="pic/index/bg.svg" alt="">
            <div class="menul"></div>
            <div class="topicL1Btn"></div>
            <div class="topicL2Btn"></div>
            <div class="topicL3Btn"></div>
            <div class="topicL4Btn"></div>
            <div class="topicL5Btn"></div>
        </div>
        <div class="bgs">
            <img src="pic/index/bgs.svg" alt="">
            <div class="menus"></div>
            <div class="topicS1Btn"></div>
            <div class="topicS2Btn"></div>
            <div class="topicS3Btn"></div>
            <div class="topicS4Btn"></div>
            <div class="topicS5Btn"></div>
        </div>
    </div> -->

    <div class="menu2"></div>

    <div class="topicS">
        <div class="topicc topic1">
            <div class="card">
                <div class="top">
                    <div class="dropdown">
                        <div class="dropdownBtn">
                            <h3>1. 症狀察覺</h3>
                            <img src="pic/Common/arrowDown.png" alt="">
                        </div>

                        <ul>
                            <li>1. 症狀察覺</li>
                            <li>2. 疾病診斷</li>
                            <li>3. 治療種類</li>
                            <li>4. 後續追蹤</li>
                            <li>5. 腸癌照護</li>
                        </ul>
                    </div>
                    <div class="close">
                        <img src="pic/Common/close.svg" alt="">
                    </div>
                </div>
                <div class="topicSec">
                    <div class="row">
                        <a href="page1.php">
                            <div class="col">
                                <img src="pic/page1/page1_bigIcon.svg" alt="">
                                <h4>疾病篩檢</h4>
                            </div>
                        </a>
                        <a href="page2.php">
                            <div class="col">
                                <img src="pic/page2/page2_bigIcon.png" alt="">
                                <h4>疾病症狀</h4>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>


        <div class="topicc topic2">
            <div class="card">
                <div class="top">
                    <div class="dropdown">
                        <div class="dropdownBtn">
                            <h3>2. 疾病診斷</h3>
                            <img src="pic/Common/arrowDown.png" alt="">
                        </div>

                        <ul>
                            <li>1. 症狀察覺</li>
                            <li>2. 疾病診斷</li>
                            <li>3. 治療種類</li>
                            <li>4. 後續追蹤</li>
                            <li>5. 腸癌照護</li>
                        </ul>
                    </div>
                    <div class="close">
                        <img src="pic/Common/close.svg" alt="">
                    </div>
                </div>
                <div class="topicSec">
                    <div class="row">

                        <a href="page3.php">
                            <div class="col">
                                <img src="pic/page3/page3_bigIcon.png" alt="">
                                <h4>病理報告</h4>
                            </div>
                        </a>
                        <a href="page4.php">
                            <div class="col">
                                <img src="pic/page4/page4_bigIcon.png" alt="">
                                <h4>影像學</h4>
                            </div>
                        </a>
                    </div>
                    <div class="row">
                        <a href="page5.php">
                            <div class="col">
                                <img src="pic/page5/page5_bigIcon.png" alt="">
                                <h4>基因測試</h4>
                            </div>
                        </a>
                        <a href="page6.php">
                            <div class="col">
                                <img src="pic/page6/page6_bigIcon.png" alt="">
                                <h4>腸癌分期</h4>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="topicc topic3">
            <div class="card">
                <div class="top">
                    <div class="dropdown">
                        <div class="dropdownBtn">
                            <h3>3. 治療種類</h3>
                            <img src="pic/Common/arrowDown.png" alt="">
                        </div>

                        <ul>
                            <li>1. 症狀察覺</li>
                            <li>2. 疾病診斷</li>
                            <li>3. 治療種類</li>
                            <li>4. 後續追蹤</li>
                            <li>5. 腸癌照護</li>
                        </ul>
                    </div>
                    <div class="close">
                        <img src="pic/Common/close.svg" alt="">
                    </div>
                </div>
                <div class="topicSec">
                    <div class="row">
                        <a href="page7.php">
                            <div class="col">
                                <img src="pic/page7/page7_bigIcon.png" alt="">
                                <h4>化學藥物治療</h4>
                            </div>
                        </a>
                        <a href="page8.php">
                            <div class="col">
                                <img src="pic/page8/page8_bigIcon.png" alt="">
                                <h4>手術治療</h4>
                            </div>
                        </a>
                    </div>
                    <div class="row">
                        <a href="page9.php">
                            <div class="col">
                                <img src="pic/page9/page9_bigIcon.png" alt="">
                                <h4>放射治療</h4>
                            </div>
                        </a>
                        <a href="page10.php">
                            <div class="col">
                                <img src="pic/page10/page10_bigIcon.png" alt="">
                                <h4>標靶治療</h4>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="topicc topic4">
            <div class="card">
                <div class="top">
                    <div class="dropdown">
                        <div class="dropdownBtn">
                            <h3>4. 後續追蹤</h3>
                            <img src="pic/Common/arrowDown.png" alt="">
                        </div>

                        <ul>
                            <li>1. 症狀察覺</li>
                            <li>2. 疾病診斷</li>
                            <li>3. 治療種類</li>
                            <li>4. 後續追蹤</li>
                            <li>5. 腸癌照護</li>
                        </ul>
                    </div>
                    <div class="close">
                        <img src="pic/Common/close.svg" alt="">
                    </div>
                </div>
                <div class="topicSec">
                    <div class="row">
                        <a href="page11.php">
                            <div class="col">
                                <img src="pic/page11/page11_bigIcon.png" alt="">
                                <h4>手術後照護</h4>
                            </div>
                        </a>
                        <a href="page12.php">
                            <div class="col">
                                <img src="pic/page12/page12_bigIcon.png" alt="">
                                <h4>副作用管理</h4>
                            </div>
                        </a>
                    </div>
                    <div class="row">
                        <a href="page13.php">
                            <div class="col">
                                <img src="pic/page13/page13_bigIcon.png" alt="">
                                <h4>營養建議</h4>
                            </div>
                        </a>

                    </div>
                </div>
            </div>
        </div>

        <div class="topicc topic5">
            <div class="card">
                <div class="top">
                    <div class="dropdown">
                        <div class="dropdownBtn">
                            <h3>5. 腸癌照護</h3>
                            <img src="pic/Common/arrowDown.png" alt="">
                        </div>

                        <ul>
                            <li>1. 症狀察覺</li>
                            <li>2. 疾病診斷</li>
                            <li>3. 治療種類</li>
                            <li>4. 後續追蹤</li>
                            <li>5. 腸癌照護</li>
                        </ul>
                    </div>
                    <div class="close">
                        <img src="pic/Common/close.svg" alt="">
                    </div>
                </div>
                <div class="topicSec">
                    <div class="row">
                        <a href="page14.php">
                            <div class="col">
                                <img src="pic/page14/page14_bigIcon.png" alt="">
                                <h4>心理健康</h4>
                            </div>
                        </a>
                        <a href="page15.php">
                            <div class="col">
                                <img src="pic/page15/page15_bigIcon.png" alt="">
                                <h4>社會資源</h4>
                            </div>
                        </a>
                    </div>
                    <div class="row">
                        <a href="page16.php">
                            <div class="col">
                                <img src="pic/page16/page16_bigIcon.png" alt="">
                                <h4>腸癌資源中心</h4>
                            </div>
                        </a>
                        <a href="page17.php">
                            <div class="col">
                                <img src="pic/page17/page17_bigIcon.png" alt="">
                                <h4>個人化精準醫療</h4>
                            </div>
                        </a>

                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

<script>
    //menul菜單點擊
    // let menu1 = document.querySelector(' .menu1');
    // menu1.addEventListener('click', function (e) {
    //     document.querySelector('.bgl').style = "display:none";
    //     document.querySelector('.menu1').style = "display:block";
    // }, false)
    // //menuL菜單關閉
    // let closeL = document.querySelector(' .closeBtn');
    // closeL.addEventListener("click", function (e) {
    //     document.querySelector('.menu1').style = "display:none"
    //     document.querySelector('.bgl').style = "display:block"
    // }, false);
    // menuS菜單開啟
    // let menus = document.querySelector('.bgm .menus');
    // menus.addEventListener('click', function (e) {
    //     alert("sd");
    // }, false)
    // let menuS = document.querySelector('click', function (e) {
    // }, false)
    // menuS菜單關閉

    //主題一打開
    // let topicL1Btn = document.querySelector('.topicL1Btn');
    // topicL1Btn.addEventListener('click', function (e) {
    //     document.querySelector(".topicL1").style = "display: flex;";
    //     document.querySelector("body").style = "  overflow-y: hidden"

    // }, false)
    // //主題一選單打開
    // let toggleL1 = document.querySelector('.topicL1 .toggle');
    // let dr = document.querySelector(".topicL1 .dr")
    // dr.style = "display: none;"
    // toggleL1.addEventListener("click", function (e) {
    //     if (dr.style.display != "block") {
    //         dr.style = "display: block; animation: toggleDown .5s;animation - fill - mode: forwards; "
    //     }
    //     else {
    //         dr.style = "display: none;"
    //     }
    // }, false)
    // //主踢一關閉
    // let topicL1Close = document.querySelector('.topicL1 .close');
    // topicL1Close.addEventListener("click", function (e) {
    //     document.querySelector(".topicL1").style = "display: none;"
    //     document.querySelector("body").style = "  overflow-y: scroll"

    // }, false)

    // //主題二
    // let topicL2Btn = document.querySelector('.topicL2Btn');
    // topicL2Btn.addEventListener('click', function (e) {
    //     document.querySelector(".topicL2").style = "display: flex;";
    //     document.querySelector("body").style = "  overflow-y: hidden"

    // }, false)

    // //主題二選單打開
    // let toggleL2 = document.querySelector('.topicL2 .toggle');
    // let dr2 = document.querySelector(".topicL2 .dr")
    // dr2.style = "display: none;"
    // toggleL2.addEventListener("click", function (e) {
    //     if (dr2.style.display != "block") {
    //         dr2.style = "display: block; animation: toggleDown .5s;animation - fill - mode: forwards; "
    //     }
    //     else {
    //         dr2.style = "display: none;"
    //     }
    // }, false)
    // //主踢二關閉
    // let topicL2Close = document.querySelector('.topicL2 .close');
    // topicL2Close.addEventListener("click", function (e) {
    //     document.querySelector(".topicL2").style = "display: none;"
    //     document.querySelector("body").style = "  overflow-y: scroll"

    // }, false)

    // //主題三
    // let topicL3Btn = document.querySelector('.topicL3Btn');
    // topicL3Btn.addEventListener('click', function (e) {
    //     document.querySelector(".topicL3").style = "display: flex;";
    //     document.querySelector("body").style = "  overflow-y: hidden"

    // }, false)

    // //主題三選單打開
    // let toggleL3 = document.querySelector('.topicL3 .toggle');
    // let dr3 = document.querySelector(".topicL3 .dr")
    // dr3.style = "display: none;"
    // toggleL3.addEventListener("click", function (e) {
    //     if (dr3.style.display != "block") {
    //         dr3.style = "display: block; animation: toggleDown .5s;animation - fill - mode: forwards; "
    //     }
    //     else {
    //         dr3.style = "display: none;"
    //     }
    // }, false)
    // //主踢三關閉
    // let topicL3Close = document.querySelector('.topicL3 .close');
    // topicL3Close.addEventListener("click", function (e) {
    //     document.querySelector(".topicL3").style = "display: none;"
    //     document.querySelector("body").style = "  overflow-y: scroll"

    // }, false)

    // //主題四
    // let topicL4Btn = document.querySelector('.topicL4Btn');
    // topicL4Btn.addEventListener('click', function (e) {
    //     document.querySelector(".topicL4").style = "display: flex;";
    //     document.querySelector("body").style = "  overflow-y: hidden"

    // }, false)

    // //主題四選單打開
    // let toggleL4 = document.querySelector('.topicL4 .toggle');
    // let dr4 = document.querySelector(".topicL4 .dr")
    // dr4.style = "display: none;"
    // toggleL4.addEventListener("click", function (e) {
    //     if (dr4.style.display != "block") {
    //         dr4.style = "display: block; animation: toggleDown .5s;animation - fill - mode: forwards; "
    //     }
    //     else {
    //         dr4.style = "display: none;"
    //     }
    // }, false)
    // //主踢四關閉
    // let topicL4Close = document.querySelector('.topicL4 .close');
    // topicL4Close.addEventListener("click", function (e) {
    //     document.querySelector(".topicL4").style = "display: none;"
    //     document.querySelector("body").style = "  overflow-y: scroll"

    // }, false)

    // //主題五
    // let topicL5Btn = document.querySelector('.topicL5Btn');
    // topicL5Btn.addEventListener('click', function (e) {
    //     document.querySelector(".topicL5").style = "display: flex;";
    //     document.querySelector("body").style = "  overflow-y: hidden"

    // }, false)

    // //主題五選單打開
    // let toggleL5 = document.querySelector('.topicL5 .toggle');
    // let dr5 = document.querySelector(".topicL5 .dr")
    // dr5.style = "display: none;"
    // toggleL5.addEventListener("click", function (e) {
    //     if (dr5.style.display != "block") {
    //         dr5.style = "display: block; animation: toggleDown .5s;animation - fill - mode: forwards; "
    //     }
    //     else {
    //         dr5.style = "display: none;"
    //     }
    // }, false)
    // //主踢五關閉
    // let topicL5Close = document.querySelector('.topicL5 .close');
    // topicL5Close.addEventListener("click", function (e) {
    //     document.querySelector(".topicL5").style = "display: none;"
    //     document.querySelector("body").style = "  overflow-y: scroll"

    // }, false)

    // //手機板

    // menuS菜單點擊
    // let menuS = document.querySelector('.bgs .menus');
    // menuS.addEventListener('click', function (e) {

    //     document.querySelector('.bgs').style = "display:none";
    //     document.querySelector('.menu2').style = "display:block";
    // }, false)
    // //menuS菜單關閉
    // let closeS = document.querySelector('.menu2 .closeBtn');
    // closeS.addEventListener("click", function (e) {
    //     document.querySelector('.menu2').style = "display:none"
    //     document.querySelector('.bgs').style = "display:block"
    // }, false);

    // //主題1
    // let topicS1Btn = document.querySelector('.topicS1Btn');
    // topicS1Btn.addEventListener('click', function (e) {
    //     document.querySelector(".topicS1").style = "display: flex;";
    //     document.querySelector("body").style = "  overflow-y: hidden"

    // }, false)

    // //主題1選單打開
    // let toggleS1 = document.querySelector('.topicS1 .toggle');
    // let drs1 = document.querySelector(".topicS1 .dr")
    // drs1.style = "display: none;"
    // toggleS1.addEventListener("click", function (e) {
    //     if (drs1.style.di splay != "block") {
    //         drs1.style = "display: block; animation: toggleDown .5s;animation - fill - mode: forwards; "
    //     }
    //     else {
    //         drs1.style = "display: none;"
    //     }
    // }, false)
    // //主踢1關閉
    // let topicS1Close = document.querySelector('.topicS1 .close');
    // topicS1Close.addEventListener("click", function (e) {
    //     document.querySelector(".topicS1").style = "display: none;"
    //     document.querySelector("body").style = "  overflow-y: scroll"

    // }, false)

    // //主題2
    // let topicS2Btn = document.querySelector('.topicS2Btn');
    // topicS2Btn.addEventListener('click', function (e) {
    //     document.querySelector(".topicS2").style = "display: flex;";
    //     document.querySelector("body").style = "  overflow-y: hidden"

    // }, false)

    // //主題2選單打開
    // let toggleS2 = document.querySelector('.topicS2 .toggle');
    // let drs2 = document.querySelector(".topicS2 .dr")
    // drs2.style = "display: none;"
    // toggleS2.addEventListener("click", function (e) {
    //     if (drs2.style.display != "block") {
    //         drs2.style = "display: block; animation: toggleDown .5s;animation - fill - mode: forwards; "
    //     }
    //     else {
    //         drs2.style = "display: none;"
    //     }
    // }, false)
    // //主踢2關閉
    // let topicS2Close = document.querySelector('.topicS2 .close');
    // topicS2Close.addEventListener("click", function (e) {
    //     document.querySelector(".topicS2").style = "display: none;"
    //     document.querySelector("body").style = "  overflow-y: scroll"

    // }, false)


    // //主題3
    // let topicS3Btn = document.querySelector('.topicS3Btn');
    // topicS3Btn.addEventListener('click', function (e) {
    //     document.querySelector(".topicS3").style = "display: flex;";
    //     document.querySelector("body").style = "  overflow-y: hidden"

    // }, false)

    // //主題3選單打開
    // let toggleS3 = document.querySelector('.topicS3 .toggle');
    // let drs3 = document.querySelector(".topicS3 .dr")
    // drs3.style = "display: none;"
    // toggleS3.addEventListener("click", function (e) {
    //     if (drs3.style.display != "block") {
    //         drs3.style = "display: block; animation: toggleDown .5s;animation - fill - mode: forwards; "
    //     }
    //     else {
    //         drs3.style = "display: none;"
    //     }
    // }, false)
    // //主踢3關閉
    // let topicS3Close = document.querySelector('.topicS3 .close');
    // topicS3Close.addEventListener("click", function (e) {
    //     document.querySelector(".topicS3").style = "display: none;"
    //     document.querySelector("body").style = "  overflow-y: scroll"

    // }, false)


    // //主題4
    // let topicS4Btn = document.querySelector('.topicS4Btn');
    // topicS4Btn.addEventListener('click', function (e) {
    //     document.querySelector(".topicS4").style = "display: flex;";
    //     document.querySelector("body").style = "  overflow-y: hidden"

    // }, false)

    // //主題4選單打開
    // let toggleS4 = document.querySelector('.topicS4 .toggle');
    // let drs4 = document.querySelector(".topicS4 .dr")
    // drs4.style = "display: none;"
    // toggleS4.addEventListener("click", function (e) {
    //     if (drs4.style.display != "block") {
    //         drs4.style = "display: block; animation: toggleDown .5s;animation - fill - mode: forwards; "
    //     }
    //     else {
    //         drs4.style = "display: none;"
    //     }
    // }, false)
    // //主踢4關閉
    // let topicS4Close = document.querySelector('.topicS4 .close');
    // topicS4Close.addEventListener("click", function (e) {
    //     document.querySelector(".topicS4").style = "display: none;"
    //     document.querySelector("body").style = "  overflow-y: scroll"

    // }, false)

    // //主題5
    // let topicS5Btn = document.querySelector('.topicS5Btn');
    // topicS5Btn.addEventListener('click', function (e) {
    //     document.querySelector(".topicS5").style = "display: flex;";
    //     document.querySelector("body").style = "  overflow-y: hidden"

    // }, false)

    // //主題5選單打開
    // let toggleS5 = document.querySelector('.topicS5 .toggle');
    // let drs5 = document.querySelector(".topicS5 .dr")
    // drs5.style = "display: none;"
    // toggleS5.addEventListener("click", function (e) {
    //     if (drs5.style.display != "block") {
    //         drs5.style = "display: block; animation: toggleDown .5s;animation - fill - mode: forwards; "
    //     }
    //     else {
    //         drs5.style = "display: none;"
    //     }
    // }, false)
    // //主踢5關閉
    // let topicS5Close = document.querySelector('.topicS5 .close');
    // topicS5Close.addEventListener("click", function (e) {
    //     document.querySelector(".topicS5").style = "display: none;"
    //     document.querySelector("body").style = "  overflow-y: scroll"

    // }, false)
</script>
<script src="js/data.js"></script>
<script src="js/index.js"></script>
<script src="js/common.js"></script>
<script>
    let topicBtn = document.querySelectorAll(".bgWrap .tpBtn");

    topicBtn.forEach(function(element) {

        element.addEventListener("mouseenter", function(e) {
            console.log(element.parentNode.children[0]);
            element.parentNode.children[0].style = " transform: scale(1.1);";

        }, false)

        element.addEventListener("mouseleave", function(e) {
            console.log(element.parentNode.children[0]);
            element.parentNode.children[0].style = " transform: scale(1);";

        }, false)
    })
</script>

</html>