<?php
	if(!extension_loaded('mysqli') && !function_exists('mysqli_init'))
	{
		echo "No SQL";
	}
	else
	{
		echo "Yes SQL";
	}
	
	$mysqli = new mysqli('192.168.1.13', 'gameuser', '' , 'test');
	
	if(!$mysqli)
	{
		die '連線失敗';
	}
	else
	{
		echo "連線成功";
	}
	
?>