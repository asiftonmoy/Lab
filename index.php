<?php
session_start();
error_reporting(1);
if(!mysql_connect("localhost","root",""))
 {
  echo "<tr><td><font color=red size=4>Connection
Error</font></td></tr>";
  die();
 }
 mysql_connect("localhost","root","");
 mysql_select_db("Lab");
 
 extract($_POST);
 if(isset($signIn))
 {

	$que=mysql_query("select user,pass from admin where user='$user' and pass='$pass'");
	 $row= mysql_num_rows($que);
	 if($row)
	 {
		$_SESSION['admin']=$user;
		echo "<script>window.location='plist.php'</script>";
		
	 	
	 }
	 else
	 {
	  $err="<span class='glyphicon glyphicon-exclamation-sign' style='color:red'></span> <font color='red'>Invalid admin Login</font>";
	 }
	
 
 }
if($_SESSION['admin']!="")
{
header('plist.php');
}
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <meta name="description" content="">
    <meta name="author" content="">
   
    <title>Lab Equipment Management System</title>   
    <link href="css/bootstrap.min.css" rel="stylesheet"> 
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="css/signIn.css" rel="stylesheet">   
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- logIn form -->
        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="logInform/assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
    <!-- log in form end -->
  </head>

  <body>

    <!-- <div class="container">
	
      <form method="post" class="form-signin">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label><?php // echo $err; ?></label>
		    <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" name="user" class="form-control" placeholder="vulab@gmail.com" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="pass" id="inputPassword" class="form-control" placeholder="vulab" required>
        
        <button class="btn btn-lg btn-primary btn-block" name="signIn" type="submit">Sign in</button>
      </form>

    </div>  -->

    <!-- Top content -->
    <div class="top-content">
      
        <div class="inner-bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 text">
                        <h1><strong>Lab Equipment</strong> Management System</h1>
                        <h3><?php  echo $err; ?></h3>
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3 form-box">
                      <div class="form-top">
                        <div class="form-top-left">
                          <h3>Login to our site</h3>
                            <p>Enter your email and password to log on:</p>
                        </div>
                        <div class="form-top-right">
                          <i class="fa fa-lock"></i>
                        </div>
                        </div>
                        <div class="form-bottom">
                      <form role="form" action="" method="post" class="login-form">
                        <div class="form-group">
                          <label class="sr-only" for="form-username">Email address</label>
                            <input type="text" name="user" placeholder="vulab@gmail.com" class="form-username form-control" id="form-username">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="form-password">Password</label>
                            <input type="password" name="pass" placeholder="vulab" class="form-password form-control" id="form-password">
                        </div>
                        <button type="submit" name="signIn" class="btn">Sign in!</button>
                      </form>
                    </div>
                    </div>
                </div>
             
            </div>
        </div>
        
    </div>


    <!-- Javascript -->
    <script src="assets/js/jquery-1.11.1.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.backstretch.min.js"></script>
    <script src="assets/js/scripts.js"></script>
    
    <!--[if lt IE 10]>
        <script src="assets/js/placeholder.js"></script>
    <![endif]-->


   <!-- 
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script> -->
</body>
</html>
