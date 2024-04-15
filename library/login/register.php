<?php
include("../database/connection.php");

$errors = array(); // Array to store validation errors

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
    $middleName = mysqli_real_escape_string($conn, $_POST['middleName']);
    $lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
    $studentNumber = mysqli_real_escape_string($conn, $_POST['studentNumber']);
    $userType = mysqli_real_escape_string($conn, $_POST['userType']);
    $course = ($userType === 'student') ? mysqli_real_escape_string($conn, $_POST['course']) : null;
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $confirmPassword = mysqli_real_escape_string($conn, $_POST['confirmPassword']);

    // Validate form fields
    if (empty($firstName)) { $errors[] = "First Name is required"; }
    // Validate other fields similarly...

    // Check if passwords match
    if ($password != $confirmPassword) {
        $errors[] = "Passwords do not match";
    }

    // If no errors, proceed to insert data into database
    if (empty($errors)) {
        $sql = "INSERT INTO user (first_name, middle_name, last_name, student_number, userType, strand_track, email, username, password, status)
                VALUES ('$firstName', '$middleName', '$lastName', '$studentNumber', '$userType', '$course', '$email', '$username', '$password', 'Pending')";

        if ($conn->query($sql) === TRUE) {
            // Redirect to login page after successful registration
            echo "<script>
                    alert('Your account has been registered successfully! Please wait for admin approval.');
                    window.location.href = 'login.php';
                  </script>";
            exit();
        } else {
            $errors[] = "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>


<!-- HTML Registration Form -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card" style="background-color: rgba(227, 242, 253,0.7);">
                <div class="card-header text-center">
                    <h4 class="fw-bold">Register</h5>
                </div>
                <div class="card-body">
                    <!-- Display validation errors if any -->
                    <?php if (!empty($errors)) { ?>
                        <div class="alert alert-danger" role="alert">
                            <ul>
                                <?php foreach ($errors as $error) { ?>
                                    <li><?php echo $error; ?></li>
                                <?php } ?>
                            </ul>
                        </div>
                    <?php } ?>

                    <div class="text-center">
                        <h4>LIBRARY SYSTEM</h4>
                        <p class="text-dark">SHS in San Nicolas III, Bacoor City</p>
                    </div>

                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <div class="form-outline mb-4 d-flex">
                            <input type="text" name="firstName" class="form-control me-1" placeholder="First Name" required/>
                            <input type="text" name="middleName" class="form-control me-1" placeholder="Middle Name" />
                            <input type="text" name="lastName" class="form-control" placeholder="Last Name" required/>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="number" name="studentNumber" class="form-control" placeholder="Enter Student Number" />
                        </div>

                        <div class="form-outline mb-4">
						    <select class="form-select mb-3" name="userType" id="userType" onchange="showHideCourse()">
						        <option value="Student">Student</option>
						        <option value="Faculty">Faculty</option>
						        <option value="Staff">Staff</option>
						    </select>
						</div>


                        <div class="form-outline mb-4" id="courseSelection" style="display: none;">
                            <select class="form-select mb-3" name="course" aria-label=".form-select-lg example">
                                <option selected disabled>Select your course</option>
                                <option value="HUMSS">HUMSS</option>
                                <option value="HE">HE</option>
                                <option value="ICT">ICT</option>
                                <option value="GAS">GAS</option>
                            </select>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="email" name="email" class="form-control" placeholder="Email" required/>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="text" name="username" class="form-control" placeholder="Username" required/>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="password" name="password" class="form-control" placeholder="Enter Password" required />
                        </div>

                        <div class="form-outline mb-4">
                            <input type="password" name="confirmPassword" class="form-control" placeholder="Re-Enter Password" required />
                        </div>

                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary w-100">Register</button>
                        </div>

                        <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="login.php" class="text-primary"><u>Login here</u></a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    window.onload = function() {
        showHideCourse(); // Call the function when the page loads
    };

    function showHideCourse() {
        var userType = document.getElementById("userType").value;
        var courseSelection = document.getElementById("courseSelection");
        
        if (userType === "Student") {
            courseSelection.style.display = "block";
        } else {
            courseSelection.style.display = "none";
        }
    }
</script>
