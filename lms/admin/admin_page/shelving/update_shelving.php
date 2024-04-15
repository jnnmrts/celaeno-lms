<?php
// Include your database connection file
include("../../database/connection.php");

// Check if shelving name is provided in the POST request
if(isset($_POST['editShelvingName'])) {
    $editShelvingName = $_POST['editShelvingName'];

    // Prepare and execute an UPDATE query to update the shelving name in the shelving table
    $sql = "UPDATE shelving SET shelving_name = ? WHERE shelving_name = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $editShelvingName, $editShelvingName); // For demonstration, updating the same shelving name as before
    $stmt->execute();

    // Check if the UPDATE query was successful
    if($stmt->affected_rows > 0) {
        // Close the prepared statement and database connection
        $stmt->close();
        $conn->close();

        // Display a success alert
        echo "<script>alert('Shelving name updated successfully.'); window.location.href = 'catalog.php';</script>";
        exit();
    } else {
        // Display an error alert
        echo "<script>alert('Failed to update shelving name. Please try again.'); window.location.href = 'catalog.php';</script>";
        exit();
    }
} else {
    // Display an error alert if shelving name is not provided
    echo "<script>alert('Shelving name not provided.'); window.location.href = 'catalog.php';</script>";
    exit();
}
?>
