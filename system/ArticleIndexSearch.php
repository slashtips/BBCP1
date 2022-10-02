<?php
include '../db/db.php';
$str = $_POST["str"];
$sql = "SELECT * FROM `article` WHERE  `publish` = 1 AND ( `title` LIKE '%$str%' OR `content` LIKE '%$str%')   order by `id` DESC";

$res = mysqli_query($connect, $sql);

$row = mysqli_fetch_array($res);


if ($res) {
    foreach ($res as $article) {

        // echo
        // '<li>
        //         <a href="ArticleCommon.php?i='. $article['id'] .'"><h4>' . $article['title'] . '</h4><p>' . $article['content'] . '</p></a>
        // </li>' . ',';
        echo '<li><a href="ArticleCommon.php?i=' . $article['id'] . '">' . $article['title'] . '</a></li>' . ',';
    }
}
