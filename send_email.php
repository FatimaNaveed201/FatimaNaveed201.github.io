<?php
// Set your email address
$toEmail = 'fatimanaveed201@gmail.com';

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Set email headers
$headers = "From: $name <$email>" . "\r\n" .
           "Reply-To: $email" . "\r\n" .
           "X-Mailer: PHP/" . phpversion();

// Send email
$mailSent = mail($toEmail, 'New Contact Form Submission', $message, $headers);

if ($mailSent) {
  // Return success response
  http_response_code(200);
  echo 'Email sent successfully';
} else {
  // Return error response
  http_response_code(500);
  echo 'Unable to send email';
}
?>
