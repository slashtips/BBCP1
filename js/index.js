

//新版主題
let topicLL = document.querySelector(".topicLL");
let topicLLClose = document.querySelectorAll(".topicLL .close img")
let drlText = document.querySelectorAll(".drl .text")
//新版主題關閉
if (topicLL) {
    topicLLClose.forEach(function (element) {
        element.addEventListener("click", function (e) {
            document.querySelectorAll(".Ltopic").forEach(function (element2) {
                cover.style = "display:none"
                topicLL.style = "display:none"
                element2.style = "display:none"
            }, false)
        }, false)
    }, false)
}
//drl
if (drlText) {
    drlText.forEach(function (element) {
        element.addEventListener("click", function (e) {
            if (element.parentNode.children[1].style.display == "block") {
                element.parentNode.children[1].style = "display: none;"
            }
            else {
                element.parentNode.children[1].style = "display: block; animation: toggleDown .25s;animation - fill - mode: forwards;"
            }

        }, false)
    }, false)
}


//drl切換
let drlUL = document.querySelectorAll(".drl ul");
if (drlUL) {
    drlUL.forEach(function (element) {
        element.children[0].addEventListener("click", function (e) {
            element.style = "display:none"

            document.querySelectorAll(".Ltopic").forEach(function (element2) {
                element2.style = "display:none"
            }, false)
            document.querySelector(".topicLL .topicLL1").style = "display: block; animation: toggleDown .5s;animation - fill - mode: forwards; ";
        }, false)

        element.children[1].addEventListener("click", function (e) {
            element.style = "display:none"
            document.querySelectorAll(".Ltopic").forEach(function (element2) {
                element2.style = "display:none"
            }, false)
            document.querySelector(".topicLL .topicLL2").style = "display: block; animation: toggleDown .5s;animation - fill - mode: forwards; ";
        }, false)

        element.children[2].addEventListener("click", function (e) {
            element.style = "display:none"
            document.querySelectorAll(".Ltopic").forEach(function (element2) {
                element2.style = "display:none"
            }, false)
            document.querySelector(".topicLL .topicLL3").style = "display: block; animation: toggleDown .5s;animation - fill - mode: forwards; ";
        }, false)

        element.children[3].addEventListener("click", function (e) {
            element.style = "display:none"
            document.querySelectorAll(".Ltopic").forEach(function (element2) {
                element2.style = "display:none"
            }, false)
            document.querySelector(".topicLL .topicLL4").style = "display: block; animation: toggleDown .5s;animation - fill - mode: forwards; ";
        }, false)

        element.children[4].addEventListener("click", function (e) {
            element.style = "display:none"
            document.querySelectorAll(".Ltopic").forEach(function (element2) {
                element2.style = "display:none"
            }, false)
            document.querySelector(".topicLL .topicLL5").style = "display: block; animation: toggleDown .5s;animation - fill - mode: forwards; ";
        }, false)
    }, false)

}

//
let tp1 = document.querySelector('.tp1')
let tp2 = document.querySelector('.tp2')
let tp3 = document.querySelector('.tp3')
let tp4 = document.querySelector('.tp4')
let tp5 = document.querySelector('.tp5')

if (topicLL) {
    tp1.addEventListener("click", function (e) {
        cover.style = "display:block"
        topicLL.style = "display:block"
        document.querySelector(".topicLL .topicLL1").style = "display: block; animation: toggleDown .5s;animation - fill - mode: forwards; "
    }, false)

    tp2.addEventListener("click", function (e) {
        cover.style = "display:block"
        topicLL.style = "display:block"
        document.querySelector(".topicLL .topicLL2").style = "display: block; animation: toggleDown .5s;animation - fill - mode: forwards; "
    }, false)

    tp3.addEventListener("click", function (e) {
        cover.style = "display:block"
        topicLL.style = "display:block"
        document.querySelector(".topicLL .topicLL3").style = "display: block; animation: toggleDown .5s;animation - fill - mode: forwards; "
    }, false)

    tp4.addEventListener("click", function (e) {
        cover.style = "display:block"
        topicLL.style = "display:block"
        document.querySelector(".topicLL .topicLL4").style = "display: block; animation: toggleDown .5s;animation - fill - mode: forwards; "
    }, false)

    tp5.addEventListener("click", function (e) {
        cover.style = "display:block"
        topicLL.style = "display:block"
        document.querySelector(".topicLL .topicLL5").style = "display: block; animation: toggleDown .5s;animation - fill - mode: forwards; "
    }, false)
}



