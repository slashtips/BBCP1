let backMenuStr = `
 <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand fs-2 ps-2 fw-normal" style="color:#4763B0;" href="back.html">後台系統</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="btn btn-outline-primary btn-sm mt-2" href="index.php" target="_blank" role="button">前台</a>
                <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">

                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <!--<div class="user">
                            <img class="bg-black" src="pic/Common/userNone.png" alt="">
                        </div>-->
                    </ul>
                </div>
            </div>
        </nav>
`
let backMenu = document.querySelector(".backMenu");
if (backMenu) {
    backMenu.innerHTML = backMenuStr;
}