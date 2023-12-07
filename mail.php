<?php
$to = "monayamhossain2018@gmail.com";
$subject = "Test";
$message = "this is a test message for checking.";

$sender_name = "mukul studio";
$sender_email = "sk6370101@gmail.com";

$headers = "From: $sender_name <$sender_email>\r\n";
$headers .= "Reply-To: $sender_name <$sender_email>\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// Send email
if(mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully!";
} else {
    echo "Email sending failed.";
}
?>
