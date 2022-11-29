<?php

$errors = [];
$errorMessage = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {//when the method "POST" is sent
	if (!empty($_POST)) { //if nothing is empty
		$name = $_POST['name'];
		$mail = $_POST['mail'];
		$message = $_POST['message'];

		if (empty($name)) {//error if name is empty
			$errors[] = 'Name is empty';
		}

		if (empty($mail)) {//error if mail is empty or invalid
			$errors[] = 'Email is empty';
		} else if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
			$errors[] = 'Email is invalid';
		}

		if (empty($message)) {//error if message is empty
			$errors[] = 'Message is empty';
		}


		if (empty($errors)) {//if there's no error, continue, and prepare a mail to send
			$toEmail = 'prosper.auffret@gmail.com';
			$mailSubject = 'New Email from your website';
			$headers = ['From' => $mail, 'Reply-To' => $mail, 'Content-type' => 'text/html; charset=iso-8859-1'];

			$bodyParagraphs = ["Name: {$name}", "Email: {$mail}", "Message:", $message];
			$body = join(PHP_EOL, $bodyParagraphs);
			
			if(mail("prosper.auffret@gmail.com","new message from ${name} on your website.","{$body}")){//if mail is sent show success message
				$errorMessage = "<div class='alert alert-success info' role='alert'>thank you for contacting me!</div>";
			}else{//else show error message
				$errorMessage = "<div class='alert alert-danger info' role='alert'>an error occured, please contact me directly by phone or mail</div>";
			}
			
		} else {//if there's an error, send it.
			$allErrors = join('<br/>', $errors);
			$errorMessage = "<div class='alert alert-danger info' role='alert'>{$allErrors}</div>";
		}
	}
}