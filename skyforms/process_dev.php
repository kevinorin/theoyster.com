<?php
if( isset($_POST['fname']) )
{
	$to = 'bart@mermaidnyc.com'; // Replace with your email	
	$subject = 'Oyster Contact Form Test'; // Replace with your $subject
	$headers = 'From: ' . $_POST['email'] . "\r\n" . 'Reply-To: ' . $_POST['email'];	
	
	$message = 'First Name: ' . $_POST['fname'] . "\n" .
			   'Last Name: ' . $_POST['lname'] . "\n" .
			   'Phone: ' . $_POST['phone'] . "\n" .
	           'Email: ' . $_POST['email'] . "\n" .
			   'Address: ' . $_POST['address'] . "\n" .
			   'City: ' . $_POST['city'] . "\n" .
			   'State/Province: ' . $_POST['state'] . "\n" .
			   'Zip: ' . $_POST['zip'];
	
	mail($to, $subject, $message, $headers);	
	if( $_POST['copy'] == 'on' )
	{
		mail($_POST['email'], $subject, $message, $headers);
	}
}
?>