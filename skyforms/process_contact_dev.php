<?php
if( isset($_POST['name']) )
{
	$to = 'bart@mermaidnyc.com'; // Replace with your email	
	$subject = 'Oyster Contact Form Test'; // Replace with your $subject
	//$headers = 'From: ' . $_POST['email'] . "\r\n" . 'Reply-To: ' . $_POST['email'];
	$headers = "From: " . strip_tags($_POST['email']) . "\r\n";
	$headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		
	$message = '<html><body>';
	$message .= '<strong>Oyster Contact Form Test</strong>';
	$message .= '<br><br><strong>First Name</strong>: ' . $_POST['fname'] . "\n" .
				'<br><br><strong>Last Name</strong>: ' . $_POST['lname'] . "\n" .
	           '<br><strong>Phone</strong>: ' . $_POST['phone'] . "\n" .
			   '<br><strong>Email</strong>: ' . $_POST['email'] . "\n" .
			   '<br><strong>Address</strong>: ' . $_POST['address'] . "\n" .
			   '<br><strong>City</strong>: ' . $_POST['city'] . "\n" .
			   '<br><strong>State</strong>: ' . $_POST['state'] . "\n" .													
			   '<br><strong>Zip</strong>: ' . $_POST['zip'];
	$message .= "</body></html>";
	
	mail($to, $subject, $message, $headers);	
	
	//bm this starts the auto-response section
	$subject = "Thank You from The Oyster";
	
	$message = '<html><body>';
	$message .= "<strong>Hello!</strong>
<br><br>Thank you for inquiring about our residences at The Oyster! A sales representative will contact you to schedule a time for a showing.

<br><br>The Oyster";
	
	$message .= "</body></html>";
	
	$headers2 = "From: The Oyster <bart@mermaidnyc.com>\r\n";
	$headers2 .= "Content-type:  text/html\r\n";
	mail($_POST['email'], $subject, $message, $headers2);
}
?>