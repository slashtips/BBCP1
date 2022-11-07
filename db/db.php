<?PHP
ob_start();

$db_server = "bbc-db-1.cftxt2nbwtqk.ap-northeast-1.rds.amazonaws.com";
$db_name = "zfcloudadmin_kaiBBC";
$db_user = "root";
$db_passwd = "zf888888";



if (!@mysqli_connect($db_server, $db_user, $db_passwd, $db_name)) {
    die("無法對資料庫連線");
}

$connect = mysqli_connect($db_server, $db_user, $db_passwd, $db_name);

mysqli_query($connect, "SET NAMES utf8");

if (!@mysqli_select_db($connect, $db_name)) {
    die("無法使用資料庫");
}
