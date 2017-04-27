<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$replyTo = strip_tags($_POST['replyTo']);
	$replyTo = filter_var($replyTo,FILTER_SANITIZE_EMAIL);
	
	if(!filter_var($replyTo,FILTER_VALIDATE_EMAIL)){
		echo "bad email";
		return;
	}
	else{
		$subject = strip_tags($_POST['subject']);
		$text = wordwrap(strip_tags($_POST['text']),50,"\r\n");
		$headers = 'From: contactForm@johnhiner.com' . "\r\n".
						 'Reply-To: '.$replyTo. "\r\n".
						 'X-Mailer: PHP/'.phpversion();
	
		if(!mail("johnhineriii@protonmail.com",$subject,$text,$headers)){
			echo "failure";
		}
		else{
			echo "success";
		}
	}
}
?>