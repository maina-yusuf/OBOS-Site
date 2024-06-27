<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Compose email message
    $to = 'yusufmustapha498@gmail.com';
    $subject = 'Contact Form Submission: ' . $subject;
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";

    // Send email
    if (mail($to, $subject, $body)) {
        echo '<script>alert("Your message has been sent successfully.");</script>';
    } else {
        echo '<script>alert("Sorry, there was an error sending your message. Please try again later.");</script>';
    }
}

