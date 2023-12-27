<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Set the recipient email address
    $to = "tsselvakumar@gmail.com"; // Replace with your actual email address

    // Set the subject of the email
    $email_subject = "New Form Submission: $subject";

    // Compose the email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Subject: $subject\n";
    $email_message .= "Message:\n$message";

    // Additional headers
    $headers = "From: $email\r\n";

    // Use the mail() function to send the email
    mail($to, $email_subject, $email_message, $headers);

    // Redirect the user to a thank you page
    header("Location: thank_you.html");
    exit();
}
?>
