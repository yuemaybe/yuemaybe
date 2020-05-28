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
			require_once '../google/gclient.php';
			
			if(!isset($_SESSION['access_token']) && !isset($_SESSION['fb_access_token']))
			{
				echo "<h1 align='center'>請先登入</h1>";
				echo "<form align='center' action='../google/google2.php'><button>Google登入</button></form>";
				echo "<form align='center' action='../facebook/FBlogin.php'><button>FaceBook登入</button></form>";
			}

			else
			{
				echo 'hhh';
			}
		?>

	</div>

	</body>
</html>