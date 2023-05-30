<?php
// Setting my email address
$toEmail = 'fatimanaveed201@gmail.com';

// recieving form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Setting email headers
$headers = "From: $name <$email>" . "\r\n" .   //  code to Set the "From" field to the name and email provided in the form
           "Reply-To: $email" . "\r\n" .      // code to Set the "Reply-To" field to the email provided in the form
           "X-Mailer: PHP/" . phpversion();    // code to Add information about the mailer

// Sending the email
$mailSent = mail($toEmail, 'New Contact Form Submission', $message, $headers);   // Send the email with the provided data

if ($mailSent) {
  // Return success response
  http_response_code(200);    // code to Set the HTTP response code to 200 (OK)
  echo 'Email sent successfully';   //code to Display a success message
} else {
  // Return error response
  http_response_code(500);    //  code to Set the HTTP response code to 500 (Internal Server Error)
  echo 'Unable to send email';    //  code to Display an error message
}
?>