<!DOCTYPE html>
<html>
	<head>

		<meta charset="UTF-8">
		<title>HiImYG</title>
		<link rel="stylesheet" href="../front/CSS.css">

	</head>
	<body bgcolor="#ECFFFF"> 
		<nav class="yoyoman">
		<a href="../index.html" rel="yoyoman">關於本人</a> 
		<a href="../front/Portfolio.html" rel="yoyoman">關於作品</a> 
		<a href="google.php" rel="yoyoman">小遊戲啦</a> 
	</nav>

	<div class="wiki-inner">

		<h1 align='center'>請先登入</h1>

		<?php
			session_start();
			require_once '../vendor/autoload.php';
			require_once 'gclient.php';
			
			if(!isset($_SESSION['access_token']))
			{
				echo "<p align='center'>請先登入（Google）</p>";
				echo "<form align='center' action='google2.php'><button>登入</button></form>";
			}
			
			else
			{
				$client -> setAccessToken($_SESSION['access_token']);
				$service = new Google_Service_Oauth2($client);
				$user_info = $service -> userinfo -> get();
				$open_id = $user_info -> id;
				$email = $user_info -> email;
				$name = $user_info -> name;
				
				echo "<p align='center'>登入成功！</p>";
				echo "<p align='center'>歡迎 " . $name . " 玩家登入！</p>";
				echo "<form align='center' action='https://hiimyg.herokuapp.com/google/glogout.php?'><button>登出</button></form>";
			}
		?>

	</div>

	</body>
</html>