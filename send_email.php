<?php

require 'FatimaNaveed201.github.io/PHPMailer-master/PHPMailerAutoload.php';

// Setting my email address
$toEmail = 'fatimanaveed201@gmail.com';

// recieving form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Create a new PHPMailer instance
$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com'; // Replace with your SMTP host
$mail->Port = 587; // Replace with your SMTP port
$mail->SMTPAuth = true;
$mail->Username = 'fatimanaveed201@gmail.com'; // Replace with your email address
$mail->Password = 'farah2011'; // Replace with your email password
$mail->setFrom($email, $name);
$mail->addAddress($toEmail);
$mail->Subject = 'New Contact Form Submission';
$mail->Body = $message;
$mail->SMTPDebug = 2;
$mail->Debugoutput = 'html';

// Sending the email
if ($mail->send()) {
    // Return success response
    http_response_code(200);
    echo 'Email sent successfully';
} else {
    // Return error response
    http_response_code(500);
    echo 'Unable to send email';
}

?>
