<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>alert("Hi this is a test");</script>
</body>
</html>
<?php
//removes all HTML tags
$from_email = strip_tags($_POST['email']);
//removes all illegal characters from email
$from_email = filter_var($from_email, FILTER_SANITIZE_EMAIL);
//$address = htmlspecialchars($_POST['address']);

$contact = strip_tags($_POST['contact']);
$to_email = 'klebcourage@gmail.com, digitalexcelconsults@gmail.com';

$subject = "Digital Excel: ". strip_tags($_POST['subject']);
$message = htmlspecialchars("Sender's Name: " . $_POST['name'] . "\r\nSenders Email: " . $from_email . "\r\nSenders Contact: " . $contact. "\r\n\r\n" . $_POST['message']);

$headers = "From: info@digitalexcelconsults.com \r\n";
$headers .= "Reply-To:".$from_email."\r\n";
$headers .= "MIME-Version: 1.0 \r\n";
$headers .= "Content-type: text/plain; charset=utf-8 \r\n";
$headers .= "Bcc:klebcourage@gmail.com, osgun4christ@gmail.com, emiledennis47@gmail.com, klebcourage@yahoo.com, livingseedliberialabors@gmail.com";
echo mail($to_email, $subject, $message, $headers);


//acknowledgement email
$subject="Digital Excel Acknowledgment";
$headers = "From: donotreply@digtalexcelconsults.com \r\n";
$headers .= "Reply-To:donotreply@digtalexcelconsults.com\r\n";
$headers .= "MIME-Version: 1.0 \r\n";
$headers .= "Content-type: text/plain; charset=utf-8 \r\n";
$headers .= "Bcc:klebcourage@gmail.com, osgun4christ@gmail.com, emiledennis47@gmail.com, klebcourage@yahoo.com, livingseedliberialabors@gmail.com";

$message="Dear ".$_POST['name'].",\r\n
Thank you for reaching out to us and for joining us on today's broadcast, we believe you were blessed.\r\n\r\nYour message is acknowledged.
Expect to hear again from us soon.\r\n\r\n
Please keep listening to our daily broadcast, share so that other can be blessed with this truth.\r\n
God bless you.\r\n\r\n
RLL Radio";

$message="Subject: Re: Your Inquiry - Digital Excel Consults".

"Dear ".$_POST['name'].",\r\n\

Thank you for reaching out to Digital Excel Consults!\r\n\

This is an automatic acknowledgment to confirm that we have received your inquiry.
Our team is currently reviewing your message, and we will get back to you as soon as possible with a response.

If you have any urgent matters or additional information to provide, please feel free to reply to this email, and we will prioritize your request accordingly.

For immediate assistance, you can also contact us at the following phone numbers:

- Phone: (+231) 0770176168
- Phone: (+231) 0775504780
- Phone: (+231) 0555876216

Our team is dedicated to providing you with the best support and assistance. We appreciate your patience while we work to address your inquiry thoroughly.

Thank you for choosing Digital Excel Consults for your digital needs. We look forward to assisting you further.

Best regards,

Customer Support Department
Digital Excel Consults
Email: info@digitalexcelconsults.com
Website: digitalexcelconsults.com
";
mail($from_email, $subject, $message, $headers);