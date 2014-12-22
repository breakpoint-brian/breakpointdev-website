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
 	 	 		<label for="firstName">First Name</label>
 	 	 		<input type="text" id="firstName" name="firstName" class="form-control" placeholder="First Name" value="<?php echo addslashes($_POST['fName']);?>" />
 	 	 	</div>
 	 	 	<div class="form-group">
 	 	 		<label for="lastName">Last Name</label>
 	 	 		<input type="text" id="lastName" name="lastName" class="form-control" placeholder="Last Name" value="<?php echo addslashes($_POST['lName']);?>" />
 	 	 	</div>
 	 	 	<div class="form-group">
 	 	 		<label for="street">Street</label>
 	 	 		<input type="text" id="street" name="street" class="form-control" placeholder="Street" value="<?php echo addslashes($_POST['street']);?>" />
 	 	 	</div>
 	 	 	<div class="form-group">
 	 	 		<label for="city">Cityt</label>
 	 	 		<input type="text" id="city" name="city" class="form-control" placeholder="City" value="<?php echo addslashes($_POST['city']);?>" />
 	 	 	</div>
 	 	 	<div class="form-group dropdown">
 	 	 		<button class="btn btn-default dropdown-toggle" type="button" id="state" data-toggle="dropdown" aria-expanded="true">Dropdown<span class="caret"></span></button>
 	 	 			<ul class="dropdown-menu" role="menu" aria-labelledby="state">
 	 	 				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Alabama</a></li>
 	 	 				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Alaska</a></li>
 	 	 				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Arizona</a></li>
 	 	 				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Arkansas</a></li>
 	 	 				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">California</a></li>
 	 	 				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Colorado</a></li>
 	 	 				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Connecticut</a></li>
 	 	 				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Delaware</a></li>
 	 	 				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Florida</a></li>
 	 	 				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Georgia</a></li>
 	 	 				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Hawaii</a></li>
 	 	 				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Idaho</a></li>
 	 	 				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Illinois</a></li>
 	 	 				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Indiana</a></li>
 	 	 				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Iowa</a></li>
 	 	 				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Kansas</a></li>
 	 	 				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Kentucky</a></li>
 	 	 				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Louisiana</a></li>
 	 	 				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Maine</a></li>
 	 	 				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Maryland</a></li>
 	 	 				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Massachusetts</a></li>
 	 	 				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Michigan</a></li>
 	 	 				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Minnesota</a></li>
 	 	 				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Mississippi</a></li>
 	 	 				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Missouri</a></li>
 	 	 				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Montana</a></li>
 	 	 				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Nebraksa</a></li>
 	 	 				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Nevada</a></li>
 	 	 				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">New Hampshire</a></li>
 	 	 				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">New Jersey</a></li>
 	 	 				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">New Mexico</a></li>
 	 	 				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">New York</a></li>
 	 	 				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">North Carolina</a></li>
 	 	 				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">North Dakota</a></li>
 	 	 				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Ohio</a></li>
 	 	 				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Oklahoma</a></li>
 	 	 				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Oregon</a></li>
 	 	 				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Pennsylvania</a></li>
 	 	 				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Rhode Island</a></li>
 	 	 				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">South Carolina</a></li>
 	 	 				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Tennessee</a></li>
 	 	 				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Texas</a></li>
 	 	 				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Utah</a></li>
 	 	 				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Vermont</a></li>
 	 	 				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Virginia</a></li>
 	 	 				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Washington</a></li>
 	 	 				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">West Virginia</a></li>
 	 	 				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Alabama</a></li>
 	 	 				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Wisconsin</a></li>
 	 	 				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Wyoming</a></li>
 	 	 				
 	 	 			</ul>
 	 	 		<label for="state">State</label>
 	 	 		<input type="select" id="street" name="street" class="form-control" placeholder="Street" value="<?php echo addslashes($_POST['street']);?>" />
 	 	 	</div>
 	 	 	<div class="form-group">
 	 	 		<label for="phone">Phone</label>
 	 	 		<input type="text" id="phone" name="phone" class="form-control" placeholder="Phone" value="<?php echo addslashes($_POST['phone']);?>" />
 	 	 	</div>
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