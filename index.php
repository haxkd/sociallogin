<?php

//index.php

//Include Configuration File
require_once 'Gconfig.php';
require_once 'Fconfig.php';


if(isset($_SESSION['user_email']))
{
 header('location: profile.php');
}
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
 
 </head>
 <body>
   

<div class="container mt-5">
    <div align="center">
        <div class="container">
            <div class="jumbotron">
                <h3 class="mb-5">PLEASE LOGIN TO CONITINUE</h3>
                <a href="<?php echo $google_client->createAuthUrl()?>"><img src="google-login-image.png" class="img-responsive img-circle img-thumbnail"></a>
                <br><br><br>
                <div class="text-center social-btn">
				<a href="<?php echo $fb_helper->getLoginUrl("http://$_SERVER[SERVER_NAME]/tsfgrip/sociallogin/Flogin.php");
                ?>"><img src="facebook-login-image.png" class="img-responsive img-circle img-thumbnail"></a>
			</div>
            </div>
        </div>    
    </div>
</div>
 </body>
</html>