<?php
include("connect.php"); 
$cname="";
$cemail="";
$ccontact="";
$clocation="";
?>
<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Attendence system</title>
    
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Google-Style-Login.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-theme.css">
    <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="assets/css/Hero-Technology.css">
    <link rel="stylesheet" href="assets/css/Mockup-MacBook-Pro.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Google-Style-Login.css">
    <style>
    body{
        background="assets/images/gtbitbg.jpg";
        background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
    }
    </style>
</head>

<body background='assets/images/gtbitbg.jpg';
        background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
     >
        
<div id ="bg"  >

<div style="
    font-family:Nyala, Arial;
    text-align: left; 
    background-color: #526F35;
    padding: 0px; 
    color:white;
    width: auto;
    height: 200px;
    background-image:url('assets/img/gtbit.png');
    background-size:100%
    ">
    <!--This codes to load the image loader--> 
  
<!--this is the heading section-->   
    
</div>

    <div class="login-card">
        <p class="profile-name-card">Attendence system </p>
        <form class="form-signin" action="login.php" method="POST" enctype="multipart/form-data"><span class="reauth-email"> </span>
            <input class="form-control" type="text" required="" placeholder="username" name="username" autofocus="" id="username">
            <input class="form-control" type="password" required="" placeholder="Password" name="password" id="password">
            <div class="checkbox">
                <div class="checkbox">
                    <label>
                        <input type="checkbox">Remember me</label>
                </div>
            </div>
            <button class="btn btn-primary btn-block btn-lg btn-signin" type="submit" name="login">Login</button>
        </form><a href="email.php" class="forgot-password">Forgot your password?</a></div>
        </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>