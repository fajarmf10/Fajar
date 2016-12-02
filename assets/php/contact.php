<?php

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->CharSet = 'UTF-8';

$mail->Host       = "mail.angkakosong.net"; // SMTP server example
$mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->Port       = 465;                    // set the SMTP port for the GMAIL server
$mail->Username   = "fajar@angkakosong.net"; // SMTP account username example
$mail->Password   = "milesaway6";        // SMTP account password example

$field_name = $_POST['y_name'];
$field_email = $_POST['y_email'];
$field_subject = $_POST['y_subject'];
$field_message = $_POST['y_message'];

$mail_to = 'fajar@angkakosong.net';
$subject = $field_subject;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Thank you for the message. We will contact you shortly.');
		window.location = 'https://angkakosong.net';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Message failed. Please, send an email to fajarmf78@gmail.com');
		window.location = 'https://angkakosong.net';
	</script>
<?php
}
?>