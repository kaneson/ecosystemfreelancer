<?php

$your_email="info@ecosystemfreelancer.com";

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
	$subject = 'Message from site: '.$_subject;
	$headers = 'From: '.$name.' <'.$email.'>' . "\r\n";
	$message = $name.' sent you a message via the contact form :'."\r\n".$message;
	
	mail($to, $subject, $message, $headers);

}

?>