// //主題一打開
// let tp1 = document.querySelector('.tp1')
// tp1.addEventListener("click", function (e) {
//     document.querySelector(".topicL1").style = "display: flex;";
//     document.querySelector("body").style = "  overflow-y: hidden"
//         , false

// }, false)

// //選單打開
// let toggleL = document.querySelector('.topicL .toggle');
// let dr = document.querySelector(".topicL .dr")
// dr.style = "display: none;"
// toggleL.addEventListener("click", function (e) {
//     if (dr.style.display != "block") {
//         dr.style = "display: block; animation: toggleDown .5s;animation - fill - mode: forwards; "
//     }
//     else {
//         dr.style = "display: none;"
//     }
// }, false)
// //主題一關閉
// let topicL1Close = document.querySelector('.topicL1 .close');
// topicL1Close.addEventListener("click", function (e) {
//     document.querySelector(".topicL1").style = "display: none;"
//     document.querySelector("body").style = "  overflow-y: scroll"
//     dr.style = "display: none;"
// }, false)

// //主題二打開
// let tp2 = document.querySelector('.tp2')
// tp2.addEventListener("click", function (e) {
//     document.querySelector(".topicL2").style = "display: flex;";
//     document.querySelector("body").style = "  overflow-y: hidden"
//         , false

// }, false)

// //選單打開
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
// //主題二關閉
// let topicL2Close = document.querySelector('.topicL2 .close');
// topicL2Close.addEventListener("click", function (e) {
//     document.querySelector(".topicL2").style = "display: none;"
//     document.querySelector("body").style = "  overflow-y: scroll"
//     dr2.style = "display: none;"
// }, false)

// //主題三打開
// let tp3 = document.querySelector('.tp3')
// tp3.addEventListener("click", function (e) {
//     document.querySelector(".topicL3").style = "display: flex;";
//     document.querySelector("body").style = "  overflow-y: hidden"
//         , false
// }, false)

// //選單打開
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

// //主題三關閉
// let topicL3Close = document.querySelector('.topicL3 .close');
// topicL3Close.addEventListener("click", function (e) {
//     document.querySelector(".topicL3").style = "display: none;"
//     document.querySelector("body").style = "  overflow-y: scroll"
//     dr3.style = "display: none;"
// }, false)

// //主題四打開
// let tp4 = document.querySelector('.tp4')
// tp4.addEventListener("click", function (e) {
//     document.querySelector(".topicL4").style = "display: flex;";
//     document.querySelector("body").style = "  overflow-y: hidden"
// }, false)

// //選單打開
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
// //主題四關閉
// let topicL4Close = document.querySelector('.topicL4 .close');
// topicL4Close.addEventListener("click", function (e) {
//     document.querySelector(".topicL4").style = "display: none;"
//     document.querySelector("body").style = "  overflow-y: scroll"
//     dr4.style = "display: none;"
// }, false)

// //主題五打開
// let tp5 = document.querySelector('.tp5')
// tp5.addEventListener("click", function (e) {
//     document.querySelector(".topicL5").style = "display: flex;";
//     document.querySelector("body").style = "  overflow-y: hidden"



// }, false)

// //選單打開
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


// //主題五關閉
// let topicL5Close = document.querySelector('.topicL5 .close');
// topicL5Close.addEventListener("click", function (e) {
//     document.querySelector(".topicL5").style = "display: none;"
//     document.querySelector("body").style = "  overflow-y: scroll"
//     dr5.style = "display: none;"
// }, false)

//手機
//主題1
// let topicS1Btn = document.querySelector('.tpGroup .tp1');
// topicS1Btn.addEventListener('click', function (e) {
//     document.querySelector(".topicS1").style = "display: flex;";
//     document.querySelector("body").style = "  overflow-y: hidden";

