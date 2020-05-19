<?php
	if(!extension_loaded('mysqli') && !function_exists('mysqli_init'))
	{
		echo "No SQL";
	}
	else
	{
		echo "Yes SQL";
	}
	
	$mysqli = new mysqli('192.168.1.13', 'gameuser', '', 'game');
	

	
?>