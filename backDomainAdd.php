<?php
include  'db/db.php';
$sql = "SELECT * FROM `domain`";
$res = mysqli_query($connect, $sql);
$row = mysqli_fetch_array($res);

?>



<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>新增Domain</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
</head>

<body>
	<div class="backMenu"></div>
	<div class="container text-center">
		<h1>新增Domain</h1>
		<form action="system/backAddDomain.php" method="post">
			<div class="mb-3">
				<label for="domain" class="form-label">domain</label>
				<input type="text" name="domain" class="form-control" id="domain" aria-describedby="emailHelp" value="">
			</div>

			<input type="submit" value="新增" class="btn btn-outline-success">
			<a class="btn btn-outline-secondary" href="back_permission.html">取消</a>
		</form>
	</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js" integrity="sha256-hlKLmzaRlE8SCJC1Kw8zoUbU8BxA+8kR3gseuKfMjxA=" crossorigin="anonymous"></script>

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

	CommonBack()
</script>