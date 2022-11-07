<?php
// include  'db/db.php';
// $sql = "SELECT * FROM `meeting`";
// $res = mysqli_query($connect, $sql);
// $row = mysqli_fetch_array($res);

?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>新增會議</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
	<style>
		.formInfo {
			background-color: #ddd;
		}

		.formInfo div {
			margin: 1rem 0;
		}

		.addMenu {
			display: flex;
			align-items: baseline;
			justify-content: space-between;
		}

		.inputMenu .inputGroup {
			background-color: #efefef;
			padding: 1rem;
			display: flex;
			justify-content: space-around;
			align-items: center;
			max-width: 600px;
			flex-wrap: wrap;

		}

		.inputGroup div {
			opacity: .95;
			cursor: pointer;
			margin: .5rem 1rem;
		}

		.inputGroup div:hover {
			opacity: 1;
			transform: scale(1.05);
			border-color: #777;
		}

		.divActive {
			opacity: 1 !important;
			transform: scale(1.05) !important;
			background-color: #fff !important;
			border-color: #777 !important;
		}

		.inputText {
			width: 200px;
			border: 1px #aaa solid;
			background-color: #fff;
			height: 2rem;
		}

		.inputRadio {
			width: 20px;
			height: 20px;
			border-radius: 50%;
			border: #aaa solid 1px;
			background-color: #fff;
		}

		.inputCheckBox {
			width: 20px;
			height: 20px;
			border: #aaa solid 1px;
			background-color: #fff;
		}

		.inputButton {
			white-space: nowrap;
			background-color: #fff;
			border: #aaa solid 1px;
			padding: 0.5rem;
		}

		.labelMenu .text {
			display: none;

		}

		.labelMenu .add {
			display: none;
		}

		.group {
			margin: 1rem 0;
		}
	</style>
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

</head>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js" integrity="sha256-hlKLmzaRlE8SCJC1Kw8zoUbU8BxA+8kR3gseuKfMjxA=" crossorigin="anonymous"></script>


<body>
	<div class="backMenu"></div>
	<div class="container text-center">
		<h1>新增會議</h1>
		<form action="#" method="post" class="form" enctype="multipart/form-data">


			<div class="mb-3">
				<label for="title" class="form-label">會議名稱</label>
				<input id="title" type="text" name="title" class="form-control" id="title" aria-describedby="emailHelp" value="">
			</div>

			<div class="mb-3">
				<label for="source" class="form-label">來源 </label><br>
				<input type="text" name="source" class="form-control" id="source" aria-describedby="basic-addon3">
			</div>

			<div class="mb-3">
				<div class="row">
					<div class="col-12 ">
						<label for="tag" class="form-label">標籤</label>
						<select class="form-select" id="tag" name="tag" aria-label="Default select example">
							<option value="進行中">進行中</option>
							<option value="即將到來">即將到來</option>
						</select>
					</div>
				</div>

			</div>

			<!-- <div class="mb-3">
				<label for="formFile" class="form-label">文章圖片</label>
				<input class="form-control" type="file" id="imgPath" name="imgPath" accept="image/*" type="file" placeholder="可接受 .jpg、.png、.gif 等圖檔">
			</div> -->

			<!-- <div class="mb-3">
				<label for="formFile" class="form-label">文章圖片</label>
				<input class="form-control" type="file" id="formFile" name="meetingPath" id="customFile" accept="image/*" type="file" placeholder="可接受 .jpg、.png、.gif 等圖檔">
			</div> -->

			<div class="addMenu">

				<div class="inputMenu">
					<h4>表單元素</h4>
					<div class="inputGroup">
						<div class="elementAdd inputText"></div>
						<div class="elementAdd inputRadio"></div>
						<div class="elementAdd inputCheckBox"></div>
						<div class="elementAdd inputButton">按鈕</div>
					</div>
				</div>

				<div class="labelMenu">
					<h4>元素內容</h4>
					<div class="text add">
						<div class="group">
							<label for="addTextLabel">文字框標題</label>
							<input type="text" id="addTextLabel" value="" placeholder="">
						</div>
						<div class="group">
							<label for="addTextPlaceholder">Placeholder</label>
							<input type="text" id="addTextPlaceholder" value="" placeholder="This Text">
						</div>
						<input type="button" id="addTextBtn" value="產生">
					</div>

					<div class="radio add">
						<div class="group">
							<label for="addRadioGroup">群組名稱</label>
							<input type="text" id="addRadioGroup">
							<input type="button" value="設置群組" id="setRadioGroup">
						</div>

						<div class="group">
							<label for="addRadioLabel">Radio標籤文字</label>
							<input type="text" id="addRadioLabel" value="" placeholder="">
							<input type="button" id="addRadioBtn" value="新增">
						</div>

					</div>


					<div class="checkbox add">
						<div class="group">
							<label for="addCheckboxGroup">群組名稱</label>
							<input type="text" id="addCheckboxGroup">
							<input type="button" value="設置群組" id="setCheckboxGroup">
						</div>

						<div class="group">
							<label for="addCheckboxLabel">CheckBox標籤文字</label>
							<input type="text" id="addCheckboxLabel" value="" placeholder="">
							<input type="button" id="addCheckboxBtn" value="新增">
						</div>

					</div>

					<div class="button add">
						<div class="group">
							<label for="addButtonText">按鈕文字</label>
							<input type="text" id="addButtonText">
						</div>
						<input type="button" id="addButtonBtn" value="新增">
					</div>

				</div>

			</div>



			<h3>預覽</h3>

			<div class="formInfo" id="formInfo">
				<h1></h1>
				<div class="contentB"></div>
				<div class="content"></div>
			</div>

			<input type="hidden" name="content" value="">

			<input type="submit" value="儲存" class="btn btn-outline-success store">
			<a class="btn btn-outline-secondary" href="back_meeting.html">取消</a>
		</form>
	</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


