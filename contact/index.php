<?php include("mail.php") ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Breakpoint - QA, Automation, Development</title>
	
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles -->
    <link href="../breakpoint-custom.css" rel="stylesheet">
    
    <!-- Additional styles -->
    <link href="../breakpoint.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body style="padding-top:70px;">

    <div class="container">
      <div>
        <div class="navbar navbar-default navbar-fixed-top navcolor">
			<div class="container">
				<div class="navbar-header">
					<a href="" class="navbar-brand" style="padding-top:3px;"><img src="../images/logo.png"></a>
					
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					
					<span class="sr-only">Toggle navigation</span>
					
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
				</div>
				
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav" id="list">
						<li><a href="index.html">Home</a></li>
						<li><a href="">Quality Assurance</a></li>
						<li><a href="">Development</a></li>
						<li><a href="adventures/adv.php">Adventures</a></li>
						<li class="active"><a href="">Contact</a></li>
					</ul>
				</div>
			</div>
		</div>
        <!-- <h3 class="text-muted">Title</h3> -->
      </div>
      <div class="container">
      	<div class="jumbotron">
      		<img src="../images/bottle2.jpg" />
      	</div>
      </div>
      <div class="container">
      	<?php echo $result; ?>
      	<form method="post" id="contactForm">
      		<div class="form-group">
      			<label for="name">Name</label>
      			<input type="text" name="name" id="name" class="form-control" placeholder="Enter your name">
      		</div>
      		<div class="form-group">
      			<label for="email">Email</label>
      			<input type="email" name="email" id="email" class="form-control" placeholder="Enter your email address">
      		</div>
      		<div class="form-group">
      			<label for="subject">Subject</label>
      			<input type="text" name="subject" id="subject" class="form-control" placeholder="Enter text here">
      		</div>
      		<div class="form-group">
      			<label for="message">Message</label>
      			<textarea name="message" id="message" class="form-control" placeholder="Enter your message" rows="5"></textarea>
      		</div>
      		<input type="submit" class="btn btn-default" name ="submit" value="Submit">
      	</form>
      </div>

      <footer class="footer">
        <p>&copy; Brian Richardson 2014</p>
      </footer>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>