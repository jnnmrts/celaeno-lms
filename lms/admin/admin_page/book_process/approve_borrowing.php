<?php
// Include database connection file
include("../../../../database/connection.php");

if(isset($_POST['approve'])) {
    // Get the borrowing ID to be approved
    $borrowId = $_POST['approve'];

    // Update the status of the borrowing to 'Approved'
    $sql = "UPDATE borrow SET status = 'Approved' WHERE borrow_id = $borrowId";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Borrowing has been approved.');</script>"; // Display an alert
        header("Location: ../../book_process.php"); // Redirect to the page where borrowings are displayed
        exit;
    } else {
        echo "Error updating borrowing status: " . $conn->error;
    }
}

// Close database connection
$conn->close();
?>
