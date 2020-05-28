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
		<a href="../front/Portfolio.html" rel="yoyoman">關於作品</a> 
		<a href="google.php" rel="yoyoman">測試登入</a> 
	</nav>

	<div class="wiki-inner">

		<?php
			session_start();
			require_once '../vendor/autoload.php';
			require_once '../google/gclient.php';
			
			echo 'wtf?';
		?>

	</div>

	</body>
</html>