<?php
/*
 **************************************
 *									  *
 * Config here                        *
 *									  *
 **************************************
 */
require_once( ABSPATH . 'wp-config.php' );
require_once( ABSPATH . 'wp-load.php' );
global $wpdb

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
$mobile = $_POST['mobile'];
$number = $_POST['number'];

if (isset($name) && isset($mail) && isset($message)) {
	
	//$conn = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
	//$conn = mysql_select_db(DB_NAME);
    echo $sql ="";
	$wpdb->insert("inster into wp_contactus ('contact_name','contact_email','contact_subject','contact_comment','contact_mobile') values ('".$name."','".$mail."','".$subject."','".$message."','".$mobile."') ");

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