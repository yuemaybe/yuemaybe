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
	$helper = $fb -> getRedirectLoginHelper();

	try {
		$accessToken = $helper->getAccessToken();
	  } catch(Facebook\Exception\ResponseException $e) {
		// When Graph returns an error
		echo 'Graph returned an error: ' . $e->getMessage();
		exit;
	  } catch(Facebook\Exception\SDKException $e) {
		// When validation fails or other local issues
		echo 'Facebook SDK returned an error: ' . $e->getMessage();
		exit;
	  }

	// if(!isset($accessToken))
	// {
	// 	if($helper -> getError())
	// 	{
	// 		header('HTTP/1.0 401 Unauthorized');
	// 		echo 'Error: '	. $helper -> getError() . "\n";
	// 		echo 'ErrorCode: '	. $helper -> getErrorCode() . "\n";
	// 		echo 'Error Reason: '	. $helper -> getErrorReason() . "\n";
	// 		echo 'Error Description: '	. $helper -> getErrorDescription() . "\n";
	// 	}
	// 	else
	// 	{
	// 		header('HTTP/1.0 400 Bad Request');
	// 		echo 'Bad Request';
	// 	}
	// 	exit;
	// }

	// //登入後
	// echo '<h3>AccessToken</h3>';
	// var_dump($accessToken -> getValue());

	// //OAuth2.0會幫忙管理token
	// $oauth = $fb -> getOAuth2Client();

	// //從debug_token取得metadata
	// $tokenMetadata = $oauth -> debugToken($accessToken);
	// echo '<h3>Metadata</h3>';
	// var_dump($tokenMetadata);

	// $tokenMetadata -> validateAppId($config['599570660765510']);
	// $tokenMetadata -> validateExpiration();

	// if(!$access -> isLongLived())
	// {
	// 	try
	// 	{
	// 		$accessToken = $oauth -> getLongLivedAccessToken($accessToken);
	// 	}
	// 	catch(Facebook\Exception\SDKException $e)
	// 	{
	// 		echo '<p>Error getting long-lived access token: ' . $e -> getMessage() . '</p>\n\n';
	// 		exit;
	// 	}

	// 	echo '<h3>Long-lived</h3>';
	// 	var_dump($accessToken -> getValue());
	// }

	// $_SESSION['fb_access_token'] = (string)$accessToken;
	// //header('Location : https://hiimyg.herokuapp.com/facebook/FBtest.php?')

?>