<?php
// Include the database connection file
include("../../../../database/connection.php");

// Check if eBook ID is provided in the request
if(isset($_GET['id']) && is_numeric($_GET['id'])) {
    $ebookId = $_GET['id'];

    // Construct SQL query to delete the eBook
    $sql = "DELETE FROM ebooks WHERE ebook_id = $ebookId";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        // If deletion is successful, redirect to the eBooks page with a success message
        echo "<script>
                alert('E-Book deleted successfully!');
                window.location.href = '../../ebooks.php';
              </script>";
    } else {
        // If deletion fails, display an error message
        echo "Error deleting E-Book: " . $conn->error;
    }
} else {
    // If eBook ID is not provided or not valid, redirect to the eBooks page
    header("Location: ebooks.php");
}

// Close the database connection
$conn->close();
?>
