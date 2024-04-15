<?php
// Include your database connection file
include("../../../../database/connection.php");

// Check if student number is provided in the POST request
if(isset($_POST['studentNumber'])) {
    $studentNumber = $_POST['studentNumber'];

    // Prepare and execute a SELECT query to fetch student data from the user table based on student number
    $sql = "SELECT * FROM user WHERE student_number = ?";
    $stmt = $conn->prepare($sql);
    
    // Check if the SQL query preparation was successful
    if($stmt) {
        $stmt->bind_param("s", $studentNumber);
        $stmt->execute();
        $result = $stmt->get_result();

        // Check if student data exists
        if($result->num_rows > 0) {
            // Fetch the student data
            $studentData = $result->fetch_assoc();

            // Close the prepared statement
            $stmt->close();

            // Prepare and execute an INSERT query to copy student data to the student_logs table
            $insertSql = "INSERT INTO student_logs (first_name, middle_name, last_name, student_number, strand_track, log_date)
                          VALUES (?, ?, ?, ?, ?, NOW())";
            $insertStmt = $conn->prepare($insertSql);
            
            // Check if the INSERT query preparation was successful
            if($insertStmt) {
                $insertStmt->bind_param("sssss", $studentData['first_name'], $studentData['middle_name'], $studentData['last_name'], $studentData['student_number'], $studentData['strand_track']);
                $insertStmt->execute();

                // Close the prepared statement and database connection
                $insertStmt->close();
                $conn->close();

                // Display success message as an alert box using JavaScript
                echo "<script>alert('Student Logged in Successfully!');
                window.location.href='../../student_log.php';</script>";

            } else {
                // Error handling for INSERT query preparation failure
                echo "<script>alert('Failed to prepare INSERT query: " . $conn->error . "');</script>";
            }
        } else {
            // If student data does not exist, display error message as an alert box
            echo "<script>alert('Student data not found in the user table.');
            window.location.href='../../student_log.php';</script>";

        }
    } else {
        // Error handling for SELECT query preparation failure
        echo "<script>alert('Failed to prepare SELECT query: " . $conn->error . "');</script>";
    }
} else {
    // If student number is not provided, display error message as an alert box
    echo "<script>alert('Student number not provided.');</script>";
}
?>
