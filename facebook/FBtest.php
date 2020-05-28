<?php
	session_start();
	require_once '../vendor/autoload.php';
	
	if(isset($_SESSION['fb_access_token']))
	{
		echo 'welcome FB';
	}
	else
	{
		echo 'failed!';
	}

?>