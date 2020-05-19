<?php

	//SQL連線(include用)
	$mysqli = new mysqli('192.168.1.13', 'gameuser', 'BEOQ8m5tplOITzFc', 'game');

	if($mysqli -> connect_error)
	{
		die ("資料庫連線失敗<br>");
	}

?>