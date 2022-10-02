<?php
include '../db/db.php';
$str = $_POST["strQA"];
$sql = "SELECT * FROM `QA` WHERE `publish` = 1 AND (`title` LIKE '%$str%' OR `content` LIKE '%$str%')  order by `id` DESC";

$res = mysqli_query($connect, $sql);

$row = mysqli_fetch_array($res);


if ($res) {
    foreach ($res as $QA) {

        // echo
        // '<li>
        //         <a href="#" data-bs-toggle="modal" data-bs-target="#QA" ' . "data-id = '" . $QA['id'] . "'" . "data-title = '" . $QA['title'] . "'" . "data-content = '" . $QA['content'] . "'" . '>     <h4>' . $QA['title'] . '</h4><p>' . $QA['content'] . '</p></a>
        // </li>' . ',';

        echo
        '<li>
                <a href="#" data-bs-toggle="modal" data-bs-target="#QA" ' . "data-id = '" . $QA['id'] . "'" . "data-title = '" . $QA['title'] . "'" . "data-content = '" . $QA['content'] . "'" . '>' . $QA['title'] . '</a>
        </li>' . ',';
    }
}
