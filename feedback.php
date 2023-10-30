<?php
require('config.php'); // Include your database connection configuration

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $userName = $_POST["userName"];
    $userEmail = $_POST["emailId"];
    $userFeedback = $_POST["userFeedback"];

    // Prepare the SQL statement for inserting data
    $stmt = $conn->prepare("INSERT INTO feedback (first_name, email, feedback_text, submission_date) VALUES (?, ?, ?, NOW())");

    // You can add last_name as well if you have that in your form
    $stmt->bind_param("sss", $userName, $userEmail, $userFeedback);

    // Execute the SQL statement
    if ($stmt->execute()) {
        header("Location: feedback.html");

        echo "Thank you for your feedback, $userName!<br>";
        echo "Email: $userEmail<br>";
        echo "Feedback: $userFeedback<br>";

    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the prepared statement
    $stmt->close();
} else {
    // If the form was not submitted, redirect to the feedback form page
    header("Location: feedback.html");
    exit();
}
?>
