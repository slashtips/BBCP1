<?php
include '../db/db.php';
$id = $_GET['id'];
$sql = "UPDATE `articleM` SET `publish` = '1' WHERE `articleM`.`id` = $id;";
$res = mysqli_query($connect, $sql);
if ($res) {
    echo "<script> alert('發布成功!'); window.location.href='../back_articleMedical.html'</script>";
} else {
    echo "<script> alert('發布失敗!'); window.location.href='../back_articleMedical.html'</script>";
}

// strval($id);
// $root = realpath($_SERVER["DOCUMENT_ROOT"]);
// $currentLocation = "$root/demo/KaiBBCWebsite/store/article/article$id.php";
// $newLocation = "$root/demo/KaiBBCWebsite/store/articleRelease/article$id.php";
// $moved = rename($currentLocation, $newLocation);
// if ($moved) {
//     echo "<script> alert('發布成功!'); window.location.href='../back_articleArticleIndex.html'</script>";
// }
