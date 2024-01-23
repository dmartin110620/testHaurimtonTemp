<?php

	if (isset($_POST['submit'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$to = 'danielmafr@unisabana.edu.co';
		$subject = 'New Message from Contact Form';
		$headers = "From: $email\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
		$message = "<p>You have received a new message from the contact form on your website.</	p>
								<p><strong>Name:</strong> $name</p>
								<p><strong>Email:</strong> $email</p>
								<p><strong>Message:</strong> $message</p>";
		mail($to, $subject, $message, $headers);
		header('Location: contact.html');
	}

	
?>
