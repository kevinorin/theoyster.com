<?php
if( isset($_POST['name']) )
{
	$to = 'bart@mermaidnyc.com'; // Replace with 'info@greystonerentals.com,daniel@greystonerentals.com,bart@mermaidnyc.com' for production
	$subject = 'Contact Form Submission'; // Replace with your $subject
	//$headers = 'From: ' . $_POST['email'] . "\r\n" . 'Reply-To: ' . $_POST['email'];
	$headers = "From: " . strip_tags($_POST['email']) . "\r\n";
	$headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		
	$message = '<html><body>';
	$message .= '<strong>Greystone Contact Form Submission</strong>';
	$message .= '<br><br><strong>Name</strong>: ' . $_POST['name'] . "\n" .
	           '<br><strong>Email</strong>: ' . $_POST['email'] . "\n" .
			   '<br><strong>Message</strong>: ' . $_POST['info'];
	$message .= "</body></html>";
	
	mail($to, $subject, $message, $headers);	
	
	//bm this starts the auto-response section
	$subject = "Thank You from The Greystone";
	
	$message = '<html><body>';
	$message .= "<strong>Hello!</strong>
<br><br>Thank you for inquiring about our apartments at The Greystone. We look forward to helping you find a new home.  A leasing representative will contact you to schedule a time for a showing.

<br><br>Just as a reminder, our offices are open everyday except Wednesday, during normal business hours. We welcome you to stop by anytime. We look forward to speaking with you soon.

<br><br>Best,
<br>Greystone Leasing Team";
	
	$message .= "</body></html>";
	
	$headers2 = "From: 'info@greystonerentals.com'\r\n";
	$headers2 .= "Content-type:  text/html\r\n";
	mail($_POST['email'], $subject, $message, $headers2);
}
?>