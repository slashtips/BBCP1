<?php
include  '../db/db.php';
$sql = "SELECT * FROM `SMTP` WHERE id = '1' ";
$res = mysqli_query($connect, $sql);
$row = mysqli_fetch_array($res);

$SMTP_Server = $row["SMTP_Server"];
$SMTP_Email = $row["SMTP_Email"];
$SMTP_Password = $row["SMTP_Password"];
$Port = $row["Port"];
$Send_ID = $row["Send_ID"];
$Reply_Email = $row["Reply_Email"];

$email = $_POST["email"];
// date_default_timezone_set('Asia/Taipei'); //時區
// $date = date("Y-m-d H:i:s"); //日期
//加入會員


$sqlU = "SELECT * FROM `users` WHERE `users`.`email` = '$email'";
$resU = mysqli_query($connect, $sqlU);
foreach ($resU as $user) {
    $firstName = $user["firstName"];
    $lastName = $user["lastName"];
}

// $rowE = mysqli_fetch_array($resE);
// if (isset($rowE['email'])) {
//     header("Location:../../?email=$email&restrict=此Email已經被註冊");
//     exit();
// }

// $sql = "INSERT INTO `users` ( `firstName`, `lastName`, `emil`, `password`, `date`, `status`) VALUES ( '$firstName', '$lastName', '$email', '$password1', '$date', '0');";
// $res = mysqli_query($connect, $sql);
$r1 = rand(0, 9);
$r2 = rand(0, 9);
$r3 = rand(0, 9);
$r4 = rand(0, 9);
$r5 = rand(0, 9);
$r6 = rand(0, 9);

$random = $r1 . $r2 . $r3 . $r4 . $r5 . $r6;
$randomCode = rtrim(strtr(base64_encode($random), '+/', '-_'), '=');

$randomDecode =  base64_decode(str_pad(strtr($randomCode, '-_', '+/'), strlen($randomCode) % 4, '=', STR_PAD_RIGHT));

// require 'include/PHPMailer/src/Exception.php';
// require 'include/PHPMailer/src/PHPMailer.php';
// require 'include/PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

require '../include/PHPMailer/src/Exception.php';
require '../include/PHPMailer/src/PHPMailer.php';
require '../include/PHPMailer/src/SMTP.php';



$mail = new PHPMailer();

try {
    //服务器配置
    $mail->CharSet = "UTF-8";                     //设定邮件编码
    $mail->SMTPDebug = 0;                        // 调试模式输出
    $mail->isSMTP();                             // 使用SMTP
    $mail->Host = $SMTP_Server;                 // SMTP服务器
    $mail->SMTPAuth = true;                      // 允许 SMTP 认证
    $mail->Username = $SMTP_Email;                // SMTP 用户名  即邮箱的用户名
    $mail->Password = $SMTP_Password;             // SMTP 密码  部分邮箱是授权码(例如163邮箱)
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;

    // 允许 TLS 或者ssl协议
    $mail->Port = $Port;                              // 服务器端口 25 或者465 具体要看邮箱服务器支持

    $mail->setFrom($SMTP_Email, $Send_ID);  //发件人
    $mail->addAddress($email, $lastName);  // 收件人
    //$mail->addAddress('ellen@example.com');  // 可添加多个收件人
    $mail->addReplyTo($Reply_Email, 'Reply'); //回复的时候回复给哪个邮箱 建议和发件人一致
    //$mail->addCC('cc@example.com');                    //抄送
    $mail->addBCC('royz1110110@gmail.com');                    //密送

    //发送附件
    // $mail->addAttachment('../xy.zip');         // 添加附件
    // $mail->addAttachment('../thumb-1.jpg', 'new.jpg');    // 发送附件并且重命名
    $local =  $_SERVER['HTTP_HOST'];
    //Content
    $mail->isHTML(true);                                  // 是否以HTML文档格式发送  发送后客户端可直接显示对应HTML内容
    $mail->Subject = "【更換密碼】";
    $body = "
        <h1>親愛的「 $firstName  $lastName 」您好</h1>
        <p>您的驗證碼為<span>$random</span></p>
        
        <h3>請點擊<a href='$local/system/user_forgetVertify.php?email=$email&code=$randomCode'>連結</a>驗證：）<br>
    </h3>
    " . "<br>" . $date . "本信由系統發送";
    $mail->Body    = "$body";
    $mail->AltBody = '沒有支援html';
    $mail->send();
} catch (Exception $e) {
    echo '信箱寄送失敗: ', $mail->ErrorInfo;
}
