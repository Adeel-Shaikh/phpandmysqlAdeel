<?php
if ($_POST['submit']) 
{
	$toemail = $_POST['toemail'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	if ($toemail && $message) 
	{
		$to = 'shaikhadeel31@gmail.com';
		$subject = $subject;
		$headers = "From: shaikhadeel31";
		$body = $message;

		 mail($to, $subject, $body, $headers);
		 echo "Mail sent succesfully";
	}
	else
		die("You must enter a name");
}