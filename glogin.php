<?php

$client = new Google_client();
$client -> setAuthConfig('client_secret.json');

$client -> authenticate($_GET['code']);

$access_token = $client->getAccessToken();

$service = new Google_Service_Oauth2($client);
$user_info = $service -> userinfo -> get();

$open_id = $user_info -> id;
$email = $user_info -> email;
$name = $user_info -> name;
?>