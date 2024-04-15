<?php
include("../../database/connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userId = $_POST['userId'];
    
    $sql = "DELETE FROM user WHERE id=$userId";
    if ($conn->query($sql) === TRUE) {
        echo "User deleted successfully";
    } else {
        echo "Error deleting user: " . $conn->error;
    }
    $conn->close();
}
?>
