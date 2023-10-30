<?php
@include 'config.php';
session_start();

if (isset($_POST['submit'])) {
    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $contact_number = mysqli_real_escape_string($conn, $_POST['contact_number']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    $insert_query = "INSERT INTO contactus (first_name, last_name, email, contact_number, message) VALUES ('$first_name', '$last_name', '$email', '$contact_number', '$message')";

    if (mysqli_query($conn, $insert_query)) {
        // Successfully inserted into the database
        $_SESSION['success_message'] = 'Your message has been sent successfully!';
        header('location: contact.php');
    } else {
        // Handle the error
        $_SESSION['error_message'] = 'Error: ' . mysqli_error($conn);
        header('location: contact.php');
    }
}
?>
