<?php

require_once '../vendor/autoload.php';
require_once 'gclient.php';
session_start();

$client = new Google_Client();
$client -> setAuthConfig('client_secret.json');
$client -> setRedirectUri('https://hiimyg.herokuapp.com/google/glogin.php?');
$client -> addScope('https://www.googleapis.com/auth/userinfo.email'); 
$client -> addScope('https://www.googleapis.com/auth/userinfo.profile');

if(!isset($_GET['code']))
{
	$auth_url = $client -> createAuthUrl();
	header('Location: ' . filter_var($auth_url, FILTER_SANITIZE_URL));
}else
{
	$client -> authenticate($_GET['code']);
	$_SESSION['access_token'] = $client -> getAccessToken();
	header('Location: https://hiimyg.herokuapp.com/google/google2.php?');
}
?>