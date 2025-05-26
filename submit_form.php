<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data and sanitize inputs
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Email recipient and subject
    $to = "tasnia.hussain@mail.utoronto.com";
    $subject = "New Contact Form Submission";

    // Email body
    $body = "You have received a new message from your contact form:\n\n";
    $body .= "Name: $name\n";
    $body .= "Email: $email\n\n";
    $body .= "Message:\n$message\n";

    // Headers for email
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        // Success message
        echo "Thank you, $name! Your message has been sent.";
    } else {
        // Failure message
        echo "Sorry, there was an error sending your message. Please try again.";
    }
} else {
    // Redirect to the contact page if accessed directly
    header("Location: contact.html");
    exit();
}
?>
