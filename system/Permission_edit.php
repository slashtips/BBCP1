<!DOCTYPE html>
<html lang="en">
<?php
include  '../db/db.php';
$sql = "SELECT * FROM `users`";
$res = mysqli_query($connect, $sql);
$sql2 = "SELECT * FROM `users` where `id` = '$_GET[id]'";
$res2 = mysqli_query($connect, $sql2);
$row = mysqli_fetch_array($res2);
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>權限調整</title>
    <style>
        .wrap {
            border: 3px solid black;
            border-radius: .5rem;
            padding: 2rem;
        }
    </style>
</head>

<body>
    <div class="wrap container">
        <h3>調整會員編號<?php echo $_GET["id"]; ?>的資料</h3>
        <form action="Permission_edit_modify.php?i=<?php echo $_GET["id"]; ?>" method="POST">


            <select name="title" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                <option selected>權限調整</option>
                <option value="管理者">管理者</option>
                <option value="編輯者">編輯者</option>
                <option value="醫護人員">醫護人員</option>
            </select>

            <input type="submit" value="確定" class="btn btn-outline-success">
            <a href="../backPermissionInfo.php" class="btn btn-outline-danger">取消</a>


        </form>
    </div>
</body>




</html>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="../js/back.js"></script>