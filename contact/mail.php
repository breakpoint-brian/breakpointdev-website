<?php
	$to = "brian@breakpointdev.com";
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	$headers = $_POST['email'];
	
	if ($_POST['submit']) {
	
		if (!$_POST['name']) {
			$error="<br />Please enter your name";
		}
	
		if (!$_POST['email']) {
		
			$error.="<br />Please enter your email address";
		}
		if (!$_POST['subject']) {
		
			$error.="<br />Please enter a subject";
		}
		if (!$_POST['message']) {
		
			$error.="<br />Please enter a message";
		}
		if ($_POST['email']!="" AND !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
		
			$error.="<br />Please enter a valid email address";
		}
		if ($error) {
			$result='<div class="alert alert-danger"><strong>There were error(s) in your submission:</strong>'.$error.'</div>';
		} else {
			if (mail("brian@breakpointdev.com", $_POST['subject'], $_POST['message'])) {
				$result='<div class="alert alert-success">Thanks for sending me a message. I will be in contact soon.</div>';	
			} else {
				$result='<div class="alert alert-danger"><strong>There was a problem sending your message. Please try again later.</strong></div>';
			}
		}
		
	}
?>