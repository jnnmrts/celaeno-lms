<?php
// Include database connection file
include("../../../../database/connection.php");

// Check if the form is submitted and the 'book_id' parameter is set
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['checkin-btn']) && isset($_POST['book_id'])) {
    // Sanitize the book ID
    $bookId = mysqli_real_escape_string($conn, $_POST['book_id']);

    // Update the status of the book to 'Check_in'
    $sql = "UPDATE borrow SET status = 'Check_in' WHERE borrow_id = '$bookId'";
    if ($conn->query($sql) === TRUE) {
        // If the update is successful, display a success message
        $message = "Book checked in successfully.";
    } else {
        // If there is an error, display an error message
        $message = "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();

    // Output JavaScript to display an alert box with the message
    echo "<script>
            alert('$message');
            // Redirect back to the previous page
            window.history.back();
          </script>";
}
?>
