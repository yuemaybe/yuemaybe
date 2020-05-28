<?php
	session_start();
	require_once '../vendor/autoload.php';

	$fb = new Facebook\Facebook(
		[
			'app_id' => '599570660765510',
			'app_secret' => 'f33b813f2a800fe6a0d4996360167df1',
			'default_graph_version' => 'v3.1',
		]
	);

	$helper = $fb -> getRedirectLoginHelper();
	$permissions = ['email'];
	$loginUrl = $helper -> getLoginUrl('https://hiimyg.herokuapp.com/facebook/FBcallback.php?', $permissions);

	echo '<a href = "' . $loginUrl . '"> 以FB方式登入 </a>';



?>