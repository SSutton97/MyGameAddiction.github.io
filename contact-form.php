<?php
if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$visitor_email = $_POST ['email'];
	$message = $POST['message']
	
	$email_to = 'savannah.sutton97@gmail.com'

	
	$headers = "From: ".$email_from \r\n;
	
	mail($to,$email_subject, $email_body, $headers);
	
	header("Location: contact.html");
}
?>