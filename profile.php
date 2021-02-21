<?php
session_start();
if(!isset($_SESSION['user_email']))
{
 header('location: index.php');
}
?>
<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" >
</head>
<body>
<style>
.btn{
    background-image: -webkit-linear-gradient(0deg,#f9b700 0% , #ee390f  100%);
}
.btn:hover {
  background-image: -webkit-linear-gradient(0deg,#ee390f  0%,#f9b700 100%);
  color: #fff;
}
</style>

<main role="main" class="container mt-5">
    <div class="jumbotron">
        <h1 align="center" class="mb-5">-: USER PROFILE :-</h1>
        <p class="lead ml-5">Welcome user !</p>
        <div class="row">
            <div class="col-md-6">
                <img src="<?php echo $_SESSION["user_image"];?>" class="img-responsive img-circle img-thumbnail ml-5" style="height:80%;width:60%;" />
            </div>
            <div class="col-md-6">
                <h3 class="mb-5"><b>Name :</b> <?php echo $_SESSION['user_name'];?></h3>
                <h3 class="my-5"><b>Email :</b> <?php echo $_SESSION['user_email']; ?></h3>
                <a class="btn btn-lg btn-primary mt-5 ml-5" href="logout.php" >LOGOUT &raquo;</a>
            </div>
        </div>
    </div>
</main>
</body>
</html>