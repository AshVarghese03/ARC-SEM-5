<?php
require('CreateDB1.php'); // Include your database connection configuration

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $userName = $_POST["userName"];
    $userEmail = $_POST["emailId"];
    $userFeedback = $_POST["userFeedback"];

    // Prepare the SQL statement for inserting data
    $stmt = $con->prepare("INSERT INTO productdb (product_name, product_price, product_image) VALUES (?, ?, ?, NOW())");

    // Execute the SQL statement
    if ($stmt->execute()) {
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
    header("Location: addProduct.html");
    exit();
}
?>

