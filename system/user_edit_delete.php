<?php 
include  '../db/db.php';
$id = $_GET['i'];
$sql = "DELETE FROM users where `id` = $id";
echo $sql;
$res = mysqli_query($connect,$sql);

if($res)
{
    header("Location:../back.html"); 
}
else
{
    echo "刪除錯誤";
}


