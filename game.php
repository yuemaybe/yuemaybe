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
<a href="game.php" rel="yoyoman">小遊戲啦</a> 
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
		echo "<p align='center'>登入成功！</p>";
		echo "<form align='center' action='https://hiimyg.herokuapp.com/glogout.php?'><button>登出</button></form>";
	}


?>

</div>

</body>
</html>