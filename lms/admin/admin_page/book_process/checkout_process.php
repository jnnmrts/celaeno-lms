<?php
// Include database connection file
include("../../../../database/connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['checkout-btn'])) {
    // Get the borrow ID from the form submission
    $borrowId = $_POST['borrow_id'];

    // Update status to 'Check_out' in the borrow table
    $updateBorrowSql = "UPDATE borrow SET status = 'Check_out' WHERE borrow_id = $borrowId";
    if ($conn->query($updateBorrowSql) === TRUE) {
        // Increment times_borrowed in the books table
        $updateBooksSql = "UPDATE books SET times_borrowed = times_borrowed + 1 WHERE book_id = (SELECT book_id FROM borrow WHERE borrow_id = $borrowId)";
        if ($conn->query($updateBooksSql) === TRUE) {
            // Alert message for successful checkout
            echo "<script>
                alert('Book checked out successfully.');
                window.location.href = '{$_SERVER['HTTP_REFERER']}';
            </script>";
            exit();
        } else {
            echo "Error updating times_borrowed: " . $conn->error;
        }
    } else {
        echo "Error updating status: " . $conn->error;
    }
}

// Close database connection
$conn->close();
?>
