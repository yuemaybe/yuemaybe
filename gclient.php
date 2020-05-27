<?php
session_start();
require_once 'vendor/autoload.php';
$client = new Google_Client();
$client -> setAuthConfig('client_secret.json');
$client -> addScope('https://www.googleapis.com/auth/userinfo.email'); //email
$client -> addScope('https://www.googleapis.com/auth/userinfo.profile'); //個人資料

?>