<?php
//start session on web page
session_start();
//config.php
//Include Google Client Library for PHP autoload file
require_once 'googlevendor/autoload.php';
//Make object of Google API Client for call Google API
$google_client = new Google_Client();
//Set the OAuth 2.0 Client ID
$google_client->setClientId('730575887275-rohv93ukfntn8ovfp8jr9ivuvusa3800.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('nVw5VvpVzrG6cGZDM1hg6tgo');
//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri("http://$_SERVER[SERVER_NAME]/tsfgrip/sociallogin/Glogin.php");
// to get the email and profile 
$google_client->addScope('email');
$google_client->addScope('profile');

?> 