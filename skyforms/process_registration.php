<?php
if( isset($_POST['name']) )
{
	$to = 
	'bart@mermaidnyc.com'; // Replace with 'info@greystonerentals.com,daniel@greystonerentals.com,bart@mermaidnyc.com' for production
	$subject = 'Appointment Registration Form Submission'; // Replace with your $subject
	//$headers = 'From: ' . $_POST['email'] . "\r\n" . 'Reply-To: ' . $_POST['email'];
	$headers = "From: " . strip_tags($_POST['email']) . "\r\n";
	$headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";	
	
	$message = '<html><body>';
	$message .= '<strong>Greystone Appointment Form Submission</strong>';
	$message .= '<br><br><strong>Name</strong>: ' . $_POST['name'] . "\n" .
	           '<br><strong>Time</strong>: ' . $_POST['time'] . "\n" .
			   '<br><strong>Date</strong>: ' . $_POST['date'] . "\n" .
			   '<br><strong>Street</strong>: ' . $_POST['street'] . "\n" .
			   '<br><strong>City/State</strong>: ' . $_POST['city_state'] . "\n" .
			   '<br><strong>Zip</strong>: ' . $_POST['zip'] . "\n" .
			   '<br><strong>Phone</strong>: ' . $_POST['phone'] . "\n" .
			   '<br><strong>Email</strong>: ' . $_POST['email'] . "\n" .
			   '<br><strong>Visited Before?</strong>: ' . $_POST['visited'] . "\n" .
			   '<br><strong>Studio</strong>: ' . $_POST['studio'] . "\n" .
			   '<br><strong>1BR</strong>: ' . $_POST['1br'] . "\n" .
			   '<br><strong>2BR</strong>: ' . $_POST['2br'] . "\n" .
			   '<br><strong>3BR</strong>: ' . $_POST['3br'] . "\n" .
			   '<br><strong>Price Range - Low</strong>: ' . $_POST['price_low'] . "\n" .
			   '<br><strong>Price Range - High</strong>: ' . $_POST['price_high'] . "\n" .
			   '<br><strong>Additional Occupants</strong>: ' . $_POST['occupants'] . "\n" .
			   '<br><strong>Desired Date</strong>: ' . $_POST['occupancy_date'] . "\n" .
			   '<br><strong>Any Pets?</strong>: ' . $_POST['pets'] . "\n" .
			   '<br><strong>Accompanied by Broker?</strong>: ' . $_POST['broker'] . "\n" .
			   '<br><strong>Broker Name</strong>: ' . $_POST['broker_name'] . "\n" .
			   '<br><strong>Broker Company</strong>: ' . $_POST['broker_company'] . "\n" .
			   '<br><strong>Other Message</strong>: ' . $_POST['learn_other'] . "\n" .
			   '<br><strong>Real Estate Broker</strong>: ' . $_POST['broker'] . "\n" .
			   '<br><strong>Craigslist.com</strong>: ' . $_POST['craigslist'] . "\n" .
			   '<br><strong>Google Search</strong>: ' . $_POST['google'] . "\n" .
			   '<br><strong>Facebook</strong>: ' . $_POST['facebook'] . "\n" .
			   '<br><strong>Time Out NY</strong>: ' . $_POST['timeout'] . "\n" .
			   '<br><strong>Personal Referral</strong>: ' . $_POST['personal_ref'] . "\n" .
			   '<br><strong>Building Sign/Walk By</strong>: ' . $_POST['sign_walkby'] . "\n" .
			   '<br><strong>Curbed.com</strong>: ' . $_POST['curbed'] . "\n" .
			   '<br><strong>NYTimes.com</strong>: ' . $_POST['nytimes'];
	//$message .= "</table>";
	$message .= "</body></html>";	   
	
	mail($to, $subject, $message, $headers, $title);	
	
	//bm this starts the auto-response section
	$subject = "Thank You from The Greystone";
	
	$message = '<html><body>';
	$message .= "<strong>Hello!</strong>
<br><br>Thank you for filling out our Appointment Registration Form for The Greystone. We look forward to helping you find a new home.  A leasing representative will contact you to schedule a time for a showing.

<br><br>Just as a reminder, our offices are open everyday except Wednesday, during normal business hours. We welcome you to stop by anytime. We look forward to speaking with you soon.

<br><br>Best,
<br>Greystone Leasing Team";
	
	$message .= "</body></html>";
	
	$headers2 = "From: 'info@greystonerentals.com'\r\n";
	$headers2 .= "Content-type:  text/html\r\n";
	mail($_POST['email'], $subject, $message, $headers2);
}
?>