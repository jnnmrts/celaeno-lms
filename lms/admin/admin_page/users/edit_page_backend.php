<?php
include ("../../database/connection.php");

// Check if user ID is provided in the URL
if(isset($_GET['id'])) {
    $userId = $_GET['id'];

    // Fetch user data from the database based on the provided ID
    $sql = "SELECT * FROM user WHERE id = $userId";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $userData = $result->fetch_assoc();
    } else {
        echo "User not found";
        exit; // Stop further execution
    }
} else {
    echo "User ID not provided";
    exit; // Stop further execution
}

$conn->close();
?>