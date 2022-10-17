<?php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('1096379617503-jvhb5fj9r6ca2ge4com48staq7ljaplk.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('https://akhtarbd.net/google_login/index.php');

//
$google_client->addScope('email');

$google_client->addScope('profile');

//start session on web page
session_start();

?>