<?php

	//SQL連線(include用)
	$mysqli = new mysqli('192.168.1.13', 'gameuser', '' , 'game');

	if($mysqli -> connect_error)
	{
		echo "資料庫連線失敗<br>";
	}
	else
	{
		echo "成功";
	}

?>