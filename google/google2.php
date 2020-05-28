<?php
session_start();
require_once 'vendor/autoload.php';

$client = new Google_Client();

//導入google下載的json資料
$client -> setAuthConfig('client_secret.json');

//取得授權後拿到的資訊
$client -> addScope('https://www.googleapis.com/auth/userinfo.email'); //email
$client -> addScope('https://www.googleapis.com/auth/userinfo.profile'); //個人資料


if(isset($_SESSION['access_token']) && $_SESSION['access_token'])
{
	$client -> setAccessToken($_SESSION['access_token']);
	
	$service = new Google_Service_Oauth2($client);
	$user_info = $service -> userinfo -> get();

	$open_id = $user_info -> id;
	$email = $user_info -> email;
	$name = $user_info -> name;
	
	header('Location: https://hiimyg.herokuapp.com/google/google.php?');
}
else
{
	header('Location: https://hiimyg.herokuapp.com/google/glogin.php?');
}

?>
