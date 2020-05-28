<?php
session_start();

if(isset($_SESSION['fb_access_token']))
{
	session_destroy();
	header('Location: https://hiimyg.herokuapp.com/front/login.php?');
}
?>