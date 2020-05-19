<?php
	if(!extension_loaded('mysqli') && !function_exists('mysqli_init'))
	{
		echo "No SQL";
	}
	else
	{
		echo "Yes SQL";
	}
	

	
?>