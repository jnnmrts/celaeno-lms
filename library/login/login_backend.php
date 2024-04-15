<?php
session_start();
include("../database/connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT * FROM user WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if ($row['status'] == 'Pending') {
            $_SESSION['login_error'] = "Your account is pending approval. Please wait for admin approval.";
            header("Location: login.php");
            exit();
        }

        // Compare passwords
        if ($password == $row['password']) {
            // Set session variables or perform other actions for successful login
            $_SESSION['user_id'] = $row['user_id'];
            // Redirect user to dashboard or another page
            header("Location: dashboard.php");
            exit();
        } else {
            $_SESSION['login_error'] = "Invalid email or password.";
            header("Location: login.php");
            exit();
        }
    } else {
        $_SESSION['login_error'] = "Invalid email or password.";
        header("Location: login.php");
        exit();
    }
}

$conn->close();
?>
