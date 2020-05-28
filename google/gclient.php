<?php
session_start();
require_once '../vendor/autoload.php';
$client = new Google_Client();

//導入google下載的json資料
$client -> setAuthConfig('client_secret.json');

//取得授權後拿到的資訊
$client -> addScope('https://www.googleapis.com/auth/userinfo.email'); //email
$client -> addScope('https://www.googleapis.com/auth/userinfo.profile'); //個人資料
?>