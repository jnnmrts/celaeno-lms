<?php
include ("../../../../database/connection.php");

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $userId = $_POST['userId'];
    $firstName = $_POST['editFirstName'];
    $middleName = $_POST['editMiddleName'];
    $lastName = $_POST['editLastName'];
    $studentNumber = $_POST['editStudentNumber'];
    $strandTrack = $_POST['editStrandTrack'];
    $email = $_POST['editEmail'];
    $username = $_POST['editUsername'];
    $userType = $_POST['editUserType'];

    // Update user data in the database
    $sql = "UPDATE user SET 
            first_name = '$firstName', 
            middle_name = '$middleName', 
            last_name = '$lastName', 
            student_number = '$studentNumber', 
            strand_track = '$strandTrack',
            email = '$email',
            username = '$username',
            userType = '$userType'
            WHERE id = $userId";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
                alert('User details updated successfully!');
                window.location.href='../../users.php';
              </script>";
    } else {
        echo "Error updating user details: " . $conn->error;
    }
}

$conn->close();
?>