<!-- <script src="include/cke/build/ckeditor.js"></script>
<script>
	const watchdog = new CKSource.EditorWatchdog();

	window.watchdog = watchdog;

	watchdog.setCreator((element, config) => {
		return CKSource.Editor
			.create(element, config)
			.then(editor => {

				return editor;
			})
	});

	watchdog.setDestructor(editor => {



		return editor.destroy();
	});

	watchdog.on('error', handleError);

	watchdog
		.create(document.querySelector('.editor'), {

			licenseKey: '',
		})
		.catch(handleError);

	function handleError(error) {
		console.error('Oops, something went wrong!');
		console.error('Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:');
		console.warn('Build id: o4gf688yeo0p-bs15lyxfaktr');
		console.error(error);
	}
</script> -->

<script>
	let formInfo = document.querySelector("#formInfo");
	// let contentB = document.querySelector("#content");
	let title = document.querySelector("#title");

	// title.addEventListener("input", function(e) {
	// 	document.querySelector("#formInfo h1").innerHTML = title.value;
	// }, false)

	// contentB.addEventListener("input", function(e) {
	// 	alert("S")
	// 	document.querySelector("#formInfo .contentB").innerHTML = contentB.innerHTML;
	// }, false)

	// let contentInput = document.querySelector(".editor")
	// contentInput.addEventListener("keydown", function(e) {
	// 	alert("s")
	// 	// document.querySelector("#formInfo .content").innerHTML = content.innerHTML
	// }, false)


	let elementAdd = document.querySelectorAll(".elementAdd");
	elementAdd.forEach(function(element) {
		element.addEventListener("click", function(e) {
			elementAdd.forEach(function(element2) {
				element2.classList.remove("divActive");
			})
			element.classList.add("divActive");


			let add = document.querySelectorAll(".labelMenu .add")
			add.forEach(function(element) {
				element.style = "display:none"
			})

			inputText = document.querySelector(".inputText")
			inputRadio = document.querySelector(".inputRadio")
			inputCheckBox = document.querySelector(".inputCheckBox")
			inputButton = document.querySelector(".inputButton")

			if (inputText.classList.contains("divActive"))(
				document.querySelector(".labelMenu .text").style = "display:block"
			)

			if (inputRadio.classList.contains("divActive"))(
				document.querySelector(".labelMenu .radio").style = "display:block"
			)

			if (inputCheckBox.classList.contains("divActive"))(
				document.querySelector(".labelMenu .checkbox").style = "display:block"
			)

			if (inputButton.classList.contains("divActive"))(
				document.querySelector(".labelMenu .button").style = "display:block"
			)


		}, false)
	})


	let content = document.querySelector("#formInfo .content");
	//Text
	let addTextBtn = document.querySelector("#addTextBtn");
	let TextNmaeSum = 0;

	addTextBtn.addEventListener("click", function(e) {
		let div = document.createElement("div");
		div.className = "countDiv"; //DIV 共通Class
		let h4 = document.createElement("h4");
		h4.textContent = document.querySelector("#addTextLabel").value;
		let em = document.createElement("input");
		em.type = 'text';
		em.placeholder = document.querySelector("#addTextPlaceholder").value
		// em.className = 'form-control';
		// em.style = "width:80%;margin: 0 auto";

		let getText = document.querySelectorAll(".content input[type='text']");

		em.name = "text" + getText.length;
		div.appendChild(h4);
		div.appendChild(em);
		content.appendChild(div);

		// getText.forEach(function(element) {
		// 	console.log(element.length);
		// })
	}, false)

	//Radio
	let setRadioGroup = document.querySelector('#setRadioGroup')
	let radioTempStr = "";
	setRadioGroup.addEventListener("click", function(e) {
		let div = document.createElement("div");
		div.className = "countDiv"; //DIV 共通Class
		radioTempStr = document.querySelector("#addRadioGroup").value;
		div.id = radioTempStr;
		let h4 = document.createElement("h4");
		h4.textContent = radioTempStr;
		div.appendChild(h4);
		// div.dataset.dbname = h4.textContent;
		content.appendChild(div);
	}, false);

	let addRadioBtn = document.querySelector("#addRadioBtn");
	addRadioBtn.addEventListener("click", function(e) {
		let div = document.querySelector(`#${radioTempStr}`);
		let label = document.createElement("label");
		label.textContent = document.querySelector("#addRadioLabel").value;
		let em = document.createElement("input");
		em.type = 'radio';
		em.name = radioTempStr + "[]";
		em.value = document.querySelector("#addRadioLabel").value;
		div.appendChild(label)
		div.appendChild(em)

	}, false)

	//checkbox
	let setCheckboxGroup = document.querySelector('#setCheckboxGroup')
	let checkboxTempStr = "";
	setCheckboxGroup.addEventListener("click", function(e) {
		let div = document.createElement("div");
		div.className = "countDiv"; //DIV 共通Class
		checkboxTempStr = document.querySelector("#addCheckboxGroup").value;
		div.id = checkboxTempStr;
		let h4 = document.createElement("h4");
		h4.textContent = checkboxTempStr;
		div.appendChild(h4)
		// div.dataset.dbname = h4.textContent;
		content.appendChild(div)
	}, false)
	let addCheckboxBtn = document.querySelector("#addCheckboxBtn");
	addCheckboxBtn.addEventListener("click", function(e) {
		let div = document.querySelector(`#${checkboxTempStr}`);
		let label = document.createElement("label");
		label.textContent = document.querySelector("#addCheckboxLabel").value;
		let em = document.createElement("input");
		em.type = 'checkbox';
		em.value = document.querySelector("#addCheckboxLabel").value;
		// em.name = checkboxTempStr + "[]";
		div.appendChild(label)
		div.appendChild(em)

	}, false)


	let form = document.querySelector(".form");
	form.addEventListener("submit", function(e) {
		e.preventDefault();
		let countDiv = document.querySelectorAll(".countDiv");
		for (let i = 0; i < countDiv.length; i++) {
			countDiv[i].dataset.dbname = "section" + i;
			countDiv[i].dataset.inputname = countDiv[i].children[0].textContent;
			for (let j = 0; j < countDiv[i].children.length; j++) {
				let ThisnodeName = countDiv[i].children[j].nodeName
				if (ThisnodeName == "INPUT") {
					if (countDiv[i].children[j].type == "radio" || countDiv[i].children[j].type == "checkbox") {
						countDiv[i].children[j].name = "inputName" + i + "[]";
					} else {
						countDiv[i].children[j].name = "inputName" + i;
					}

				}
			}
		}
		$(document).ready(function() {

			let source = document.querySelector("#source");
			let tag = document.querySelector("#tag")
			// var fileArray = document.getElementById('imgPath').files;
			// var formData = new FormData();
			// for (var i = 0; i < fileArray.length; i++) {
			// 	formData.append("fileArray", fileArray[i]);
			// }
			// console.log(fileArray);


			$.ajax({
				type: "POST",
				url: "system/backMeetingAdd.php",
				async: false, //防止重複提交的  
				data: {
					"title": title.value,
					"content": formInfo.innerHTML,
					"source": source.value,
					"tag": tag.value
				},



				success: function(response) {
					let url = "meetingCommon.php?i=" + response;
					window.open(url);
				},
				error: function(error) {
					console.log(error);
				}

			});
		});
	}, false)
</script>

</html>
<script src="js/back.js"></script>



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

	if (getCookieByName('title') != "管理者" && getCookieByName('title') != "編輯者") {
		window.location.href = "index.html";
	}
</script>