// }, false)
// //關閉
// let topicS1Close = document.querySelector('.topicS1 .close');
// topicS1Close.addEventListener("click", function (e) {
//     document.querySelector(".topicS1").style = "display: none;"
//     document.querySelector("body").style = "  overflow-y: scroll"

// }, false)
// //主題1選單打開
// let toggleS1 = document.querySelector('.topicS1 .toggle');
// let drs1 = document.querySelector(".topicS1 .dr")
// drs1.style = "display: none;"
// toggleS1.addEventListener("click", function (e) {
//     if (drs1.style.display != "block") {
//         drs1.style = "display: block; animation: toggleDown .5s;animation - fill - mode: forwards; "
//     }
//     else {
//         drs1.style = "display: none;"
//     }
// }, false)


// //主題2
// let topicS2Btn = document.querySelector('.tpGroup .tp2');
// topicS2Btn.addEventListener('click', function (e) {
//     document.querySelector(".topicS2").style = "display: flex;";
//     document.querySelector("body").style = "  overflow-y: hidden";

// }, false)
// //關閉
// let topicS2Close = document.querySelector('.topicS2 .close');
// topicS2Close.addEventListener("click", function (e) {
//     document.querySelector(".topicS2").style = "display: none;"
//     document.querySelector("body").style = "  overflow-y: scroll"

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

// //主題3
// let topicS3Btn = document.querySelector('.tpGroup .tp3');
// topicS3Btn.addEventListener('click', function (e) {
//     document.querySelector(".topicS3").style = "display: flex;";
//     document.querySelector("body").style = "  overflow-y: hidden";

// }, false)
// //關閉
// let topicS3Close = document.querySelector('.topicS3 .close');
// topicS3Close.addEventListener("click", function (e) {
//     document.querySelector(".topicS3").style = "display: none;"
//     document.querySelector("body").style = "  overflow-y: scroll"

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

// //主題4
// let topicS4Btn = document.querySelector('.tpGroup .tp4');
// topicS4Btn.addEventListener('click', function (e) {
//     document.querySelector(".topicS4").style = "display: flex;";
//     document.querySelector("body").style = "  overflow-y: hidden";

// }, false)
// //關閉
// let topicS4Close = document.querySelector('.topicS4 .close');
// topicS4Close.addEventListener("click", function (e) {
//     document.querySelector(".topicS4").style = "display: none;"
//     document.querySelector("body").style = "  overflow-y: scroll"

// }, false)
// //主題選單打開
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

// //主題5
// let topicS5Btn = document.querySelector('.tpGroup .tp5');
// topicS5Btn.addEventListener('click', function (e) {
//     document.querySelector(".topicS5").style = "display: flex;";
//     document.querySelector("body").style = "  overflow-y: hidden";

// }, false)
// //關閉
// let topicS5Close = document.querySelector('.topicS5 .close');
// topicS5Close.addEventListener("click", function (e) {
//     document.querySelector(".topicS5").style = "display: none;"
//     document.querySelector("body").style = "  overflow-y: scroll"

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

//新 手機

//未開放
let disabledTopic = document.querySelectorAll(".topicS .disabled");
disabledTopic.forEach(function (element) {
    element.addEventListener("click", function (e) {
        e.preventDefault()
    }, false)
}, false)


//關閉 
let closeSImg = document.querySelectorAll(".topicS .close img");
closeSImg.forEach(function (element) {
    element.addEventListener("click", function (e) {
        let topicc = document.querySelectorAll(".topicc")
        topicc.forEach(function (element) { element.style = "display:none" }, false)
        cover.style = "display:none"
    }, false)
}, false)

//dropdown
let dropdownSBtn = document.querySelectorAll(".topicS .dropdownBtn")
dropdownSBtn.forEach(function (element) {
    element.addEventListener("click", function (e) {
        let UL = element.parentNode.children[1]
        if (UL.style.display == "block") {
            UL.style = "display:none"
        }
        else {
            UL.style = "display:block;animation: toggleDown .5s;animation - fill - mode: forwards;"
        }

    }, false)
}, false)



