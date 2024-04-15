<?php
// Include the database connection file
include("../../../../database/connection.php");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the "approve" button is clicked
    if (isset($_POST['approve'])) {
        // Get the user ID from the form submission
        $userId = $_POST['userId'];

        // Update the user status to "Approved"
        $sql = "UPDATE user SET status = 'Approved' WHERE id = $userId";

        if ($conn->query($sql) === TRUE) {
            // Redirect back to the view page with a success message
            echo "<script>
                alert('The user has been Approved successfully!');
                window.location.href='../../users.php';
              </script>";
            exit();
        } else {
            // Redirect back to the view page with an error message
            header("Location: ../../users_view_page.php?status=error");
            exit();
        }
    }
    
    // Check if the "deny" button is clicked
    elseif (isset($_POST['deny'])) {
        // Get the user ID from the form submission
        $userId = $_POST['userId'];

        // Delete the user from the database
        $sql = "DELETE FROM user WHERE id = $userId";

        if ($conn->query($sql) === TRUE) {
            // Redirect back to the users list page with a success message
            echo "<script>
                alert('The user has been Denied!');
                window.location.href='../../users.php';
              </script>";
            exit();
        } else {
            // Redirect back to the users list page with an error message
            header("Location: ../../users.php?status=error");
            exit();
        }
    }
}
?>
