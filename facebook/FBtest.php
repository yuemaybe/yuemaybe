<?php
	session_start();
	require_once '../vendor/autoload.php';
	require_once 'FBclient.php';
	
	try{
		$response = $fb -> get('/me?field=id,name' , $_SESSION['fb_access_token']);
	}
	catch(Facebook\Exception\ResponseException $e) 
	{
		echo 'Graph returned an error: ' . $e->getMessage();
		exit;
	} 
	catch(Facebook\Exception\SDKException $e) 
	{
		echo 'Facebook SDK returned an error: ' . $e->getMessage();
		exit;
	}

	$user = $response -> getGraphUser();
	echo 'hello ' . $user['name'] . ' 你的ID為 ' . $user['id'];

?>