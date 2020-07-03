<?php

require_once ('GoogleAPI/vendor/autoload.php');
session_start();
$client = new Google_Client();
$client->setAuthConfig('client_credentials.json');
$client->addScope([Google_Service_oauth2::PLUS_LOGIN, Google_Service_oauth2::USERINFO_EMAIL]);
$client->setRedirectUri("http://localhost/bookstoremvc/callback.php");


?>

