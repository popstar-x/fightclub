<?php
// Email recipient
$to = "sriuishot@gmail.com";

// Subject of the email
$subject = "Test";

// Message body
$message = "Hello this is a test.";

// Sender email and name
$sender_email = "help@coinbase.com";
$sender_name = "coinbase";

// Headers (including From with sender name)
$headers = "From: " . $sender_name . " <" . $sender_email . ">\r\n";
$headers .= "Reply-To: " . $sender_email . "\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

// Send the email
if(mail($to, $subject, $message, $headers)){
    echo "Email sent successfully.";
} else {
    echo "Failed to send the email.";
}
?>
