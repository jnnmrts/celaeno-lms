<?php
include ("../../database/connection.php");

// Form submission handling
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $firstName = $_POST['firstName'];
    $middleName = $_POST['middleName'];
    $lastName = $_POST['lastName'];
    $studentNumber = $_POST['studentNumber'];
    $strandTrack = $_POST['strandTrack'];
    $status = $_POST['status'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $userType = $_POST['userType'];

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Insert data into the database
    $sql = "INSERT INTO user (first_name, middle_name, last_name, student_number, strand_track, status, email, username, password, userType)
            VALUES ('$firstName', '$middleName', '$lastName', '$studentNumber', '$strandTrack', '$status', '$email', '$username', '$hashedPassword', '$userType')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
                alert('User added successfully!');
                window.location.href='users.php';
              </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
