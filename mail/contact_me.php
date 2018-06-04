<?php

if(empty($_POST['name'])		||
	empty($_POST['email'])		||
	empty($_POST['message'])	||
	!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
{
	echo "No arguments Provided!";
	return false;
}

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = "stiwari@berkeley.edu";
$email_subject = "$name sent you a message!";
$email_body = "You have received a new essage from your website contact form. \n\n". "Here are the details: \n\nName: $name\n\nEmail: $email\n\nMessage:\n$message";
$headers = "From: noreply@berkeley.edu";
$headers .= "Reply-To: $email_address";
mail($to,$email_subject,$email_body,$headers);
return true;
?>