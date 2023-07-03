<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Set your email address where you want to receive the requests
    $to = "np2289@nyu.edu";
    
    // Subject of the email
    $subject = "Portfolio Access Request";
    
    // Compose the email body
    $body = "Name: " . $name . "\n";
    $body .= "Email: " . $email . "\n\n";
    $body .= "Message: \n" . $message;
    
    // Set additional headers
    $headers = "From: " . $email . "\r\n";
    
    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        // Email sent successfully
        echo "Thank you for your request. We will get back to you soon!";
    } else {
        // Email failed to send
        echo "Oops! Something went wrong. Please try again later.";
    }
} else {
    // Handle invalid requests (directly accessing contact.php)
    echo "Invalid request.";
}
?>