//dropdown UL
let dropdownSUL = document.querySelectorAll(".dropdown ul")
dropdownSUL.forEach(function (element) {

    element.addEventListener("click", function (e) {
        element.children[0].addEventListener("click", function (e) {
            document.querySelectorAll(".topicc").forEach(function (element) { element.style = "display:none" })
            document.querySelector(".topicS .topic1").style = "display:block;animation: toggleDown .5s;animation - fill - mode: forwards;"
            element.style = "display:none"
        }, false)
    }, false)

    element.addEventListener("click", function (e) {
        element.children[1].addEventListener("click", function (e) {
            document.querySelectorAll(".topicc").forEach(function (element) { element.style = "display:none" })
            document.querySelector(".topicS .topic2").style = "display:block;animation: toggleDown .5s;animation - fill - mode: forwards;"
            element.style = "display:none"
        }, false)
    }, false)

    element.addEventListener("click", function (e) {
        element.children[2].addEventListener("click", function (e) {
            document.querySelectorAll(".topicc").forEach(function (element) { element.style = "display:none" })
            document.querySelector(".topicS .topic3").style = "display:block;animation: toggleDown .5s;animation - fill - mode: forwards;"
            element.style = "display:none"
        }, false)
    }, false)

    element.addEventListener("click", function (e) {
        element.children[3].addEventListener("click", function (e) {
            document.querySelectorAll(".topicc").forEach(function (element) { element.style = "display:none" })
            document.querySelector(".topicS .topic4").style = "display:block;animation: toggleDown .5s;animation - fill - mode: forwards;"
            element.style = "display:none"
        }, false)
    }, false)

    element.addEventListener("click", function (e) {
        element.children[4].addEventListener("click", function (e) {
            document.querySelectorAll(".topicc").forEach(function (element) { element.style = "display:none" })
            document.querySelector(".topicS .topic5").style = "display:block;animation: toggleDown .5s;animation - fill - mode: forwards;"
            element.style = "display:none"
        }, false)
    }, false)

}, false)

//主題打開
let topicS1Btn = document.querySelector('.tpGroup .tp1');
topicS1Btn.addEventListener("click", function (e) {
    let topic1 = document.querySelector(".topicS .topic1")
    topic1.style = "display:block;animation: toggleDown .5s;animation - fill - mode: forwards;"
    cover.style = "display:block"
}, false)

let topicS2Btn = document.querySelector('.tpGroup .tp2');
topicS2Btn.addEventListener("click", function (e) {
    let topic2 = document.querySelector(".topicS .topic2")
    topic2.style = "display:block;animation: toggleDown .5s;animation - fill - mode: forwards;"
    cover.style = "display:block"
}, false)

let topicS3Btn = document.querySelector('.tpGroup .tp3');
topicS3Btn.addEventListener("click", function (e) {
    let topic3 = document.querySelector(".topicS .topic3")
    topic3.style = "display:block;animation: toggleDown .5s;animation - fill - mode: forwards;"
    cover.style = "display:block"
}, false)

let topicS4Btn = document.querySelector('.tpGroup .tp4');
topicS4Btn.addEventListener("click", function (e) {
    let topic4 = document.querySelector(".topicS .topic4")
    topic4.style = "display:block;animation: toggleDown .5s;animation - fill - mode: forwards;"
    cover.style = "display:block"
}, false)

let topicS5Btn = document.querySelector('.tpGroup .tp5');
topicS5Btn.addEventListener("click", function (e) {
    let topic5 = document.querySelector(".topicS .topic5")
    topic5.style = "display:block;animation: toggleDown .5s;animation - fill - mode: forwards;"
    cover.style = "display:block"
}, false)


