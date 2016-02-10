<?php
if( isset($_POST['name']) )
{
	$to = 'bart@mermaidnyc.com'; // Replace with emails from the client for production
	$subject = 'Contact Form Submission'; // Replace with your $subject
	//$headers = 'From: ' . $_POST['email'] . "\r\n" . 'Reply-To: ' . $_POST['email'];
	$headers = "From: " . strip_tags($_POST['email']) . "\r\n";
	$headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		
	$message = '<html><body>';
	$message .= '<strong>The Oyster Contact Form Submission</strong>';
	$message .= '<br><br><strong>Name</strong>: ' . $_POST['name'] . "\n" .
	           '<br><strong>Email</strong>: ' . $_POST['email'] . "\n" .
			   '<br><strong>Message</strong>: ' . $_POST['info'];
	$message .= "</body></html>";
	
	mail($to, $subject, $message, $headers);	
	
	//bm this starts the auto-response section
	$subject = "Thank You from The Oyster";
	
	$message = '<html><body>';
	$message .= "<strong>Hello!</strong>
<br><br>Thank you for inquiring about the Oyster.  A sales representative will contact you to schedule a time for a showing.

<br><br>Best,
<br>The Oyster";
	
	$message .= "</body></html>";
	
	$headers2 = "From: 'info@theoyster.com'\r\n";
	$headers2 .= "Content-type:  text/html\r\n";
	mail($_POST['email'], $subject, $message, $headers2);
}
?>