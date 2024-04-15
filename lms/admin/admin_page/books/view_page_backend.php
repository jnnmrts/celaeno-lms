<?php
// Include database connection file
include("../../database/connection.php");

// Check if book ID is set and valid
if(isset($_GET['id']) && is_numeric($_GET['id'])) {
    // Prepare SQL statement to fetch book details by ID
    $sql = "SELECT * FROM books WHERE book_id = ?";
    
    // Prepare and bind parameters
    if($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("i", $_GET['id']);
        
        // Execute the statement
        $stmt->execute();
        
        // Store result
        $result = $stmt->get_result();
        
        // Check if result has rows
        if($result->num_rows == 1) {
            // Fetch book details
            $row = $result->fetch_assoc();
?>

<?php
            // Close statement
            $stmt->close();
        } else {
            echo "<script>alert('Book not found');</script>";
            echo "<script>window.location.href = 'books.php';</script>";
        }
    } else {
        echo "<script>alert('Error: Could not prepare SQL statement');</script>";
        echo "<script>window.location.href = 'books.php';</script>";
    }
} else {
    echo "<script>alert('Invalid book ID');</script>";
    echo "<script>window.location.href = 'books.php';</script>";
  }

// Close database connection
$conn->close();
?>