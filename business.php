<?php
require('config.php'); // Include your database connection configuration

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $username = $_POST["username"];
    $password = $_POST["password"];
    $businessOwner = $_POST["business_owner"];
    $businessName = $_POST["business_name"];
    $contactNumber = $_POST["contact_number"];
    $address = $_POST["address"];
    $email = $_POST["email"];
    $businessType = $_POST["business_type"];

    // Hash the password for security (you should consider using a stronger hashing method)
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Prepare the SQL statement for inserting data into the 'business_users' table
    if ($stmt = $conn->prepare("INSERT INTO business_users (username, password, business_owner, business_name, contact_number, address, email, business_type) VALUES (?, ?, ?, ?, ?, ?, ?, ?)")) {
        $stmt->bind_param("ssssssss", $username, $hashedPassword, $businessOwner, $businessName, $contactNumber, $address, $email, $businessType);

        if ($stmt->execute()) {
            header("Location: vendor.html");
            echo "Registration successful for $username! Thank you for registering your business.<br>";
        } else {
            echo "Error executing the statement: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Error preparing the statement: " . $conn->error;
    }
} else {
    header("Location: business.html");
    exit();
}
?>
