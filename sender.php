<?php
/*
 **************************************
 *									  *
 * Config here                        *
 *									  *
 **************************************
 */

$to = 'YOUR_EMAIL_ADDRESS';
$siteName = "YOUR_SITE_NAME";

/*
 *************************************************************
 *									                         *
 *      Don't Change below code, if you don't know php.      *
 *									                         *
 *************************************************************
 */

$name = $_POST['fname'];
$mail = $_POST['email'];
$subject = $_POST['subj'];
$message = $_POST['mssg'];
$number = $_POST['number'];

if (isset($name) && isset($mail) && isset($message)) {
	

	$mailSub = '[Contact] [' . $siteName . '] '.$subject;

	$body = 'Sender Name: ' . $name . "\n\n";
	$body .= 'Sender Mail: ' . $mail . "\n\n";
	$body .= 'Message Subject: ' . $subject . "\n\n";
	$body .= 'Message: ' . $message;

	$header = 'From: ' . $mail . "\r\n";
	$header .= 'Reply-To:  ' . $mail . "\r\n";
	$header .= 'X-Mailer: PHP/' . phpversion();

	echo mail($to, $mailSub, $body, $header);
}elseif(isset($name) && isset($mail) && isset($number)){

	$mailSub = '[Contact] [' . $siteName . '] '.$subject;

	$body = 'Sender Name: ' . $name . "\n\n";
	$body .= 'Sender Mail: ' . $mail . "\n\n";
	$body .= 'Message Subject: ' . $subject . "\n\n";
	$body .= 'Message: ' . $message;
	 // a random hash will be necessary to send mixed content
    $separator = md5(time());

    // carriage return type (RFC)
    $eol = "\r\n";

	$header = 'From: ' . $mail . "\r\n";
	$header .= 'Reply-To:  ' . $mail . "\r\n";
	$header .= "Content-Type: multipart/mixed; boundary=\"" . $separator . "\"" . $eol;
	$header .= 'X-Mailer: PHP/' . phpversion();

	echo mail($to, $mailSub, $body, $header);

}else{
	echo '0';
}
?>