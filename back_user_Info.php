<?php
include 'db/db.php';
$sql  = "SELECT * FROM `users`";
$res = mysqli_query($connect, $sql);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="include/fontawesome-free-6.1.2-web/css/all.css">
    <link rel="stylesheet" href="include/fontawesome-free-6.1.2-web/js/all.js">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <style>
        * {
            font-family: 'Kiwi Maru';
        }

        body,
        html {
            height: 100%;

        }

        .content {
            height: 90vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .content a {
            text-decoration: none;
        }

        .content .card {
            padding: 1.5rem;
            margin-top: 1rem;
        }

        .content .card i {
            font-size: 5rem;
            color: #3975D4;
            text-shadow: 0 0 5px rgba(60, 120, 200, .4);
        }

        .content .card:hover {
            transform: scale(1.05);
            transition: .25s;
            cursor: pointer;
            box-shadow: 0 0 20px rgba(255, 255, 255, .3);
        }

        .content .card h3 {
            color: #FA7188;
            font-weight: 400;
            padding: .5rem 0 0 0;
        }
    </style>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

</head>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js" integrity="sha256-hlKLmzaRlE8SCJC1Kw8zoUbU8BxA+8kR3gseuKfMjxA=" crossorigin="anonymous"></script>

<body>

    <div class="backMenu"></div>
    <div class="container">
        <div class="table-responsive"></div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">編號</th>
                    <th scope="col">姓氏</th>
                    <th scope="col">姓名</th>
                    <th scope="col">信箱</th>
                    <th scope="col">密碼</th>
                    <th scope="col">註冊日期</th>
                    <th scope="col">身分</th>
                    <th scope="col">大頭貼</th>
                    <th scope="col">狀態</th>

                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($res as $user) {
                    echo "<tr>";
                    echo "<td>" . $user['id'] . "</td>";
                    echo "<td>" . $user['firstName'] . "</td>";
                    echo "<td>" . $user['lastName'] . "</td>";
                    echo "<td>" . $user['email'] . "</td>";
                    echo "<td>" . $user['password'] . "</td>";
                    echo "<td>" . $user['date'] . "</td>";
                    echo "<td>" . $user['title'] . "</td>";
                    echo "<td>" . $user['photoPath'] . "</td>";
                    echo "<td>" . $user['status'] . "</td>";
                    echo "<td>" . "<a href='system/user_edit.php?i=$user[id]' class='btn btn-outline-success me-2'>編輯</a>";
                    echo "</tr>";
                }
                ?>
            </tbody>

        </table>
    </div>


</body>

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