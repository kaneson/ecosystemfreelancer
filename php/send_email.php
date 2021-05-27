<?php

$your_email="info@ecosystemfreelancer.com";
//$your_email="wesleythiago.costa@gmail.com";

if(!empty($_POST)) {
	
	foreach ($_POST as $field => $value) {
		$$field = $value;
		$data[$field] = $value;
	}

	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];
	$_subject=$_POST['subject'];
	
	$to      = $your_email;
	$subject = 'Message from site: ' . $_subject;
	$headers = 'From: ' . $name . ' <' . $email . '>' . "\r\n";
	$message = $name . ' sent you a message via the site form :' . "\r\n" . $message . "\r\n" . 'Data form :' . "\r\n" . json_encode($data);
	
	mail($to, $subject, $message, $headers);
	
	echo "<script>alert('Thank you for sending your message!');</script>";

} else {
	echo "<script>alert('Error, please try again!');</script>";
}

echo "<script>window.location = 'https://www.ecosystemfreelancer.com/';</script>";

?>
