<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Set the recipient email address
    $to = "treyway.xtd@gmail.com";
    
    // Collect form data
    $from_email = $_POST["email"];
    $message = $_POST["message"];
    
    // Set email headers
    $headers = "From: $from_email\r\n";
    $headers .= "Reply-To: $from_email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    
    // Send email
    if (mail($to, "Message from Contact Form", $message, $headers)) {
        echo "Email sent successfully.";
    } else {
        echo "Failed to send email.";
    }
}
?>
