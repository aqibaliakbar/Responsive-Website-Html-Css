<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $email_from = 'aqibaliakbar@gmail.com';
    $email_subject = 'New Form Submission';
    $email_body = "User Name: $name\n" . 
                  "User Email: $visitor_email\n" . 
                  "Subject: $subject\n" . 
                  "User Message: $message\n";

    $to = 'aqibaliakbar@gmail.com';
    $headers = "From: $email_from\n";
    $headers .= "Reply-To: $visitor_email\n";

    mail($to, $email_subject, $email_body, $headers);

    header("Location: thank_you.html"); // Redirect to a thank you page
} else {
    // Handle invalid requests
    header("Location: error.html");
}
?>
