<?php	
	if (empty($_POST['name_2599']) && strlen($_POST['name_2599']) == 0 || empty($_POST['email_2599']) && strlen($_POST['email_2599']) == 0 || empty($_POST['message_2599']) && strlen($_POST['message_2599']) == 0)
	{
		return false;
	}
	
	$name_2599 = $_POST['name_2599'];
	$email_2599 = $_POST['email_2599'];
	$message_2599 = $_POST['message_2599'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from a Blocs website.";
	$email_body = "You have received a new message. \n\n".
				  "Name_2599: $name_2599 \nEmail_2599: $email_2599 \nMessage_2599: $message_2599 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\n";
	$headers .= "Reply-To: $email_2599";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>