<?PHP
ob_start();

$db_server = "localhost";
$db_name = "BBC";
$db_user = "root";
$db_passwd = "rochebbc2022";



if (!@mysqli_connect($db_server, $db_user, $db_passwd, $db_name)) {
    die("無法對資料庫連線");
}

$connect = mysqli_connect($db_server, $db_user, $db_passwd, $db_name);

mysqli_query($connect, "SET NAMES utf8");

if (!@mysqli_select_db($connect, $db_name)) {
    die("無法使用資料庫");
}
