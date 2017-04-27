<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$replyTo = strip_tags($_POST['email']);
	$subject = strip_tags($_POST['subject']);
	$text = wordwrap(strip_tags($_POST['text']),50,"\r\n");
	$headers = 'From: contactForm@johnhiner.com' . "\r\n".
						 'Reply-To: '.$replyTo. "\r\n".
						 'X-Mailer: PHP/'.phpversion();
	
	mail("johnhineriii@protonmail.com",$subject,$text,$headers);
}
?>