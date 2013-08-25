<?php

// Here we get all the information from the fields sent over by the form.
$email = $_POST['email'];

$to = 'info@brucemonroegarden.org';
$subject = 'New subscriber to BMCG';
$message = 'Email: ' . $email . ' has subscribed to Bruce Monroe Community Garden using the form on the comming soon page.

Bruce Monroe Community Garden
www.brucemonroegarden.org
';
$headers = 'From: info@brucemonroegarden.org' . "\r\n";

if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // this line checks that we have a valid email address
  mail($to, $subject, $message, $headers); //This method sends the mail.
  echo "<div class='success'>Thank you for subscribing.</div>"; // success message
}
else {
  echo "<div class='error'>Invalid Email, please provide an correct email.</div>"; //error message
}
?>