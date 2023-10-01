<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check the admin's credentials (replace with your own logic)
    $adminUsername = $_POST["adminUsername"];
    $adminPassword = $_POST["adminPassword"];

    // Replace with your actual admin credentials and database validation
    $validAdminUsername = "admin";
    $validAdminPassword = "password";

    if ($adminUsername === $validAdminUsername && $adminPassword === $validAdminPassword) {
        // Authentication successful, redirect to admin page
        header("Location: admin");
        exit();
    } else {
        // Authentication failed, display an error message
        echo "Invalid admin credentials. Please try again.";
    }
}
?>