let drTotal = document.querySelectorAll(".dr ul")
drTotal.forEach(function (element) {
    console.log(element);
    element.children[0].addEventListener("click", function (e) {
        e.preventDefault();
        document.querySelectorAll(".topicL .close").forEach(function (element) { element.click() })

        document.querySelectorAll(".topicL .topic").forEach(function (element) { element.style = "display:none" })
        document.querySelector(".topicL .topicL1").style = "display:flex;animation: toggleDown .5s;animation - fill - mode: forwards;"
        drTotal.forEach(function (element2) {

        })
    }, false)
    element.children[1].addEventListener("click", function (e) {

        e.preventDefault();
        document.querySelectorAll(".topicL .close").forEach(function (element) { element.click() })
        document.querySelectorAll(".topicL .topic").forEach(function (element) { element.style = "display:none" })
        document.querySelector(".topicL .topicL2").style = "display:flex;animation: toggleDown .5s;animation - fill - mode: forwards;"

    }, false)
    element.children[2].addEventListener("click", function (e) {

        e.preventDefault();
        document.querySelectorAll(".topicL .close").forEach(function (element) { element.click() })
        document.querySelectorAll(".topicL .topic").forEach(function (element) { element.style = "display:none" })
        document.querySelector(".topicL .topicL3").style = "display:flex;animation: toggleDown .5s;animation - fill - mode: forwards;"

    }, false)
    element.children[3].addEventListener("click", function (e) {

        e.preventDefault();
        document.querySelectorAll(".topicL .close").forEach(function (element) { element.click() })
        document.querySelectorAll(".topicL .topic").forEach(function (element) { element.style = "display:none" })
        document.querySelector(".topicL .topicL4").style = "display:flex;animation: toggleDown .5s;animation - fill - mode: forwards;"

    }, false)
    element.children[4].addEventListener("click", function (e) {

        e.preventDefault();
        document.querySelectorAll(".topicL .close").forEach(function (element) { element.click() })
        document.querySelectorAll(".topicL .topic").forEach(function (element) { element.style = "display:none" })
        document.querySelector(".topicL .topicL5").style = "display:flex;animation: toggleDown .5s;animation - fill - mode: forwards;"

    }, false)
})

// let topicL1Dr = document.querySelector('.topicL1 .dr');
// topicL1Dr.addEventListener("click", function (e) {
//     e.preventDefault();
// }, false)
// topicL1Dr.children[0].children[0].addEventListener("click", function (e) {
//     document.querySelector(".topicL1").style = "display: none;"
//     document.querySelector(".topicL1").style = "display: flex;";
// }, false)
// topicL1Dr.children[0].children[1].addEventListener("click", function (e) {
//     document.querySelector(".topicL1").style = "display: none;"
//     document.querySelector(".topicL2").style = "display: flex;";
// }, false)
// topicL1Dr.children[0].children[2].addEventListener("click", function (e) {
//     document.querySelector(".topicL1").style = "display: none;"
//     document.querySelector(".topicL3").style = "display: flex;";
// }, false)
// topicL1Dr.children[0].children[3].addEventListener("click", function (e) {
//     document.querySelector(".topicL1").style = "display: none;"
//     document.querySelector(".topicL4").style = "display: flex;";
// }, false)
// topicL1Dr.children[0].children[4].addEventListener("click", function (e) {
//     document.querySelector(".topicL1").style = "display: none;"
//     document.querySelector(".topicL5").style = "display: flex;";
// }, false)


// let topicL2Dr = document.querySelector('.topicL2 .dr');
// topicL2Dr.addEventListener("click", function (e) {
//     e.preventDefault();
// }, false)
// topicL2Dr.children[0].children[0].addEventListener("click", function (e) {
//     document.querySelector(".topicL2").style = "display: none;"
//     document.querySelector(".topicL1").style = "display: flex;";
// }, false)
// topicL2Dr.children[0].children[1].addEventListener("click", function (e) {
//     document.querySelector(".topicL2").style = "display: none;"
//     document.querySelector(".topicL2").style = "display: flex;";
// }, false)
// topicL2Dr.children[0].children[2].addEventListener("click", function (e) {
//     document.querySelector(".topicL2").style = "display: none;"
//     document.querySelector(".topicL3").style = "display: flex;";
// }, false)
// topicL2Dr.children[0].children[3].addEventListener("click", function (e) {
//     document.querySelector(".topicL2").style = "display: none;"
//     document.querySelector(".topicL4").style = "display: flex;";
// }, false)
// topicL2Dr.children[0].children[4].addEventListener("click", function (e) {
//     document.querySelector(".topicL2").style = "display: none;"
//     document.querySelector(".topicL5").style = "display: flex;";
// }, false)


