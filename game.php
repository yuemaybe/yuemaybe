<html>
<head>

<meta charset="UTF-8">
<title>HiImYG</title>
<link rel="stylesheet" href="Test.css">

</head>
<body bgcolor="#ECFFFF"> 
<nav class="yoyoman">
<a href="index.html" rel="yoyoman">關於本人</a> 
<a href="Portfolio.html" rel="yoyoman">關於作品</a> 
<a href="game.html" rel="yoyoman">小遊戲啦</a> 
</nav>

<div class="wiki-inner">

<?php
	session_start();

	if(!isset($_SESSION['access_token']))
	{
		echo "<p align='center'>請先登入（Google）</p>";
		echo "<form align='center' action='google.php'><button>登入</button></form>";
	}else
	{
		echo "yes";
	}


?>

</div>

</body>
</html>