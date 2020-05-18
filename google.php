<?php
session_start();
require_once 'vendor/autoload.php';

$client = new Google_client();

//導入google下載的json資料
$client -> setAuthConfig('client_secret.json');

//取得授權後拿到的資訊
$client -> addScope('https://www.googleapis.com/auth/userinfo.email'); //email
$client -> addScope('https://www.googleapis.com/auth/userinfo.profile'); //個人資料

//當登入完成後導向的頁面
$client -> setRedirectUri('https://yuemaybe.github.io/glogin.html');

//當刷新頁面後不會refresh token
$client -> setAccessType('offline');

$client -> setIncludeGrantedScopes(true);

//產生登入的URL
$auth_url = $client -> createAuthUrl();

//導向登入頁面
header('Location: ' . filter_var($authUrl, FILTER_SANITIZE_URL));
?>