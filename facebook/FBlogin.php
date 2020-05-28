<?php
	session_start();
	require_once '../vendor/autoload.php';
	require_once 'FBclient.php';

	$helper = $fb -> getRedirectLoginHelper();
	$permissions = ['email'];
	$loginUrl = $helper -> getLoginUrl('https://hiimyg.herokuapp.com/facebook/FBcallback.php?', $permissions);

	// echo '<a href = "' . $loginUrl . '"> 以FB方式登入 </a>';
	header("Location: $loginUrl");

?>