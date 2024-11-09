<?php
/* PHP file that sends the email */

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "info@example.com"; // Your email address
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $headers = "From: " . $_POST['email'] . "\r\n" .
               "Reply-To: " . $_POST['email'] . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Email sending failed.";
    }
}
?>
