<?php
	$name = $_POST['name'];
	$visitor_email = $_POST ['email'];
	$message = $POST['message']
	
	$email_from = 'thegameaddcit@gmail.com'
	
	$email_subject = "New form submission";
	
	$email_body = "User Name: $name. \n".
					"User Email: $visitor_email.\n";
						"User Message: $message.\n";
						
	$to = "savannah.sutton97@gmail.com";
	
	$headers = "From $email_from \r\n"
	
	$headers .="Reply-To: $visitor_email \r\n";
	
	mail($to,$email_subject, $email_body, $headers);
	
	header("contact.html");
?>