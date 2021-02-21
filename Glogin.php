<?php


require_once 'Gconfig.php';


if(isset($_GET["code"]))
{
 $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);

 if(!isset($token['error']))
 {
 
  $google_client->setAccessToken($token['access_token']);
 
  $_SESSION['user_login'] = $token['access_token'];

  $google_service = new Google_Service_Oauth2($google_client);
 
  $data = $google_service->userinfo->get();
     
  if(!empty($data['given_name']))
  {
   $_SESSION['user_first_name'] = $data['given_name'];
  }else{
    $_SESSION['user_first_name'] = '';
  }

  if(!empty($data['family_name']))
  {
   $_SESSION['user_last_name'] = $data['family_name'];
  }
  else{
    $_SESSION['user_last_name'] = '';
  }
  $_SESSION['user_name'] = $_SESSION['user_first_name'].' '.$_SESSION['user_last_name'];
  if(!empty($data['email']))
  {
   $_SESSION['user_email'] = $data['email'];
  }
  if(!empty($data['picture']))
  {
   $_SESSION['user_image'] = $data['picture'];
  }
 }
}

if(isset($_SESSION['user_email']))
{
 header('location: profile.php');
}
?>