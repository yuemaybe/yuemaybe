<!DOCTYPE html>
<html>
	<head>

		<meta charset="UTF-8">
		<title>HiImYG</title>
		<link rel="stylesheet" href="CSS.css">

	</head>
	<body bgcolor="#ECFFFF"> 
		<nav class="yoyoman">
		<a href="../index.html" rel="yoyoman">關於本人</a> 
		<a href="Portfolio.html" rel="yoyoman">關於作品</a> 
		<a href="login.php" rel="yoyoman">測試登入</a> 
	</nav>

	<div class="wiki-inner">

		<?php
			session_start();
			require_once '../vendor/autoload.php';
			
			if(!isset($_SESSION['access_token']))
			{
				echo "<h1 align='center'>請先登入</h1>";
				echo "<form align='center' action='../google/google2.php'><button>Google登入</button></form>";
				echo "<form align='center' action='../facebook/FBlogin.php'><button>FaceBook登入</button></form>";

			}

			else
			{
				if(isset($_SESSION['access_token']))
				{
					$client = new Google_Client();
					$client -> setAuthConfig('client_secret.json');
					$client -> addScope('https://www.googleapis.com/auth/userinfo.email');
					$client -> addScope('https://www.googleapis.com/auth/userinfo.profile');

					$client -> setAccessToken($_SESSION['access_token']);
					$service = new Google_Service_Oauth2($client);
					$user_info = $service -> userinfo -> get();
					$name = $user_info -> name;
					
					echo "<p align='center'>您使用的是Google登入</p>";
					echo "<p align='center'>登入成功！</p>";
					echo "<p align='center'>歡迎 " . $name . " 登入！</p>";
					echo "<form align='center' action='https://hiimyg.herokuapp.com/google/glogout.php?'><button>登出</button></form>";
				}
				elseif(isset($_SESSION['fb_access_token']))
				{
					$fb = new Facebook\Facebook(
						[
							'app_id' => '599570660765510',
							'app_secret' => 'f33b813f2a800fe6a0d4996360167df1',
							'default_graph_version' => 'v3.1',
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
					
					echo "<p align='center'>您使用的是FaceBook登入</p>";
					echo "<p align='center'>登入成功！</p>";
					echo "<p align='center'>歡迎 " . $user['name'] . " 登入！</p>";
					echo "<form align='center' action='https://hiimyg.herokuapp.com/facebook/FBlogout.php?'><button>登出</button></form>";
				}

			}
		?>

	</div>

	</body>
</html>