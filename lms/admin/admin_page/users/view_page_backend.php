<?php
include ("../../database/connection.php");

// Check if user ID is provided in the URL query string
if(isset($_GET['id'])) {
    // Get the user ID from the URL query string
    $userId = $_GET['id'];

    // Fetch user data from the database based on the user ID
    $sql = "SELECT * FROM user WHERE id = $userId";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Retrieve user data
        $userData = $result->fetch_assoc();
    } else {
        // No user found with the provided ID
        echo "No user found with the provided ID.";
        exit;
    }
} else {
    // No user ID provided in the URL
    echo "No user ID provided in the URL.";
    exit;
}

$conn->close();
?>
