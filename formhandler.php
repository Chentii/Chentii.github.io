<?php 
	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];


	$email_from= "paul.chenti98@e-uvt.ro"

	$email_subject = "Un nou mesaj primit de pe platformă"

	$email_body = "Numele: $name.\n".	
					"Email utilizator: $visitor_email.\n".
					"Subiect: $subject.\n".
					"Mesaj: $message.\n";

	$to = 'chentipaul98@gmail.com';
	$headers = "De la: $email_from \r\n"
	$headers .= "Răspunde către:  $visitor_email \r\n";

	mail($to,$email_subject,$email_body,$headers);

	header("Locație: contact.html")

 ?>