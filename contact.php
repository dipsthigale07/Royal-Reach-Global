<?php
// Database connection
$host = "localhost";
$user = "root";       // XAMPP/WAMP default
$pass = "";           // XAMPP/WAMP default (empty)
$db   = "royal_reach_global";

$conn = new mysqli($host, $user, $pass, $db);

// Check DB connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Validate inputs
$name    = trim($_POST['name'] ?? '');
$email   = trim($_POST['email'] ?? '');
$phone   = trim($_POST['phone'] ?? '');
$message = trim($_POST['message'] ?? '');

if (
    empty($name) || strlen($name) < 3 ||
    !filter_var($email, FILTER_VALIDATE_EMAIL) ||
    !preg_match('/^\d{10}$/', $phone) ||
    strlen($message) < 5
) {
    echo "Invalid input";
    exit;
}

// Insert into database securely
$stmt = $conn->prepare("INSERT INTO contact_form (name, email, phone, message) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $name, $email, $phone, $message);

if ($stmt->execute()) {
    // Send email
    $to = "dipsthigale07@gmail.com"; // Change to your email
    $subject = "New Contact Form Submission - Royal Reach Global";
    $body = "
    You have received a new message from the contact form:

    Name: $name
    Email: $email
    Phone: $phone
    Message: $message
    ";
    $headers = "From: noreply@royalreachglobal.com\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Try sending email
    if (mail($to, $subject, $body, $headers)) {
        echo "success";
    } else {
        echo "Message saved, but email failed to send.";
    }

    // if (@mail($to, $subject, $body, $headers)) {
    //     echo "success";
    // } else {
    //     echo "success";
    // }
} else {
    echo "Error saving data.";
}

$stmt->close();
$conn->close();