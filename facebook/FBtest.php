<?php
	session_start();
	require_once '../vendor/autoload.php';

	$fb = new Facebook\Facebook(
		[
			'app_id' => '599570660765510',
			'app_secret' => 'f33b813f2a800fe6a0d4996360167df1',
			'default_graph_version' => 'v2.10',
		]
	);
	
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