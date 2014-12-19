<? include("login.php"); ?>

<!DOCTYPE html>
<html lang="en">
 <head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>The Login Page</title>
 <!-- Bootstrap -->
 <link href="../css/bootstrap.min.css" rel="stylesheet">
 <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media
queries -->
 <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
 <!--[if lt IE 9]>
 <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></
script>
 <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/
respond.min.js"></script>
 <![endif]-->

 <style>
 .navbar-brand { 	 	 
 	font-size:1.8em;
 }
 	 	
 #topContainer {
 	 	 background-image:url("weather.jpeg");
 	 	 height:400px;
 	 	 width:100%;
 	 	 background-size:cover;
 	 	 }
 	 	 	
 #topRow {
 	 	 margin-top:100px;
 	 	 text-align:center;
 }
 	 	
 #topRow h1 {
 	 	 font-size:300%;
 }
 	 	
 #emailSignup {
 	 	 margin-top:50px;
 }
 	 	
 .bold {
 	 	 font-weight:bold;
 }
 	 	
 .marginTop { 	 	 
 	margin-top:30px;
 }
 	 	
 .center {
 	 	 text-align:center;
 }
 	 	
 .title {
 	 	 margin-top:100px;
 	 	 font-size:300%;
 }
 	 	
 #footer {
 	 	 background-color:#B0D1FB;
 	 	 padding-top:70px;
 	 	 width:100%;
 }
 	 	
 .marginBottom {
 	 	 margin-bottom:30px;
 }
 .appstoreImage {
 	 	 width:250px;
 }
 
 </style>
 </head>
<body data-spy="scroll" data-target=".navbar-collapse">
	<div class="navbar navbar-default navbar-fixed-top">
		<div class="container">
 	 		<div class="navbar-header">
 	 	 		<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
 	 	 	 		<span class="icon-bar"></span>
 	 	 	 		<span class="icon-bar"></span>
 	 	 	 		<span class="icon-bar"></span>
 	 	 		</button>
 	 	 	 	<a class="navbar-brand">Login or Signup</a>
 	 		</div>
 	 	 	<div class="collapse navbar-collapse">
 	 	 		<form class="navbar-form navbar-right" method="post">
 	 	 			<div class="form-group">
 	 	 				<input type="email" class="form-control" name="loginemail" placeholder="Email" />
 	 	 			</div>
 	 	 			<div class="form-group">
 	 	 				<input type="password" class="form-control" name="loginpassword" placeholder="Password" />
 	 	 			</div>
 	 	 			<input type="submit" name="submit" class="btn btn-success" value="Log In" />
 	 	 		</form>	 	 	
 	 	 	</div>
 		</div>
	</div>

 <div class="container contentContainer" id="topContainer">

 <div class="row">
 	 	
 	 	 <div class="col-md-6 col-md-offset-3" id="topRow">
 	 	 	
 	 	 <h1 class="marginTop">Login or Signup</h1>
 	 	 	
 	 	 <p class="lead">Login or Signup Here</p>
 	 	 
 	 	 <?php
 	 	 	if ($error) {
 	 	 		echo '<div class="alert alert-danger">'.addslashes($error).'</div>';
 	 	 	}
 	 	 	if ($message) {
 	 	 		echo '<div class="alert alert-success">'.addslashes($message).'</div>';
 	 	 	}
 	 	 ?>
 	 	 	
 	 	 <form class="marginTop form-inline" method="post">
 	 	 	<div class="form-group">
 	 	 		<label for="email">Email</label>
 	 	 		<input type="email" id="email" name="email" class="form-control" placeholder="email" value="<?php echo addslashes($_POST['email']);?>" />
 	 	 	</div>
 	 	 	<div class="form-group">
 	 	 		<label for="password">Password</label>
				<input type="password" id="password" name="password" class="form-control" placeholder="password" value="<?php echo addslashes($_POST['password']);?>" />
			</div>
			<input type="submit" name="submit" class="btn btn-default" value="Sign Up" />
 	 	 </form>
 	 	 </div>
 	 	
	 </div>

 </div>


 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/
jquery.min.js"></script>
 <!-- Include all compiled plugins (below), or include individual files as
needed -->
 <script src="../js/bootstrap.min.js"></script>

 <script>

 $(".contentContainer").css("min-height",$(window).height());
  </script>
 </body>
</html> 