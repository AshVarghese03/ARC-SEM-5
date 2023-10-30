<?php
require('config.php'); // Include your database connection configuration

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $userName = $_POST["name"];
    $userEmail = $_POST["email"];
    $productName = $_POST["product-name"];
    $userRating = $_POST["rating"];
    $userReview = $_POST["review"];

    // Prepare the SQL statement for inserting data
    $stmt = $conn->prepare("INSERT INTO reviews (name, email, product_name, rating, review_text, submission_date) VALUES (?, ?, ?, ?, ?, NOW())");

    // You can also add validation for the rating to ensure it's a valid option (1 to 5) to prevent SQL injection.
    if ($userRating < 1 || $userRating > 5) {
        echo "Invalid rating value";
    } else {
        $stmt->bind_param("sssis", $userName, $userEmail, $productName, $userRating, $userReview);

        // Execute the SQL statement
        if ($stmt->execute()) {
            // Redirect back to the page after submission or show a thank you message
            header("Location: home.php");
            exit();

            // Alternatively, you can display a thank you message here
            // echo "Thank you for your review, $userName!";
        } else {
            echo "Error: " . $stmt->error;
        }
    }

    // Close the prepared statement
    $stmt->close();
} else {
    // If the form was not submitted, redirect to the form page
    header("Location: home.php");
    exit();
}
?>