// let topicL3Dr = document.querySelector('.topicL3 .dr');
// topicL3Dr.addEventListener("click", function (e) {
//     e.preventDefault();
// }, false)
// topicL3Dr.children[0].children[0].addEventListener("click", function (e) {
//     document.querySelector(".topicL3").style = "display: none;"
//     document.querySelector(".topicL1").style = "display: flex;";
// }, false)
// topicL3Dr.children[0].children[1].addEventListener("click", function (e) {
//     document.querySelector(".topicL3").style = "display: none;"
//     document.querySelector(".topicL2").style = "display: flex;";
// }, false)
// topicL3Dr.children[0].children[2].addEventListener("click", function (e) {
//     document.querySelector(".topicL3").style = "display: none;"
//     document.querySelector(".topicL3").style = "display: flex;";
// }, false)
// topicL3Dr.children[0].children[3].addEventListener("click", function (e) {
//     document.querySelector(".topicL3").style = "display: none;"
//     document.querySelector(".topicL4").style = "display: flex;";
// }, false)
// topicL3Dr.children[0].children[4].addEventListener("click", function (e) {
//     document.querySelector(".topicL3").style = "display: none;"
//     document.querySelector(".topicL5").style = "display: flex;";
// }, false)


// let topicL4Dr = document.querySelector('.topicL4 .dr');
// topicL4Dr.addEventListener("click", function (e) {
//     e.preventDefault();
// }, false)
// topicL4Dr.children[0].children[0].addEventListener("click", function (e) {
//     document.querySelector(".topicL4").style = "display: none;"
//     document.querySelector(".topicL1").style = "display: flex;";
// }, false)
// topicL4Dr.children[0].children[1].addEventListener("click", function (e) {
//     document.querySelector(".topicL4").style = "display: none;"
//     document.querySelector(".topicL2").style = "display: flex;";
// }, false)
// topicL4Dr.children[0].children[2].addEventListener("click", function (e) {
//     document.querySelector(".topicL4").style = "display: none;"
//     document.querySelector(".topicL3").style = "display: flex;";
// }, false)
// topicL4Dr.children[0].children[3].addEventListener("click", function (e) {
//     document.querySelector(".topicL4").style = "display: none;"
//     document.querySelector(".topicL4").style = "display: flex;";
// }, false)
// topicL4Dr.children[0].children[4].addEventListener("click", function (e) {
//     document.querySelector(".topicL4").style = "display: none;"
//     document.querySelector(".topicL5").style = "display: flex;";
// }, false)


// let topicL5Dr = document.querySelector('.topicL5 .dr');
// topicL5Dr.addEventListener("click", function (e) {
//     e.preventDefault();
// }, false)
// topicL5Dr.children[0].children[0].addEventListener("click", function (e) {
//     document.querySelector(".topicL5").style = "display: none;"
//     document.querySelector(".topicL1").style = "display: flex;";
// }, false)
// topicL5Dr.children[0].children[1].addEventListener("click", function (e) {
//     document.querySelector(".topicL5").style = "display: none;"
//     document.querySelector(".topicL2").style = "display: flex;";
// }, false)
// topicL5Dr.children[0].children[2].addEventListener("click", function (e) {
//     document.querySelector(".topicL5").style = "display: none;"
//     document.querySelector(".topicL3").style = "display: flex;";
// }, false)
// topicL5Dr.children[0].children[3].addEventListener("click", function (e) {
//     document.querySelector(".topicL5").style = "display: none;"
//     document.querySelector(".topicL4").style = "display: flex;";
// }, false)
// topicL5Dr.children[0].children[4].addEventListener("click", function (e) {
//     document.querySelector(".topicL5").style = "display: none;"
//     document.querySelector(".topicL5").style = "display: flex;";
// }, false)